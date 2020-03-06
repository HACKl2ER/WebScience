<?php
	$servername = "localhost";
	$username = "admin";
	$password = "admin";
	$dbname = "v12";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>