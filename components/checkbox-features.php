<?php
$checkbox_features =
array(
	"exclusive_dealer" => array(
	"name" => "exclusive_dealer",
	"std" => "",
	"title" => "Exclusive Dealer",
	"description" => ""),
	"eco_friendly" => array(
	"name" => "eco_friendly",
	"std" => "",
	"title" => "Eco Friendly",
	"description" => "")
);
		
function build_checkbox_features(){
	global $checkbox_features, $post;
	
	echo'<div class="cp-group">';
	
	foreach($checkbox_features as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
		if($meta_box['name'] == 'exclusive_dealer'){
			echo'<div class="wp-prod-description-bullets-group cp-product-attribute-section-availability"><input type="hidden" name="'.$meta_box['name'].'_noncename"  value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><label class="wp-checkbox-label">';
			echo'<input type="hidden" id="hidden-exclusive" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" />';
			?>
			<input id="exclusive" type="checkbox" name="exclusive" <?php if($meta_box_value == true){ ?>  checked="checked" <?php } ?> value="Exclusive Dealer" /> <?php
			
			

			echo($meta_box['title'].'</label></div>'); ?>
			
				
			
			<?php
		}else if($meta_box['name'] == 'eco_friendly'){
			echo'<div class="wp-prod-description-bullets-group cp-product-attribute-section-availability"><input type="hidden" name="'.$meta_box['name'].'_noncename"  value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><label class="wp-checkbox-label">';
			echo'<input type="hidden" id="hidden-eco" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" />';
			?>
			<input id="eco" type="checkbox" name="eco" <?php if($meta_box_value == true){ ?>  checked="checked" <?php } ?> value="Eco-Friendly" /> <?php

			echo($meta_box['title'].'</label></div>'); 

		}
		
	}

	echo'</div>';
}
		
/**** Save YT Info ****/
function save_checkbox_features(){ 
	global $checkbox_features, $post, $_POST, $post_id;
	save_component($checkbox_features, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_checkbox_features');


?>