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
 
 $result= mysqli_query($db,$sql);
 $_SESSION['email']=$email;
 $_SESSION['firstname']=$firstname;
 $_SESSION['lastname']=$lastname;
 $_SESSION['password']=$password;
 $_SESSION['address']=$address;



            if($result===true){
              // echo "<script type='text/javascript'>alert('Thanks you! Now you can log in to explore our website!');
              // window.location='../index.php';
              // </script>";
                $query="SELECT * FROM user WHERE email='$email'";
                // $res= mysqli_query($db,$query);
                // $row=mysqli_fetch_all($res, MYSQLI_ASSOC);
                // $userID=$row[0];
                 
                   $res= mysqli_query($db,$query);             
                while($row = mysqli_fetch_all($res)) {

                  $userID=$row[0][0];

                  $qr="INSERT INTO mycart(buyerID) VALUES($userID)";
                  $r= mysqli_query($db,$qr);
                  if($r===true){
                    echo "<script type='text/javascript'>alert('Thanks you! Now you can log in to explore our website!');
                    window.location='../index.php';
                    </script>";      
                  }
                
                }


              
            }
            else{
              echo "<script type='text/javascript'>alert('Oops, You failed to register. please contact us for help.');
              window.location='../index.php';
              </script>";
            }

  


   
  }
?>
