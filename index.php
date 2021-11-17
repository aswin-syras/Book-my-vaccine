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
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
	<h1>List of all the bookings</h1>
	<?php 
		$query ="select user_name,gender,email,phone,vaccine,location,time from users u1 inner join booking b1 on u1.user_id = b1.user_id";
		$result = mysqli_query($con,$query);
			echo "<table border='2'>";
			echo "<tr><th>Username</th><th>gender</th><th>email</th><th>phone</th><th>vaccine</th><th>location</th><th>time</th></tr>";
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