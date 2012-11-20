<?php 

$page_fields =
array(
	"headline" => array(
	"name" => "headline",
	"std" => "",
	"title" => "Page headline",
	"description" => "")
);


function build_page_fields(){
	global $page_fields, $post;
	echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
	foreach($page_fields as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
					echo'<div class="cp-group cp-page_fields">';
			
			echo'<label style="width: 150px;" class="wp-label">'.$meta_box['title'].'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /></label >';
			
			echo'<input class="wp-product-value cp-product-page_fields-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		
	}
}


function save_page_fields(){ 
		
	global $page_fields, $post, $_POST, $post_id;
	save_component($page_fields, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_page_fields');

?>