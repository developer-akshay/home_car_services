<?php
    // require_once("connection.php");
    $con = mysqli_connect("localhost","root","","d2");
	if($con)
	{
	    echo"CONNECTION DONE";
	}
	else
	{
	    echo"   ****CONNECTION NOT DONE WITH THE DATABASE****   ";
    }
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
    {echo"insetion done";}
else
    {echo"insertion not done";}
?>