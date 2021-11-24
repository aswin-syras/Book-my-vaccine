<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['job_id']);
header("Location: login.php")
?>