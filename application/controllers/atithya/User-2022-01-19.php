<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
	   $this->data=array();
    }
	 
	 
	
	public function myprofile() {

		check_login_user();
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
	    $customer_id= !empty($session_customer_data['customer_id'])?$session_customer_data['customer_id']:0;
	    $o_id= !empty($session_customer_data['customer_id'])?$session_customer_data['o_id']:0;
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
		$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
		
		$this->data['localuserdata']=$this->db->query("select * from tbl_users where id=$customer_id")->row();
		$this->data['countrycode'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_general_value',array('stype'=>'COUNTRY CODE'));
		$this->data['serveruserdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_customer_details',array('id'=>$o_id));
		if($_POST)
		{
			
		$array = array(
		'title'=> !empty($this->input->post( 'title' ))?$this->input->post( 'title' ):0,
		'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
		'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
		'emailid'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
		'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
		'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
		'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
		'country'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):0,
		'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
		
		'address'=>!empty($this->input->post( 'address' ))? $this->input->post( 'address'):'',
		'city'=>!empty($this->input->post( 'city' ))?$this->input->post( 'city' ):'',
		'state'=>!empty($this->input->post( 'state' ))?$this->input->post( 'state' ):'',
		'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
		'pincode'=>!empty($this->input->post( 'pincode' ))?$this->input->post( 'pincode' ):''
		);
		$this->db->update('tbl_users',$array, array('id'=>$customer_id));
			if(!empty($o_id) and $o_id > 0)
			{
			}
			$this->session->set_flashdata("success", "User profile update successfully.");
			redirect(base_url("user/myprofile"));
		}
		else
		{
		$this->load->view('profile',$this->data);
		}
	}
	
	public function mybooking() 
	{
		check_login_user();
		 $session_customer_data = !empty( $this->session->userdata('s_customer_data'))? $this->session->userdata('s_customer_data'):array();
		$array = array(
		'partner_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0, 
		); 
		//p($array);
$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_list_by_partner',$array);
		//p($this->data['datalist']); 
		 
		$this->load->view('booking-list', $this->data );
	} 
	public function bookingdetail() {
		check_login_user();
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		if(!empty($id) and (int) $id and $id >0)
		{
			$array = array(
			'id'=>$id, 
		); 
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_sale_order_details_by_gso',$array);
		$this->load->view('booking', $this->data );
		}
		else
		{
			redirect(base_url('user/mybooking'));
		}
		
		
		}
 
 function booking_cancel()
	{
		check_login_user();
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_booking_cancel_request',array("id"=>$id));
		$this->db->query("update tbl_booking set status='2' where o_order_id=$id");
		$this->session->set_flashdata("success", "Booking cancel successfully.");
		redirect(base_url('user/bookingdetail/'.$id));
	}
function booking_confirm()
	{
		check_login_user();
		$id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
		curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'confirm_sale_order',array("id"=>$id));
		$this->db->query("update tbl_booking set status='1' where o_order_id=$id");
		$this->session->set_flashdata("success", "Booking cancel successfully.");
		redirect(base_url('user/bookingdetail/'.$id));
	}	
	public function myguest() 
	{
		
		 $session_customer_data = !empty( $this->session->userdata('s_customer_data'))? $this->session->userdata('s_customer_data'):array();
		
		$array = array(
		'parent_id'=>!empty($session_customer_data['o_id'])?$session_customer_data['o_id']:0, 
		); 
		
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
		//p($array);
		$this->data['datalist'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$array);
		//p($this->data['datalist']);exit;
		 $this->load->view('guest', $this->data );
		 
	}
	protected function rules_cpassword() {
		$rules = array(
				
				array(
					'field' => 'new_password',
					'label' => 'New Password',
					'rules' => 'trim|required|max_length[20]|min_length[6]'
				),
				array(
					'field' => 're_password',
					'label' => 'Confirm  Password',
					'rules' => 'trim|required|max_length[16]|min_length[6]|matches[new_password]'
				),
				array(
					'field' => 'old_password',
					'label' => 'Current  Password',
					'rules' => 'trim|required|max_length[20]|min_length[4]'
				)
			);
		return $rules;
	}
	public function changepassword() {
		check_login_user();
		 $this->load->library("session");
		if($_POST) {
			$rules = $this->rules_cpassword();
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('change-password', $this->data);
			} else {
				$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
				if(!empty($session_customer_data['o_id']) and !empty($this->input->post('new_password')))
				{
					curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'change_password',array("id"=>$session_customer_data['o_id'], "password"=>$this->input->post('new_password')));
				}
				if($this->Login_model->change_password() == TRUE) 
				{
					redirect(base_url('user/changepassword'));
				} 
				else 
				{
					redirect(base_url('user/changepassword'));
				}
			}
		} else {
			 
			$this->load->view('change-password', $this->data);
		}
		 
		 
	}
	public function checkout() {
		 
		$this->load->view('checkout-search');
	}
	
	public function login() 
	{
		if($_POST)
		{
			$loginfrom = !empty($this->input->post( 'loginfrom' ))?$this->input->post( 'loginfrom' ):'';
			$username = !empty($this->input->post( 'username' ))?$this->input->post( 'username' ):'';
			 $password = !empty($this->input->post( 'password' ))?($this->input->post( 'password' )):'';
			if(!empty($username) and !empty($password))
			{
				
				 /* $sql  =  "SELECT *, DATE_FORMAT(dob,'%d-%b-%Y') as date_of_birth, (YEAR(current_date()) - YEAR(dob)) as current_age FROM `tbl_users` WHERE    password='".md5($password)."' and emailid = '".$username."' LIMIT 0,1";
				$school  =  $this->db->query($sql)->row(); */
				
			$json_data	= curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_customer_login',array('password'=>$password,"username"=>$username));
			//p($school);exit;
			$login_array = json_decode($json_data);
			$datalist = !empty($login_array->datalist)?$login_array->datalist[0]:array();
		  if(!empty($datalist) and !empty($datalist->id))
		  {
			  //p($datalist);exit;
			    $sql  =  "SELECT *, DATE_FORMAT(dob,'%d-%b-%Y') as date_of_birth, (YEAR(current_date()) - YEAR(dob)) as current_age FROM `tbl_users` WHERE o_id = '".$datalist->id."'";
				$school  =  $this->db->query($sql)->row(); 
			  
                   /* $data = array(
                        'customer_id' => $school->id,
                        'o_id' => $school->o_id,
                        'full_name' => $school->first_name.' '.$school->last_name,
                        'first_name' => $school->first_name,
                        'last_name' => $school->last_name,
                        'emailid' => $school->emailid,
                        'mobile' => $school->mobile,
                        'gender' => $school->gender,
                        'dob' => $school->date_of_birth,
                        'country' => $school->country,
                        'title' => $school->title,
                        'current_age' => $school->current_age,
                        'status' => $school->status,
                        'country_code' => $school->country_code,
                        'pincode' => $school->pincode,
                        'state' => $school->state,
                        'city' => $school->city,
                        'address' => $school->address,
                        'user_login' => true
                    ); */
					$country_id = $datalist->country_id;
					$title = $datalist->title;
					$data = array(
                        'customer_id' => !empty($school->id)?$school->id:0,
                        'o_id' => $datalist->id,
                        'full_name' => $datalist->first_name.' '.$datalist->last_name,
                        'first_name' => $datalist->first_name,
                        'last_name' => $datalist->last_name,
                        'emailid' => $datalist->email,
                        'mobile' => $datalist->mobile,
                        'gender' => $datalist->gender,
                        'dob' => !empty($datalist->dob)?date('d-M-Y',strtotime($datalist->dob)):'',
                        'country' => !empty($country_id[1])?$country_id[1]:0,
                        'title' => !empty($title[1])?$title[1]:0,
                        'current_age' => getAge($datalist->dob),
                        'status' => 'Active',
                        'country_code' =>!empty($datalist->mobile)? substr($datalist->mobile, 0, 2):'91',
                        'pincode' => $datalist->zip,
                        'state' => !empty($datalist->state_id)?$datalist->state_id:0,
                        'city' => $datalist->city,
                        'address' => $datalist->street,
                        'user_login' => true
                    );
					//p($data);exit;
				$this->session->set_userdata('s_customer_data',$data ); 
				$this->session->set_flashdata("success", "That customer login successfully.");
				if($loginfrom=='Login')
				 redirect(base_url('home/index'));
				else
					redirect(base_url('home/confirm'));
			}
			else{
					  	 
					$this->session->set_flashdata("success", "Incorrect Login Credential.!");
				
				if($loginfrom=='Login')
				 redirect(base_url('user/login'));
				else
					redirect(base_url('home/confirm'));
					 
            }
		 
			}
		}
		else
		{
			$this->load->view('signin');
		}
		//$this->load->view('checkout-search');
	}
function adduser()
{
	//p($_POST);exit;
	if($_POST)
		{
			  
		$usercheck = $this->db->query("select * from tbl_users where emailid = '".$this->input->post( 'emailid' )."' or mobile  = '".$this->input->post( 'mobile' )."' ")->row();
									
		
		$array = array(
		'title'=> !empty($this->input->post( 'title' ))?$this->input->post( 'title' ):0,
		'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
		'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
		'email'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
		'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'country_code' ).$this->input->post( 'mobile' ):'',
		'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
		'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
		
		'address'=>!empty($this->input->post( 'address' ))? $this->input->post( 'address'):'',
		'city'=>!empty($this->input->post( 'city' ))?$this->input->post( 'city' ):'',
		'state'=>!empty($this->input->post( 'state' ))?$this->input->post( 'state' ):'',
		'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
		'pincode'=>!empty($this->input->post( 'pincode' ))?$this->input->post( 'pincode' ):'',
		'password'=>!empty($this->input->post( 'password' ))?$this->input->post( 'password' ):'',
		
		'country_id'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):0
		);
		if(!empty($usercheck->o_id) and (int) $usercheck->o_id and  $usercheck->o_id > 0)
			{
				$datalist = json_encode(array(
					"status"=>true,
					"message"=> "data updated.",
					"id"=>$usercheck->o_id
					)); 
				$json_decode =  json_decode($datalist);
				
				$this->session->set_flashdata("success", "Customer already added.");
			}
			else
			{
				
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'register_customer',$array);
				$json_decode =  json_decode($datalist);
				
			}							
	  //p($array);
	  //p($json_decode);exit;
	  if(!empty($json_decode))
	  {
		  if(!empty($json_decode->id) and (int) $json_decode->id  and $json_decode->id > 0)
				{
					 $array_1 = array(
					'title'=> !empty($this->input->post( 'title' ))?$this->input->post( 'title' ):0,
					'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
					'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
					'emailid'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
					'country'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):'',
					'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
					'password'=>!empty($this->input->post( 'password' ))?md5($this->input->post('password')):md5('123456'),
					'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
					'status'=>'Active',
					'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
					'address'=>!empty($this->input->post( 'address' ))? $this->input->post( 'address'):'',
					'city'=>!empty($this->input->post( 'city' ))?$this->input->post( 'city' ):'',
					'state'=>!empty($this->input->post( 'state' ))?$this->input->post( 'state' ):'',
					'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
					'pincode'=>!empty($this->input->post( 'pincode' ))?$this->input->post( 'pincode' ):'',
					'marketing_communication'=>!empty($this->input->post( 'marketing_communication' ))?$this->input->post( 'marketing_communication' ):'no',
					'terms_conditions'=>!empty($this->input->post( 'terms_conditions' ))?$this->input->post( 'terms_conditions' ):'no',
					'o_id'=>!empty($json_decode->id)?$json_decode->id:0
					);	
					if(!empty($usercheck->id) and (int) $usercheck->id and  $usercheck->id > 0)
						{
							$cust_id =  $usercheck->id;
							$this->db->update('tbl_users',$array_1,array('id' => $usercheck->id));
							redirect(base_url('home/confirm'));
							if(empty($this->input->post( 'create_order' )))
							{
							$this->session->set_flashdata("success", "Customer already added successfully.");	
							redirect(base_url('home/confirm'));
							}
						}
						else
						{
							
							 
							$this->db->insert('tbl_users',$array_1);
							$cust_id = $this->db->insert_id();
							
							if(empty($this->input->post( 'create_order' )))
							{
							$this->session->set_flashdata("success", "Customer added successfully.");	
							redirect(base_url('home/confirm'));
							}
						}
						
						/**** Create Order ***/
		if(!empty($this->input->post( 'create_order' )) and $this->input->post( 'create_order' )=='yes')
			{	
					
					 $sql  =  "SELECT *, DATE_FORMAT(dob,'%d-%b-%Y') as date_of_birth, (YEAR(current_date()) - YEAR(dob)) as current_age FROM `tbl_users` WHERE id=$cust_id";
						$school  =  $this->db->query($sql)->row();
					if(!empty($school))
					{
					$data = array(
                        'customer_id' => $school->id,
                        'o_id' => $school->o_id,
                        'full_name' => $school->first_name.' '.$school->last_name,
                        'first_name' => $school->first_name,
                        'last_name' => $school->last_name,
                        'emailid' => $school->emailid,
                        'mobile' => $school->mobile,
                        'gender' => $school->gender,
                        'dob' => $school->date_of_birth,
                        'country' => $school->country,
                        'title' => $school->title,
                        'current_age' => $school->current_age,
                        'status' => $school->status,
                        'country_code' => $school->country_code,
                        'pincode' => $school->pincode,
                        'state' => $school->state,
                        'city' => $school->city,
                        'address' => $school->address,
                        'user_login' => true
                    );
				$this->session->set_userdata('s_customer_data',$data );
					}
		
		
					$s_select_product_details = !empty($this->session->userdata("s_select_product_details"))?$this->session->userdata("s_select_product_details"):array();
					$arrival_time = !empty($this->session->userdata("s_doa"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrivalTime"):'';
				 
				$departure_time = !empty($this->session->userdata("s_DepartureTime"))?date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time"):date('Y-m-d',strtotime($this->session->userdata("s_doa"))).' '.$this->session->userdata("s_arrival_service_time");
				 
				$o_array = array(
				'partner_id'=>$json_decode->id,
				'date_order'=>gmdate("Y-m-d H:i:s"),
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
				'no_of_infants'=>!empty($this->session->userdata("s_infant"))?$this->session->userdata("s_infant"):0,
				'terminal_id'=>!empty($this->session->userdata("s_l_terminal_name"))?$this->session->userdata("s_l_terminal_name"):'',
				'length_stay'=>!empty($this->session->userdata("s_length_stay"))?$this->session->userdata("s_length_stay"):''
				);
				//p($o_array);
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_sale_order_parent',$o_array);
				 
				$json_decode_order =  json_decode($datalist);
				//p($json_decode);exit;
				$order_id=0;
				if(!empty($json_decode_order))
					{
					 if(!empty($json_decode_order->id) and (int) $json_decode_order->id  and $json_decode_order->id > 0)
						{
							$order_id=$json_decode_order->id;
							
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
							'customer_id'=>$cust_id,
							'o_id'=>$json_decode->id,
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
					}
					
					
					/**** End Create Order ***/
					
				}
				
		}
	}
}
function addguest()
{
	$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
	 //p($this->session->all_userdata());exit;
	 if(!empty($session_customer_data['o_id']))
	 {
			$array=array(
			//'title'=>!empty($this->input->post( 'g_title' ))?$this->input->post( 'g_title' ):'',
			'title'=>'',
			'first_name'=>!empty($this->input->post( 'g_first_name' ))?$this->input->post( 'g_first_name' ):'',
			'last_name'=>!empty($this->input->post( 'g_last_name' ))?$this->input->post( 'g_last_name' ):'',
			'email'=>!empty($this->input->post( 'g_email' ))?$this->input->post( 'g_email' ):'',
			'mobile'=>!empty($this->input->post( 'g_mobile' ))?$this->input->post( 'g_mobile' ):'',
			'gender'=>!empty($this->input->post( 'g_gender' ))?$this->input->post( 'g_gender' ):'',
			'dob'=>!empty($this->input->post( 'g_dob' ))?date('Y-m-d',strtotime($this->input->post( 'g_dob' ))):'',
			'passport_no'=>!empty($this->input->post( 'g_passport_no' ))?$this->input->post( 'g_passport_no' ):'',
			'parent_id'=>$session_customer_data['o_id']
			);
			//p($array);
			 $data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'save_guest_details',$array);
			
	 }
	 else
	 {
		$data = json_encode(array(
			"status"=>true,
			"message"=> "data not added."
			)); 
		 
	 }
	 echo $data;
}
function editguest()
{
	$id=!empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
	$title=!empty($this->input->post( 'guest_title' ))?$this->input->post( 'guest_title' ):0;
	$first_name=!empty($this->input->post( 'guest_fname' ))?$this->input->post( 'guest_fname' ):'';
	$last_name=!empty($this->input->post( 'guest_lname' ))?$this->input->post( 'guest_lname' ):'';
	$gender=!empty($this->input->post( 'guest_gender' ))?$this->input->post( 'guest_gender' ):'';
	$age=!empty($this->input->post( 'guest_age' ))?$this->input->post( 'guest_age' ):0;
	$passport_no=!empty($this->input->post( 'guest_passport' ))?$this->input->post( 'guest_passport' ):'';
	
	$email=!empty($this->input->post( 'guest_email' ))?$this->input->post( 'guest_email' ):'';
	$mobile=!empty($this->input->post( 'guest_mobile' ))?$this->input->post( 'guest_mobile' ):'';
	
	 
	
	$array = array(
	"id"=>$id,
	"title"=>$title,
	"first_name"=>$first_name,
	"last_name"=>$last_name,
	"gender"=>$gender,
	"passport_no"=>$passport_no,
	"email"=>$email,
	"mobile"=>$mobile,
	//'dob'=>date('Y-m-d H:i:s',strtotime("-$age years"))
	'dob'=>date('Y-m-d H:i:s',strtotime($age))
	);
	//p($array);
	echo $data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'modify_guest_details',$array);
	
		 
}
function removeguest()
{
	check_login_user();
	 $id = htmlentities(mysqli_real_escape_string($this->db->conn_id,$this->uri->segment(3))); 
	  curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'delete_guest_details',array("id"=>$id));
	  
	  $this->session->set_flashdata("success", "Guest Delete Successfully.");
 redirect(base_url("user/myguest"));
}
function deleteguest()
{
	$id=!empty($this->input->post( 'id' ))?$this->input->post( 'id' ):0;
	   $data = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'delete_guest_details',array("id"=>$id));
	//  p( $data);
	  $session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$guest_array = array('parent_id'=>$session_customer_data['o_id']);
		
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
		$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
		
		$this->data['gusetdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$guest_array);
		
		echo $this->load->view('ajax_guest_list', $this->data, TRUE );
}
function get_your_guest_list()
{
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$guest_array = array('parent_id'=>$session_customer_data['o_id']);
		
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
		$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
		
		$this->data['gusetdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$guest_array);
		
		echo $this->load->view('ajax_guest_list', $this->data, TRUE );
}	
	function logout()
	{
	   $this->session->sess_destroy();
	   return redirect()->to(base_url('user/login'));
       
    }

function apply_coupon()
{
	//check_login_user();
		$sale_id = !empty($this->input->post( 'sale_id' ))?$this->input->post( 'sale_id' ):0;
		$coupon_code = !empty($this->input->post( 'coupon_code' ))?$this->input->post( 'coupon_code' ):'';
	 
			$array = array(
			'sale_id'=>$sale_id,
			'coupon_code'=>$coupon_code	
		); 
		
	  echo $datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'apply_coupon',$array);
	  if(!empty($datalist))
	  {
		  $json_decode = json_decode($datalist);
		//  p($json_decode);
		  //p($json_decode->id->faultCode);
		  if($json_decode->id->faultCode==1)
		  {
		  $this->db->update('tbl_booking',array('coupon'=>$coupon_code),array('o_order_id'=>$sale_id));
		  }
	  }
}
	  
public function signup() 
	{
		$this->data['salutation'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_salutation',array());
			
			$this->data['country'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_country',array());
			
			$this->data['countrycode'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_general_value',array('stype'=>'COUNTRY CODE'));
			
			$this->data['statedata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_state',array('country_id'=>'India'));
		if($_POST)
		{
			$usercheck = $this->db->query("select * from tbl_users where emailid = '".$this->input->post( 'emailid' )."' or mobile  = '".$this->input->post( 'mobile' )."' ")->row();
	  if(empty($usercheck))
	  {
		$array = array(
		'title'=> !empty($this->input->post( 'title' ))?$this->input->post( 'title' ):0,
		'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
		'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
		'email'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
		'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'country_code' ).$this->input->post( 'mobile' ):'',
		'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
		'password'=>!empty($this->input->post( 'password' ))?$this->input->post( 'password' ):'',
		'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
		
		'address'=>!empty($this->input->post( 'address' ))? $this->input->post( 'address'):'',
		'city'=>!empty($this->input->post( 'city' ))?$this->input->post( 'city' ):'',
		'state'=>!empty($this->input->post( 'state' ))?$this->input->post( 'state' ):'',
		'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
		'pincode'=>!empty($this->input->post( 'pincode' ))?$this->input->post( 'pincode' ):'',
		'country_id'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):0
		);  
		
		$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'register_customer',$array);
		$json_decode =  json_decode($datalist); 
		if(!empty($json_decode))
			{
			if(!empty($json_decode->id) and (int) $json_decode->id  and $json_decode->id > 0)
				{
					$array_1 = array(
					'title'=> !empty($this->input->post( 'title' ))?$this->input->post( 'title' ):0,
					'first_name'=> !empty($this->input->post( 'first_name' ))?$this->input->post( 'first_name' ):'',
					'last_name'=>!empty($this->input->post( 'last_name' ))?$this->input->post( 'last_name' ):'',
					'emailid'=>!empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'',
					'country'=>!empty($this->input->post( 'country' ))?$this->input->post( 'country' ):'',
					'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
					'password'=>!empty($this->input->post( 'password' ))?md5($this->input->post('password')):md5('123456'),
					'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
					'status'=>'Active',
					'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
					'address'=>!empty($this->input->post( 'address' ))? $this->input->post( 'address'):'',
					'city'=>!empty($this->input->post( 'city' ))?$this->input->post( 'city' ):'',
					'state'=>!empty($this->input->post( 'state' ))?$this->input->post( 'state' ):'',
					'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):'',
					'pincode'=>!empty($this->input->post( 'pincode' ))?$this->input->post( 'pincode' ):'',
					'marketing_communication'=>!empty($this->input->post( 'marketing_communication' ))?$this->input->post( 'marketing_communication' ):'no',
					'terms_conditions'=>!empty($this->input->post( 'terms_conditions' ))?$this->input->post( 'terms_conditions' ):'no',
					'o_id'=>!empty($json_decode->id)?$json_decode->id:0
					);	
					$this->db->insert('tbl_users',$array_1);
					$cust_id = $this->db->insert_id();
					$this->session->set_flashdata("success", "Customer profile created successfully..");
				}
			}
			else
			{
				$this->session->set_flashdata("success", "Server side problem please contact to admin");
			}				
			redirect(base_url('user/login'));
		}
		else
		{
			$this->session->set_flashdata("success", "Customer already added.");
			redirect(base_url('user/login'));
		}
		}
		else
		{
			$this->load->view('signup',$this->data);
		}
		//$this->load->view('checkout-search');
	}
	  
	public function forgot() 
	{
		
		if($_POST)
		{
			$emailid = !empty($this->input->post( 'emailid' ))?$this->input->post( 'emailid' ):'';
			if(!empty($emailid))
			{
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'forgot_password',array('email'=>$emailid));
				$json_decode =  json_decode($datalist); 
				$message=!empty($json_decode->message)?$json_decode->message:'';
				if(!empty($json_decode->status) and $json_decode->status==true)
				{
					$this->session->set_flashdata("success",$message);
					redirect(base_url('user/thankyou'));
				}
				else
				{
					$this->session->set_flashdata("success",$message);
					redirect(base_url('user/forgot'));
				}
			}
			else
			{
				$this->session->set_flashdata("success", "Please Enter Emailid..");
				redirect(base_url('user/forgot'));
			}
			
		}
		else
		{
			$this->load->view('forgot');
		}
		
	}
	  
	public function thankyou() {
		$this->load->view('forgot_thankyou');
	}
}
