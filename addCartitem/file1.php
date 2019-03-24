
<div class="container">
   <br />
   <h3 align="center">PHP Ajax Shopping Cart by using Bootstrap Popover</h3>
   <br />
   <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Menu</span>
      <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
      <a class="navbar-brand" href="/">Webslesson</a>
     </div>
     
     <div id="navbar-cart" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       <li>
        <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
         <span class="glyphicon glyphicon-shopping-cart"></span>
         <span class="badge"></span>
         <span class="total_price">$ 0.00</span>
        </a>
       </li>
      </ul>
     </div>
     
    </div>
   </nav>
   <div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right">
     <a href="#" class="btn btn-primary" id="check_out_cart">
     <span class="glyphicon glyphicon-shopping-cart"></span> Check out
     </a>
     <a href="#" class="btn btn-default" id="clear_cart">
     <span class="glyphicon glyphicon-trash"></span> Clear
     </a>
    </div>
   </div>

   <div id="display_item">


   </div>
   
  </div>

