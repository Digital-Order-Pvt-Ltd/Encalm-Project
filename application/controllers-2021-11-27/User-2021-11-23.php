<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 public function __construct() {
       parent::__construct();
       //check_login_user();
    }
	 
	 
	
	public function myprofile() {  
		$this->load->view('profile');
	}
	
	public function mybooking() {
		 
		$this->load->view('booking');
	} 
	public function myguest() {
		 
		$this->load->view('guest');
	}
	public function changepassword() {
		 
		$this->load->view('change-password');
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
				
				  $sql  =  "SELECT *, DATE_FORMAT(dob,'%d-%b-%Y') as date_of_birth FROM `tbl_users` WHERE    password='".md5($password)."' and emailid = '".$username."' LIMIT 0,1";
				$school  =  $this->db->query($sql)->row();
			//p($school);exit;
		  if(!empty($school))
		  {
			  
			  
                   $data = array(
                        'customer_id' => $school->id,
                        'o_id' => $school->o_id,
                        'first_name' => $school->first_name,
                        'last_name' => $school->last_name,
                        'emailid' => $school->emailid,
                        'mobile' => $school->mobile,
                        'gender' => $school->gender,
                        'dob' => $school->date_of_birth,
                        'country' => $school->country,
                        'title' => $school->title,
                        'status' => $school->status
                    );
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
		'mobile'=>!empty($this->input->post( 'mobile' ))?$this->input->post( 'mobile' ):'',
		'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
		'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
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
				//p($array);
				$datalist = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'register_customer',$array);
				$json_decode =  json_decode($datalist);
				
			}							
	  
	 // p($json_decode);exit;
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
					'password'=>!empty($this->input->post( 'mobile' ))?md5($this->input->post('mobile')):md5('123456'),
					'gender'=>!empty($this->input->post( 'gender' ))?$this->input->post( 'gender' ):'',
					'status'=>'Active',
					'dob'=>!empty($this->input->post( 'dob' ))?date('Y-m-d',strtotime($this->input->post( 'dob' ))):'',
					'o_id'=>!empty($json_decode->id)?$json_decode->id:0
					);	
					if(!empty($usercheck->id) and (int) $usercheck->id and  $usercheck->id > 0)
						{
							$this->session->set_flashdata("success", "Customer already added.");
							$this->db->update('tbl_users',$array_1,array('id' => $usercheck->id));
							redirect(base_url('home/confirm'));
						}
						else
						{
							$this->session->set_flashdata("success", "Customer added successfully.");
							 
							$this->db->insert('tbl_users',$array_1);
							redirect(base_url('home/confirm'));
						}
					
					
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
function get_your_guest_list()
{
		$session_customer_data = !empty($this->session->userdata("s_customer_data"))?$this->session->userdata("s_customer_data"):array();
		$guest_array = array('parent_id'=>$session_customer_data['o_id']);
		$this->data['gusetdata'] = curlPostRequest(COMPANY_API_KEY,COMPANY_AGENT_CODE,'get_guest_details',$guest_array);
		
		echo $this->load->view('ajax_guest_list', $this->data, TRUE );
}	
	function logout()
	{
	   $this->session->sess_destroy();
       redirect(base_url('user/login'));
    }
}
