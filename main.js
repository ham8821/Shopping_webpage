
 
 /*----------------service hour pop up----------------------------------------*/
  function myFunction() {
    alert("Our service hour is"+"\n"+""+"\n"+"Monday: 9AM-4PM"+"\n"+"Tuesday: 9AM-4PM"+"\n"+"Wednesday: 9AM-4PM"+"\n"+"Thursday: 9AM-4PM"+"\n"+"Friday: 9AM-4PM"+"\n"+"Saturday: 10AM-1PM"+"\n"+"Sunday: Closed");
    
    
 }
  /*----------------category form----------------------------------------*/
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  
  // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();

  /*----------------registration form----------------------------------------*/
  // $(document).ready(function(){

  //   $('.input').focus(function(){
  //     $(this).parent().find(".label-txt").addClass('label-active');
  //   });
  
  //   $(".input").focusout(function(){
  //     if ($(this).val() == '') {
  //       $(this).parent().find(".label-txt").removeClass('label-active');
  //     };
  //   });
  
  // });
  /*-----directing to the top of the main page by default----------------------------------------------*/
  window.onload = function() {document.body.scrollTop = document.documentElement.scrollTop = 0;};
  $(window).on('beforeunload', function() {
    $(window).scrollTop(0);
 });
 $(document).ready(function(){
  $('html').animate({scrollTop:0}, 1);
  $('body').animate({scrollTop:0}, 1);
});


/*---------------------------------------contact us validation------------------------------------------------------------------------------*/

function contactusValid() {

  var name1 = document.getElementById("name1").value;
  var name2 = document.getElementById("name2").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var submitOK = "true";

  //to check which credit card was selected (visa, mastercard or amex)

  if (name1.length < 1 || name1.length > 30) {
      alert("The first name must have at least 2 characters but no more than 30 characters");
      //if the First name is empty or incomplete, background changes to red
      $("#name1").css("background", "#DBA159");
      submitOK = "false";
  }
  if (name2.length < 1 || name2.length > 30) {
      alert("The last name must have at least 2 characters but no more than 30 characters");
      //if the Last name is empty or incomplete, background changes to red
      $("#name2").css("background", "#DBA159");
      submitOK = "false";
  }
  if (email.length < 1 || email.length > 40) {
      alert("Your address must have at least 2 characters but no more than 40 characters");
      //if the Address is empty or incomplete, background changes to red
      $("#email").css("background", "#DBA159");
      submitOK = "false";
  }
  if (message.length < 1 || message.length > 500) {
      alert("Your email must have at least 2 characters but no more than 500 characters");
      //if the email is empty or incomplete, background changes to red
      $("#message").css("background", "#DBA159");
      submitOK = "false";
  }
 
  if (submitOK == "false") {
      return false;
  } else {
      alert("thank you for sharing your opinions ! We will get back to you as soon as possible!");
      return true
  }
}

//Changes the input background to color white when Reset button is pressed
$("#reset2").click(function () {

  $("#fname2").css("background", "white");
  $("#lname2").css("background", "white");
  $("#address").css("background", "white");
  $("#email2").css("background", "white");
  $("#CC").css("background", "white");

});

/*---------------------------------------log in validation------------------------------------------------------------------------------*/
//log in validation function
function loginValid(){
var useremail= document.getElementById("useremail").value;
var password= document.getElementById("password").value;
remembercheck.checked= false;
var submitOK = "true";
if (useremail.length < 1 || useremail.length > 40) {
  alert("Your email must have at least 2 characters but no more than 40 characters");
  $("#useremail").css("background", "#DBA159");
  submitOK = "false";
}
if (password.length < 1 || password.length > 40) {
  alert("The password may contain more than 1 less than 40 character");
  $("#password").css("background", "#DBA159");
  submitOK = "false";
}


}
/*---------------------------------------password reset validation------------------------------------------------------------------------------*/
/*function passwordreset(){
  var useremail= document.getElementById("useremail").value;
  var submitOK = "true";
  if (useremail.length < 1 || useremail.length > 40) {
    alert("Your email must have at least 2 characters but no more than 40 characters");
    $("#useremail").css("background", "#DBA159");
    submitOK = "false";
  }
  if (submitOK == "false") {
    return false;
  } else {
    alert("Reset instruction mail has been sent to  "+useremail);
    return true;
  }

}
*/


function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Email is required!";
		return false;
	}
	return true;
}

/*---------------------------------------password reset validation------------------------------------------------------------------------------*/

function validate_password_reset() {
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!";
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!";
		return false;
	}
	
	return true;
}

/*---------------------------------------password reset validation------------------------------------------------------------------------------*/
function validate_password_reset2() {

  if((document.getElementById("email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please confirm your email address!";
		return false;
	}
	if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!";
		return false;
	}
	if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!";
		return false;
	}
	
	return true;
}

/*---------------------------------------cc detail validation------------------------------------------------------------------------------*/
function validate_creditcard_update() {
        var email= document.getElementById("email");
        var Ccnumber= document.getElementById("Ccnumber");
        var Vdate= document.getElementById("Vdate");
        var Nameoncard= document.getElementById("Nameoncard");
        var CVV= document.getElementById("CVV");
 
 
        if (!email.checkValidity()) {
          document.getElementById("demo").innerHTML = email.validationMessage;
        } else {
          document.getElementById("demo").innerHTML = "Input OK";
        } 
 
        if (!Ccnumber.checkValidity()) {
          document.getElementById("demo").innerHTML = Ccnumber.validationMessage;
        } else {
          document.getElementById("demo").innerHTML = "Input OK";
        } 
 
        if (!Vdate.checkValidity()) {
          document.getElementById("demo").innerHTML = Vdate.validationMessage;
        } else {
          document.getElementById("demo").innerHTML = "Input OK";
        } 
 
        if (!Nameoncard.checkValidity()) {
          document.getElementById("demo").innerHTML = Nameoncard.validationMessage;
        } else {
          document.getElementById("demo").innerHTML = "Input OK";
        } 

        if (!CVV.checkValidity()) {
          document.getElementById("demo").innerHTML = CVV.validationMessage;
        } else {
          document.getElementById("demo").innerHTML = "Input OK";
        } 

}
/*---------------------------------------address validation------------------------------------------------------------------------------*/
function updateaddress() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //location.assign("include/updateaddress.php");
          console.log(xmlhttp);
        if (xmlhttp.responseText == 1)
        alert("your address updated");
       
      }
      else{
        //alert("failed");
        }
      }
      var newaddress= document.getElementById('newaddress').value;
      xmlhttp.open("GET", "include/updateaddress.php?newaddress="+newaddress, true);
     xmlhttp.send();
    }

/*----------------------------------------------------------------------------------------------------------------------------------------*/
function addcreditcard1() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        // location.assign("sendingdata.php");
          console.log(xmlhttp);
        if (xmlhttp.responseText == 1)
          alert("your card added");
      }
      else{
         // alert("failed"); 
      }

   }
    var ccnumber1 = document.getElementById('Ccnumber').value;
    var nameoncard1 = document.getElementById('Nameoncard').value;
    var cvv1 = document.getElementById('CVV').value;
    var validdate1 = document.getElementById('Vdate').value;


  xmlhttp.open("GET", "sendingdata.php?Ccnumber="+ccnumber1+"&Vdate="+validdate1+"&noc="+nameoncard1+"&cvv="+cvv1, true);
  xmlhttp.send();
}

// function alertout () {
//     var ccnumber1 = document.getElementById('Ccnumber').value;
//     var nameoncard1 = document.getElementById('Nameoncard').value;
//     var cvv1 = document.getElementById('CVV').value;
//     var validdate1 = document.getElementById('Vdate').value;
//     // alert(ccnumber);
//     // alert(nameoncard);
//     // alert(cvv);
//     // alert(validdate);

//     document.getElementById('t1').innerHTML = ccnumber1;
//     document.getElementById('t2').innerHTML = nameoncard1;
//     document.getElementById('t3').innerHTML = cvv1;
//     document.getElementById('t4').innerHTML = validdate1;

// }
// function function1(ccnum) {
//   $_GLOBAL['ccnumber'] = ccnum;
// }
// function function2(vd) {
//   $_GLOBAL['validdate'] = vd;
// }
// function function3(noc) {
//   $_GLOBAL['nameoncard'] = noc;
// }
// function function4(cvv) {
//   $_GLOBAL['cvv'] = cvv;
// }