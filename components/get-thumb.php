<?php
function get_thumb($thumb){

	if( strpos($thumb, '.jpg')){
		$thumb = str_replace('.jpg', '-thumb.jpg',$thumb );
	}else if( strpos($thumb, '.JPG')){
		$thumb = str_replace('.JPG', '-thumb.JPG',$thumb );
	}else if( strpos($thumb, '.png')){
		$thumb = str_replace('.png', '-thumb.png',$thumb );
	}else if( strpos($thumb, '.PNG')){
		$thumb = str_replace('.PNG', '-thumb.PNG',$thumb );
	}else if( strpos($thumb, '.gif')){
		$thumb = str_replace('.gif', '-thumb.gif',$thumb );
	}else if( strpos($thumb, '.GIF')){
		$thumb = str_replace('.GIF', '-thumb.GIF',$thumb );
	}else if( strpos($thumb, '.jpeg')){
		$thumb = str_replace('.jpeg', '-thumb.jpeg',$thumb );
	}else if( strpos($thumb, '.JPEG')){
		$thumb = str_replace('.JPEG', '-thumb.JPEG',$thumb );
	}
	$thumb = str_replace('uploads/', 'uploads/thumbs/', $thumb);
	
	
	return $thumb;
	
}
?>