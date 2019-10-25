<?php
    // Validating form here
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hospital Management System</title>
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<style>
		body {
			font :14px Courier New;
			height: 1500px;
		}
		ul {
			list-style-type: none;
			margin: 0px;
			padding: 20px;
			overflow: hidden;
			background-color: #05071c;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
		}
		.admin {
			float: left;
			
			padding: 14px 16px;
		}

		.nav-css {
			float: right;
			margin-left: 10px;
			text-decoration: none;
		}
		li a:hover:not(.active) {
			background-color: white;
			color: #05071c; 
			text-decoration: none;
		}
		.active {
			background-color: white;
			color: #101761; 
			text-decoration: none;
		}

		.block {
			color:#ffffff ;
			background-color: #160424;
			width: 100%;
			height: 250px;
			letter-spacing: 15px;
			text-align: center;
			box-sizing: 50%;
		}
		.block-content {
			padding-top: 100px;
			margin: 0;
		}

		.content {
			color: #041c0f;
			padding: 20px; 
		}

		.shrey{
			 background-color: #05071c;
			 color: white;
			 padding: 14px 26px;
			 margin: 10px;
			 text-align: center;
			 text-decoration: none;
			 display: inline-block;
			 border-style: solid;
			 border-width: 2px;
			 border-color: #05071c;
			 letter-spacing: 4px;
		}
		.shrey:hover {
			background-color: white;
			color: #05071c;
		}
	</style>
</head>
<body>

	<ul>

		<li><a href="#" class="nav admin">Hospital Management System</a></li>
		<li><a href="form.php" class="nav-css">Contact Us</a></li>
		<li><a href="#" class="nav-css">Testimonial</a></li>
		<li><a href="aboutus.php" class="nav-css">About Us</a></li>
		<li><a href="form.php" class="nav-css active">Home</a></li>
	</ul>

	<div class="block text-center">
		<div class="block-content justify-content-center">
		
			<h1>Hospital Management System</h1>
		
		</div>
	</div>

	<div class="container">
		<div class="content">
			<br> <br>
			<h2><center><b>Welcome to Hospital Management system,</b></center></h2>
			<h5>This page is a dummy page that contains all the content fake and will be replaced in near by time.</h5>
			<p>Please make sure that you should be comfortable to our website.<br>If not than without any hesitation Contact Us.</p>
		</div>
		<div>
			
			<a href="NewRequest/newrequest.php" class="" target="_self">New Request Here</a> <br> <br>
			
			<a href="Login/login.php" class="shrey">Login Here</a> &nbsp  &nbsp  &nbsp  &nbsp <a href="#" class="shrey">Registration Here</a> 
		</div>
	</div>	

	
</body>
</html>
