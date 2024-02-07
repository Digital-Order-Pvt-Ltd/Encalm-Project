<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spa extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
	    
	    $this->data['meta_title'] = "Airport Spa | Spa at Airport | Spa Services by Encalm";
		$this->data['meta_keywords'] = "airport spa, spa at airport ";
		$this->data['meta_description'] = "Get rejuvenating spa at airport with Encalm airport spa service. Airport Spa includes numerous massage therapies that help you unwind after a long day at the airport!";
		
		$this->data['meta_website_description'] = "Atithya is a bespoke Welcome and Assist service by Encalm. With the concept of Atithi Devo Bhava in mind, Atithya endevours to provide a comfortable airport experience for travellers. Every service has been carefully curated to ensure the utmost comfort and luxury for our guests. For a smooth airport experience, we offer an array of services such as airport meet and greet, concierge service, baggage assistance and buggy service.";
		$this->load->view('spa', $this->data);
	}
}
