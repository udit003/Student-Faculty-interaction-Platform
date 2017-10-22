<?php
  session_start();
  if(isset($_SESSION['user_id'])){
    if($_SESSION['user_type']=="student"){
      header("Location: Student-Dashboard.php");
      die();
    }
    else {
      header("Location: Faculty-Dashboard.php");
      die();
    }
  }
  $signup_name="";
  $signup_webmail="";
  $login_webmail="";

  $signup_nameError="";
  $signup_webmailError="";
  $signup_passwordError="";
  $signup_cpasswordError="";
  $signup_departmentError="";
  $login_webmailError="";
  $login_passwordError="";
  include 'database_login_$conn.php';
  if(isset($_POST['signup']))
    include 'signup.php';
  if(isset($_POST['login']))
    include 'login.php';
  
?>

<html>
  <head>
    <title>login-signup-page</title>
    <style>
      .error {
         color:red;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="login-signup-form.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="About.php">About</a></li>
        </ul>
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="navbar-form navbar-right form-inline" >
          <div class="form-group">
            <font color="grey">
                  <div class="form-group">
                    <label for="webmail" style="font-size: 20px">Webmail</label>
                    <input type="text" class="form-control" maxlength="30"  name="webmail" value="<?php echo $login_webmail;?>" required > &nbsp &nbsp
                    <span class="text-danger"><?php echo $login_webmailError; ?></span>
                  </div>
                  <div class="form-group">
                    <label for="pwd" style="font-size: 20px">Password </label>
                    <input type="password" class="form-control" name="pwd" required>
                     <span class="text-danger"><?php echo $login_passwordError; ?></span>
                  </div>
                  <button type="submit" class="btn btn-primary" name="login">Login</button>
            </font>
          </div>
          
         </form>
        
      </div>
    </nav>


    <h1 align="center"><font face="Arial"><i><u>SignUp Here !!</u></i></font></h1>
    <div style="width:60%;height:50%;margin-right:auto;margin-left:auto">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
          <p><span class="error">* required field.</span></p>
          <label for="name">Name <span class = "error">* </span></label>
          <input type="text" class="form-control" id="Name" name="name" pattern="^[A-Za-z\. ]+$" value="<?php echo $signup_name;?>" required>
          <span class="text-danger"><?php echo $signup_nameError; ?></span>
        </div>
        <div class="form-group">
          <label for="webmail">Webmail <span class = "error">* </span></label>
          <input type="text" class="form-control" id="webmail" name="webmail" pattern = "^[A-Za-z0-9]+$"
           value="<?php echo $signup_webmail;?>" required>
          <span style="display: inline-block;font-size: 20px"> @nitt.edu</span>
          <span class="text-danger"><?php echo $signup_webmailError; ?></span>
        </div>
        <div class="form-group">
          <label for="pwd">Password <span class = "error">* </span></label>
          <input type="password" class="form-control" id="pwd" name="password" pattern=".{6,}" placeholder="minimum six characters" required>
          <span class="text-danger" id = "pwd_valid"><?php echo $signup_passwordError; ?></span>
        </div>
        <div class="form-group">
          <label for="cpwd">Confirm Password <span class = "error">* </span></label>
          <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Re-enter the password" required>
           <span class="text-danger" id = "pwd_matched_or_not"><?php echo $signup_cpasswordError; ?></span>
        </div>
        <div class="form-group">
          <label for="dept">Department <span class = "error">* </span></label>
          <?php 
            $depts= $conn->query("select department_id ,department_name from departments;");
            if(mysqli_num_rows($depts)) {
               $dept_list = '<select class= "form-control" name = "dept">';
               while($rs=mysqli_fetch_array($depts)){
                  $dept_list.='<option value="'.$rs['department_id'].'">'.$rs['department_name'].'</option>';
              }
            }
            $dept_list.='</select>';
            echo $dept_list;
            $conn->close();
          ?>
          <span class="text-danger"><?php echo $signup_departmentError; ?></span>
        </div>
        <div class="form-group">
          <span style="font-size: 20px;font-weight: bold;"> You want to register as <span class = "error">* </span>&nbsp 
          <label><input type="radio" name="user_type" value="student" checked> Student &nbsp &nbsp</label>
          <label><input type="radio" name="user_type" value="faculty"> Faculty</label>
        </div>
        <button type="submit" class="btn btn-success btn-block btn-lg" name="signup" id = "signup_btn">SignUp</button>
      </form>
    </div>
  <script src="index_js.js"></script>
  </body>
</html>