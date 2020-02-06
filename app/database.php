<?php

function db_connect() {
   $dbhost = 'remotemysql.com';
	$dbname = 'Bj4qIbE1Md';
	$dbuser = 'Bj4qIbE1Md';
	$dbpass = 'Pxkv4c2W2T';
	
	try {
		$dbh = new PDO('mysql:host=remotemysql.com;dbname=Bj4qIbE1Md', $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
