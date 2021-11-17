<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			if($user_name == "admin" && $password = "password"){
				header("Location: index.php");
			}
			else{
				$query = " select * from users where user_name = '$user_name' limit 1";
				$result = mysqli_query($con,$query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);
						if($user_data['password'] === $password)
						{
							$_SESSION['user_id'] = $user_data['user_id'];
							
							$user_id=$_SESSION['user_id'];
							//echo $user_id;
							
							$query1 = "select * from booking where user_id= '$user_id'";
							$res = mysqli_query($con,$query1);
							if($res && mysqli_num_rows($res) > 0)
								{
									header("Location: view.php");
								}
							else 
								{
									header("Location: booking.php");
								}
							
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
	<link rel="stylesheet" type="text/css" href="css/booking.css">

	<title>Login page</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#">Book my Vaccine</a>
	</nav>
	<br>
	<div style="float: right;">
				<h3 style="font-family: serif;">"You can't see it, but I'm wearing the biggest smile."</h3>
				<img src="images/nurse.png" style="width:90%;height:90%">
	</div>
	<div class="container-lg">
		<form method="post">
			<h2>Login</h2>
			<br>
			<label>Username</label><br>
			<input type="text" name="user_name" required><br><br>
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
		    Health and Service
		    <a class="text-dark" href="#">Stay safe</a>
		  </div>
		  <!-- Copyright -->
		</footer>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</div>
</body>
</html>