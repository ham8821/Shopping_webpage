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
	<title>Forgot password mainpage</title>
</head>
<body>
	
     <div class="a">
	 </div>
         
	<div class="container">
		<div class="contentbox">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<br>
					<h2> Forgot password?</h2> 
				</div>
			</div>
			<div class="row">
				<div class="logoimg col-sm-12 col-lg-12">
					<img style width="50px" height="50px" src="../images/Logo.png" alt="">
				</div>
			</div>
			<div class="row">
				<div class="description col-sm-12 col-lg-12">
					<p>No worries! it happens! <br> we can help you to reset the password!</p>
				</div>
			</div>
			<div class="row">
				<div class="formbox col-sm-12 col-lg-12">
					<form name="frmForgot" id="frmForgot" method="post">
					<?php if(!empty($success_message)) { ?>
					<div class="success_message"><?php echo $success_message; ?></div>
					<?php } ?>

					<div id="validation-message">
						<?php if(!empty($error_message)) { ?>
					<?php echo $error_message; ?>
					<?php } ?>
					</div>


					
					<br>
					<div><input type="text" name="user-email" id="user-email" value="Email Address" class="input-field"> </div>
					<br>
					<div><input type="submit" name="forgot-password" id="forgot-password" value="SEND" class="form-submit-button" onclick="return validate_forgot();"> </div>
					<br><br>
					</form>	
				</div>
			</div>


		</div>

	</div>
				<div class="gobackbutton">
						<span>back</span>
						<br>
						<a href="../index.php"><img style width:="30px" height="30px" src="../images/plus.png" alt=""></a>
				</div>


</body>
</html>

