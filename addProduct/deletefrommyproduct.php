<?php 
     session_start();  
     $postid = $_REQUEST['postIDbox'];
     echo $_REQUEST['postIDbox'];
     $connect = mysqli_connect("localhost", "root", "", "sup");  
    //  $sql="DELETE from products WHERE postID='".$postID."'";
         $query="SELECT * from mycartitem WHERE postID=$postid";
         $res= mysqli_query($connect,$query);
         $select_array=array_fetch_all($res);
        if(!isset($select_array)){
            $qr="DELETE from productimgs where postID=$postid";
            mysqli_query($connect,$qr);
         }
         else{
             $sql="DELETE from mycartitem WHERE postID=$postid";
             $result = mysqli_query($connect,$sql);
             if ($connect->query($sql) === TRUE) {
                echo 1;
                 }
                 else{
                     echo "Error: " . $sql . "<br>" . $connect->error;
                 }
         }

    
    ?>