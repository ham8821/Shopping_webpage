<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>

	<link rel="stylesheet" href="../Css/myproduct.css">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   


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
							<a class="nav-link" href="test.php">Home 
								<span class="sr-only">(current)</span>
							</a>
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
	</section>
    <!----------------------heading---------------------------------->
    <br>
	<div class="container">
		<h3 align="center">My Product</h3>
		<div class="useremail">
			<?php echo "HI,".$_SESSION['email']."!" ?>
		</div>
		<br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadmodal">
			Launch demo modal
		</button>
	</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////
upload product -->
<div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="imageModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" id="edit_image_form">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Image Details</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
						<label>Image Name</label>
							<input type="text" name="image_name" id="image_name" class="form-control" />
						</div>
						<div class="form-group">
						<label>Image Price</label>
							<input type="text" name="image_price" id="image_price" class="form-control" />
						</div>
						<div class="form-group">
							<label>Image Description</label>
							<input type="text" id="image_description" class="form-control" />
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="image_id" id="image_id" value="" />
						<input type="submit" name="submit" class="btn btn-info" value="Edit" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>

<script>
	$(document).ready(function() {
		load_image_data();

		function load_image_data() {
			$.ajax({
				url: "fetch.php",
				method: "POST",
				success: function(data) {
					$('#image_table').html(data);
				}
			});
		}
		$('#multiple_files').change(function() {
			var error_images = '';
			var form_data = new FormData();
			var files = $('#multiple_files')[0].files;
			if (files.length > 10) {
				error_images += 'You can not select more than 10 files';
			} else {
				for (var i = 0; i < files.length; i++) {
					var name = document.getElementById("multiple_files").files[i].name;
					var ext = name.split('.').pop().toLowerCase();
					if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
						error_images += '<p>Invalid ' + i + ' File</p>';
					}
					var oFReader = new FileReader();
					oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
					var f = document.getElementById("multiple_files").files[i];
					var fsize = f.size || f.fileSize;
					if (fsize > 2000000) {
						error_images += '<p>' + i + ' File Size is very big</p>';
					} else {
						form_data.append("file[]", document.getElementById('multiple_files').files[i]);
					}
				}
			}
			if (error_images == '') {
				$.ajax({
					url: "upload.php",
					method: "POST",
					data: form_data,
					contentType: false,
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
					},
					success: function(data) {
						$('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
						load_image_data();
					}
				});
			} else {
				$('#multiple_files').val('');
				$('#error_multiple_files').html("<span class='text-danger'>" + error_images + "</span>");
				return false;
			}
		});

		// edit button function
		$(document).on('click', '.edit', function() {
			var image_id = $(this).attr("id");
			$.ajax({
				url: "edit.php",
				method: "post",
				data: {
					image_id: image_id
				},
				dataType: "json",
				success: function(data) {
					$('#imageModal').modal('show');
					$('#image_id').val(image_id);
					$('#image_name').val(data.image_name);
					$('#image_price').val(data.image_description);
					$('#image_description').val(data.image_description);
				}
			});
		});
		$(document).on('click', '.delete', function() {
			var image_id = $(this).attr("id");
			var image_name = $(this).data("image_name");
			if (confirm("Are you sure you want to remove it?")) {
				$.ajax({
					url: "delete.php",
					method: "POST",
					data: {
						image_id: image_id,
						image_name: image_name
					},
					success: function(data) {
						load_image_data();
						alert("Image removed");
					}
				});
			}
		});
		$('#edit_image_form').on('submit', function(event) {
			event.preventDefault();
			if ($('#image_name').val() == '') {
				alert("Enter Image Name");
			} else {
				$.ajax({
					url: "update.php",
					method: "POST",
					data: $('#edit_image_form').serialize(),
					success: function(data) {
						$('#imageModal').modal('hide');
						load_image_data();
						alert('Image Details updated');
					}
				});
			}
		});
	});

</script>
