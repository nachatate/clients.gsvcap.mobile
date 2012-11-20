<?php
get_header();
	
?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div role="main" class="gsv-content">	
			<div class="gsv-moving-ideas-heading">
				<a href="<?php echo(bloginfo(wpurl)); ?>/moving-ideas/"><img src="<?php bloginfo('template_url');?>/i/gsv-moving-ideas-blog-heading.jpg" alt="Moving Ideas" /></a>
			</div>
			<div role="main" class="gsv-content-contents gsv-moving-ideas-blog-contents clearfix">
				<div class="gsv-moving-ideas-blog-contents-posts">
					
						
							
							
							
								<span class="gsv-moving-ideas-blog-list-item-banner">
									<?php
									
									 the_post_thumbnail();
								?>
								</span>
									<div class="gsv-moving-ideas-blog-list-item-date"><?php echo(get_the_date('M d')); ?><span class="gsv-moving-ideas-blog-list-item-date-year"><?php echo(get_the_date('Y')); ?></span></div>

								<div class="gsv-moving-ideas-blog-list-item-content">
																
									
									
									<div class="gsv-moving-ideas-blog-list-item-aside">
										
										<h4 class="gsv-moving-ideas-blog-list-item-aside-tags-headline">Tagged</h4>
										
										<ul class="gsv-moving-ideas-blog-list-item-aside-tags-list">
										<?php 
											
											$post_tags = wp_get_post_tags( $post->ID );
											foreach($post_tags as $tag){ ?>
											
											<li class="gsv-moving-ideas-blog-list-item-aside-tags-list-item">
												<a href="<?php echo get_tag_link($tag->term_id); ?>" class="gsv-moving-ideas-blog-list-item-aside-tags-list-item-link"><?php echo($tag->name);?></a>
											</li>
											<?php	
										
											}
										?>
										</ul>
										
										<div class="gsv-moving-ideas-blog-list-item-aside-comments">
											<a class="gsv-moving-ideas-blog-list-item-aside-comments-link" href="<?php the_permalink();?>"><span><?php comments_number(); ?></span></a>
											
										</div>
										<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f5de66c5e790ddd"></script>
<!-- AddThis Button END -->
										
									</div>
									
									<div class="gsv-moving-ideas-blog-list-item-story">
										<h2 class="gsv-moving-ideas-blog-list-item-title"><?php the_title();?></h2>

										
										
										<?php the_content(); ?>
									<?php endwhile; else: ?>
										<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
									<?php endif; ?>
									<!--p>....................</p>
									<p class="post-subscribe">For more in-depth insights and analysis, <a href="<?php echo(bloginfo(wpurl)); ?>">subscribe</a> to GSV's A 2 Apple as well as other growth-oriented newsletters.</p-->
										
									</div>
	
									
								</div>
								
								<!--div class="gsv-moving-ideas-story-comments-box">
										<div class="gsv-moving-ideas-blog-list-item-aside gsv-moving-ideas-blog-list-item-aside-comments-gutter">
											<h4 class="gsv-moving-ideas-comments-headline">Comments</h4>
										</div>
										
										
										
									</div -->
							
							<!--div class="gsv-story-comments-list">
										
											
											<?php // comments_template(); ?>
										</div-->
					
					
				</div>
				
				<?php get_sidebar('blog');?>
				
			</div>

		</div>		
<?php
	get_footer();
?>