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
</head>
<body>
	<form method="post">
	<label>Enter username</label><br>
	<input type="text" name="username"><br><br>
	<label>Password</label><br>
	<input type="password" name="password"><br><br>
	<button type="submit" name="submit">Sign Up</button>
	</form>
</body>
</html>