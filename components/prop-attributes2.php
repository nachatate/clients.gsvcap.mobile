<?php 

$property_attributes2 =
array(
	"window" => array(
	"name" => "window",
	"std" => "",
	"title" => "Open link in new window",
	"date" => ""),
	"date" => array(
	"name" => "date",
	"std" => "",
	"title" => "Date",
	"description" => ""),
	"page_links" => array(
	"name" => "page_links",
	"std" => "",
	"title" => "Page links to URL",
	"description" => "")
);


function build_property_attributes2(){
	global $property_attributes2, $post;
	echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
	foreach($property_attributes2 as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
					echo'<div class="cp-group cp-property_attributes2">';
			
			echo'<label style="width: 150px;"  class="wp-label cp-product-attribute-section-title">'.$meta_box['title'].'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /></label >';
			
			echo'<input class="wp-product-value cp-product-property_attributes2-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		
	}
}


function save_property_attributes2(){ 
		
	global $property_attributes2, $post, $_POST, $post_id;
	save_component($property_attributes2, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_property_attributes2');

?>