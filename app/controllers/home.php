<?php

class Home extends Controller {

    public function index() {	
	    $this->view('home/index');
	    die;
    }

    public function secret() {
    	$this->view('home/secret');
	    die;
    }

}
