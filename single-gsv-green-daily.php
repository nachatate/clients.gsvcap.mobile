<?php

get_header();
	
?>
		<div role="main" class="gsv-content">	
			<div class="gsv-moving-ideas-heading">
				<a href="<?php echo(bloginfo(wpurl)); ?>/moving-ideas/"><img class="gsv-moving-ideas-heading-banner" src="<?php bloginfo('template_url');?>/i/gsv-moving-ideas-blog-heading.jpg" alt="Moving Ideas" /></a>
				
				<nav class="gsv-blog-nav">
					<ul>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-first"><a href="#" class="gsv-blog-nav-list-item-link">A 2 Apple</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-second"><a href="#" class="gsv-blog-nav-list-item-link">Bubblin'</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-third"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-edu-daily/" class="gsv-blog-nav-list-item-link ">GSV Edu <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fourth"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-green-daily/" class="gsv-blog-nav-list-item-link gsv-blog-nav-list-item-link-active">GSV Green <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fifth"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-internet-daily/" class="gsv-blog-nav-list-item-link">GSV Internet <br /> Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-sixth"><a href="#" class="gsv-blog-nav-list-item-link">Socially Mobile  <br />Weekly</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-last"></li>
					</ul>
				</nav>
			</div>
			<div role="main" class="gsv-content-contents gsv-moving-ideas-sub-blog-contents clearfix">
				
				<div class="gsv-moving-ideas-sub-blog-wrap">
			
					<h1 class="gsv-moving-ideas-sub-blog-heading">Green Daily <span class="gsv-moving-ideas-sub-blog-heading-date"><?php the_title();?></span></h1>
					
					
					
					
					
				</div>
				<?php blog_top_picks($post); ?>	
				
				<?php blog_secondary_stories($post); ?>
				
			</div>

		</div>		
<?php

	get_footer();
?>