<?php
	
  session_start();
  
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "sup");
		$ser = $_POST["password"];
		$result = mysqli_query($conn,$sql);
	    $get= $_POST["email"];
		$sql = "UPDATE user SET password = '$ser' WHERE email= '$get'";
		$success_message = "Password is reset successfully.";


	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="nav-link" href="addProduct/myproduct.php">My Product</a>
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
                                      <hr>
                                          <h5> Profile</h5>
                                         <div class="profileinfo"> 
                                        <span>Email:  <?php echo $_SESSION['email'] ?> </span><br>
                                        <span>Name:  <?php echo $_SESSION['firstName']  ?> </span><span><?php echo $_SESSION['lastName']  ?> </span><br>
                                        <span>Address:  <?php echo $_SESSION['address'] ?> </span><br>
                                        <span>Inbox:  <a href="#">0 mailbox</a></span><br>
                                        <span>User ID:  <?php echo $_SESSION['userID']  ?></span><br>
                                        <span>Credit card:  <a href="#addingcredit">Click here to add it!</a> </span>
                                        </div>
                                    </div>


                                </div>
                              </div>

                                <div id="ResetPassword" class="tabcontent">
                                    <br>
                                    <center> <h5>Reset Password</h5></center>
                                  <hr>
                                  <div class="row">
                                  <div class="logoimg col-sm-12 col-lg-12">
                                  <center>  <img style width="50px" height="50px" src="images/origami.png" alt=""></center>
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
                                    <input type="email" name="email" id="emailaddress" class="input-field2"></div>
                                    <div><label for="Password">Password</label></div>
                                    <div>
                                    <input type="password" name="password" id="password" class="input-field2"></div>
                                    
                                    <div><label for="Password">Confirm Password</label></div>
                                    <div><input type="password" name="confirm_password" id="confirm_password" class="input-field2"></div>
                                    <br>
                                    <button type="submit" name="reset-password" id="reset-password2" value="RESET" class="form-submit-button" onclick="return validate_password_reset2();" class="btn  purple-gradient btn-lg btn-block">OK</button>
                                    <br>
                                    </form>	
                                        </div>
                                  </div>
                                </div>
                                
                                <div id="Addcreditcard" class="tabcontent">
                                  <br> 
                                  <center><h5>Add credit card</h5></center>
                                  <hr>
                                 <span> <input type="checkbox" name="vehicle1" value="Bike">  </span>  <span>   <input type="checkbox" name="vehicle1" value="Bike"></span><br>
                                  <a href="http://www.credit-card-logos.com/"><img alt="Credit Card Logos" title="Credit Card Logos" src="http://www.credit-card-logos.com/images/visa_credit-card-logos/visa_mastercard_logo_6.gif" width="102" height="32" border="0" /></a>
                                  <div id="addingcredit" class="row">
                                 <div class="Addcreditcardbox">
                                  <form name="Addcreditcard">
                                      <p id="demo"> </p>
                                      <div class="row">
                                          <div class="col-6">
                                              <div>
                                                  <label for="text">Credit card number</label>
                                              </div>
                                              <div>
                                                  <input type="text" name="Ccnumber" id="Ccnumber" class="input-field2" required>
                                              </div>
                                              <div>
                                                  <label for="date">Valid date</label>
                                              </div>
                                              <div>
                                                  <input type="text" name="Vdate" id="Vdate" class="input-field2" required>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div>
                                                  <label for="text">Card holder Name</label>
                                              </div>
                                              <div>
                                                  <input type="text" name="Nameoncard" id="Nameoncard" class="input-field2" required>
                                              </div>
                                              <div>
                                                  <label for="text">CVV number</label>
                                              </div>
                                              <div>
                                                  <input type="text" name="CVV" id="CVV" class="input-field2" required>
                                              </div>
                                          </div> 
                                      </div>
                                      <hr>
                                         
                                      <div>                              
                                         
                                          <button style:="" background-color="grey" type="button" name="Addcreditcard" id="Addcreditcard" class="form-submit-button" onclick="addcreditcard1();">OK</button>
                                      </div>
                                  </form>
                                  </div>
                                  </div>
                                  
                                </div>
                        
                                <div id="Updateaddress" class="tabcontent">
                                <br>
                                <center>   <h5>Update Address</h5></center>
                                  <hr>
                                  <div class="row">
                                  <div class="logoimg col-sm-12 col-lg-12">
                                  <center><img id="icon1" src="images/update.png" alt=""> </center>
                                  
                                  </div>
                                  <div class="formrow col-sm-12 col-lg-12">
                                  <form name="frmAdd" id="Upaddress">

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
                                    <input type="address" name="newaddress" id="newaddress" class="input-field2" required></div>
                                    
                                    <br>
                                    <button type="button" name="update-address" id="update-address" value="UPDATE" class="form-submit-button" onclick="updateaddress();" class="btn  purple-gradient btn-lg btn-block">OK</button>
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
    <br><br>
   <center> <h3> My Cart </h3></center>
    <br><br>
                <div class="container">
                 <div class="row">
                      
                     <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                     <input type="checkbox" class="checkbox" name="select" value="select">
                            <div class="contentbox">
                            <img class="img-fluid" src="images/laptop1.jpg" alt="laptopphoto" class="pic">
                                <div class="productdescription">
                                <p class="producttitle"><a href="product.php">Good condition laptop SALE!!</a></p>
                                <p class="price">$500</p>
                                <p class="userId">ham8821</p>
                                </div>
                            </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                            <div class="contentbox">
                            <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.php">Title</a></p>
                                <p class="price">$price</p>
                                <p class="userId">ham8821</p>
                                </div>

                             </div>
                      </div>
     
                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">   
                      <input type="checkbox" class="checkbox" name="select" value="select">               
                          <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.php">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>
                           </div>  
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                          <div class="contentbox">
                              <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                              <div class="productdescription">
                                  <p class="producttitle"><a href="product.php">Title</a></p>
                                  <p class="price">$price</p>
                                  <p class="userId">ham8821</p>
                                  </div>
    
                               </div>
                      </div>

                      <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                      <input type="checkbox" class="checkbox" name="select" value="select">
                          <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.php">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>

                           </div>
                    </div>
   
                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">  
                    <input type="checkbox" class="checkbox" name="select" value="select">                
                        <div class="contentbox">
                        <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.php">Title</a></p>
                            <p class="price">$price</p>
                            <p class="userId">ham8821</p>
                            </div>
                         </div>  
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <input type="checkbox" class="checkbox" name="select" value="select">
                        <div class="contentbox">
                            <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                            <div class="productdescription">
                                <p class="producttitle"><a href="product.php">Title</a></p>
                                <p class="price">$price</p>
                                <p class="userId">ham8821</p>
                                </div>
  
                             </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <input type="checkbox" class="checkbox" name="select" value="select">
                        <div class="contentbox">
                        <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                        <div class="productdescription">
                            <p class="producttitle"><a href="product.php">Title</a></p>
                            <p class="price">$price</p>
                            <p class="userId">ham8821</p>
                            </div>

                         </div>
                  </div>
 
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">     
                  <input type="checkbox" class="checkbox" name="select" value="select">             
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.php">Title</a></p>
                          <p class="price">$price</p>
                          <p class="userId">ham8821</p>
                          </div>
                       </div>  
                  </div>

                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                  <input type="checkbox" class="checkbox" name="select" value="select">
                      <div class="contentbox">
                          <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                          <div class="productdescription">
                              <p class="producttitle"><a href="product.php">Title</a></p>
                              <p class="price">$price</p>
                              <p class="userId">ham8821</p>
                              </div>

                           </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                  <input type="checkbox" class="checkbox" name="select" value="select">
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.php">Title</a></p>
                          <p class="price">$price</p>
                          <p class="userId">ham8821</p>
                          </div>

                       </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">     
                  <input type="checkbox" class="checkbox" name="select" value="select">             
                      <div class="contentbox">
                      <img class="img-fluid" src="images/sampleimg.jpg" alt="samplepic" class="pic">
                      <div class="productdescription">
                          <p class="producttitle"><a href="product.php">Title</a></p>
                          <p class="price">$price</p>
                          <p class="userId">ham8821</p>
                          </div>
                       </div>  
                  </div>
             

            
                </div>
                <hr>
                <center><button type="button" class="btn btn-warning">Check out</button></center>
                <br> <br>

                 </div>

              </div>




              </section>
<section>


</section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="main.js" type="text/javascript"></script>


</body>
</html>