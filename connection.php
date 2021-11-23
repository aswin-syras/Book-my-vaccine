<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "talent_pool_db";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{
		die("failed to connect");
	}

?>