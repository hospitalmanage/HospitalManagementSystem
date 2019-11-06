<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href= 
"https://use.fontawesome.com/releases/v5.7.0/css/all.css"
	integrity= 
"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
	crossorigin="anonymous"> 
	<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
	</script> 
	
</head>

<style>
	body {
		font: 14px Courier New;
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
</style>
<body>

	<ul>

		<li><a href="#" class="nav admin">Hospital Management System</a></li>
		<li><a href="form.php" class="nav-css">Contact Us</a></li>
		<li><a href="#" class="nav-css">Testimonial</a></li>
		<li><a href="#" class="nav-css">About Us</a></li>
		<li><a href="../index.php" class="nav-css">Home</a></li>
	</ul>

	<div class="block text-center">
		<div class="block-content justify-content-center">
		
			<h1>Hospital Management System</h1>
		
		</div>
	</div> <br> <br>

	<h1><center><strong>Registration Page</strong></center></h1>
	<h3><center>Jay - Durgesh - Ronak - Shrey</center></h3>
	<p><center>This page is only for the testing the registration page.</center></p>
	<p><center>This page contains only basic html tags and JavaScript and  back-end script as PHP and MySql.</center></p>
	<br> <br> <br> 

	<form name="form" action="action.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
		<div id="input1" class="text-center"> 
			<label>Name:</label> <br>
			<input type="text" name="fname" required autocomplete="off" size="30" placeholder="First Name"> 
			<i style='color:grey;' class='fa '></i> 
			<input type="text" name="lname" required autocomplete="off" size="30" placeholder="Last Name">  
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>

		<!--<center>Id : <br> <input type="number" name="id" placeholder="Please Enter Id Here." size="30"></center> <br> <br>-->

		<div id="input2" class="text-center"> 
			<label>Mobile Number:</label> <br>
			<input type="text" name="mobile" required autocomplete="off" placeholder="Mobile Number" size="40"> 
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>

		<div id="input2" class="text-center"> 
			<label>Address:</label> <br>
			<input type="text" name="address" required autocomplete="off" placeholder="Address" size="60"> 
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>
		
		<div id="input2" class="text-center"> 
			<label>Email Id:</label> <br>
			<input type="text" name="mail" required autocomplete="off" size="40"> 
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>

		<div id="input2" class="text-center"> 
			<label>Occupation:</label> <br>
			<input type="text" name="occupation" required autocomplete="off" size="40"> 
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>

		<div id="input2" class="text-center"> 
			<label>Aadhar Number(Optional):</label> <br>
			<input type="text" name="aadhar" autocomplete="off" size="40"> 
			<i style='color:grey;' class='fa '></i> 
		</div>  <br> <br>

		<center> <input type="submit" name="submit" value="Submit">  &nbsp &nbsp &nbsp <input type="reset" name="reset" value="Reset"> </center> <br> <br> <br> <br> <br>
		
		
		
		
	</form>

	<script>

		var firstName = $("input[name=fname]");
		var lastName = $("input[name=lname]");
		var mobile = $("input[name=mobile");
		var address = $("input[name=address");
		var mail = $("input[name=mail");
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var occupation = $("input[name=occupation");
		var aadhar = $("input[name=aadhar");

		$(document).ready(function() { 
			$('div input').focusout(function() {	

				// For First Name and Last Name
				if(firstName.val()=='' ) { 
					var error=firstName.siblings('i'); 
					error.addClass("fa-times").css('color', 'green'); 
				} else { 
					var correct=firstName.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				if(lastName.val()=='' ) { 
					var error=lastName.siblings('i'); 
					error.addClass("fa-times").css('color', 'red'); 
					
				} else { 
					var correct=lastName.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				// For Mobile Number
				if(mobile.val()=='' || isNaN(mobile.val()) || mobile.val().length > 10 || mobile.val().length < 10 ) { 
					var error=mobile.siblings('i'); 
					error.addClass("fa-times").css('color', 'red'); 
				} 
				else { 
					var correct=mobile.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				// For Address
				if(address.val()=='' ) { 
					var error=address.siblings('i'); 
					error.addClass("fa-times").css('color', 'red'); 
				} 
				else { 
					var correct=address.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				// For Email Id
				if(mail.val()=='' || !filter.test(mail.val()) ) { 
					var error=mail.siblings('i'); 
					error.addClass("fa-times").css('color', 'red'); 
				} 
				else { 
					var correct=mail.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				// For Occupation
				if(occupation.val()=='' ) { 
					var error=occupation.siblings('i'); 
					error.addClass("fa-times").css('color', 'red'); 
				} 
				else { 
					var correct=occupation.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
				} 

				// For Aadhar Number
				if (aadhar.val()!='') {
					if(isNaN(aadhar.val()) || aadhar.val().length > 12 || aadhar.val().length < 12) {
						var error=aadhar.siblings('i'); 
						error.removeClass("fa-check").addClass("fa-times").css('color', 'red'); 
					} 
					else {
						var correct=aadhar.siblings('i'); 
						correct.removeClass("fa-times").addClass("fa-check").css('color', 'green'); 
					} 
				} else {
					var correct=aadhar.siblings('i'); 
					correct.removeClass("fa-times").addClass("fa-check").css('color', 'green');
				}
				
			}).trigger("focusout"); 
		}); 
	</script>

<footer>
	<center><strong><u>&COPY; By Shrey-Ronak-Durgesh-Jay copyright of website till today</u></strong></center>
</footer>

</body>
</html>


