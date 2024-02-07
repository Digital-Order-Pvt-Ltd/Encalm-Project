<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
$ch = curl_init();

require_once APPPATH.'/libraries/ripcord-master/ripcord.php';
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
class Partners extends REST_Controller
{
 	
	private $usertype;
	private  $dataNotFound =array();
	function __construct() {
		parent::__construct();
		$this->load->model("api_m");
		$this->dataNotFound = array('status'=>'false','message'=>'data not found');
		 
		//$service = !empty($this->post("service"))?$this->post("service"):'';
	}
	
	/*Start Odoo Config Validation */	
	function odoo_validate()
	{
		
		$url = odoo_url;
		$common = ripcord::client("$url/xmlrpc/2/common");
		$uid = $common->authenticate(odoo_db, odoo_username, odoo_password, array());
		 return $uid;
		 
	}
	/*End Odoo Config Validation */	

	/*Start Odoo Search Read */	

	function call_odoo_api_search_read($model_name, $arrParam, $arrFields, $order_by)
	{
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");
			if($order_by == '')
				$datalist = $models->execute_kw(odoo_db, $uid, odoo_password, $model_name, 'search_read', array($arrParam), array('fields' => $arrFields));
			else
				$datalist = $models->execute_kw(odoo_db, $uid, odoo_password, $model_name, 'search_read', array($arrParam), array('fields' => $arrFields, 'order'=>$order_by));
			
			if ($datalist)
				$return = array('status'=>true, 'message'=>'data found.','datalist'=>$datalist);
			else 
				$return = array('status'=>true, 'message'=>'data not found.');
		}
		else
			 $return =array('status'=>false, 'message'=>'Invalid configuration.');

		return $return;
	}
	/*End Odoo Search Read */	

	/*Start Odoo Read */	

	function call_odoo_api_read($model_name, $arrParam)
	{
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");
			$datalist = $models->execute_kw(odoo_db, $uid, odoo_password, $model_name, 'read', array($arrParam));
			
			if ($datalist)
				$return = array('status'=>true, 'message'=>'data found.','datalist'=>$datalist);
			else 
				$return = array('status'=>true, 'message'=>'data not found.');
		}
		else
			 $return =array('status'=>false, 'message'=>'Invalid configuration.');

		return $return;
	}
	/*End Odoo Read */	
	
	/*Start Get Service Airport Data List */	
	function get_service_airport_post()
    {
		$arrParam = array();
		$category = !empty($this->post("category"))?$this->post("category"):'';

		$arrParam[] = array('ehpl_service_location', '=', 'yes');
		$arrParam[] = array('status', '=', 'active');
		$arrFields = array('id', 'name','airport_location_code_id','country_id','state_id');
		
		$order_by = 'name';
		
		$this->response($this->call_odoo_api_search_read('airport.location', $arrParam, $arrFields, $order_by), 200);
         
    }
    /*End Get Service Airport Data List */

    /*Start Get All Airport Data List */
	function get_all_airport_post()
    {
		$arrParam = array();

		$airport_id = !empty($this->post("airport_id"))?$this->post("airport_id"):'';

		$arrParam[] = array('status', '=', 'active');
		$arrParam[] = array('id', '!=', $airport_id);

		$arrFields = array('id', 'name','airport_location_code_id','country_id','state_id');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('airport.location', $arrParam, $arrFields, $order_by), 200);
    }
/*End Get All Airport Data List */

/*Start Get General Value Data List */
	function get_general_value_post()
    {
		$arrParam = array();
		$type = !empty($this->post("stype"))?$this->post("stype"):'';
		$arrParam[] = array('terminal_type', '=', $type);
		$arrFields = array('id','name','value','code');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('general.master', $arrParam, $arrFields, $order_by), 200);
         
    }
/*End Get General Value Data List */

/*Start Get Terminal By Airport Data List */
	function get_terminal_by_airport_post()
    {
		$arrParam = array();
		$airport_code = !empty($this->post("airport_code"))?$this->post("airport_code"):'';

		$arrParam[] = array('terminal_type', '=', 'TERMINAL');
		$arrParam[] = array('airport_location_id', '=', $airport_code);
		
		$arrFields = array('name','value','code');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('general.master', $arrParam, $arrFields, $order_by), 200);

    }
/*End Get Terminal By Airport Data List */

/*Start Get Flight Data List */
	function get_flight_list_post()
	{
		$arrParam = array();
		$category = !empty($this->post("category"))?$this->post("category"):'';
		$from_airport = !empty($this->post("from_airport"))?$this->post("from_airport"):'';
		$to_airport = !empty($this->post("to_airport"))?$this->post("to_airport"):'';
		$travel_date = !empty($this->post("travel_date"))?$this->post("travel_date"):'';


		$arrParam[] = array('airport_location_id', '=', $to_airport);
		//$arrParam[] = array('airline_id', '=', $category);
		
		$arrFields = array('id','flight_name','arrival_time','departure_time','airline_id','arrival_term','departure_term');

		$order_by = 'flight_name';

		$this->response($this->call_odoo_api_search_read('flight.flight', $arrParam, $arrFields, $order_by), 200);

	}	
/*End Get Flight Data List */

/*Start Get Product Data List */
	function get_product_list_meet_greet_post()
    {
		$arrParam = array();
		$category = !empty($this->post("category"))?$this->post("category"):'';
		$sector = !empty($this->post("sector"))?$this->post("sector"):'';
		$airport_code = !empty($this->post("airport_code"))?$this->post("airport_code"):'';
		$travel_date = !empty($this->post("travel_date"))?$this->post("travel_date"):'';
		$service_time = !empty($this->post("service_time"))?$this->post("service_time"):'';
		$basetype = !empty($this->post("basetype"))?$this->post("basetype"):'';
		$product_id = !empty($this->post("product_id"))?$this->post("product_id"):'';

		$arrParam[] = array('sale_ok', '=', 'true');

		$arrParam[] = array('categ_id', 'like', 'Welcome and Assist');

		if($basetype == "Add-On")
			$arrParam[] = array('categ_id', 'like', $basetype);
		else
		{
			$arrParam[] = array('categ_id', 'like', $category);
			$arrParam[] = array('categ_id', 'like', $sector);
		}			
		
		$arrFields = array('id','name','list_price','categ_id','description','image_1920');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('product.template', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Product Data List */
	function get_product_details_post()
    {
		$arrParam = array();
		$id = !empty($this->post("id"))?$this->post("id"):'';

		$arrParam[] = array('id', '=', $id);

		$arrFields = array('id','name','list_price','categ_id','description','image_1920');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('product.product', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Product Data List */
	function get_product_variant_details_post()
    {
		
		$arrParam = array();
		$id = (int)(!empty($this->post("id"))?$this->post("id"):0);

		$arrParam[] = array('product_tmpl_id', '=', $id);

		$arrFields = array('id','name','lst_price','categ_id','description','product_template_variant_value_ids');

		$order_by = 'name';
		
		//'variant';
		
		$responselist =$this->call_odoo_api_search_read('product.product', $arrParam, $arrFields, $order_by);
		
		echo "Deepak";
		p($responselist);exit;

		$this->response($responselist, 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Product Data List */
	function get_product_attribute_value_post()
    {
		$arrParam = array();
		$id = (int)(!empty($this->post("id"))?$this->post("id"):0);

		$arrParam[] = array('id', '=', $id);

		$arrFields = array('id','name','display_name');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('product.template.attribute.value', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Product Data List */
	function get_customer_details_post()
    {
		$arrParam = array();
		$id = !empty($this->post("id"))?$this->post("id"):'';
		
		$arrParam[] = array('id', '=', $id);
	
		$arrFields = array('id','name','last_name','email','mobile','gender','dob','parent_id','parent_name', 'title');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('res.partner', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

 
 /* Start Register Customer Post */
	 function register_customer_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$first_name = !empty($this->post("first_name"))?$this->post("first_name"):'';
			$last_name = !empty($this->post("last_name"))?$this->post("last_name"):'';
			$email = !empty($this->post("email"))?$this->post("email"):'';
			$mobile = !empty($this->post("mobile"))?$this->post("mobile"):'';
			$gender = !empty($this->post("gender"))?$this->post("gender"):'';
			$dob = !empty($this->post("dob"))?$this->post("dob"):'';
			$parent_id = (int)(!empty($this->post("parent_id"))?$this->post("parent_id"):0);
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'create',
			array(array('name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'mobile'=>$mobile,'gender'=>$gender,'dob'=>$dob,'company_type'=>'person')));
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Register Customer Post */

/*Start Get Product Data List */
	function get_guest_details_post()
    {
		$arrParam = array();
		$parent_id = (int)(!empty($this->post("parent_id"))?$this->post("parent_id"):0);
		
		$arrParam[] = array('parent_id', '=', $parent_id);
	
		$arrFields = array('id','name','last_name','email','mobile','gender','dob','age','gov_id','passport','parent_id','parent_name','title');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('res.partner', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	


/*Start Get Product Data List */
	function get_salutation_post()
    {
		$arrParam = array();
	
		$arrFields = array('id','name');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('res.partner.title', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Country List */
	function get_country_post()
    {
		$arrParam = array();
	
		$arrFields = array('id','name');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('res.country', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Country List */	


 /* Start Register Customer Post */
	 function save_guest_details_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$title = !empty($this->post("title"))?$this->post("title"):'';
			$first_name = !empty($this->post("first_name"))?$this->post("first_name"):'';
			$last_name = !empty($this->post("last_name"))?$this->post("last_name"):'';
			$email = !empty($this->post("email"))?$this->post("email"):'';
			$mobile = !empty($this->post("mobile"))?$this->post("mobile"):'';
			$gender = !empty($this->post("gender"))?$this->post("gender"):'';
			$dob = !empty($this->post("dob"))?$this->post("dob"):'';
			$passport_no = !empty($this->post("passport_no"))?$this->post("passport_no"):'';
			$parent_id = (int)(!empty($this->post("parent_id"))?$this->post("parent_id"):0);
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'create',
			array(array('title'=>$title,'name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'mobile'=>$mobile,'gender'=>$gender,'dob'=>$dob,'passport'=>$passport_no,'parent_id'=>$parent_id,'company_type'=>'person')));
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Register Customer Post */


 /* Start Register Customer Post */
	 function modify_guest_details_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$id = (int)(!empty($this->post("id"))?$this->post("id"):0);
			$title = !empty($this->post("title"))?$this->post("title"):'';
			$first_name = !empty($this->post("first_name"))?$this->post("first_name"):'';
			$last_name = !empty($this->post("last_name"))?$this->post("last_name"):'';
			$email = !empty($this->post("email"))?$this->post("email"):'';
			$mobile = !empty($this->post("mobile"))?$this->post("mobile"):'';
			$gender = !empty($this->post("gender"))?$this->post("gender"):'';
			$dob = !empty($this->post("dob"))?$this->post("dob"):'';
			$passport_no = !empty($this->post("passport_no"))?$this->post("passport_no"):'';
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'write',
			array(array($id)), 
			array(array('title'=>$title,'name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'mobile'=>$mobile,'gender'=>$gender,'dob'=>$dob,'passport'=>$passport_no,'company_type'=>'person')));

			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data updated.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not updated.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Register Customer Post */

 /* Start Register Customer Post */
	 function delete_guest_details_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$id = (int)(!empty($this->post("id"))?$this->post("id"):0);
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'unlink', array(array($id)));

			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data deleted.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not deleted.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Register Customer Post */


 /* Start Sale Order Parent Post */
	 function save_sale_order_parent_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$partner_id = (int)(!empty($this->post("partner_id"))?$this->post("partner_id"):0);
			$date_order = !empty($this->post("date_order"))?$this->post("date_order"):'';
			$airport_location_id = (int)(!empty($this->post("airport_location_id"))?$this->post("airport_location_id"):0);
			$commitment_date = !empty($this->post("commitment_date"))?$this->post("commitment_date"):'';
			$airport_terminal_id = (int)(!empty($this->post("airport_terminal_id"))?$this->post("airport_terminal_id"):0);
			$flight_id = (int)(!empty($this->post("flight_id"))?$this->post("flight_id"):0);
			$airline_id = (int)(!empty($this->post("airline_id"))?$this->post("airline_id"):0);

			$selected_service = !empty($this->post("selected_service"))?$this->post("selected_service"):'';
			$arrival_time = !empty($this->post("arrival_time"))?$this->post("arrival_time"):'';
			$departure_time = !empty($this->post("departure_time"))?$this->post("departure_time"):'';
			$booking_made_from = !empty($this->post("booking_made_from"))?$this->post("booking_made_from"):'';
			$from_airport_id = (int)(!empty($this->post("from_airport_id"))?$this->post("from_airport_id"):0);
			$to_airport_id = (int)(!empty($this->post("to_airport_id"))?$this->post("to_airport_id"):0);
			$no_of_adult = (int)(!empty($this->post("no_of_adult"))?$this->post("no_of_adult"):0);
			$no_of_children = (int)(!empty($this->post("no_of_children"))?$this->post("no_of_children"):0);
			$no_of_infants = (int)(!empty($this->post("no_of_infants"))?$this->post("no_of_infants"):0);

			// $arrItems = array();
			// $arrItems[] = array(array(0, 0, {'product_id'=>12, 'product_uom_qty'=>1, 'price_unit'=>4000.00}), array(0, 0, array('product_id'=>23, 'product_uom_qty'=>2, 'price_unit'=>500.00)));
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'sale.order', 'create',
			array(array('partner_id'=>$partner_id,'date_order'=>$date_order,'airport_location_id'=>$airport_location_id,'commitment_date'=>$commitment_date,'airport_terminal_id'=>$airport_terminal_id,'flight_id'=>$flight_id,'airline_id'=>$airline_id,'selected_service'=>$selected_service,'arrival_time'=>$arrival_time,'departure_time'=>$departure_time,'booking_made_from'=>$booking_made_from,'from_airport_id'=>$from_airport_id,'to_airport_id'=>$to_airport_id,'no_of_adult'=>$no_of_adult,'no_of_children'=>$no_of_children,'no_of_infants'=>$no_of_infants,'itinerary_no'=>'111','class_type'=>'economy','pricelist_id'=>1)));
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Sale Order Parent Post */

 /* Start Sale Order Post */
	 function save_sale_order_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$partner_id = (int)(!empty($this->post("partner_id"))?$this->post("partner_id"):0);
			$date_order = !empty($this->post("date_order"))?$this->post("date_order"):'';
			$airport_location_id = (int)(!empty($this->post("airport_location_id"))?$this->post("airport_location_id"):0);
			$commitment_date = !empty($this->post("commitment_date"))?$this->post("commitment_date"):'';
			$airport_terminal_id = (int)(!empty($this->post("airport_terminal_id"))?$this->post("airport_terminal_id"):0);
			$flight_id = (int)(!empty($this->post("flight_id"))?$this->post("flight_id"):0);
			$airline_id = (int)(!empty($this->post("airline_id"))?$this->post("airline_id"):0);

			$selected_service = !empty($this->post("selected_service"))?$this->post("selected_service"):'';
			$arrival_time = !empty($this->post("arrival_time"))?$this->post("arrival_time"):'';
			$departure_time = !empty($this->post("departure_time"))?$this->post("departure_time"):'';
			$booking_made_from = !empty($this->post("booking_made_from"))?$this->post("booking_made_from"):'';
			$from_airport_id = (int)(!empty($this->post("from_airport_id"))?$this->post("from_airport_id"):0);
			$to_airport_id = (int)(!empty($this->post("to_airport_id"))?$this->post("to_airport_id"):0);
			$no_of_adult = (int)(!empty($this->post("no_of_adult"))?$this->post("no_of_adult"):0);
			$no_of_children = (int)(!empty($this->post("no_of_children"))?$this->post("no_of_children"):0);
			$no_of_infants = (int)(!empty($this->post("no_of_infants"))?$this->post("no_of_infants"):0);
			
			//$arrItems = array(array(0, 0, {'product_id'=>879, 'product_uom_qty'=>1, 'price_unit'=>4000.00}), array(0, 0, array('product_id'=>860, 'product_uom_qty'=>2, 'price_unit'=>500.00)));
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'sale.order', 'create',
			array(array('partner_id'=>$partner_id,'date_order'=>$date_order,'airport_location_id'=>$airport_location_id,'commitment_date'=>$commitment_date,'airport_terminal_id'=>$airport_terminal_id,'flight_id'=>$flight_id,'airline_id'->$airline_id,'selected_service'=>$selected_service,'arrival_time'=>$arrival_time,'departure_time'=>$departure_time,'booking_made_from'=>$booking_made_from,'from_airport_id'=>$from_airport_id,'to_airport_id'=>$to_airport_id,'no_of_adult'=>$no_of_adult,'no_of_children'=>$no_of_children,'no_of_infants'=>$no_of_infants,'itinerary_no'=>'111','class_type'=>'Economy','pricelist_id'=>'1','total_guest'=>'1')));
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Sale Order Parent Post */

 /* Start Sale Order Items Post */
	 function save_sale_order_item_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$order_id = (int)(!empty($this->post("order_id"))?$this->post("order_id"):0);
			$product_id = (int)(!empty($this->post("product_id"))?$this->post("product_id"):0);
			$name = !empty($this->post("name"))?$this->post("name"):'';
			$product_uom_qty = !empty($this->post("product_uom_qty"))?$this->post("product_uom_qty"):'';
			//$product_uom = !empty($this->post("product_uom"))?$this->post("product_uom"):'';
			$price_unit = !empty($this->post("price_unit"))?$this->post("price_unit"):'';
			$price_subtotal = !empty($this->post("price_subtotal"))?$this->post("price_subtotal"):'';
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'sale.order.line', 'create',
			array(array('order_id'=>$order_id,'product_id'=>$product_id,'name'=>$name, 'product_uom_qty'=>$product_uom_qty, 'price_unit'=>$price_unit,'price_subtotal'=>$price_subtotal)));

			
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Sale Order Items Post */

/*Start Get Product Data List */
	function get_sale_order_details_post()
    {
		$arrParam = array();
		$id = (int)(!empty($this->post("id"))?$this->post("id"):0);
		$partner_id = (int)(!empty($this->post("partner_id"))?$this->post("partner_id"):0);

		if($id > 0)
			$arrParam[] = array('id', '=', $id);	
		else
			$arrParam[] = array('partner_id', '=', $partner_id);	
		
		$arrFields = array('partner_id','date_order','airport_location_id','commitment_date','airport_terminal_id','flight_id','airline_id','selected_service','arrival_time','departure_time','booking_made_from','from_airport_id','to_airport_id','no_of_adult','no_of_children','no_of_infants','itinerary_no','class_type','pricelist_id');

		$order_by = '';

		$this->response($this->call_odoo_api_search_read('sale.order', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

/*Start Get Product Data List */
	function get_sale_order_list_by_gso_post()
    {
		$arrParam = array();
		$id = (int)(!empty($this->post("gso_id"))?$this->post("gso_id"):0);
		
		$arrFields = array('partner_id','date_order','airport_location_id','commitment_date','airport_terminal_id','flight_id','airline_id','selected_service','arrival_time','departure_time','booking_made_from','from_airport_id','to_airport_id','no_of_adult','no_of_children','no_of_infants','itinerary_no','class_type','pricelist_id','gso_ids');

		$order_by = '';

		$this->response($this->call_odoo_api_search_read('sale.order', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	

 
 /* Start Register Customer Post */
	 function save_sale_guest_post()
	 {
		$uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$pnr_no = !empty($this->post("pnr_no"))?$this->post("pnr_no"):'';
			$first_name = !empty($this->post("first_name"))?$this->post("first_name"):'';
			$last_name = !empty($this->post("last_name"))?$this->post("last_name"):'';
			$email = !empty($this->post("email"))?$this->post("email"):'';
			$mobile = !empty($this->post("mobile"))?$this->post("mobile"):'';
			$gender = !empty($this->post("gender"))?$this->post("gender"):'';
			$dob = !empty($this->post("dob"))?$this->post("dob"):'';
			$age = !empty($this->post("age"))?$this->post("age"):'';
			$order_id = !empty($this->post("order_id"))?$this->post("order_id"):'';
			$partner_id = !empty($this->post("partner_id"))?$this->post("partner_id"):'';
			
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");

			$datalist =  $models->execute_kw(odoo_db, $uid, odoo_password,
			'sale_guest', 'create',
			array(array('name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'mobile'=>$mobile,'gender'=>$gender,'dob'=>$dob,'age'=>$age,'order_id'->$order_id,'parent_id'->$parent_id,'pnr_no'=>$pnr_no)));
			if ($datalist) 
			{
				$this->response(array('status'=>true, 'message'=>'data added.','id'=>$datalist), 200);
			}
			else 
			{
				 $this->response(array('status'=>true, 'message'=>'data not added.'), 200);
			}
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
	 }
 /* End Register Customer Post */


/*Start Get Discount Coupon List */
	function get_discount_coupon_post()
    {
		$arrParam = array();
		$cust_id = !empty($this->post("cust_id"))?$this->post("cust_id"):'';

		$arrParam[] = array('id', '=', 1);
		
		$arrFields = array('id','name','promo_code','rule_date_from','rule_date_to','discount_type','discount_percentage','rule_minimum_amount','discount_max_amount');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('coupon.program', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	


/*Start Get Discount Coupon List */
	function get_discount_coupon_by_code_post()
    {
		$arrParam = array();
		$cust_id = !empty($this->post("cust_id"))?$this->post("cust_id"):'';
		$promo_code = !empty($this->post("promo_code"))?$this->post("promo_code"):'';

		$arrParam[] = array('promo_code', '=', $promo_code);
		
		$arrFields = array('id','name','promo_code','rule_date_from','rule_date_to','discount_type','discount_percentage','rule_minimum_amount','discount_max_amount');

		$order_by = 'name';

		$this->response($this->call_odoo_api_search_read('coupon.program', $arrParam, $arrFields, $order_by), 200);
         
    }
 /*End Get Product Data List */	



 function update_sample_post()
 {
	  $uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$id = !empty($this->post("id"))?$this->post("id"):0;
			$name = !empty($this->post("name"))?$this->post("name"):'';
			$phone = !empty($this->post("phone"))?$this->post("phone"):'';
			$mobile = !empty($this->post("mobile"))?$this->post("mobile"):'';
			$email = !empty($this->post("email"))?$this->post("email"):'';
			$website = !empty($this->post("website"))?$this->post("website"):'';
			$zip = !empty($this->post("zip"))?$this->post("zip"):'';
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");
			 $datalist = $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'search',
			array(array(array('id', '=', $id))));
			if(!empty($datalist[0]))
			{
				$models->execute_kw(odoo_db, $uid, odoo_password, 'res.partner', 'write',
				  array(array($MMID_Data[0]),array('name'=>$name,'phone'=>$phone,'mobile'=>$mobile,'email'=>$email,'website'=>$website,"zip"=>$zip)));
				 
				$MMID_Data = $models->execute_kw(odoo_db, $uid, odoo_password,
				'res.partner', 'name_get', array(array($datalist[0])));
				$this->response(array('status'=>true, 'message'=>'data updated .'), 200);
			}
			else
			{
				 
				$this->response(array('status'=>true, 'message'=>'data not updated.'), 200);
			} 
			 
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
 }
 function delete_sample_post()
 {
	  $uid =$this->odoo_validate();
		if(!empty($uid) and (int)$uid and $uid > 0)
		{
			$id = !empty($this->post("id"))?$this->post("id"):0;
			 
			$models = ripcord::client(odoo_url."/xmlrpc/2/object");
			 $datalist = $models->execute_kw(odoo_db, $uid, odoo_password,
			'res.partner', 'search',
			array(array(array('id', '=', $id))));
			if(!empty($datalist[0]))
			{
				$models->execute_kw(odoo_db, $uid, odoo_password,
				'res.partner', 'unlink',
				array(array($datalist[0])));
				 
				$MMID_Data = $models->execute_kw(odoo_db, $uid, odoo_password,
				'res.partner', 'name_get', array(array($datalist[0])));
				$this->response(array('status'=>true, 'message'=>'data deleted .'), 200);
			}
			else
			{
				 
				$this->response(array('status'=>true, 'message'=>'data not deleted.'), 200); 
			} 
			 
		}
		else
		{
			 $this->response(array('status'=>false, 'message'=>'Invalid configuration.'), 200);
		}
 }
}	