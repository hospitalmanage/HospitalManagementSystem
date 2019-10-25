<?php

	$severname = "localhost";
	$username = "id11266445_root";
	$password = "root123456";
	$dbname = "id11266445_mydb";

	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
   // $id  = $_POST['id'];
    $mobile  = $_POST['mobile'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $occp = $_POST['occupation'];
    $aadhar = $_POST['aadhar'];


	$conn = new mysqli($severname, $username, $password, $dbname);

	if ($conn->connect_error) {
		die('Connection Failed : ' .$conn->connect_error);
	} 
	
	//  $sql = "CREATE TABLE registration(
	// 	name VARCHAR(30) NOT NULL,
	//  	mobile VARCHAR(10),
	//  	address VARCHAR(100) NOT NULL,
	//  	email  VARCHAR(40) NOT NULL,
	//  	occupation VARCHAR(20) NOT NULL,
	//  	aadhar VARCHAR(12),
	//  	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
	//  	)";
	//  if ($conn->query($sql) === TRUE) {
	//  	echo "TABLE created successfully";
	//  } else {
	//  	echo "TABLE not created :" .$conn->error;
	//  }
	// echo "Hello";

	$sql = "INSERT INTO registration (name, mobile, address, email, occupation, aadhar)
		VALUES ('".$fname."  ".$lname."','".$mobile."', '".$address."','".$mail."','".$occp."','".$aadhar."')";
		if ($conn->query($sql) === TRUE) {
			echo "<center><h1><strong>Registration Successfull</strong></h1></center>";
		} else {
			echo "Data not inserted into table" .$conn->error;
		}

		

   


  /*  echo "<h1><center>Registration Successfull</center></h1>";*/

    echo "<h3>Thank You " .$fname." " .$lname." for registration.";
    echo "<br>";
    //echo "Your Id : " .$id. "<br>";
    echo "Mobile No. - " .$mobile. ". <br>";
    echo "Address - " .$address. "<br>";
    echo "Email Id - " .$mail. "<br>";
    echo "Your Occupation - " .$occp. "<br>";
    echo "Aadhar No. - " .$aadhar. "<br>";
    echo "<br> <br> <br>";
    echo "<a href='../index.php'>Go back to home page</a><br> <br>";

    echo "Please do the registration of yourself in the given below link.<br><h3><i>Thank You</i><h3>";
    echo "<a href='../Login/register.php'>Register here</a>";



?>


