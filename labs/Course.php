<?php
class Course
{
	public function __construct()
	{
		
	}
	 
	
	public function programs($department)
	{
		$database = db_connect();
		$statement = $database->prepare("SELECT DISTINCT program from courses WHERE department = :department ");
		
		$statement->bindValue(':department',str_replace("%20", " ", $department)); 
		
        $statement->execute(); 
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}

	public function departments()
	{
		$database = db_connect();
		
        $statement = $database->prepare("SELECT DISTINCT department FROM courses");
		
        $statement->execute();
		
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	 

	
	public function courses($department,$program)
	{
		$database = db_connect();
		$statement = $database->prepare("SELECT * FROM courses WHERE department = :department and program = :program");
			$statement->bindValue(':program', str_replace("%20", " ", $program));
		
		$statement->bindValue(':department', str_replace("%20", " ", $department));
	
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	
	public function insertcourse ($courseID,$department,$program,$courseName) 	
	{
		$database = db_connect();
        $statement = $database->prepare("INSERT INTO courses (courseID,department,program,courseName)". " VALUES (:courseID,:department,:program,:courseName); "); 
		
		$statement->bindValue(':department',$department);
		
		$statement->bindValue(':courseID', $courseID);
		
		
		
		$statement->bindValue(':courseName',  $courseName);
		
		$statement->bindValue(':program', $program);
		
		
        return $statement->execute();
	}
}
?>