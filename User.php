<?php 

require_once("db.php");

class User
{
	public function __construct($param = false) {  }
	
	function validate_user($username,$password)
	{ 
		try 
		{
			$query = "SELECT password FROM users WHERE username = :username"; 
			$conn=db_connect();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if (count($results) > 0) 
			{
				if ($results[0]['password']!=null)
				{
					if (password_verify($password ,$results[0]['password'])) 
					{
						$_SESSION['isAuthenticated'] = 1;		
						echo "<script> location.href='secret.php'; </script>";
					}
					else 
					{
						$this->loginFailed();	
					}
				}
			}
			else{
				$this->loginFailed();
			}
		}
		catch(PDOException $ex) 
		{
			echo "Error is: " . $ex->getMessage();
		}
		$conn = null;
	}
	
	function loginFailed()
	{
		if(isset($_SESSION['fail']))
		{
			$_SESSION['fail'] ++; //increment
		}
		else 
		{
			$_SESSION['fail'] = 1;
		}
	}
}
