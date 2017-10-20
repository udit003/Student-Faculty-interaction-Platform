<?php
  session_start();
  $nameError="";
  $webmailError="";
  $passwordError="";
  include 'mysql.php';
  if(isset($_POST['signup']))
    include 'signup.php';
  if(isset($_POST['login']))
    include 'login.php';
  

?>
<html>
  <head>
    <title>login-signup-page</title>
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
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="navbar-form navbar-right">
          <div class="form-group">
            <font color="grey">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="webmail">Webmail:</label>
                    <input type="webmail" class="form-control" name="webmail">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd">
                  </div>
                  <button type="Login" class="btn btn-default" name="login">Login</button>
                </form>
              </font>
          </div>
          
         </form>
        
      </div>
    </nav>


    <h1 align="center"><font face="Arial"><i><u>SubmitHere.com</u></i></font></h1>
    <div style="width:60%;height:50%;margin-right:auto;margin-left:auto">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="Name" class="form-control" id="Name" name="name">
          <span class="text-danger"><?php echo $nameError; ?></span>
        </div>
        <div class="form-group">
          <label for="webmail">Webmail address:</label>
          <input type="webmail" class="form-control" id="webmail" name="webmail">
          <span class="text-danger"><?php echo $webmailError; ?></span>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="password">
          <span class="text-danger"><?php echo $passwordError; ?></span>
        </div>
        <div class="form-group">
          <label for="Dept">Department:</label>
          <input type="Department" class="form-control" id="Dept" name="Dept">
        </div>
        <div class="form-group">
          <label><input type="radio" name="type" value="Faculty" checked> Faculty</label>
          <label><input type="radio" name="type" value="Student"> Student</label>
        </div>
        <button type="signup" class="btn btn-primary btn-block btn-lg" name="signup">SignUp</button>
      </form>
    </div>
    
  </body>
</html>