<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paynow extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
	   $this->data=array();
	   set_time_limit(500);
	   
    }
	
	public function index() 
	{
		//check_login_user();
 		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4)));
        //$id = htmlentities($this->uri->segment(4)); 
		
		//$booking_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
		
		//Commenting Temp 06/2/23
		$orderinfo = $this->db->query("select * from tbl_booking where o_order_id=$id")->row();
		if($orderinfo) {
			$booking_id = $orderinfo->id;
		}
		else {
			$booking_id = '';
		}
		$array = array(
			'id'=>$id, 
		); 
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_info',$array);
		$adata =  json_decode($this->data['datalist']);
		$mainData = $adata->mainData;
		
		$o_id = !empty($mainData->datalist[0]->partner_id[0])?$mainData->datalist[0]->partner_id[0]:0;

		$userresult = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_customer_details',array('id'=>$o_id));
		
		$userdata = json_decode($userresult);
		$this->data['userdata']=$userdata->datalist[0];
		$this->data['o_booking_id']=$id;
		$this->data['booking_id']=$booking_id;
		
		$date_order = $mainData->datalist[0]->date_order;
		$bookingdatetime = $date_order;
		$data_origin = $mainData->datalist[0]->origin;
		$airport_terminal_id = $mainData->datalist[0]->airport_terminal_id[1];
	//	$breakup_6hours_plus = date("Y-m-d H:i:s", strtotime('+6 hours'), strtotime($date_order));
		
		//Commented below 
// 		$breakup_6hours_plus = date('Y-m-d H:i:s',strtotime("$date_order +6 hours"));

        // $breakup_6hours_plus = date('Y-m-d H:i:s',strtotime("$date_order +10 hours"));
		$breakup_6hours_plus = date('Y-m-d H:i:s',strtotime("$date_order +12 hours"));
		
		
		$commitment_date = $mainData->datalist[0]->commitment_date;
		$state = $mainData->datalist[0]->state;
		$breakup_2hours_minus = date('Y-m-d H:i:s',strtotime("$commitment_date -3 hours"));
		$breakup_3hours_minus = date('Y-m-d H:i:s',strtotime("$commitment_date -7 hours")); 
		$currentdatetime = date('Y-m-d H:i:s');
		$service_type_id = $mainData->datalist[0]->service_type_id[1];
		
		
		if ($data_origin=='yes'){
		  //  echo "data_origin $data_origin";
		
    		if ($breakup_6hours_plus < $currentdatetime ){
    		    $this->data['bookdone'] = 1;
    		   
    		  
    		}
    		else if (($airport_terminal_id=='Domestic') &&($breakup_2hours_minus < $currentdatetime )){
    		 $this->data['bookdone'] = 1;
    // 		 die("Reason of die is breakup_2hours_minus $breakup_2hours_minus");
    // 		 exit();
    		 
    		}
    
             else if (($airport_terminal_id=='International') &&($breakup_3hours_minus < $currentdatetime )){
    		 $this->data['bookdone'] = 0;
    // 		 die("Reason of die is breakup_2hours_minus $breakup_2hours_minus");
    // 		 exit();
    		 
    		}
	
    		else if($bookingdatetime > $currentdatetime) {
    			$this->data['bookdone'] = 1;
    // 			die("Reason of die is $bookingdatetime > $currentdatetime");
    // 			exit();
    		}
    		else if($state=='cancel')
    		{
    		    
    		  $this->data['bookdone'] = 1;  
    // 		  die("Reason of die is $state=='cancel'");
    // 			exit();
    		}
    		else {
    			$this->data['bookdone'] = 1;
    		}
		}
		else if ($data_origin=='ok'){
		    //echo "data_origin $data_origin";
		
    // 		if ($breakup_6hours_plus < $currentdatetime ){
    // 		    $this->data['bookdone'] = 0;
    		   
    		  
    // 		}
    		if (($airport_terminal_id=='Domestic') &&($breakup_2hours_minus < $currentdatetime )){
    		 $this->data['bookdone'] = 1;
    // 		 die("Reason of die is breakup_2hours_minus $breakup_2hours_minus");
    // 		 exit();
    		 
    		}
    
             else if (($airport_terminal_id=='International') &&($breakup_3hours_minus < $currentdatetime )){
    		 $this->data['bookdone'] = 1;
    // 		 die("Reason of die is breakup_2hours_minus $breakup_2hours_minus");
    // 		 exit();
    		 
    		}
	
    		else if($bookingdatetime > $currentdatetime) {
    			$this->data['bookdone'] = 1;
    // 			die("Reason of die is $bookingdatetime > $currentdatetime");
    // 			exit();
    		}
    		else if($state=='cancel')
    		{
    		    
    		  $this->data['bookdone'] = 1;  
    // 		  die("Reason of die is $state=='cancel'");
    // 			exit();
    		}
    		else {
    			$this->data['bookdone'] = 1;
    		}
		}
		else{
		    if ($state=='cancel')
		    {
		       $this->data['bookdone'] = 1;  
		    //    echo "origin!=yes";
		      // die("Reason of die is $state=='cancel'");
		      // exit();
		    }
		    else if($bookingdatetime > $currentdatetime) {
    			$this->data['bookdone'] = 1;
    			//  echo "origin!=yes";
		      // die("$bookingdatetime > $currentdatetime");
		      // exit();
    		}
    	
    	    else {
    			$this->data['bookdone'] = 1;
    		}
		    
		}
		if($mainData->datalist[0]->booking_stage=="automated_invoice"){
		    $this->data['bookdone'] = 1;
		}
		    
		$this->data['data_origin'] = $data_origin;
		$this->data['airport_terminal_id'] = $airport_terminal_id;
		$this->data['breakup_6hours_plus'] = $breakup_6hours_plus;
		$this->data['commitment_date'] = $commitment_date;
		$this->data['breakup_2hours_minus'] = $breakup_2hours_minus;
		$this->data['breakup_3hours_minus'] = $breakup_3hours_minus;
		$this->data['state'] = $state;
		$this->data['currentdatetime'] = $currentdatetime;
		$this->data['service_type_id'] = $service_type_id;
		print_r($data);
		$this->load->view('atithya/paynow', $this->data );
		
	} 
	function sendpaymentlink()
	{
		$id = !empty($this->request->getPost( 'id' ))?$this->request->getPost( 'id' ):'';
		$arr =  array('id'=>$id);
		$datalist = curlPostRequest($COMPANY_API_KEY,$COMPANY_AGENT_CODE,'send_sale_order_payment_link',$arr);
		//print_r($datalist);
	}
	function confirmwithoutpayment()
	{
		$id = !empty($this->request->getPost( 'id' ))?$this->request->getPost( 'id' ):'';
		$arr =  array('id'=>$id,'payment_method'=>'on_credit','payment_id'=>'','order_id'=>'');
		$datalist = curlPostRequest($COMPANY_API_KEY,$COMPANY_AGENT_CODE,'confirm_sale_order',$arr);
		//print_r($datalist);
	}
 
}
