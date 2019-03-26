<?php
               //    To check the error--------------------------------------------------------------------------------------------------
               //    ini_set('display_errors',1);
               //    error_reporting(E_ALL);
                    // $selected_val = $_POST['paymentmethod']; 
                     $connect = mysqli_connect("localhost", "root", "", "sup");  
                     $mycartID=$_REQUEST["mycartID"];
                     $totalprice= $_REQUEST["totalprice"];
                     $selected_val = $_REQUEST["selected_val"];
                     $sql="INSERT INTO payment (`type`,`date`, `mycartID`, `amount`) VALUES ('$selected_val',now(),$mycartID,'$totalprice')";
                     $result = mysqli_query($connect, $sql); 
                      
                     if($result === true){
                       echo 1;
                       //  echo '<script language="javascript">';
                        //  echo "alert('Your payment has been completed!')";
                        // echo '</script>';
                         //   header('Location: ../myaccount.php');
                        }else{
                         //echo '<script language="javascript">';
                         echo "alert('failed')";
                         //echo '</script>';
                            
                        } 
                        //$connect-> close();
                  ?>