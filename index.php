<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hospital Management System</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

	<?php
		include './header/hms-block.php';
	?>

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
			</table> <!-- End of recepetionists table -->
		</div>
		<br> <br> <br>
		<!-- Now creating the Chemists table -->
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

	<?php
		include 'footer/footer.php';
	?>
	
</body>
</html>
