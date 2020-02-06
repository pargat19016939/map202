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

?>

<h1>
	Secret Page
</h1>

<a href="?logout">Click here to logout Logout</a>

<?php

require_once("footer.php");
?>