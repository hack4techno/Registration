<?php 
	$con=mysqli_connect("localhost","f0502702_username","yourpassword","f0502702_name");
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password =$_POST["password"];
    $cpassword = $_POST["cpassword"];

	$sql = "INSERT INTO student(name,email,password,cpassword) VALUES ('$name','$email','$password','$cpassword')";
	$result = mysqli_query( $con,$sql );
	
	if($result) {
		echo "registered successfully";
	}
	else {
		echo "some error occured";
	}
?>