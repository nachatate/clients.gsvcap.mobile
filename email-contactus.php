<?php
	$to = 'info@gsvcap.com';

	 $subject = "GSV Capital Contact Form Submission";
	 $body = '<h2>Name</h2><p>'.$_POST['name'].'</p>';
	 $body.= '<h2>Email</h2><p>'.$_POST['email'].'</p>';
	 $body.= '<h2>Phone</h2><p>'.$_POST['phone'].'</p>';
	 $body.= '<h2>Reason for Contacting</h2><p>'.$_POST['reason'].'</p>';

	 $headers = 'Content-Type: text/html' . "\r\n";
	 $headers.= 'From: info@gsvcap.com' . "\r\n";
	 mail($to, $subject, $body, $headers) or die('test');
?>