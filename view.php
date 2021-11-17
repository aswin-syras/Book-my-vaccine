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
<h1>Booking Status</h1>
<?php
session_start();

	include("connection.php");
	include("functions.php");
	$user_id=$_SESSION['user_id'];
	
	$query ="select user_name,gender,email,phone,vaccine,location,time from users u1 inner join booking b1 on u1.user_id = b1.user_id  AND b1.user_id= '$user_id' ";
		$result = mysqli_query($con,$query);
			echo "<table border='2'>";
			echo "<tr><td>Username</td><td>gender</td><td>email</td><td>phone</td><td>vaccine</td><td>location</td><td>time</td></tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row['user_name']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['vaccine']."</td>";
				echo "<td>".$row['location']."</td>";
				echo "<td>".$row['time']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "Booking Confirmed";

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
		