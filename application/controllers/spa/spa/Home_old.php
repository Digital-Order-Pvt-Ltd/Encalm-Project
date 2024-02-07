<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// use App\Models\Payment;
class Home extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_users();
	   $this->data=array();
	//    $this->load->model('Payment');

	    $paymentModel = new Payment();
	   
    }
	 
	 
	 
	public function index() 
	{
		//p($this->session->all_userdata()); 
		unset($_SESSION['validity']);
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
						
						"s_length_stay_id",
						"s_length_stay",
						"s_l_terminal_id",
						"s_l_terminal_name",
						"s_l_terminal_code",
						"s_l_terminal_value",
						 
						);
					 
					 
					 
						 
					$this->session->unset_userdata($unset_session);
			}
		
		$this->load->view('atithya/index');
	}
	 
	public function search() 
	{
		//p($this->session->all_userdata()); exit;
	
		 if($_POST)
		 {
// 			 	p($_POST);
// 		exit;
			 $this->data['LENGTHOFSTAY'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_general_value',array('stype'=>'LENGTH OF STAY'));
			 
			 $service_category ="";
			 $service_type_id =0;
			 $arrival_term = "";
			 $departure_term = "";
			 $duration = 0;
			
			$service_airport_id = 0;			
			
			 $TerminalId = !empty($this->input->post( 'TerminalId' ))?$this->input->post( 'TerminalId' ):'0';
			 $TerminalCode = !empty($this->input->post( 'TerminalCode' ))?$this->input->post( 'TerminalCode' ):'';
			 $TerminalValue = !empty($this->input->post( 'TerminalValue' ))?$this->input->post( 'TerminalValue' ):'';
			 $TerminalName = !empty($this->input->post( 'TerminalName' ))?$this->input->post( 'TerminalName' ):'';
			
			
			 $airport_location_code_id = !empty($this->input->post( 'airport_location_code_id' ))?$this->input->post( 'airport_location_code_id' ):'0';
			 $airport_location_code = !empty($this->input->post( 'airport_location_code' ))?$this->input->post( 'airport_location_code' ):'';
			 $terminal_id = !empty($this->input->post( 'terminal_id' ))?$this->input->post( 'terminal_id' ):'0';
			 $terminal_code = !empty($this->input->post( 'terminal_code' ))?$this->input->post( 'terminal_code' ):'';
			 $terminal_value = !empty($this->input->post( 'terminal_value' ))?$this->input->post( 'terminal_value' ):'';
			 $Adult = !empty($this->input->post( 'Adult' ))?$this->input->post( 'Adult' ):'0';
			 $Child = !empty($this->input->post( 'Child' ))?$this->input->post( 'Child' ):'0';
			 $Infant = !empty($this->input->post( 'Infant' ))?$this->input->post( 'Infant' ):'0';
			 $category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
			 $order_arrival_term = '';
			 $order_departure_term = '';
			 
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
					$order_arrival_term = !empty($this->input->post( 'a_arrival_term' ))?$this->input->post( 'a_arrival_term' ):'';
					$order_departure_term = !empty($this->input->post( 'd_departure_term' ))?$this->input->post( 'd_departure_term' ):'';

				 $service_airport_id = $to_airport_id;			
				 
			 }
			 
			 
			 if($category=='Arrival' || $category=='Departure' || $category=='Lounge' || $category=='Spa')
			 {	 
				
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
					$service_airport_id = $to_airport_id;		
					$order_arrival_term = !empty($this->input->post( 'arrival_term' ))?$this->input->post( 'arrival_term' ):'';
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
					$order_departure_term = !empty($this->input->post( 'departure_term' ))?$this->input->post( 'departure_term' ):'';	

					$service_date_time = !empty($this->input->post( 'service_date_time' ))?date('Y-m-d H:i',strtotime($this->input->post( 'service_date_time' ))):'';

				 $service_airport_id = $from_airport_id;			
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

					$service_date_time =  date('Y-m-d',strtotime($doa)).' '.$ServiceTime;
					$service_date_time =  $ServiceTime;
				  
					 $service_airport_id = $to_airport_id;			
					 $service_term_lounge = !empty($this->input->post( 'lounge_term' ))?$this->input->post( 'lounge_term' ):'';
				 }
				 
				 if($category=='Spa')
				 {
					$airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
					$airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
					$d_airline_id = 0;
					$d_airline_name='';

					$service_category = 'spa';
					$service_type_id = 9;
					//$service_type_id = !empty($this->input->post( 'SpaCategory' ))?$this->input->post( 'SpaCategory' ):0;
					$flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
					$d_flight_id = 0;

					$arrival_time = !empty($this->input->post( 'arrival_time' ))?str_replace(':','',$this->input->post( 'arrival_time' )):'00:00';

					$doa = !empty($this->input->post( 'SpaDate' ))?$this->input->post( 'SpaDate' ):'';

					$FlightName = !empty($this->input->post( 'arrival_flight_name' ))?$this->input->post( 'arrival_flight_name' ):'';
					$DepartureTime=!empty($this->input->post( 'arrival_time' ))?str_replace(':','',$this->input->post( 'arrival_time' )):'';
					$ArrivalTime = !empty($this->input->post( 'arrival_time' ))?str_replace(':','',$this->input->post( 'arrival_time' )):'';
					$ServiceTime = !empty($this->input->post( 'ServiceTime' ))?$this->input->post( 'ServiceTime' ):'';

					if($this->input->post( 'SpaServiceAt' )=='Arrival') {
					    $service_type_id = 9;
						$ToAirport = !empty($this->input->post( 'SpaServiceAirport' ))?$this->input->post( 'SpaServiceAirport' ):'';	
						$FromAirport = '';
						$to_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
						$from_airport_id = '0';
						$flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$a_flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$d_flight_id = 0;
						$airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
						$airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
						$d_airline_id = 0;
						$d_airline_name='';
						$DepartureTime='';
					}
					// elseif($this->input->post( 'SpaServiceAt' )=='Departure') {
						elseif($this->input->post( 'SpaServiceAt' )!='') {
							$SpaServiceAt = $this->input->post( 'SpaServiceAt' );
						//$ToAirport = '';	
					    $service_type_id = 9;
						$FromAirport = !empty($this->input->post( 'SpaServiceAirport' ))?$this->input->post( 'SpaServiceAirport' ):'';
						$to_airport_id = '0';
						$from_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
						$to_airport_id = $from_airport_id;
						$flight_id = 0;
						$a_flight_id = 0;
						$d_flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$d_airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
						$d_airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
						$airline_id = 0;
						$airline_name='';
						$ArrivalTime = '';
					}
					elseif($this->input->post( 'SpaServiceAt' )=='Transit') {
					    $service_type_id = 12;
						
						$ToAirport = !empty($this->input->post( 'SpaServiceAirport' ))?$this->input->post( 'SpaServiceAirport' ):'';	
						$FromAirport = !empty($this->input->post( 'SpaServiceAirport' ))?$this->input->post( 'SpaServiceAirport' ):'';
						$to_airport_id = !empty($this->input->post( 'to_airport_id' ))?$this->input->post( 'to_airport_id' ):'0';
						$from_airport_id = !empty($this->input->post( 'from_airport_id' ))?$this->input->post( 'from_airport_id' ):'0';
						$flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$a_flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$d_flight_id = !empty($this->input->post( 'flight_id' ))?$this->input->post( 'flight_id' ):0;
						$airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
						$airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
						$d_airline_id = !empty($this->input->post( 'airline_id' ))?$this->input->post( 'airline_id' ):0;
						$d_airline_name = !empty($this->input->post( 'airline_name' ))?$this->input->post( 'airline_name' ):'';
						$TerminalId = !empty($this->input->post( 'TerminalId' ))?$this->input->post( 'TerminalId' ):'';
					}
					$SectorName = !empty($this->input->post( 'SectorName' ))?$this->input->post( 'SectorName' ):'';

					$service_date_time =  date('Y-m-d',strtotime($doa)).' '.$ServiceTime;
				  
					 $service_airport_id = $to_airport_id;			
					 $category = 'SPA';
					 $tm = !empty($TerminalName)?$TerminalName:'';
					 $duration = str_replace(' Min','',$tm);
					 $TerminalName = '';
					 $service_type_id = !empty($this->input->post( 'service_type_id' ))?$this->input->post( 'service_type_id' ):$service_type_id;
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
                        's_arrivalTime' =>!empty($ArrivalTime)?$ArrivalTime:'',
                        's_arrival_service_time' =>$ServiceTime ,
						"s_adult" => $Adult, 
						"s_child" => $Child, 
						"s_infant" => $Infant,
						"s_airport_location_code" => $airport_location_code,
						"s_airport_location_code_id" => $airport_location_code_id,
						"service_duration" => $duration,
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
						's_length_stay'=>'',
						's_length_stay_id'=>0,
						's_l_terminal_id'=>!empty($TerminalId)?$TerminalId:0,
						'service_duration_id'=>!empty($TerminalId)?$TerminalId:0,
						's_l_terminal_name'=>!empty($TerminalName)?$TerminalName:'',
						's_l_terminal_code'=>!empty($TerminalCode)?$TerminalCode:'',
						's_l_terminal_value'=>!empty($TerminalValue)?$TerminalValue:'',
						'service_term_lounge'=>!empty($service_term_lounge)?$service_term_lounge:'',
						"s_select_product_details" => array(),
						"s_customer_data" => $customer_data,
						'order_arrival_term'=>$order_arrival_term,
						'order_departure_term'=>$order_departure_term,
						'service_airport_id'=>$service_airport_id,
						'spa_service_at'=>$SpaServiceAt
						);
					$this->session->set_userdata($data);
					//p($data);
					//exit;
					
		//print_r($this->input->post());
			
		$array = array(
			'category'=>$category,
			'no_of_adult'=>$Adult,
			'no_of_children'=>$Child,
			'no_of_infants'=>$Infant,
			'sector'=>$SectorName,
			'airport_code'=>$service_airport_id, //$to_airport_id,
			//'airport_code'=>$ToAirport,
			'travel_date'=>date('Y-m-d',strtotime($doa)),
			'service_time'=>!empty($service_date_time)?$service_date_time:date('Y-m-d',strtotime($doa)).' '.$ServiceTime,
			//'service_time'=>'10:00:00',
			'basetype'=>'Base',
			'product_id'=>$duration
					);   
// 		p($array);
// 		exit;
        $this->data['flightdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_with_availablity',$array);
				//p($this->data['flightdata']);exit;
			$this->load->view('atithya/travel-search-spa',$this->data);
		}
		 else
		 {
			 redirect(base_url('spa/home/index'));
		 }
		
	} 
	public function addons() 
	{
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			   
	//p($this->session->all_userdata());exit;  
			$array = array(
			'category'=> $this->session->userdata("s_category") ,
			'sector'=>$this->session->userdata("s_arrival_sector"),
			'airport_code'=>$this->session->userdata("service_airport_id"),//s_arriving_airport_at
			'travel_date'=>date('Y-m-d',strtotime($this->session->userdata("s_doa"))),
			'service_time'=>$this->session->userdata("s_arrival_service_time"),
			'basetype'=>'Add-On',
			'product_id'=>$id
					); 
			//$this->data['addondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
			$this->data['addondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_addon_list',$array);
				//p($this->data['addondata']);exit;
			$this->load->view('atithya/addon-search',$this->data);
		}
		 else
		 {
			 redirect(base_url('spa/home/index'));
		 }
		
	}
	public function confirm() 
	{
		//date_default_timezone_set('Asia/Kolkata');
		/*echo !empty($this->session->userdata("s_service_date_time"))?date('Y-m-d H:i',strtotime($this->session->userdata("s_service_date_time"))):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time");
		echo "<br>";
		echo date('Y-m-d H:i:s');*/
// 		p($this->session->all_userdata());
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
				
				$sType = !empty($this->session->userdata("s_service_type_id"))?$this->session->userdata("s_service_type_id"):'';
				$service_airport = !empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0;
				if($sType == 2)	
					$service_airport = !empty($this->session->userdata("s_from_airport_id"))?$this->session->userdata("s_from_airport_id"):0;
			
				$o_array = array(
				'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
				//'partner_id'=>12,
				'date_order'=>gmdate("Y-m-d H:i:s"),
				'airport_location_id'=>$service_airport,
				//'airport_location_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
				//'airport_location_id'=>!empty($this->session->userdata("s_airport_location_id"))?$this->session->userdata("s_airport_location_id"):0,
				'travel_date'=>!empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):date('Y-m-d'),
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
				'no_of_infants'=>!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0,
				'terminal_id'=>!empty($this->session->userdata("s_l_terminal_name"))?$this->session->userdata("s_l_terminal_name"):'',
				'length_stay'=>!empty($this->session->userdata("s_length_stay"))?$this->session->userdata("s_length_stay"):'',
				'pricelist_id'=>1,
				'arrival_term'=>!empty($this->session->userdata("order_arrival_term"))?$this->session->userdata("order_arrival_term"):'',
				'departure_term'=>!empty($this->session->userdata("order_departure_term"))?$this->session->userdata("order_departure_term"):'',
				's_arrival_sector'=>!empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'',
				'service_duration'=>!empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):'',
				'service_duration_id'=>!empty($this->session->userdata("service_duration_id"))?$this->session->userdata("service_duration_id"):'',
				'primary_product_id'=>!empty($this->session->userdata("primary_product_id"))?$this->session->userdata("primary_product_id"):'',
				);
				if($this->session->userdata("s_category")=='Transit')
				$o_array['to_airport_id'] = !empty($this->session->userdata("s_d_from_airport_id"))?$this->session->userdata("s_d_from_airport_id"):0;
				// p($o_array);
				// exit;
				
				$collection_remarks =!empty($this->session->userdata("spa_service_at"))?$this->session->userdata("spa_service_at"):'';
				if($collection_remarks){
					$o_array['collection_remarks'] = $collection_remarks;
				}
				// p($o_array);
				// exit;
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_parent',$o_array);
				 
				$json_decode =  json_decode($datalist);
				// p($json_decode);exit;

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
				  redirect(base_url('spa/home/checkout/'.$order_id.'/'.$insert_id));
				}
				else
				{
					$this->session->set_flashdata("success", "Order not created please check");
					$this->load->view('atithya/confirm-search',$this->data);
				}
			}
		}
		
		else
		{
		$this->load->view('atithya/confirm-search',$this->data);
		}
	}
	public function checkout() 
	{
		
		//p($this->session->all_userdata());exit;
		check_login_users();
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));
		$booking_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5)));
		if(isset($_SESSION['validity'])&&($_SESSION['validity']==1)) {
			curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'unlink_sale_guest',array('id'=>$id));
		}
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
			//p(json_decode($this->data['orderdata'] ));exit;
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
			 if(!empty($this->session->userdata('s_category')) and $this->session->userdata('s_category')=='Lounge')
				  {
				  $this->load->view('atithya/checkout-search-lounge',$this->data);
				  }
			else if(!empty($this->session->userdata('s_category')) and $this->session->userdata('s_category')=='SPA')
				{
				$this->load->view('atithya/checkout-search-spa',$this->data);
				}
				  else
				  {
					  $this->load->view('atithya/checkout-search',$this->data);
				  }
			
				
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

				$sType = !empty($this->session->userdata("s_service_type_id"))?$this->session->userdata("s_service_type_id"):'';
				$service_airport = !empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0;
				if($sType == 2)	
					$service_airport = !empty($this->session->userdata("s_from_airport_id"))?$this->session->userdata("s_from_airport_id"):0;
				 
				$o_array = array(
				'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
				'date_order'=>gmdate("Y-m-d H:i:s"),
				'travel_date'=>!empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):date('Y-m-d'),
				'airport_location_id'=>$service_airport,
				//'airport_location_id'=>!empty($this->session->userdata("s_to_airport_id"))?$this->session->userdata("s_to_airport_id"):0,
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
				'no_of_infants'=>!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0,
				'terminal_id'=>!empty($this->session->userdata("s_l_terminal_name"))?$this->session->userdata("s_l_terminal_name"):'',
				'length_stay'=>!empty($this->session->userdata("s_length_stay"))?$this->session->userdata("s_length_stay"):'',
				'pricelist_id'=>1,
				'arrival_term'=>!empty($this->session->userdata("order_arrival_term"))?$this->session->userdata("order_arrival_term"):'',
				'departure_term'=>!empty($this->session->userdata("order_departure_term"))?$this->session->userdata("order_departure_term"):'',
				's_arrival_sector'=>!empty($this->session->userdata("s_arrival_sector"))?$this->session->userdata("s_arrival_sector"):'',
				'service_duration'=>!empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):'',
				'service_duration_id'=>!empty($this->session->userdata("service_duration_id"))?$this->session->userdata("service_duration_id"):'',
				'primary_product_id'=>!empty($this->session->userdata("primary_product_id"))?$this->session->userdata("primary_product_id"):''
				);
				if($this->session->userdata("s_category")=='Transit')
				$o_array['to_airport_id'] = !empty($this->session->userdata("s_d_from_airport_id"))?$this->session->userdata("s_d_from_airport_id"):0;
				//p($o_array); exit;
				
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
				   
				  redirect(base_url('spa/home/checkout/'.$order_id.'/'.$insert_id));
				 
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
				 echo $this->load->view('atithya/ajax_table', $this->data, TRUE );
		}
	}
	function updatesessionlounge()
	{
		$lounge_service_time = !empty($this->input->post( 'lounge_service_time' ))?date('D, d-M-Y H:i',strtotime($this->input->post( 'lounge_service_time' ))):$this->session->userdata("s_service_date_time");
		$lengthofstay_id = !empty($this->input->post( 'lengthofstay_id' ))? $this->input->post( 'lengthofstay_id' ):0;
		$lengthofstay = !empty($this->input->post( 'lengthofstay' ))? $this->input->post( 'lengthofstay' ):'';
		
		$this->session->set_userdata(
               array(
               's_service_date_time'  =>  $lounge_service_time,
               's_length_stay'  =>  $lengthofstay,
               's_length_stay_id'  =>  $lengthofstay_id
                ));

		echo true;
	}
	function updatesession()
	{
		$page = !empty($this->input->post( 'page' ))?$this->input->post( 'page' ):'';
		$product_name = !empty($this->input->post( 'product_name' ))?$this->input->post( 'product_name' ):'';
		$noqty = !empty($this->input->post( 'noqty' ))?$this->input->post( 'noqty' ):0;
		 $product_id = !empty($this->input->post( 'product_id' ))?$this->input->post( 'product_id' ):0;
		 $primary_product_id = !empty($this->input->post( 'product_id' ))?$this->input->post( 'product_id' ):0;
		$is_surcharge = !empty($this->input->post( 'surcharge' ))?$this->input->post( 'surcharge' ):0;
		$product_price = !empty($this->input->post( 'product_price' ))?$this->input->post( 'product_price' ):0;
		$tax_price = !empty($this->input->post( 'tax_price' ))?$this->input->post( 'tax_price' ):0;
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
				
				$this->session->set_userdata(
					array(
					'primary_product_id'  =>  $primary_product_id
					));
				$this->session->set_userdata('s_select_product_details',array());
				$data =  curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_variant_details',array('id'=>$product_id));
				 $this->session->set_userdata('service_duration',$service_duration );
				 $array =array();
				 $a_pid = 0;
				 $a_pname = '';
				 $a_rate = 0;
				 $a_rate_surcharge = 0;
				 $a_tax = 0;
				 $a_tax_surcharge = 0;
				 
				 $c_pid = 0;
				 $c_pname = '';
				 $c_rate = 0;
				 $c_rate_surcharge = 0;
				 $c_tax = 0;
				 $c_tax_surcharge = 0;
				 
				 $i_pid = 0;
				 $i_pname = '';
				 $i_rate = 0;
				 $i_rate_surcharge = 0;
				 $i_tax = 0;
				 $i_tax_surcharge = 0;
				 
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
								 $a_rate_surcharge = $val->lst_price_with_surcharge;
								 $a_tax = $val->tax_price;
								 $a_tax_surcharge = $val->tax_price_with_surcharge;
							}
							elseif($val->variant=='Child')
							{
								 $c_pid = $val->id;
								 $c_pname = $val->name;
								 $c_rate = $val->lst_price;
								 $c_rate_surcharge = $val->lst_price_with_surcharge;
								  $c_tax = $val->tax_price;
								 $c_tax_surcharge = $val->tax_price_with_surcharge;
							}
							elseif($val->variant=='Infant')
							{
								 $i_pid = $val->id;
								 $i_pname = $val->name;
								 $i_rate = $val->lst_price;
								 $i_rate_surcharge = $val->lst_price_with_surcharge;
								 $i_tax = $val->tax_price;
								 $i_tax_surcharge = $val->tax_price_with_surcharge;
							}
							elseif(strpos(strtolower($val->categ_id[1]), 'spa') !== false)
							{
								 $a_pid = $val->id;
								 $a_pname = $val->name;
								 $a_rate = $val->lst_price;
								 $a_rate_surcharge = $val->lst_price_with_surcharge;
								 $a_tax = $val->tax_price;
								 $a_tax_surcharge = $val->tax_price_with_surcharge;
							}
							 
						}
					}
				 
				if(!empty($s_adult) and (int)$s_adult and $s_adult>0 )
				{
					if($is_surcharge == 1)
						$array[] = array('pid'=>$a_pid, "pname"=>$a_pname,'ptype'=>'Adult','prate'=>$a_rate_surcharge,'pqty'=>$s_adult,'pprice'=>$s_adult*$a_rate_surcharge,'ptaxrate'=>$a_tax_surcharge,'ptaxprice'=>$s_adult*$a_tax_surcharge);
					else
						$array[] = array('pid'=>$a_pid, "pname"=>$a_pname,'ptype'=>'Adult','prate'=>$a_rate,'pqty'=>$s_adult,'pprice'=>$s_adult*$a_rate,'ptaxrate'=>$a_tax,'ptaxprice'=>$s_adult*$a_tax);
				}
				if(!empty($s_child) and (int)$s_child and $s_child>0 )
				{
					if($is_surcharge == 1)
						$array[] =  array('pid'=>$c_pid, "pname"=>$c_pname,'ptype'=>'Child','prate'=>$c_rate_surcharge,'pqty'=>$s_child,'pprice'=>$s_child*$c_rate_surcharge,'ptaxrate'=>$c_tax_surcharge,'ptaxprice'=>$s_adult*$c_tax_surcharge);
					else					
						$array[] =  array('pid'=>$c_pid, "pname"=>$c_pname,'ptype'=>'Child','prate'=>$c_rate,'pqty'=>$s_child,'pprice'=>$s_child*$c_rate,'ptaxrate'=>$c_tax,'ptaxprice'=>$s_adult*$c_tax);
				}
				if(!empty($s_infant) and (int)$s_infant and $s_infant>0 )
				{
					//$array[] =array('pid'=>$i_pid, "pname"=>$i_pname,'ptype'=>'Infant','prate'=>$i_rate,'pqty'=>$s_infant,'pprice'=>$s_infant*$i_rate,'ptaxrate'=>$i_tax,'ptaxprice'=>$s_adult*$i_tax);
				}
				
				  $this->session->set_userdata('s_select_product_details',$array );
				  $html= $this->load->view('atithya/ajax_table', $this->data, TRUE );
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
				$array[] =array('pid'=>$product_id, "pname"=>$product_name,'ptype'=>'Qty','prate'=>$product_price,'pqty'=>$noqty,'pprice'=>$noqty*$product_price,'ptaxrate'=>$tax_price,'ptaxprice'=>$noqty*$tax_price);
				 $array_merge = array_merge($old_array, $array);
				  $array_merge= array_values($array_merge);
				 $this->session->set_userdata('s_select_product_details',$array_merge);
				 echo $this->load->view('atithya/ajax_table', $this->data, TRUE );
				  
			}
			
		}
	
	}
function placeorderlounge()
	{
		//p($_POST);
		 //exit;
		 $session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
		 
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
				
				/* $s_doa = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):'';
				$service_duration = !empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):0;
				$s_arrival_service_time = !empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):'';
				if(!empty($s_doa))
				{
				$service_time = $s_doa.' '.$s_arrival_service_time;
				$total_guest = $this->session->userdata("s_adult")+$this->session->userdata("s_child")+$this->session->userdata("s_infant");
				$availabilityArr = array('service_time'=>$service_time,'service_duration'=>$service_duration,'total_guest'=>$total_guest);
				//p($availabilityArr);	exit;
				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'update_availability',$availabilityArr);
				} */
				 
				 if(!empty($this->input->post( 'lounge_first_name' )))
				 {
					 
						$age =!empty( $this->input->post( 'lounge_age' ))? $this->input->post( 'lounge_age' ):0;
						$lounge_country_code =!empty( $this->input->post( 'lounge_country_code' ))? $this->input->post( 'lounge_country_code' ):'';
						$lounge_mobile =!empty( $this->input->post( 'lounge_mobile' ))? $this->input->post( 'lounge_mobile' ):'';
						$o_g_array=array(
							"guest_type"=>'adult',
							'sale_id'=>$o_booking_id,
							'partner_id'=>!empty($this->input->post( 'guest_type' ))?$this->input->post( 'guest_type' ):0,
							'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0,
							'title'=>$this->input->post( 'lounge_title' ),
							'first_name'=>$this->input->post( 'lounge_first_name' ),
							'last_name'=>$this->input->post( 'lounge_last_name' ),
							'gender'=>$this->input->post( 'lounge_gender'),
							'dob'=>date('Y-m-d',strtotime("-$age years")),
							'age'=>$age,
							'mobile'=>$lounge_country_code.$lounge_mobile,
							'country_code'=>$country_code.$lounge_mobile,
							'passport_no'=>'',
							'pnr_no'=>'',
							'class_type'=>''
						 );
						//p($o_g_array);
						curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_guest',$o_g_array);
						$array_1 = array(
						"booking_id"=>$booking_id,
						//"booking_id"=>$insert_id,
						"o_guest_id"=>!empty($this->input->post( 'guest_type' ))?$this->input->post( 'guest_type' ):0,
						"guest_type"=>'Lounge',
						"guest_title"=>$this->input->post( 'lounge_title' ),
						"guest_first_name"=>$this->input->post( 'lounge_first_name' ),
						"guest_last_name"=>$this->input->post( 'lounge_last_name' ),
						"guest_passport"=>'',
						"guest_age"=>$this->input->post( 'lounge_age' ),
						"guest_gender"=>$this->input->post( 'lounge_gender'),
						"guest_mobile"=>$this->input->post( 'lounge_mobile'),
						"guest_country_code"=>$this->input->post( 'lounge_country_code'),
						"guest_pnr"=>'',
						"guest_class"=>'',
						);
					$this->db->insert('tbl_booking_product',$array_1);
					 
				 }
			}
			redirect(base_url('atithya/home/ordersummary/'.$o_booking_id.'/'.$booking_id));
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
			'create_date'=>date("Y-m-d H:i:s"),
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
				
				/* $s_doa = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):'';
				$service_duration = !empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):0;
				$s_arrival_service_time = !empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):'';
				if(!empty($s_doa))
				{
				$service_time = $s_doa.' '.$s_arrival_service_time;
				$total_guest = $this->session->userdata("s_adult")+$this->session->userdata("s_child")+$this->session->userdata("s_infant");
				$availabilityArr = array('service_time'=>$service_time,'service_duration'=>$service_duration,'total_guest'=>$total_guest);
				//p($availabilityArr);	exit;
				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'update_availability',$availabilityArr);
				} */
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
					'last_name'=>!empty($this->input->post( 'placard_last_name' ))?$this->input->post( 'placard_last_name' ):'',
					'bd_title' => (int)(!empty($this->input->post("billing_title"))?$this->input->post("billing_title"):0),
					'bd_first_name' => !empty($this->input->post("billing_name"))?$this->input->post("billing_name"):'',
					'bd_last_name' => !empty($this->input->post("billing_last_name"))?$this->input->post("billing_last_name"):'',
					'bd_country_code' => !empty($this->input->post("billing_country_code"))?$this->input->post("billing_country_code"):'',
					'bd_mobile' => !empty($this->input->post("billing_mobile"))?$this->input->post("billing_mobile"):'',
					'bd_address' => !empty($this->input->post("billing_address"))?$this->input->post("billing_address"):'',
					'bd_city' => !empty($this->input->post("billing_city"))?$this->input->post("billing_city"):'',
					'bd_state_id' => !empty($this->input->post("billing_state"))?$this->input->post("billing_state"):'',
					'bd_country_id' => !empty($this->input->post("billing_country"))?$this->input->post("billing_country"):'',
					'bd_pincode' => !empty($this->input->post("billing_pincode"))?$this->input->post("billing_pincode"):'',
					'bd_email_id' => !empty($this->input->post("billing_email_id"))?$this->input->post("billing_email_id"):'',
					'bd_entity_name' => !empty($this->input->post("billing_entity_name"))?$this->input->post("billing_entity_name"):'',
					'bd_gst_in' => !empty($this->input->post("billing_gst_no"))?$this->input->post("billing_gst_no"):'',
					'title_text' => !empty($this->input->post("placard_titletext"))?$this->input->post("placard_titletext"):'',
					'remarks' => !empty($this->input->post("placard_instruction"))?$this->input->post("placard_instruction"):''
					);
					
					curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_placard_details',$PlacardArr);
				}
				 if(!empty($this->input->post( 'adult_first_name' )))
				 {
					 for($i=0;$i<count($this->input->post( 'adult_first_name' ));$i++)
					 {
						$age =!empty( $this->input->post( 'adult_age' )[$i])? $this->input->post( 'adult_age' )[$i]:0;
						
						
						$o_g_array=array(
							'guest_type'=>'adult',
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
							'therapist_preference'=>!empty($this->input->post( 'adult_th_pref' )[$i])?$this->input->post( 'adult_th_pref' )[$i]:'',
							'passport_no'=>$this->input->post( 'adult_passport' )[$i],
							'pnr_no'=>$this->input->post( 'adult_pnr' )[$i],
							'class_type'=>!empty($this->input->post( 'adult_class' )[$i])?$this->input->post( 'adult_class' )[$i]:''
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
						"guest_class"=>!empty($this->input->post( 'adult_class' )[$i])?$this->input->post( 'adult_class' )[$i]:'',
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
							'guest_type'=>'child',
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
							'guest_type'=>'infant',
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
	//		$this->load->view('atithya/thankyou',$this->data);
			redirect(base_url('spa/home/ordersummary/'.$o_booking_id.'/'.$booking_id));
		}
	}
	
	function ordersummary()
	{
		check_login_users();
		if(isset($_SESSION['validity'])&&($_SESSION['validity']==0)) {
			redirect(base_url());
		}
		$_SESSION['validity'] = 1;
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
		$booking_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id ); 
		$this->data['o_booking_id']=$id;
		$this->data['booking_id']=$booking_id;
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$coupon_array = array('cust_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0);
			$this->data['coupondata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_discount_coupon',$coupon_array);
			
		//p($array);
		$currentUri = $this->uri->uri_string();

		// Check if the URI contains "spa"
		if (strpos($currentUri, 'spa') !== false) {
			// The URI contains "spa"
			$spa =true;
		}
		else{
			$spa = false;
		}
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		//p(json_decode($this->data['datalist'] ));exit;
        if(!empty($this->session->userdata('s_category')) and strtolower($this->session->userdata('s_category'))=='spa')
        {
    		$this->load->view('atithya/order-summary-spa', $this->data );
        }
		elseif($spa){
			$this->load->view('atithya/order-summary-spa', $this->data );
		}
        else
        {
		    $this->load->view('atithya/order-summary', $this->data );
        }
		
		}
		else
		{
			redirect(base_url('atithya/user/mybooking'));
		}
	}
	
	function thankyou()
	{
		if($_SESSION['validity']!=1) {
			redirect(base_url());
		}
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
		$db_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		
		if($_POST)
		{
			//p($_POST);exit;
			
			$payment_status = !empty($this->input->post( 'razorpay_payment_id' ))? 'Success':'Failed';
			$o_booking_id = !empty($this->input->post( 'o_booking_id' ))? $this->input->post( 'o_booking_id' ):0;
			$booking_id = !empty($this->input->post( 'booking_id' ))? $this->input->post( 'booking_id' ):0;
			
			$array = array
			(
			'razorpay_payment_amount'=>!empty($this->input->post( 'razorpay_payment_amount' ))?$this->input->post( 'razorpay_payment_amount' ):0,
			'razorpay_payment_id'=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
			'razorpay_order_id'=>!empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):'',
			'payment_status'=>$payment_status
			);
			// // Add operation
			$paymentModel = new Payment();
			
			$paymentModel->insert_data(array(
				"merchant_ref"=> !empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):'',
				"oodo_no"=>$booking_id,
				"sale_id"=>$o_booking_id,
				"customername"=>!empty($session_customer_data['fullname'])?$session_customer_data['fullname']:0,
				"payment_mode"=>!empty($this->input->post( 'payment_mode' ))? $this->input->post( 'payment_mode' ):'',
				"amount"=>!empty($this->input->post( 'razorpay_payment_amount' ))? $this->input->post( 'razorpay_payment_amount' ):'0',
				"status"=>'created',
				"ip_address"=>$this->input->ip_address()
			));
			//p($array);
			$paymentModel = new Payment();

			$data = (array(
				"fullresponse"=> json_encode($_POST,true),
				"new_status"=>$payment_status,
				"status"=>$payment_status,
				"reference_no"=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
				'updated_at'=> date('Y-m-d H:i:s')
			));
			
		$old_data = $paymentModel->update_data($o_booking_id, $data);
		
			if(!empty($o_booking_id) and  !empty($booking_id))
			{
				$this->db->update('tbl_booking',$array,array('id'=>$booking_id,'o_order_id'=>$o_booking_id));
			}
			if($payment_status=='Success')
			{
				$confirm_sale_order = array(
				'id'=>$o_booking_id,
				'payment_method '=>'payment_gateway',
				'payment_gateway' =>'Razorpay',
				'payment_id'=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
				'order_no'=>!empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):''
				);
				//curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',array("id"=>$o_booking_id));
				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',$confirm_sale_order);
				$this->db->query("update tbl_booking set status='1' where o_order_id=$o_booking_id");
				
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
			}				
			 $this->data['payment_status']=$payment_status;
		}
		//p($_POST);exit;
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id, 
		);
		$this->data['obid']=$id;
		$this->data['dbid']=!empty($db_id)?$db_id:0;
		$this->session->set_flashdata("success", "Your Booking has been confirmed, Booking No: <br/> Thank you!"); 
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
        if(!empty($this->session->userdata('s_category')) and strtolower($this->session->userdata('s_category'))=='spa')
        {
			
			$this->load->view('atithya/thankyou-spa', $this->data );
			
			
        }
        else
        {
		    $this->load->view('atithya/thankyou', $this->data );
        }
		$_SESSION['validity'] = 0;
		}
		else
		{
			redirect(base_url('spa/user/mybooking'));
		}
	}


	function confirmation()
	{
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
		$db_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
        $service_category = 'welcome_and_assist';
    
		$sarray = array(
			'id'=>$id
		);
		$gData = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_id',$sarray);
        $xCat = json_decode($gData);
        $nData = (array)$xCat->datalist;
        $service_category = $nData[0]->service_category;
        //echo $service_category; exit();
	
		if($_POST)
		{
			//p($_POST);exit;
			
			$payment_status = !empty($this->input->post( 'razorpay_payment_id' ))? 'Success':'Failed';
			$o_booking_id = !empty($this->input->post( 'o_booking_id' ))? $this->input->post( 'o_booking_id' ):0;
			$booking_id = !empty($this->input->post( 'booking_id' ))? $this->input->post( 'booking_id' ):0;
	
			$array = array
			(
			'razorpay_payment_amount'=>!empty($this->input->post( 'razorpay_payment_amount' ))?$this->input->post( 'razorpay_payment_amount' ):0,
			'razorpay_payment_id'=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
			'razorpay_order_id'=>!empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):'',
			'payment_status'=>$payment_status
			);
			//p($array);
			if(!empty($o_booking_id) and  !empty($booking_id))
			{
				$this->db->update('tbl_booking',$array,array('id'=>$booking_id,'o_order_id'=>$o_booking_id));
			}
			if($payment_status=='Success')
			{
                if($service_category=='spa')
                {
        				$confirm_sale_order = array(
        				'id'=>$o_booking_id,
        				'payment_method '=>'payment_gateway',
        				'payment_id'=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
        				'order_id'=>!empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):''
        				);
        				//print_r($confirm_sale_order);die;
        				//curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',array("id"=>$o_booking_id));
        				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order_spa',$confirm_sale_order);
        				$this->db->query("update tbl_booking set status='1' where o_order_id=$o_booking_id");
                }
                else
                {
        				$confirm_sale_order = array(
        				'id'=>$o_booking_id,
        				'payment_method '=>'payment_gateway',
        				'payment_id'=>!empty($this->input->post( 'razorpay_payment_id' ))?$this->input->post( 'razorpay_payment_id' ):'',
        				'order_id'=>!empty($this->input->post( 'razorpay_order_id' ))?$this->input->post( 'razorpay_order_id' ):''
        				);
        				//print_r($confirm_sale_order);die;
        				//curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',array("id"=>$o_booking_id));
        				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',$confirm_sale_order);
        				$this->db->query("update tbl_booking set status='1' where o_order_id=$o_booking_id");
        				
        				$s_doa = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))):'';
        				$service_duration = !empty($this->session->userdata("service_duration"))?$this->session->userdata("service_duration"):0;
        				$s_arrival_service_time = !empty($this->session->userdata("s_arrival_service_time"))?$this->session->userdata("s_arrival_service_time"):'';
        				if(!empty($s_doa))
        				{
        				$service_time = $s_doa.' '.$s_arrival_service_time;
        				$total_guest = $this->session->userdata("s_adult")+$this->session->userdata("s_child")+$this->session->userdata("s_infant");
        				$availabilityArr = array('id'=>$o_booking_id,'service_time'=>$service_time,'service_duration'=>$service_duration,'total_guest'=>$total_guest);
        				//p($availabilityArr);	exit;
        				curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'update_availability',$availabilityArr);
        				}
                }
			}				
			 $this->data['payment_status']=$payment_status;
		}
		//p($_POST);exit;
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id, 
		);
		$this->data['obid']=$id;
		$this->data['dbid']=!empty($db_id)?$db_id:0;
		$this->session->set_flashdata("success", "Your Booking has been confirmed, Booking No: <br/> Thank you!"); 
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);

        if($service_category=='spa')
        {
		    $this->load->view('atithya/thankyou-spa', $this->data );
        }
        else
        {
		    $this->load->view('atithya/thankyou', $this->data );
        }
		$_SESSION['validity'] = 0;
		}
		else
		{
			redirect(base_url('spa/user/mybooking'));
		}
	}
	
	
	public function error() 
	{		$this->load->view('atithya/error', $this->data );
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
	
function get_booking_data()
	{
		$id = !empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
		
		$array = array(
			'id'=>$id ); 
		$this->data['o_booking_id']=$id;
		//$this->data['booking_id']=0;
		
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		//p(json_decode($this->data['datalist']));
		 echo $this->load->view('atithya/ajax_booking_summary', $this->data, TRUE );
	}	
function remove_apply_coupon()
	{
		$id = !empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
		$sale_id = !empty($this->input->post( 'sale_id' ))?$this->input->post( 'sale_id' ):0;
		
		curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'delete_sale_order_line',array("id"=>$id));
		$array = array('id'=>$sale_id ); 
		 
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		//p(json_decode($this->data['datalist']));
		 echo $this->load->view('atithya/ajax_booking_summary', $this->data, TRUE );
	}	
function save_sale_order_payment_pending()
{
	$id = !empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
	$json = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'reserve_sale_order',array("sale_id"=>$id));
	echo $json = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_payment_pending',array("id"=>$id));
	 
}
private function sendmail($html,$to) 
{
	$site_url = 'https://encalm.com/';
	
	$headers = "";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n". 'From: Encalm <info@encalm.com>'; 
	
	$subject = "Encalm Contact Form Inquiry";	
	$varOutput ="";
	$varOutput .= '<table>';
	$varOutput .= '<tr><td colspan="2" valign="top" ><a href="'.$site_url.'"><img src="'.$site_url.'/assets/image/Encalm-Logo-Primary.png" style="height:100px;" alt="" border="0" /></a></td></tr>';
	$varOutput .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
	$varOutput .= '<tr><td valign="top" colspan="2">'.$html.'</td></tr>';
	
	$varOutput .= '<tr><td valign="top" colspan="2"><b>Regards,</b></td></tr>';
	$varOutput .= '<tr><td valign="top" colspan="2"><b>Encalm Hospitality Pvt. Ltd.</b></td></tr>';
	$varOutput .= '</table>';	
	 
	
	
	if(mail($to,$subject,$varOutput,$headers)){
		return true;
		echo $mail_body;
	}
	else{
		return false;
	}

	//@mail($to1,$subject,$varOutput1,$headers1);
	echo $msg='Thank you for your inquiry. We will respond to you shortly.';	
	//$this->load->view('contact-us');
}

function save_sale_order_payment_pending_spa()
{
	$id = !empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
	$array = array(
		'id'=>$id, 
	);
	$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
	
	//$json = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'reserve_sale_order',array("sale_id"=>$id));
	echo $json = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_payment_pending_for_spa',array("id"=>$id));
	$mail_body = $this->load->view('atithya/html_mail', $this->data, TRUE);

	 // Send email with HTML content
	$to = 'nikjha2552@gmail.com,ecuser@ip-97-74-82-245.ip.secureserver.net,diwakar.aryan@galaxyitechsolutions.com';
	//  $subject = 'Order Details '.$id;
	//  $headers = 'MIME-Version: 1.0' . "\r\n";
	//  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	//  $headers .= 'From: sales@encalm.com' . "\r\n";

	 if($this->sendmail($mail_body,$to)){
		//echo 'Email sent successfully.';
		//echo "<br>";
	 	
	 }
	 else{
		//echo "Error: Message not accepted";

	 }
}

public function postpayment()
	{


		$amount_sess = $this->session->userdata("orderamount");
		
		$sale_id= !empty($this->input->post( 'o_booking_id' ))?$this->input->post( 'o_booking_id' ):'';
		$paymentModel = new Payment();
	

		$data = array(
			"merchant_ref"=> !empty($this->input->post( 'order_id' ))?$this->input->post( 'order_id' ):'',
			"oodo_no"=>!empty($this->input->post( 'booking_id' ))?$this->input->post( 'booking_id' ):'',
			"sale_id"=>!empty($this->input->post( 'o_booking_id' ))?$this->input->post( 'o_booking_id' ):'',
			"customername"=>!empty($this->input->post( 'delivery_name' ))? $this->input->post( 'delivery_name' ):'',
			"payment_mode"=>!empty($this->input->post( 'payment_mode' ))? $this->input->post( 'payment_mode' ):'',
			"amount"=>$amount_sess,
			"status"=>'created',
			"ip_address"=>$this->input->ip_address()
			
		);
		

		$old_data = $paymentModel->update_data($sale_id, $data);

		if(!$old_data)
		{

		$paymentModel->insert_data($data);
		}

		$posted_amount = !empty($this->input->post( 'amount' ))? $this->input->post( 'amount' ):'0';
		if($posted_amount!=$amount_sess)
		{
			
			echo "<script>alert('Do not be smart by tweaking any changes in request');window.location = 'https://mdemo.encalm.com';</script>";
			exit();
		}
		$data=$this->input->post(array(
			'order_id'=>'order_id',
			'merchant_id'=>'merchant_id',
			'currency'=>'currency',
			'amount'=>'amount',
			'redirect_url'=>'redirect_url',
			'cancel_url'=>'cancel_url',
			'language'=>'language',
			'delivery_name'=>'delivery_name',
			'delivery_address'=>'delivery_address',
			'delivery_city'=>'delivery_city',
			'delivery_state'=>'delivery_state',
			'delivery_zip'=>'delivery_zip',
			'delivery_country'=>'delivery_country',
			'delivery_tel'=>'delivery_tel'
		));
	$orderid = !empty($this->input->post( 'order_id' ));
	$this->session->set_userdata('paydata',$data );
	$this->session->set_userdata('orderid',$orderid );
	$this->session->set_userdata('sale_id',$sale_id );
	$this->session->set_userdata('orderno', $this->input->post( 'order_id' ));

	$merchant_data='';
	$working_key=CCAVENUE_WORKING_KEY;
	$access_code=CCAVENUE_ACCESS_CODE;
	
	foreach ($data as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	$encrypted_data=encrypt($merchant_data,$working_key); 

	$form_data = "<form method='post' name='redirect' action='https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction'> 
		<center>
		<h1> Please wait...</h1>
		<input type=hidden name=encRequest value=$encrypted_data>
		<input type=hidden name=access_code value=$access_code>
		</form>
		</center>
		<script language='javascript'>document.redirect.submit();</script>";
		echo $form_data;

		echo "<br /><br /><br /><center><h1>Please wait, we are processing your request.</h1></center>";
	}

	function thank_you()
	{
		
			$tracking_id = '';
			$paymentModel = new Payment();
			$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
			$db_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
			$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
			
			$sess_orderno = !empty($this->session->userdata("orderno"))?$this->session->userdata("orderno"):0;
			
			$order_check =$this->db->query("select merchant_ref, reference_no from tbl_post_payment_details where sale_id='$id'");
// 			echo "\n";
// 			echo "select merchant_ref from tbl_post_payment_details where sale_id='$id' and merchant_ref='$sess_orderno'";
			
				$old_ord = $order_check->result_array();
			    $old_order_id = $old_ord[0]['merchant_ref'];
				$old_tracking_id = $old_ord[0]['reference_no'];
			if($_POST && $sess_orderno == $old_order_id && $old_tracking_id=='')
			{
			    
				
				$workingKey=CCAVENUE_WORKING_KEY;		//Working Key should be provided here.
				$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
				$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
				$decryptValues=explode('&', $rcvdString);
				$dataSize=sizeof($decryptValues);
				for($i = 0; $i < $dataSize; $i++) 
				{
				$information=explode('=',$decryptValues[$i]);
				if($i==0)	$order_id=$information[1];
				if($i==1)  $tracking_id=$information[1];
				if($i==2)  $bank_ref_no=$information[1];
				if($i==3)	$order_status=$information[1];
				if($i==4)	$failure_message=$information[1];
				if($i==5)	$payment_mode=$information[1];
				if($i==6)	$card_name=$information[1];
				if($i==7)	$status_code=$information[1];
				if($i==8)	$status_message=$information[1];
				if($i==9)	$currency=$information[1];
				if($i==10)	$billing_name=$information[1];
				if($i==11)	$billing_address=$information[1];
				if($i==12)	$billing_city=$information[1];
				if($i==13)	$billing_state=$information[1];
				if($i==14)	$billing_zip=$information[1];
				if($i==15)	$billing_country=$information[1];
				if($i==16)	$billing_tel=$information[1];
				if($i==17)	$billing_email=$information[1];
				if($i==25)	$merchant_param1=$information[1];
				if($i==26)	$merchant_param2=$information[1];
				if($i==27)	$merchant_param3=$information[1];
				if($i==28)	$merchant_param4=$information[1];
				if($i==29)	$merchant_param5=$information[1];
				if($i==30)	$vault=$information[1];
				if($i==41)	$response_code=$information[1];
				if($i==48)	$trans_date=$information[1];
				
				
				}
				$payment_status = $order_status;
				$o_booking_id = !empty($this->input->post( 'o_booking_id' ))? $this->input->post( 'o_booking_id' ):0;
				$booking_id = !empty($this->input->post( 'booking_id' ))? $this->input->post( 'booking_id' ):0;
				
				$array1 = array
				(
				'order_id'=>$order_id,
				'tracking_id'=>$tracking_id,
				'bank_ref_no'=>$bank_ref_no,
				'order_status'=>$order_status,
				'payment_mode'=>$payment_mode,
				'failure_message'=>$failure_message,
				'card_name'=>$card_name,
				'status_code'=>$status_code,
				'status_message'=>$status_message,
				'response_code'=>$response_code,
				'trans_date'=>$trans_date,
				'merchant_param1'=>$merchant_param1,
				);
	    		//echo $order_id;
				$array = array
				(
				'razorpay_payment_amount'=>$totalpaid,
				'razorpay_payment_id'=>$tracking_id,
				'razorpay_order_id'=>$order_id,
				'payment_status'=>$payment_status
				);
			
				$json = json_encode($array1);
			
				$data = (array(
					"fullresponse"=> $json,
					"new_status"=>$order_status,
					"status"=>$order_status,
					"reference_no"=>$tracking_id,
					'updated_at'=> date('Y-m-d H:i:s')
				));
				//$sess_orderid = !empty($this->session->userdata("orderid"))?$this->session->userdata("orderid"):0;
				
				$sess_sale_id = !empty($this->session->userdata("orderid"))?$this->session->userdata("orderid"):0;
	
				$this->db->update('tbl_post_payment_details',$data,array('merchant_ref'=>$sess_orderno));
				
					
				
				if (!empty($tracking_id))
				{
				    // echo $tracking_id;
				    // echo $id;
				$tracking_query = 'and razorpay_payment_id='.$tracking_id;
				}
				
				
				//$tracking_id_existing =$this->db->query("select razorpay_payment_id from tbl_booking where o_order_id=$id and razorpay_order_id = '$order_id' $tracking_query");
				$tracking_id_existing =$this->db->query("select razorpay_payment_id from tbl_booking where razorpay_order_id = '$order_id' $tracking_query");
				$dd = $tracking_id_existing->result_array();
			    $old_payid = $dd[0]['razorpay_payment_id'];
				
               
				if($payment_status==="Success" && $sess_sale_id==$order_id && $old_payid!=$tracking_id)
				{
					if(!empty($id) and  !empty($db_id))
				{
					$this->db->update('tbl_booking',$array,array('id'=>$db_id,'o_order_id'=>$id));
			
				}
					$confirm_sale_order = array(
					'id'=>$id,
					'payment_method '=>'payment_gateway',
					'payment_gateway' =>'HDFC',
					'payment_id'=>$tracking_id,
					'order_id'=>$order_id
					);
	
					//$old_data = $paymentModel->update_data($order_id, $data);
	
					//curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',array("id"=>$o_booking_id));
					curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',$confirm_sale_order);
					$this->db->query("update tbl_booking set status='1' where o_order_id=$id");
					
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
					$this->data['payment_status']=$payment_status;
				}	
					
				 
			}
		   
			if(!empty($id) and (int) $id and $id >0)
			{
				$array = array(
				'id'=>$id, 
			);
			$this->data['obid']=$id;
			$this->data['dbid']=!empty($db_id)?$db_id:0;
			$this->session->set_flashdata("success", "Your Booking has been confirmed, Booking No: <br/> Thank you!"); 
			//p($array);
			$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
			// print_r($this->data);
			// exit();
			if(!empty($this->session->userdata('s_category')) and strtolower($this->session->userdata('s_category'))=='spa')
			{
				$this->load->view('atithya/thankyou-spa', $this->data );
			}
			else
			{
				$this->load->view('atithya/thankyou', $this->data );
			}
			$_SESSION['validity'] = 0;
			}
			else
			{
				redirect(base_url('atithya/user/mybooking'));
			}
	}

function testingdb()
{
	$paymentModel = new Payment();
	// print_r($this->db);
	// exit();
	$data = $paymentModel->get_all_data();
	print_r($data);
}
function ccavenue_status_tracker()
{
	$working_key=CCAVENUE_WORKING_KEY;//Shared by CCAVENUES
	$access_code=CCAVENUE_ACCESS_CODE;//Shared by CCAVENUES
	$order_id = $_GET['orderid'];
	$reference_no = $_GET['tracking_id'];

$merchant_json_data =
array(
	'order_no' => $order_id,
	'reference_no' =>$reference_no
);

$merchant_data = json_encode($merchant_json_data);
$encrypted_data = encrypt($merchant_data, $working_key);
$final_data = 'enc_request='.$encrypted_data.'&access_code='.$access_code.'&command=orderStatusTracker&request_type=JSON&response_type=JSON';
echo "\nEncrypted Request : ". $final_data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://logintest.ccavenue.com/apis/servlet/DoWebTrans");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER,'Content-Type: application/json') ;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $final_data);
// Get server response ...
$result = curl_exec($ch);
curl_close($ch);
$status = '';
$information = explode('&', $result);
print_r($information);

$dataSize = sizeof($information);
for ($i = 0; $i < $dataSize; $i++) {
	$info_value = explode('=', $information[$i]);
	if ($info_value[0] == 'enc_response') {
		$status = decrypt(trim($info_value[1]), $working_key);
		
	}
}	
echo "<p>\nStatus response from server is: \n</p>" . $status.'<pre>';
$obj = json_decode($status);
print_r($obj);
}

}
	