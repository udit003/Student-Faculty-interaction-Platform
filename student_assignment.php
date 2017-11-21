<!doctype html>
<html lang="en">
	<head>
		<title>DASHBOARD</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!-- DataTables -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
		
		<link rel="stylesheet" href="css/table.css">
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
				<li class="breadcrumb-item" aria-current="page"><a href="student_dash.php">COURSES</a></li>
				<li class="breadcrumb-item active" aria-current="page">ASSIGNMENTS</li>
			</ol>
		</nav>
		<!-- TABS -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-2">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-ongoing-assign-tab" data-toggle="pill" href="#v-pills-ongoing-assign" role="tab" aria-controls="v-pills-ongoing-assign" aria-selected="true">ONGOING</a>
						<a class="nav-link" id="v-pills-completed-assign-tab" data-toggle="pill" href="#v-pills-completed-assign" role="tab" aria-controls="v-pills-completed-assign" aria-selected="false">COMPLETED</a>
					</div>
				</div>
				<div class="col-10">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-ongoing-assign" role="tabpanel" aria-labelledby="v-pills-ongoing-assign">
							<!-- Ongoing Assignment Table -->
							<table id="ongoing-assign-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<caption>List of Ongoing Assignments</caption>
								<thead class="thead-dark">
									<th scope="col">#</th>
									<th scope="col">Assignment Title</th>
									<th scope="col">Start Date</th>
									<th scope="col">End date</th>
								</thead>
								<tbody>
									<tr data-assignment-id="assign1">
										<th scope="row">1</th>
										<td>MIPS Programming
										</td>
										<td>28-12-2017</td>
										<td>28-12-2017</td>
									</tr>
									<tr data-assignment-id="assign2">
										<th scope="row">2</th>
										<td>Pipelining
										</td>
										<td>28-12-2017</td>
										<td>28-12-2017</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="v-pills-completed-assign" role="tabpanel" aria-labelledby="v-pills-completed-assign">
							<!--  Assignment Table -->
							<table id="completed-assign-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<caption>List of Completed Assignments</caption>
								<thead class="thead-dark">
									<th scope="col">#</th>
									<th scope="col">Assignment Title</th>
									<th scope="col">Start Date</th>
									<th scope="col">End date</th>
								</thead>
								<tbody>
									<tr data-assignment-id="assign1">
										<th scope="row">1</th>
										<td>Assignment 1</td>
										<td>28-12-2017</td>
										<td>28-12-2017</td>
									</tr>
									<tr data-assignment-id="assign2">
										<th scope="row">2</th>
										<td>Assignment 2</td>
										<td>28-12-2017</td>
										<td>28-12-2017</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<!-- DataTable -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#ongoing-assign-table').DataTable();
			$('#completed-assign-table').DataTable();
			let course_id = "backend-courseId";

			$("tr").on("click", function(e) {
				let assignment_id = $(this).data().assignmentId;
				window.location.href = `answer.php?course=${course_id}&assign=${assignment_id}`;
			});
		});
	</script>
</body>
</html>