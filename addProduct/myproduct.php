<?php
//   include '../dbconnection.php';  
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../Css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Serif" rel="stylesheet">
	<script>
     function displayMyproduct(){
       


     }
   </script>

    <title>Products</title>
</head>
<body>
    <!----------------- topnav -------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light mynavbar">
                <a class="navbar-brand" id="navbar" href="#">Thrifters</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="../index_loginsuccess.php">Home <span class="sr-only">(current)</span></a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link" href="../myaccount.php">My Account</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="myFunction(); return false">Service hour</a>
                      </li>
                  </ul>
                </div>
              </nav>
    <!-- --------------------heading---------------------"----------- -->
    <br>
    <div class="mainword">   
            <center>    <h1 style="
                font-family: 'Merriweather', serif;
            " font-family="'Merriweather', serif" ;="" >Welcome to my Product</h1></center>
    </div>
    <br>
     <div class="container" id="mainbox"> 
            <div class="row">
            <div class="contentbox col-12">                              
                        <img class="mainpic" src="../images/shopping1.jpg" alt="accountmain">
                        <a href="#myproduct" onclick="displayMyproduct()" ><i id="pointbutton" class="fa fa-angle-double-down"  >Go to my product</i></a>

                </div>       
            </div>
     </div>

<!----------------------------------------------------- my product list -------------------------------------------------------------->
<br>
<section id="myproduct">
  <center>  <h3>My Products</h3>  </center>
  <div class="container">
      <div class="row" id="contentbox">
        
     
<!-- sellecting the colums to show the data on the screen -->
  <?php
    $sellerID= $_SESSION['userID'];
    $connect = mysqli_connect("localhost","root","","sup");
    $sql="SELECT imgSRC,productName, price, postDate, sellerID FROM products WHERE sellerID='".$sellerID."'";
   

    $result = mysqli_query($connect,$sql);
    // put fetched data in to each row
    $row= mysqli_fetch_all($result); 
  
    //the number of row in database
    for ($a = 0; $a < count($row); $a++) {
       

        //and start to attach one by one
        //4 products per row
        echo "<div class='productinfo'>";
       
        //image of a product
        $imgpath = '../images/';
        echo "<div class='image-fluid' style='width: 280px; max-width=270px; height:200px; background-image: url(".$imgpath.$row[$a][0].")'>";
        echo "</div>";


        //Product Name
        //echo "<div class='text-center'>";
        echo "<p>".$row[$a][1]."</p>";
        

        //Product Price
        //echo "<div class='text-center'>";
        echo "<span>".$row[$a][2]."</span> <span>$</span>";
     
        //Product posted date
       // echo "<div class='text-center'>";
        echo "<p>".$row[$a][3]."</p>";
       
        //Product seller ID

       // echo "<div class='text-center'>";
       // echo "<p>".$row[$a][4]."</p>";
        // echo "<button type="button" class="btn btn-info">DELETE</button>" ;

       
        // $productnum = $a + 1;
        // $modulus = $productnum % 4;
        // $modulus2 = $productnum % 2;
        // if ($modulus = 0 || $modulus2=0) {
            echo "</div>";//a1
        // }

    }
    

  ?>
    
  </div>
</div>

              
</section>

    <script  src="../main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   

</body>
</html>