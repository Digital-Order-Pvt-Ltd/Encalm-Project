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
	
	public function blog_5() 
	{
		$this->load->view('atithya/blog_5');
	}
	
	public function blog_6() 
	{
		$this->load->view('atithya/blog_6');
	}
	
	public function blog_7() 
	{
		$this->load->view('atithya/blog_7');
	}
	public function blog_8() 
	{
		$this->load->view('atithya/blog_8');
	}
	public function blog_11() 
	{
		$this->load->view('atithya/blog_11');
	}
	
	public function blog_12() 
	{
		$this->load->view('atithya/blog_12');
	}

	public function blog_13() 
	{
		$this->load->view('atithya/blog_13');
	}

	public function blog_14() 
	{
		$this->load->view('atithya/blog_14');
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
