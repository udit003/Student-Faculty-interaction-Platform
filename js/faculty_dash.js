$(document).ready(function() {
	var filterCourses = function(filterString, parentClass) {
		$(parentClass).find('.course-item').each(function() {
			if($(this).find('.c-id').text().toLowerCase().indexOf(filterString) >= 0 || $(this).find('.c-name').text().toLowerCase().indexOf(filterString) >= 0)
				$(this).show();
			else
				$(this).hide();
		});
	}

	$('#search-join-courses').on("keyup", function() {
		let filterString = $(this).val();
		filterCourses(filterString, ".join-course-list");
	});
	$('#search-ongoing-courses').on("keyup", function() {
		let filterString = $(this).val();
		filterCourses(filterString, ".ongoing-course-list");
	});
	$('#search-past-courses').on("keyup", function() {
		let filterString = $(this).val();
		filterCourses(filterString, ".past-course-list");
	});
})
