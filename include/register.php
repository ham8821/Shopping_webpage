<?php
 session_start();
 //connet to database
 $db= mysqli_connect("localhost","root","","sup");

 if(isset($_POST['submit'])){
 
    $firstname= mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname= mysqli_real_escape_string($db,$_POST['lastname']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password= mysqli_real_escape_string($db,$_POST['password']);
  
    
    $address= mysqli_real_escape_string($db,$_POST['address']);
    /*$Ccnumber= mysqli_real_escape_string($db,$_POST['Ccnumber']);
    $vdate= mysqli_real_escape_string($db,$_POST['vdate']);
    $cardholder= mysqli_real_escape_string($db,$_POST['cardholder']);
    $cvv= mysqli_real_escape_string($db,$_POST['cvv']);*/

   
    //$mypassword = md5 ($_POST['password']);
    
  $sql="INSERT INTO user(firstName, lastName, password, address, email) values ('$firstname','$lastname','$password','$address','$email')"; 
 
  mysqli_query($db,$sql);
 /*  $result=mysqli_multi_query($db,$sql);
  if($result){
        do{
          if(($result=mysqli_sotre_result()))
        }
  }
   
   $readSql="SELECT userID FROM user where email =$email"
   $sql2="INSERT INTO usercc('userID','Ccnumber','Vdate','Nameoncard','CVV') VALUES ('$readSql','$Ccnumber','$vdate','$cardholder','$cvv')";
   mysqli_query($db,$sql2);
   */
  $_SESSION['message']= "Done!";
  $_SESSION['email']=$email;
  $_SESSION['firstname']=$firstname;
  $_SESSION['lastname']=$lastname;
  $_SESSION['password']=$password;
  $_SESSION['address']=$address;
  header("location: ../index_loginsuccess.php"); //redirect to home page
    
  


   
  }
?>
