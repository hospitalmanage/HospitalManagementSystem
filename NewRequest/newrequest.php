<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System</title>
</head>
<body>

	<h1><center><strong>Registration Page</strong></center></h1>
	<h3><center>Jay - Durgesh - Ronak - Shrey</center></h3>
	<p><center>This page is only for the testing the registration page.</center></p>
	<p><center>This page contains only basic html tags and JavaScript and  back-end script as PHP and MySql.</center></p>
	<br> <br> <br> 

	<form name="form" action="action.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">

		<center>Name : <br> <input type="text" name="fname" placeholder="First Name" size="30"> &nbsp <input type="text" name="lname" placeholder="Last Name" size="30"></center> <br> <br>

		<!--<center>Id : <br> <input type="number" name="id" placeholder="Please Enter Id Here." size="30"></center> <br> <br>-->

		<center>Mobile No. : <br> <input type="text" name="mobile" placeholder="Enter Mobile Number Here." size="40"></center> <br> <br>

		<center>Address : <br><textarea name="address" rows="4" cols="40" placeholder="Please Enter Address Here."></textarea></center> <br> <br>

		<center>Email Id : <br> <input type="text" name="mail" placeholder="Enter Email Id Here" size="40"></center> <br> <br>

		<center>Occupation : <br> <input type="text" name="occupation" placeholder="Please Enter Your Occupation Here." size="40"></center> <br> <br>

		<center>Aadhar No. (Optional): <br> <input type="text" name="aadhar" placeholder="Please Enter Your Aadhar Number Here." size="40"></center> <br> <br> 

		<center> <input type="submit" name="submit" value="Submit">  &nbsp &nbsp &nbsp <input type="reset" name="reset" value="Reset"> </center> <br> <br> <br> <br> <br>
		
	</form>

	<script type="text/javascript">

		function validateform() {
			var a = document.forms['form']['fname'].value;
			var b = document.forms['form']['lname'].value;
			var c = document.forms['form']['mobile'].value;
			var d = document.forms['form']['address'].value;
			var x = document.forms['form']['mail'].value;
			var y = document.forms['form']['occupation'].value;
			var z = document.forms['form']['aadhar'].value;
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})/;

			if (a == "") {
				alert("Please enter your First Name.");
				return false;
			}

			if (b == "") {
				alert('Please enter Last Name.');
				return false;
			}

			if (c == "") {
				alert('Please enter your mobile no.');
				return false;
			}
			if (isNaN(c)) {
				alert('Please enter numbers in Mobile No.');
				return false;
			}
			if (c.length > 10) {
				alert('Please enter 10 digits mobile number.');
				return false;
			}
			if (c.length < 10) {
				alert('Please enter 10 digits mobile number.');
				return false;
			}

			if (d == "") {
				alert('Please enter your address.');
				return false;
			}

			if (x == "") {
				alert('Please enter your mail id.');
				return false;
			}
			if (!filter.test(x)) {
				alert('Please enter proper mail id format ("abc@gmail.com").');
				return false;
			}

			if (y == "") {
				alert('Please enter your occupation.');
				return false;
			}

			if (z == "") {
				return true;
			}
			if (isNaN(z)) {
				alert('Please enter numbers in Aadhar No.');
				return false;
			} 
			if (z.length > 12 || z.length < 12) {
				alert('Please enter 12 digits Aadhar No.');
				return false;
			}

		}



	</script>

<footer>
	<center><strong><u>&COPY; By Shrey-Ronak-Durgesh-Jay copyright of website till today</u></strong></center>
</footer>

</body>
</html>


