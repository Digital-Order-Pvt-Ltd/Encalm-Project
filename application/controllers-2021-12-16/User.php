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
		'country_code'=>!empty($this->input->post( 'country_code' ))?$this->input->post( 'country_code' ):''
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
				
				  $sql  =  "SELECT *, DATE_FORMAT(dob,'%d-%b-%Y') as date_of_birth, (YEAR(current_date()) - YEAR(dob)) as current_age FROM `tbl_users` WHERE    password='".md5($password)."' and emailid = '".$username."' LIMIT 0,1";
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
                        'current_age' => $school->current_age,
                        'status' => $school->status,
                        'country_code' => $school->country_code,
                        'user_login' => true
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
					'password'=>!empty($this->input->post( 'password' ))?md5($this->input->post('password')):md5('123456'),
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
	'dob'=>date('Y-m-d H:i:s',strtotime("-$age years"))
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
	  

}
