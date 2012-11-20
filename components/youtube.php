<?php
	$youtube =
	array(
		"youtube_link" => array(
		"name" => "youtube_link",
		"std" => "",
		"title" => "Youtube Link",
		"description" => ""),
		"youtube_title" => array(
		"name" => "youtube_title",
		"std" => "",
		"title" => "Youtube Title",
		"description" => "")
		);
		
function build_yt(){

	echo'<div class="cp-group cp-youtube">';
	
	echo'<div class="cp-product-attribute-section-title">YouTube</div>';
	
	global $youtube, $post;
	
	foreach($youtube as $meta_box) {
	$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
	
	if($meta_box_value == "")
	$meta_box_value = $meta_box['std'];
	
		if($meta_box['name'] == 'youtube_link'){
			echo'<div class="wp-prod-description-bullets-group cp-product-attribute-section-price"><label class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$meta_box['title'].'</label>';
					
			echo'<input class="wp-product-value" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
				
		}else if($meta_box['name'] == 'youtube_title'){
			echo'<div class="wp-prod-description-bullets-group cp-product-attribute-section-price"><label class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$meta_box['title'].'</label>';
				
			echo'<input class="wp-product-value" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" /></div>';
				
		}
	
	}

	echo'</div>';
	
}
		
/**** Save YT Info ****/
function save_yt(){ 
	global $youtube, $post, $_POST, $post_id;
	save_component($youtube, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_yt');


?>