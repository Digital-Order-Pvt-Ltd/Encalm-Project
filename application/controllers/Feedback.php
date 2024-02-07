<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
		$this->load->view('feedback');
	}
	
	public function spa() 
	{
		$this->load->view('feedback_spa');
	}
	
	public function lounge() 
	{
		$this->load->view('feedback_lounge');
	}
	
	public function atithya() 
	{
		$this->load->view('feedback_atithya');
	}
}
