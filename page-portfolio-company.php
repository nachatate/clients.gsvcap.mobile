<?php
/*
	Template Name: Portfolio Company
	*/
get_header();
	
?>	
		<div role="main" class="gsv-content gsv-investment-portfolio-content">	
				
			<div class="gsv-content-contents clearfix">
			
				<a href="<?php echo($absoluteURL); ?>investment-portfolio" class="gsv-back-to-portfolio-link">Back to Portfolio</a>
				
				<ul class="gsv-breadcrumbs-list">
					<li class="gsv-breadcrumbs-list-item">
						<a href="<?php echo($absoluteURL); ?>investment-portfolio" class="gsv-breadcrumbs-list-item-link">Investment Portfolio</a>
					</li>
					<li class="gsv-breadcrumbs-list-item">
						<h1 class="gsv-breadcrumbs-list-item-heading"><?php the_title(); ?></h1>
					</li>
				</ul>
				
				<h2 class="gsv-content-subheading gsv-investment-portfolio-content-subheading"><span class="gsv-investment-portfolio-subheading-why-we-like">Why we like</span> <?php the_title(); ?></h2>
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