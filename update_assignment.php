<?php
	include 'check_faculty.php'
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
				<li class="breadcrumb-item active" aria-current="page"><a href="faculty_dash.html">COURSES</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="faculty_assignment.html?course=backend-course">ASSIGNMENTS</a></li>
				<li class="breadcrumb-item active" aria-current="page">UPDATE ASSIGNMENT</li>
			</ol>
		</nav>
		<div class="container w-50 text-center">
			<h4 class="p-3">UPDATE ASSIGNMENT</h4>
			<form class="border border-muted p-5 text-left">
				<div class="form-group">
					<label for="assign-title">Assignment Title</label>
					<input type="text" class="form-control" id="assign-title" name="assign-title" placeholder="Enter Assignment Title" required autofocus>
					<div class="invalid-feedback">
						Please provide a valid Assignment title.
					</div>
				</div>
				<div class="form-group">
					<label for="assign-question">Assignment Question</label>
					<textarea class="form-control" name="assign-question" id="assign-question" cols="30" rows="5" placeholder="Assignment Question" required></textarea>
					<div class="invalid-feedback">
						Please provide a valid Assignment Question.
					</div>
				</div>
				<div class="form-group">
					<label for="assign-start-date">Assignment Start date</label>
					<input type="date" class="form-control" id="assign-start-date" required>
					<div class="invalid-feedback">
						Please select the assignment start date.
					</div>
				</div>
				<div class="form-group">
					<label for="assign-end-date">Assignment Deadline</label>
					<input type="date" class="form-control" id="assign-end-date" required>
					<div class="invalid-feedback">
						Please select the assignment deadline.
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	
	<!-- Boostrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
	<script src="js/create_assignment.js"></script>
</body>
</html>