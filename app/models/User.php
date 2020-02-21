<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
			$_SESSION['auth'] = 1;
			unset($_SESSION['failedAuth']);
			header('Location: /home');
		
		 
		// $db = db_connect();
		// $statement = $db->prepare("select * from users
		// WHERE username = :name;
		// ");
		// $statement->bindValue(':name', $username);
		// $statement->execute();
		// $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		// if (password_verify($password, $rows['password'])) {
		// 	$_SESSION['auth'] = 1;
		// 	unset($_SESSION['failedAuth']);
		// 	header('Location: /home');
		// 	die;
		// } else {
		// 	if(isset($_SESSION['failedAuth'])) {
		// 		$_SESSION['failedAuth'] ++; //increment
		// 	} else {
		// 		$_SESSION['failedAuth'] = 1;
		// 	}
		// 	header('Location: /login');
		// 	die;
		// }
    }
	
	public function register ($username, $password) {
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO users (username)"
                . " VALUES (:name); ");

        $statement->bindValue(':name', $username);
        $statement->execute();

	}

}
