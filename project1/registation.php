<?php

$name_error='';
$passwd_error='';
$confirm_error='';
$email_error='';
$address_error='';
$contact_error='';
$con=mysqli_connect('127.0.0.1','root','','tutriol') or die(mysqli_error());

	if(isset($_POST['register']))
	{
		$name=$_POST['username'];
		$passwd=$_POST['password'];
		$confirm=$_POST['confirmpassword'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		if(valadition($name) || pvaladition($passwd) || cvaladition($confirm,$passwd) || evaladition($email) || avaladition($address) || tvaladition($contact))
		{
			$name_error= valadition($name);
			$passwd_error= pvaladition($passwd);
			$confirm_error=cvaladition($confirm,$passwd);
			$email_error=evaladition($email);
			$address_error=avaladition($address);
			$contact_error=tvaladition($contact);
		}
		else
	{
			$sql= "INSERT INTO person (username,password,confirmpassword,email,address,contact) VALUES ('$name','$passwd','$confirm','$email','$address','$contact')";
			if(mysqli_query($con,$sql))
		{
			echo 'now you can go to<a href="login.php">login</a>page';
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
	    function cvaladition($confirm,$passwd)
	{
		if($passwd != $confirm)
		{
			return "password is not match";
		}
	}
	    function evaladition($email)
	{
		if(empty($email))
		{
			return "email is required";
		}
	}
	    function avaladition($address)
	{
		if(empty($address))
		{
			return "Adresss is required";
		}
	}
	function tvaladition($contact)
	{
		if(empty($contact))
		{
			return "contact is required";
		}
	}

?>
<html>
  <head>
	<style>
		div{
			margin-top: 5px  ;
			padding:100px;
			height:300px;
			width:200px;
			background-color:#f1f1f1;
		}
		</style>
	</head><body>
		<body bgcolor="#d4d4dc">
			<center>
			<div>
				<form action="registation.php" method="POST">
				<img src="1.jpeg" height="50" width="75"><br>
				<?php echo $name_error;?>
				username<input type="text" name="username"><br>
				<?php echo $passwd_error;?>
				 password<input type="password" name="password"><br>
				 <?php echo $confirm_error;?>
				confirm password<input type="password" name="confirmpassword"><br>
				<?php echo $email_error;?>
				Email<input type="email" name="email"><br>
				<?php echo $address_error;?>
				Address<input type="text" name="address"><br>
				<?php echo $contact_error?>
				contact<input type="text" name="contact"><br>
				<input type="submit" name="register" value='Register'><br>
			</form>
			</div>
			</center>
		</body>
	</body>
	</html>