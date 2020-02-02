<?php
	session_start();
	if(!isset($_SESSION['isAuthenticated']))
	{
		echo "<script> location.href='login.php'; </script>";
	}
	require_once("header.php");

	if ($_SERVER['REQUEST_METHOD'] == 'GET')
	{	
		if(isset($_GET['logout']))
		{
			session_destroy();
			echo "<script> location.href='login.php'; </script>";
		}
		 
	}
