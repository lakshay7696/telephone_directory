<?php
	$username="root";
	$pass="";
	$db="tele";
	$server="localhost";
	$conn = new mysqli($server, $username, $pass, $db);
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
?>