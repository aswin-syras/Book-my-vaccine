<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/view.css">

</head>
<body>
<h1>Job Status</h1>
<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	$query ="select * from job ";
		$result = mysqli_query($con,$query);
			echo "<table border='2'>";
			echo "<tr><td>Job Title</td><td>Company</td><td>Job Description</td></tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				$_SESSION['job_id'] = $row['id'];
			 	$job_id=$_SESSION['job_id'] ;
				echo "<tr>";
				echo "<td>".$row['job_title']."</td>";
				echo "<td>".$row['company']."</td>";
				echo "<td>".$row['job_description']."</td>";
				echo "<td> <a href='view_jobs.php'>View</a>/<a href='#'>Apply</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "Job Registered";

?>

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

<br>
	<a href="logout.php">Logout</a>
<br><br>
		