$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
	$(".btn-edit-assign").on("click", function() {
		window.location.href = "create_assignment.html?assignment=" + $(this).data().assignmentId;
	});
	var filterCourses = function(filterString, parentClass) {
		$(parentClass).find('.assign-item').each(function() {
			if($(this).find('.assign-title').text().toLowerCase().indexOf(filterString) >= 0)
				$(this).show();
			else
				$(this).hide();
		});
	}

	$('#search-ongoing-assignments').on("keyup", function() {
		let filterString = $(this).val();
		filterCourses(filterString, ".ongoing-assign-list");
	});
	$('#search-completed-assignments').on("keyup", function() {
		let filterString = $(this).val();
		filterCourses(filterString, ".completed-assign-list");
	});
})
