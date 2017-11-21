<?php
  $error_present = false;

  function clean_data(&$data)
  {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data); 
  }

  if ( isset($_POST['signup']) ) {
  

  $signup_name = $_POST['name'];
  $signup_webmail = $_POST['webmail'];
  $password = $_POST['password'];
  $cpwd = $_POST['cpwd'];
  $dept = $_POST['dept'];
  $user_type = $_POST['user_type'];

  // clean user inputs to prevent sql injections (using pass-by-reference)

  clean_data($name);
  clean_data($webmail);
  clean_data($password);
  clean_data($cpwd);
  clean_data($dept);
  clean_data($user_type);

  // basic name validation
  if (empty($signup_name)) {
   $error_present = true;
   $signup_nameError = "Please enter your full name.";
  } else if (strlen($signup_name) < 3) {
   $error_present = true;
   $signup_nameError = "Name must have atleat 3 characters.";
  } else if (preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error_present = true;
   $signup_nameError = "Name must contain alphabets and space.";
  }
  
  //basic webmail validation
  if(empty($signup_webmail)) {
    $error_present = true;
    $signup_webmailError = "Please enter your Webmail ID.";
  } else if (!preg_match("/^[a-zA-Z0-9]+$/",$signup_webmail)) {
    $error_present = true;
    $signup_webmailError = "Webmail invalid , Please enter a valid Webmail ID.";
  } else {
    $query = "SELECT webmail FROM user_table WHERE webmail='$signup_webmail'";
   $result = $conn->query($query);
   $count = $result->num_rows;
   if($count!=0){
    $error_present = true;
    $signup_webmailError = "This Webmail ID is already registered !";
   }
  }


  // passwordword validation
  if (empty($password)){
   $error_present = true;
   $signup_passwordError = "Please enter password";
  } else if(strlen($password) < 6) {
   $error_present = true;
   $signup_passwordError= "Password must have atleast 6 characters.";
  }
  
  //confrm password error 
  if(!$signup_passwordError == "" && $password !== $cpwd){
    $error_present = true;
    $signup_cpasswordError="Password does not match.";
  }

  //department error 
  $d_num = (int)$dept;
  $query = "SELECT department_name from departments where department_id = $d_num";
  $result = $conn->query($query);
  if($result->num_rows==0){
    $error_present = true; 
    $signup_departmentError="Invalid Deaprtment chosen.";
  }
  
  // if there's no error, continue to signup
  if( !$error_present ) {
    $password = password_hash($password,PASSWORD_DEFAULT);
    $query = "INSERT INTO user_table(name,webmail,password,department_id,user_type) VALUES('$signup_name','$signup_webmail','$password',$d_num,'$user_type')";
    $res = $conn->query($query);
    
   if ($res) {
    $last_id = $conn->insert_id;
    $_SESSION['user_id'] = $last_id;
    $_SESSION['user_type'] = $user_type;
    $_SESSION['department_id'] = $d_num;
    $_SESSION['webmail'] = $signup_webmail;
    $_SESSION['name'] = $signup_name;


    if($user_type=='student'){
       header("Location: student_dash.html");
      die();
    }
    else {
      header("Location: faculty_dash.html");
      die();
    }
  } else {
    echo "Server Error : " . $conn->error;
    echo '<script>alert("Something went wrong....try again later");</script>';
   } 
    
  }
  
  
 }
?>