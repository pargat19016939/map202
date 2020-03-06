<?php

class Login extends Controller {

    public function index() {		
		$this->view('login/index');
    }



    public function account_add()
    {		
                      $this->view('login/register');
    }
    
    public function account_verify(){
      $password = $_REQUEST['password'];
        $username = $_REQUEST['username'];
       
        
		$user_m = $this->model('User');
		
		$user_m->authenticate($username, $password);
		
        
    }
	


             public function account_check()
      {
        $success="";




                        $model_of_user = $this->model('User');
                        $account_err=array();
      
                               $email =$_REQUEST['username'];

if (filter_var($email, FILTER_VALIDATE_EMAIL))  
{
          array_push($account_err,"Error in Username");
}

                else{

                  $password=$_REQUEST['password'];


                  if(strlen($password) < 5) 
                  {
                         array_push($account_err,"Password should be more than 5 length");
                  }
                  
        }
      
                      if(count($account_err)==0)
                      {
                               $valid=$model_of_user->register($_REQUEST['username'], password_hash($_REQUEST['password'],PASSWORD_DEFAULT));
                        if($valid)
                        {
   $success="registration successfull";
            }
            else{
                                array_push($account_err,"User Error: Already Exists");
                               }
                      }

                        $this->view('login/register', ['reg_error' => $account_err,'success' => $success]);
      }
   
   
}
