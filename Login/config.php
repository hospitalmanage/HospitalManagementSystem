<?php
	
	$servername = 'localhost';
	$username = 'id11266445_root';
	$password = 'root123456';
	$dbname = 'id11266445_mydb';
	 
	/* Attempt to connect to MySQL database */
	$mysqli = new mysqli($servername, $username, $password, $dbname);
	 
	// Check connection
	if($mysqli === false){
	    die("ERROR: Could not connect. " . $mysqli->connect_error);
	}
?>
