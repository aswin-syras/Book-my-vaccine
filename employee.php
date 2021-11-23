<?php
session_start();

	include("connection.php");
	include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];


		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			if($username == "admin@gmail.com" && $password = "password"){
				header("Location: index.php");
			}
			else{
				$query = " select * from employee where username = '$username' limit 1";
				$result = mysqli_query($con,$query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						$user_data = mysqli_fetch_assoc($result);
						if($user_data['password'] === $password)
						{
							$_SESSION['username'] = $user_data['username'];
							
							$user_id=$_SESSION['username'];
							
									header("Location: jobs.php");
							
							
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
	<title>Employee Page</title>
</head>
<body>
	<form method="post">
	<label>Enter username</label><br>
	<input type="text" name="username"><br><br>
	<label>Password</label><br>
	<input type="text" name="password"><br><br>
	<button type="submit" name="submit">Login</button>
</form>
</body>
</html>