<?php 

$single_textarea =
array(
	"single_textarea" => array(
	"name" => "single_textarea",
	"std" => "",
	"title" => "single_textarea",
	"description" => "")
);


function build_single_textarea($title){
	global $single_textarea, $post;
	foreach($single_textarea as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'single_textarea'){
			echo'<div class="cp-group cp-single_textarea">';
			echo'<div class="cp-product-attribute-section-title">'.$title.'</div>';
			echo'<label class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /></label >';
			
			
			
			echo'<textarea cols="44" class="wp-product-value cp-product-single_textarea-input" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
			
			echo'</div>';
		
	
			
			
			
		}
	}
}


function save_single_textarea(){ 
		
	global $single_textarea, $post, $_POST, $post_id;
	save_component($single_textarea, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_single_textarea');

?>