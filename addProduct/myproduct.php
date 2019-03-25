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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Serif" rel="stylesheet">

	<script>
    
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
                        <a href="#myproduct"><i id="pointbutton" class="fa fa-angle-double-down"  >Go to my product</i></a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Post Here
                        </button>
                </div>       
            </div>
     </div>

<!----------------------------------------------------- add product modal-------------------------------------------------------------->
<div class="modal fade" id="exampleModal" data-backdrop="false" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload your product!!</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <form action="../uploadtest/upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                    Give a name to your merchandise:
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <input type="text" name="productName"/>
                    </div>
                </div>
                
                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                    Choose the category:
                    </div>
                    <div class="dropdown col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <a class="categorydrop" id="cl">Category list</a>
                        </button>
                        <input type="hidden" id="categoryid" name="categoryid"/>
                        <div class="dropdown-menu" id="categorydropitem">
                            <!-- generated in category_drop.php -->
                        </div>
                    </div>
                </div>
                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                    Choose a subcategory:
                    </div>
                    <div class="dropdown col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <a class="categorydrop" id="scl">Subcategory list</a>
                        </button>
                        <input type="hidden" id="subcategoryid" name="subcategoryid"/>
                        <div class="dropdown-menu" id="subcategorydropitem">
                            <!-- generated in subcategory_drop.php -->
                        </div>
                    </div>
                </div>

                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        How much is it:
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <input type="number" name="price"/>
                    </div>
                </div>

                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                    How many do you have:
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <input type="number" name="quantity"/>
                    </div>
                </div>
                <!-- upload img here -->
                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        Select image to upload:
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                        <input type="file" name="file[]" multiple />
                    </div>
                </div>

                <div class="row modalrow">
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        Put the description here:
                    </div>
                    <div class="col-xm-6 col-sm-6 col-md-6 col-lg-6 text-left">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-secondary" value="Upload Image" name="submit"/>
              <!-- <button type="submit" form="uploadimg" class="btn btn-primary"  name="submit">Submit</button> -->
            </div>
            </form>
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
    $sql="SELECT postID,imgSRC,productName, price, postDate, sellerID FROM products WHERE sellerID='".$sellerID."'";
   

    $result = mysqli_query($connect,$sql);
    // put fetched data in to each row
    $row= mysqli_fetch_all($result); 
  
    //the number of row in database
    for ($a = 0; $a < count($row); $a++) {
       

        //and start to attach one by one
        //4 products per row
        echo "<div class='productinfo'>";
        echo "<form action='deletefrommyproduct.php' method='POST'>";
        echo "<input type='hidden' name='postIDbox' value='".$row[$a][0]."' >";

       // $postID=$_POST['postIDbox'];
        //image of a product
        $imgpath = '../images/';
        echo "<div class='image-fluid' style='width: 280px; max-width=270px; height:200px; background-image: url(".$imgpath.$row[$a][1].")'>";
        echo "</div>";


        //Product Name
        //echo "<div class='text-center'>";
        echo "<p>".$row[$a][2]."</p>";
        

        //Product Price
        //echo "<div class='text-center'>";
        echo "<span>".$row[$a][3]."</span> <span>$</span>";
     
        //Product posted date
       // echo "<div class='text-center'>";
        echo "<p>".$row[$a][4]."</p>"; 
        echo "<button type='submit' name='submit' class='btn btn-secondary btn-sm'>DELETE</button>";
        echo "</form>";
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="../main.js" type="text/javascript"></script>



</body>
</html>