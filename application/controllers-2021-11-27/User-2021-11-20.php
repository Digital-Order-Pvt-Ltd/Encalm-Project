<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
    }
	 
	 
	
	public function myprofile() {  
		$this->load->view('profile');
	}
	
	public function mybooking() {
		 
		$this->load->view('booking');
	} 
	public function myguest() {
		 
		$this->load->view('guest');
	}
	public function changepassword() {
		 
		$this->load->view('change-password');
	}
	public function checkout() {
		 
		$this->load->view('checkout-search');
	}
}
