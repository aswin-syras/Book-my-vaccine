<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];


		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			if($email == "admin" && $password == "password"){
				//$_SESSION['email'] == $email;
				header("Location: index.php");
			}
			else{
				$query = " select * from users where email = '$email' limit 1";
				$result = mysqli_query($con,$query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);
						if($user_data['password'] === $password)
						{
							$_SESSION['email'] = $user_data['email'];
							
							$user_id=$_SESSION['email'];
							
									header("Location: view.php");
							
							
							die;
						}
					}
				}
			}
			echo "Incorrect username or password";
		}
		else
		{
			echo "Incorrect username or password";
		}	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jobs.css">
<style>
	body{
		background-image: url('images/signup.jpg');
	}
	</style>
	<title>Login page</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#">Talent Pool </a>
	</nav>
	<br>
	
	<div class="container-lg">
		<form method="post">
			<h2>Login</h2>
			<br>
			<label>Email Id</label><br>
			<input type="text" name="email" required><br><br>
			<label>Password</label><br>
			<input type="password" name="password" required><br><br>
			<button class="btn btn-secondary" type="submit" >Login</button><br>
			<a href="signup.php">Sign up</a>
		</form>
	</div>
	<br><br>
		<footer class="bg-light text-center text-lg-start">
		  <!-- Copyright -->
		  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		    Talent Pool Portal
		    <a class="text-dark" href="#">Stay safe</a>
		  </div>
		  <!-- Copyright -->
		</footer>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</div>
</body>
</html>