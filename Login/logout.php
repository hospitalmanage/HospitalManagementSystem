<?php

	//Inintialise the session
	session_start();

	//Unset all the session variables
	$_SESSION = array();

	//Destro the session
	session_destroy();

	//Redirect to login page
	header('location: login.php');
	exit;
?>


