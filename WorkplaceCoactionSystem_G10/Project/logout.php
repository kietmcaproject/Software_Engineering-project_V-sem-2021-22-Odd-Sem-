<?php
	session_start();
	unset($_SESSION['Name']);
	header("location:employeelogin.php");
?>