<?php

	require("connection.php");

     if(isset($_GET['sign_up'])) 
	{
		$username=$_GET['username'];
		$email_address=$_GET['email'];
		$password=$_GET['password'];
		$address=$_GET['address'];
		$city=$_GET['city'];
		$Postal_code=$_GET['Postal_code'];
		$phone=$_GET['phone_no'];
		
		$q1="INSERT INTO `user`(`username`, `password`, `address`, `city`, `Postal_code`, `phone`, `email_address`) VALUES ('$username','$password','$address','$city','$postal_code','$phone','$email_address')";
		// $q1=("SELECT * FROM user WHERE email_address='$email' && password='$password'");
		// $ex=mysqli_query($con,$q1);
		$res1 = $con ->query($q1);
		if($res1)
			{echo"insetion done";}
		else
			{echo"insertion not done";}
	}

	
?>