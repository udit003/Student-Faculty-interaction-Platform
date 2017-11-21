<?php
	session_start();
	if ($_SESSION['user_type'] != 'faculty'){
		header("Location: login-signup-form.php");
		die();
	}
?>