$("document").ready(function() {
	Date.prototype.addDays = function(days) {
		this.setDate(this.getDate() + parseInt(days));
		return this;
	};

	let now = new Date();
	let assign_start_elmt = $("#assign-start-date"),
		assign_end_elmt = $("#assign-end-date"),
		today_date = now.toISOString().substr(0, 10),
		start_date = today_date,
		end_date = (new Date()).addDays(7).toISOString().substr(0, 10);

	assign_start_elmt.val(start_date).prop("min", today_date);
	assign_end_elmt.val(end_date).prop("min", today_date);

	assign_start_elmt.on("change", function(e) {
		start_date = $(this).val();
		if(start_date < today_date) {
			start_date = today_date;
			assign_start_elmt.val(today_date);
		}
		if(start_date > end_date) {
			end_date = start_date;
			assign_end_elmt.val(end_date).prop("min", end_date);
		}
	});

	assign_end_elmt.on("change", function() {
		end_date = $(this).val();
		if (end_date < start_date) {
			end_date = start_date;
			assign_end_elmt.val(end_date).prop("min", end_date);
		}
	});

});