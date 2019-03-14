<?php
    session_start();
  
     $db= mysqli_connect("localhost","root","","sup");
    if(isset($_POST['Addcreditcard'])){
        $email=$_SESSION['email'];
        $Ccnumber=$_POST['Ccnumber'];
        $Vdate=$_POST['Vdate'];
        $Nameoncard=$_POST['Nameoncard'];
        $CVV=$_POST['CVV'];

        $readSql="SELECT userID FROM user where email =$email";
        $result= mysqli_query($db,$readSql);
        echo $result;
        $sql="INSERT INTO usercc('cardID','userID','Ccnumber','Vdate','Nameoncard','CVV') VALUES ('1','$result','$Ccnumber','$Vdate','$Nameoncard','$CVV')";
        $result2=mysqli_query($db,$sql);


     $sql="INSERT INTO usercc('Ccnumber','Vdate','Nameoncard','CVV') VALUES ('$Ccnumber','$Vdate','$Nameoncard','$CVV')";
      /* if(mysqli_query($connection,$sql))
       {   $success_message = "Password is reset successfully.";
           echo "Your credit card has been added!";
           header('Location: ../myaccount.php');
       }
       else{
           echo mysqli_error($connection);
       }  */
    }