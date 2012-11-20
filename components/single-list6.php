<?php 
$single_list_six =
array(
	"list_attribute_six" => array(
	"name" => "list_attribute_six",
	"std" => "",
	"title" => "List Item",
	"description" => "")
);


function build_single_list_six($title){
	global $single_list_six, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-description-bullets">

	<span class="cp-product-attribute-section-title"><?php echo($title);?></span>
	<ul class="cp-product-description-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_single_list_sixs", $single = true); $count++){
		echo('<li class="cp-product-single-list-six-bullets-list-item single_list_six'.$count.'">');
		
		foreach($single_list_six as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'list_attribute_six'){
				echo'<div class="wp-prod-description-bullets-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label wp-single-list-six-bullets-label">List Item:</label>');
				echo'<input class="wp-single-list-six-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete single_list_six_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="single_list_six'.$count.'" >Delete</a>');
				
				echo'</div>';
			}
			//echo'<p><label class="'.wp_create_nonce( plugin_basename(__FILE__) ).'" for="'.$meta_box['name'].$count.'">'.$meta_box['description'].'</label></p>';  
			
						
		}
		echo('</li>');
	}
	
	?></ul> 
	
	<a href="#the_descriptions"  class="button button-highlighted ps-add-single-list-six-button" title="Add an Attribute" href="#">+ Add an attribute</a>
		
	</div>	
<?php
}

function check_single_list_six(){
	global $post;
	
	if(get_post_meta($post->ID, "num_single_list_sixs", $single = true) == "" ){
		update_post_meta($post->ID, 'num_single_list_sixs', 0, true);
	} 
	
}

add_action('admin_head', 'check_single_list_six');

function save_single_list_six(){ 
		
	global $single_list_six, $post, $_POST, $post_id;
	save_multi_component($single_list_six, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_single_list_sixs');
}

/** Hook actions into WP **/
add_action('save_post', 'save_single_list_six');









add_action('admin_head', 'single_list_six_ajax');

function single_list_six_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
			
				
		var newLabel_count = 1;		

	 jQuery('.ps-add-single-list-six-button').click(function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_single_list_sixs]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_single_list_sixs]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_single_list_sixs]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-single-list-six-bullets-list-item single_list_six'+count+'"><div class="wp-prod-description-bullets-group"><input type="hidden" value="1f4e4cddde" id="list_attribute_six_noncename'+count+'" name="list_attribute_six_noncename'+count+'"/><label class="wp-label wp-list-attribute-bullets-label">List Item: </label> <input class="wp-product-value cp-product-description-bullet-input'+newLabel_count+'" type="text" name="list_attribute_six'+count+'" size="50" /><a class="wp-delete delete single_list_six_delete" cur_number="'+count+'" href="#list_attribute_six'+count+'" id="single_list_six'+count+'" >Delete</a></div>');
		//bring focus to it
		jQuery('input[name=list_attribute_six'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
		//Delete a custom field
		jQuery("body").delegate(".single_list_six_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				if(jQuery(this).hasClass('faq')){ group = 'faq'; }  //assign a group name
				if(jQuery(this).hasClass('prod_description')){ group = 'prod_description'; }

				
				group = 'single_list_six'
				
				group_counter = 'num_single_list_sixs';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				
				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;
			
	
				
				if (group == 'single_list_six'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=list_attribute_six'+i+']').val(jQuery('input[name=list_attribute_six'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.single_list_six'+number_labels).remove();
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