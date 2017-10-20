<?php

  $error=false;
  if ( isset($_POST['signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $webmail = trim($_POST['webmail']);
  $webmail = strip_tags($webmail);
  $webmail = htmlspecialchars($webmail);
  
  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  
  $dept = trim($_POST['Dept']);
  $dept = strip_tags($dept);
  $dept = htmlspecialchars($dept);
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic webmail validation
  if ( !filter_var($webmail,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $webmailError = "Please enter valid webmail address.";
  } else {
   // check webmail exist or not
   $query = "SELECT webmail FROM user_table WHERE webmail='$webmail'";
   $result = $conn->query($query);
   $count = $result->num_rows;
   if($count!=0){
    $error = true;
    $webmailError = "Provided webmail is already in use.";
   }
  }
  // passwordword validation
  if (empty($password)){
   $error = true;
   $passwordError = "Please enter password";
  } else if(strlen($password) < 6) {
   $error = true;
   $passwordError = "password must have atleast 6 characters.";
  }
  
  // passwordword encrypt using SHA256();
  $password = hash('sha256', $password);
  
  // if there's no error, continue to signup
  if( !$error ) {
    $dept=$_POST['Dept'];
    $type=$_POST['type'];
    $Student='Student';
    $Faculty='Faculty';
    if($type=='Student')
       $query = "INSERT INTO user_table(name,webmail,password,Department,user_type) VALUES('$name','$webmail','$password','$dept','$Student')";
    else
      if($type=='Faculty')
       $query = "INSERT INTO user_table(name,webmail,password,Department,user_type) VALUES('$name','$webmail','$password','$dept','$Faculty')";
       $res = $conn->query($query);
    
   if ($res) {
    
   echo '<script>alert("Successfully registered, you may login now");</script>';
   
   } else {
    echo "Not done " . $conn->error;
    echo '<script>alert("Something went wrong....try again later");</script>';
   } 
    
  }
  
  
 }
?>