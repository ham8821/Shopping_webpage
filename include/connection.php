<?php
 session_start();

$useremail= filter_input(INPUT_POST,'useremail');
$password= filter_input(INPUT_POST,'password');
    if(!empty($useremail)){
        if (!empty($password)){
                $localhost="localhost";
                $dbusername="root";
                $dbpassword="";
                $dbname="sup";

                // $db= mysqli_connect("localhost","root","","sup");

                //create connection
                $conn= new mysqli($localhost, $dbusername, $dbpassword, $dbname);

                        if(mysqli_connect_error()){
                            die('Connect Error(' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                        }
                    // or die("failed to query database " .mysql_error());
                        else{
                            $sql="SELECT * from user where email='" . $useremail . "' and password='". $password ."'";
                            $query=mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($query);
                            $firstName = $row[1];
                            $lastName= $row[2];
                            $address = $row[4];
                            
                        // $row = mysql_fetch_array($query);
                            while ($row){
                                 echo "Login successfully";
                                
                                header("location: ../index_loginsuccess.php");

                                $_SESSION['email'] = $useremail;
                                $_SESSION['address'] = $address;
                                $_SESSION['firstName'] = $firstName;
                                $_SESSION['lastName'] = $lastName;
                            }
                        }
        }                           
        else{
                    echo "Password should not be empty";
                    die();
        }
    
    }

    else{
        echo "Email should not be empty";
        die();
    }

?>      
