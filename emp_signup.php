<?php
	session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

			$query = "insert into employee (username,password) values ('$username','$password')";
			//echo "$query";
			mysqli_query($con,$query);
			echo "Registered successfully";
				
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
	body{
		background-image: url('images/signup.jpg');
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#"> Talent Pool Portal</a>
	</nav>
	<br>
	<div class="container-lg">
	<form method="post">
	<label>Enter username</label><br>
	<input type="text" name="username"><br><br>
	<label>Password</label><br>
	<input type="password" name="password"><br><br>
	<button type="submit" name="submit">Sign Up</button>
	</form>
</div>
</body>
</html>