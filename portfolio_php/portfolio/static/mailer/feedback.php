<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
require 'POP3.php';
require 'form_setting.php';

if(isset($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$messages  = "<h3>New message from the site " .$fromName. "</h3> \r\n";
	$messages .= "<ul>";
	$messages .= "<li><strong>Name: </strong>" .$name."</li>";
	$messages .= "<li><strong>Email: </strong>" .$email."</li>";
	$messages .= "<li><strong>Message: </strong>" .$message."</li>";
	$messages .= "</ul> \r\n";

	$mail = new PHPMailer;

	$mail->From = $from;
	$mail->FromName = $fromName;
	$mail->addAddress($to, 'Admin');

	$mail->isHTML(true); 
	$mail->CharSet = $charset;

	$mail->Subject = $subj;
	$mail->Body    = $messages;


    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = 'smtp.live.com;';    // Specify main SMTP server
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
    $mail->Username   = 'pfabri1983@msn.com';     // SMTP username
    $mail->Password   = 'Infocam2016';         // SMTP password
    $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
    $mail->Port       = 25;                // TCP port to connect to

	if(!$mail->send()) {
	    print json_encode(array('status'=>0));
	} else {
	    print json_encode(array('status'=>1));
	}

}
	
?>