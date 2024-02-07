<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
	   $this->data=array();
    }
	 
	 
	 
	public function index() {
		$this->session->sess_destroy();	
		$this->load->view('index');
	}
	public function test() 
	{
		
		//echo $_SERVER['REQUEST_URI'];
			
			//$this->load->view('confirm-search');
			$this->load->view('index_1');
			
	}
	public function asearch() 
	{
		if($_POST){
		$this->load->view('travel-search',$this->data);
		}
	}
	public function search() 
	{
		 //p($_POST);//exit;
		 if($_POST)
		 {
			$category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
			 $Adult = !empty($this->input->post( 'Adult' ))?$this->input->post( 'Adult' ):'0';
			 $Child = !empty($this->input->post( 'Child' ))?$this->input->post( 'Child' ):'0';
			 $Infant = !empty($this->input->post( 'Infant' ))?$this->input->post( 'Infant' ):'0';
			 $Arrivaldof = !empty($this->input->post( 'Arrivaldof' ))?$this->input->post( 'Arrivaldof' ):'';
			 $ArrivalFlight = !empty($this->input->post( 'ArrivalFlight' ))?$this->input->post( 'ArrivalFlight' ):'';
			 $ArrivalTime = !empty($this->input->post( 'ArrivalTime' ))?$this->input->post( 'ArrivalTime' ):'';
			 $ArrivalServiceTime = !empty($this->input->post( 'ArrivalServiceTime' ))?$this->input->post( 'ArrivalServiceTime' ):'';
			 $ArrivingAirportAt = !empty($this->input->post( 'ArrivingAirportAt' ))?$this->input->post( 'ArrivingAirportAt' ):'';
			$AStartFromAirport = !empty($this->input->post( 'AStartFromAirport' ))?$this->input->post( 'RequestType' ):'';
			$A_flight_id = !empty($this->input->post( 'A_flight_id' ))?$this->input->post( 'A_flight_id' ):'';
			$A_arrival_time = !empty($this->input->post( 'A_arrival_time' ))?$this->input->post( 'A_arrival_time' ):'';
			$ArrivingSector = !empty($this->input->post( 'ArrivingSector' ))?$this->input->post( 'ArrivingSector' ):'';

/* $this->data['ArrivalServiceDateTime'] = date("Y-m-d H:i:s", strtotime('+2 hours', strtotime($A_arrival_time)));
$this->data['category'] =$category;
$this->data['ArrivingAirportAt'] =$ArrivingAirportAt;
$this->data['AStartFromAirport'] =$AStartFromAirport;
$this->data['A_flight_id'] =$A_flight_id;
$this->data['A_arrival_time'] =date('d-M-Y H:i:s',strtotime($A_arrival_time));
$this->data['ArrivingSector'] =$ArrivingSector;
$this->data['Arrivaldof'] =$Arrivaldof;
$this->data['ArrivalFlight'] =$ArrivalFlight;
$this->data['ArrivalTime'] =$ArrivalTime;
$this->data['ArrivalServiceTime'] =$ArrivalServiceTime;
$this->data['Adult'] =$Adult; 
$this->data['Child'] =$Child; 
$this->data['Infant'] =$Infant;   */
			
						$data = array(
                        's_service_date_time' => date("Y-m-d H:i:s", strtotime('+2 hours', strtotime($A_arrival_time))),
                        's_category' => $category,
                        's_arriving_airport_at' => $ArrivingAirportAt,
                        's_arriving_start_from_airport' => $AStartFromAirport,
                        's_flight_id' => $A_flight_id,
                        's_arrival_time' =>date('d-M-Y H:i:s',strtotime($A_arrival_time)),
                        's_arrival_sector' =>$ArrivingSector,
                        's_doa' =>$Arrivaldof,
                        's_arrival_flight' =>$ArrivalFlight,
                        's_arrivalTime' =>$ArrivalTime,
                        's_arrival_service_time' => $ArrivalServiceTime,
						"s_adult" => $Adult, 
						"s_child" => $Child, 
						"s_infant" => $Infant,
						"s_select_product_details" => array()
						);
					$this->session->set_userdata($data);
			
		$array = array(
		'category'=>$category,
'sector'=>$ArrivingSector,
'airport_code'=>$ArrivingAirportAt,
'travel_date'=>date('Y-m-d',strtotime($Arrivaldof)),
'service_time'=>$ArrivalServiceTime,
'basetype'=>'Base',
'product_id'=>0
		); 
$this->data['flightdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
				//p($this->data['flightdata']);
			$this->load->view('travel-search',$this->data);
		}
		 else
		 {
			 redirect(base_url('home/index'));
		 }
		
	} 
	public function addons() 
	{
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			
			  
			//p($this->session->all_userdata());exit;
			$array = array(
			'category'=> $this->session->userdata("s_category") ,
			'sector'=>$this->session->userdata("s_arrival_sector"),
			'airport_code'=>$this->session->userdata("s_arriving_airport_at"),
			'travel_date'=>date('Y-m-d',strtotime($this->session->userdata("s_doa"))),
			'service_time'=>$this->session->userdata("s_arrival_service_time"),
			'basetype'=>'Add-On',
			'product_id'=>$id
					); 
			$this->data['addondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
				//p($this->data['addondata']);exit;
			$this->load->view('addon-search',$this->data);
		}
		 else
		 {
			 redirect(base_url('home/index'));
		 }
		
	}
	public function confirm() 
	{
		 
		$this->load->view('confirm-search',$this->data);
	}
	public function checkout() 
	{
		p($_POST);
		if($_POST)
		{
			
		
			
			 

			 
			$array = array(
			'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
			'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
			'email'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
			'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
			'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
			'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
			'parent_id'=>0
			);
		  $datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'register_customer',$array);
		  $json_decode =  json_decode($datalist);
		  
		  //p($json_decode);
		  if(!empty($json_decode))
		  {
			  if(!empty($json_decode->id) and (int) $json_decode->id  and $json_decode->id > 0)
			  {
				  
				  
				   $array_1 = array(
					'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
					'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
					'emailid'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
					'country'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):'',
					'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
					'password'=>!empty($this->input->post( 'mobile' ))?md5($this->input->post( 'mobile' )):md5('123456'),
					'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
					'status'=>!empty($this->input->post( 'status' ))?$this->input->post( 'status' ):'Inactive',
					'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
					'o_id'=>$json_decode->id
					);	
					
					$this->db->insert('tbl_users',$array_1);
			  }
		  }
				
				//p($allsearchdata);
				 
		  
		 
		}
		$this->load->view('checkout-search');
	}
	function updatesession()
	{
		$page = !empty($this->input->post( 'page' ))?$this->input->post( 'page' ):'';
		$product_name = !empty($this->input->post( 'product_name' ))?$this->input->post( 'product_name' ):'';
		$noqty = !empty($this->input->post( 'noqty' ))?$this->input->post( 'noqty' ):0;
		$product_id = !empty($this->input->post( 'product_id' ))?$this->input->post( 'product_id' ):0;
		$product_price = !empty($this->input->post( 'product_price' ))?$this->input->post( 'product_price' ):0;
		$redirecturl = !empty($this->input->post( 'redirecturl' ))?$this->input->post( 'redirecturl' ):'';
		if(!empty($product_name))
		{
			
			 $s_adult = !empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):0;
			 $s_infant = !empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0;
			 $s_child = !empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):0;
			//$this->session->set_userdata('s_select_product_details',array());
			
			//p($this->session->all_userdata());exit;
			if($page=='Search')
			{
				 $array =array();
				if(!empty($s_adult) and (int)$s_adult and $s_adult>0 )
				{
					$array[] = array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Adults','prate'=>$product_price,'pqty'=>$s_adult,'pprice'=>$s_adult*$product_price);
				}
				if(!empty($s_child) and (int)$s_child and $s_child>0 )
				{
					$array[] =  array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Child','prate'=>$product_price,'pqty'=>$s_child,'pprice'=>$s_child*$product_price);
				}
				if(!empty($s_infant) and (int)$s_infant and $s_infant>0 )
				{
					$array[] =array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Infant','prate'=>$product_price,'pqty'=>$s_infant,'pprice'=>$s_infant*$product_price);
				}
				 $this->session->set_userdata('s_select_product_details',$array );
				 $this->session->set_userdata('s_select_product_details_1',$array );
				 echo $redirecturl;
			}
			if($page=='Addon')
			{
				$old_array =  $this->session->userdata('s_select_product_details');
				$array[] =array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Qty','prate'=>$product_price,'pqty'=>$noqty,'pprice'=>$noqty*$product_price);
				 $array_merge = array_merge($old_array, $array);
				 $this->session->set_userdata('s_select_product_details',$array_merge);
				 echo $this->load->view('ajax_table', $this->data, TRUE );
				  
			}
			
		}
	
	}
}
	