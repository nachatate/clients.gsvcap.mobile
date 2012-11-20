<?php
	$to = 'newsletter@gsvmedia.com';

	 $subject = "GSV Capital Newsletter Form Submission";
	 $body = '<h2>Name</h2><p>'.$_POST['name'].'</p>';
	 $body.= '<h2>Email</h2><p>'.$_POST['email'].'</p>';

	 $headers = 'Content-Type: text/html' . "\r\n";
	 $headers.= 'From: info@gsvcap.com' . "\r\n";
	 mail($to, $subject, $body, $headers) or die('test');
?>