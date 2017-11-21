<?php
	include 'check_faculty.php';
	$id_error ='';
	$name_error = '';
	$course_id = '';
	$course_name = '';
	if (isset($_POST['create_course_form'])) {
		include 'new_course.php';
	}
	
?>

<!doctype html>
<html lang="en">
	<head>
		<title>DASHBOARD</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		
		<!-- Fontawesome Icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		
		<!-- NAVBAR -->
		<nav class="navbar navbar-light bg-dark">
			<a class="navbar-brand text-light" href="#">
				<i class="fa fa-book" aria-hidden="true"></i>
				OUR PROJECT NAME
			</a>
			<form class="form-inline" method="" action="">
				<span class="text-light"><i class="fa fa-user-o"></i> USERNAME</span>
				<button class="btn mx-4 btn-outline-info my-2 my-sm-0" type="submit">LOGOUT</button>
			</form>
		</nav>
		<!-- BREADCRUMBS -->
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><a href="faculty_dash.php">COURSES</a></li>
				<li class="breadcrumb-item active" aria-current="page">CREATE COURSE</li>
			</ol>
		</nav>
		<div class="container w-50 text-center">
			<h4 class="p-3">CREATE NEW COURSE</h4>
			<form class="border border-muted p-5 text-left" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
				<div class="form-group">
					<label for="course-id">Course ID</label>
					<input type="text" class="form-control <?php if(!empty($id_error)) echo 'is-invalid'?>" id="course-id" name ="course_id" placeholder="Enter Course ID" value = "<?php echo $course_id ?>" required autofocus>
					<div class="invalid-feedback">
						<?php echo $id_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="course-name">Course Name</label>
					<input type="text" class="form-control <?php if(!empty($name_error)) echo 'is-invalid'?>" id="course-name" name="course_name" value = "<?php echo $course_name ?>" placeholder="Enter Course Name" required>
					<div class="invalid-feedback">
						<?php echo $name_error; ?>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="create_course_form" value="YES">Submit</button>
			</form>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>