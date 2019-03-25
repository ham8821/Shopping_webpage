  <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "sup");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script  src="../main.js" type="text/javascript"></script>
 
  <style>
  #load{
     height: 33px;
     font-size: 18px;
     padding-top: 3px;
  }
  </style>
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">My Shopping Cart</h3><br /> 
                <?php  
                $connect = mysqli_connect("localhost", "root", "", "sup");   

                $query = "SELECT mycartitem.postID, mycartitem.confirmedPrice, productimgs.photoSRC, products.productName, products.Price, mycartitem.mycartID FROM mycartitem, productimgs, products WHERE products.postID = productimgs.postID and products.postID = mycartitem.postID";  
                $result = mysqli_query($connect, $query);  
                if(!$result ||mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {         $mycartID= $row[5];
                ?>  
        
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&postID=<?php echo $row["postID"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height: 300px;" align="center">  
                               <img style="max-width: 100%; max-height: 110px;" src="../images/<?php echo $row["photoSRC"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["productName"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["confirmedPrice"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["confirmedPrice"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                              <?php $totalprice= number_format($values["item_quantity"] * $values["item_price"], 2); ?>
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  

                     </table>  
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" >
                              Check Out
                              </button>
                              <!--  that button above will trigger this message down below -->
                              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                   <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">Your payment</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                                   </div>
                                   <div class="modal-body">
                                   <?php require_once('../dbconnection.php'); ?>

                                   <form action="" method="post">
                                        <h3>Hi <?php echo $_SESSION['email'] ?>! </h3>
                                        <p> <b> Please double check your order details before you proceed! </b></p>
                                        <p>Full Name: <?php echo $_SESSION['firstName'],$_SESSION['lastName'] ?> </p>
                                        <p>Address: <?php echo $_SESSION['address'] ?> </p>
                                        <hr>
                                        <!-- payment method selection -->
                                        <span><div class="selection"><b> Please select your payment method </p>
                                        <select name="paymentmethod" id="paymentmethod" style="width: 200px" onchange="getselectvalue();">
                                        <option value="cc">Credit Card</option>
                                        <option value="cod">Cash on delivery</option>
                                        <input type="submit" name="show_dowpdown_value" value="Select" style="background-color: black; color:white;"/>
                                        </select></div></span>
                                   
                                        <!-- payment card number selection -->
                                        <span><div class="selection"><b>Select your credit card </p>

                                        <select name="dowpdown" style="width: 200px">

                                        <?php
                    
                                        $userID= $_SESSION['userID'];
                                        $connect = mysqli_connect("localhost","root","","sup");
                                        
                                        //finding the ccnumber of this user  to print them out in dropdown box
                                        $sql="SELECT Ccnumber FROM usercc WHERE userID='". $userID ."'";
                                   
                                        $result= mysqli_query($connect,$sql);
                                        while( $row= mysqli_fetch_array($result)){
                                             for($a=0; $a < count($row); $a++){
                                             $Ccnumber= $row[$a];
                              
                                             echo "<option name='Ccnumber' required value='". $Ccnumber."'>". $Ccnumber."</option>";
                                             }
                                        }

                                        ?>

                                        </select>
                                        <input type="submit" name="show_dowpdown_value2" value="Select" style="background-color: black; color:white;"/>
                                        </div></span>
                                        <label>
                                             I accept the terms of service.
                                             <input type="checkbox" name="terms_of_service" require value="Y">
                                        </label>

                                   </form>
                                   </div>
                                   <div class="modal-footer">
                                   <button class="btn btn-secondary" data-dismiss="modal">Go back to cart</button>
                                   <button type="button" name= "getvaluebutton" class="btn btn-primary btn-lg " id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" onclick="payment();">Pay Now</button>
                                   </div>
                              </div>
                              </div>
                              </div>

                </div>  
           </div>  
           <br>  
           <script>
               function getselectvalue(){
                    <?php
                                   
                                        $selected_val = $_POST['paymentmethod'];  // Storing Selected Value In Variable
                                        //echo "You have selected :" .$selected_val;
                                        
                                        ?>

               }
               function payment(){
                  <?php
               //    To check the error--------------------------------------------------------------------------------------------------
               //    ini_set('display_errors',1);
               //    error_reporting(E_ALL);
                     $selected_val = $_POST['paymentmethod']; 
                     $connect = mysqli_connect("localhost", "root", "", "sup");   
                     $sql="INSERT INTO payment (`type`,`date`, `mycartID`, `amount`) VALUES ('$selected_val',now(),$mycartID,$totalprice)";
                     $result = mysqli_query($connect, $sql); 
                      
                     if($result === true){
                       //  echo '<script language="javascript">';
                         echo "alert('Your payment has been completed!')";
                        // echo '</script>';
                         //   header('Location: ../myaccount.php');
                        }else{
                         //echo '<script language="javascript">';
                         echo "alert('failed')";
                         //echo '</script>';
                            
                        } 
                        //$connect-> close();
                  ?>
               }
               


           </script>

      </body>  
 </html>
   