<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
 public function __construct() {
       parent::__construct();
	   $this->data=array();
    }
	
	public function index() 
	{
		$this->load->view('contact-us');
	}
	
	public function sendmail() 
	{
		$site_url = 'https://encalm.com/';
		
		$headers = "";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n". 'From: Encalm <info@encalm.com>'; 
		if(isset($_REQUEST['frmdepartment'])&&($_REQUEST['frmdepartment']=='Reservation')) {
			$to = 'guest.services@encalm.com';
		}
		else if(isset($_REQUEST['frmdepartment'])&&($_REQUEST['frmdepartment']=='Marketing')) {
			$to = 'marketing@encalm.com';
		}
		else if(isset($_REQUEST['frmdepartment'])&&($_REQUEST['frmdepartment']=='Careers')) {
			$to = 'careers@encalm.com';
		}
		else {
			$to = 'sales@encalm.com';
		}
		$subject = "Encalm Contact Form Inquiry";	
		$varOutput ="";
		$varOutput .= '<table>';
		$varOutput .= '<tr><td colspan="2" valign="top" ><a href="'.$site_url.'"><img src="'.$site_url.'/assets/image/Encalm-Logo-Primary.png" style="height:100px;" alt="" border="0" /></a></td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2">This is a response sent by '.$_REQUEST['frmname'].' using the Contact Us form on the website. The details of the Form follow below:</td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
		$varOutput .= '<tr><td valign="top" width="20%">Name:</td><td>'.$_REQUEST['frmname'].'</td></tr>';
		$varOutput .= '<tr><td valign="top" width="20%">Email:</td><td>'.$_REQUEST['frmemail'].'</td></tr>';	
		$varOutput .= '<tr><td valign="top" width="20%">Phone:</td><td>'.$_REQUEST['frmphone'].'</td></tr>';	
		$varOutput .= '<tr><td valign="top" width="20%">Department:</td><td>'.$_REQUEST['frmdepartment'].'</td></tr>';	
		$varOutput .= '<tr><td valign="top" width="20%">Message:</td><td>'.nl2br($_REQUEST['frmmessage']).'</td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2"><b>Regards,</b></td></tr>';
		$varOutput .= '<tr><td valign="top" colspan="2"><b>Encalm Hospitality Pvt. Ltd.</b></td></tr>';
		$varOutput .= '</table>';	
		 
		//Client mail Format	
		/*$headers1  = 'MIME-Version: 1.0' . "\r\n";
		$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n". 'From:  Encalm <info@encalmhospitality.com'; 
		$to1 = $_REQUEST['frmemail'];
		$varOutput1 .= '<table>';
		$varOutput1 .= '<tr><td colspan="2" valign="top" ><a href="'.$site_url.'"><img src="'.$site_url.'/assets/img/logo.png" alt="" style="height:100px;" border="0" /></a></td></tr>';
		$varOutput1 .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
		$varOutput1 .= '<tr><td valign="top" colspan="2">Thank you for contacting us.<br />Your inquiry has been directed to the appropriate personnel and you will receive a response shortly.</td></tr>';
		$varOutput1 .= '<tr><td valign="top" colspan="2">&nbsp;</td></tr>';
		$varOutput1 .= '<tr><td valign="top" colspan="2"><b>Regards,</b></td></tr>';
		$varOutput1 .= '<tr><td valign="top" colspan="2"><b>Encalm Hospitality Pvt. Ltd.</b></td></tr>';
		$varOutput1 .= '</table>';*/
		
		mail($to,$subject,$varOutput,$headers);
		//@mail($to1,$subject,$varOutput1,$headers1);
		echo $msg='Thank you for your inquiry. We will respond to you shortly.';	
		//$this->load->view('contact-us');
	}
}
