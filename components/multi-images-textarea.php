<?php
	$multi_image_textarea =
	array(
		"multi_image_textarea" => array(
		"name" => "multi_image_textarea",
		"std" => "",
		"title" => "Attachments",
		"description" => ""),
		"multi_image_textarea_content" => array(
		"name" => "multi_image_textarea_content",
		"std" => "",
		"title" => "Content",
		"description" => ""),
		"multi_image_textarea_textarea" => array(
		"name" => "multi_image_textarea_textarea",
		"std" => "",
		"title" => "Textarea",
		"description" => "")
		);
		
function build_multi_image_textareas($title){
	global $multi_image_textarea, $post;
	?>
	<div class="cp-group wp-multi-image-textarea">
	
	<div class="cp-product-attribute-section-title"><?=$title;?></div>
	<div class="uploader" id="wp-multi-image-textarea-upload"></div>
	<ul class="cp-multi-image-textarea-attachments">
	<?php
	

	for($count = 1; $count <= get_post_meta($post->ID, "num_multi_image_textareas", $single = true); $count++){
		echo('<li class="cp-multi-image-textarea-list-item multi_image_textarea'.$count.'">');
	foreach($multi_image_textarea as $meta_box) {
	$meta_box_value = get_post_meta($post->ID, $meta_box['name'].$count, true);
	
	if($meta_box_value == "")
	$meta_box_value = $meta_box['std'];
	
		if($meta_box['name'] == 'multi_image_textarea'){
			echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
			
			
			echo'<input class="wp-multi-image-textarea" type="hidden" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'"  />';
			
			echo('<div class="wp-multi-image-textarea-information">');
			$thumb = $meta_box_value;
			if( strpos($thumb, '.jpg')){
				$thumb = str_replace('.jpg', '-thumb.jpg',$meta_box_value );
			}else if( strpos($thumb, '.JPG')){
				$thumb = str_replace('.JPG', '-thumb.JPG',$meta_box_value );
			}else if( strpos($thumb, '.png')){
				$thumb = str_replace('.png', '-thumb.png',$meta_box_value );
			}else if( strpos($thumb, '.PNG')){
				$thumb = str_replace('.PNG', '-thumb.PNG',$meta_box_value );
			}else if( strpos($thumb, '.gif')){
				$thumb = str_replace('.gif', '-thumb.gif',$meta_box_value );
			}else if( strpos($thumb, '.GIF')){
				$thumb = str_replace('.GIF', '-thumb.GIF',$meta_box_value );
			}else if( strpos($thumb, '.jpeg')){
				$thumb = str_replace('.jpeg', '-thumb.jpeg',$meta_box_value );
			}else if( strpos($thumb, '.JPEG')){
				$thumb = str_replace('.JPEG', '-thumb.JPEG',$meta_box_value );
			}
			$thumb = str_replace('uploads/', 'uploads/thumbs/', $thumb);
			//echo'<img src="'.$thumb.'" class="wp-multi-image-textarea-src" />';
			echo('<img src="'.$thumb.'" class="wp-image-thumb" />');
			?>
			
			
			
			<?php
			echo('<dl class="wp-multi-image-textarea-details-list">
				<dt class="wp-multi-image-textarea-details-list-title wp-image-filename">Filename:</dt>
				<dd class="wp-multi-image-textarea-details-list-desc wp-image-filename">'.substr(strrchr($meta_box_value, '/'), 1).'</dd>
				<dt class="wp-multi-image-textarea-details-list-title wp-image-dimensions">Dimensions:</dt>
				<dd class="wp-multi-image-textarea-details-list-desc wp-image-dimensions"></dd>
				<dt class="wp-multi-image-textarea-details-list-title wp-image-filesize">File Size:</dt>
				<dd class="wp-multi-image-textarea-details-list-desc wp-image-filesize"></dd>
				<dt class="wp-multi-image-textarea-details-list-title wp-image-date">Upload Date:</dt>
				<dd class="wp-multi-image-textarea-details-list-desc wp-image-date">04/10/2010</dd>
			</dl>');
			
			echo('</div>');
				echo('<a id="multi_image_textarea'.$count.'" href="#" class="wp-delete button button-highlighted">Remove Photo</a>');
				
			
				
		}else if($meta_box['name'] == 'multi_image_textarea_content'){
			echo'<input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
			
			echo'<input class="wp-multi-image-textarea_content" type="text" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'"  />';
			
			
		
		}else if($meta_box['name'] == 'multi_image_textarea_textarea'){ 
			
			
			echo'<div class="cp-product-attribute-section multi_image_textarea_textarea"><input type="hidden" name="'.$meta_box['name'].'_noncename'.$count.'" id="'.$meta_box['name'].'_noncename'.$count.'" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" /><span class="cp-product-attribute-section-title"></span>';
			
			echo'<textarea cols="44" class="wp-product-value" name="'.$meta_box['name'].$count.'" value="'.$meta_box_value.'">'.$meta_box_value.'</textarea></div>';
		
		 }
	
	}
	}
	echo'</ul></div>';
	
}




function check_multi_image_textarea(){
	global $post;
	
	if(get_post_meta($post->ID, "num_multi_image_textareas", $single = true) == "" ){
		update_post_meta($post->ID, 'num_multi_image_textareas', 0, true);
	} 
	
}

add_action('admin_head', 'check_multi_image_textarea');


		
/**** Save YT Info ****/
function save_multi_image_textarea(){ 
	global $multi_image_textarea, $post, $_POST, $post_id;
	save_multi_component($multi_image_textarea, $post, $_POST, $post_id, plugin_basename(__FILE__), 'num_multi_image_textareas');
}

/** Hook actions into WP **/
add_action('save_post', 'save_multi_image_textarea');

add_action('admin_head', 'multi_image_textarea_upload');

function multi_image_textarea_upload(){ ?>
	<script type="text/javascript">
	var HOME = 'http://174.120.138.3/~drgoode/wp-content/themes/feelgoode/'
	
	function createMultiTextareaUploader(){    
	var counter = jQuery('input[value=num_multi_image_textareas]').parent().next().children('textarea').val();
	counter++;
	
            var multi_uploader_textarea = new qq.FileUploader({
                element: document.getElementById('wp-multi-image-textarea-upload'),
                action: '/~drgoode/wp-content/themes/feelgoode/components/uploader/upload.php',
                debug: true,
                onComplete: function(id, fileName, responseJSON){
                	//console.log('fileName '+fileName);
                	
                	var size = responseJSON.size/1000;
                	var height = responseJSON.height;
                	var width = responseJSON.width;
                	var extension = responseJSON.extension;
                	var file_name = responseJSON.file_name +'.'+extension
                	
                	
                	
                	var imgurl = HOME+'components/uploader/uploads/'+file_name;
					 var thumb = HOME+'components/uploader/uploads/thumbs/'+file_name;
					 if(thumb.indexOf('.jpg') != -1){
					 	thumb = thumb.replace('.jpg', '-thumb.jpg')
					 }else if(thumb.indexOf('.JPG') != -1){
					 	thumb = thumb.replace('.JPG', '-thumb.JPG')
					 }else if(thumb.indexOf('.png') != -1){
					 	thumb = thumb.replace('.png', '-thumb.png')
					 }else if(thumb.indexOf('.gif') != -1){
					 	thumb = thumb.replace('.gif', '-thumb.gif')
					 }else if(thumb.indexOf('.jpeg') != -1){
					 	thumb = thumb.replace('.jpeg', '-thumb.jpeg')
					 }
					 //thumb = imgurl.replace('.jpg', '-thumb.jpg')
					// jQuery('.wp-main-image').val(imgurl)
					
					jQuery('input[name=multi_image_textarea'+counter+']').val(imgurl)
					// jQuery('.wp-multi-image-textarea-src').attr('src', thumb)
					/* jQuery('.wp-multi-image-textarea-details-list-desc.wp-image-filename').text(file_name);
					 jQuery('.wp-multi-image-textarea-details-list-desc.wp-image-filesize').text(size+' kb');
					 jQuery('.wp-multi-image-textarea-details-list-desc.wp-image-dimensions').text(width+' x '+height)
					 jQuery('.wp-upload-thumb').attr('src', thumb)
					 jQuery('#add_image').hide();
					 jQuery('.wp-multi-image-textarea-note').hide();
					  jQuery('.wp-multi-image-textarea-src').show()
					  jQuery('.wp-multi-image-textarea-details-list').show();
					  jQuery('.wp-main-image .wp-delete').show();*/
					 
					
					var append_string = '<li class="cp-multi-image-textarea-list-item multi_image_textarea'+counter+'">';
					append_string+= '<input type="hidden" value="e9864ba28f" id="multi_image_textarea_noncename'+counter+'" name="multi_image_textarea_noncename'+counter+'">';
					append_string+= '<input type="hidden" value="'+imgurl+'" name="multi_image_textarea'+counter+'" class="wp-multi-image-textarea">';
				
					append_string+= '<div class="wp-multi-image-textarea-information">';
					append_string+= '<img src="'+thumb+'" class="wp-image-thumb">';
					append_string+= '<input type="hidden" class="wp-multi-image-textarea-thumb" value="">';
					append_string+= '<dl class="wp-multi-image-textarea-details-list">';		
					append_string+= '<dt class="wp-multi-image-textarea-details-list-title wp-image-filename">Filename:</dt>'
					append_string+= '<dd class="wp-multi-image-textarea-details-list-desc wp-image-filename"></dd>';
					append_string+= '<dt class="wp-multi-image-textarea-details-list-title wp-image-dimensions">Dimensions:</dt>';
					append_string+= '<dd class="wp-multi-image-textarea-details-list-desc wp-image-dimensions"></dd>';
					append_string+= '<dt class="wp-multi-image-textarea-details-list-title wp-image-filesize">File Size:</dt>';
					append_string+= '<dd class="wp-multi-image-textarea-details-list-desc wp-image-filesize"></dd>';
					append_string+= '<dt class="wp-multi-image-textarea-details-list-title wp-image-date">Upload Date:</dt>';
					append_string+= '<dd class="wp-multi-image-textarea-details-list-desc wp-image-date">04/10/2010</dd>';
					append_string+= '</dl>';
					append_string+= '</div>';
					append_string+= '<a id="multi_image_textarea'+counter+'" class="wp-delete button button-highlighted" href="#">Remove Photo</a>';
					append_string+= '<input type="hidden" value="e9864ba28f" id="multi_image_textarea_content_noncename'+counter+'" name="multi_image_textarea_content_noncename'+counter+'">';
					append_string+= '<input class="wp-multi-image-textarea_content" type="text" name="multi_image_textarea_content'+counter+'" value=""  />';
					
					append_string+= '<div class="cp-product-attribute-section multi_image_textarea_textarea">';
					append_string+= '<input type="hidden" name="multi_image_textarea_textarea_noncename'+counter+'" id="multi_image_textarea_textarea_noncename'+counter+'" value="" />';
					append_string+= '<span class="cp-product-attribute-section-title"></span>';
					append_string+= '<textarea cols="44" class="wp-multi-image-textarea_textarea" name="multi_image_textarea_textarea'+counter+'" value=""></textarea>';
					append_string+= '</div>';					
					append_string+= '</li>';
				
				

				
				
				
					jQuery('.cp-multi-image-textarea-attachments').append(append_string);
                	jQuery('input[value=num_multi_image_textareas]').parent().next().children('textarea').val(parseInt(jQuery('input[value=num_multi_image_textareas]').parent().next().children('textarea').val())+1);
                	
                	counter++;
                	
                	
                }
            });           
        }
        
        // in your app create uploader as soon as the DOM is ready
        // don't wait for the window to load  
        //window.onload = createMainUploader; 
	jQuery(window).load(function() { 
		//console.log('load')
		if(jQuery('.wp-image-thumb').attr('value')!= ''){
			jQuery('.wp-upload-thumb').attr('src', jQuery('.wp-image-thumb').val())
		}
			jQuery('#wp-multi-image-textarea-upload img').remove()


	});
	
	jQuery(document).ready(function(){
	/*** Populate Main Image if one exists ***/
	if(jQuery('.uploader').attr('id') != undefined && jQuery('.wp-multi-image-textarea').text() != ''){
		//console.log($('.uploader').attr('id'))
		createMultiTextareaUploader()
	}
	
	
	//jQuery('.qq-uploader').load
	
	
	

	jQuery('body').delegate('.cp-multi-image-textarea-list-item .wp-delete', 'click', function(){
		
		
		
		var group = '';						
				var group_counter = '';
				var desc_counter = '';
				var minusName = jQuery(this).attr('id')
				var number_labels = '';
				var aboveMinus = '';

				
				group = 'multi_image_textarea'
				
				group_counter = 'num_multi_image_textareas';        
				desc_counter = 'num_'+group;
							minusName = minusName.split(group);
				minusName = minusName[1]                       //get the number of the element to delete
				
				number_labels = jQuery('input[value='+group_counter+']').parent().next().children('textarea').val();  //get number of item
				aboveMinus = minusName;
				aboveMinus++;
				
				
	
				
				if (group == 'multi_image_textarea'){
					for(var i = minusName; i < number_labels; i++){
	    				jQuery('input[name=multi_image_textarea'+i+']').val(jQuery('input[name=multi_image_textarea'+aboveMinus+']').val())
	    				jQuery('.multi_image_textarea'+i+' .wp-image-thumb').attr('src',jQuery('.multi_image_textarea'+aboveMinus+' .wp-image-thumb').attr('src'))
	    				jQuery('input[name=multi_image_textarea_content'+i+']').val(jQuery('input[name=multi_image_textarea_content'+aboveMinus+']').val())
	    				jQuery('textarea[name=multi_image_textarea_textarea'+i+']').text(jQuery('textarea[name=multi_image_textarea_textarea'+aboveMinus+']').text())
	    				aboveMinus++;
	    			}	
				
					jQuery('li.multi_image_textarea'+number_labels).remove();
				}	
				
				
				jQuery('input[value='+group_counter+']').parent().next().children('textarea').val(parseInt(jQuery('input[value='+group_counter+']').parent().next().children('textarea').val())-1)
	    		var data = {
	    				action: 'ajax_action',
	    				label_count: number_labels,
	    		};
			 
			jQuery.post('admin-ajax.php', data, function(response){
			});
		
		

		return false;	
	})

	
	})
 </script>
<?php
} ?>
