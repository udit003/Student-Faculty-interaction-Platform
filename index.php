<!DOCTYPE html>
<!DOCTYPE html>
<html>
<style>
	.error {
		color:red;
	}
</style>
<head>
	<title>welcome</title>
</head>
<body>
	<div id = "login_sec">
		<h2> LOGIN HERE </h2>
		<form name = "login_form" method="POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
			Webmail : <input type="text" name="webmail" maxlength ="30" required><br><br>
			Password : <input type = "Password" name="pwd" maxlength="20" required>
			<input type="submit" name="Submit">
		</form>
	</div>

	<div id = "signup_sec">
		<h2> SIGNUP HERE </h2>
		<form name = "signup_form" id = "signup_form" method="POST" >
			Name : <input type="text" name="name" maxlength="30" required pattern="^[A-Za-z ]+$"><br><br>
			Webmail ID : <input type="text" name="webmail" maxlength="30" required pattern="^[A-Za-z0-9]+$">@nitt.edu<br><br>
			Password : <input type="password" id = "pwd" name="pwd" maxlength="20" required pattern=".{6,}"><span class = "error" id = "pwd_valid"></span><br>
			password should be minimum six characters long<br>
			Confirm Password : <input type="password" id = "cpwd" name="pwd_cnfrm" maxlength="20" required><span class="error" id = "pwd_matched_or_not"></span><br><br>
			Department : <input type="text" name="dept" maxlength="40" required><br><br>
			<input type="radio" name="designation" value="student" checked>Student &nbsp
			<input type="radio" name="designation" value="faculty"> Faculty
			<input type="submit" id = "signup_btn">
		</form>
		<script src="index_js.js"></script>
</body>
</html>