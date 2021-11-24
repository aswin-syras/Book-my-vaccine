<?php
session_start();

	include("connection.php");
	include("functions.php");
	if(isset($_GET['id'])) {
		$id=$_GET['id'];

		$query ="select * from users where id='$id'";
		$result = mysqli_query($con,$query);
		echo $query;
		while($row = mysqli_fetch_assoc($result))
			{	
			$file='uploads/'.$row['resume'];
			//echo $file;

			if(file_exists($file)){
				echo "file exist";
				header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

			}

			}

	}
?>