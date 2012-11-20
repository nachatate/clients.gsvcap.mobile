<?php 

$subsection_just_content3 =
array(
	"sub_section_content3" => array(
	"name" => "sub_section_content3",
	"std" => "",
	"title" => "Sub-Section Content",
	"description" => "")
);


function build_title_just_content3($title){
	global $subsection_just_content3, $post;
	?>
	
	
	
	<?php
	foreach($subsection_just_content3 as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	echo'<div class="cp-product-attribute-section cp-product-attribute-section-price"><span class="cp-product-attribute-section-title"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$title.'</span>';
	
		if($meta_box['name'] == 'sub_section_title'){
			
			
			echo'<span class="ps-currency"></span><input class="wp-product-value cp-product--input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
			
		}else if($meta_box['name'] == 'sub_section_content3'){ 
			
			
			echo'<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
			
			echo'<textarea cols="44" class="wp-product-value" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
		
		 }
	
	}
	echo('</div>');
}


function save_subsection_just_content3(){ 
		
	global $subsection_just_content3, $post, $_POST, $post_id;
	save_component($subsection_just_content3, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_subsection_just_content3');

?>