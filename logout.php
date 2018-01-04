<?php
	// unset($_SESSION);
	// session_unset();
	// session_destroy();
	// header('Location:../index.php');
	// exit();
	
	session_start();
	session_destroy();
	header('Location:index.php');
?>