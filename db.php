<?php
function  db_connect() 
{
	try 
	{
		
		$dbhost = "remotemysql.com";
		
		$dbname = ' Bj4qIbE1Md';
		$dbuser = ' Bj4qIbE1Md';
		
		$dbpass = 'Pxkv4c2W2T';
	
		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		return $conn;
	} 
	catch (PDOException $e) 
	{
		}
            }
?>
