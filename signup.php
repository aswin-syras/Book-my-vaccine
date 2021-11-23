<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$full_name = $_POST['full_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$skills_years = $_POST['skills_years'];
		$status = $_POST['status'];
		$availability = $_POST['Availability'];
		$resume = $_POST['resume'];

		
			$query = "insert into users (full_name,password,email,phone,skills_years,status,availability,resume) values ('$full_name','$password','$email','$phone','$skills_years','$status','$availability','$resume')";
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
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Registration page</title>
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
			<h2>Register</h2>
			<br>
			<label>Full Name</label><br>
			<input type="text" name="full_name" required><br><br>
			<label>Password</label><br>
			<input type="password" name="password" required><br><br>
			<label>Email</label><br>
			<input type="text" name="email" required><br>
			<br>
			<label>Phone Number</label><br>
			<input type="number" name="phone" required><br>
			<br>
			<label>Top three Skills & number of years’ experience </label><br>
			<select name="skills_years">
				<option value="Java - 3 years">Java - 3 years</option>
				<option value="Python - 2 years">Python - 2 years</option>
				<option value="React - 3 years">React - 3 years</option>
			</select>
			<br>
			<br>
			<label>Status</label>
			<br>
			<select name="status">
				<option value="International Student">International Student</option>
				<option value="Graduate">Graduate</option>
				<option value="Student">Student</option>
			</select>
			<br>
			<br>
			<label>Availability : </label>
			<br>
			<select name ="Availability">
				<option value="parttime">Part Time</option>
				<option value="fulltime">Full Time</option>

			</select>
			<br>
			<br>
			<label>Upload your resume</label>
			<br>
			<input type="file" name="resume" id="file">
			<br>
			<br>
			<button class="btn btn-secondary" type="submit" >Register</button><br>
			<a href="login.php">Login</a>
		</form>
		<br><br>
		<footer class="bg-light text-center text-lg-start">
		  <!-- Copyright -->
		  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		    Talent Pool Portal
		    <a class="text-dark" href="#">Stay safe</a>
		  </div>
		  <!-- Copyright -->
		</footer>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</div>
</body>
</html>