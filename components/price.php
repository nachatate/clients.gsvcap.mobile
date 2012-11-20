<?php 

$price =
array(
	"price" => array(
	"name" => "price",
	"std" => "",
	"title" => "Price",
	"description" => "")
);


function build_price(){
	global $price, $post;
	foreach($price as $meta_box) {
		$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);
		
		if($meta_box_value == "")
		$meta_box_value = $meta_box['std'];
		
	
	
		if($meta_box['name'] == 'price'){
			echo'<div class="cp-group cp-price">';
			echo'<div class="cp-product-attribute-section-title">Price</div>';
			echo'<label class="wp-label"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />'.$meta_box['title'].'</label >';
			
			echo'<input class="wp-product-value cp-product-price-input" type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="50" />';
			echo'</div>';
			
		}
	}
}


function save_price(){ 
		
	global $price, $post, $_POST, $post_id;
	save_component($price, $post, $_POST, $post_id, plugin_basename(__FILE__));
}

/** Hook actions into WP **/
add_action('save_post', 'save_price');

?>