<?php 

$three_col_table =
array(
	"col_one_triplet" => array(
	"name" => "col_one_triplet",
	"std" => "",
	"title" => "Column One",
	"attribute" => ""),
	"col_two_triplet" => array(
	"name" => "col_two_triplet",
	"std" => "",
	"title" => "Column Two",
	"attribute" => ""),
	"col_three_triplet" => array(
	"name" => "col_three_triplet",
	"std" => "",
	"title" => "Column Three",
	"attribute" => "")
);


function build_three_col_table($title){
	global $three_col_table, $post;
	?>
	<div class="cp-group cp-product-attribute-section cp-product-attribute-attribute-bullets">

	<span class="cp-product-attribute-section-title"><?=$title;?></span>
	<table class="wp-table">
		<thead>
			<tr>
				<th>Size</th>
				<th>Depth</th>
				<th>Gallons</th>
			</tr>
		</thead>
		
		<tbody>
	<?php
	
	for($count = 1; $count <= get_post_meta($post->ID, "num_three_col_tables", $single = true); $count++){
		echo('<tr class="three_col_table'.$count.'">');
		foreach($three_col_table as $meta_box){
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
					
			if($meta_box_value == "")
				$meta_box_value = $meta_box['std'];
			if($meta_box['name'] == 'col_one_triplet'){
				echo'<td><input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="15" /></td>';
			}else if($meta_box['name'] == 'col_two_triplet'){
				echo'<td><input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="15" /></td>';
			}else if($meta_box['name'] == 'col_three_triplet'){
				echo'<td><input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
				
				echo'<input class="wp-product-value" data-group="'.$meta_box['name'].'" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'" size="15" /></td>';
				echo('<td><a class="wp-delete delete three_col_table_delete" cur_number="'.$count.'" href="#'.$meta_box['name'].$count.'" id="three_col_table'.$count.'" >Delete</a></td>');
			}
						
		}
		echo('</tr>');
	}
	
	?>
	
		</tbody>
	</table>
	
	<a href="#the_attributes"  class="button button-highlighted ps-add-three-col-table-button" title="Add a attribute" href="#">+ Add an attribute</a>
		
	</div>	
<?php
}

function check_three_col_table(){
	global $post;
	
	if(get_post_meta($post->ID, "num_three_col_tables", $single = true) == "" ){
		update_post_meta($post->ID, 'num_three_col_tables', 0, true);
	} 
	
}

add_action('admin_head', 'check_three_col_table');

function save_three_col_table(){ 
		
	global $three_col_table, $post, $_POST, $post_id;
	save_multi_component($three_col_table, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_three_col_tables');
}

/** Hook actions into WP **/
add_action('save_post', 'save_three_col_table');









add_action('admin_head', 'three_col_table_ajax');

function three_col_table_ajax(){
?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
				
		var newLabel_count = 1;		

	 jQuery('.ps-add-three-col-table-button').click(function(){
  		
  		
  		//update the custom field value by adding 1 to it
    	jQuery('input[value=num_three_col_tables]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_three_col_tables]').parent().next().children('textarea').val())+1);

		//get that value
    	var count = parseInt(jQuery('input[value=num_three_col_tables]').parent().next().children('textarea').val());
		
		//add in new element
		jQuery(this).prev().append('<tr class="three_col_table'+count+'"><td><input type="hidden" value="1f4e4cddde" id="three_col_table_noncename'+count+'" name="three_col_table_noncename'+count+'"/><input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="col_one_triplet'+count+'" size="12" /></td><td><input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="col_two_triplet'+count+'" size="12" /></td><td><input class="wp-product-value cp-product-attribute-bullet-input'+newLabel_count+'" type="text" name="col_three_triplet'+count+'" size="12" /></td><td><a class="wp-delete delete three_col_table_delete" cur_number="'+count+'" href="#three_col_table'+count+'" id="three_col_table'+count+'" >Delete</a></td>');
		//bring focus to it
		jQuery('input[name=three_col_table'+count+']').focus();
		//up the count
		newLabel_count++;
    }) 

	
	

	
	
		//Delete a custom field
		jQuery("body").delegate(".three_col_table_delete", "click", function(){
				var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';
				
				group = 'three_col_table'
				
				group_counter = 'num_three_col_tables';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				

				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;

				if (group == 'three_col_table'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=col_one_triplet'+i+']').val(jQuery('input[name=col_one_triplet'+aboveMinus+']').val())
	    				jQuery('input[name=col_two_triplet'+i+']').val(jQuery('input[name=col_two_triplet'+aboveMinus+']').val())
	    				jQuery('input[name=col_three_triplet'+i+']').val(jQuery('input[name=col_three_triplet'+aboveMinus+']').val())
	    				aboveMinus++;
	    			}	
				
					jQuery('tr.three_col_table'+number_labels).remove();
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