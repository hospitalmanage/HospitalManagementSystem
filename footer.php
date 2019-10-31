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
			text-shadow: 5px 5px 8px white;
		}

		.content {
			color: #041c0f;
			padding: 20px; 
		}

		.full {
	    width: 100%;    
	}
	
	.footer {
		background: #160424;
		height: auto;
		padding-bottom: 30px;
		position: relative;
		width: 100%;
		border-bottom: 1px solid #CCCCCC;
		border-top: 1px solid #DDDDDD;
	}
	.footer p {
		margin: 0;
	}
	.footer img {
		max-width: 100%;
	}
	.footer h3 {
		color: white;
		font-size: 18px;
		font-weight: 600;
		line-height: 27px;
		padding: 40px 0 0px;
		text-transform: uppercase;
	  margin-bottom: 13px;
	}

	.footer h4 {
		color: white;
		font-size: 2em;
		font-weight: 600;
		line-height: 38px;
		padding: 40px 0 10px;
		font-family: cursive;
	  font-weight: lighter
	}

	.footer ul {
		font-size: 13px;
		list-style-type: none;
		margin-left: 0;
		padding-left: 0;
		margin-top: 0px;
		color: #7F8C8D;
	  padding: 0 0 8px 0;
	}

	.email{
	  border-bottom: 1px solid #fff;
	}
	.footer ul li a {
		padding: 0 0 12px 0;
		display: block;
	}
	.footer a {
		color: white;
	  font-weight: lighter;
	}

	.footer p {
		color: white;
	  font-weight: lighter;
	  font-size: 
	}

	.footer a:hover {
		text-decoration:none;
	  font-weight: bold;
	}
	.supportLi h4 {
		font-size: 20px;
		font-weight: lighter;
		line-height: normal;
		margin-bottom: 0 !important;
		padding-bottom: 0;
	}

	.bg-gray {
		background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
		box-shadow: 0 1px 0 #B4B3B3;
	}

	}
	.footer a {
		color: #78828D
	}

	.footer-bottom {
	  margin-top: 2em;
		border-top: 1px solid #DDDDDD;
		padding-top: 20px;
		padding-bottom: 10px;
	}
	.footer-bottom p.pull-left {
		padding-top: 6px;
	  font-size: 0.75em
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


	<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h4> Hospital Management System </h4>
                    <p>This page is created by Shrey Shah</p>
                </div>
                <div class="col-lg-3 col-sm-2 col-xs-3">
                    <h3> Contact </h3>
                    <ul>
                        <li><a class="email"href="#"> srdjhms@gmail.com </a></li>
                        
                        <h3>Mobile No.</h3>
                        <li> <p> (+91)9725230880 </p> </li>
                        <li> <p> (+91)6354513368 </p> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-2 col-xs-3">
                    <ul>
                        <li> <h5> <a href="#" style="margin-top: 1em"> Home</a> <h5></li>
                        <li> <h5><a href="#"> About Us </a> <h5></li>
                        <li> <h5><a href="#"> Test0imonial </a> <h5></li>
                        <li> <h5><a href="#"> Contact Us  </a> <h5></li>
                    </ul>
                </div>
               
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
                          
    <div class="footer-bottom">
        <div class="container">
           <center> <p class="pull-left copyright"> Copyright © Footer 2014. All right reserved. </p> </center>
       
        </div>
    </div>
    <!--/.footer-bottom--> 

</footer>
</body>
</html>
