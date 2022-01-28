<?php

	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jobjet";//database

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	/*user validation part*/
	$validuser = NULL;
	$userpassword = NULL;
	$validation = 0;
	if (!empty($_SESSION['mailP']) AND !empty($_SESSION['passP'])) {
		$mail =$validuser = $_SESSION['mailP'];
		$userpassword = $_SESSION['passP'];
	}

	
	
	$sql = "SELECT * FROM employee WHERE mail LIKE '$validuser' AND password LIKE '$userpassword'";
	mysqli_query($conn, $sql);
	if ((mysqli_affected_rows($conn) > 0) AND ($validuser != NULL) AND ($userpassword != NULL)) {
		$validation = 2;
	}

	$sql = "SELECT * FROM employer WHERE email LIKE '$validuser' AND password LIKE '$userpassword'";
	mysqli_query($conn, $sql);
	
	if ((mysqli_affected_rows($conn) > 0) AND ($validuser != NULL) AND ($userpassword != NULL)) {
		$validation = 1;
	}

	if (!empty($_SESSION['nameP'])) {
		$user = $_SESSION['nameP'];
	}
	else{
		$user = "user";
	}
	











?>