<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
		$this->load->view('privacy-policy');
	}
}
