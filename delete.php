<?php 
session_start();
include("connection.php");
include("functions.php");
	if(isset($_GET['applicationId'])) {
		$id=$_GET['applicationId'];

		//

$query = "Delete from display where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());

header("Location:index.php");
}
 ?>