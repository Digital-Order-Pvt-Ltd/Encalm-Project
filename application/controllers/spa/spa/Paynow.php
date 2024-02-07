<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paynow extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
	   $this->data=array();
	   
    }
	
	public function index() 
	{
		//check_login_user();
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(4))); 
		//$booking_id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(5))); 
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
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		$adata =  json_decode($this->data['datalist']);
		$mainData = $adata->mainData;
		$o_id = $mainData->datalist[0]->partner_id[0];
		$userresult = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_customer_details',array('id'=>$o_id));
		$userdata = json_decode($userresult);
		$this->data['userdata']=$userdata->datalist[0];
		$this->data['o_booking_id']=$id;
		$this->data['booking_id']=$booking_id;
		$date_order = $mainData->datalist[0]->date_order;
		$bookingdatetime = date('Y-m-d H:i:s', strtotime('+2400 hours', strtotime($date_order)));
		$currentdatetime = date('Y-m-d H:i:s');
		//exit();
		if($bookingdatetime > $currentdatetime) {
			$this->data['bookdone'] = 1;
		}
		else {
			$this->data['bookdone'] = 0;
		}
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
