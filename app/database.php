<?php

function db_connect() {
   $dbhost = 'salt.db.elephantsql.com';
	$dbname = 'vetvgzgf';
	$dbuser = 'vetvgzgf';
	$dbpass = 'tVd8UIiWR8v6jhX5h1rR3kl-9UKE6S3w';
	
	try {
		$dbh = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
