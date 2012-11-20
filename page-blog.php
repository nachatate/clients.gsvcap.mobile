<?php
/*
	Template Name: Blog
	*/
get_header();
	
?>
		<div role="main" class="gsv-content">	
			<div class="gsv-moving-ideas-heading">
				<a href="<?php echo(bloginfo(wpurl)); ?>/moving-ideas/"><img class="gsv-moving-ideas-heading-banner" src="<?php bloginfo('template_url');?>/i/gsv-moving-ideas-blog-heading.jpg" alt="Moving Ideas" /></a>
				
				<nav class="gsv-blog-nav">
					<ul>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-first gsv-blog-nav-list-item-first-active"><a href="<?php bloginfo('wpurl');?>/moving-ideas/" class="gsv-blog-nav-list-item-link">A 2 Apple</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-second"><a href="#" class="gsv-blog-nav-list-item-link">Bubblin'</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-third"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-edu-daily/" class="gsv-blog-nav-list-item-link">GSV Edu <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fourth"><a href="#" class="gsv-blog-nav-list-item-link">GSV Green <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fifth"><a href="#" class="gsv-blog-nav-list-item-link">GSV Internet <br /> Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-sixth"><a href="#" class="gsv-blog-nav-list-item-link">Socially Mobile  <br />Weekly</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-last"><a href="<?php bloginfo('wpurl');?>/moving-ideas/ipo-weekly/" class="gsv-blog-nav-list-item-link">IPO Weekly</a></li>
					</ul>
				</nav>
			</div>
			<div role="main" class="gsv-content-contents gsv-moving-ideas-blog-contents clearfix">
				<div class="gsv-moving-ideas-blog-contents-posts">
					<ul class="gsv-moving-ideas-blog-list">
						<?php
							$count = 1;
							$args = array( 'numberposts' => 100,  'order' => 'DESC', 'category__not_in' => array(3) );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post);?>
							
							<li class="gsv-moving-ideas-blog-list-item <?php if($count == sizeof($myposts)){?> gsv-moving-ideas-blog-list-item-last<?php }?>">
							
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
										
										<!--div class="gsv-moving-ideas-blog-list-item-aside-comments">
											<a class="gsv-moving-ideas-blog-list-item-aside-comments-link" href="<?php the_permalink();?>"><span><?php comments_number(); ?></span></a>
										</div -->
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
										<h2 class="gsv-moving-ideas-blog-list-item-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

										<?php the_excerpt();?>
									
										
										<a class="gsv-moving-ideas-blog-list-item-story-read-more-link" href="<?php the_permalink();?>">Read More</a>
										
									</div>
									
									
								</div>
							</li>
							
						<?php 
							$count++;
						endforeach; ?>
					</ul>
				</div>
				
				<?php get_sidebar('blog');?>
				
			</div>

		</div>		
<?php
	get_footer();
?>