<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page" data-enhance="false">

	<div data-role="header" data-position="fixed">
		<h1>My Title</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<ul class="gsv-investment-portfolio-landing-client-list">
					<?php
					$args = array( 'numberposts' => 100, 'post_type' => 'investment-portfolio', 'orderby' => 'menu_order', 'order' => 'ASC');
					
					$counter = 1;
					
					$myposts = get_posts( $args );
					
					$numIPs = sizeof($myposts);
					$lastRow = $numIPs % 4;
					
					if($lastRow == 3){
						$lastRow1 = $numIPs - 2;
						$lastRow2 = $numIPs - 1;
						$lastRow3 = $numIPs;
					}else if($lastRow == 0){
						$lastRow1 = $numIPs - 3;
						$lastRow2 = $numIPs - 2;
						$lastRow3 = $numIPs - 1;
						$lastRow4 = $numIPs;
					}
					
					
					
					
					foreach( $myposts as $post ) :	setup_postdata($post);?>	
					
					<li data-openIP="false" class="gsv-investment-portfolio-landing-client-list-item <?php if($counter % 4 == 0){ ?>gsv-investment-portfolio-landing-client-list-item-row-end<?php  } if($counter == $lastRow1 || $counter == $lastRow2 || $counter == $lastRow3 || $counter == $lastRow4){ ?> gsv-investment-portfolio-landing-client-list-item-last-row <?php }  ?>" data-title="<?php the_title();?>" data-counter="<?php echo($counter);?>" data-link="<?php the_permalink();?>" data-industry="<?php echo(get_post_meta($post->ID, "industry_value", $single = true));?>" data-percentage="<?php echo(get_post_meta($post->ID, "gsvc_percentage_value", $single = true));?>"  data-category="<?php echo(strip_tags( get_the_term_list($post->ID, 'category-type') )); ?>" >
					
						<span class="gsv-investment-portfolio-landing-client-list-item-client-logo <?php echo(strtolower(str_replace(' ','', get_the_title()))); ?>"><?php the_post_thumbnail('Listings'); ?></span>												
						<!--a href="<?php the_permalink();?>" class="gsv-investment-portfolio-landing-client-list-item-more-link">Why We Like It</a -->						
						<!--span class="gsv-investment-portfolio-landing-client-list-item-download-report-link"></span -->
						
						<div class="gsv-investment-portfolio-landing-client-list-item-active-arrow"></div>
						
					</li>
				
					<?php 
					$counter++;
					endforeach; ?>
					<li data-active="false" class="gsv-investment-portfolio-landing-client-list-item gsv-investment-portfolio-landing-client-list-item-details ">
						<span class="gsv-investment-portfolio-landing-client-list-item-details-shadow"></span>
						<h3 class="gsv-investment-portfolio-landing-client-list-item-details-heading"></h3>
						
						<span class="gsv-investment-portfolio-landing-client-list-item-details-industry"></span>
						<span class="gsv-investment-portfolio-landing-client-list-item-details-percentage"></span>
						
						<div class="gsv-investment-portfolio-landing-client-list-item-details-why-we-like-it">
							<a class="gsv-investment-portfolio-landing-client-list-item-details-why-we-like-it-link" href="#" target="_blank">Why We Like It</a>
						</div>
						
					</li>
				</ul>		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>