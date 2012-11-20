<?php 

$single_input_three =
array(
	"single_input_three" => array(
	"name" => "single_input_three",
	"std" => "",
	"title" => "single_input_three",
	"description" => "")
);


function build_single_input_three($title){
	global $single_input_three, $post;
	foreach($single_input_three as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'single_input_three'){
			echo'<div class="cp-group cp-single_input_three">';
			//echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
			echo'<label class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$title.'</label >';
			
			echo'<input class="wp-product-value cp-product-single_input_three-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		}
	}
}


function save_single_input_three(){ 
		
	global $single_input_three, $post, $_POST, $post_id;
	save_component($single_input_three, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_single_input_three');

?>