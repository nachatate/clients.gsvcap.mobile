<?php 

$multi_testimonial =
array(
	"testimonial_title" => array(
	"name" => "testimonial_title",
	"std" => "",
	"title" => "Title",
	"attribute" => ""),
	"testimonial_speaker" => array(
	"name" => "testimonial_speaker",
	"std" => "",
	"title" => "Speaker",
	"attribute" => ""),
	"testimonial_date" => array(
	"name" => "testimonial_date",
	"std" => "",
	"title" => "Date",
	"attribute" => ""),
	"testimonial_content" => array(
	"name" => "testimonial_content",
	"std" => "",
	"title" => "Quote",
	"attribute" => "")
);


function build_multi_testimonial($title, $th1, $th2){
	global $multi_testimonial, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<?php
	
	for($count = 1; $count <= get_post_meta($post->ID, "num_multi_testimonials", $single = true); $count++){
		echo('<div class="multi_testimonial'.$count.'"><h2>Tesimonial '.$count.'</h2>');
		foreach($multi_testimonial as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'testimonial_title'){
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'"  />';
				
				echo'<label>'.$meta_box['title'].': <input class="wp-product-value table-col" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="25" /></label> ';
			}else if($meta_box['name'] == 'testimonial_speaker'){
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo'<label>'.$meta_box['title'].': <input class="wp-product-value table-col" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="25" /></label> ';
			}else if($meta_box['name'] == 'testimonial_date'){
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo'<label>'.$meta_box['title'].': <input class="wp-product-value table-col" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="25" /></label> ';
				echo('<a class="wp-delete delete multi_testimonial_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="multi_testimonial'.$count.'" >Delete</a>');
			}else if($meta_box['name'] == 'testimonial_content'){
				
				echo'<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
			
				echo'<label>Testimonial Content</label><br /><textarea cols="44" rows="8" class="wp-product-value " name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
			
			}
							
		}
		echo('</div></div>');
	}
	
	?>
	

	
	<a href="#the_attributes"  class="button button-highlighted ps-add-multi-testimonial-button" title="Add a attribute" href="#">+ Add a Widget</a>
		
	</div>	
<?php
}

function check_multi_testimonial(){
	global $post;
	
	if(get_post_meta($post->ID, "num_multi_testimonials", $single = true) == "" ){
		update_post_meta($post->ID, 'num_multi_testimonials', 0, true);
	} 
	
}

add_action('admin_head', 'check_multi_testimonial');

function save_multi_testimonial(){ 
		
	global $multi_testimonial, $post, $_POST, $post_id;
	save_multi_component($multi_testimonial, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_multi_testimonials');
}

/** Hook actions into WP **/
add_action('save_post', 'save_multi_testimonial');









add_action('admin_head', 'multi_testimonial_ajax');

function multi_testimonial_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery('.ps-add-multi-testimonial-button').click(function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_multi_testimonials]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_multi_testimonials]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_multi_testimonials]').parent().next().children('textarea').val());
		
		//add in new element
		
		
		var testimonial_string = '<div class="multi_testimonial'+count+'"><h2>Tesimonial '+count+'</h2><input type="hidden" name="multi_testimonial_noncename'+count+'" id="multi_testimonial_noncename'+count+'" value="1f4e4cddde"  />';
		testimonial_string+= '<label>Title: <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="testimonial_title'+count+'" value="" size="25" /></label>';
		testimonial_string+= '<input type="hidden" name="multi_testimonial_noncename'+count+'" id="multi_testimonial_noncename'+count+'" value="1f4e4cddde"  />';
		testimonial_string+= '<label>Speaker: <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="testimonial_speaker'+count+'" value="" size="25" /></label>';
		testimonial_string+= '<input type="hidden" name="multi_testimonial_noncename'+count+'" id="multi_testimonial_noncename'+count+'" value="1f4e4cddde"  />';
		testimonial_string+= '<label>Date: <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="testimonial_date'+count+'" value="" size="25" /></label>';
		testimonial_string+= '<a class="wp-delete delete multi_testimonial_delete" cur_number="'+count+'" href="#multi_testimonial'+count+'" id="multi_testimonial'+count+'" >Delete</a>';
		
		testimonial_string+= '<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="multi_testimonial_noncename'+count+'" id="multi_testimonial_noncename'+count+'"  value="1f4e4cddde" /><span class="cp-product-attribute-section-title"></span>';
		
		
		testimonial_string+= '<label>Testimonial Content</label><br /><textarea cols="44" rows="8" class="wp-product-value " name="testimonial_content'+count+'" value=""></textarea></div>';
		
		
		testimonial_string+= '</div>';
		
		

		
		jQuery(this).prev().append(testimonial_string);
		
		
		
		
		
	
		
		//bring focus to it
		jQuery('input[name=multi_testimonial'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".multi_testimonial_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'multi_testimonial'
				
				group_counter = 'num_multi_testimonials';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'multi_testimonial'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=testimonial_title'+i+']').val(jQuery('input[name=testimonial_title'+aboveMinus+']').val())
	    				jQuery('input[name=testimonial_speaker'+i+']').val(jQuery('input[name=testimonial_speaker'+aboveMinus+']').val())
	    				jQuery('input[name=testimonial_date'+i+']').val(jQuery('input[name=testimonial_date'+aboveMinus+']').val())
	    				jQuery('textarea[name=testimonial_content'+i+']').val(jQuery('textarea[name=testimonial_content'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('div.multi_testimonial'+number_labels).remove();
				}	
				
				
				jQuery('input[value='+group_counter+']').parent().next().children('textarea').val(parseInt(jQuery('input[value='+group_counter+']').parent().next().children('textarea').val())-1)
	    		var data = {
	    				action: 'ajax_action',
	    				label_count: number_labels,
	    		};
			 
			jQuery.post('admin-ajax.php', data, function(response){
			});
		
		 }); 
	});
	
	</script>
<?php }  ?>