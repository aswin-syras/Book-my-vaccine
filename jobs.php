<?php 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#"> Talent Pool Portal</a>
	</nav>
	<br>
	<div class="container-lg">
		<form method="post">
			<label>Job Title</label><br>
			<input type="text" name="job_title"><br><br>
			<label>Company</label><br>
			<input type="text" name="company"><br><br>
			<label>Job Description</label><br>
			<textarea  name="job_description"></textarea> <br><br>
			<button class="btn btn-secondary" type="submit" >Add job</button>
		</form>
	</div>
	<footer class="bg-light text-center text-lg-start">
		  <!-- Copyright -->
		  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		    Talent Pool Portal 
		    <a class="text-dark" href="#">Stay safe</a>
		  </div>
		  <!-- Copyright -->
		</footer>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>