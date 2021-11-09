<?php
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
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#">Book my Vaccine</a>
	</nav>
	<br>
	<div class="container-lg">
		<form method="POST">
			<label>Select your vaccine</label><br>
				<select name = "vaccine">
					<option value="covid">Covid 19 vaccine</option>
					<option value="mmr">MMR vaccine</option>
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
					<option value="htc">Scarborough town center</option>
					<option value="denette">42 Denette drive</option>
				</select>
				<br><br>
				<label>Time</label><br>
				<select name = "time">
					<option value="10to11">10am - 11am</option>
					<option value="11to12">11am - 12pm</option>
					<option value="1to2">1pm - 2pm</option>
					<option value="2to3">2pm - 3pm</option>
					<option value="3to4">3pm - 4pm</option>
					<option value="4to5">4pm - 5pm</option>
				</select>
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