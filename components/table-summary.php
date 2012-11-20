<?php
	$table_summary =
	array(
		"table_summary" => array(
		"name" => "table_summary",
		"std" => "",
		"title" => "Table Summary",
		"description" => "For SEO purposes"),
		"table_caption" => array(
		"name" => "table_caption",
		"std" => "",
		"title" => "Table Caption",
		"description" => "")
		);
		
	$table_heading =
	array(
		"table_heading1" => array(
		"name" => "table_heading1",
		"std" => "",
		"title" => "Table Heading 1",
		"description" => ""),
		"table_heading2" => array(
		"name" => "table_heading2",
		"std" => "",
		"title" => "Table Heading 2",
		"description" => "")
		);
	

		
function build_table_summary(){
	global $table_summary, $post, $table_heading;
	
	foreach($table_summary as $meta_box) {
	$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
	
	if($meta_box_value == "")
	$meta_box_value = $meta_box['std'];
	
	
	
		if($meta_box['name'] == 'table_summary'){
			echo'<div class="ps-product-attribute-section ps-product-attribute-section-price"><span class="ps-product-attribute-section-title"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$meta_box['title'].'</span>';
					
			echo'<span class="ps-currency"></span><input class="wp-product-value ps-product-price-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
				
		}else if($meta_box['name'] == 'table_caption'){
			echo'<div class="ps-product-attribute-section ps-product-attribute-section-price"><span class="ps-product-attribute-section-title"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$meta_box['title'].'</span>';
					
			echo'<span class="ps-currency"></span><input class="wp-product-value ps-product-price-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
				
		}
	
	}

	
}
		
/**** Save YT Info ****/
function save_table_summary(){ 
	global $table_summary, $post, $_POST, $post_id;
	save_component($table_summary, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_table_summary');


?>