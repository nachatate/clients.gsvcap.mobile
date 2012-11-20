<?php 
include('youtube.php');
include('title-with-content.php');
include('title-with-content2.php');
include('title-without-content.php');
include('title-without-content2.php');
include('title-with-wysiwyg.php');
include('title-with-wysiwyg2.php');

include('description-list.php');
include('checkbox-features.php');
include('prop-attributes.php');
include('prop-attributes2.php');
include('price.php');
include('table-summary.php');
include('attribute-list.php');
include('other-news.php');
include('upcoming-dates.php');

include('single-list.php');
include('single-list2.php');
include('single-list3.php');
include('single-list4.php');
include('single-list5.php');
include('single-list6.php');
include('multi-content.php');
include('multi-content2.php');
include('two-col-table.php');
include('two-col-table2.php');
include('two-col-table3.php');
include('three-col-table.php');
include('get-thumb.php');
include('single-input.php');
include('single-input2.php');
include('single-input3.php');
include('single-textarea.php');
include('contact-info.php');
include('subsection-just-content.php');
include('subsection-just-content2.php');
include('subsection-just-content3.php');
include('multi-testimonial.php');

include('page-fields.php');

	function save_component($component, $post, $_POST, $post_id, $basename){
		foreach($component as $meta_box) {
		
			// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], $basename )) {

			return $post_id;
			}
			
			if ( 'page' == $_POST['post_type'] ) {
			if ( !current_user_can( 'edit_page', $post_id ))
			return $post_id;
			} else {
			if ( !current_user_can( 'edit_post', $post_id ))
			return $post_id;
			}
			
			$banner_data = $_POST[$meta_box['name'].'_value'];
			//echo('BANNER'. $banner_data);
			if(get_post_meta($post_id, $meta_box['name'].'_value') == ""){
			add_post_meta($post_id, $meta_box['name'].'_value', $banner_data, true); }
			elseif($banner_data != get_post_meta($post_id, $meta_box['name'].'_value', true)){
			update_post_meta($post_id, $meta_box['name'].'_value', $banner_data);}
			elseif($banner_data == "")
			delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	
	}

	function save_multi_component($component, $post, $_POST, $post_id, $basename, $num_counter){
		foreach($component as $meta_box) {
		// Verify
			for($count = 1; $count <= get_post_meta($post_id, $num_counter, $single = true); $count++){
				//if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'.$count], plugin_basename(__FILE__) )) {
				//return $post_id;
				//}
				
				if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
				return $post_id;
				} else {
				if ( !current_user_can( 'edit_post', $post_id ))
				return $post_id;
				}
				$data = $_POST[$meta_box['name'].$count];
				
				if(get_post_meta($post_id, $meta_box['name'].$count) == "")
				add_post_meta($post_id, $meta_box['name'].$count, $data, true);
				elseif($data != get_post_meta($post_id, $meta_box['name'].$count, true))
				update_post_meta($post_id, $meta_box['name'].$count, $data);
				elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].$count, get_post_meta($post_id, $meta_box['name'].$count, true));
			}
		}
	}
?>