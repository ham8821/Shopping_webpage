<?php
include 'emailsending.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/password.css">
    <script  src="../main.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/css/bootstrap.css"></link>
    <script type="text/javascript" src="Css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet">   
	<title>Reset password mainpage</title>
</head>
<body>
	
     <div class="b">
	 </div>
         
	<div class="container">
		<div class="contentbox2">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<br>
					<h2> Reset your password</h2> 
				</div>
			</div>
			<div class="row">
				<div class="logoimg col-sm-12 col-lg-12">
					<img style width="50px" height="50px" src="../images/origami.png" alt="">
				</div>
			</div>
			<div class="row">
				<div class="description col-sm-12 col-lg-12">
					<p>No worries! it happens! <br> we can help you to reset the password!</p>
				</div>
			</div>
			<div class="row">
				<div class="formbox col-sm-12 col-lg-12">
					<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
					<?php if(!empty($success_message)) { ?>
					<div class="success_message"><?php echo $success_message; ?></div>
					<?php } ?>

					<div id="validation-message">
						<?php if(!empty($error_message)) { ?>
					<?php echo $error_message; ?>
					<?php } ?>
					</div>


					
					<div><label for="Password">Password</label></div>
					<div>
					<input type="password" name="password" id="password" class="input-field2"></div>
					<br>
					<div><label for="email">Confirm Password</label></div>
					<div><input type="password" name="confirm_password" id="confirm_password" class="input-field2"></div>
					<br>
					<div><input type="submit" name="reset-password" id="reset-password2" value="RESET" class="form-submit-button"></div>
					<br>
					</form>	
				</div>
			</div>


		</div>

	</div>
				

</body>
</html>

