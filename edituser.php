<?php
session_start();
include("connection.php");
include("functions.php");
	if(isset($_GET['applicationId'])) {
		$id=$_GET['applicationId'];

		//
$query = "SELECT * from display where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/jobs.css">	<style>
	body{
		background-image: url('images/signup.jpg');
	}
</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="#"> Talent Pool Portal</a>
	</nav>
	<br>
	<div class="container-lg">
		<p><a href="index.php">Index</a> 
			<h1>Update Record</h1>
			<?php
			$status = "";
			if(isset($_POST['new']) && $_POST['new']==1)
			{
				$id=$_REQUEST['id'];
				$full_name = $_REQUEST['full_name'];
				$job_title = $_REQUEST['job_title'];
				$job_description = $_REQUEST['job_description'];
				$company = $_REQUEST['company'];
				$submittedby = "admin";
				$update="update new_record set full_name='".$full_name."',
				job_title='".$job_title."', job_description='".$job_description."',company='".$company."',
				submittedby='".$submittedby."' where id='".$id."'";
				mysqli_query($con, $update) or die(mysqli_error());
				$status = "Record Updated Successfully. </br></br>
				<a href='view.php'>View Updated Record</a>";
				echo '<p style="color:#FF0000;">'.$status.'</p>';
			}else {
				?>
				<div>
					<form name="form" method="post"> 
						<input type="hidden" name="new" value="1" />
						<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
						<p><input type="text" name="full_name" placeholder="Enter Full Name" 
							required value="<?php echo $row['full_name'];?>" /></p>
							<p><input type="text" name="job_title" placeholder="Enter JobTitle" 
								required value="<?php echo $row['job_title'];?>" /></p>
								<p><input type="text" name="job_description" placeholder="Enter JobDescription" 
								required value="<?php echo $row['job_description'];?>" /></p>
								<p><input type="text" name="company" placeholder="Enter Company" 
								required value="<?php echo $row['company'];?>" /></p>
								<p><button class="btn btn-secondary" type="submit"> Submit</button></p>
							</form>
						<?php } ?>
					</div>
				</div>
			</body>
			</html>