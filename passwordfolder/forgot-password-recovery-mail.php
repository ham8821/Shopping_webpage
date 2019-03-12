<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["email"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "/reset_password.php?name=" . $user["email"] . "'>" . PROJECT_HOME . "/reset_password.php?name=" . $user["email"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "ham38538821@gmail.com";
$mail->Password = "gkaskatn8821!!";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";

$mail->SetFrom("ham38538821@gmail.com", "Admin");
$mail->AddReplyTo("ham38538821@gmail.com", "Admin");
$mail->ReturnPath="ham38538821@gmail.com";	
$mail->AddAddress($user["email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}

?>
