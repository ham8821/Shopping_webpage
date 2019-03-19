<?php

        session_start();

        $userID=$_SESSION['userID'];
        $newaddress = $_REQUEST['newaddress'];

        //create connection
        $db= mysqli_connect('localhost','root','','sup');

            // or die("failed to query database " .mysql_error());

                    $sql= "UPDATE user SET `address`='$newaddress' WHERE `userID`=$userID";
                    $result=mysqli_query($db,$sql);
            if($result === true){
                //   $success_message = "Credit card has been added successfully.";
                echo 1;
                //   header('Location: ../myaccount.php');
            }
            else{
                echo 2;
                // echo "Error: ".$sql."<br>".$db->error;
            } 
            $db-> close();

?>