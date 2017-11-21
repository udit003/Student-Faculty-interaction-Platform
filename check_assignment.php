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
		<!-- Boostrap Slider -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
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
				<li class="breadcrumb-item active" aria-current="page">GRADE ASSIGNMENT</li>
			</ol>
		</nav>
		<div class="container w-50 text-center">
			<h4 class="p-3">GRADE ASSIGNMENT</h4>
			<form action="#">
				<div class="form-group">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="mark-system" id="mark-by-grade" value="grade" checked> Grade
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="mark-system" id="mark-by-score" value="score"> Score
						</label>
					</div>
				</div>
				<div class="form-group">
					<div id="grade-slider">
						<input name="marks" id="grade-slider" type="text"
						data-provide="slider"
						data-slider-ticks="[1, 2, 3, 4, 5, 6]"
						data-slider-ticks-labels='["A", "B", "C", "D", "E", "F"]'
						data-slider-min="1"
						data-slider-max="6"
						data-slider-step="1"
						data-slider-value="1"
						data-slider-tooltip="hide" />
					</div>
					<div id="grade-score" class="justify-content-center" style="display: none;">
						<input type="text" id="grade-score" class="form-control w-25" placeholder="Enter Score" required>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
		<div class="container">
			<h3 class="pt-3 pb-3">QUESTION</h3>
			<p class="border border-secondary p-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quae possimus quis dolorem voluptas dignissimos perspiciatis illo inventore maiores porro autem itaque accusantium reprehenderit, quidem adipisci, at iusto! Nostrum, adipisci!
			</p>
			<h3 class="pt-3 pb-3">ANSWER</h3>
			<p class="border border-secondary p-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus provident accusamus quasi saepe, delectus eveniet architecto doloribus ducimus eligendi quis.
			</p>
		</div>
	</div>
	
	<!-- Boostrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<!-- Boostrap Slider -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
	<script>
		$(document).ready(function() {
			$("input[type='radio']").click(function() {
				let radioValue = $("input[name='mark-system']:checked").val();
				switch(radioValue) {
					case "grade":
						$("#grade-score").css("display", "none");
						$("#grade-slider").css("display", "block");
						break;
					case "score":
						$("#grade-score").css("display", "flex");
						$("#grade-slider").css("display", "none");
						break;
				}
			});
		});
	</script>
</body>
</html>