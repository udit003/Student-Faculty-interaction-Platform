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
			<li class="breadcrumb-item active" aria-current="page">COURSES</li>
		</ol>
	</nav>
	<!-- TABS -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-ongoing-courses-tab" data-toggle="pill" href="#v-pills-ongoing-courses" role="tab" aria-controls="v-pills-ongoing-courses" aria-selected="true">ONGOING COURSES</a>
					<a class="nav-link" id="v-pills-join-course-tab" data-toggle="pill" href="#v-pills-join-course" role="tab" aria-controls="v-pills-join-course" aria-selected="false">JOIN COURSE</a>
					<a class="nav-link" id="v-pills-past-courses-tab" data-toggle="pill" href="#v-pills-past-courses" role="tab" aria-controls="v-pills-past-courses" aria-selected="false">PAST COURSES</a>
				</div>
			</div>
			<div class="col-10">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade" id="v-pills-join-course" role="tabpanel" aria-labelledby="v-pills-join-course">
						<!-- Available Courses Table -->
						<a href="create_course.php" id="btn-create-course" class="btn btn-outline-primary">CREATE NEW COURSE</a>
						<table id="join-course-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<caption>List of Available Courses</caption>
							<thead class="thead-dark">
								<th scope="col">#</th>
								<th scope="col">Course ID</th>
								<th scope="col">Course Name</th>
								<th scope="col">Started on</th>
								<th scope="col">Ended on</th>
							</thead>
							<tbody>
								<tr data-course-id="CSPC23">
									<th scope="row">1</th>
									<td>CSPC23</td>
									<td>Internetworking Protocols <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC24">
									<th scope="row">2</th>
									<td>CSPC24</td>
									<td>Database Management System <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC25">
									<th scope="row">3</th>
									<td>CSPC25</td>
									<td>Computer Architecture <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade show active" id="v-pills-ongoing-courses" role="tabpanel" aria-labelledby="v-pills-ongoing-courses">
						<!-- Ongoing Courses Table -->
						<table id="ongoing-course-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<caption>List of Ongoing Courses</caption>
							<thead class="thead-dark">
								<th scope="col">#</th>
								<th scope="col">Course ID</th>
								<th scope="col">Course Name</th>
								<th scope="col">Started on</th>
								<th scope="col">Ended on</th>
							</thead>
							<tbody>
								<tr data-course-id="CSPC23">
									<th scope="row">1</th>
									<td>CSPC23</td>
									<td>Internetworking Protocols <span class="badge badge-pill badge-primary ml-2">2</span> <button class="btn btn-outline-primary">Leave <i class="fa fa-sign-out"></i></button></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC24">
									<th scope="row">2</th>
									<td>CSPC24</td>
									<td>Database Management System <span class="badge badge-pill badge-primary ml-2">2</span> <button class="btn btn-outline-primary">Leave <i class="fa fa-sign-out"></i></button></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC25">
									<th scope="row">3</th>
									<td>CSPC25</td>
									<td>Computer Architecture <span class="badge badge-pill badge-primary ml-2">2</span> <button class="btn btn-outline-primary">Leave <i class="fa fa-sign-out"></i></button></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="v-pills-past-courses" role="tabpanel" aria-labelledby="v-pills-past-courses">
						<!-- Past Courses Table -->
						<table id="past-course-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<caption>List of Past Courses</caption>
							<thead class="thead-dark">
								<th scope="col">#</th>
								<th scope="col">Course ID</th>
								<th scope="col">Course Name</th>
								<th scope="col">Started on</th>
								<th scope="col">Ended on</th>
							</thead>
							<tbody>
								<tr data-course-id="CSPC23">
									<th scope="row">1</th>
									<td>CSPC23</td>
									<td>Internetworking Protocols <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC24">
									<th scope="row">2</th>
									<td>CSPC24</td>
									<td>Database Management System <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
								<tr data-course-id="CSPC25">
									<th scope="row">3</th>
									<td>CSPC25</td>
									<td>Computer Architecture <span class="badge badge-pill badge-primary ml-2">2</span></td>
									<td>28-10-2017</td>
									<td>28-12-2017</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container w-50 pt-5 pb-5">
		<h3 class="text-center pb-3 pt-3">JOIN REQUESTS</h3>
		<ul class="list-group">
			<li class="list-group-item flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<small>24-12-2017 12:00 AM</small>
				</div>
				<p class="mb-1 pt-3 pb-3">
					106115095 has requested to join CSPE32 MC
				</p>
				<div class="d-flex w-100 justify-content-start" data-student-id="106115095" data-course-id="CSPE32">
					<button class="btn btn-primary mr-2 btn-approve">Approve</button>
					<button class="btn btn-danger btn-reject">Reject</button>
				</div>
			</li>
			<li class="list-group-item flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<small>24-12-2017 12:00 AM</small>
				</div>
				<p class="mb-1 pt-3 pb-3">
					106115095 has requested to join CSPE32 MC
				</p>
				<div class="d-flex w-100 justify-content-start" data-student-id="106115095" data-course-id="CSPE32">
					<button class="btn btn-primary mr-2 btn-approve">Approve</button>
					<button class="btn btn-danger btn-reject">Reject</button>
				</div>
			</li>
		</ul>
	</div>
	<div class="modal fade bd-example-modal-lg" id="confirm-leave-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h5>Do you want to leave the course: <span class="confirm-leave-text"></span></h5>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" id="confirm-leave" class="btn btn-primary">Proceed</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade bd-example-modal-lg" id="confirm-join-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h5>Request to join <span class="confirm-join-text"></span></h5>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" id="confirm-join" class="btn btn-primary">Proceed</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade bd-example-modal-lg" id="confirm-join-response-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h5>Successfully sent request to join <span class="confirm-join-text"></span></h5>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<!-- DataTable -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#join-course-table').DataTable();
			$('#ongoing-course-table').DataTable();
			$('#past-course-table').DataTable();
			let courseId = "";
			let courseName = "";
			$("#past-course-table tr").on("click", function() {
				courseId = $(this).data().courseId;
				window.location.href = `faculty_assignment.php?course=${courseId}`;
			});
			$("#join-course-table tr").on("click", function() {
				courseName = $(this).find("td:eq(1)").html();
				courseId = $(this).data().courseId;
				if(courseName) {
					courseName = courseName.substring(0, courseName.indexOf("<span"));
					$(".confirm-join-text").html(courseName);
					$('#confirm-join-modal').modal("show");
				}
			});
			$("#confirm-join").click(function() {
				$('#confirm-join-modal').modal("hide");
				$("#confirm-join-response-modal").modal("show");
			});
			$("#ongoing-course-table tr").on("click", function(e) {
				courseId = $(this).data().courseId;
				courseName = $(this).find("td:eq(1)").html();
				switch(e.target.nodeName) {
					case "BUTTON":
						$(".confirm-leave-text").text(courseName);
						$('#confirm-leave-modal').modal("show");
						break;
					case "TD":
						window.location.href = `faculty_assignment.php?course=${courseId}`;
						break;
				}
			});
			$("#confirm-leave").click(function() {
				$('#confirm-leave-modal').modal("hide");
				$.ajax({
					url: "#",
					method: "POST",
					data: {
						courseId: courseId,
						courseName: courseName
					},
					success: function() {
						location.reload();
					}
				});
			});
			$(".btn-approve").click(function() {
				let approve_data = $(this).parent().data();
				$.ajax({
					url: "",
					method: "POST",
					data: {
						courseId: approve_data.courseId,
						studentId: approve_data.studentId,
						action: 'approve'
					},
					success: function() {
						$(this).hide();
					}
				});
			});
			$(".btn-reject").click(function() {
				let reject_data = $(this).parent().data();
				$.ajax({
					url: "",
					method: "POST",
					data: {
						courseId: reject_data.courseId,
						studentId: reject_data.studentId,
						action: 'reject'
					},
					success: function() {
						$(this).hide();
					}
				});
			});
		});
	</script>
</body>
</html>