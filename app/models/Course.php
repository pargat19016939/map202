<?php
class Course
{
	public function __construct()
	{
		
	}
	 
	
	public function programs($department)
	{
		$database = db_connect();
		$statement = $database->prepare("SELECT distinct program from courses WHERE department = :department ");
		$statement->bindValue(':department', $department); 
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}

	public function departments()
	{
		$database = db_connect();
        $statement = $database->prepare("select distinct department from courses");
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	 

	
	public function courses($department,$program)
	{
		$database = db_connect();
		$statement = $database->prepare("select * from courses WHERE department = :department and program = :program");
		$statement->bindValue(':department', $department);
		$statement->bindValue(':program', $program);
        $statement->execute();
        $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $courses;
	}
	
	public function insertcourse ($courseID,$department,$program,$courseName) 	
	{
		$database = db_connect();
        $statement = $database->prepare("insert into courses (courseID,department,program,courseName)". " VALUES (:courseID,:department,:program,:courseName); ");
		$statement->bindValue(':courseID', $courseID);
		$statement->bindValue(':department',$department);
		$statement->bindValue(':program', $program);
		$statement->bindValue(':courseName',  $courseName);
        return $statement->execute();
	}
}
?>