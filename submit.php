<?php
session_start();

	include("connection.php");
	include("functions.php");
	if(isset($_SESSION['email']))
	{
	$job_id=$_SESSION['job_id'] ;
	$email=$_SESSION['email'];
	// $job_title = $_SESSION['job_title'];
	// $company = $_SESSION['company'];
	$query1 = "select * from job where id = $job_id";
	$result1 = mysqli_query($con,$query1);
	//echo $query1;
	while($row1 = mysqli_fetch_assoc($result1))
			{
				 	$job_title = $row1['job_title'];
				 	$company = $row1['company'];
				 	$job_description=$row1['job_description'];
				 }
				// echo $job_title;
				 //echo $company;
	$query = "select full_name from users where email = '$email'";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result))
			{
				 	$fullname = $row['full_name'];
				 }
				// echo $fullname;

	$query2 ="insert into display (job_id, email, full_name, job_title, job_description, company) values('$job_id','$email','$fullname','$job_title','$job_description','$company')";
	//echo $query2;
	mysqli_query($con,$query2);
			echo "Applied successfully";	
	}
	else{
			echo "<br>";
			echo"<h3>login first</h3>";
			echo "<br>";
			echo "<a href='login.php'>Login</a>";
	}
?>