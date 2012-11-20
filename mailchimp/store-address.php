<?php
/*///////////////////////////////////////////////////////////////////////
Part of the code from the book 
Building Findable Websites: Web Standards, SEO, and Beyond
by Aarron Walter (aarron@buildingfindablewebsites.com)
http://buildingfindablewebsites.com

Distrbuted under Creative Commons license
http://creativecommons.org/licenses/by-sa/3.0/us/
///////////////////////////////////////////////////////////////////////*/


function storeAddress(){
	
	//Mailchimp list unique IDs
	//In order of checkboxes on form
	$ids = array(
		'gsv-newsletter-a-to-apple' => 				'e901ee2b08',
		'gsv-newsletter-socially-mobile-weekly' =>  '4be882acb0',
		'gsv-newsletter-gsv-green-daily' =>			'930f2aad7a',
		'gsv-newsletter-gsv-media-daily' =>			'',
		'gsv-newsletter-gsv-edu-daily' =>			'dd52118c89',
		'gsv-newsletter-ipo-weekly' =>				'',
		'gsv-newsletter-gsv-blog-moving-ideas' =>	'5d135222e2'
	);
	
	$names = explode(' ', $_REQUEST['gsv-newsletter-signup-flyout-form-name']);
	
	$merge_vars = array('FNAME'=>$names[0],'LNAME'=>$names[1]);
	
	//print_r($_REQUEST);
	// Validation
	if(!$_GET['gsv-newsletter-signup-flyout-form-email']){ return "No email address provided"; } 

	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $_GET['gsv-newsletter-signup-flyout-form-email'])) {
		return "Email address is invalid"; 
	}

	require_once('MCAPI.class.php');
	// grab an API Key from http://admin.mailchimp.com/account/api/
	$api = new MCAPI('ba54b579d533805e3a965c7d97607192-us2');
	
	// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
	// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
	
	
	foreach($_REQUEST as $list => $value){
		if($list != 'ajax' && $list != 'gsv-newsletter-signup-flyout-form-name' && $list != 'gsv-newsletter-signup-flyout-form-email' && $list != '__utma' && $list != '__utmz' ){
			if($value == 'on'){
				$list_id = $ids[$list];
				if($api->listSubscribe($list_id, $_GET['gsv-newsletter-signup-flyout-form-email'], $merge_vars) === true) {
					// It worked!	
					echo 'Success! Check your email to confirm sign up.';
				}else{
					// An error ocurred, return error message	
					echo 'Error: ' . $api->errorMessage;
				}
			
			}
		}
	}
	/*	
	$list_id = "e901ee2b08";
	if($api->listSubscribe($list_id, $_GET['gsv-newsletter-signup-flyout-form-email'], $merge_vars) === true) {
		// It worked!	
		echo 'Success! Check your email to confirm sign up.';
	}else{
		// An error ocurred, return error message	
		echo 'Error: ' . $api->errorMessage;
	}
	*/
	
}

// If being called via ajax, autorun the function
if($_GET['ajax']){ echo storeAddress(); }
?>
