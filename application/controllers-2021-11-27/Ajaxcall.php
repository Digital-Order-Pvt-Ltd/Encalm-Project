<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxcall extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
    }
	 
function getApiDataList()
	{
		$requestData=decode_input_ajax();
		  
		$category = !empty($requestData['category'])?$requestData['category']:'Arrival';
		$MethodName =  !empty($requestData['MethodName'])?$requestData['MethodName']:'';
		$RequestType = !empty($requestData['RequestType'])?$requestData['RequestType']:''; 
		//p($requestData);
		
		 $array=array();
		 if($RequestType=='ArrivalAt')
		 {
			  
		 }
		 if($RequestType=='SectorList')
		 {
			  /* $array=array(
			  'type'=>'SECTOR'
			  ); */
			  $array = array(
		'category'=>'Arrival',
'sector'=>'Domestic',
'airport_code'=>'Indira Gandhi International Airport',
'travel_date'=>'2021-11-13',
'service_time'=>'14:00',
'basetype'=>'Base',
'product_id'=>0
		);
		 }
		 $data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,$MethodName,$array);
		echo $data;
	}
	 function getApiData()
	{
		
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		
		
		$MethodName = !empty($this->input->post( 'MethodName' ))?$this->input->post( 'MethodName' ):'';
		$RequestType = !empty($this->input->post( 'RequestType' ))?$this->input->post( 'RequestType' ):'';
		$category = !empty($this->input->post( 'category' ))?$this->input->post( 'category' ):'Arrival';
		$to_airport = !empty($this->input->post( 'to_airport' ))?$this->input->post( 'to_airport' ):'Arrival';
		$from_airport = !empty($this->input->post( 'from_airport' ))?$this->input->post( 'from_airport' ):'Arrival';
		$travel_date = !empty($this->input->post( 'travel_date' ))?date('Y-m-d',strtotime($this->input->post( 'travel_date' ))):'';
		$type = !empty($this->input->post( 'type' ))?$this->input->post( 'type' ):'';
		$coupon_code = !empty($this->input->post( 'coupon_code' ))?$this->input->post( 'coupon_code' ):'';
		$airport_id = !empty($this->input->post( 'airport_id' ))?$this->input->post( 'airport_id' ):0;
		
		
		 $array=array();
		 
		 if($RequestType=='ValidateCouponCode' and !empty($coupon_code) and !empty($session_customer_data['o_id']))
		 {
			  $array=array(
			  'cust_id'=>$category,
			  'promo_code'=>$coupon_code
			  );  
		 }
		 
		 if($RequestType=='ArrivalAt' || $RequestType=='DepartureFrom')
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
		 if($RequestType=='ArrivalFlightList' || $RequestType=='DepartureFlightList')
		 {
			    $array=array(
				'category'=>$category,
				'from_airport'=>$from_airport,
				'to_airport'=>$to_airport,
				'travel_date'=>$travel_date
			  ); 
			//  p($array);
		 }
		 if($RequestType=='SectorList')
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

	
	 
}
