<?php
	/* This is a system maintenance file, used for adding departments etc .*/ 
	include 'database_login_$conn.php';
		$sql2="use STIP";

	if ($conn->query($sql2) === TRUE) {
	echo "successfull\n";
	} else {
		echo "Unsuccessfull" . $conn->error;
	}	


	$sql1="insert into departments (department_name)
			values('Computer Science and Engineering'),
			('Electrical and Electronics Engineering'),
			('Electronics and Communication Engineering'),
			('Production Engineering'),
			('Instrumentation and Control Engineering'),
			('Mechanical Engineering'),
			('Civil Engineering'),
			('Department of Architecture'),
			('Chemical Engineering'),
			('Computer Applications'),
			('Department of Chemistry'),
			('Metallurgical and Materials Engineering'),
			('Department of Physics'),
			('Department of Mathematics'),
			('Management Studies'),
			('CECASE'),
			('DEE'),
			('Humanities');";

		if ($conn->query($sql1) === TRUE) {
	echo "new departments added successfully\n";
	} else {
		echo "Error inserting into table: " . $conn->error;
	}

	$conn->close();	
?>