<?php 
include 'check_student.php';
include 'config.php';
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
							<table id="join-course-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<caption>List of Available Courses</caption>
								<thead class="thead-dark">
									<th scope="col">#</th>
									<th scope="col">Course ID</th>
									<th scope="col">Course Name</th>
									<th scope="col">Started on</th>
								</thead>
								<tbody>
									<tr data-course-id="CSPC23">
										<th scope="row">1</th>
										<td>CSPC23</td>
										<td>Internetworking Protocols <span class="badge badge-pill badge-primary ml-2">2</span></td>
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
								</thead>
								 <?php 
            $ongoing_courses = $conn->query("select user_courses.course_id ,course_name,start_date from user_courses,courses where user_id=".$_SESSION['user_id']." AND approval_status='approved' AND user_courses.course_id = courses.course_id");
            $row_count = 1;
            if(mysqli_num_rows($ongoing_courses)) {
               $ongoing_c_list = '<tbody>';
               while($rs=mysqli_fetch_array($ongoing_courses)){
                  $ongoing_c_list.='<tr data-course-id="'.
                  $rs['course_id'].
                  '"><th scope="row">'.
                  $row_count++.
                  '</th><td>'.
                  $rs['course_id'].
                  '</th><td>'.
                  $rs['course_name'].
                  '<span class="badge badge-pill badge-primary ml-2"></span></td><td>'.
                  $rs['start_date'].
                  '</td></tr>';
              }
               $ongoing_c_list.='</tbody>';
            echo $ongoing_c_list;
            }
           
          ?> 
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
									 <?php 
            $past_courses = $conn->query("select user_courses.course_id ,course_name,start_date,end_date from user_courses,courses where user_id=".$_SESSION['user_id']." AND approval_status='completed' AND user_courses.course_id = courses.course_id");
            $row_count = 1;
            if(mysqli_num_rows($past_courses)) {
               $past_c_list = '<tbody>';
               while($rs=mysqli_fetch_array($past_courses)){
                  $past_c_list.='<tr data-course-id="'.
                  $rs['course_id'].
                  '"><th scope="row">'.
                  $row_count++.
                  '</th><td>'.
                  $rs['course_id'].
                  '</th><td>'.
                  $rs['course_name'].
                  '<span class="badge badge-pill badge-primary ml-2"></span></td><td>'.
                  $rs['start_date'].
                  '</td><td>'.
                  $rs['end_date'].
                  '</tr>';
              }
               $past_c_list.='</tbody>';
            echo $past_c_list;
            }
           
          ?> 
							</table>
						</div>
					</div>
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
	
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<h5>Successfully requested to join <span class="confirm-join-text"></span></h5>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
			let joinCourseId = "";
			$("#join-course-table tr").on("click", function() {
				let courseName = $(this).find("td:eq(1)").html();
				joinCourseId = $(this).data().courseId;
				if(courseName) {
					courseName = courseName.substring(0, courseName.indexOf("<span"));
						$(".confirm-join-text").html(courseName);
						$('#confirm-join-modal').modal("show");
					}
				});
			});
			$("#confirm-join").click(function() {
				$('#confirm-join-modal').modal("hide");
				$("#confirm-join-response-modal").modal("show");
			});
			$(document).on("click", "#ongoing-course-table tr, #past-course-table tr", function() {
				window.location.href = `student_assignment.html?course=${$(this).data().courseId}`;
			});
		</script>
	</body>
</html>