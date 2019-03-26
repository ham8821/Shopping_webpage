<?php
    session_start();
//upload img here
    $target_dir = '../tmp/';
    if( isset($_POST['submit'])) {
        $total_files = count($_FILES['file']['name']);
        for($x = 0; $x < $total_files; $x++) {
            // Check if file is selected
            if(isset($_FILES['file']['name'][$x])) {
                $original_filename = $_FILES['file']['name'][$x];
                $target = $target_dir . basename($original_filename);
                $tmp = $_FILES['file']['tmp_name'][$x];
                move_uploaded_file($tmp, $target);
            }
        }
    }

//post product to DB here
    include ('../connection.php');

    //check the name of session here
    $sellerid = $_SESSION['userID'];

    $productName = $_POST['productName'];
    $subcategoryid = $_POST['subcategoryid'];
    // $subcategoryid = $_POST['subcategoryid'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $imgsrc = basename($_FILES['file']['name'][0]);

    $newpost_sql = "INSERT INTO `products`(`postDate`, `productName`, `sellerID`, `subcategoryID`, `Price`, `quantity`,  `imgSRC`) VALUES (now(),'$productName',$sellerid,$subcategoryid,$price,$quantity,'$imgsrc')";
    // $newpost_result = mysqli_query($conn, $newpost_sql);

    if ($conn->query($newpost_sql) === TRUE) {
       
        echo '<script language="javascript">';
        echo 'alert("your product is now on the web page!")';
        echo '</script>';
       header("Location: ../addProduct/myproduct.php");
        // echo 'your product is now on the web page!';
        // location('../addProduct/myproduct.php');
    } else {
        echo '<script language="javascript">';
        echo 'alert("Oops, something went wrong. please try again!")';
        echo '</script>';
    }
   // echo "<br>$productName - $subcategoryid - $price - $quantity";
    
?> 
           
      
  
    
      
    
