<?php
	clearstatcache();
	require("connection.php");

     if(isset($_POST['sign_in'])) 
		{
			session_start();

			$email = $_POST['email'];
			$password = $_POST['password'];
			$q1 = ("SELECT * FROM user WHERE email_address='$email' && password='$password'"); 
			$res1 = $con ->query($q1);
			$get1 = mysqli_num_rows($res1);
			if($get1 ==true ) 
				{
					$_SESSION['email'] = $email;
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
			 session_start();
			 
			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$postal_code=$_POST['postal_code'];
			$phone=$_POST['phone_no'];
		
		$q1="INSERT INTO `user`(`username`, `password`, `address`, `city`, `Postal_code`, `phone`, `email_address`) 
						VALUES ('$username','$password','$address','$city','$postal_code','$phone','$email')";
		$ex=mysqli_query($con,$q1);
		// $res1 = $con ->query($q1);
		if($ex)
			{
				$_SESSION['email'] = $email_address;
				header("location:http://localhost/mca/home_car_services/landing.php");
			}
		else
			{
				header("location:http://localhost/mca/home_car_services/login.php");
			}
		}
	else if(isset($_GET['logout']))
		{
			session_destroy();
			unset($_SESSION['email']);

			header("location:http://localhost/mca/home_car_services/login.php");
		}
	else
		echo"code block not working of issest buttons";
	 	
?>
