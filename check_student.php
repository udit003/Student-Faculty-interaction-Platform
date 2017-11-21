<?php
	session_start();
	if ($_SESSION['user_type'] != 'student'){
		header("Location: login-signup-form.php");
		die();
	}
?>