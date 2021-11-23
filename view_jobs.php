<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job Details</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php
session_start();

	include("connection.php");
	include("functions.php");
	$job_id=$_SESSION['job_id'] ;
	$query ="select * from job where id='$job_id' ";
	//echo $query;
		$result = mysqli_query($con,$query);
			echo "<table border='2'>";
			echo "<tr><td>Job Title</td><td>Company</td><td>Job Description</td><td>Logo</td><td>Contact Email</td></tr>";
			while($row = mysqli_fetch_assoc($result))
			{	
				$_SESSION['job_id'] = $row['id'];
				$job_id=$_SESSION['job_id'] ;
				echo "<tr>";
				echo "<td>".$row['job_title']."</td>";
				echo "<td>".$row['company']."</td>";
				echo "<td>".$row['job_description']."</td>";
				echo "<td>".$row['logo']."</td>";
				echo "<td>".$row['contact_email']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			//echo "Job Registered";

?>
</body>
</html>
