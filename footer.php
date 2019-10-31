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
		.nav-ul {
			list-style-type: none;
			margin: 0px;
			padding: 20px;
			overflow: hidden;
			background-color: #160424;
		}

		.nav-li a {
			display: block;
			color: white;
		   	text-align: center;
			padding: 14px 16px;
		}
		.admin {
			float: left;
			text-decoration: none;
			padding: 14px 16px;
			color: white;
		}
		.admin:hover {
			text-decoration: none;
			color: white;
			background-color: #0e0217;
		}

		.nav-css {
			float: right;
			margin-left: 10px;
			text-decoration: none;
			color: white;
		}
		.nav-css:hover:not(.active) {
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

		.page-footer {
			
			
			color: black;
			text-decoration: none;
		}
		
		.footer-content {
		
		}
		.list-unstyled {
			
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
		.list-unstyled:hover {
			background-color: #160424
			color: white;
			text-decoration: none;
			
		}
		.footer-copyright {
			background-color: darkblue;
		}

	</style>
</head>
<body>

	<ul class="nav-ul">

		<li class="nav-li"><a href="#" class="nav admin">Hospital Management System</a></li>
		<li class="nav-li"><a href="contactus.html" class="nav-css">Contact Us</a></li>
		<li class="nav-li"><a href="#" class="nav-css">Testimonial</a></li>
		<li class="nav-li"><a href="aboutus.html" class="nav-css">About Us</a></li>
		<li class="nav-li"><a href="index.php" class="nav-css active">Home</a></li>
	</ul>

	<div class="block text-center">
		<div class="block-content justify-content-center">
		
			<h1>Hospital Management System</h1>
		
		</div>
	</div>


<footer class="page-footer pt-4">

  <div class="container-fluid text-md-left">

    <div class="row">

      <div class="col-md-6 mt-md-0 mt-3">

        <h5 class="footer-content text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="footer-links col-md-3 mb-md-0 mb-3">

        <h5 class="text-uppercase">Links</h5>

        <ul >
          <li class="list-unstyled active">
            <a href="#!">Link 1</a>
          </li>
          <li class="list-unstyled">
            <a href="#!">Link 2</a>
          </li>
          <li class="list-unstyled">
            <a href="#!">Link 3</a>
          </li>
          <li class="list-unstyled">
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>

</footer>
