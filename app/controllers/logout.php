<?php
	class Logout extends Controller {

    public function pargat() {		
		
		session_destroy();
		header('Location: /login');
		}
    }
    
?>