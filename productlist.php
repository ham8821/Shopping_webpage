<?php
session_start();

?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/list.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script  src="main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <title>Product list page</title>
</head>
<body>

    
        <section class="header">
                <div class="overlay">
                    <nav class="navbar navbar-expand-lg navbar-light mynavbar">
                        <a class="navbar-brand" id="navbar" href="#">Thrifters</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="myaccount.php">My account</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="myFunction(); return false">Service hour</a>
                              </li>
                          </ul>
                        </div>
                      </nav>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                </div>
              </section>

              <!-- --------------------------------------------------------------------------------------------------------------------------------------------------- -->
              <!-- Side category -->
              
              <section>
                  <div class="container">
                      <div class="row">
                       <div class="sideCategory col-sm-6 col-md-5 col-lg-5 col-xl-5">
                          <!-- category -->
                                                                    
                              <div class="tab">
                                      <button class="tablinks" onclick="openCity(event, 'Clothings')" id="defaultOpen">Clothings</button>
                                      <button class="tablinks" onclick="openCity(event, 'Electronics')">Electronics</button>
                                      <button class="tablinks" onclick="openCity(event, 'Furnitures')">Furnitures</button>
                                      <button class="tablinks" onclick="openCity(event, 'Others')">Others</button>
                                    </div>
                                    
                                      


                          <!-- category End -->
                       </div>
                       <div class="productlists col-sm-6 col-md-7 col-lg-7 col-xl-7">
                                                  
                              <div id="Clothings" class="tabcontent">
                                
                                  <hr>
                                  <div class="row">
                                      <div class="col"><a href="#">Women's</a></div>
                                      <div class="col"><a href="#">Men's</a></div>
                                      <div class="col"><a href="#">kid's</a></div>
                                      <div class="col"> <a href="#">Sales</a> </div>
                                </div>
                            </div>
                            
                            <div id="Electronics" class="tabcontent">
                                  
                                  <hr>
                                  <div class="row">
                                      <div class="col"><a href="#">Mobile</a></div>
                                      <div class="col"><a href="#">Computer</a></div>
                                      <div class="col"><a href="#">Television</a></div>
                                      <div class="col"> <a href="#">Others</a></div>
                                  </div>
                                </div>
                            
                          
                                <div id="Furnitures" class="tabcontent">
                                     
                                      <hr>
                                      <div class="row">
                                          <div class="col"><a href="#">Living Room</a></div>
                                          <div class="col"><a href="#">Kitchen</a></div>
                                          <div class="col"><a href="#">Bedroom</a></div>
                                          <div class="col"> <a href="#">Lights</a> </div>
                                      </div>
                                    </div>
                            
                                    <div id="Others" class="tabcontent">
                                     
                                      <hr>
                                      <div class="row">
                                          <div class="col"><a href="#">Accessory</a></div>
                                          <div class="col"><a href="#">Office</a></div>
                                          <div class="col"><a href="#">Cosmetics</a></div>
                                          <div class="col"> <a href="#">Others</a> </div>
                                      </div>
                                    </div>
                                                </div>
                                              </div>

                                          </div>

              </section>
    
              <br>
              <section id="product">
                  <br>
  <center>  <h2>Products</h2>  </center>
  <div class="container">
      <div class="row" id="contentbox">
        
     
<!-- sellecting the colums to show the data on the screen -->
  <?php

    $connect = mysqli_connect("localhost","root","","sup");
    $sql="SELECT imgSRC,productName, price, postDate, sellerID FROM products";
    $result = mysqli_query($connect,$sql);
    // put fetched data in to each row
    $row= mysqli_fetch_all($result); 
  
    //the number of row in database
    for ($a = 0; $a < count($row); $a++) {
       

        //and start to attach one by one
        //4 products per row
        echo "<div class='productinfo'>";
       
        //image of a product
        $imgpath = 'tmp/';
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
          echo "<form method='POST' action='include/addtocart.php'>";
         echo "<input type='submit' name='add_to_cart' style='margin-top:5px;' class='btn btn-success' value='Add to Cart' /> "; 
         echo"</form>";
            echo "</div>";//a1
        // }

    }
    

  ?>
    
  </div>
</div>

              
</section>
</body>
</html>