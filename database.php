
<?php
	$servername="localhost";
	$username="root";
	$password="vimal";
	$conn=new mysqli($servername,$username,$password);

	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql0="drop database user_data";
	if ($conn->query($sql0) === TRUE) {
	echo "Done";
	} else {
		echo "Not done " . $conn->error;
	}
	$sql = "CREATE DATABASE user_data";

	if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$sql2="use user_data";

	if ($conn->query($sql2) === TRUE) {
	echo "successfull";
	} else {
		echo "Unsuccessfull" . $conn->error;
	}	

	$sql1="create table user_table(Name varchar(20),Webmail varchar(20),Password varchar(50),Department varchar(20),user_type varchar(20))";

	if ($conn->query($sql1) === TRUE) {
	echo "Table created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}	

	$conn->close();
?>