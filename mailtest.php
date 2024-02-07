<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");
$mail = new PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "encalm.com";    // SMTP server example
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "auth@encalm.com";            // SMTP account username example
$mail->Password   = "Encalm@123";            // SMTP account password example
$mail->SMTPSecure = "ssl";

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->Subject = 'Website contact form submitted';
$mail->Body    = 'Below are the information of client setup';
$mail->AltBody = '';
$mail->setFrom('auth@encalm.com', 'Mailtrap');
$mail->addReplyTo('auth@encalm.com', 'Mailtrap');
$mail->addAddress('sachinsaini.cs@gmail.com', 'Tim');

if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>