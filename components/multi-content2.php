<?php 

$multi_content_two =
array(
"widget_title_two" => array(
	"name" => "widget_title_two",
	"std" => "",
	"title" => "Widget Title",
	"attribute" => ""),
	"sidebar_content_two" => array(
	"name" => "sidebar_content_two",
	"std" => "",
	"title" => "Widget Content",
	"attribute" => "")
);


function build_multi_content_two($title){
	global $multi_content_two, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<?php
	
	for($count = 1; $count <= get_post_meta($post->ID, "num_multi_content_twos", $single = true); $count++){
		echo('<div class="multi_content_two'.$count.'"><h2>Widget '.$count.'</h2>');
		foreach($multi_content_two as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'widget_title_two'){
				echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'"  />';
				
				echo'<label>'.$meta_box['title'].': <input class="wp-product-value table-col" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="25" /></label> ';
			}else{
				
				echo'<div class="cp-product-attribute-section cp-product-attribute-section-shipping"><input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
				
				echo'<label>Widget Content</label><br /><textarea class="mceEditor" cols="44" rows="8" class="wp-product-value " name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea><a class="wp-delete delete multi_content_two_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="multi_content_two'.$count.'" >Delete</a></div>';
			}
										
		}
		echo('</div>');
	}
	
	?>
	

	
	<a href="#the_attributes"  class="button button-highlighted ps-add-multi-content-two-button" title="Add a attribute" href="#">+ Add a Widget</a>
		
	</div>	
<?php
}

function check_multi_content_two(){
	global $post;
	
	if(get_post_meta($post->ID, "num_multi_content_twos", $single = true) == "" ){
		update_post_meta($post->ID, 'num_multi_content_twos', 0, true);
	} 
	
}

add_action('admin_head', 'check_multi_content_two');

function save_multi_content_two(){ 
		
	global $multi_content_two, $post, $_POST, $post_id;
	save_multi_component($multi_content_two, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_multi_content_twos');
}

/** Hook actions into WP **/
add_action('save_post', 'save_multi_content_two');









add_action('admin_head', 'multi_content_two_ajax');

function multi_content_two_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery('.ps-add-multi-content-two-button').click(function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_multi_content_twos]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_multi_content_twos]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_multi_content_twos]').parent().next().children('textarea').val());
		
		//add in new element
		
		
		var testimonial_string = '<div class="multi_content_two'+count+'"><h2>Widget '+count+'</h2><input type="hidden" name="multi_content_two_noncename'+count+'" id="multi_content_two_noncename'+count+'" value="1f4e4cddde"  />';	
		
		testimonial_string+= '<label>Title: <input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="widget_title_two'+count+'" value="" size="25" /></label>';
		testimonial_string+= '<input type="hidden" name="multi_testimonial_noncename'+count+'" id="multi_testimonial_noncename'+count+'" value="1f4e4cddde"  /><br />';
			
		testimonial_string+= '<label>Widget Content</label><br /><textarea id="sidebar_content_two'+count+'" cols="44" rows="8" class="wp-product-value " name="sidebar_content_two'+count+'" value=""></textarea>';
		testimonial_string+= '<a class="wp-delete delete multi_content_two_delete" cur_number="'+count+'" href="#multi_content_two'+count+'" id="multi_content_two'+count+'" >Delete</a>';
		
		testimonial_string+= '</div>';
		
		

		
		jQuery(this).prev().append(testimonial_string);
		 tinyMCE.execCommand("mceAddControl", false, "sidebar_content_two"+count);

		
	
		
		//bring focus to it
		jQuery('input[name=multi_content_two'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".multi_content_two_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'multi_content_two'
				
				group_counter = 'num_multi_content_twos';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'multi_content_two'){
					for(var i = minusName; i < number_labels; i++){
	    					  jQuery('input[name=widget_title_two'+i+']').val(jQuery('input[name=widget_title_two'+aboveMinus+']').val())
								tinyMCE.get('sidebar_content_two'+i).setContent(tinyMCE.get('sidebar_content_two'+aboveMinus).getContent())
	    				aboveMinus++;
	    				//console.log(tinyMCE.get('sidebar_content_two'+aboveMinus).getContent())
	    			}	
				
					jQuery('div.multi_content_two'+number_labels).remove();
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