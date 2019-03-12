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
    $Ccnumber= mysqli_real_escape_string($db,$_POST['Ccnumber']);
    $vdate= mysqli_real_escape_string($db,$_POST['vdate']);
    $cardholder= mysqli_real_escape_string($db,$_POST['cardholder']);
    $cvv= mysqli_real_escape_string($db,$_POST['cvv']);

   
    $mypassword = md5 ($_POST['password']);
   $sql="INSERT INTO user(firstName, lastName, password, address, email, Ccnumber) values ('$firstname','$lastname','$password','$address','$email','$Ccnumber')";
   mysqli_query($db,$sql);
   
  $_SESSION['message']= "Done!";
  $_SESSION['email']=$email;
  header("location: ../index.php"); //redirect to home page
    
  


   
  }
?>
