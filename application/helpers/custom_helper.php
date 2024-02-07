<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	
	 
	if (!function_exists('check_login_user')) {
	    function check_login_user() {
	        $ci = get_instance();
			$session_customer_data = !empty($ci->session->userdata("s_customer_data"))?$ci->session->userdata("s_customer_data"):array();
	        if ($session_customer_data['user_login'] != TRUE) {
	            $ci->session->sess_destroy();
	            redirect(base_url('/user/login'));
	        }
	    }
	}
	if (!function_exists('check_login_users')) {
	    function check_login_users() {
	        $ci = get_instance();
			$session_customer_data = !empty($ci->session->userdata("s_customer_data"))?$ci->session->userdata("s_customer_data"):array();
	        if ($session_customer_data['user_login'] != TRUE) {
	            $ci->session->sess_destroy();
	            redirect('https://testweb.encalm.com/spa/user/login');
	        }
	    }
	}

 
	
	//-- current date time function
	if(!function_exists('current_datetime')){
	    function current_datetime(){        
	        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	        $date_time = $dt->format('Y-m-d H:i:s');      
	        return $date_time;
	    }
	}

	//-- show current date & time with custom format
	if(!function_exists('my_date_show_time')){
	    function my_date_show_time($date){       
	        if($date != ''){
	            $date2 = date_create($date);
	            $date_new = date_format($date2,"d M Y h:i A");
	            return $date_new;
	        }else{
	            return '';
	        }
	    }
	}

	//-- show current date with custom format
	if(!function_exists('my_date_show')){
	    function my_date_show($date){       
	        
	        if($date != ''){
	            $date2 = date_create($date);
	            $date_new = date_format($date2,"d M Y");
	            return $date_new;
	        }else{
	            return '';
	        }
	    }
	}
	
	if(!function_exists('getProcedureData')){
		function getProcedureData($sql){
			$ci= & get_instance();
			$stmt = $ci->db->conn_id->prepare($sql);
			$result = $stmt->execute();
			//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
	}
	
	 
	
	 	
	
 if(!function_exists('make_thumb')){
		function make_thumb($src, $dest, $desired_width, $desired_height) {

			echo $src."<br>".$dest."<br>".$desired_width."<br>".$desired_height;
			$source_image = imagecreatefromjpeg($src);
			 $width = imagesx($source_image);
			 $height = imagesy($source_image);
			echo $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
			
			imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
			
			imagejpeg($virtual_image, $dest);
		}
	}
 
if(!function_exists('dropdown_html')){
		function dropdown_html($data,$val,$option,$firstOption) {
					echo "<option value='0'>".$firstOption."</option>";
					if(!empty($data)){			
						foreach ($data as $value) {
							if($data[0]->$option!='')
							echo "<option value='".$value->$val."'>".$value->$option."</option>";
							
						}
					}
		}
}
if(!function_exists('dropdown_html_without_selected')){
	function dropdown_html_without_selected($data,$val,$option,$firstOption,$selected_id=null) {	
			if(!empty($data)){			
				foreach ($data as $value) {
					if($data[0]->$option!=''){
						$select = '';
						if(!empty($selected_id) and $selected_id==$value->$val){ $select = 'selected';}		
					echo "<option value='".$value->$val."' $select>".$value->$option."</option>";
					}	
				}
			}
	}
}
if(!function_exists('decode_input_ajax')){
		function decode_input_ajax(){
			$ci= & get_instance();
			$dataIn= $ci->input->post("requestData");
			return (array)json_decode($dataIn);
		}
}

if(!function_exists('json_encode_data'))
{
		function json_encode_data($array){
			$ci= & get_instance();
			return json_encode($array);
		}
}
if(!function_exists('p')){
		function p($arr){
			if(!empty($arr)){
			echo "<pre>";
			print_r($arr);
			echo "</pre>"; 
			}
		}
}
if(!function_exists('CustomQuery')){
		function CustomQuery($query){
			$ci= & get_instance();	
			$data = $ci->db->query($query)->result();
			return $data;
		}
	}

 
if(!function_exists('GetSessionValueBy')){
		function GetSessionValueBy($returntype){
			$ci= & get_instance();	
			$usersession = $ci->session->userdata($returntype);
			return !empty($usersession)?$usersession:'';
		}
	}	 
	if(!function_exists('SendEmail')){
		function SendEmail($to,$subject,$html,$from_emailid){
			include($_SERVER['DOCUMENT_ROOT'].'/class.phpmailer.php');
			$mail = new PHPMailer(true);  
			$mail->IsSMTP();                          
			$mail->CharSet = 'UTF-8';
			$mail->SMTPSecure = 'tls'; 
			$mail->SMTPAuth   = true;                   
			$mail->Port       = 587;                     
			$mail->Host       = "smtp.ionos.com";  
			//$mail->Username   = "deepak_srivastava@milendit.com";      
			$mail->Username   = "automailer@supportsights.com";     
			$mail->Password   = 'Univ0306!';
			//$mail->Password   = 'Milend100!';
			     			
			$mail->SMTPDebug = 0;
			$mail->From       = "automailer@supportsights.com"; 
			$mail->FromName   = "Support"; 
			//$to = "deepak@galaxyitechsolutions.com";
			//$to = "deepak.sri1000@gmail.com";
				 
				if(filter_var($to, FILTER_SANITIZE_EMAIL))
				{ 
					try {
						$mail->AddAddress($to);
						$mail->Subject  = $subject;
						$mail->AltBody    = ""; // optional, comment out and test
						$mail->WordWrap   = 80; // set word wrap
						$mail->MsgHTML($html);
						  
						$mail->IsHTML(true); // send as HTML
					
						if($mail->Send()){
						//echo $mail->ErrorInfo;
							//echo 'Message has been sent.';
						}else{
							//echo 'Message has not been  sent.';
						}
					} catch (phpmailerException $e) {
						echo $err= $e->errorMessage();
						
					}
					 
				} 
			
			 
		}
	}	
 
if(!function_exists('array_to_tree_recursive')){  
function array_to_tree_recursive($array, $parent_id = 0)
{
	$return = array();
	$arr = (array)$array;
    foreach($arr as $k => $v) {
		if ($v->replyto_comment_id == $parent_id) {
            $return[$k] = (array)$v; 
            $return[$k]['children'] = array_to_tree_recursive($array, $v->id);  
        }
    }

    return $return;
}
}  
if(!function_exists('curlPostRequest'))
{  
   function curlPostRequest($ApiKey,$AgentCode,$functionName,$ParamArr)
    {
        /* Endpoint */
         $url = COMPANY_API_URL.$functionName; 
        /* eCurl */
        $curl = curl_init($url);
        
		
 
        /* Set JSON data to POST */
        curl_setopt($curl, CURLOPT_POSTFIELDS, $ParamArr);
            
        /* Define content type */
		
	/* $header_array[] = 'Accept-Language: tr-TR,tr;q=0.8,en-US;q=0.5,en;q=0.3';
    $header_array[] = 'Connection: keep-alive';
    $header_array[] = 'Cache-Control: no-cache';

    $header_array[] = 'Pragma: no-cache';
//$header_array[] = 'Referer: https://example.com/post/'.$post_id;
    $header_array[] = 'X-Requested-With: XMLHttpRequest';
    $header_array[] = 'Content-Type: application/json';
    $header_array[] = "API-KEY: $ApiKey";
    $header_array[] = "AGENT-CODE: $AgentCode";
    
 curl_setopt($curl, CURLOPT_HTTPHEADER, $header_array); */
 
 
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type:multipart/form-data",
           
            
            "API-KEY: $ApiKey",
            "AGENT-CODE: $AgentCode"
        )); 
            
        /* Return json */
		  

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
        /* make request */
        $result = curl_exec($curl);
           
        /* close curl */
        curl_close($curl);
		 return $result;
    }

}
if(!function_exists('escapeJsonString'))
{ 	
	function escapeJsonString($value) 
	{
    $escapers =     array("\\n", "\\r", "\\t","\\/","\\\"","\\");
    $replacements = array("", "", "","/","\"");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
  }
}
if(!function_exists('escapeJsonString'))
{
 function cleanString($text) {
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}
}
if(!function_exists('getAge')){
function getAge($then) {
    $then_ts = strtotime($then);
    $then_year = date('Y', $then_ts);
    $age = date('Y') - $then_year;
    if(strtotime('+' . $age . ' years', $then_ts) > time()) 
		$age--;
    return $age;
}
}
 
if(!function_exists('decrypt_url')){
function decrypt_url($string) {

    $output = false;
 
    $secret_key = '66902373005915615';

    $secret_iv = '2456378494765434';

    $encrypt_method = 'aes-256-cbc';
 
    $key = hash('sha256', $secret_key);
 
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);

    return $output;
}
function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}
}
