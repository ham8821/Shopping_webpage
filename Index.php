<?php
 session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/test.css">
    <script  src="main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <title>testing page</title>
</head>



<body>
    <script type="text/javascript">
      $(document).ready(function() {
  $("html,body").animate({scrollTop: 0}, 100); //100ms for example
});
  
  </script>
    <!-------------------------------------------------------------------------
        Navigation bar and half-full back image and slogan in the middle-------->

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
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#introductionbox">About us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#section3">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My account</a>
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
   <section>
         <p class="banner_text">Everything <br>You are looking for</p>  
    </section>
        <!-------------------------------------------------------------------------
        Login form on the right, taking 4/12 and categories on the left, taking 8/12 of the page width-------->
   <section>
    <div class="container-fluid" id="firstbox">
        <div class="row">
         <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
                <div class="loginform col-sm-5 col-md-5 col-lg-4 col-xl-4" id="form">
                        <section>
                                <div class="container">
                                        <div class="d-flex justify-content-center h-100" id= "formbox">
                                          <div class="card">
                                            <div class="card-header">
                                              <h3>Log In</h3>
                                              <div class="d-flex justify-content-end social_icon">
                                        
                                                <span><a href="https://www.facebook.com/">
                                                    <div>
                                                      <i class="fab fa-facebook-square"></i>
                                                    </div>
                                                  </a></span>
                                                  
                                                  <span><a href="https://www.google.co.nz/">
                                                    <div class="youtube button-big dist">
                                                      <i class="fab fa-google-plus-square"></i>
                                                    </div>
                                                  </a></span>
                                                  <span><a href="https://twitter.com/">
                                                    <div class="instagram button-big dist">
                                                      <i class="fab fa-twitter-square"></i>
                                                    </div>
                                                  </a></span>


                                              </div>
                                            </div>
                                            <div class="card-body">
                                              <form method="post" onsubmit="return loginValid()" action="include/connection.php">
                                                <div class="input-group form-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                  </div>
                                                  <input type="email" name="useremail"  class="form-control" placeholder="Email ID" id="useremail" required="required">
                                                  
                                                </div>
                                                <div class="input-group form-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                  </div>
                                                  <input type="password" name="password" class="form-control" placeholder="password" id="password" required="required">
                                                </div>
                                                <div class="row align-items-center remember">
                                                  <input type="checkbox" id="remembercheck"  name="remembercheck">Remember Me
                                               

                                                </div>
                                                <div class="form-group">
                                                  <input type="submit" value="Login" class="btn float-right login_btn" >
                                                </div>
                                              </form>
                                            </div>
                                            <div class="card-footer">
                                              <div class="d-flex justify-content-center links">
                                                Don't have an account?<a href="registration.php" >Sign Up</a>
                                              </div>
                                              <div class="d-flex justify-content-center">
                                                <a href="passwordfolder/index.php" >Forgot your password?</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section>
                </div>
                <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                <div class="loginform col-sm-7 col-md-7 col-lg-8 col-xl-8" id="category">
                        <section id="searchbar">
                                <div class="tab">
                                  <button class="tablinks" onclick="openCity(event, 'Clothings')" id="defaultOpen">Clothings</button>
                                  <button class="tablinks" onclick="openCity(event, 'Electronics')">Electronics</button>
                                  <button class="tablinks" onclick="openCity(event, 'Furnitures')">Furnitures</button>
                                  <button class="tablinks" onclick="openCity(event, 'Others')">Others</button>
                                  <div class="search-container">
                                      <form action="/action_page.php">
                                        <input type="text" placeholder="Search.." name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                </div>
                            <!--Your category contents----->
                                  <div id="Clothings" class="tabcontent">
                                  <h5>Clothings</h5>
                                  <div class="row">
                                      <div class="col"><a href="#">Women's</a></div>
                                      <div class="col"><a href="#">Men's</a></div>
                                      <div class="col"><a href="#">kid's</a></div>
                                      <div class="col"> <a href="#">Sales</a> </div>
                                  </div>
                                </div>
                                
                                <div id="Electronics" class="tabcontent">
                                  <h5>Electronics</h5>
                                  
                                  <div class="row">
                                      <div class="col"><a href="#">Mobile</a></div>
                                      <div class="col"><a href="productlist.php">Computer</a></div>
                                      <div class="col"><a href="#">TV</a></div>
                                      <div class="col"> <a href="#">Others</a></div>
                                  </div>
                                </div>
                                
                                <div id="Furnitures" class="tabcontent">
                                  <h5>Furnitures</h5>
                                  <div class="row">
                                      <div class="col"><a href="#">Living Room</a></div>
                                      <div class="col"><a href="#">Kitchen</a></div>
                                      <div class="col"><a href="#">Bedroom</a></div>
                                      <div class="col"> <a href="#">Lights</a> </div>
                                  </div>
                                </div>
                        
                                <div id="Others" class="tabcontent">
                                  <h5>Others</h5>
                                  <div class="row">
                                      <div class="col"><a href="#">Accessory</a></div>
                                      <div class="col"><a href="#">Office</a></div>
                                      <div class="col"><a href="#">Cosmetics</a></div>
                                      <div class="col"> <a href="#">Others</a> </div>
                                  </div>
                                </div>
                              </section>
                </div> 
                <!--  --------------------------------------------------------------------------------------------------------------------------------->
       </div>
       
    </div>

   </section>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
          <section id="introductionbox">
           <h3 class="introductionheading"> Who are we?</h3>
         <div class="container" >
             <div class="row">
                 <div class="col-sm-12 col-md-8 col-lg-5"> 
                     <h4 class="whoweare">Second-hand = Not cool?</h4>
                     <br>
                     <p>If you are still wandering around the second-hand shops, wondering where the stuff is that you are looking for, then this webpage will bring what you need right now to you. Online market for thoese just like you who want to buy second-hand items or even sell.   </p>
                      <p class="intro"> With <b>clean and easy categories</b>, you don't have to be lost in the middle of internet shopping!  
                      Buy and sell, <b>be a marchandise</b> yourself or <b>a smart consumer</b> anytime you want!
                     <br>
                      Auction? No! Now we do trade!
                      Payment, Delivery? OMG... is it really good? </p>
                     <p class="intro2"> See for yourself!</p>
                 </div>
                 <div class="col-sm-12 col-md-12 col-lg-7"> <img src="images/secondhand.jpg" alt="secondhand"> </div>
             </div>
         </div>
          </section>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
       <br>
       <br>
       <script src="js\jquery-3.3.1.min.js"></script>
       <script type="text/javascript" src="js/main.js"></script>
       <script src="js/popper.min.js"></script>
      <div class="container" id="section3">
       <div class="row">

        <div class="col-sm-12 col-md-7 col-lg-7" id="imgbox">
          <img src="images/yellow.jpg" alt="formphoto" id="firstimg">
          <img src="images/hello.jpg" alt="hello" id="secondimg">
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5">
                <div id="form">
  
                              <div id="contact-form">  
                                  <h4>Get In Touch!</h4> 
                                  <div class="wrapper">           
                                  </div>
                                  <br>
                                  <p id="failure">Opss.. something went wrong.</p>  
                                  <p id="success">Thank you, your message was sent successfully.</p>
                                  <div class="wrapper">
                                  <form method="post" action="emailForm.php" onsubmit="return contactusValid()">  
                                      <label for="FirstName">First Name: <span class="required" >*</span></label>  
                                      <input type="text" id="name1" name="name" value="" placeholder="Your first name" required="required" autofocus="autofocus" />  
                                      <label for="LasttName">Last Name: <span class="required">*</span></label>  
                                      <input type="text" id="name2" name="name" value="" placeholder="Your last name" required="required" autofocus="autofocus" />       
                                      <label for="email">Email Address: <span class="required">*</span></label>  
                                      <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" /> 
                                    
                                  <div class="wrapper">
                                  <textarea id="message" name="message" placeholder="Write your message here, please." required="required"></textarea>  
                                  </div>
                                      <div class="wrapper">
                                  <input type="submit" value="Submit" id="submit" onclick="contactusValid()" /> 
                                  <input type="reset" value="Reset" id="reset">
                                  </div>
                                  </form> 
                                  </div> 
                              </div>
                              </div>
                              </form> 
                          
                          </div>
                          
                      </div>
                    </div>

        </div>
       </div>
       </div>
    <br>
    <br>
    <br>
    <br>
    <br>
       <!-- -----footer---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
       <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are a web service that deliver the platform where users can sell and buy used products based on their needs.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Thrifters</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Aspire2 international Auckland</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">ham38538821@mail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">02108216229</a> <span>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">My Acoount</a></li>
                <li><a href="#">Registration</a></li>
                <li><a href="#">Service hour</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>

      </body>









</html>