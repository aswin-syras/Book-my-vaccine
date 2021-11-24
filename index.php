<?php
session_start();
	
	include("connection.php");
	include("functions.php");

	
	//$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Talent Portal</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/jobs.css">
<style>
	body{
		background-image: url('images/signup.jpg');
	}
</style>
</head>
<body>
	<h1>List of all the submissions</h1>
	<?php 
	
		$query ="select u1.id,d1.id as applicationId,u1.full_name,job_title,job_description,company,resume from users u1 inner join display d1 where
		u1.email = d1.email";
		$result = mysqli_query($con,$query);
			echo "<table border='2'>";
			echo "<tr><th>Full Name</th><th>Job Title</th><th>Job Description</th><th>Company</th></tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				$_SESSION['AP_id']=$row['applicationId'];
				
				echo "<td>".$row['full_name']."</td>";
				echo "<td>".$row['job_title']."</td>";
				echo "<td>".$row['job_description']."</td>";
				echo "<td>".$row['company']."</td>";
 				echo "<td>";?> <a href="downloads.php?id=<?php echo $row['id'];?>">Download</a><?php echo "</td>";
				echo "<td>";?> <a href="edituser.php?applicationId=<?php echo $row['applicationId'];?>">Edit</a><?php echo"</td>";
				echo "<td>";?> <a href="delete.php?applicationId=<?php echo $row['applicationId'];?>">Delete</a><?php echo"</td>";
			}
			echo "</table>";
			echo "Booking Confirmed";
	?>
	<a href="logout.php">Logout</a>
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
</body>
</html>