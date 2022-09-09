<?php
	session_start();
	$name = $_SESSION['name'];
	$email= $_SESSION['email'];
	session_unset($name);
	session_unset($email);
	session_destroy();
	header("Location:index.php");
?>