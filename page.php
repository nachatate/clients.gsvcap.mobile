<?php
/*
	Template Name: Default Theme
	*/
get_header();
	
	$headline = get_post_meta($post->ID, "headline_value", $single = true);
	
	$pos = strpos($headline, '<br />');
	
	
	
	
?>
		<div role="main" class="gsv-content">			
			<div role="main" class="gsv-content-contents gsv-content-contents-with-grounding<?php if($pos > 0){?>-double<?php }?> clearfix">
			<?php 
	
				$ancestors = $post->ancestors;
				$postcrumb = $post->post_title;
				if(sizeof($ancestors > 0)){
					$parent = get_post($post->post_parent);
					$parentTitle = $parent->post_title;
					if(strtolower($parentTitle) == strtolower('Philosophy + Purpose')){
							$parentTitle = 'About GSV';
						}
					if(sizeof($parent->ancestors) > 0){
						$grandparent = get_post($parent->post_parent);
						$grandparentTitle = $grandparent->post_title;
						if(strtolower($grandparentTitle) == strtolower('Philosophy + Purpose')){
							$grandparentTitle = 'About GSV';
						}
					}
				}
				
				
			?>
				<ul class="gsv-breadcrumbs-list">
					<?php
						if($grandparent != ''){ ?>
					<li class="gsv-breadcrumbs-list-item">
						<a href="<?php echo(bloginfo('wpurl')); ?>/<?php echo($grandparent->post_name);?>" class="gsv-breadcrumbs-list-item-link"><?php echo($grandparentTitle);?></a>
					</li>
					<?php } ?>
					
					<?php
						if($parent != ''){ ?>
					<li class="gsv-breadcrumbs-list-item">
						<a href="<?php echo(bloginfo('wpurl')); ?>/<?php if($grandparent != ''){ echo($grandparent->post_name.'/');} echo($parent->post_name);?>" class="gsv-breadcrumbs-list-item-link"><?php echo($parentTitle);?></a>
					</li>
					<?php } ?>
					<li class="gsv-breadcrumbs-list-item">
						<h1 class="gsv-breadcrumbs-list-item-heading"><?php echo($postcrumb);?></h1>
					</li>
				</ul>
				
				<h2 class="gsv-content-subheading gsv-content-subheading-grounding <?php if($pos > 0){?>gsv-content-subheading-grounding-double<?php }?>"><?php echo($headline);?></h2>
				<?php remove_filter ('the_content', 'wpautop'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
								
			</div>
			
		</div>
		
<?php
	get_footer();
?>