<?php

get_header();
 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div role="main" class="gsv-content">	
			<div class="gsv-moving-ideas-heading">
				<a href="<?php echo(bloginfo(wpurl)); ?>/moving-ideas/"><img class="gsv-moving-ideas-heading-banner" src="<?php bloginfo('template_url');?>/i/gsv-moving-ideas-blog-heading.jpg" alt="Moving Ideas" /></a>
				
				<nav class="gsv-blog-nav">
					<ul>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-first"><a href="<?php bloginfo('wpurl');?>/moving-ideas/" class="gsv-blog-nav-list-item-link">A 2 Apple</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-second"><a href="#" class="gsv-blog-nav-list-item-link">Bubblin'</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-third"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-edu-daily/" class="gsv-blog-nav-list-item-link ">GSV Edu <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fourth"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-green-daily/" class="gsv-blog-nav-list-item-link">GSV Green <br />Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-fifth"><a href="<?php bloginfo('wpurl');?>/moving-ideas/gsv-internet-daily/" class="gsv-blog-nav-list-item-link">GSV Internet <br /> Daily</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-sixth"><a href="#" class="gsv-blog-nav-list-item-link">Socially Mobile  <br />Weekly</a></li>
						<li class="gsv-blog-nav-list-item gsv-blog-nav-list-item-active gsv-blog-nav-list-item-last-active  gsv-blog-nav-list-item-last"><a href="<?php bloginfo('wpurl');?>/moving-ideas/ipo-weekly/" class="gsv-blog-nav-list-item-link  gsv-blog-nav-list-item-link-active">IPO Weekly</a></li>
					</ul>
				</nav>
			</div>
			<div role="main" class="gsv-content-contents gsv-moving-ideas-sub-blog-contents gsv-moving-ideas-sub-blog-ipo-weekly-contents clearfix">
				
				<div class="gsv-moving-ideas-sub-blog-wrap">
			
					<h1 class="gsv-moving-ideas-sub-blog-heading">IPO Weekly<span class="gsv-moving-ideas-sub-blog-heading-date"><?php the_title();?></span></h1>

				</div>
				<div class="ipo-weekly-main-content">
					<div class="ipo-weekly-main-content-text">
						<?php the_content(); ?>
					</div>
					<div class="ipo-weekly-main-content-aside">
						<h3 class="ipo-weekly-main-content-aside-heading">Detailed Data,<br/> Charts + Graphs</h3>
						<img src="<?php bloginfo('template_url');?>/i/blog/ipo-weekly-main-content-aside-pdf-image.png" class="ipo-weekly-main-content-aside-pdf-image" />
						<a href="#" class="ipo-weekly-main-content-aside-pdf-download">View PDF</a>
						<p class="ipo-weekly-main-content-aside-pdf-caption">10 pages | 331 KB</p>
					</div>
				</div>
				<div class="ipo-weekly-ipo-dashboard">
					<h2 class="ipo-weekly-sub-heading">IPO Dashboard</h2>
					<img src="<?php echo(get_post_meta($post->ID, 'wpcf-ipo-dashboard',  $single = true));?>" alt="IPO Dashboard" />
				</div>
				<div class="ipo-weekly-upcoming-ipo-profile">
					<h2 class="ipo-weekly-sub-heading">Upcoming IPO Profile</h2>
					<img class="ipo-weekly-upcoming-ipo-profile-image" src="<?php echo(get_post_meta($post->ID, 'wpcf-upcoming-ipo-profile-image',  $single = true));?>" alt="Upcoming IPO Profile" />
					
					<div class="ipo-weekly-upcoming-ipo-profile-text"><?php echo(get_post_meta($post->ID, 'wpcf-upcoming-ipo-profile-content',  $single = true));?></div>
				</div>
				
				
			</div>

		</div>		
<?php
		endwhile;
		endif; 	
	get_footer();
?>