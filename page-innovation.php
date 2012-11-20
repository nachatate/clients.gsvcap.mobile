<?php
/*
	Template Name: Innovation
	*/
get_header();
	
?>
		<div role="main" class="gsv-content">			
			<div role="main" class="gsv-content-contents gsv-about-innovation-content-contents clearfix">
			
				<ul class="gsv-breadcrumbs-list">
					<li class="gsv-breadcrumbs-list-item">
						<a href="<?php bloginfo('wpurl');?>/about" class="gsv-breadcrumbs-list-item-link">About GSV</a>
					</li>
					<li class="gsv-breadcrumbs-list-item">
						<h1 class="gsv-breadcrumbs-list-item-heading">Innovation</h1>
					</li>
				</ul>
				
				<div data-js="gsv-innovation-banner" class="gsv-innovation-banner">
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-1-left.jpg" class="gsv-innovation-banner-image left active" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-1-right.jpg" class="gsv-innovation-banner-image right active" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-2-left.jpg" class="gsv-innovation-banner-image left inactive" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-2-right.jpg" class="gsv-innovation-banner-image right inactive" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-3-left.jpg" class="gsv-innovation-banner-image left inactive" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-3-right.jpg" class="gsv-innovation-banner-image right inactive" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-4-left.jpg" class="gsv-innovation-banner-image left inactive" />
					<img src="<?php bloginfo('template_url');?>/i/about/innovation/gsv-innovation-banner-image-4-right.jpg" class="gsv-innovation-banner-image right inactive" />
				</div>
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