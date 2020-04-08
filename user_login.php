<?php
	clearstatcache();
	require("connection.php");

     if(isset($_POST['sign_in'])) 
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$q1 = ("SELECT * FROM user WHERE email_address='$email' && password='$password'"); 
			$res1 = $con ->query($q1);
			$get1 = mysqli_num_rows($res1);
			if($get1 ==true ) 
			{
				header("location:http://localhost/mca/home_car_services/landing.php");
			}
			else
			{
				header("location:http://localhost/mca/home_car_services/login.php");
				
			}
		}

		// -------------------
		// 	user registration
		// 	----------------------

	 else if(isset($_POST['sign_up']))
	 	{
			 
			$username=$_POST['username'];
			$email_address=$_POST['email'];
			$password=$_POST['password'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$postal_code=$_POST['postal_code'];
			$phone=$_POST['phone_no'];
		
		$q1="INSERT INTO `user`(`username`, `password`, `address`, `city`, `Postal_code`, `phone`, `email_address`) 
						VALUES ('$username','$password','$address','$city','$postal_code','$phone','$email_address')";
		$ex=mysqli_query($con,$q1);
		// $res1 = $con ->query($q1);
		if($ex)
			{
				header("location:http://localhost/mca/home_car_services/landing.php");
			}
		else
			{
				header("location:http://localhost/mca/home_car_services/login.php");
			}
		}
	else
		echo"code block not working of issest buttons";
	 	
?>
