<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxcall extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
    }
	 

	 function getApiData()
	{
		
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		
		
		$MethodName = !empty($this->input->post( 'MethodName' ))?$this->input->post( 'MethodName' ):'';
		$RequestType = !empty($this->input->post( 'RequestType' ))?$this->input->post( 'RequestType' ):'';
		$category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
		$to_airport = !empty($this->input->post( 'to_airport' ))?$this->input->post( 'to_airport' ):'';
		$from_airport = !empty($this->input->post( 'from_airport' ))?$this->input->post( 'from_airport' ):'';
		$travel_date = !empty($this->input->post( 'travel_date' ))?date('Y-m-d',strtotime($this->input->post( 'travel_date' ))):'';
		$type = !empty($this->input->post( 'type' ))?$this->input->post( 'type' ):'';
		$coupon_code = !empty($this->input->post( 'coupon_code' ))?$this->input->post( 'coupon_code' ):'';
		$airport_id = !empty($this->input->post( 'airport_id' ))?$this->input->post( 'airport_id' ):0;
		$service_airport = !empty($this->input->post( 'service_airport' ))?$this->input->post( 'service_airport' ):0;
		$airport_code = !empty($this->input->post( 'airport_code' ))?$this->input->post( 'airport_code' ):'';
		$service_airport_id = !empty($this->input->post( 'service_airport_id' ))?$this->input->post( 'service_airport_id' ):0;
		
		
		 $array=array();
		 
		 if($RequestType=='ValidateCouponCode' and !empty($coupon_code) and !empty($session_customer_data['o_id']))
		 {
			  $array=array(
			  'cust_id'=>$category,
			  'promo_code'=>$coupon_code
			  );  
		 }
		 if($RequestType=='ArrivalAt' || $RequestType=='DepartureFrom' || $RequestType=='LoungeForm' || $RequestType=='SpaFormData' || $RequestType=='SpaForm')
		 {
			  $array=array(
			  'category'=>$category
			  );  
			  //p($array);exit();
		 }
		 
		  if($RequestType=='TransitService')
		 {
			  $array=array(
			  'category'=>$category
			  );  
			 // p($array);
		 }
		 if($RequestType=='ArrivalAllAirport' || $RequestType=='DepartureTo')
		 {
			$array=array(
			  'airport_id'=>$airport_id
			  );   
		 }
		 if($RequestType=='ArrivalFlightList')
		 {
			    $array=array(
				'service_airport'=>$service_airport,
				'category'=>$category,
				'from_airport'=>$from_airport,
				'to_airport'=>$to_airport,
				'travel_date'=>$travel_date
				//'travel_date'=>'2021-12-15'
			  ); 
			// p($array);
		 }
		 if($RequestType=='SpaFlightList')
		 {
			    $array=array(
				'service_airport'=>$service_airport,
				'category'=>$category,
				'service_airport_id'=>$service_airport_id,
				'travel_date'=>$travel_date
			  ); 
			// p($array);
		 }
		 if($RequestType=='DepartureFlightList')
		 {
			    $array=array(
				'service_airport'=>$service_airport,
				'category'=>$category,
				'to_airport'=>$from_airport,
				'from_airport'=>$to_airport,
				'travel_date'=>$travel_date
			  ); 
			// p($array);die;
		 }
		 if($RequestType=='TransitArrivalFlightList')
		 {
			    $array=array(
				'service_airport'=>$service_airport,
				'category'=>$category,
				//'to_airport'=>$from_airport,
				'to_airport'=>$to_airport,
				//'from_airport'=>$to_airport,
				'from_airport'=>$from_airport,
				'travel_date'=>$travel_date
			  ); 
			// p($array);
		 }
		 
		 if($RequestType=='TransitDepartureFlightList')
		 {
			    $array=array(
				'service_airport'=>$service_airport,
				'category'=>$category,
				'to_airport'=>$to_airport,
				'from_airport'=>$from_airport,
				'travel_date'=>$travel_date
			  ); 
			 //p($array);
		 }
		 
		 if($RequestType=='SectorList')
		 {
			   $array=array(
			  'stype'=>$type
			  );  
			 // p($array);
		 }
		  if($RequestType=='LoungeCategory')
		 {
			   $array=array();  
		 }
		 if($RequestType=='SpaCategory')
		{
			  $array=array();  
		}
		  if($RequestType=='TerminalList')
		 {
			   $array=array(
			   "airport_code"=>$airport_code
			   );  
		 }
		 if($RequestType=='SpaDuration' || $RequestType=='SpaCategory' || $RequestType=='SpaPreference' || $RequestType=='LoungeDuration')
		 {
			  $array=array(
			  'stype'=>$type
			  );  
			 // p($array);
		 }
		 
		 $data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,$MethodName,$array);
		echo $data;
	}


	
 
public function getCustomerDetails(){
		if($_POST){
			  $html = '<ul class="hidedata">';
					
						$name1="Test";
						$name="'Deepak'";
						$email="'email'";
						$mobile="'moblile'";
					 
					$html .= '<li onClick="selectUser('.$name.','.$email.','.$mobile.')"><a href="javascript:void(0)"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>'.$name1.'</a></li>';
					 
					 $html .= "</ul>";
			echo  $html;
	    }
			
   } 
	/* function odoo_data()
	{
		$array = array(
		'category'=>'Arrival',
'sector'=>'Domestic',
'airport_code'=>'Indira Gandhi International Airport',
'travel_date'=>'2021-11-13',
'service_time'=>'14:00',
'basetype'=>'Base',
'product_id'=>0
		);
		$data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_product_list_meet_greet',$array);
		p($data);
	} */

	
	function getarrivalavailability() {
		$data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_availability_list',array('service_date'=>$this->input->post('service_date'),'service_location_id'=>$this->input->post('service_location_id')));
		$result = json_decode($data);
		$html = '<div class="bg-white p-3"><table class="border table table-bordered"><tbody><tr><th>Date</th><th>Time Slot</th><th>Balance</th><th>Blackout</th></tr>';
		if($result->datalist) {
			foreach($result->datalist as $data) {
				$blackout = (isset($data->service_blackout)&&($data->service_blackout=='1'))?'Yes':'No';
				$bclass = (isset($data->service_blackout)&&($data->service_blackout=='1'))?'bg-light':'';
				$service_date = (isset($data->service_date))?$data->service_date:'';
				$time_from = (isset($data->time_from))?$data->time_from:'';
				$time_to = (isset($data->time_to))?$data->time_to:'';
				$balance = (isset($data->balance))?$data->balance:'';
				$html .= '<tr class="'.$bclass.'"><td>'.$service_date.'</td><td>'.$time_from.' - '.$time_to.'</td><td>'.$balance.'</td><td>'.$blackout.'</td></tr>';
			}
		}
		$html .= '</tbody></table></div>';
		echo $html;
	}	 
}
