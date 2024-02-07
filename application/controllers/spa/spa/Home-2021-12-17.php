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
                        's_service_category',
                        's_service_type_id',
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
						's_d_airline_name',
						's_d_airline_id',
						's_d_flight_id',
						's_d_arrival_time',
						's_d_departure_term',
						's_d_arrival_term',
						's_d_from_airport_id',
						's_dod',
						's_d_FlightName',
						's_DepartureTime',
						's_d_FromAirport',
						"s_select_product_details",
						"service_duration",
						"s_airport_location_code",
						"s_airport_location_code_id",
						 
						);
					 
					 
					 
						 
					$this->session->unset_userdata($unset_session);
			}
		
		$this->load->view('index');
	}
	 
	public function search() 
	{
		//p($this->session->all_userdata()); exit;
		// p($_POST);//exit;
		 if($_POST)
		 {
			 $service_category ="";
			 $service_type_id =0;
			
			 $airport_location_code_id = !empty($this->input->post( 'airport_location_code_id' ))?$this->input->post( 'airport_location_code_id' ):'0';
			 $airport_location_code = !empty($this->input->post( 'airport_location_code' ))?$this->input->post( 'airport_location_code' ):'';
			 $terminal_id = !empty($this->input->post( 'terminal_id' ))?$this->input->post( 'terminal_id' ):'0';
			 $terminal_code = !empty($this->input->post( 'terminal_code' ))?$this->input->post( 'terminal_code' ):'';
			 $terminal_value = !empty($this->input->post( 'terminal_value' ))?$this->input->post( 'terminal_value' ):'';
			 $Adult = !empty($this->input->post( 'Adult' ))?$this->input->post( 'Adult' ):'0';
			 $Child = !empty($this->input->post( 'Child' ))?$this->input->post( 'Child' ):'0';
			 $Infant = !empty($this->input->post( 'Infant' ))?$this->input->post( 'Infant' ):'0';
			 $category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
			 
			 if($category=='Transit')
			 {
				$service_category = 'welcome_and_assist'; 
				$service_type_id =3; 
				
				$airline_name = !empty($this->input->post( 'a_airline_name' ))?$this->input->post( 'a_airline_name' ):'';
				$d_airline_name = !empty($this->input->post( 'd_airline_name' ))?$this->input->post( 'd_airline_name' ):'';
				
				$airline_id = !empty($this->input->post( 'a_airline_id' ))?$this->input->post( 'a_airline_id' ):0;
				$d_airline_id = !empty($this->input->post( 'd_airline_id' ))?$this->input->post( 'd_airline_id' ):0;
				
				$flight_id = !empty($this->input->post( 'a_flight_id' ))?$this->input->post( 'a_flight_id' ):0;
				$d_flight_id = !empty($this->input->post( 'd_flight_id' ))?$this->input->post( 'd_flight_id' ):0;
				
				$arrival_time = !empty($this->input->post( 'a_arrival_time' ))?$this->input->post( 'a_arrival_time' ):'';
				$d_arrival_time = !empty($this->input->post( 'd_arrival_time' ))?$this->input->post( 'd_arrival_time' ):'';
				
				
				$departure_term = !empty($this->input->post( 'a_departure_term' ))?$this->input->post( 'a_departure_term' ):'';
				$d_departure_term = !empty($this->input->post( 'd_departure_term' ))?$this->input->post( 'd_departure_term' ):'';
				
				$arrival_term = !empty($this->input->post( 'a_arrival_term' ))?$this->input->post( 'a_arrival_term' ):'';
				$d_arrival_term = !empty($this->input->post( 'd_arrival_term' ))?$this->input->post( 'd_arrival_term' ):'';
				////// 
				$to_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
				
					 $from_airport_id = !empty($this->input->post( 'a_from_airport_id' ))?$this->input->post( 'a_from_airport_id' ):'0';
					 $d_from_airport_id = !empty($this->input->post( 'd_from_airport_id' ))?$this->input->post( 'd_from_airport_id' ):'0';
					 
					 $doa = !empty($this->input->post( 'Transitdoa' ))?$this->input->post( 'Transitdoa' ):'';
					 $dod = !empty($this->input->post( 'Transitdod' ))?$this->input->post( 'Transitdod' ):'';
					 
					 
					 $FlightName = !empty($this->input->post( 'TransitArrivalFlight' ))?$this->input->post( 'TransitArrivalFlight' ):'';
					 $d_FlightName = !empty($this->input->post( 'TransitDepartureFlight' ))?$this->input->post( 'TransitDepartureFlight' ):'';
					 
					 $ArrivalTime = !empty($this->input->post( 'TransitArrivalTime' ))?$this->input->post( 'TransitArrivalTime' ):'';
					 $DepartureTime = !empty($this->input->post( 'TransitDepartureTime' ))?$this->input->post( 'TransitDepartureTime' ):'';
					 
					 $ServiceTime = !empty($this->input->post( 'TransitArrivalServiceTime' ))?$this->input->post( 'TransitArrivalServiceTime' ):'';
					 $service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime($this->input->post( 'service_date_time' ))):'';
					 
					 $ToAirport = !empty($this->input->post( 'TransitAirportService' ))?$this->input->post( 'TransitAirportService' ):'';
					 
					$FromAirport = !empty($this->input->post( 'TransitFromAirtport' ))?$this->input->post( 'TransitFromAirtport' ):'';
					$d_FromAirport = !empty($this->input->post( 'TransitToAirtport' ))?$this->input->post( 'TransitToAirtport' ):'';
					
					$SectorName = !empty($this->input->post( 'SectorName' ))?$this->input->post( 'SectorName' ):'';
				 
			 }
			 
			 
			 if($category=='Arrival' || $category=='Departure' || $category=='Lounge')
			 {	 
		 
			 //$airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
			// $airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
			 /* if($category=='Arrival')
			 {
				 $airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
				 $airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
				 $d_airline_id = 0;
				 $d_airline_name='';
			 } */
			 /* if($category=='Departure')
			 {
				 $d_airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
				 $airline_id = 0;
			 } */
			
			
			 $departure_term = !empty($this->input->post( 'departure_term' ))?$this->input->post( 'departure_term' ):'';
			 $arrival_term = !empty($this->input->post( 'arrival_term' ))?$this->input->post( 'arrival_term' ):'';
			 	 if($category=='Arrival')
				 {
					  $airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
					 $airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
					 $d_airline_id = 0;
					 $d_airline_name='';
					 
					$flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
					$d_flight_id = 0;
					
					$arrival_time = !empty($this->input->post( 'arrival_time' ))?$this->input->post( 'arrival_time' ):'00:00';
					
					$service_category = 'welcome_and_assist'; 
					$service_type_id =1;
					$to_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
					 $from_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
					 $doa = !empty($this->input->post( 'doa' ))?$this->input->post( 'doa' ):'';
					 $FlightName = !empty($this->input->post( 'FlightName' ))?$this->input->post( 'FlightName' ):'';
					 $DepartureTime='';
					 $ArrivalTime = !empty($this->input->post( 'ArrivalTime' ))?$this->input->post( 'ArrivalTime' ):'';
					 $ServiceTime = !empty($this->input->post( 'ServiceTime' ))?$this->input->post( 'ServiceTime' ):'';
					 $ToAirport = !empty($this->input->post( 'ToAirport' ))?$this->input->post( 'ToAirport' ):'';
					$FromAirport = !empty($this->input->post( 'FromAirport' ))?$this->input->post( 'FromAirport' ):'';
					$SectorName = !empty($this->input->post( 'SectorName' ))?$this->input->post( 'SectorName' ):'';
					 
					 // $service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime(str_replace('-','/',$this->input->post( 'service_date_time' )))):''; 
					  $service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime($this->input->post( 'service_date_time' ))):''; 
				 }
				 if($category=='Departure')
				 {
					 $service_category = 'welcome_and_assist';
					  $service_type_id =2;
					  
					  $d_airline_name= !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
					  $d_airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
						$airline_id = 0;
						$airline_name='';
						
						
				 $d_flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;	  
				 $flight_id = 0;	
					
				 $arrival_time = !empty($this->input->post( 'arrival_time' ))?$this->input->post( 'arrival_time' ):'00:00';	
				 $from_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
				 $to_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
				 $doa = !empty($this->input->post( 'Departuredod' ))?$this->input->post( 'Departuredod' ):'';
				 $FlightName = !empty($this->input->post( 'DepartureFlight' ))?$this->input->post( 'DepartureFlight' ):'';
				 $ArrivalTime='';
				 $DepartureTime = !empty($this->input->post( 'DepartureTime' ))?$this->input->post( 'DepartureTime' ):'';
				 $ServiceTime = !empty($this->input->post( 'DepartureServiceTime' ))?$this->input->post( 'DepartureServiceTime' ):'';
				 $ToAirport = !empty($this->input->post( 'DepartureFromAirport' ))?$this->input->post( 'DepartureFromAirport' ):'';
				$FromAirport = !empty($this->input->post( 'DepartureToAirtport' ))?$this->input->post( 'DepartureToAirtport' ):'';
				$SectorName = !empty($this->input->post( 'DepartureSector' ))?$this->input->post( 'DepartureSector' ):'';
				
				$service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime($this->input->post( 'service_date_time' ))):'';
				 }
				 
				  if($category=='Lounge')
				 {
					  $airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
					 $airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
					 $d_airline_id = 0;
					 $d_airline_name='';
					 
					 $service_category = 'lounge';
					 //$service_type_id =4;
					 $service_type_id =!empty($this->input->post( 'LoungeCategory' ))?$this->input->post( 'LoungeCategory' ):0;
					 $flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
					$d_flight_id = 0;
					
					$arrival_time = !empty($this->input->post( 'arrival_time' ))?$this->input->post( 'arrival_time' ):'00:00';
					
					 
					$to_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
					 $from_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
					 
					 $doa = !empty($this->input->post( 'LoungeDate' ))?$this->input->post( 'LoungeDate' ):'';
					 
					 $FlightName = !empty($this->input->post( 'LoungeFlight' ))?$this->input->post( 'LoungeFlight' ):'';
					 $DepartureTime='';
					 $ArrivalTime = !empty($this->input->post( 'ArrivalTime' ))?$this->input->post( 'ArrivalTime' ):'';
					 $ServiceTime = !empty($this->input->post( 'ServiceTime' ))?$this->input->post( 'ServiceTime' ):'';
					 
					 $ToAirport = !empty($this->input->post( 'LoungeServiceAirport' ))?$this->input->post( 'LoungeServiceAirport' ):'';
					 
					$FromAirport = !empty($this->input->post( 'LoungeServiceAirport' ))?$this->input->post( 'LoungeServiceAirport' ):'';
					$SectorName = !empty($this->input->post( 'SectorName' ))?$this->input->post( 'SectorName' ):'';
					
					$service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime($this->input->post( 'service_date_time' ))):date('Y-m-d H:i');
				  
				 }
			 }
			
			 $customer_data = !empty( $this->session->userdata('s_customer_data'))? $this->session->userdata('s_customer_data'):array();
			 
			 
				 		$data = array(
                        //'s_service_date_time' => date("D, d-M-Y h:i", strtotime('+2 hours', strtotime($arrival_time))),
                        's_service_date_time' =>!empty($service_date_time)? date("D, d-M-Y H:i", strtotime($service_date_time)):'',
                        's_category' => $category,
                        's_service_category' => $service_category,
                        's_service_type_id' => $service_type_id,
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
                        //'s_arrival_time' =>date('D, d-M-Y h:i',strtotime($arrival_time)),
                        's_arrival_time' =>$arrival_time,
                        's_arrival_sector' =>$SectorName,
                        //'s_doa' =>$doa,
                        's_doa' =>date('D, d-M-Y',strtotime($doa)),
                        's_arrival_flight' =>$FlightName,
                        's_arrivalTime' =>$ArrivalTime,
                        's_arrival_service_time' =>$ServiceTime ,
						"s_adult" => $Adult, 
						"s_child" => $Child, 
						"s_infant" => $Infant,
						"s_airport_location_code" => $airport_location_code,
						"s_airport_location_code_id" => $airport_location_code_id,
						"service_duration" => 0,
						's_d_airline_name'=>!empty($d_airline_name)?$d_airline_name:'',
						's_d_airline_id'=>!empty($d_airline_id)?$d_airline_id:'',
						's_d_flight_id'=>!empty($d_flight_id)?$d_flight_id:'',
						's_d_arrival_time'=>!empty($d_arrival_time)?$d_arrival_time:'',
						's_d_departure_term'=>!empty($d_departure_term)?$d_departure_term:'',
						's_d_arrival_term'=>!empty($d_arrival_term)?$d_arrival_term:'',
						's_d_from_airport_id'=>!empty($d_from_airport_id)?$d_from_airport_id:'',
						's_dod'=>!empty($dod)?date('D, d-M-Y',strtotime($dod)):'',
						's_d_FlightName'=>!empty($d_FlightName)?$d_FlightName:'',
						's_DepartureTime'=>!empty($DepartureTime)?$DepartureTime:'',
						's_d_FromAirport'=>!empty($d_FromAirport)?$d_FromAirport:'',
						"s_select_product_details" => array(),
						"s_customer_data" => $customer_data
						);
					$this->session->set_userdata($data);
			
		$array = array(
'category'=>$category,
'no_of_adult'=>$Adult,
'no_of_children'=>$Child,
'no_of_infants'=>$Infant,
'sector'=>$SectorName,
'airport_code'=>$to_airport_id,
//'airport_code'=>$ToAirport,
'travel_date'=>date('Y-m-d',strtotime($doa)),
'service_time'=>!empty($service_date_time)?$service_date_time:date('Y-m-d',strtotime($doa)).' '.$ServiceTime,
//'service_time'=>'10:00:00',
'basetype'=>'Base',
'product_id'=>0
		);   
		//p($array);
		//exit;
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
		//date_default_timezone_set('Asia/Kolkata');
		/*echo !empty($this->session->userdata("s_service_date_time"))?date('Y-m-d H:i',strtotime($this->session->userdata("s_service_date_time"))):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time");
		echo "<br>";
		echo date('Y-m-d H:i:s');*/
		//p($this->session->all_userdata());exit;
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
			
			$this->data['countrycode'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_general_value',array('stype'=>'COUNTRY CODE'));
			
			$this->data['statedata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_state',array('country_id'=>'India'));
		if($_POST)
		{
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
			if(!empty($session_customer_data) and !empty($s_select_product_details))
			{
				 
				$arrival_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrivalTime"):'';
				//$departure_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):'';
				$departure_time = !empty($this->session->userdata("s_DepartureTime"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time");
				 
				$o_array = array(
				'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
				//'partner_id'=>12,
				'date_order'=>date('Y-m-d H:i:s'),
				'airport_location_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
				//'airport_location_id'=>!empty($this->session->userdata("s_airport_location_id"))?$this->session->userdata("s_airport_location_id"):0,
				'commitment_date'=>!empty($this->session->userdata("s_service_date_time"))?date('Y-m-d H:i',strtotime($this->session->userdata("s_service_date_time"))):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"),
				'airport_terminal_id'=>!empty($this->session->userdata("s_terminal_id"))?$this->session->userdata("s_terminal_id"):0,
				'departure_flight_id'=>!empty($this->session->userdata("s_d_flight_id"))?$this->session->userdata("s_d_flight_id"):0,
				'arrival_flight_id'=>!empty($this->session->userdata("s_flight_id"))?$this->session->userdata("s_flight_id"):0,
				'arrival_airline_id'=>!empty($this->session->userdata("s_airline_id"))?$this->session->userdata("s_airline_id"):0,
				'departure_airline_id'=>!empty($this->session->userdata("s_d_airline_id"))?$this->session->userdata("s_d_airline_id"):0,
				'service_category'=>!empty($this->session->userdata("s_service_category"))?($this->session->userdata("s_service_category")):'',
				'service_type_id'=>!empty($this->session->userdata("s_service_type_id"))?$this->session->userdata("s_service_type_id"):'',
				
				
				'arrival_time'=>!empty($this->session->userdata("s_arrivalTime"))?str_replace(':','',$this->session->userdata("s_arrivalTime")):'',
				'departure_time'=>!empty($this->session->userdata("s_DepartureTime"))?str_replace(':','',$this->session->userdata("s_DepartureTime")):'',
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
				//p($json_decode);exit;
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
						//p($o_child_array);
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
			$array_sale_detail = array(
			'id'=>$id); 
		//p($array);
		$this->data['salesdetails'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array_sale_detail);


			
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			$s_d_array = array('id'=>$id);
				
			$this->data['orderdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details',$s_d_array);
			
			$guest_array = array('parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['gusetdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$guest_array);
			
			$coupon_array = array('cust_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['coupondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_discount_coupon',$coupon_array);
			
			$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
			$this->data['countrycode'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_general_value',array('stype'=>'COUNTRY CODE'));
			
			
			$state_array = array('country_id'=>!empty($session_customer_data['country'])?$session_customer_data['country']:0);
			$this->data['statedata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_state',$state_array);
			//p($state_array);
			//p(json_decode($this->data['statedata']));exit;
			$this->load->view('checkout-search',$this->data);
				
		}
		else
		{
			if($_POST)
			{
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
			if(!empty($session_customer_data) and !empty($s_select_product_details))
			{
				 
				$arrival_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrivalTime"):'';
				//$departure_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):'';
				$departure_time = !empty($this->session->userdata("s_DepartureTime"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time");
				 
				$o_array = array(
				'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
				'date_order'=>date('Y-m-d H:i:s'),
				'airport_location_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
				'commitment_date'=>!empty($this->session->userdata("s_service_date_time"))?date('Y-m-d H:i',strtotime($this->session->userdata("s_service_date_time"))):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"),
				'airport_terminal_id'=>!empty($this->session->userdata("s_terminal_id"))?$this->session->userdata("s_terminal_id"):0,
				'departure_flight_id'=>!empty($this->session->userdata("s_d_flight_id"))?$this->session->userdata("s_d_flight_id"):0,
				'arrival_flight_id'=>!empty($this->session->userdata("s_flight_id"))?$this->session->userdata("s_flight_id"):0,
				'arrival_airline_id'=>!empty($this->session->userdata("s_airline_id"))?$this->session->userdata("s_airline_id"):0,
				'departure_airline_id'=>!empty($this->session->userdata("s_d_airline_id"))?$this->session->userdata("s_d_airline_id"):0,
				'service_category'=>!empty($this->session->userdata("s_service_category"))?($this->session->userdata("s_service_category")):'',
				'service_type_id'=>!empty($this->session->userdata("s_service_type_id"))?$this->session->userdata("s_service_type_id"):'',
				
				
				'arrival_time'=>!empty($this->session->userdata("s_arrivalTime"))?str_replace(':','',$this->session->userdata("s_arrivalTime")):'',
				'departure_time'=>!empty($this->session->userdata("s_DepartureTime"))?str_replace(':','',$this->session->userdata("s_DepartureTime")):'',
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
				//p($json_decode);exit;
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
						//p($o_child_array);
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
							'booking_date'=>date('Y-m-d H:i:s'),
							'booking_time'=>date('H:i:s'), 
							  
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
				 
			}
		}
		}
		
	}
	function removeaddons()
	{
		$arrkey = !empty($this->input->post( 'arrkey' ))?$this->input->post( 'arrkey' ):'';
		if(!empty($arrkey))
		{
			$this->data['page']='Addon';
			 $old_array =  $this->session->userdata('s_select_product_details');
			   unset($old_array[$arrkey]);
				$old_array= array_values($old_array);

				 $this->session->set_userdata('s_select_product_details',$old_array);
				 echo $this->load->view('ajax_table', $this->data, TRUE );
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
		$service_duration = !empty($this->input->post( 'service_duration' ))?$this->input->post( 'service_duration' ):0;
		$this->data['page']=$page;
		if(!empty($product_name))
		{
			
			 $s_adult = !empty($this->session->userdata("s_adult"))?$this->session->userdata("s_adult"):0;
			 $s_infant = !empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0;
			 $s_child = !empty($this->session->userdata("s_child"))?$this->session->userdata("s_child"):0;
			//$this->session->set_userdata('s_select_product_details',array());
			
			//p($this->session->all_userdata());exit;
			if($page=='Search')
			{
				
				$this->session->set_userdata('s_select_product_details',array());
				$data =  curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_variant_details',array('id'=>$product_id));
				 $this->session->set_userdata('service_duration',$service_duration );
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
					//$array[] =array('pid'=>$i_pid, "pname"=>$i_pname,'ptype'=>'Infant','prate'=>$i_rate,'pqty'=>$s_infant,'pprice'=>$s_infant*$i_rate);
				}
				
				  $this->session->set_userdata('s_select_product_details',$array );
				  $html= $this->load->view('ajax_table', $this->data, TRUE );
				// echo $redirecturl;
				echo json_encode(array("url"=>$redirecturl,"html"=>$html));
			}
			if($page=='Addon')
			{
				 $old_array =  $this->session->userdata('s_select_product_details');
				//p($old_array[3]);
				
				 //unset($old_array[3]);
				 //p($old_array);
				 $oldqty = 0;
				 $old_array_1 = $old_array;
				 if(!empty($old_array_1))
				 {
					 for($i=0;$i<count($old_array_1);$i++)
					 {
						 if($old_array_1[$i]['ptype']=='Qty' and $old_array_1[$i]['pid']==$product_id)
						 {
							  $oldqty = $oldqty+$old_array_1[$i]['pqty'];
							  unset($old_array[$i]);
						 }
					 }
				 }
				
				  $noqty = $oldqty+$noqty;
				$array[] =array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Qty','prate'=>$product_price,'pqty'=>$noqty,'pprice'=>$noqty*$product_price);
				 $array_merge = array_merge($old_array, $array);
				  $array_merge= array_values($array_merge);
				 $this->session->set_userdata('s_select_product_details',$array_merge);
				 echo $this->load->view('ajax_table', $this->data, TRUE );
				  
			}
			
		}
	
	}
	function placeorder()
	{
		//p($_POST);
		 
		//exit;
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
			$order_no = !empty($this->input->post( 'order_no' ))?$this->input->post( 'order_no' ):'';
			$booking_id = !empty($this->input->post( 'booking_id' ))?$this->input->post( 'booking_id' ):0;
			$o_booking_id = !empty($this->input->post( 'o_booking_id' ))?$this->input->post( 'o_booking_id' ):0;
			$array=array(
			'status'=>'0',
			'create_date'=>date('Y-m-d H:i:s'),
			'customer_id'=>!empty($session_customer_data['customer_id'])?$session_customer_data['customer_id']:0,
			'o_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
			'category'=>$this->session->userdata("s_category"),
			'order_no'=>!empty($this->input->post( 'order_no' ))?$this->input->post( 'order_no' ):'',
			'booking_date'=>!empty($this->input->post( 'booking_date' ))?date('Y-m-d',strtotime($this->input->post( 'booking_date' ))):'',
			'booking_time'=>!empty($this->input->post( 'booking_time' ))?$this->input->post( 'booking_time' ):'', 
			 
			'coupon'=>!empty($this->input->post( 'c_discount_code' ))?$this->input->post( 'c_discount_code' ):'', 
			'discount'=>!empty($this->input->post( 'c_discount_amt' ))?$this->input->post( 'c_discount_amt' ):0, 
			
			'net_amount'=>!empty($this->input->post( 'net_amount' ))?$this->input->post( 'net_amount' ):0, 
			'final_amount'=>!empty($this->input->post( 'final_amount' ))?$this->input->post( 'final_amount' ):0,
			 
			'placard_title'=>!empty($this->input->post( 'placard_title' ))?$this->input->post( 'placard_title' ):'', 
			'placard_first_name'=>!empty($this->input->post( 'placard_first_name' ))?$this->input->post( 'placard_first_name' ):'', 
			'placard_last_name'=>!empty($this->input->post( 'placard_last_name' ))?$this->input->post( 'placard_last_name' ):'', 
			'placard_mobile'=>!empty($this->input->post( 'placard_mobile' ))?$this->input->post( 'placard_mobile' ):'', 
			'placard_use_GSTIN'=>!empty($this->input->post( 'placard_use_GSTIN' ))?$this->input->post( 'placard_use_GSTIN' ):'no', 
			
			'billing_name'=>!empty($this->input->post( 'billing_name' ))?$this->input->post( 'billing_name' ):'', 
			'billing_address'=>!empty($this->input->post( 'billing_address' ))?$this->input->post( 'billing_address' ):'', 
			'billing_city'=>!empty($this->input->post( 'billing_city' ))?$this->input->post( 'billing_city' ):'', 
			'billing_country'=>!empty($this->input->post( 'billing_country' ))?$this->input->post( 'billing_country' ):'', 
			'billing_state'=>!empty($this->input->post( 'billing_state' ))?$this->input->post( 'billing_state' ):'', 
			'billing_pincode'=>!empty($this->input->post( 'billing_pincode' ))?$this->input->post( 'billing_pincode' ):'', 
			'billing_country_code'=>!empty($this->input->post( 'billing_country_code' ))?$this->input->post( 'billing_country_code' ):'', 
			'placard_country_code'=>!empty($this->input->post( 'placard_country_code' ))?$this->input->post( 'placard_country_code' ):'', 
			'billing_mobile'=>!empty($this->input->post( 'billing_mobile' ))?$this->input->post( 'billing_mobile' ):'', 
			'billing_email_id'=>!empty($this->input->post( 'billing_email_id' ))?$this->input->post( 'billing_email_id' ):'',
			'billing_entity_name'=>!empty($this->input->post( 'billing_entity_name' ))?$this->input->post( 'billing_entity_name' ):'',
			'billing_gst_no'=>!empty($this->input->post( 'billing_gst_no' ))?$this->input->post( 'billing_gst_no' ):'',
			'add_ons_json'=>json_encode($s_select_product_details),
			'service_json'=>json_encode($session_customer_data),
			'session_json'=>json_encode($this->session->all_userdata())
			);
			$this->db->update('tbl_booking',$array, array('id'=>$booking_id));
			 //$insert_id = $this->db->insert_id();
			//if($insert_id)
			if($booking_id)
			{
				
				$s_doa = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):'';
				$service_duration = !empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):0;
				$s_arrival_service_time = !empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):'';
				if(!empty($s_doa))
				{
				$service_time = $s_doa.' '.$s_arrival_service_time;
				$total_guest = $this->session->userdata("s_adult")+$this->session->userdata("s_child")+$this->session->userdata("s_infant");
				$availabilityArr = array('service_time'=>$service_time,'service_duration'=>$service_duration,'total_guest'=>$total_guest);
				//p($availabilityArr);	exit;
				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'update_availability',$availabilityArr);
				}
				if(!empty($this->input->post( 'placard_first_name' )) and !empty($o_booking_id))
				{
					/* $PlacardArr = array(
					'id'=>$o_booking_id,
					'name'=>!empty($this->input->post( 'placard_first_name' ))?$this->input->post( 'placard_first_name' ):'',
					'mobile'=>!empty($this->input->post( 'placard_mobile' ))?$this->input->post( 'placard_mobile' ):'',
					'email'=>'',
					'remarks'=>!empty($this->input->post( 'placard_last_name' ))?$this->input->post( 'placard_last_name' ):''
					); */
					
					$PlacardArr = array(
					'id'=>$o_booking_id,
					'first_name'=>!empty($this->input->post( 'placard_first_name' ))?$this->input->post( 'placard_first_name' ):'',
					'mobile'=>!empty($this->input->post( 'placard_mobile' ))?$this->input->post( 'placard_mobile' ):'',
					'title'=>!empty($this->input->post( 'placard_title' ))?$this->input->post( 'placard_title' ):'',
					'country_code'=>!empty($this->input->post( 'placard_country_code' ))?$this->input->post( 'placard_country_code' ):'',
					//'email'=>'',
					'last_name'=>!empty($this->input->post( 'placard_last_name' ))?$this->input->post( 'placard_last_name' ):''
					);
					curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_placard_details',$PlacardArr);
				}
				 if(!empty($this->input->post( 'adult_first_name' )))
				 {
					 for($i=0;$i<count($this->input->post( 'adult_first_name' ));$i++)
					 {
						$age =!empty( $this->input->post( 'adult_age' )[$i])? $this->input->post( 'adult_age' )[$i]:0;
						
						
						$o_g_array=array(
							'sale_id'=>$o_booking_id,
							'partner_id'=>!empty($this->input->post( 'adult_id' )[$i])?$this->input->post( 'adult_id' )[$i]:0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'adult_title' )[$i],
							'first_name'=>$this->input->post( 'adult_first_name' )[$i],
							'last_name'=>$this->input->post( 'adult_last_name' )[$i],
							'gender'=>$this->input->post( 'adult_gender')[$i],
							'dob'=>date('Y-m-d',strtotime("-$age years")),
							'age'=>$age,
							//'dob'=>'',
							'passport_no'=>$this->input->post( 'adult_passport' )[$i],
							'pnr_no'=>$this->input->post( 'adult_pnr' )[$i],
							'class_type'=>$this->input->post( 'adult_class' )[$i]
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						$array_1 = array(
						"booking_id"=>$booking_id,
						//"booking_id"=>$insert_id,
						"o_guest_id"=>!empty($this->input->post( 'adult_id' )[$i])?$this->input->post( 'adult_id' )[$i]:0,
						"guest_type"=>'Adult',
						"guest_title"=>$this->input->post( 'adult_title' )[$i],
						"guest_first_name"=>$this->input->post( 'adult_first_name' )[$i],
						"guest_last_name"=>$this->input->post( 'adult_last_name' )[$i],
						"guest_passport"=>$this->input->post( 'adult_passport' )[$i],
						"guest_age"=>$this->input->post( 'adult_age' )[$i],
						"guest_gender"=>$this->input->post( 'adult_gender')[$i],
						"guest_pnr"=>$this->input->post( 'adult_pnr' )[$i],
						"guest_class"=>$this->input->post( 'adult_class' )[$i],
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
							'partner_id'=>!empty($this->input->post( 'child_id' )[$i])?$this->input->post( 'child_id' )[$i]:0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'child_title' )[$i],
							'first_name'=>$this->input->post( 'child_first_name' )[$i],
							'last_name'=>$this->input->post( 'child_last_name' )[$i],
							'gender'=>$this->input->post( 'child_gender')[$i],
							'dob'=>date('Y-m-d',strtotime("-$age years")),
							'age'=>$age,
							//'dob'=>'',
							'passport_no'=>$this->input->post( 'child_passport' )[$i],
							'pnr_no'=>$this->input->post( 'child_pnr' )[$i],
							'class_type'=>$this->input->post( 'child_class' )[$i]
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						
						 
						$array_1 = array(
						//"booking_id"=>$insert_id,
						"booking_id"=>$booking_id,
						"o_guest_id"=>!empty($this->input->post( 'child_id' )[$i])?$this->input->post( 'child_id' )[$i]:0,
						"guest_type"=>'Child',
						"guest_title"=>$this->input->post( 'child_title' )[$i],
						"guest_first_name"=>$this->input->post( 'child_first_name' )[$i],
						"guest_last_name"=>$this->input->post( 'child_last_name' )[$i],
						"guest_passport"=>$this->input->post( 'child_passport' )[$i],
						"guest_gender"=>$this->input->post( 'child_gender')[$i],
						"guest_age"=>$this->input->post( 'child_age' )[$i],
						"guest_pnr"=>$this->input->post( 'child_pnr' )[$i],
						"guest_class"=>$this->input->post( 'child_class' )[$i]
						);
						$this->db->insert('tbl_booking_product',$array_1);
					 }
				 }
				 
				 
				 if(!empty($this->input->post( 'infant_first_name' )))
				 {
					 for($i=0;$i<count($this->input->post( 'infant_first_name' ));$i++)
					 {
						
						$age =!empty( $this->input->post( 'infant_age' )[$i])? $this->input->post( 'infant_age' )[$i]:0;
							
							$o_g_array=array(
							'sale_id'=>$o_booking_id,
							'partner_id'=>!empty($this->input->post( 'infant_id' )[$i])?$this->input->post( 'infant_id' )[$i]:0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'infant_title' )[$i],
							'first_name'=>$this->input->post( 'infant_first_name' )[$i],
							'last_name'=>$this->input->post( 'infant_last_name' )[$i],
							'gender'=>$this->input->post( 'infant_gender')[$i],
							'dob'=>date('Y-m-d',strtotime("-$age years")),
							'age'=>$age,
							//'dob'=>'',
							'passport_no'=>$this->input->post( 'infant_passport' )[$i],
							'pnr_no'=>$this->input->post( 'infant_pnr' )[$i],
							'class_type'=>$this->input->post( 'infant_class' )[$i]
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						
						 
						$array_1 = array(
						//"booking_id"=>$insert_id,
						"booking_id"=>$booking_id,
						"o_guest_id"=>!empty($this->input->post( 'infant_id' )[$i])?$this->input->post( 'infant_id' )[$i]:0,
						"guest_type"=>'Infant',
						"guest_title"=>$this->input->post( 'infant_title' )[$i],
						"guest_first_name"=>$this->input->post( 'infant_first_name' )[$i],
						"guest_last_name"=>$this->input->post( 'infant_last_name' )[$i],
						"guest_passport"=>$this->input->post( 'infant_passport' )[$i],
						"guest_gender"=>$this->input->post( 'infant_gender')[$i],
						"guest_age"=>$this->input->post( 'infant_age' )[$i],
						"guest_pnr"=>$this->input->post( 'infant_pnr' )[$i],
						"guest_class"=>$this->input->post( 'infant_class' )[$i]
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

			$this->session->set_flashdata("success", "Your Booking has been confirmed, Booking No: $order_no <br/> Thank you!"); 
	//		$this->load->view('thankyou',$this->data);
			redirect(base_url('home/ordersummary/'.$o_booking_id));
		}
	}
	
	function ordersummary()
	{
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id, 
		); 
		$this->data['o_booking_id']=$id;
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$coupon_array = array('cust_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['coupondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_discount_coupon',$coupon_array);
			
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		//p(json_decode($this->data['datalist'] ));exit;
		$this->load->view('order-summary', $this->data );
		}
		else
		{
			redirect(base_url('user/mybooking'));
		}
	}
	
	function thankyou()
	{
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id, 
		); 
		$this->session->set_flashdata("success", "Your Booking has been confirmed, Booking No: <br/> Thank you!"); 
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		$this->load->view('thankyou', $this->data );
		}
		else
		{
			redirect(base_url('user/mybooking'));
		}
	}
	
	public function error() 
	{		$this->load->view('error', $this->data );
	} 
	function getState()
	{
		$id = !empty($this->input->post( 'id' ))?$this->input->post( 'id' ):'';
		$placard_country = !empty($this->input->post( 'placard_country' ))?$this->input->post( 'placard_country' ):'';
		$placard_state = !empty($this->input->post( 'placard_state' ))?$this->input->post( 'placard_state' ):'';
		$html = "<option value=''>Select State</option>";
		if(!empty($placard_country))
		{
			$state_array = array('country_id'=>$placard_country);
			$statedata = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_state',$state_array);
			$data = json_decode($statedata);
			if(!empty($data->datalist))
			{
				foreach($data->datalist as $val)
				{
					$c_select='';
					if($val->id==$placard_state){$c_select='selected';}
					
					$html .= "<option value='".$val->id."' $c_select>".$val->name."</option>";
				}
			}
		}
		echo $html;
	}
}
	