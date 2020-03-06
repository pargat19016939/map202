<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }


	public function register ($username, $password)
	{
		try{
	
$database_db = db_connect();
		
		
				$stm_obj = $database_db->prepare("select * from users WHERE username = :name; ");
	
					$stm_obj->bindValue(':name', $username);
				$stm_obj->execute();
$result_row = $stm_obj->fetch(PDO::FETCH_ASSOC);
		
					if(	$result_row['username']!=null)
					{
								return false;
					}
		else
		{
					$stm_obj = $database_db->prepare("INSERT INTO users (username,password) VALUES (:name,:password); ");

$stm_obj->bindValue(':name', $username);
			
						$stm_obj->bindValue(':password', $password);
$stm_obj->execute();
		
			
			return true;
		}
		}
		catch(Exception $e) 
		{	
							return false;
		}
	
	}



    public function authenticate($username, $password) {
        /*
         * if username and password good then
         */
		 
		$database_db = db_connect();
        $statement = $database_db->prepare("select * from users
                                WHERE username = :name;
                ");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
	}
	
	


}
