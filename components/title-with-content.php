<?php 

$subsection_with_content =
array(
	"sub_section_title" => array(
	"name" => "sub_section_title",
	"std" => "",
	"title" => "Sub-Section Title",
	"description" => ""),
	"sub_section_content" => array(
	"name" => "sub_section_content",
	"std" => "",
	"title" => "Sub-Section Content",
	"description" => "")
);


function build_title_with_content($title){
	global $subsection_with_content, $post;
	?>
	
	
	
	<?php
	foreach($subsection_with_content as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'sub_section_title'){
			echo'<div class="cp-product-attribute-section cp-product-attribute-section-price"><span class="cp-product-attribute-section-title"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$title.'</span>';
			
			echo'<span class="ps-currency"></span><input class="wp-product-value cp-product--input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
			
		}else if($meta_box['name'] == 'sub_section_content'){ 
			
			
			echo'<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
			
			echo'<textarea cols="44" class="wp-product-value mceEditor" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
		
		 }
	
	}
}


function save_subsection(){ 
		
	global $subsection_with_content, $post, $_POST, $post_id;
	save_component($subsection_with_content, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_subsection');

?>