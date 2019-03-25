<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
<body>
  <?php
      $target_dir = 'tmp/';
      if( isset($_POST['submit'])) {
          // for ($x = 0; $x <count($_FILES['file']['name']);$x++){
          //     $name = $_FILES['file']['name'][$x];
          //     $size = $_FILES['file']['size'][$x];
          //     $type = $_FILES['file']['type'][$x];
          //     $tmp_name = $_FILES['file']['tmp_name'][$x];
              
          //     echo "$name - $size - $type - $tmp_name <br>";
          // }
          $total_files = count($_FILES['file']['name']);
          for($x = 0; $x < $total_files; $x++) {
              // Check if file is selected
              if(isset($_FILES['file']['name'][$x]) 
              && $_FILES['file']['size'][$x] > 0) {
                  $original_filename = $_FILES['file']['name'][$x];
                  $target = $target_dir . basename($original_filename);
                  $tmp = $_FILES['file']['tmp_name'][$x];
                  move_uploaded_file($tmp, $target);
              }
          }
      }
    ?>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Post Here
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
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

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>