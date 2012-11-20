<?php
get_header();
	
?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div role="main" class="gsv-content gsv-investment-portfolio-content">	
				
			<div class="gsv-content-contents clearfix">
			
				<a href="<?php echo(bloginfo(wpurl)); ?>/investment-portfolio" class="gsv-back-to-portfolio-link">Back to Portfolio</a>
				
				<ul class="gsv-breadcrumbs-list">
					<li class="gsv-breadcrumbs-list-item">
						<a href="<?php echo(bloginfo(wpurl)); ?>/investment-portfolio" class="gsv-breadcrumbs-list-item-link">Investment Portfolio</a>
					</li>
					<li class="gsv-breadcrumbs-list-item">
						<h1 class="gsv-breadcrumbs-list-item-heading"><?php the_title(); ?></h1>
					</li>
				</ul>
				
				<h2 class="gsv-content-subheading gsv-investment-portfolio-content-subheading"><span class="gsv-investment-portfolio-subheading-why-we-like">Why we like</span> <?php the_title(); ?></h2>
				<div class="gsv-investment-portfolio-selected-client">
				
					<a href="<?php echo(get_post_meta($post->ID, "company_url_value", $single = true));?>" title="<?php echo($pageTitle); ?>" target="_blank"><?php the_post_thumbnail('Full'); ?><a>
					
					<p class="gsv-investment-portfolio-selected-client-percent">Percent of GSV Portfolio: <span class="gsv-investment-portfolio-selected-client-percent-value">20%</span></p>
				
				</div>
				
				<div class="gsv-tabset gsv-investment-portfolio-tabset" aria-multiselectable="false">
				
					<ul class="gsv-tabset-navigation-list" role="tablist">
					
						<li id="gsv-tabset-overview-tab" tabindex="0" role="tab" aria-controls="gsv-tabset-overview" class="gsv-tabset-navigation-list-item"><a href="gsv-tabset-overview" class="gsv-tabset-navigation-list-item-link gsv-tabset-navigation-list-item-overview-link active">The Four Ps</a></li>
						<li id="gsv-tabset-people-tab" tabindex="-1" role="tab" aria-controls="gsv-tabset-people" class="gsv-tabset-navigation-list-item"><a href="gsv-tabset-people" class="gsv-tabset-navigation-list-item-link">People</a></li>
						<li id="gsv-tabset-product-tab" tabindex="-1" role="tab" aria-controls="gsv-tabset-product" class="gsv-tabset-navigation-list-item"><a href="gsv-tabset-product" class="gsv-tabset-navigation-list-item-link">Product</a></li>
						<li id="gsv-tabset-potential-tab" tabindex="-1" role="tab" aria-controls="gsv-tabset-potential" class="gsv-tabset-navigation-list-item"><a href="gsv-tabset-potential" class="gsv-tabset-navigation-list-item-link">Potential</a></li>
						<li id="gsv-tabset-predcitability-tab" tabindex="-1" role="tab" aria-controls="gsv-tabset-predictability" class="gsv-tabset-navigation-list-item"><a href="gsv-tabset-predictability" class="gsv-tabset-navigation-list-item-link">Predictability</a></li>
						
					</ul>
					
					<div class="gsv-tabset-wrapper">
					
						<div id="gsv-tabset-overview" role="tabpanel" aria-labeledby="gsv-tabset-overview-tab" aria-hidden="true" class="gsv-tabset-content active clearfix">
						
							<h2 class="gsv-tabset-content-heading">About</h2>
							
							<div class="gsv-tabset-content-col">
								
								<h3 class="gsv-tabset-content-col-heading"><?php echo(get_post_meta($post->ID, "wpcf-about-content", $single = true));?></h3> 
							
							</div>
							
							<div class="gsv-tabset-content-col">
							
								<div class="gsv-tabset-content-highlight-box">
								
									<h4 class="gsv-tabset-content-highlight-box-heading">Thesis</h4>
									
									<p><?php echo(get_post_meta($post->ID, "wpcf-thesis-content", $single = true));?></p>
									
								</div>
								
							</div>

						</div>
						
						<div id="gsv-tabset-people" role="tabpanel" aria-labeledby="gsv-tabset-people-tab" aria-hidden="false" class="gsv-tabset-content clearfix">
						
							<h2 class="gsv-tabset-content-heading">People</h2>
							
							<div class="gsv-tabset-content-col">
							
								<h3 class="gsv-tabset-content-col-heading"><?php echo(get_post_meta($post->ID, "wpcf-people-content", $single = true));?></h3>
							
							</div>
							
							<div class="gsv-tabset-content-col">
								
								<div class="gsv-tabset-content-highlight-box">
									<?php
									if(get_post_meta($post->ID, "num_single_list_twos", $single = true) > 0){ ?>
									
									<h4 class="gsv-tabset-content-highlight-box-heading">Key Board Members:</h4>
									
									<ul class="gsv-tabset-content-people-board-members-list">
										<?php
										for($i = 1; $i <= get_post_meta($post->ID, "num_single_list_twos", $single = true); $i++){ ?>
										<li class="gsv-tabset-content-people-board-members-list-item"><?php echo(get_post_meta($post->ID, "list_attribute_two".$i, $single = true));?></li>
										
										<?php } ?>
									</ul>
									
									<?php
									}
									
									
									if(get_post_meta($post->ID, "num_attribute_lists", $single = true) > 0){ ?>
									
									<h4 class="gsv-tabset-content-highlight-box-heading">Management Team</h4>
									
									<dl class="gsv-tabset-content-people-management-team-list">
										<?php 
										for($i = 1; $i <= get_post_meta($post->ID, "num_attribute_lists", $single = true); $i++){ ?>
										<dt class="gsv-tabset-content-people-management-team-list-title"><?php echo(get_post_meta($post->ID, "attribute_title".$i, $single = true));?></dt>
										<dd class="gsv-tabset-content-people-management-team-list-definition"><?php echo(get_post_meta($post->ID, "attribute_definition".$i, $single = true));?></dd>
								
										<?php } ?>
									</dl>
									
									<?php  } ?>
								
								</div>
								
							</div>
		
						</div>
						
						<div id="gsv-tabset-product" role="tabpanel" aria-labeledby="gsv-tabset-product-tab" aria-hidden="true" class="gsv-tabset-content clearfix">
						
							<h2 class="gsv-tabset-content-heading">Product</h2>
							
							<div class="gsv-tabset-content-col">
							
								<h3 class="gsv-tabset-content-col-heading"><?php echo(get_post_meta($post->ID, "wpcf-product-content", $single = true));?></h3>

								
							
							</div>
							
							<div class="gsv-tabset-content-col">
								<?php if(get_post_meta($post->ID, "wpcf-comapny-screenshot", $single = true) !=''){ ?>
								<a href="<?php echo(get_post_meta($post->ID, "company_url_value", $single = true));?>" title="<?php echo($pageTitle); ?>" target="_blank"><img src="<?php echo(get_post_meta($post->ID, "wpcf-comapny-screenshot", $single = true));?>" alt="<?php echo($pageTitle); ?>" /></a>
								<?php } ?>
							</div>
		
						</div>
						
						<div id="gsv-tabset-potential" role="tabpanel" aria-labeledby="gsv-tabset-potential-tab" aria-hidden="true" class="gsv-tabset-content clearfix">
						
							<h2 class="gsv-tabset-content-heading">Potential</h2>
							
							<div class="gsv-tabset-content-col">
							
								<h3 class="gsv-tabset-content-col-heading"><?php echo(get_post_meta($post->ID, "wpcf-potential-content", $single = true));?></h3>

							
							</div>
							
							<div class="gsv-tabset-content-col">
								<div class="gsv-tabset-content-highlight-box clearfix">
									
									<div class="gsv-tabset-content-highlight-box-col">
									
										<h4 class="gsv-tabset-content-highlight-box-heading">Megatrends</h4>
										
										<ul class="gsv-tabset-content-potential-megatrends-list">
											<?php 
										for($i = 1; $i <= get_post_meta($post->ID, "num_single_lists", $single = true); $i++){ ?>
										
											<li class="gsv-tabset-content-potential-megatrends-list-item"><?php echo(get_post_meta($post->ID, "list_attribute".$i, $single = true));?></li>
											<?php } ?>
										</ul>
									
									</div>
									
									<div class="gsv-tabset-content-highlight-box-col">
									
										<h4 class="gsv-tabset-content-highlight-box-heading">How Big Can This Be?</h4>
										
										<p><?php echo(get_post_meta($post->ID, "wpcf-how-big-can-this-be", $single = true));?></p>
										
									</div>
								</div>
							</div>
		
						</div>
						
						<div id="gsv-tabset-predictability" role="tabpanel" aria-labeledby="gsv-tabset-predictability-tab" aria-hidden="true" class="gsv-tabset-content clearfix">
						
							<h2 class="gsv-tabset-content-heading">Predictability</h2>
							
							<div class="gsv-tabset-content-col">
							
								<h3 class="gsv-tabset-content-col-heading"><?php echo(get_post_meta($post->ID, "wpcf-predictability-content", $single = true));?></h3>
							
							</div>
							
							<div class="gsv-tabset-content-col">
								
								<div class="gsv-tabset-content-highlight-box clearfix">
								
									<h4 class="gsv-tabset-content-highlight-box-heading">Risks</h4>
									
									<p><?php echo(get_post_meta($post->ID, "wpcf-risks", $single = true));?></p>
								
								</div>
								
							</div>
		
						</div>
					
					</div>
					
					<ul class="gsv-tabset-additional-links-list clearfix">
						<li class="gsv-tabset-additional-links-list-item"><a href="<?php echo(bloginfo(siteurl)); ?>/4ps" class="gsv-tabset-additional-links-list-item-link gsv-tabset-additional-links-list-item-learn-more-link">Learn more about GSV's Four Ps Growth Investing Framework</a></li>
					</ul>
				
				
				
				<p class="gsv-legal-views">This information reflects the views of GSV as of <?php echo(get_post_meta($post->ID, "legal_date_value", $single = true));?> and has not been updated to reflect any changes in facts and/or circumstances after that date.</p>
						</div>
						
						<?php if(get_post_meta($post->ID, "num_two_col_tables", $single = true) != 0){ ?>
						
							<div class="gsv-investment-portfolio-content-feed-col gsv-investment-portfolio-content-feed-col-first">
								<h3 class="gsv-investment-portfolio-content-feed-heading"><?php the_title();?>: Featured Content</h3>
								
								<ul class="gsv-investment-portfolio-content-feed">
								<?php for($i = 1; $i <= get_post_meta($post->ID, "num_two_col_tables", $single = true); $i++){ ?>
									<li class="gsv-investment-portfolio-content-feed-item gsv-investment-portfolio-content-feed-item-featured"><a class="gsv-investment-portfolio-content-feed-item-link" target="_blank" href="<?php echo(get_post_meta($post->ID, "col_two".$i, $single = true));?>"><?php echo(get_post_meta($post->ID, "col_one".$i, $single = true));?><span class="gsv-investment-portfolio-content-feed-item-link-date"><?php echo(get_post_meta($post->ID, "col_three".$i, $single = true));?></span></a></li>
							 <?php	} ?>		
								</ul>	
							
							</div>	
						
						<?php } ?>
						<?php if(get_post_meta($post->ID, "search_keywords_value", $single = true) != ''){ ?>
						
							<div class="gsv-investment-portfolio-content-feed-col ">
								<h3 class="gsv-investment-portfolio-content-feed-heading"><?php the_title();?>: News Feed</h3>
								
								<ul class="gsv-investment-portfolio-content-feed">
									<?php 
									/* Pull in Results from Google News */
									
								$content = file_get_contents('http://news.google.com/?q='.str_replace(' ', '%20', get_post_meta($post->ID, "search_keywords_value", $single = true)).'&output=rss&scoring=d&ned=us');
								
								$x = new SimpleXmlElement($content);
								$i = 0;
								foreach($x->channel->item as $entry) {
									if($i < get_post_meta($post->ID, "feed_max_value", $single = true)){
										$i++;
										echo('<li class="gsv-investment-portfolio-content-feed-item gsv-investment-portfolio-content-feed-item-rss"><a target="_blank" class="gsv-investment-portfolio-content-feed-item-link" href="'.$entry->link.'">'.$entry->title.'<span class="gsv-investment-portfolio-content-feed-item-link-date">'.$entry->pubDate.'</a></li>');
									}else{
										break;
									}
								} ?>
	
									
								</ul>
								
							</div>	
						<?php } ?>
											
						
					
			</div>

		</div>		
		<?php 
		endwhile;
		endif; ?>		
<?php
	get_footer();
?>