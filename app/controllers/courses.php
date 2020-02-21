<?php
class Courses extends Controller {

    public function index($department=null,$program=null) 
	{	
		$course_m=$this->model("Course");
		if(isset($department)&&isset($program))
		{
			$courses=$course_m->courses($department,$program);
			$this->view('courses/courses', ['courses' => $courses]);
		}  
		else if(isset($department)&&!isset($program))
		{
			$programs=$course_m->programs($department);
			$this->view('courses/listOfPrograms', ['programs' => $programs,'department' => $department]);
		}
		else
		{
			$departments=$course_m->departments();
			$this->view('courses/departments', ['departments' => $departments]);
		} 
	}
	
	public function insertdata()
	{
		if($_REQUEST["department"])
		{
			$course_m=$this->model("Course");
			$isSuccessFull=$course_m->insertcourse($_REQUEST["courseid"],$_REQUEST["department"],$_REQUEST["program"],$_REQUEST["coursename"]);
			$this->view('courses/insertdata', ['is_insert_successfull' => is_insert_successfull?true:false]);
			die;
		}
		$this->view('courses/insertdata');
		
	}
	
}

?>