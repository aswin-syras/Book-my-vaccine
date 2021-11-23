<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$job_title = $_POST['job_title'];
		$company = $_POST['company'];
		$job_description = $_POST['job_description'];
		$logo = $_POST['logo'];
		$contact_email = $_POST['contact_email'];

		if(isset($_POST['submit']))
		{
			//$booking_id = random_num(10);
			$query = "insert into job (job_title,company,job_description,logo,contact_email) values ('$job_title','$company','$job_description','$logo','$contact_email')";
			echo $query;
			$query_run = mysqli_query($con,$query);
			if($query_run)
			{
				echo "Job Added";
				header("Location: view.php");
			}
			else
			{
				echo"Error";
			}
		}

	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jobs.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#"> Talent Pool Portal</a>
	</nav>
	<br>
	<div class="container-lg">
		<form method="POST">
			<label>Job Title</label><br>
			<input type="text" name="job_title"><br><br>
			<label>Company</label><br>
			<input type="text" name="company"><br><br>
			<label>Job Description</label><br>
			<textarea  name="job_description"></textarea> <br><br>
			<label>Upload logo</label>
			<br>
			<input type="file" name="logo" id="file">
			<br>
			<br>
			<label>Contact Email</label><br>
			<input type="text" name="contact_email"><br><br>
			<button class="btn btn-secondary" type="submit" name="submit">Add job</button>
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