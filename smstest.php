<?php


$url = "http://weberleads.in/http-api.php?username=PASCOA&password=123456&senderid=PASCOA&route=2&number=8875008100&message=Thank you for Registering with us. Welcome to Pasco Used Cars. Team Pasco&templateid="; 
	  
$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, $url );
echo '1';
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
echo '2';
curl_setopt( $ch, CURLOPT_HEADER, false );
echo '3';
$output = curl_exec( $ch );
echo '4';
echo '<br>output-'.$output;
curl_close( $ch );
?>