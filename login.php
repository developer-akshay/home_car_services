<?php
	$con = mysqli_connect("localhost","root","","d2");
	if($con)
	{
	echo"done";
	}
	else
	{
	echo"not done ";
	}
     if(isset($_POST['submit'])) 
	 {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q1 = ("SELECT * FROM user WHERE username='$username' && password='$password'"); // yaha panga hai, try kar abacah oh yeah thanks bhai sunn sirf 'users'  to user se remove karna tha baki se nhi
		$res1 = $con ->query($q1);
		$get1 = mysqli_num_rows($res1);
		
		

		if($get1 ==true ) //smhj gya a dusra vale use kar rha tha `` yeh vale hmm pro coders!!!!!!! faaaqqqqvoh yeh coderrrrr dhpoar ko call karte ha , thik hai! bieee.byee bro.
			header("location:http://localhost/mca/home_car_services/index.html");
		else
			echo"admin login error<br>";
	 }
	 else
	 	echo"connection error";
?>
