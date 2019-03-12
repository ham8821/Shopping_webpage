<?php
if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "sup");
		
		$condition = "";
	
		if(!empty($_POST["user-email"])) {
			
			$condition = " email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select (email) from user " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}