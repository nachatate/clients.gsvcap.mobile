<?php 

$attribute_list =
array(
	"attribute_title" => array(
	"name" => "attribute_title",
	"std" => "",
	"title" => "Name",
	"attribute" => ""),
	"attribute_definition" => array(
	"name" => "attribute_definition",
	"std" => "",
	"title" => "Description",
	"attribute" => "")
);


function build_attribute_list($title){
	global $attribute_list, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<ul class="cp-product-attribute-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_attribute_lists", $single = true); $count++){
		echo('<li class="cp-product-attribute-bullets-list-item attribute_list'.$count.'">');
		foreach($attribute_list as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'attribute_title'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Name:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete attribute_list_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="attribute_list'.$count.'" >Delete</a>');
				echo'</div>';
			}else if($meta_box['name'] == 'attribute_definition'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Description:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo'</div>';
			}
			//echo'<p><label class="'.wp_create_nonce( plugin_basename(__FILE__) ).'" for="'.$meta_box['name'].$count.'">'.$meta_box['attribute'].'</label></p>';  
			
						
		}
		echo('</li>');
	}
	
	?></ul> 
	
	<a href="#the_attributes"  class="button button-highlighted ps-add-attribute-button" title="Add a member" href="#">+ Add a member</a>
		
	</div>	
<?php
}

function check_attributes(){
	global $post;
	
	if(get_post_meta($post->ID, "num_attribute_lists", $single = true) == "" ){
		update_post_meta($post->ID, 'num_attribute_lists', 0, true);
	} 
	
}

add_action('admin_head', 'check_attributes');

function save_attribute_list(){ 
		
	global $attribute_list, $post, $_POST, $post_id;
	save_multi_component($attribute_list, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_attribute_lists');
}

/** Hook actions into WP **/
add_action('save_post', 'save_attribute_list');









add_action('admin_head', 'attribute_ajax');

function attribute_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery(document).delegate('.ps-add-attribute-button', 'click' ,function(){
  		
  		console.log('clicked')
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_attribute_lists]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_attribute_lists]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_attribute_lists]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-attribute-bullets-list-item attribute_list'+count+'"><div class="wp-prod-attribute-list-group"><input type="hidden" value="1f4e4cddde" id="prod_attribute_noncename'+count+'" name="prod_attribute_noncename'+count+'"/><label class="wp-label">Name: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="attribute_title'+count+'" size="50" /><a class="wp-delete delete attribute_list_delete" cur_number="'+count+'" href="#attribute_list'+count+'" id="attribute_list'+count+'" >Delete</a></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Description: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="attribute_definition'+count+'" size="50" /></li></div>');
		//bring focus to it
		jQuery('input[name=attribute'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".attribute_list_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'attribute_list'
				
				group_counter = 'num_attribute_lists';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'attribute_list'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=attribute_title'+i+']').val(jQuery('input[name=attribute_title'+aboveMinus+']').val())
	    				jQuery('input[name=attribute_definition'+i+']').val(jQuery('input[name=attribute_definition'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.attribute_list'+number_labels).remove();
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