<?php 

$other_news =
array(
	"other_news_heading" => array(
	"name" => "other_news_heading",
	"std" => "",
	"title" => "Title",
	"attribute" => ""),
	"other_news_source" => array(
	"name" => "other_news_source",
	"std" => "",
	"title" => "Source",
	"attribute" => ""),
	"other_news_link" => array(
	"name" => "other_news_link",
	"std" => "",
	"title" => "Link",
	"attribute" => "")
);


function build_other_news($title){
	global $other_news, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<ul class="cp-product-attribute-bullets-list">
	<?php
		
			
	for($count = 1; $count <= get_post_meta($post->ID, "num_other_news", $single = true); $count++){
		echo('<li class="cp-product-attribute-bullets-list-item other_news'.$count.'">');
		foreach($other_news as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'other_news_heading'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Title:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo('<a class="wp-delete delete other_news_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="other_news'.$count.'" >Delete</a>');
				echo'</div>';
			}else if($meta_box['name'] == 'other_news_source'){
				echo'<div class="wp-prod-attribute-list-group">';
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo('<label class="wp-label">Source:</label>');
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="50" />';
				echo'</div>';
			}else if($meta_box['name'] == 'other_news_link'){
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
	
	<a href="#other_news"  class="button button-highlighted ps-add-news-story-button" title="Add a news story" href="#">+ Add a news story</a>
		
	</div>	
<?php
}

function check_other_news(){
	global $post;
	
	if(get_post_meta($post->ID, "num_other_news", $single = true) == "" ){
		update_post_meta($post->ID, 'num_other_news', 0, true);
	} 
	
}

add_action('admin_head', 'check_other_news');

function save_other_news(){ 
		
	global $other_news, $post, $_POST, $post_id;
	save_multi_component($other_news, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_other_news');
}

/** Hook actions into WP **/
add_action('save_post', 'save_other_news');









add_action('admin_head', 'other_news_ajax');

function other_news_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery(document).delegate('.ps-add-news-story-button', 'click' ,function(){
  		
  	
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_other_news]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_other_news]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_other_news]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<li class="cp-product-attribute-bullets-list-item other_news'+count+'"><div class="wp-prod-attribute-list-group"><input type="hidden" value="1f4e4cddde" id="prod_attribute_noncename'+count+'" name="prod_attribute_noncename'+count+'"/><label class="wp-label">Title: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="other_news_heading'+count+'" size="50" /><a class="wp-delete delete other_news_delete" cur_number="'+count+'" href="#other_news'+count+'" id="other_news'+count+'" >Delete</a></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Source: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="other_news_source'+count+'" size="50" /></div><div class="wp-prod-attribute-list-group"><label class="wp-label">Link: </label> <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="other_news_link'+count+'" size="50" /></div></li></div>');
		//bring focus to it
		jQuery('input[name=attribute'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".other_news_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'other_news'
				
				group_counter = 'num_other_news';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'other_news'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=other_news_heading'+i+']').val(jQuery('input[name=other_news_heading'+aboveMinus+']').val())
	    				jQuery('input[name=other_news_source'+i+']').val(jQuery('input[name=other_news_source'+aboveMinus+']').val())
	    				jQuery('input[name=other_news_link'+i+']').val(jQuery('input[name=other_news_link'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.other_news'+number_labels).remove();
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