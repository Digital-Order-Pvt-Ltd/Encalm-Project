<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data = array();
	}

	/*public function encalm_lounge() 
	{
		$this->load->view('encalm_lounge');
	}*/

	public function index()
	{
		
		$this->load->view('spa');
	}

}
