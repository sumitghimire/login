<?php
	$database='tutriol';
	$admin='root';
	$password='';
	$host='127.0.0.1';

	$con = mysqli_connect($host,$admin, $password, $database);

	if($con)
	{
		echo "connection";
	}
	else
	{
		echo "not connection";
	}
?>