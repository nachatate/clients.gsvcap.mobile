<?php 

$contact_info =
array(
	"position" => array(
	"name" => "position",
	"std" => "",
	"title" => "Position",
	"description" => ""),
	"address" => array(
	"name" => "address",
	"std" => "",
	"title" => "Address",
	"description" => ""),
	"email" => array(
	"name" => "email",
	"std" => "",
	"title" => "Email",
	"description" => ""),
	"phone" => array(
	"name" => "phone",
	"std" => "",
	"title" => "Phone Number",
	"description" => "")
);


function build_contact_info($title){
	global $contact_info, $post;
	echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
	foreach($contact_info as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
					echo'<div class="cp-group cp-contact_info">';
			
			echo'<label class="wp-label cp-product-attribute-section-title">'.$meta_box['title'].'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /></label >';
			
			echo'<input class="wp-product-value cp-product-contact_info-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		
	}
}


function save_contact_info(){ 
		
	global $contact_info, $post, $_POST, $post_id;
	save_component($contact_info, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_contact_info');

?>