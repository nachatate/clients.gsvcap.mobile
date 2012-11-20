<?php 
$single_list_two =
array(
	"list_attribute_two" => array(
	"name" => "list_attribute_two",
	"std" => "",
	"title" => "List Item",
	"description" => "")
);


function build_single_list_two($title){
	global $single_list_two, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-description-bullets-2">

	<span class="cp-product-attribute-section-title"><?php echo($title);?></span>
	<ul class="cp-product-description-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_single_list_twos", $single = true); $count++){
		echo('<li class="cp-product-single-list-two-bullets-list-item single_list_two'.$count.'">');
		
		foreach($single_list_two as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'list_attribute_two'){
				echo'<div class="wp-prod-description-bullets-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label wp-single-list-two-bullets-label">Member:</label>');
				echo'<input class="wp-single-list-two-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete single_list_two_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="single_list_two'.$count.'" >Delete</a>');
				
				echo'</div>';
			}
			//echo'<p><label class="'.wp_create_nonce( plugin_basename(__FILE__) ).'" for="'.$meta_box['name'].$count.'">'.$meta_box['description'].'</label></p>';  
			
						
		}
		echo('</li>');
	}
	
	?></ul> 
	
	<a href="#the_descriptions"  class="button button-highlighted ps-add-single-list-two-button" title="Add a Member" href="#">+ Add a Member</a>
		
	</div>	
<?php
}

function check_single_list_two(){
	global $post;
	
	if(get_post_meta($post->ID, "num_single_list_twos", $single = true) == "" ){
		update_post_meta($post->ID, 'num_single_list_twos', 0, true);
	} 
	
}

add_action('admin_head', 'check_single_list_two');

function save_single_list_two(){ 
		
	global $single_list_two, $post, $_POST, $post_id;
	save_multi_component($single_list_two, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_single_list_twos');
}

/** Hook actions into WP **/
add_action('save_post', 'save_single_list_two');









add_action('admin_head', 'single_list_two_ajax');

function single_list_two_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
			
				
		var newLabel_count = 1;		

	 jQuery(document).delegate('.ps-add-single-list-two-button', 'click',function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_single_list_twos]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_single_list_twos]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_single_list_twos]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-single-list-two-bullets-list-item single_list_two'+count+'"><div class="wp-prod-description-bullets-group"><input type="hidden" value="1f4e4cddde" id="list_attribute_two_noncename'+count+'" name="list_attribute_two_noncename'+count+'"/><label class="wp-label wp-list-attribute-bullets-label">Member: </label> <input class="wp-product-value cp-product-description-bullet-input'+newLabel_count+'" type="text" name="list_attribute_two'+count+'" size="50" /><a class="wp-delete delete single_list_two_delete" cur_number="'+count+'" href="#list_attribute_two'+count+'" id="single_list_two'+count+'" >Delete</a></div>');
		//bring focus to it
		jQuery('input[name=list_attribute_two'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
		//Delete a custom field
		jQuery("body").delegate(".single_list_two_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				if(jQuery(this).hasClass('faq')){ group = 'faq'; }  //assign a group name
				if(jQuery(this).hasClass('prod_description')){ group = 'prod_description'; }

				
				group = 'single_list_two'
				
				group_counter = 'num_single_list_twos';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				
				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;
			
	
				
				if (group == 'single_list_two'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=list_attribute_two'+i+']').val(jQuery('input[name=list_attribute_two'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.single_list_two'+number_labels).remove();
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