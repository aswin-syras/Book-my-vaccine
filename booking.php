<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_id = $_POST['user_id'];
		$vaccine = $_POST['vaccine'];
		$date = $_POST['date'];
		$location = $_POST['location'];
		$time = $_POST['time'];

		if(isset($_POST['submit']))
		{
			$booking_id = random_num(20);
			$query = "insert into booking (booking_id,user_id,vaccine,date,location,time) values ('$booking_id','$user_id','$vaccine','$date','$location','$time')";
			$query_run = mysqli_query($con,$query);
			if($query_run)
			{
				echo "Booking Confirmed";
				header("Location: view.php");
			}
			else
			{
				echo"Booking failed";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#">Book my Vaccine</a>
	</nav>
	<br>
	<?php
	echo "User Id: ";
	echo $_SESSION['user_id'];
	?>
	<div style="float: right;">
				<h3 style="font-family: serif;">Vaccinate your family.. stay safe</h3>
				<img src="images/booking.png" style="width:90%;height:90%">
	</div>
	<div class="container-lg">
		<form method="POST">
			<label>Enter the User Id</label><br>
			<input type="number" name="user_id"><br><br>
			<label>Select your vaccine</label><br>
				<select name = "vaccine">
					<option value="covid">Covid 19 vaccine</option>
					<option value="MMR">MMR vaccine</option>
					<option value="hepatitis">Hepatitis B vaccine</option>
					<option value="hpv">HPV vaccine</option>
					<option value="varicella">Varicella vaccine</option>
				</select>
				<br><br>
				<label>Date</label><br>
				<input type="date" name="date"><br><br>
				<label>Location</label><br>
				<select name = "location">
					<option value="yorkmills">861 yorkmills road</option>
					<option value="pharmacy">283 pharmacy avenue</option>
					<option value="glenworth">2 glenworth road</option>
					<option value="stc">Scarborough town center</option>
					<option value="denette drive">42 Denette drive</option>
				</select>
				<br><br>
				<label>Time</label><br>
				<select name = "time">
					<option value="10am to 11am">10am - 11am</option>
					<option value="11am to 12pm">11am - 12pm</option>
					<option value="1pm to 2pm">1pm - 2pm</option>
					<option value="2pm to 3pm">2pm - 3pm</option>
					<option value="3pm to 4pm">3pm - 4pm</option>
					<option value="4pm to 5pm">4pm - 5pm</option>
				</select>
				<br>
				<br>
				<button class="btn btn-secondary" type="submit" name = "submit" >Submit</button><br>
		</form>
	</div>
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