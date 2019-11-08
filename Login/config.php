<?php
	
	$servername = 'localhost';
	$username = 'phpmyadmin';
	$password = 'Shrey1234567890$!';
	$dbname = 'shrey';
	 
	/* Attempt to connect to MySQL database */
	$mysqli = new mysqli($servername, $username, $password, $dbname);
	 
	// Check connection
	if($mysqli === false){
	    die("ERROR: Could not connect. " . $mysqli->connect_error);
	}
?>
