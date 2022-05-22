<?php
	session_start();
	setcookie("user_id", "",1);
	unset($_COOKIE["user_id"]);
	unset($_SESSION['username']);
	session_destroy();
	header('location: index.php');
?>
