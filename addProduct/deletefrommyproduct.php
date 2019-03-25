<?php 
     session_start();  
     $postid = $_POST['postIDbox'];
     echo $_POST['postIDbox'];
     $connect = mysqli_connect("localhost", "root", "", "sup");  
    //  $sql="DELETE from products WHERE postID='".$postID."'";

     $sql="DELETE from productimgs WHERE postID=$postid";
     $result = mysqli_query($connect,$sql);
     if ($connect->query($sql) === TRUE) {
       echo 1;
        }
        else{
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    ?>