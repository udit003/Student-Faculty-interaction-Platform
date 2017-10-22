<?php
$error_present = false;

function clean_data(&$data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data); 
}


if( isset($_POST['login']) ) { 

  $login_webmail = $_POST['webmail'];
  $password = $_POST['pwd'];
  clean_data($login_webmail);
  clean_data($password);
  echo "$login_webmail , $password";

  //checking for webmail error 
  if(empty($login_webmail)){
    $error_present = true;
    $login_webmailError= "Please enter your Webmail address.";
} else if(!preg_match("/^[a-zA-Z0-9]+$/",$login_webmail)){
    $error_present = true;
   $login_webmailError = "Please enter valid Webmail ID.";
}

if(empty($password)){
   $error_present = true;
   $login_passwordError = "Please enter your Password.";
}

// if there's no error, continue to login
if (!$error_present) {

   $sql = "SELECT user_id,name, webmail, password ,department_id,user_type FROM user_table WHERE webmail='$login_webmail'";
   //echo $sql;
   $result=$conn->query($sql);
   if($result->num_rows==0)
    $login_webmailError = "This Webmail not registered.";
else {
    $row=$result->fetch_assoc();
  // if uname/pwd correct it returns must be 1 row
    if(password_verify($password , $row['password']))
    {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['department_id'] = $row['department_id'];
        $_SESSION['webmail'] = $row['webmail'];
        $_SESSION['name'] = $row['name'];
        if($row['user_type']=='student'){
         header("Location: Student-Dashboard.php");
         die();
     }
     else {
        header("Location: Faculty-Dashboard.php");
        die();
    }
}
else {
    $login_passwordError = "Password Incorrect.";
}
}
}

}
?>