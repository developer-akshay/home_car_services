<?php
	$con = mysqli_connect("localhost","root","","d2");
	if($con)
	{
	    echo"CONNECTION DONE";
	}
	else
	{
	    echo"   ****CONNECTION NOT DONE WITH THE DATABASE****   ";
    }
?>