<?php 

$subsection_with_wysiwyg_two =
array(
	"sub_wysiwyg_title_two" => array(
	"name" => "sub_wysiwyg_title_two",
	"std" => "",
	"title" => "Sub-Section Title",
	"description" => ""),
	"sub_wysiwyg_content_two" => array(
	"name" => "sub_wysiwyg_content_two",
	"std" => "",
	"title" => "Sub-Section Content",
	"description" => "")
);


function build_title_with_wysiwyg_two($title){
	global $subsection_with_wysiwyg_two, $post;
	
	foreach($subsection_with_wysiwyg_two as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'sub_wysiwyg_title_two'){
			echo'<div class="cp-product-attribute-section cp-product-attribute-section-price"><span class="cp-product-attribute-section-title"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$title.'</span>';
			
			echo'<span class="ps-currency"></span><input class="wp-product-value cp-product--input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
			
		}else if($meta_box['name'] == 'sub_wysiwyg_content_two'){ 
			
			
			echo'<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
			
			echo'<textarea class="wp-product-value mceEditor" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
		
		 }
	
	}
}


function save_wysiwyg_two(){ 
		
	global $subsection_with_wysiwyg_two, $post, $_POST, $post_id;
	save_component($subsection_with_wysiwyg_two, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_wysiwyg_two');

?>