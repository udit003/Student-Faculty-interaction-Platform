<?php
if (session_status() == PHP_SESSION_NONE) {
	 header("Location: login-signup-form.php");
      die();
}
else{
	session_start();
	if ($_SESSION['user_type']!='faculty'){
		header("Location: student_dash.php");
      	die();
	}
}	
?>