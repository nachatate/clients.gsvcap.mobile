<?php 

$description_list =
array(
	"description_title" => array(
	"name" => "description_title",
	"std" => "",
	"title" => "Title",
	"description" => ""),
	"description_description" => array(
	"name" => "description_description",
	"std" => "",
	"title" => "Description",
	"description" => "")
);


function build_description_list(){
	global $description_list, $post;
	?>
	<div class="cp-product-attribute-section cp-product-attribute-description-bullets">

	<span class="cp-product-attribute-section-title">Product Description Section</span>
	<ul class="cp-product-description-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_description_lists", $single = true); $count++){
		echo('<li class="cp-product-description-bullets-list-item description_list'.$count.'">');
		foreach($description_list as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'description_title'){
				echo('<div class="cp-group wp-prod-description-bullets-group">');
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label wp-prod-description-bullets-label">Title:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete description_list_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="description_list'.$count.'" >Delete</a>');
				echo('</div>');
			}else if($meta_box['name'] == 'description_description'){
				echo('<div class="wp-prod-description-bullets-group">');
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label wp-prod-description-bullets-label">Description:</label>');
				echo'<textarea cols="44" class="wp-product-value" data-group="'.$meta_box['name'].'" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea>';
				echo('</div>');
			}
			//echo'<p><label class="'.wp_create_nonce( plugin_basename(__FILE__) ).'" for="'.$meta_box['name'].$count.'">'.$meta_box['description'].'</label></p>';  
			
						
		}
		echo('</li>');
	}
	
	?></ul> 
	
	<a href="#the_descriptions"  class="button button-highlighted ps-add-description-button" title="Add a Description" href="#">+ Add a Bullet</a>
		
	</div>	
<?php
}

function check_descriptions(){
	global $post;
	
	if(get_post_meta($post->ID, "num_description_lists", $single = true) == "" ){
		update_post_meta($post->ID, 'num_description_lists', 0, true);
	} 
	
}

add_action('admin_head', 'check_descriptions');

function save_description_list(){ 
		
	global $description_list, $post, $_POST, $post_id;
	save_multi_component($description_list, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_description_lists');
}

/** Hook actions into WP **/
add_action('save_post', 'save_description_list');









add_action('admin_head', 'description_ajax');

function description_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery('.ps-add-description-button').click(function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_description_lists]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_description_lists]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_description_lists]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-description-bullets-list-item description_list'+count+'"><div class="wp-prod-description-bullets-group"><input type="hidden" value="1f4e4cddde" id="prod_description_noncename'+count+'" name="prod_description_noncename'+count+'"/><label class="wp-label">Title: </label> <input class="wp-product-value cp-product-description-bullet-input'+newLabel_count+'" type="text" name="description_title'+count+'" size="50" /><a class="wp-delete delete description_list_delete" cur_number="'+count+'" href="#description_list'+count+'" id="description_list'+count+'" >Delete</a></div><div class="wp-prod-description-bullets-group"><label class="wp-label">Description: </label> <textarea cols="44" class="wp-product-value cp-product-description-bullet-input'+newLabel_count+'" name="description_description'+count+'" /></div></li>');
		//bring focus to it
		jQuery('input[name=description'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".description_list_delete", "click", function(){

				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';

				
				group = 'description_list'
				
				group_counter = 'num_description_lists';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				
				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;
			
	
				
				if (group == 'description_list'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=description_title'+i+']').val(jQuery('input[name=description_title'+aboveMinus+']').val())
	    				jQuery('input[name=description_description'+i+']').val(jQuery('input[name=description_description'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.description_list'+number_labels).remove();
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