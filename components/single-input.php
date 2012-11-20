<?php 

$single_input =
array(
	"new_window" => array(
	"name" => "new_window",
	"std" => "",
	"title" => "new_window",
	"description" => "")
);


function build_single_input($title){
	global $single_input, $post;
	foreach($single_input as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'new_window'){
			echo'<div class="cp-group cp-single_input">';
			//echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
			echo'<label style="width: 150px;" class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$title.'</label >';
			
			echo'<input class="wp-product-value cp-product-single_input-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		}
	}
}


function save_single_input(){ 
		
	global $single_input, $post, $_POST, $post_id;
	save_component($single_input, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_single_input');

?>