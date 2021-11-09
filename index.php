<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book my Vaccine</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>This is the index</h1>
	<br>
	Hello, username
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>