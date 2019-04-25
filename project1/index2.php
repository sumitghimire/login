<?php

	$con=mysqli_connect('127.0.0.1','root','','tutriol');
	if(isset($_POST['login']))
	{	
	$name=$_POST['username'];
	$passwd=$_POST['password'];
	if(strlen($name)<=0)
	{
		echo "Fill name";
	}
	if(strlen($passwd)<=8)
	{
		echo "fill  password";
	}
	header('location:https:\\www.facebook.com')
	}
?>