<?php

	$con=mysqli_connect('127.0.0.1','root','','tutriol');
	if($con)
	{
		echo"connection";
	}
	else
	{
		echo "database not selected";
	}
	$name=$_POST["username"];
	$passwd=$_POST["password"];

	$sql = "INSERT INTO person (username, password) VALUES ('$name', '$passwd')";

	if(mysqli_query($con,$sql))
	{
		header('location:login.php');
	}
	else
	{
		echo " not inserted";
	}
	?>