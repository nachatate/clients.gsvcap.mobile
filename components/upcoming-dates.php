<?php 

$upcoming_dates =
array(
	"upcoming_dates_heading" => array(
	"name" => "upcoming_dates_heading",
	"std" => "",
	"title" => "Title",
	"attribute" => ""),
	"upcoming_dates_date_source" => array(
	"name" => "upcoming_dates_date_source",
	"std" => "",
	"title" => "Date and Location",
	"attribute" => ""),
	"upcoming_dates_content" => array(
	"name" => "upcoming_dates_content",
	"std" => "",
	"title" => "Content",
	"attribute" => ""),
	"upcoming_dates_link" => array(
	"name" => "upcoming_dates_link",
	"std" => "",
	"title" => "Link",
	"attribute" => "")
	
);


function build_upcoming_dates($title){
	global $upcoming_dates, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<ul class="cp-product-attribute-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_upcoming_dates", $single = true); $count++){
		echo('<li class="cp-product-attribute-bullets-list-item upcoming_dates upcoming_dates'.$count.'">');
		foreach($upcoming_dates as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'upcoming_dates_heading'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Title:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete upcoming_dates_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="upcoming_dates'.$count.'" >Delete</a>');
				echo'</div>';
			}else if($meta_box['name'] == 'upcoming_dates_date_source'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Date and Location:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo'</div>';
			}else if($meta_box['name'] == 'upcoming_dates_content'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Content:</label>');
				echo'<textarea rows="8" cols="60"  class="wp-product-value" data-group="'.$meta_box['name'].'" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" >'.$meta_box_value.'</textarea>';
				echo'</div>';
			}else if($meta_box['name'] == 'upcoming_dates_link'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Link:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo'</div>';
			}
			//echo'<p><label class="'.wp_create_nonce( plugin_basename(__FILE__) ).'" for="'.$meta_box['name'].$count.'">'.$meta_box['attribute'].'</label></p>';  
			
						
		}
		echo('</li>');
	}
	
	?></ul> 
	
	<a href="#upcoming_dates"  class="button button-highlighted ps-add-upcoming-dates-button" title="Add an upcoming date" href="#">+ Add an upcoming date</a>
		
	</div>	
<?php
}

function check_upcoming_dates(){
	global $post;
	
	if(get_post_meta($post->ID, "num_upcoming_dates", $single = true) == "" ){
		update_post_meta($post->ID, 'num_upcoming_dates', 0, true);
	} 
	
}

add_action('admin_head', 'check_upcoming_dates');

function save_upcoming_dates(){ 
		
	global $upcoming_dates, $post, $_POST, $post_id;
	save_multi_component($upcoming_dates, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_upcoming_dates');
}

/** Hook actions into WP **/
add_action('save_post', 'save_upcoming_dates');









add_action('admin_head', 'upcoming_dates_ajax');

function upcoming_dates_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery(document).delegate('.ps-add-upcoming-dates-button', 'click' ,function(){
  		
  	
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_upcoming_dates]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_upcoming_dates]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_upcoming_dates]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-attribute-bullets-list-item upcoming_dates upcoming_dates'+count+'"><div class="wp-prod-attribute-list-group"><input type="hidden" value="1f4e4cddde" id="prod_attribute_noncename'+count+'" name="prod_attribute_noncename'+count+'"/><label class="wp-label">Title: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="upcoming_dates_heading'+count+'" size="50" /><a class="wp-delete delete upcoming_dates_delete" cur_number="'+count+'" href="#upcoming_dates'+count+'" id="upcoming_dates'+count+'" >Delete</a></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Date and Location: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="upcoming_dates_date_source'+count+'" size="50" /></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Content: </label> <textarea rows="8" cols="60" class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'"  name="upcoming_dates_content'+count+'" ></textarea></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Link: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="upcoming_dates_link'+count+'" size="50" /></div></li></div>');
		//bring focus to it
		jQuery('input[name=attribute'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".upcoming_dates_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'upcoming_dates'
				
				group_counter = 'num_upcoming_dates';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'upcoming_dates'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=upcoming_dates_heading'+i+']').val(jQuery('input[name=upcoming_dates_heading'+aboveMinus+']').val())
	    				jQuery('input[name=upcoming_dates_date_source'+i+']').val(jQuery('input[name=upcoming_dates_date_source'+aboveMinus+']').val())
	    				jQuery('textarea[name=upcoming_dates_content'+i+']').val(jQuery('textarea[name=upcoming_dates_content'+aboveMinus+']').val())
	    				jQuery('input[name=upcoming_dates_link'+i+']').val(jQuery('input[name=upcoming_dates_link'+aboveMinus+']').val())

	    				aboveMinus++;
	    			}	
				
					jQuery('li.upcoming_dates'+number_labels).remove();
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