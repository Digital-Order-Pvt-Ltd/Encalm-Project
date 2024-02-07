<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
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
		$this->load->view('atithya/blog-list');
	}
	
	public function blog_1() 
	{
		$this->load->view('atithya/blog-detail');
	}
	
	public function blog_2() 
	{
		$this->load->view('atithya/blog_2');
	}
	
	public function blog_3() 
	{
		$this->load->view('atithya/blog_3');
	}
	
	public function blog_4() 
	{
		$this->load->view('atithya/blog_4');
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
