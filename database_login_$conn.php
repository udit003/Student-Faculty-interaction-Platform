<?php
	/* DATABASE LOGIN DETAILS AND USE "STIP" DATABASE */
	$servername="localhost";
	$username="root";
	$password="rangrezz";
	$conn=new mysqli($servername,$username,$password);

	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql2="use STIP";
	$conn->query($sql2);
?>
