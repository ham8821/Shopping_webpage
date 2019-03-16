<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/product.css">
    <script  src="main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>productpage</title>
</head>
<body>
    <!-- <div class="background">   </div> -->

    <section class="header">
    
    
    <h2 class="Logo"><span class="glyphicon glyphicon-tag"></span>Thrifters</h2>
    
    <nav>
    <div class="container" id="navrow">
        <div class="row">
            <div class="Hometab col-sm-4 col-md-4 col-lg-4">
              <a href="test.html" target="_blank">Home</a>
            </div>
            <div class="Accounttab col-sm-4 col-md-4 col-lg-4">
             <a href="#" target="_blank">My account</a>
            </div>
            <div class="Cartttab col-sm-4 col-md-4 col-lg-4">
                    <a href="#" target="_blank">My Cart</a>
                   </div>
        </div>
        <hr>
    </nav>  
</section>

<!-- Product details part -->
<!-- images -->
<article class="contentbox">

    <div class="container" id="photorow">
        <div class="row">
           <div class="pic1 col-sm-6 col-md-4 col-lg-4"> <img src="images/laptop.jpg" id="productpic1" alt="pic1"></div>
           <div class="pic2 col-sm-6 col-md-4 col-lg-4">
                <img src="images/laptop2.jpg" id="productpic2" alt="pic1">
                <img src="images/laptop3.jpg" id="productpic3" alt="pic1">
        </div>
           <div class="pic3 col-sm-12 col-md-4 col-lg-4"> 
            
                <div class="productdescription">
                    <h3>Produtname</h3>
                    <h3>State</h3>
            <table style="width:100%">
                    <tr class="rows">
                    <th>Category</th>
                    <th>Price</th>
                    <th>Negotiation</th>
                    </tr>
                    <tr class="rows">
                    <td>Laptop,Digital</td>
                   
                    <td>$500</td>
                    <td>
                            <span class="negoyes">O</span>
                            <span class="negono">X</span>
                    </td>
                    </tr>
                </table>
                    <p class="productinfo"> 
                        I bought this laptop in 2015. However, I got it repaired it last year due to the screen so it is pretty much same as I bought it first except that there are some scratch at the back as you can see from the picture. I got this at 1000 dollars. It will come with charger and spare wireless mouse if you need it. plz feel free to contact me through this and we will talk about this togather!
                    </p>   
                    <p>Update: 03/02/2019 User Id: ham8821</p> 
                </div>        
           </div>
        </div>     
    </div>
    
</article>
<section>
        <div class="container">
            <div class="row" id="buttonrow">
               <div class="cart col-sm-6 col-md-4 col-lg-4" id="cart">
                 
                    
               </div>
               <div class="back col-sm-6 col-md-4 col-lg-4" id="back">
                          <a href="#" id="button1" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                              </a>
                              <a href="#" id="button3" class="btn btn-info btn-lg">
                                    <span class="glyphicon glyphicon-envelope"></span> Message
                                  </a>

                                  <a href="productlist.php" id="button2" class="btn btn-info btn-lg">
                                        <span class="glyphicon glyphicon-backward"></span> Back
                                      </a>
               </div>
               <div class="Message col-sm-6 col-md-4 col-lg-4" id="msg">
               
               </div>
            </div>

        </div>
     </section>
</body>
</html>