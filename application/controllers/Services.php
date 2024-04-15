<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
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

	public function encalmlounge()
	{
		$this->data['meta_title'] = "Airport Lounge Access | Lounge Services in Airport | Encalm";
		$this->data['meta_keywords'] = "Airport Lounge Access , Airport Lounge , Lounge Access in airport , Lounge Airport , Airport Lounge Pass ";
		$this->data['meta_description'] = "Book airport lounge access at Encalm luxury lounge. Our Airport lounge services offers you to relax, eat or  work while you wait for your flight. ";
		$this->data['meta_website_description'] = "Keeping in mind our guests' comfort, Encalm has a dedicated airport lounge for travellers to relax. Crafted with expert precision, the Encalm lounge provides relief from the continuous bustle of the airport. Sit back and bask in luxury at the Encalm lounge.";

		$this->load->view('encalm_lounge', $this->data);
	}

	public function encalm_hotel()
	{
		$this->load->view('encalm_hotel');
	}

	public function encalm_spa()
	{
		$this->load->view('encalm_spa');
	}

	public function encalmprive()
	{
		$this->load->view('encalm_prive');
	}

	public function atithyameetandgreet()
	{
		$this->data['meta_title'] = "Meet and Greet Airport | Meet and Assist Services | Atithya";
		$this->data['meta_keywords'] = "Meet and Greet , Airport Meet and Greet , Atithya Welcome and Assist";
		$this->data['meta_description'] = "Experience the welcome and assist services with Atithya. Book meet and assist service with that includes baggage assistance, concierge services, buggy and wheelchair.";
		$this->data['meta_website_description'] = "Atithya is a bespoke Welcome and Assist service by Encalm. With the concept of Atithi Devo Bhava in mind, Atithya endevours to provide a comfortable airport experience for travellers. Every service has been carefully curated to ensure the utmost comfort and luxury for our guests. For a smooth airport experience, we offer an array of services such as airport meet and greet, concierge service, baggage assistance and buggy service.";

		$this->load->view('encalm_atithya', $this->data);
	}

	public function enwrap()
	{
		$this->data['meta_title'] = "Luggage Wrapping  Service | Luggage Wrapping at Airport | Enwrap";
		$this->data['meta_keywords'] = "Meet and Greet , Airport Meet and Greet , Atithya Welcome and Assist";
		$this->data['meta_description'] = "Get premium luggage wrapping service at airport with Encalm Enwrap. A well-trained professional provide luggage wrapping at airport with biodegradable material.";

		$this->data['meta_website_description'] = "Atithya is a bespoke Welcome and Assist service by Encalm. With the concept of Atithi Devo Bhava in mind, Atithya endevours to provide a comfortable airport experience for travellers. Every service has been carefully curated to ensure the utmost comfort and luxury for our guests. For a smooth airport experience, we offer an array of services such as airport meet and greet, concierge service, baggage assistance and buggy service.";

		$this->load->view('enwrap', $this->data);
	}

	/*	public function businesscentre() 
	{
		$this->data['meta_title'] = "Airport Business Center | Workspace At Airport | Encalm";
		$this->data['meta_keywords'] = "Meet and Greet , Airport Meet and Greet , Atithya Welcome and Assist";
		$this->data['meta_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";
		
		$this->data['meta_website_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";

		$this->load->view('businesscentre',$this->data);
	}*/

	public function businesscentre()
	{
		$this->data['meta_title'] = "Airport Business Center | Workspace At Airport | Encalm";
		$this->data['meta_keywords'] = "Meet and Greet , Airport Meet and Greet , Atithya Welcome and Assist";
		$this->data['meta_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";

		$this->data['meta_website_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";

		/*if($_POST)
		{  
			//p($_POST); die;
			$userdatalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_customer_duplicacy',array('email_id'=>$this->input->post( 'email_from' )));
			$userdatalist = json_decode($userdatalist);
			//print_r($userdatalist); die;
			$message = !empty($userdatalist->message)?$userdatalist->message:'';
			//print_r($message); die;			
			
			//$usercheck = $this->db->query("select * from tbl_users where email_from = '".$this->input->post( 'email_from' )."' or mobile  = '".$this->input->post( 'mobile' )."' ")->row();
	  if(!empty($message) and $message=='data not found.')
	  { 
  
	$array = array(
		'bookingform'=>!empty($this->input->post( 'bookingform' ))?$this->input->post( 'bookingform' ):'',
		'category'=>!empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'',		
		'contact_name'=> !empty($this->input->post( 'contact_name' ))?$this->input->post( 'contact_name' ):'',
		'email_from'=>!empty($this->input->post( 'email_from' ))?$this->input->post( 'email_from' ):'',
		'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'country_code' ).$this->input->post( 'mobile' ):'',		
		'booking_date'=>!empty($this->input->post( 'booking_date' ))?date('Y-m-d',strtotime($this->input->post( 'booking_date' ))):'',		
		'product'=>!empty($this->input->post( 'product' ))?$this->input->post( 'product' ):'',
		'no_of_hrs'=>!empty($this->input->post( 'no_of_hrs' ))?$this->input->post( 'no_of_hrs' ):''		
		);  
		//print_r($array);
		$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_booking_request',$array);
		//print_r($datalist);   exit;
		$json_decode =  json_decode($datalist);  
		  if(!empty($json_decode))
			{
		  $this->session->set_flashdata("success", "Booking done successfully for business center..");		  
		  $this->load->view('thankyou_booking_request');
			}
	  }else{
		  
		  $this->session->set_flashdata("error", "This email id is already registered with us!");
			redirect(base_url('services/businesscentre'));
		  
	  }
		//redirect(base_url('services/businesscentre'));	
		} else {

		$this->load->view('businesscentre',$this->data);
		}*/
		$this->load->view('businesscentre', $this->data);
	}

	public function businesscentre_booking()
	{
		$this->data['meta_title'] = "Airport Business Center | Workspace At Airport | Encalm";
		$this->data['meta_keywords'] = "Meet and Greet , Airport Meet and Greet , Atithya Welcome and Assist";
		$this->data['meta_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";

		$this->data['meta_website_description'] = "The Business Center is located near Terminal 3 IGI Airport, New Delhi. Perfect for busy professionals on the go, the Business Center provides comfortable workspaces perfect for your business meetings or events.";

		$this->load->view('businesscentre_booking', $this->data);
	}

	public function transit_lounge()
	{
		$this->data['meta_title'] = "Transit | Encalm";
		$this->data['meta_keywords'] = "";
		$this->data['meta_description'] = "Your transit just got a whole lot better.";

		$this->data['meta_website_description'] = "";

		$this->load->view('transit_lounge', $this->data);
	}

	public function change_time()
	{
		$date = $this->input->post('dt');
		$time = $this->input->post('hrs');
		date_default_timezone_set('Asia/Kolkata');
		$newDate = date('d-m-Y G:i', strtotime($date . '+' . $time . 'hours'));
		$msg = "You are requesting for Service Time From " . $date . " - " . $newDate;
		echo $msg;
	}
}
