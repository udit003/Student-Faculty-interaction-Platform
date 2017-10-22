
<?php
	/* This file is used for creating the database , initializing all the tables 
	    *****RUN ONLY WHEN DEPLOYING THE PROJECT FOR THE FIRST TIME IN YOUR SYSTEM******/
	$servername="localhost";
	$username="root";
	$password="rangrezz";
	$conn=new mysqli($servername,$username,$password);

	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql0="drop database if exists STIP";//this will delete any existing database,CAREFUL 
	if ($conn->query($sql0) === TRUE) {
	echo "Done";
	} else {
		echo "Not done " . $conn->error;
	}

	// connection to the mysql server is established and old databases for the project are deleted
	$sql = "CREATE DATABASE STIP";

	if ($conn->query($sql) === TRUE) {
	echo "Database created successfully\n ";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$sql2="use STIP";

	if ($conn->query($sql2) === TRUE) {
	echo "successfull\n";
	} else {
		echo "Unsuccessfull" . $conn->error;
	}	
   // successfully entered into STIP database
	$sql1="create table departments(department_id int AUTO_INCREMENT,department_name varchar(50), PRIMARY KEY(department_id));";
	if ($conn->query($sql1) === TRUE) {
	echo "departments created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$sql1="create table user_table(user_id int AUTO_INCREMENT , name varchar(255) NOT NULL,webmail varchar(255) NOT NULL ,password varchar(255),department_id int ,user_type enum('student','faculty'),
		PRIMARY KEY(user_id), FOREIGN KEY (department_id) references departments(department_id));";

	if ($conn->query($sql1) === TRUE) {
	echo "user_table created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$sql1 = "create table courses (course_id varchar(30) NOT NULL , course_name varchar(30) NOT NULL, course_status enum('open' , 'close'), offered_by int,PRIMARY KEY(course_id), FOREIGN KEY(offered_by) references departments(department_id));";

	if ($conn->query($sql1) === TRUE) {
		echo "courses created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$sql1 = "create table user_courses (course_id varchar(30) ,user_id int ,approval_status enum('applied' , 'approved','rejected','completed') , start_date DATE,end_date DATE , PRIMARY KEY(course_id,user_id,start_date),FOREIGN KEY (course_id) references courses (course_id), FOREIGN KEY (user_id) references user_table (user_id));";

	if ($conn->query($sql1) === TRUE) {
		echo "user_courses created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$sql1 = "create table assignments(assignment_id int AUTO_INCREMENT, title TINYTEXT NOT NULL , assignment_ques TEXT NOT NULL , course_id varchar(30), start_date DATETIME , end_date DATETIME,
	FOREIGN KEY (course_id) references courses (course_id), PRIMARY KEY (assignment_id) )";

	if ($conn->query($sql1) === TRUE) {
		echo "assignments created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$sql1 ="create table user_assignments(user_id int , assignment_id int , submission__status enum('saved', 'submitted') , grade varchar(5) default '--', assignment_solution TEXT , 
		FOREIGN KEY (user_id) references user_table(user_id), FOREIGN KEY (assignment_id) references assignments(assignment_id),PRIMARY KEY (user_id, assignment_id));";

		if ($conn->query($sql1) === TRUE) {
		echo "user_assignments created successfully\n";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	
	// only grade has a default value --

	$conn->close();
?>