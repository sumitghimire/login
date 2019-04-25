<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/project1/db.php';
	$full_error='';
	if(isset($_POST['register']))
	{
		$full=$_POST['fullname'];
		/*$password=$_POST['password'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];*/

		if(namevalidation($full))
		{
			$full_error=namevalidation($full);
		}
		else
		{
			$query=$con->query("INSERT INTO detail (fullname) VALUES ('$full')");
			if($query)
			{
				echo 'Your data is inserted. Please go to <a href="login.php">login</a> page';
			}
			else
			{
				echo "0";
			}
		}
	}

	function namevalidation($full)
	{
		if(empty($full))
		{
			return "Field is required";
		}
		elseif(strlen($full) < 5 || strlen($full) >= 20)
		{
			return "Provide your actual fullname";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="new.php" method='POST'>
		<?php echo $full_error; ?>
		<input type="text" name="fullname" placeholder="Yur name">
		<!-- <input type="password" name="password" placeholder="Your password">
		<input type="email" name="email" placeholder="Your email">
		<input type="text" name="contact" placeholder="Your contact number" > -->
		<a href="first.php"><input type="submit" name="register" value="Register">
	</form>
</body>
</html>