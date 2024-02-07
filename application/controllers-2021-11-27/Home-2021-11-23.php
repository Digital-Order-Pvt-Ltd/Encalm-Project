<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
	   $this->data=array();
    }
	 
	 
	 
	public function index() 
	{
		//p($this->session->all_userdata()); 
		  $s_category = !empty($this->session->userdata("s_category"))?$this->session->userdata("s_category"):'';
			if(!empty($s_category))
			{
					 $unset_session = array(
                        's_service_date_time',
                        's_category',
						 's_arrival_term',
                        's_departure_term',
						's_terminal_id',
                        's_to_airport_id',
                        's_from_airport_id',
						's_airline_id',
						's_airline_name',
                        's_terminal_code',
                        's_terminal_value',
                        's_arriving_airport_at',
                        's_arriving_start_from_airport',
                        's_flight_id',
                        's_arrival_time',
                        's_arrival_sector',
                        's_doa',
                        's_arrival_flight',
                        's_arrivalTime',
                        's_arrival_service_time' ,
						"s_adult", 
						"s_child", 
						"s_infant",
						"s_select_product_details",
						 
						);
					 
					 
						/* $unset_session_11 = array(
                        's_service_date_time' ,
                        's_category' ,
                        's_arriving_airport_at' ,
                        's_arriving_start_from_airport' ,
                        's_flight_id' ,
                        's_arrival_time' ,
                        's_arrival_sector' ,
                        's_doa' ,
                        's_arrival_flight' ,
                        's_arrivalTime' ,
                        's_arrival_service_time' ,
						"s_adult" , 
						"s_child" , 
						"s_infant" ,
						"s_select_product_details"
						);
						//p($unset_session_11); */
					$this->session->unset_userdata($unset_session);
			}
		
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
		//p($this->session->all_userdata()); exit;
		// p($_POST);exit;
		 if($_POST)
		 {
			 
			 $to_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
			 $terminal_id = !empty($this->input->post( 'terminal_id' ))?$this->input->post( 'terminal_id' ):'0';
			 $from_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
			 $terminal_code = !empty($this->input->post( 'terminal_code' ))?$this->input->post( 'terminal_code' ):'';
			 $terminal_value = !empty($this->input->post( 'terminal_value' ))?$this->input->post( 'terminal_value' ):'';
			 $airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
			 $airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
			 
			 $category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
			 $Adult = !empty($this->input->post( 'Adult' ))?$this->input->post( 'Adult' ):'0';
			 $Child = !empty($this->input->post( 'Child' ))?$this->input->post( 'Child' ):'0';
			 $Infant = !empty($this->input->post( 'Infant' ))?$this->input->post( 'Infant' ):'0';
			 
			 $doa = !empty($this->input->post( 'doa' ))?$this->input->post( 'doa' ):'';
			 $FlightName = !empty($this->input->post( 'FlightName' ))?$this->input->post( 'FlightName' ):'';
			 $ArrivalTime = !empty($this->input->post( 'ArrivalTime' ))?$this->input->post( 'ArrivalTime' ):'';
			 
			 $ServiceTime = !empty($this->input->post( 'ServiceTime' ))?$this->input->post( 'ServiceTime' ):'';
			 
			 $ToAirport = !empty($this->input->post( 'ToAirport' ))?$this->input->post( 'ToAirport' ):'';
			 
			$FromAirport = !empty($this->input->post( 'FromAirport' ))?$this->input->post( 'FromAirport' ):'';
			$flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):'';
			$arrival_time = !empty($this->input->post( 'arrival_time' ))?$this->input->post( 'arrival_time' ):'';
			$SectorName = !empty($this->input->post( 'SectorName' ))?$this->input->post( 'SectorName' ):'';
			$departure_term = !empty($this->input->post( 'departure_term' ))?$this->input->post( 'departure_term' ):'';
			$arrival_term = !empty($this->input->post( 'arrival_term' ))?$this->input->post( 'arrival_term' ):'';
			 

 			
			$customer_data = !empty( $this->session->userdata('s_customer_data'))? $this->session->userdata('s_customer_data'):array();
				 		$data = array(
                        's_service_date_time' => date("D, d-M-Y h:i", strtotime('+2 hours', strtotime($arrival_time))),
                        's_category' => $category,
                        's_arrival_term' => $arrival_term,
                        's_departure_term' => $departure_term,
						's_terminal_id' =>$terminal_id,
                        's_to_airport_id' => $to_airport_id,
                        's_from_airport_id' => $from_airport_id,
						's_airline_id' => $airline_id,
						's_airline_name' => $airline_name,
                        's_terminal_code' => $terminal_code,
                        's_terminal_value' => $terminal_value,
                        's_arriving_airport_at' => $ToAirport,
                        's_arriving_start_from_airport' => $FromAirport,
                        's_flight_id' => $flight_id,
                        's_arrival_time' =>date('D, d-M-Y h:i',strtotime($arrival_time)),
                        's_arrival_sector' =>$SectorName,
                        's_doa' =>$doa,
                        's_arrival_flight' =>$FlightName,
                        's_arrivalTime' =>$ArrivalTime,
                        's_arrival_service_time' =>$ServiceTime ,
						"s_adult" => $Adult, 
						"s_child" => $Child, 
						"s_infant" => $Infant,
						"s_select_product_details" => array(),
						"s_customer_data" => $customer_data
						);
					$this->session->set_userdata($data);
			
		$array = array(
		'category'=>$category,
'sector'=>$SectorName,
'airport_code'=>$ToAirport,
'travel_date'=>date('Y-m-d',strtotime($doa)),
'service_time'=>$ServiceTime,
//'service_time'=>'10:00:00',
'basetype'=>'Base',
'product_id'=>0
		); 
		//p($array);
$this->data['flightdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
				//p($this->data['flightdata']);exit;
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
			//	p($this->session->all_userdata());exit;
			$array = array(
			'category'=> $this->session->userdata("s_category") ,
			'sector'=>$this->session->userdata("s_arrival_sector"),
			'airport_code'=>$this->session->userdata("s_arriving_airport_at"),
			'travel_date'=>date('Y-m-d',strtotime($this->session->userdata("s_doa"))),
			'service_time'=>$this->session->userdata("s_arrival_service_time"),
			'basetype'=>'Add-On',
			'product_id'=>$id
					); 
			//$this->data['addondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
			$this->data['addondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_addon_list',$array);
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
		//p($this->session->all_userdata());exit;
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
		if($_POST)
		{
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
			if(!empty($session_customer_data) and !empty($s_select_product_details))
			{
				 
				$arrival_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrivalTime"):'';
				$departure_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):'';
				 
				$o_array = array(
				'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
				//'partner_id'=>12,
				'date_order'=>date('Y-m-d H:i:s'),
				'airport_location_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
				//'airport_location_id'=>!empty($this->session->userdata("s_airport_location_id"))?$this->session->userdata("s_airport_location_id"):0,
				'commitment_date'=>!empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):'',
				'airport_terminal_id'=>!empty($this->session->userdata("s_terminal_id"))?$this->session->userdata("s_terminal_id"):0,
				'flight_id'=>!empty($this->session->userdata("s_flight_id"))?$this->session->userdata("s_flight_id"):0,
				'airline_id'=>!empty($this->session->userdata("s_airline_id"))?$this->session->userdata("s_airline_id"):0,
				'selected_service'=>!empty($this->session->userdata("s_category"))?strtolower($this->session->userdata("s_category")):'',
				'arrival_time'=>$arrival_time,
				'departure_time'=>$departure_time,
				'booking_made_from'=>'b2c',
				'from_airport_id'=>!empty($this->session->userdata("s_from_airport_id"))?$this->session->userdata("s_from_airport_id"):0,
				'to_airport_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
				'no_of_adult'=>!empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):0,
				'no_of_children'=>!empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):0,
				'no_of_infants'=>!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0
				);
				//p($o_array);
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_parent',$o_array);
				 
				$json_decode =  json_decode($datalist);
				//p($json_decode);
				$order_id=0;
				if(!empty($json_decode))
					{
					 if(!empty($json_decode->id) and (int) $json_decode->id  and $json_decode->id > 0)
						{
							$order_id=$json_decode->id;
							
						}
					}
				
				//p($this->data['orderdata']);exit;
				
				if(!EMPTY($order_id) and  (int)$order_id)
				{
					for($i=0;$i<count($s_select_product_details);$i++)
					 {
						$o_child_array = array(
						"order_id"=>$order_id,
						"product_id"=>$s_select_product_details[$i]['pid'],
						"name"=>$s_select_product_details[$i]['pname'],
						"price_unit"=>$s_select_product_details[$i]['prate'],
						"product_uom_qty"=>$s_select_product_details[$i]['pqty'],
						"price_subtotal"=>$s_select_product_details[$i]['pprice']
						);
						p($o_child_array);
						$this->data['orderdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_item',$o_child_array);
						 
					 }
					 $array=array(
							'status'=>'0',
							'create_date'=>date('Y-m-d H:i:s'),
							'customer_id'=>!empty($session_customer_data['customer_id'])?$session_customer_data['customer_id']:0,
							'o_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'category'=>$this->session->userdata("s_category"),
							'o_order_id' => $order_id,
							'order_no'=>!empty($this->input->post( 'order_no' ))?$this->input->post( 'order_no' ):$order_id,
							'booking_date'=>!empty($this->input->post( 'booking_date' ))?date('Y-m-d',strtotime($this->input->post( 'booking_date' ))):date('Y-m-d H:i:s'),
							'booking_time'=>!empty($this->input->post( 'booking_time' ))?$this->input->post( 'booking_time' ):date('H:i:s'), 
							  
							'add_ons_json'=>json_encode($s_select_product_details),
							'service_json'=>json_encode($session_customer_data),
							'session_json'=>json_encode($this->session->all_userdata())
							);
							$this->db->insert('tbl_booking',$array);
							$insert_id = $this->db->insert_id();
							if($insert_id)
							{
							 if(!empty($s_select_product_details))
							 {
								 for($i=0;$i<count($s_select_product_details);$i++)
								 {
									$array = array(
									"booking_id"=>$insert_id,
									"pid"=>$s_select_product_details[$i]['pid'],
									 "pname"=>$s_select_product_details[$i]['pname'],
									"ptype"=>$s_select_product_details[$i]['ptype'],
									"prate"=>$s_select_product_details[$i]['prate'],
									"pqty"=>$s_select_product_details[$i]['pqty'],
									"pprice"=>$s_select_product_details[$i]['pprice']
									);
									$this->db->insert('tbl_booking_gets',$array);
								 }
							 }
							} 
					 
				  $this->session->set_flashdata("success", "order confirmed succesfully");
				  redirect(base_url('home/checkout/'.$order_id.'/'.$insert_id));
				}
				else
				{
					$this->session->set_flashdata("success", "Order not created please check");
					$this->load->view('confirm-search',$this->data);
				}
			}
		}
		else
		{
		$this->load->view('confirm-search',$this->data);
		}
	}
	public function checkout() 
	{
		//p($_POST);
		//p($this->session->all_userdata());exit;
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3)));
		$booking_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));
		$this->data['booking_id']=!empty($booking_id)?$booking_id:0;
		$this->data['o_booking_id']=!empty($id)?$id:0;
		if(!empty($id) and !empty($booking_id))
		{	
	
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			$s_d_array = array('id'=>$id);
				
			$this->data['orderdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details',$s_d_array);
			
			$guest_array = array('parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['gusetdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$guest_array);
			
			$coupon_array = array('cust_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['coupondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_discount_coupon',$coupon_array);
			
			$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
			$this->load->view('checkout-search',$this->data);
				
		}
		else
		{
		}
		
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
				$data =  curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_variant_details',array('id'=>$product_id));
				
				 $array =array();
				 $a_pid = 0;
				 $a_pname = '';
				 $a_rate = 0;
				 
				 $c_pid = 0;
				 $c_pname = '';
				 $c_rate = 0;
				 
				 $i_pid = 0;
				 $i_pname = '';
				 $i_rate = 0;
				 
				 $json_decode = json_decode($data); 
					//p($json_decode);
					if(!empty($json_decode))
					{
						foreach($json_decode as $val)
						{
							if($val->variant=='Adult')
							{
								 $a_pid = $val->id;
								 $a_pname = $val->name;
								 $a_rate = $val->lst_price;
							}
							elseif($val->variant=='Child')
							{
								 $c_pid = $val->id;
								 $c_pname = $val->name;
								 $c_rate = $val->lst_price;
							}
							elseif($val->variant=='Infant')
							{
								 $i_pid = $val->id;
								 $i_pname = $val->name;
								 $i_rate = $val->lst_price;
							}
							 
						}
					}
				 
				if(!empty($s_adult) and (int)$s_adult and $s_adult>0 )
				{
					$array[] = array('pid'=>$a_pid, "pname"=>$a_pname,'ptype'=>'Adults','prate'=>$a_rate,'pqty'=>$s_adult,'pprice'=>$s_adult*$a_rate);
				}
				if(!empty($s_child) and (int)$s_child and $s_child>0 )
				{
					$array[] =  array('pid'=>$c_pid, "pname"=>$c_pname,'ptype'=>'Child','prate'=>$c_rate,'pqty'=>$s_child,'pprice'=>$s_child*$c_rate);
				}
				if(!empty($s_infant) and (int)$s_infant and $s_infant>0 )
				{
					$array[] =array('pid'=>$i_pid, "pname"=>$i_pname,'ptype'=>'Infant','prate'=>$i_rate,'pqty'=>$s_infant,'pprice'=>$s_infant*$i_rate);
				}
				 $this->session->set_userdata('s_select_product_details',$array );
				 
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
	function placeorder()
	{
		//p($_POST);
		 
		//ssexit;
		 
		
		
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
		//echo json_encode($s_select_product_details);
		//echo json_encode($session_customer_data);
		//echo json_encode($this->session->all_userdata());die();
		//p($s_select_product_details);
		//echo count($s_select_product_details);
		//exit;
		if($_POST)
		{
			$booking_id = !empty($this->input->post( 'booking_id' ))?$this->input->post( 'booking_id' ):0;
			$o_booking_id = !empty($this->input->post( 'o_booking_id' ))?$this->input->post( 'o_booking_id' ):0;
			$array=array(
			'status'=>'0',
			'create_date'=>date('Y-m-d H:i:s'),
			'customer_id'=>!empty($session_customer_data['customer_id'])?$session_customer_data['customer_id']:0,
			'o_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
			'category'=>$this->session->userdata("s_category"),
			//'order_no'=>!empty($this->input->post( 'order_no' ))?$this->input->post( 'order_no' ):'',
			'booking_date'=>!empty($this->input->post( 'booking_date' ))?date('Y-m-d',strtotime($this->input->post( 'booking_date' ))):'',
			'booking_time'=>!empty($this->input->post( 'booking_time' ))?$this->input->post( 'booking_time' ):'', 
			 
			'coupon'=>!empty($this->input->post( 'c_discount_code' ))?$this->input->post( 'c_discount_code' ):'', 
			'discount'=>!empty($this->input->post( 'c_discount_amt' ))?$this->input->post( 'c_discount_amt' ):0, 
			
			'net_amount'=>!empty($this->input->post( 'net_amount' ))?$this->input->post( 'net_amount' ):0, 
			'final_amount'=>!empty($this->input->post( 'final_amount' ))?$this->input->post( 'final_amount' ):0,
			 
			'placard_title'=>!empty($this->input->post( 'placard_title' ))?$this->input->post( 'placard_title' ):'', 
			'placard_first_name'=>!empty($this->input->post( 'placard_first_name' ))?$this->input->post( 'placard_first_name' ):'', 
			'placard_last_name'=>!empty($this->input->post( 'placard_last_name' ))?$this->input->post( 'placard_last_name' ):'', 
			'placard_country'=>!empty($this->input->post( 'placard_country' ))?$this->input->post( 'placard_country' ):'', 
			'placard_mobile'=>!empty($this->input->post( 'placard_mobile' ))?$this->input->post( 'placard_mobile' ):'', 
			'placard_use_GSTIN'=>!empty($this->input->post( 'placard_use_GSTIN' ))?$this->input->post( 'placard_use_GSTIN' ):'no', 
			'placard_name'=>!empty($this->input->post( 'placard_name' ))?$this->input->post( 'placard_name' ):'no', 
			'placard_address'=>!empty($this->input->post( 'placard_address' ))?$this->input->post( 'placard_address' ):'', 
			'placard_city'=>!empty($this->input->post( 'placard_city' ))?$this->input->post( 'placard_city' ):'', 
			'placard_state'=>!empty($this->input->post( 'placard_state' ))?$this->input->post( 'placard_state' ):'', 
			'placard_pincode'=>!empty($this->input->post( 'placard_pincode' ))?$this->input->post( 'placard_pincode' ):'', 
			'placard_country_code'=>!empty($this->input->post( 'placard_country_code' ))?$this->input->post( 'placard_country_code' ):'', 
			'placard_mobile_1'=>!empty($this->input->post( 'placard_mobile_1' ))?$this->input->post( 'placard_mobile_1' ):'', 
			'placard_email_id'=>!empty($this->input->post( 'placard_email_id' ))?$this->input->post( 'placard_email_id' ):'',
			'add_ons_json'=>json_encode($s_select_product_details),
			'service_json'=>json_encode($session_customer_data),
			'session_json'=>json_encode($this->session->all_userdata())
			);
			$this->db->update('tbl_booking',$array, array('id'=>$booking_id));
			 //$insert_id = $this->db->insert_id();
			//if($insert_id)
			if($booking_id)
			{
				 if(!empty($this->input->post( 'adult_first_name' )))
				 {
					 for($i=0;$i<count($this->input->post( 'adult_first_name' ));$i++)
					 {
						$age =!empty( $this->input->post( 'adult_age' )[$i])? $this->input->post( 'adult_age' )[$i]:0;
						
						
						$o_g_array=array(
							'sale_id'=>$o_booking_id,
							'partner_id'=>0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'adult_title' )[$i],
							'first_name'=>$this->input->post( 'adult_first_name' )[$i],
							'last_name'=>$this->input->post( 'adult_last_name' )[$i],
							'gender'=>$this->input->post( 'adult_gender')[$i],
							'dob'=>date('Y-m-d H:i:s',strtotime("-$age years")),
							'passport_no'=>$this->input->post( 'adult_passport' )[$i],
							'pnr_no'=>$this->input->post( 'adult_pnr' )[$i]
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						$array_1 = array(
						"booking_id"=>$booking_id,
						//"booking_id"=>$insert_id,
						"o_guest_id"=>0,
						"guest_type"=>'Adult',
						"guest_title"=>$this->input->post( 'adult_title' )[$i],
						"guest_first_name"=>$this->input->post( 'adult_first_name' )[$i],
						"guest_last_name"=>$this->input->post( 'adult_last_name' )[$i],
						"guest_passport"=>$this->input->post( 'adult_passport' )[$i],
						"guest_age"=>$this->input->post( 'adult_age' )[$i],
						"guest_gender"=>$this->input->post( 'adult_gender')[$i],
						"guest_pnr"=>$this->input->post( 'adult_pnr' )[$i]
						);
					$this->db->insert('tbl_booking_product',$array_1);
						
						
						
					 }
				 }
				 
				 
				 
				 
				 
				  if(!empty($this->input->post( 'child_first_name' )))
				 {
					 for($i=0;$i<count($this->input->post( 'child_first_name' ));$i++)
					 {
						
						$age =!empty( $this->input->post( 'child_age' )[$i])? $this->input->post( 'child_age' )[$i]:0;
							
							$o_g_array=array(
							'sale_id'=>$o_booking_id,
							'partner_id'=>0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'child_title' )[$i],
							'first_name'=>$this->input->post( 'child_first_name' )[$i],
							'last_name'=>$this->input->post( 'child_last_name' )[$i],
							'gender'=>$this->input->post( 'child_gender')[$i],
							'dob'=>date('Y-m-d H:i:s',strtotime("-$age years")),
							'passport_no'=>$this->input->post( 'child_passport' )[$i],
							'pnr_no'=>$this->input->post( 'child_pnr' )[$i]
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						
						 
						$array_1 = array(
						//"booking_id"=>$insert_id,
						"booking_id"=>$booking_id,
						"o_guest_id"=>0,
						"guest_type"=>'Child',
						"guest_title"=>$this->input->post( 'child_title' )[$i],
						"guest_first_name"=>$this->input->post( 'child_first_name' )[$i],
						"guest_last_name"=>$this->input->post( 'child_last_name' )[$i],
						"guest_passport"=>$this->input->post( 'child_passport' )[$i],
						"guest_gender"=>$this->input->post( 'child_gender')[$i],
						"guest_age"=>$this->input->post( 'child_age' )[$i],
						"guest_pnr"=>$this->input->post( 'child_pnr' )[$i]
						);
						$this->db->insert('tbl_booking_product',$array_1);
					 }
				 }
				 
				 /* if(!empty($s_select_product_details))
				 {
					 for($i=0;$i<count($s_select_product_details);$i++)
					 {
						$array = array(
						"booking_id"=>$insert_id,
						"pid"=>$s_select_product_details[$i]['pid'],
						 "pname"=>$s_select_product_details[$i]['pname'],
						"ptype"=>$s_select_product_details[$i]['ptype'],
						"prate"=>$s_select_product_details[$i]['prate'],
						"pqty"=>$s_select_product_details[$i]['pqty'],
						"pprice"=>$s_select_product_details[$i]['pprice']
						);
						$this->db->insert('tbl_booking_gets',$array);
					 }
				 } */ 
				 
			}

			$this->session->set_flashdata("success", "Order Placed Successfully completed"); 
			$this->load->view('thankyou',$this->data);
			//redirect(base_url('home/index'));
		}
	}
}
	