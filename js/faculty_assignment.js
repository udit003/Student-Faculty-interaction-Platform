$(document).ready(function() {
	$('#ongoing-assign-table').DataTable();
	$('#completed-assign-table').DataTable();
	let course_id = "cspc";

	$("tr").on("click", function(e) {
		let assignment_id = $(this).data().assignmentId;
		switch(e.target.nodeName) {
			case "BUTTON":
				window.location.href = `update_assignment.html?course=${course_id}&assignment=${assignment_id}`;
				break;
			case "TD":
				window.location.href = `assignment_submissions.html?course=${course_id}&assignment=${assignment_id}`;
				break;
		}
	});
});