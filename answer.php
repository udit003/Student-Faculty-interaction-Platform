<?php
	include 'check_student.php'
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
		<!-- include summernote css-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.css" rel="stylesheet">
		<style>
			.fa-spinner {
				animation: spin 2s linear infinite;
			}
			@keyframes spin {
				from {
					transform: rotate(0deg);
				}
				to {
					transform: rotate(360deg);
				}
			}
		</style>
	</head>
	<body class="pb-5">
		
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
				<li class="breadcrumb-item active" aria-current="page"><a href="student_dash.php">COURSES</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="student_assignment.php?course=backend-courseId">ASSIGNMENTS</a></li>
				<li class="breadcrumb-item active" aria-current="page">SUBMISSION</li>
			</ol>
		</nav>
		<div class="container">
			<h3 class="pt-3 pb-3">QUESTION</h3>
			<p class="border border-secondary p-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quae possimus quis dolorem voluptas dignissimos perspiciatis illo inventore maiores porro autem itaque accusantium reprehenderit, quidem adipisci, at iusto! Nostrum, adipisci!
			</p>
			<h3 class="pt-3 pb-3">ANSWER</h3>
			<button id="btn-submit-answer" class="btn btn-primary mb-3" type="button">Submit <i class="fa fa-paper-plane"></i> <i class="fa fa-spinner" aria-hidden="true" style="display: none"></i></button>
			<div id="summernote">
				<h3>Sample Code in summernote</h3>
			</div>
		</div>
		<div class="modal fade" id="submit-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Answer submitted successfully</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Boostrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<!-- include summernote js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.js"></script>
		<script>
			$(document).ready(function() {
				
				$('#summernote').summernote({
					tabsize: 4,
					minHeight: 200
				});

				$("#btn-submit-answer").click(function() {
					$.ajax({
						url: "#",
						method: "POST",
						data: {
							courseId: "backend-courseId",
							assignId: "backend-assignId",
							answer: $("#summernote").summernote("code")
						},
						beforeSend: function() {
							$(".fa-paper-plane").hide();
							$(".fa-spinner").show();
						},
						success: function() {
							$(".fa-paper-plane").show();
							$(".fa-spinner").hide();
							$("#submit-modal").modal();
						}
					});
				});
			});
		</script>
		
	</body>
</html>