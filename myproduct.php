<?php
	
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Noto+Serif" rel="stylesheet">


    <title>My Product</title>
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
                      <a class="nav-link" href="index_loginsuccess.php">Home <span class="sr-only">(current)</span></a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link" href="myaccount.php">My Account</a>
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
   <!-- --------------------heading---------------------"----------- -->

     <div class="container" id="mainbox">
       
        <div class="row">
          <div class="contentbox col-12">
           
                              
                                <img class="mainpic" src="images/shopping1.jpg" alt="accountmain">
                                  <a href="#myproduct"><i id="pointbutton" class="fa fa-angle-double-down"  >Go to my product</i></a>
                              


                              



            </div>
         
        </div>
     </div>





<!----------------------------------------------------- my product list -------------------------------------------------------------->
<br>
<section id="myproduct">
    <br><br>
   <center> <h3> My Product </h3></center>
    <br><br>
                <div class="container">
                 <div class="row">
                      
                     <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                     <input type="checkbox" class="checkbox" name="select" value="select">
                            <div class="contentbox">
                            <img class="img-fluid" src="images/laptop1.jpg" alt="laptopphoto" class="pic">
                                <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Good condition laptop SALE!!</a></p>
                                <p class="price">$500</p>
                               
                                </div>
                            </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                            <div class="contentbox">
                            <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Title</a></p>
                                <p class="price">$price</p>
                            
                                </div>

                             </div>
                      </div>
     
                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">   
                      <input type="checkbox" class="checkbox" name="select" value="select">               
                          <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                             
                              </div>
                           </div>  
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                          <div class="contentbox">
                              <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                              <div class="productdescription">
                                  <p class="producttitle"><a href="product.html">Title</a></p>
                                  <p class="price">$price</p>
                                 
                                  </div>
    
                               </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                          <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                              
                              </div>

                           </div>
                    </div>
   
                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">  
                    <input type="checkbox" class="checkbox" name="select" value="select">                
                        <div class="contentbox">
                        <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.html">Title</a></p>
                            <p class="price">$price</p>
                       
                            </div>
                         </div>  
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <input type="checkbox" class="checkbox" name="select" value="select">
                        <div class="contentbox">
                            <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Title</a></p>
                                <p class="price">$price</p>
                             
                                </div>
  
                             </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <input type="checkbox" class="checkbox" name="select" value="select">
                        <div class="contentbox">
                        <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.html">Title</a></p>
                            <p class="price">$price</p>
                          
                            </div>

                         </div>
                  </div>
 
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">     
                  <input type="checkbox" class="checkbox" name="select" value="select">             
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.html">Title</a></p>
                          <p class="price">$price</p>
                         
                          </div>
                       </div>  
                  </div>

                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                  <input type="checkbox" class="checkbox" name="select" value="select">
                      <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                             
                              </div>

                           </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                  <input type="checkbox" class="checkbox" name="select" value="select">
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.html">Title</a></p>
                          <p class="price">$price</p>
                         
                          </div>

                       </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">     
                  <input type="checkbox" class="checkbox" name="select" value="select">             
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.html">Title</a></p>
                          <p class="price">$price</p>
                         
                          </div>
                       </div>  
                  </div>
             

            
                </div>
                <hr>
                <center><button type="button" class="btn btn-warning">Delete</Delete></center>
               
                <br> <br>

                 </div>

              </div>




              </section>
<section>


</section>
    <script  src="main.js" type="text/javascript"></script>
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