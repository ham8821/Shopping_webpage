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
                            $userID= $row[0];
                        // $row = mysql_fetch_array($query);
                            if ($row){
                                 echo "Login successfully";
                                
                                header("location: ../index_loginsuccess.php");

                                $_SESSION['email'] = $useremail;
                                $_SESSION['address'] = $address;
                                $_SESSION['firstName'] = $firstName;
                                $_SESSION['lastName'] = $lastName;
                                $_SESSION['userID']=$userID;

                                echo "$useremail.$address.$firstName.$lastName.$userID";
                                header('Location: ../index_loginsuccess.php');
                            }
                            else{
                                echo '<script language="javascript">';
                                echo 'alert("Your email or password is not valid. Please check again.")';
                                echo '</script>';
                                // header('Location: ../index.php');
                                echo '<script type="text/javascript">' . "\n";
                                echo 'window.location="../index.php";';
                                echo '</script>';
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
