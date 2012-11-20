<?php 

$company_attributes =
array(
	"legal_date" => array(
	"name" => "legal_date",
	"std" => "",
	"title" => "Legal Text Date",
	"description" => ""),
	"search_keywords" => array(
	"name" => "search_keywords",
	"std" => "",
	"title" => "Search Keywords",
	"description" => ""),
	"feed_max" => array(
	"name" => "feed_max",
	"std" => "",
	"title" => "Maximum Articles",
	"description" => ""),
	"company_url" => array(
	"name" => "company_url",
	"std" => "",
	"title" => "Company Website",
	"description" => ""),
	"industry" => array(
	"name" => "industry",
	"std" => "",
	"title" => "Industry",
	"description" => ""),
	"gsvc_percentage" => array(
	"name" => "gsvc_percentage",
	"std" => "",
	"title" => "% of GSVC",
	"description" => "")

);


function build_company_attributes(){
	global $company_attributes, $post;
	echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
	foreach($company_attributes as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
					echo'<div class="cp-group cp-company_attributes">';
			
			echo'<label style="width: 150px;" class="wp-label">'.$meta_box['title'].'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /></label >';
			
			echo'<input class="wp-product-value cp-product-company_attributes-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		
	}
}


function save_company_attributes(){ 
		
	global $company_attributes, $post, $_POST, $post_id;
	save_component($company_attributes, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_company_attributes');

?>