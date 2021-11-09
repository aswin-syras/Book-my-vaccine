<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id',
			'$user_name','$password')";
			mysqli_query($con,$query);
			header("Location: login.php");
		}
		else
		{
			echo "please enter valid informations";
		}
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Registration page</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#">Book my Vaccine</a>
	</nav>
	<br>
	<div class="container-lg">
		<form method="post">
			<h2>Register</h2>
			<br>
			<label>Username</label><br>
			<input type="text" name="user_name"><br><br>
			<label>Password</label><br>
			<input type="password" name="password"><br><br>
			<label>Email</label><br>
			<input type="text" name="email"><br><br>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="male">
			<label>Male</label><br>
			<input type="radio" name="gender" value="female">
			<label>Female</label><br>
			<br>
			<label>Phone Number</label><br>
			<input type="number" name="phone"><br>
			<br>
			<button class="btn btn-secondary" type="submit" >Submit</button><br>
			<a href="login.php">Login</a>
		</form>
		<br><br>
		<footer class="bg-light text-center text-lg-start">
		  <!-- Copyright -->
		  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		    Health and Service
		    <a class="text-dark" href="#">Stay safe</a>
		  </div>
		  <!-- Copyright -->
		</footer>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</div>
</body>
</html>