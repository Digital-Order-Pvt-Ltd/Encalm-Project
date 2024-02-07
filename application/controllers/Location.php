<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
	    
	    $this->data['meta_title'] = "Lounge at Delhi Airport | Meet & Assist Delhi | Meet & Greet DEL";
		$this->data['meta_keywords'] = "Airport Lounge Access , Airport Lounge , Lounge Access in airport , Lounge Airport , Airport Lounge Pass ";
		$this->data['meta_description'] = "Book lounge at Delhi airport for assitance at airport. Encalm offers meet and greet services at IGI airport. Enjoy the seamless travel experience with at Delhi airport.";
		$this->data['meta_website_description'] = "Keeping in mind our guests' comfort, Encalm has a dedicated airport lounge for travellers to relax. Crafted with expert precision, the Encalm lounge provides relief from the continuous bustle of the airport. Sit back and bask in luxury at the Encalm lounge.";
		
		$this->load->view('location',$this->data);
	}
	
	public function hyderabad() 
	{
	    
	    $this->data['meta_title'] = "Lounge at Hyderabad Airport | Meet & Assist Hyderabad | Meet & Greet HYD";
		$this->data['meta_keywords'] = "Airport Lounge Access , Airport Lounge , Lounge Access in airport , Lounge Airport , Airport Lounge Pass ";
		$this->data['meta_description'] = "Book lounge at Hyderabad airport for assitance at airport. Encalm offers meet and greet services at RGI airport. Enjoy the seamless travel experience with at Hyderabad.";
		$this->data['meta_website_description'] = "Keeping in mind our guests' comfort, Encalm has a dedicated airport lounge for travellers to relax. Crafted with expert precision, the Encalm lounge provides relief from the continuous bustle of the airport. Sit back and bask in luxury at the Encalm lounge.";
		
		$this->load->view('location_hyderabad',$this->data);
	}
	
	public function goa() 
	{
	    
	    $this->data['meta_title'] = "Meet & Assist Goa | Meet & Greet Goa";
		$this->data['meta_keywords'] = "Airport Lounge Access , Airport Lounge , Lounge Access in airport , Lounge Airport , Airport Lounge Pass ";
		$this->data['meta_description'] = "Book lounge at Hyderabad airport for assitance at airport. Encalm offers meet and greet services at RGI airport. Enjoy the seamless travel experience with at Hyderabad.";
		$this->data['meta_website_description'] = "Keeping in mind our guests' comfort, Encalm has a dedicated airport lounge for travellers to relax. Crafted with expert precision, the Encalm lounge provides relief from the continuous bustle of the airport. Sit back and bask in luxury at the Encalm lounge.";
		
		$this->load->view('location_goa',$this->data);
	}
}
