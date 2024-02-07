<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
		$this->data['meta_title'] = "Airport Hospitality and Premium Services | Airport Assistance by Encalm";
		$this->data['meta_keywords'] = "Airport Concierge Services , Airport Assistance";
		$this->data['meta_description'] = "Encalm provides premium airport hospitality services such as concierge service & airport assistance in New Delhi's IGI (DEL) Airport. With Encalm, you can have a luxury travel experience as they make arrival, departure & transit seamless for guests.";
		$this->data['meta_website_description'] = "Encalm specializes in curating comfortable and luxurious experiences at the airport. Encalm aims to make the airport experience special for their guests and provides premium services, setting new benchmarks in airport hospitality. With their offerings such as concierge service and airport assistance, Encalm focuses on creating delightful experiences for their guests.";

		$this->load->view('index',$this->data);
	}
	
	public function newsletter() 
	{
		$this->db->query("insert into tbl_newsletter (email, create_date) values ('".$_POST['email']."', now())");
		//$this->load->view('index');
	}
}
