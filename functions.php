<?php 

include('components/components.php');


//Interior Blog
function blog_top_picks($post) {
	?>
	<div class="gsv-moving-ideas-sub-blog-top-picks ">
						<h2 class="gsv-moving-ideas-sub-blog-top-picks-heading gsv-moving-ideas-sub-blog-wrap">Top Picks</h2>
					<div class="gsv-moving-ideas-sub-blog-top-picks-stories gsv-moving-ideas-sub-blog-wrap">
						<ol class="gsv-moving-ideas-sub-blog-top-picks-list">
							<li class="gsv-moving-ideas-sub-blog-top-picks-story gsv-moving-ideas-sub-blog-top-picks-story-first">
								<h2 class="gsv-moving-ideas-sub-blog-top-picks-story-heading"><a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-link',  $single = true));?>" ><?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-title',  $single = true));?></a></h2>
								<h5 class="gsv-moving-ideas-sub-blog-source gsv-moving-ideas-sub-blog-top-picks-source"><?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-source',  $single = true));?></h5>
								
								<p><?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-content',  $single = true));?></p>
								<a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-link',  $single = true));?>" class="gsv-moving-ideas-sub-blog-story-read-more">Read More</a>
								
							</li>
							
							<li class="gsv-moving-ideas-sub-blog-top-picks-story">
								<h2 class="gsv-moving-ideas-sub-blog-top-picks-story-heading"><a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-link',  $single = true));?>" ><?php echo(get_post_meta($post->ID, 'wpcf-top-pick2-title',  $single = true));?></a></h2>
								<h5 class="gsv-moving-ideas-sub-blog-source gsv-moving-ideas-sub-blog-top-picks-source"><?php echo(get_post_meta($post->ID, 'wpcf-top-pick2-source',  $single = true));?></h5>
								
								<p><?php echo(get_post_meta($post->ID, 'wpcf-top-pick2-content',  $single = true));?></p>
								<a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick2-link',  $single = true));?>" class="gsv-moving-ideas-sub-blog-story-read-more">Read More</a>
								
							</li>
							
							<li class="gsv-moving-ideas-sub-blog-top-picks-story gsv-moving-ideas-sub-blog-top-picks-story-third">
								<h2 class="gsv-moving-ideas-sub-blog-top-picks-story-heading"><a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick1-link',  $single = true));?>" ><?php echo(get_post_meta($post->ID, 'wpcf-top-pick3-title',  $single = true));?></a></h2>
								<h5 class="gsv-moving-ideas-sub-blog-source gsv-moving-ideas-sub-blog-top-picks-source"><?php echo(get_post_meta($post->ID, 'wpcf-top-pick3-source',  $single = true));?></h5>
								
								<p><?php echo(get_post_meta($post->ID, 'wpcf-top-pick3-content',  $single = true));?></p>
								<a href="<?php echo(get_post_meta($post->ID, 'wpcf-top-pick3-link',  $single = true));?>" class="gsv-moving-ideas-sub-blog-story-read-more">Read More</a>
								
							</li>
							
						</ol>
						
					</div>
					
				</div>
				<?php
}



function blog_secondary_stories($post) {
	
	
	if(get_post_meta($post->ID, 'num_other_news',  $single = true) > 0){
		$other_stories = 'true';
	}else{
		$other_stories = 'false';
	}
	
	
	if(get_post_meta($post->ID, 'num_upcoming_dates',  $single = true) > 0){
		$upcoming_dates = 'true';
	}else{
		$upcoming_dates = 'false';
	}
	?>
	
	<div class="gsv-moving-ideas-sub-blog-secondary-stories">
					<?php if($other_stories == 'true'){ ?>
					<div class="gsv-moving-ideas-sub-blog-secondary-stories-other-news <?php if($upcoming_dates == 'false'){?>gsv-moving-ideas-sub-blog-secondary-stories-other-news-full <?php }?> gsv-moving-ideas-sub-blog-wrap gsv-moving-ideas-sub-blog-secondary-stories-section">	
					
					<h3 class="gsv-moving-ideas-sub-blog-secondary-stories-heading">Other News</h3>
						
						<ol class="gsv-moving-ideas-sub-blog-secondary-stories-other-news-list">
							
							<?php for($i = 1; $i <= get_post_meta($post->ID, 'num_other_news',  $single = true); $i++){ ?>
						
							<li class="gsv-moving-ideas-sub-blog-secondary-stories-other-news-list-item">
								<a href="<?php echo(get_post_meta($post->ID, 'other_news_link'.$i,  $single = true));?>" class="gsv-moving-ideas-sub-blog-secondary-stories-other-news-list-item-link"><?php echo(get_post_meta($post->ID, 'other_news_heading'.$i,  $single = true));?></a> <span class="gsv-moving-ideas-sub-blog-source"><?php echo(get_post_meta($post->ID, 'other_news_source'.$i,  $single = true));?></span>
							</li>
							<?php } ?>
							
							
						</ol>
						
					</div>
					
					<?php } ?>
					<!-- Upcoming Dates -->
					<?php if($upcoming_dates == 'true'){ ?>
					<div class="gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates <?php if($other_stories == 'false'){?>gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates-full <?php }?> gsv-moving-ideas-sub-blog-wrap gsv-moving-ideas-sub-blog-secondary-stories-section">
						<h3 class="gsv-moving-ideas-sub-blog-secondary-stories-heading">Upcoming Dates</h3>
						
						<ol class="gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates-list">
							
							<?php for($i = 1; $i <= get_post_meta($post->ID, 'num_upcoming_dates',  $single = true); $i++){ ?>
						
							<li class="gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates-list-item">
								<h3 class="gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates-list-item-heading"><a href="<?php echo(get_post_meta($post->ID, 'upcoming_dates_link'.$i,  $single = true));?>" target="_blank"><?php echo(get_post_meta($post->ID, 'upcoming_dates_heading'.$i,  $single = true));?></a></h3>
								<h4 class="gsv-moving-ideas-sub-blog-secondary-stories-upcoming-dates-list-item-source gsv-moving-ideas-sub-blog-source"><?php echo(get_post_meta($post->ID, 'upcoming_dates_date_source'.$i,  $single = true));?></h4>
								
								<p><?php echo(get_post_meta($post->ID, 'upcoming_dates_content'.$i,  $single = true));?></p>
								
							</li>
							
							<?php } ?>

							
						</ol>
						
					</div>
					<?php } ?>
					
				</div>
				<?php 
}


if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

add_image_size( 'Carousel Blog', 130, 59, true );

/** Register Sidebar **/

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));


function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 255;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/********************
	Companies
********************/
function companies() {
	build_company_attributes();
	build_two_col_table('Featured Content', 'Article Title', 'Link', 'Date');	
}


function members() {
	build_single_list_two('Key Board Members');
	build_attribute_list('Management Team');
	build_single_list('Megatrends');
}


function blog_interior(){
	build_other_news('Other News');	
}

function blog_interior2(){
	build_upcoming_dates('Upcoming Dates');
}

add_action('init', 'register_companies');

function register_companies() {
	$args = array(
    	'label' => __('Companies'),
    	'singular_label' => __('Company'),
    	'public' => true,
    	'show_ui' => true,
    	'capability_type' => 'page',
    	'hierarchical' => true,
    	'rewrite' => true,
    	'taxonomies' => array('post_tag', 'category'),
    	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields')
    );
	register_post_type( 'investment-portfolio' , $args );
}

/* Add Company Categories */
 $company_type = array(
    'name' => _x( 'Portfolio Theme', 'taxonomy general name' ),
    'singular_name' => _x( 'Portfolio Theme', 'taxonomy singular name' ),
    'all_items' => __( 'Portfolio Theme' ),
    'edit_item' => __( 'Edit Portfolio Theme' ), 
    'update_item' => __( 'Update Portfolio Theme' ),
    'add_new_item' => __( 'Add New Portfolio Theme' ),
    'new_item_name' => __( 'New Portfolio Theme Name' ),
    'menu_name' => __( 'Portfolio Theme' ),
  ); 	

  register_taxonomy('category-type','investment-portfolio', array(
    'hierarchical' => true,
    'labels' => $company_type,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category-type' ),
  ));



/**************
	Post Stuff
**************/
function post_stuff() {
	//build_property_attributes();
	build_property_attributes2();
}



/**************
	Page Stuff
**************/
function page_stuff() {

	build_page_fields();
}

function create_meta_box() {
	global $theme_name;
	
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

	$post = get_post($post_id);
	
	if ( function_exists('add_meta_box') ) {
		add_meta_box( 'companies', 'Companies', 'companies', 'investment-portfolio', 'normal', 'high' );
		add_meta_box( 'members', 'members', 'members', 'investment-portfolio', 'normal', 'high' );
		add_meta_box( 'blog_interior', 'Other News', 'blog_interior', 'gsv-edu-daily', 'normal', 'high' );
		add_meta_box( 'blog_interior2', 'Upcoming Dates', 'blog_interior2', 'gsv-edu-daily', 'normal', 'high' );
		
		add_meta_box( 'blog_interior', 'Other News', 'blog_interior', 'gsv-green-daily', 'normal', 'high' );
		add_meta_box( 'blog_interior2', 'Upcoming Dates', 'blog_interior2', 'gsv-green-daily', 'normal', 'high' );
		
		add_meta_box( 'blog_interior', 'Other News', 'blog_interior', 'gsv-internet-daily', 'normal', 'high' );
		add_meta_box( 'blog_interior2', 'Upcoming Dates', 'blog_interior2', 'gsv-internet-daily', 'normal', 'high' );
		
		add_meta_box( 'post_stuff', 'Customization', 'post_stuff', 'post', 'normal', 'low' );
		add_meta_box( 'page_stuff', 'Customization', 'page_stuff', 'page', 'normal', 'low' );
	}
}


//Hide Main Text Editor
function remove_pages_editor(){
    remove_post_type_support( 'investment-portfolio', 'editor' );
}   
add_action( 'init', 'remove_pages_editor' );

add_action('admin_head', 'add_css');
add_action('admin_menu', 'create_meta_box');

function add_css(){
	?><link type="text/css" rel="stylesheet" href="http://gsvcap.com/dev/wp-content/themes/gsvcap/components/css/components.css">  
	
	<script type="text/javascript">
		jQuery(document).ready(function(){
			if(jQuery('#members .cp-product-attribute-attribute-bullets').html() != ''){
				
				//add key members to people tab
				jQuery('#people-tab .inside').append(jQuery('#members .cp-product-attribute-description-bullets-2'));
				//jQuery('#members .cp-product-attribute-description-bullets-2')
				
				//add managment team to people tab
				jQuery('#people-tab .inside').append(jQuery('#members .cp-product-attribute-attribute-bullets'));
				//jQuery('#members .cp-product-attribute-attribute-bullets')
				
				
				
				//add megatrends to potential tab
				jQuery('#potential-tab .inside').append(jQuery('#members .cp-product-attribute-description-bullets'));
				//jQuery('#members .cp-product-attribute-description-bullets')
				
				
			}
		})
	</script>
	<?php
}


//Comments
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
     
     <div class="comment-info">
      <div class="comment-author vcard">
         

         <?php echo( get_comment_author_link()); ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

	      <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s '), get_comment_date()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
	  </div> <!-- /comment-info -->

      <div class="comment-text"><span class="comment-arrow"></span><?php comment_text() ?></div>

      <!-- div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div -->
     </div>
<?php
        }


//Twitter
function get_status($twitter_id, $count = 3, $hyperlinks = true) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, "http://api.twitter.com/1/statuses/user_timeline/$twitter_id.json?count=$count");
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $src = curl_exec($c);
    
    curl_close($c);
    
   print_r($src);
   	$src = json_decode($src);
   	?>
   	<ul class="twitter-timeline"> 
   	<?php
    foreach($src as $tweet){
    	 $status = htmlentities($tweet->text);
    	 $time = htmlentities($tweet->created_at);
    	 $time = strtotime($time);
    	 //echo($status);
    	 if( $hyperlinks ) $status = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", " <a href=\"\\0\">\\0</a>", $status);
    	 	
    	 	 $status = preg_replace('/[^(\x20-\x7F)]*/','', $status);
    	 ?>
    	 <li class="tweet"><?php  echo($status);?><br /> <em class="tweet-time"><?php echo(time_ago($time));?> ago </em></li>
    	 <?php
    	
    }
   ?> </ul> <?php
   
}



//Time ago
function time_ago($tm,$rcs = 0) {
   $cur_tm = time(); $dif = $cur_tm-$tm;
   $pds = array('second','minute','hour','day','week','month','year','decade');
   $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
   for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

   $no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
   if(($rcs == 1)&&($v >= 1)&&(($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
   return $x;
}


?>