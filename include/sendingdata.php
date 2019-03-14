<?php
    require_once('connect.php');
    if(isset($_POST['Addcreditcard'])){
        $Ccnumber=$_POST['Ccnumber'];
        $Vdate=$_POST['Vdate'];
        $Nameoncard=$_POST['Nameoncard'];
        $CVV=$_POST['CVV'];
       $sql="INSERT INTO usercc('Ccnumber','Vdate','Nameoncard','CVV') VALUES ('$Ccnumber','$Vdate','$Nameoncard','$CVV')";
       if(mysqli_query($connection,$sql))
       {
           echo "Your credit card has been added!";
           header('Location: ../myaccount.php');
       }
       else{
           echo mysqli_error($connection);
       }
    }