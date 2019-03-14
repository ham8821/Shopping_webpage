<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/registration.css">
    <script  src="main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <link rel="stylesheet" href="Css/css/bootstrap.js"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
 
    <title>registration form</title>
</head>
<body> 

    <section>
    <div class="container-fluid">
     <div class="row">
       <div class="imgsection col-sm-5 col-md-5 col-lg-5">
       <img src="images/record.jpg" alt="recordimgage" class="recordimage"> 
       <p class="quote">Throw it away?<br> Trade it away!</p>
       </div>
       
      <div class="formsection col-sm-7 col-md-7 col-lg-7">
        <div class="formbox">
            <form method="POST" action="include/register.php">
               <h3 style="text-align:center">Join us</h3>
               <div class="row">
                 <div class="col-6">
                <label>
                    <p class="label-txt">ENTER YOUR FIRST NAME <span class="required">*</span></p>
                    <input type="text" class="input" value="diego" required="required" name="firstname">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                  <label>
                    <p class="label-txt">ENTER YOUR LAST NAME <span class="required">*</span></p>
                    <input type="text" class="input" value="evang"required="required" name="lastname">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                <label>
                  <p class="label-txt">ENTER YOUR EMAIL <span class="required">*</span></p>
                  <input type="email" class="input" value="diego@gmail.com" required="required" name="email">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                </div>
                <div class="col-6">
                <label>
                  <p class="label-txt">ENTER YOUR PASSWORD <span class="required">*</span></p>
                  <input type="password" class="input" value="111" required="required" name="password">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
            
                <label>
                    <p class="label-txt">ENTER YOUR ADDRESS <span class="required">*</span></p>
                    <input type="address" class="input"  value="111" required="required" name="address">
                    <div class="line-box">
                      <div class="line"></div>
                    </div>
                  </label>
                </div>
                     <button type="submit" name="submit" class="submitbutton">Submit</button>
                    
                  </div>
                  </div>
               
            
              </div>
              </form>


        </div>


      </div>
     </div>
    </div>

    </section>


    


  


</body>
</html>  