<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$sql="select * from users where (email='$email');";
	        $res=mysqli_query($con,$sql);
	        if (mysqli_num_rows($res) > 0) {
	        // output data of each row
	        $row = mysqli_fetch_assoc($res);
	        if($email==$row['email']) // change it to just else
	        {
	            echo "Email already exists";
	        }
	        else{
	            echo "alright"; // don't put it here
	        }
	    }
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,gender,phone) values ('$user_id','$user_name','$password','$email','$gender','$phone')";
			mysqli_query($con,$query);
			echo "Registered successfully";
				
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
	<div style="float: right;">
				<h3 style="font-family: serif;">Make your life secure...</h3>
				<img src="images/vaccine.png" style="width:100%;height:100%">
			</div>
	<div class="container-lg">
		<form method="post">
			<h2>Register</h2>
			<br>
			<label>Username</label><br>
			<input type="text" name="user_name" required><br><br>
			<label>Password</label><br>
			<input type="password" name="password" required><br><br>
			<label>Email</label><br>
			<input type="text" name="email" required><br><br>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="male">
			<label>Male</label><br>
			<input type="radio" name="gender" value="female">
			<label>Female</label><br>
			<input type="radio" name="gender" value="other">
			<label>Other</label><br>
			<br>
			<label>Phone Number</label><br>
			<input type="number" name="phone" required><br>
			<br>
			<button class="btn btn-secondary" type="submit" >Register</button><br>
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