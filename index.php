<?php
    // Validating form here
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hospital Management System</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
			background-color: #160424;
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
			color: white;
		}
		li a:hover:not(.active) {
			background-color: #0e0217;
			color: white; 
			text-decoration: none;
		}
		.active {
			background-color: #0e0217;
			color: white; 
			text-decoration: none;
		}
		.active:hover {
			color: white;
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
			padding-top: 75px;
			margin: 0;
		}

		.content {
			color: #041c0f;
			padding: 20px; 
		}

		.links{
			 background-color: white;
			 color: #160424;
			 padding: 14px 26px;
			 margin: 10px;
			 text-align: center;
			 text-decoration: none;
			 display: inline-block;
			 border-style: solid;
			 border-width: 2px;
			 border-color: #160424;
			 letter-spacing: 4px;
		}
		.links:hover {
			background-color: #160424;
			color: white;
			text-decoration: none;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #160424;
		}
		.table-content:hover {
			background-color: #f0dbff;
			color: black;
		}
	</style>
</head>
<body>

	<ul>

		<li><a href="#" class="nav admin">Hospital Management System</a></li>
		<li><a href="form.php" class="nav-css">Contact Us</a></li>
		<li><a href="#" class="nav-css">Testimonial</a></li>
		<li><a href="#" class="nav-css">About Us</a></li>
		<li><a href="#" class="nav-css active">Home</a></li>
	</ul>

	<div class="block text-center">
		<div class="block-content ">
		
			<h1>Hospital Management System</h1>
		
		</div>
	</div>

	<div class="container">
		<div class="content">
			<br> <br>
			<h2><center><b>Welcome to Hospital Management System,</b></center></h2>
			<h5>This page is a dummy page that contains all the content fake and will be replaced in near by time.</h5>
			<p>Please make sure that you should be comfortable to our website.<br>If not than without any hesitation Contact Us.</p>
		</div>
		<div>
			
			<a href="NewRequest/newrequest.php" class="links" target="_self">New Request Here</a> <br> <br>
			
			<a href="Login/login.php" class="links">Login Here</a> &nbsp  &nbsp  &nbsp  &nbsp <a href="#" class="links">Registration Here</a> 
		</div> <br> <br>

		<p>As per above links, please do the <code>New Request</code> while admitting to the hospital. And after that please do the <code>Registration Process</code> and than for further functionalities <code>Login Process</code> should be done.</p> <br> <br> <br>

		<!-- Now Creating the Receptionist Table -->
		<h2>Receptionist</h2>
		<div class="recp-table">
			<table>
				<tr>
					<th>Id</th>
					<th>Full Name</th>
					<th>Mobile Number</th>
					<th>Address</th>
				</tr>
				<tr class="table-content">
					<td>101121</td>
					<td><b>Shrey Shah</b></td>
					<td>9725230880</td>
					<td>Paldi, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>101131</td>
					<td><b>Ronak Sirwani</b></td>
					<td>9016409964</td>
					<td>Patia-Narol, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>101141</td>
					<td><b>Durgesh Singh</b></td>
					<td>9428730958</td>
					<td>Vatva, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>666666</td>
					<td><b>Ms. Jayla</b></td>
					<td>8320070235</td>
					<td>Narol, Ahmedabad</td>
				</tr>
			</table> <br> <br> <br>
		</div>

		<h2>Chemists</h2>
		<div class="chem-table">
			<table>
				<tr>
					<th>Id</th>
					<th>Full Name</th>
					<th>Mobile Number</th>
					<th>Address</th>
				</tr>

				<tr class="table-content">
					<td>506698</td>
					<td><b>Shrey Shah</b></td>
					<td>9725230880</td>
					<td>Paldi, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>506789</td>
					<td><b>Ronak Sirwani</b></td>
					<td>9016409964</td>
					<td>Narol-Patia, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>506879</td>
					<td><b>Durgesh Singh</b></td>
					<td>9428730958</td>
					<td>Vatva, Ahmedabad</td>
				</tr>
				<tr class="table-content">
					<td>506666</td>
					<td><b>Jay Prajapati</b></td>
					<td>8320070235</td>
					<td>Narol, Ahmedabad</td>
				</tr>
			</table>
		</div>
	</div>	

	
</body>
</html>
