<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProformaInvoice extends CI_Controller {
 public function __construct() {
       parent::__construct();
    }
	
	/*public function encalm_lounge() 
	{
		$this->load->view('encalm_lounge');
	}*/

	public function index() 
	{ 
		$this->load->view('atithya/performa-invoice');
	}
}
