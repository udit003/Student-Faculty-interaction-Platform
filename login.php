<?php
	$error = false;
 
 if( isset($_POST['login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $webmail = trim($_POST['webmail']);
  $webmail = strip_tags($webmail);
  $webmail = htmlspecialchars($webmail);
  
  $pwd = trim($_POST['pwd']);
  $pwd = strip_tags($pwd);
  $pwd = htmlspecialchars($pwd);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($webmail)){
   $error = true;
   $webmailError = "Please enter your webmail address.";
  } else if ( !filter_var($webmail,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $webmailError = "Please enter valid webmail address.";
  }
  
  if(empty($pwd)){
   $error = true;
   $pwdError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $pwd = hash('sha256', $pwd); // pwdword hashing using SHA256
   
   $sql = "SELECT name, webmail, password ,user_type FROM user_table WHERE webmail='$webmail'";
   $result=$conn->query($sql);
	$row=$result->fetch_assoc();
  // if uname/pwd correct it returns must be 1 row
   
   if( $row['password']==$pwd ) {
    $_SESSION['user'] = $row['webmail'];
    if($row['user_type']=='Student')
    	header("Location: student.php");
    else
    	header("Location: faculty.php");
   } else {
    	echo '<script>alert("Incorrect Credentials, Try again...");</script>';

   }
    
  }
  
 }
?>