<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pressroom extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	/*public function encalm_lounge() 
	{
		$this->load->view('encalm_lounge');
	}*/

	public function index() 
	{
		$this->load->view('atithya/news-list');
	}
	
	public function detail() 
	{
		$this->load->view('atithya/news-detail');
	}
	
	public function encalm_spa() 
	{
		$this->load->view('encalm_spa');
	}
	
	/*public function encalm_atithya() 
	{
		$this->load->view('encalm_atithya');
	}*/

	public function atithyameetandgreet() 
	{
		$this->load->view('encalm_atithya');
	}
}
