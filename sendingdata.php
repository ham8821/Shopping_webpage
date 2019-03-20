<?php
    session_start();


    $userID=$_SESSION['userID'];
    $CVV=$_REQUEST['cvv'];
    $Vdate = $_REQUEST['Vdate'];
    $Ccnumber = $_REQUEST['Ccnumber'];
    $Nameoncard = $_REQUEST['noc'];

 
    $db= mysqli_connect('localhost','root','','sup');

      

 $sql="INSERT INTO usercc (userID, Ccnumber, Vdate, Nameoncard, CVV)
                VALUES ($userID, $Ccnumber, '$Vdate','$Nameoncard', $CVV)";

        $result = mysqli_query($db,$sql);

     if($result === true){
        //   $success_message = "Credit card has been added successfully.";
           echo 1;
        //   header('Location: ../myaccount.php');
       }else{
           echo 2;
           
       } 
       $db-> close();

       ?>

