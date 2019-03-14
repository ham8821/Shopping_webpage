<?php
	
  session_start();
  
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "sup");
		$ser = $_POST["password"];
	    $get= $_POST["email"];
		$sql = "UPDATE user SET password = '$ser' WHERE email= '$get'";
	    //echo md5($_POST["password"]);
		//echo $ser;
	    //echo $get;
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";


	}


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


    <title>My Account</title>
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
                        <a class="nav-link" href="#">My cart</a>
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
    " font-family="'Merriweather', serif" ;="" >Welcome to my account</h1></center>
    </div>
    <br>
   <!-- --------------------heading---------------------"----------- -->

     <div class="container" id="mainbox">
        <div class="row">
          <div class="col-12">
            <div class="menubox">
                                <div class="tab">
                                  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
                                  <button class="tablinks" onclick="openCity(event, 'Myaccount')">My account</button>
                                  <button class="tablinks" onclick="openCity(event, 'ResetPassword')">Reset Password</button>
                                  <button class="tablinks" onclick="openCity(event, 'Addcreditcard')">Add credit card</button>
                                  <button class="tablinks" onclick="openCity(event, 'Updateaddress')">Update address</button>
                                </div>
           </div>                     
         </div>
        </div>

        <div class="row">
          <div class="contentbox col-12">
           
                                <div id="Home" class="tabcontent">
                                <img class="mainpic" src="images/shoes.jpg" alt="accountmain">
                                  <a href="#mycart"><i id="pointbutton" class="fa fa-angle-double-down"  >Go to my cart</i></a>
                                </div>


                                <div id="Myaccount" class="tabcontent">
                                 <br>
                                   
                                    <div class="row">
                                      <div class="col-3"><img id="shopping" class="img-fluid" src="images/shopping4.jpg" alt=""></div>
                                      <div class="col-3"><img id="shopping" class="img-fluid" src="images/shopping2.jpg" alt=""></div>
                                      <div class="col-3"><img id="shopping" class="img-fluid" src="images/shopping3.jpg" alt=""></div>
                                      <div class="col-3"><img id="shopping" class="img-fluid" src="images/shopping.jpg" alt=""></div>
                                  </div>
                                  <div class="row">
                                      <div class="profile col-12">
                                      <h3>Hi <?php echo $_SESSION['firstname']  ?>!</h3>
                                      <h3>WELCOME <?php echo $_SESSION['email'] ?> !</h3>
                                      <h3>WELCOME <?php echo $_SESSION['address'] ?> !</h3>

                                      </div>
                                    </div>


                                </div>


                                <div id="ResetPassword" class="tabcontent">
                                    <br>
                                  <h5>Reset Password</h5>
                                  <hr>
                                  <div class="row">
                                  <div class="logoimg col-sm-12 col-lg-12">
                                    <img style width="50px" height="50px" src="images/origami.png" alt="">
                                  </div>
                                  <div class="formrow col-sm-12 col-lg-12">
                                  <form name="frmForgot" id="frmForgot" method="post">
                                    <?php if(!empty($success_message)) { ?>
                                    <div class="success_message"><?php echo $success_message; ?></div>
                                    <?php } ?>

                                    <div id="validation-message">
                                        <?php if(!empty($error_message)) { ?>
                                    <?php echo $error_message; ?>
                                    <?php } ?>
                                    </div>


                                    <div><label for="Email">Confirm email address</label></div>
                                    <div>
                                    <input type="email" name="email" id="email" class="input-field2"></div>
                                    <div><label for="Password">Password</label></div>
                                    <div>
                                    <input type="password" name="password" id="password" class="input-field2"></div>
                                    
                                    <div><label for="Password">Confirm Password</label></div>
                                    <div><input type="password" name="confirm_password" id="confirm_password" class="input-field2"></div>
                                    <br>
                                    <div><input type="submit" name="reset-password" id="reset-password2" value="RESET" class="form-submit-button" onclick="return validate_password_reset2();"></div>
                                    <br>
                                    </form>	
                                        </div>
                                  </div>
                                </div>
                                
                                <div id="Addcreditcard" class="tabcontent">
                                  <br> 
                                  <h5>Add credit card</h5>
                                  <hr>
                                  <div class="row">
                                 <div class="Addcreditcardbox">
                                  <form name="Addcreditcard" method="post">
                                  <?php if(!empty($success_message)) { ?>
                                    <div class="success_message"><?php echo $success_message; ?></div>
                                    <?php } ?>

                                    <div id="validation-message">
                                        <?php if(!empty($error_message)) { ?>
                                    <?php echo $error_message; ?>
                                    <?php } ?>
                                    </div>
                                    <div><label for="Email">Confirm email address</label></div>
                                    <div>
                                    <input type="email" name="email" id="email" class="input-field2" required ></div>
                                    <hr>
                                    <p id="demo"> </p>
                                    <div class="row">
                                      <div class="col-6">
                                          <div><label for="text">Credit card number</label></div>
                                          <div>
                                          <input type="text" name="Ccnumber" id="Ccnumber" class="input-field2" required></div>
                                          <div><label for="date">Valid date</label></div>
                                          <div>
                                          <input type="text" name="Vdate" id="Vdate" class="input-field2"></div>
                                      </div>
                                      <div class="col-6">
                                      <div><label for="text">Card holder Name</label></div>
                                    <div>
                                    <input type="text" name="Nameoncard" id="Nameoncard" class="input-field2" required></div>
                                    <div><label for="text">CVV number</label></div>
                                    <div>
                                    <input type="text" name="CVV" id="CVV" class="input-field2" required></div>
                                      </div> 
                                        </div>
                                        <hr>
                                        
                                    <div><input type="submit" name="Addcreditcard" id="Addcreditcard" value="+" onclick="return validate_creditcard_update();"></div>
                                    
                                  </form>
                                  </div>
                                  </div>
                                  
                                </div>
                        
                                <div id="Updateaddress" class="tabcontent">
                                <br>
                                  <h5>Update Address</h5>
                                  <hr>
                                  <div class="row">
                                  <div class="logoimg col-sm-12 col-lg-12">
                                  <img id="icon1" src="images/update.png" alt="">
                                  
                                  </div>
                                  <div class="formrow col-sm-12 col-lg-12">
                                  <form name="frmAdd" id="frmAdd" method="post">

                                    <?php if(!empty($success_message)) { ?>

                                    <div class="success_message"><?php echo $success_message; ?></div>

                                    <?php } ?>
<hr>
                                    <div id="validation-message">

                                        <?php if(!empty($error_message)) { ?>

                                    <?php echo $error_message; ?>
                                    <?php } ?>
                                    </div>

                                    <br>
                                    <div><label for="Email">Confirm email address</label></div>
                                    <div>
                                    <input type="email" name="email" id="email" class="input-field2" required></div>

                                    <div><label for="address">New Address</label></div>
                                    <div>
                                    <input type="password" name="address" id="address" class="input-field2" required></div>
                                    
                                
                                    <br>
                                    <div><input type="submit" name="reset-password" id="reset-password2" value="UPDATE" class="form-submit-button" onclick="return validate_address_update();"></div>
                                    <br>
                                    </form>	
                                        </div>
                                  </div>
                                </div>



            </div>
         
        </div>
     </div>





<!----------------------------------------------------- my product list -------------------------------------------------------------->
<br>
<section id="mycart">
    <br>
    <h3> My Cart </h3>
    <br><br>
                <div class="container">
                 <div class="row">
                      
                     <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <div class="contentbox">
                            <img src="images/laptop1.jpg" alt="laptopphoto" class="pic">
                                <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Good condition laptop SALE!!</a></p>
                                <p class="price">$500</p>
                                <p class="userId">ham8821</p>
                                </div>
                            </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        
                            <div class="contentbox">
                            <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Title</a></p>
                                <p class="price">$price</p>
                                <p class="userId">ham8821</p>
                                </div>

                             </div>
                      </div>
     
                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">                  
                          <div class="contentbox">
                          <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>
                           </div>  
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                          <div class="contentbox">
                              <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                              <div class="productdescription">
                                  <p class="producttitle"><a href="product.html">Title</a></p>
                                  <p class="price">$price</p>
                                  <p class="userId">ham8821</p>
                                  </div>
    
                               </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        
                          <div class="contentbox">
                          <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>

                           </div>
                    </div>
   
                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">                  
                        <div class="contentbox">
                        <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.html">Title</a></p>
                            <p class="price">$price</p>
                            <p class="userId">ham8821</p>
                            </div>
                         </div>  
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        <div class="contentbox">
                            <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.html">Title</a></p>
                                <p class="price">$price</p>
                                <p class="userId">ham8821</p>
                                </div>
  
                             </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        
                        <div class="contentbox">
                        <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.html">Title</a></p>
                            <p class="price">$price</p>
                            <p class="userId">ham8821</p>
                            </div>

                         </div>
                  </div>
 
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">                  
                      <div class="contentbox">
                      <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.html">Title</a></p>
                          <p class="price">$price</p>
                          <p class="userId">ham8821</p>
                          </div>
                       </div>  
                  </div>

                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <div class="contentbox">
                          <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.html">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>

                           </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                        
                      <div class="contentbox">
                      <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.html">Title</a></p>
                          <p class="price">$price</p>
                          <p class="userId">ham8821</p>
                          </div>

                       </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">                  
                    <div class="contentbox">
                    <img src="images/sampleimg.jpg" alt="samplepic" class="pic">
                    <div class="productdescription">
                        <p class="producttitle"><a href="product.html">Title</a></p>
                        <p class="price">$price</p>
                        <p class="userId">ham8821</p>
                        </div>
                     </div>  
                </div>

            
                </div>
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