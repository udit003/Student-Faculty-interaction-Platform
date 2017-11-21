<?php
	include 'check_faculty.php';
	$title_error ='';
	$ques_error = '';
	$start_time_error = '';
	$end_time_error = '';
	$assign_title='';
	$assign_ques='';
	$start_date='';
	$end_date='';
	$start_time='';
	$end_time='';

	if (isset($_POST['create_assign'])) {
		include 'new_assign.php';
	}
	else
		$_SESSION['create_assign_course']=$_GET['course'];
	
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
				<li class="breadcrumb-item active" aria-current="page"><a href="faculty_assignment.php?course=backend-course">ASSIGNMENTS</a></li>
				<li class="breadcrumb-item active" aria-current="page">CREATE ASSIGNMENT</li>
			</ol>
		</nav>
		<div class="container w-50 text-center" >
			<h4 class="p-3">CREATE NEW ASSIGNMENT</h4>
			<form class="border border-muted p-5 text-left" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="form-group">
					<label for="assign-title">Assignment Title</label>
					<input type="text" class="form-control <?php if(!empty($title_error)) echo 'is-invalid'?>" id="assign-title" value = "<?php echo $assign_title ?>" name="assign-title" placeholder="Enter Assignment Title" required autofocus>
					 
					<div class="invalid-feedback">
						<?php echo $title_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="assign-question">Assignment Question</label>
					<textarea class="form-control <?php if(!empty($ques_error)) echo 'is-invalid'?>" name="assign-ques" value = "<?php echo $assign_question ?>" id="assign-question" cols="30" rows="5" placeholder="Assignment Question" required></textarea>
					<div class="invalid-feedback">
						<?php echo $ques_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="assign-start-date">Assignment Start date</label>
					<input type="date" class="form-control <?php if(!empty($start_date_error)) echo 'is-invalid'?>" id="assign-start-date" name="start-date" required>
					<div class="invalid-feedback">
						<?php echo $start_date_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="assign-start-time">Assignment Start time</label>
					<input type="time" class="form-control <?php if(!empty($start_time_error)) echo 'is-invalid'?>" id="assign-start-time" name="start-time" value="00:00" required>
					<div class="invalid-feedback">
						<?php echo $start_time_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="assign-end-date">Assignment End date</label>
					<input type="date" class="form-control <?php if(!empty($end_date_error)) echo 'is-invalid'?>" name="end-date" id="assign-end-date" required>
					<div class="invalid-feedback">
						<?php echo $end_date_error; ?> 
					</div>
				</div>
				<div class="form-group">
					<label for="assign-end-time">Assignment End time</label>
					<input type="time" class="form-control <?php if(!empty($end_time_error)) echo 'is-invalid'?>" id="assign-end-time" name="end-time" value="00:00" required>
					<div class="invalid-feedback">
						<?php echo $end_time_error; ?> 
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="create_assign">Submit</button>
			</form>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/create_assignment.js"></script>
</body>
</html>