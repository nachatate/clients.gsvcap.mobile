<?php
/*
	Template Name: Home
	*/
get_header('home');
	
?>
			<div class="gsv-gravity">
			
			
			
				<!-- div id="gsv-gravity-flash">
				
					<div class="gsv-flash-replacement-content">
						
						<a class="gsv-flash-replacement-content-link" href="<?php bloginfo('template_url');?>/v/GSV Story v8.mp4">
							<p class="gsv-flash-replacement-content-watch">Watch</p>
							<h2 class="gsv-flash-replacement-content-subheading">The Innovative + Triumphant</h2>
							<h1 class="gsv-flash-replacement-content-heading">Return of Growth Investing</h1>
							<span class="gsv-flash-replacement-content-play">Play Video</span>
						</a>
					
					</div>
					
				</div -->
				
				<ul class="gsv-gravity-slider">
					<li class="gsv-gravity-slider-list-item gsv-gravity-slider-list-item-pioneers">
						<div class="gsv-gravity-container">
							<h2 class="gsv-gravity-slider-list-item-heading">Celebrating the <br />Pioneers + Mavericks<br />who move our world</h2>
							
							<a href="<?php bloginfo('wpurl');?>/about/pioneers-and-mavericks/" class="gsv-gravity-slider-list-item-link">Explore</a>
						</div>
					</li> <!-- /gsv-gravity-slider-list-item-pioneers  -->
					
					<li class="gsv-gravity-slider-list-item gsv-gravity-slider-list-item-investing">
						<div class="gsv-gravity-container">
							
							<a href="#" class="slide-video"><img src="<?php bloginfo('template_url');?>/i/gravity/slide-video.jpg" alt="The Return of Growth Investing"   /></a>

							
							<h3 class="gsv-gravity-slider-list-item-sub-heading">The Innovative + Triumphant</h3>
							<h2 class="gsv-gravity-slider-list-item-heading gsv-gravity-slider-list-item-heading-reverse">Return of<br />Growth Investing</h2>
							
						</div>
					</li> <!-- /gsv-gravity-slider-list-item-investing  -->
					
					
					<li class="gsv-gravity-slider-list-item gsv-gravity-slider-list-item-investments">
						<div class="gsv-gravity-container">
							<h2 class="gsv-gravity-slider-list-item-heading">Invest in<br />Tomorrow's<br />Stars. Today.</h2>
							
							<a href="<?php bloginfo('wpurl');?>/investment-portfolio/" class="gsv-gravity-slider-list-item-link">Learn More</a>
							
							<a href="#gsv-top-ten-positions-flyout" data-js="64i-overlay-link" class="view-top-ten">View our Top 10 positions</a>
							
						</div>
					</li> <!-- /gsv-gravity-slider-list-item-investments  -->
					
				</ul>
				<div class="gsv-gravity-container">
					
					<ul class="gsv-gravity-slider-nav">
						<li class="gsv-gravity-slider-nav-list-item gsv-gravity-slider-nav-list-item-pioneers gsv-gravity-slider-nav-list-item-active" data-js="gsv-gravity-slider-nav" data-slideindex="0">
							<div class="gsv-gravity-slider-nav-list-item-active-arrow"></div>
							<img class="gsv-gravity-slider-nav-list-item-img" src="<?php bloginfo('template_url');?>/i/gravity/slide-nav-1.jpg" alt="Pioneers + Mavericks" />
							<span class="gsv-gravity-slider-nav-list-item-text">Pioneers + Mavericks</span>
						</li>
						
						
						<li class="gsv-gravity-slider-nav-list-item gsv-gravity-slider-nav-list-item-investing" data-js="gsv-gravity-slider-nav" data-slideindex="1">
							<div class="gsv-gravity-slider-nav-list-item-active-arrow"></div>
							<img class="gsv-gravity-slider-nav-list-item-img" src="<?php bloginfo('template_url');?>/i/gravity/slide-nav-2.jpg" alt="The Return of Growth Investing" />
							<span class="gsv-gravity-slider-nav-list-item-text">The Return of Growth Investing</span>
						</li>
						
						<li class="gsv-gravity-slider-nav-list-item gsv-gravity-slider-nav-list-item-investments" data-js="gsv-gravity-slider-nav" data-slideindex="2">
							<div class="gsv-gravity-slider-nav-list-item-active-arrow"></div>
							<img class="gsv-gravity-slider-nav-list-item-img" src="<?php bloginfo('template_url');?>/i/gravity/slide-nav-3.jpg" alt="The Return of Growth Investing" />
							<span class="gsv-gravity-slider-nav-list-item-text">GSVC Investments</span>
						</li>
						
						
					</ul>
					
					<ul class="gsv-gravity-slider-nav-controls">
					
					</ul>
					
				</div>
														
		</div>
		
		<div id="gsv-growth-video-flyout" data-js="64i-overlay" class="gsv-flyout gsv-video-flyout">
					
			<span data-js="64i-overlay-close-link" class="gsv-flyout-close-link gsv-video-flyout-close-link">x</span>
			
		    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
			<video class="gsv-return-of-growth-investing-video" width="640" height="480" controls="controls" preload="auto" poster="<?php bloginfo('template_url');?>/i/gsv-growth-video-poster.png">
		    	<source src="<?php bloginfo('template_url');?>/v/GSV Story v8.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
			    <source src="<?php bloginfo('template_url');?>/v/GSV Story v8.webm" type='video/webm; codecs="vp8, vorbis"' />
			    <source src="<?php bloginfo('template_url');?>/v/GSV Story v8.ogv" type='video/ogg; codecs="theora, vorbis"' />
		      	
		      	<!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
		      	<object class="vjs-flash-fallback" width="640" height="480" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
			        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
			        <param name="allowfullscreen" value="true" />
			        <param name="flashvars" value='config={"playlist":["<?php bloginfo('template_url');?>/i/gsv-growth-video-poster.png", {"url": "<?php bloginfo('template_url');?>/v/GSV Story v8.mp4","autoPlay":true,"autoBuffering":true}]}' />
			        <!-- Image Fallback. Typically the same as the poster image. -->
			        <img src="<?php bloginfo('template_url');?>/i/gsv-growth-video-poster.png" width="640" height="480" alt="Poster Image" title="No video playback capabilities." />
				</object>
		  
			</video>
														
		</div>
		
		
		
		<div id="gsv-top-ten-positions-flyout" data-js="64i-overlay" class="gsv-flyout gsv-top-ten-positions-flyout">
					
			<span data-js="64i-overlay-close-link" class="gsv-flyout-close-link gsv-video-flyout-close-link">x</span>
			
			<h4 class="gsv-top-ten-positions-flyout-sub-heading">Top 10 positions make up 72% of total invested capital</h4>
			<h3 class="gsv-top-ten-positions-flyout-heading">Top 10 Positions</h3>
			
			
			<table class="gsv-top-ten-positions-flyout-table">
				<thead>
					<tr>
						<th></th>
						<th>Investment</th>
						<th>Size ($ mm)</th>
						<th>% of Fund</th>
						<th>2012 Estimated Growth<sup>(1)</sup></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">1</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/twitter.png" alt="Twitter" /></td>
						<td>$31.5</td>
						<td>11.6%</td>
						<td>~200%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/twitter/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">2</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/violin-memory.png" alt="Violin Memory" /></td>
						<td>$14.8</td>
						<td>5.4%</td>
						<td>~300%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/violin-memory/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">3</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/dropbox.png" alt="Dropbox" /></td>
						<td>$11.9</td>
						<td>4.4%</td>
						<td>~300%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/dropbox/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">4</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/facebook.png" alt="Facebook" /></td>
						<td>$10.5</td>
						<td>3.8%</td>
						<td>~35%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/facebook/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">5</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/avenues.png" alt="Avenues The World School" /></td>
						<td>$10.0</td>
						<td>3.7%</td>
						<td>~300%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/avenues/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">6</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/chegg.png" alt="Chegg" /></td>
						<td>$10.0</td>
						<td>3.7%</td>
						<td>~25%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/chegg/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">7</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/gilt-groupe.png" alt="Gilt Groupe" /></td>
						<td>$5.5</td>
						<td>2.0%</td>
						<td>~25%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/gilt-groupe/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">8</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/control4.png" alt="Control 4" /></td>
						<td>$5.0</td>
						<td>1.8%</td>
						<td>~30%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/control4/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">9</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/silverspring-networks.png" alt="Silverspring Networks" /></td>
						<td>$4.9</td>
						<td>1.8%</td>
						<td>~150%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/silver-spring-networks/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
					<tr>
						<td class="gsv-top-ten-positions-flyout-table-index">10</td>
						<td><img src="<?php bloginfo('template_url');?>/i/top10/palantir.png" alt="Palantir" /></td>
						<td>$4.2</td>
						<td>1.5%</td>
						<td>~100%</td>
						<td><a href="<?php bloginfo('wpurl');?>/investment-portfolio/palantir-technologies/" class="gsv-top-ten-positions-flyout-company-link">Learn more</a></td>
					</tr>
				</tbody> 
			</table>
			<p class="gsv-legal-views">Data as of June 5, 2012</p>
														
		</div>
		
		
		
		<!-- div class="gsv-home-company-carousel gsv-gravity-container">
			<span class="gsv-home-company-carousel-control gsv-home-company-carousel-control-left">Left</span>
			<span class="gsv-home-company-carousel-control gsv-home-company-carousel-control-right">Right</span>
			<ul	class="gsv-home-company-carousel-list">
				
				
				<li class="gsv-home-company-carousel-list-item-group">
				 	<ul class="gsv-home-company-carousel-list-item-group-list">
				<?php
					$counter = 0;
					$args = array( 'numberposts' => 20, 'category' => 54,  'post_type' => 'investment-portfolio', 'orderby' => 'menu_order', 'order' => 'ASC');
					
					
					
					$myposts = get_posts( $args );
					
					
					
					foreach( $myposts as $post ) :	setup_postdata($post);
						if($counter	% 7 == 0 && $counter != 0){ ?>
				 
				 	</ul>
				</li>
					<li class="gsv-home-company-carousel-list-item-group">
				 		<ul class="gsv-home-company-carousel-list-item-group-list">
							
				 		<?php } ?>
				
					<li class="gsv-home-company-carousel-list-item">
							<a href="<?php the_permalink();?>"><img class="gsv-home-company-carousel-list-item-logo" src="<?php echo(get_post_meta($post->ID, "wpcf-homepage-carousel-image", $single = true));?>" /></a>
						</li>
				 	
				 	<?php 
				 	
				 	$counter++;
				 	endforeach; ?>
				 </ul>
				
				</li>
			
			
				
			</ul>
		</div -->
		
		<div class="gsv-home-carousel clearfix">
			
			<ul class="gsv-home-carousel-list">
				
				<li class="gsv-home-carousel-list-item gsv-home-carousel-list-item-blog">
					<h2 class="gsv-home-carousel-list-item-heading">Blog: Moving Ideas</h2>
					<div class="gsv-home-carousel-list-item-content">				
						
						
						<ul class="gsv-home-blog-list">
						<?php
								$count = 1;
								$args = array( 'numberposts' => 8,  'order' => 'DESC', 'category__not_in' => array(3) );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :	setup_postdata($post);?>
							<li class="gsv-home-blog-list-item <?php if($count <=4){?>gsv-home-blog-list-item-active<?php }?>">
							
								<a href="<?php the_permalink();?>" class="gsv-home-blog-list-item-link">
									<h3 class="gsv-home-blog-list-item-heading"><?php the_title(); ?></h3>
									
									<span class="gsv-home-blog-list-item-image"><?php the_post_thumbnail('Carousel Blog'); ?></span>
									<div class="gsv-home-blog-list-item-date"><?php echo(get_the_date('M d Y')); ?></div>
								</a>							
							
							</li>
							<?php
								$count++;
							 endforeach ?>
	
						
						</ul>
						
						<span data-class="gsv-show-more-blog-items" data-direction="up" class="gsv-home-carousel-list-item-blog-view-more-link gsv-home-carousel-list-item-blog-view-more-link-up gsv-home-carousel-list-item-blog-view-more-link-inactive">Up</span>
						<span data-class="gsv-show-more-blog-items" data-direction="down" class="gsv-home-carousel-list-item-blog-view-more-link gsv-home-carousel-list-item-blog-view-more-link-down">Down</span>
						
						<a href="<?php bloginfo('wpurl');?>/moving-ideas/" class="gsv-home-carousel-list-item-blog-view-blog-link">View All</a>
					
					</div>
					
					<div class="gsv-home-carousel-list-item-footer">
						<h3 class="gsv-home-carousel-list-item-footer-heading">Sign up for Blog Updates</h3>
						
						<p>Subscribe to receive periodic emails with new blog entries + commentary from GSV.</p>
						
						<form class="gsv-newsletter-signup-form" data-js="gsv-newsletter-signup-form">
									
									
										<div class="gsv-field">
											<label>Name</label>
											<input type="text" class="gsv-newsletter-signup-flyout-form-field" name="gsv-newsletter-signup-form-name" value="First + Last Name" />
											
										</div>								
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-email-field">
								
											<label>Email</label>
											<input type="text" class="gsv-newsletter-signup-flyout-form-field" name="gsv-newsletter-signup-form-email" value="Enter Email" />
										
										</div>
										
										<button type="submit" data-js="gsv-newsletter-signup-form-submit" class="gsv-newsletter-signup-flyout-form-submit">Sign Up</button>
										
						</form>
					</div>	
					
				</li>
				
				<li class="gsv-home-carousel-list-item gsv-home-carousel-list-item-insights">
					
						
					<h2 class="gsv-home-carousel-list-item-heading">GSV Insights</h2>
					
					<div class="gsv-home-carousel-list-item-content">
					
					<ul class="gsv-home-interior-carousel-list">
						
						
						
						
						<li class="gsv-home-interior-carousel-list-item active" data-grouping="gsv-insights" data-set="1">
																
							<h3 class="gsv-home-carousel-list-item-subheading">The Pulse of the Growth Economy</h3>
							
							<img class="gsv-home-innovation-banner-image" src="<?php bloginfo('template_url');?>/i/home/gsv-home-news-banner.jpg" alt="Innovation is Moving" />
							
							<p><strong>A 2 Apple</strong> is our flagship publication<br />&#8212;one of six GSV newsletters with deep growth research and perspectives. And get this: <strong>they're free.</strong></p>					
							<a class="gsv-home-carousel-list-item-learn-more-link" href="#gsv-newsletter-signup-flyout" data-js="64i-overlay-link">Sign Up Now</a>
							
							<div id="gsv-newsletter-signup-flyout" data-js="64i-overlay" class="gsv-flyout gsv-newsletter-signup-flyout" itemscope itemtype="http://schema.org/Organization">
							
								<span data-js="64i-overlay-close-link" class="gsv-flyout-close-link">x</span>
								<div class="gsv-newsletter-signup-flyout-text-container">
									<h1 class="gsv-flyout-heading">The Pulse of the Growth Economy</h1>
									
									<p>Our team has spent the past 20 years immersed in the global growth economy. And we've been delivering authoritative market analysis and insights 48 times each year for more than a decade. </p>	
									<p>Now, you have direct access to GSV's expert viewpoints through <strong><em>A 2 Apple</em></strong> plus a handful of other complimentary newsletters, as well as our weekly blog. Simply complete this form and they're yours to read and use. 
									</p>
									<p>
										<a class="gsv-newsletter-signup-flyout-form-current-edition" href="<?php bloginfo('wpurl');?>/moving-ideas/" >View Blog</a>
									</p>
								</div>			
								
								<div class="gsv-newsletter-signup-flyout-form-container">
							
									<form class="gsv-newsletter-signup-flyout-form" data-js="gsv-newsletter-signup-flyout-form">
									
									
										<div class="gsv-field">
											<label>Name</label>
											<input type="text" class="gsv-newsletter-signup-flyout-form-field" name="gsv-newsletter-signup-flyout-form-name" value="First + Last Name" />
											<span class="gsv-required">*</span>
										</div>								
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-email-field">
								
											<label>Email</label>
											<input type="email" class="gsv-newsletter-signup-flyout-form-field" name="gsv-newsletter-signup-flyout-form-email" value="Email" />
											<span class="gsv-required">*</span>
										</div>
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-a-to-apple" />
											<label>A 2 Apple</label>
										</div>
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-socially-mobile-weekly" />
											<label>Socially Mobile Weekly</label>
										</div>
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-gsv-green-daily" />
											<label>GSV Green Daily</label>
										</div>
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-gsv-internet-daily" />
											<label>GSV Internet Daily</label>
										</div>
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-gsv-edu-daily" />
											<label>GSV Edu Daily</label>
										</div>
										
										<!--div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-ipo-weekly" />
											<label>IPO Weekly</label>
										</div -->
										
										<div class="gsv-field gsv-newsletter-signup-flyout-form-checkbox-field">
											<input type="checkbox" name="gsv-newsletter-gsv-blog-moving-ideas" />
											<label>GSV Blog: Moving Ideas</label>
										</div>
										
										
											<p class="gsv-newsletter-signup-flyout-form-error" data-js="gsv-newsletter-signup-flyout-form-error">*At least 1 newsletter subscription is required</p>
																		
										
										<button type="submit" data-js="gsv-newsletter-signup-flyout-form-submit" class="gsv-contact-us-flyout-form-submit">Submit</button>
										<span class="gsv-required gsv-required-text">* Required</span>
												
									</form>
									
									<!-- Newsletter Flyout Complete -->
									<div class="gsv-flyout-form-successful gsv-newsletter-signup-flyout-form-successful" data-js="gsv-flyout-form-successful">
										<p>Your information has been submitted.</p>
										<p>Thank you.</p>
										<p class="gsv-flyout-form-successful-redirect">You will be automatically returned to the GSV homepage in five seconds.</p>
									</div>
								
								</div>
								
							</div>
						
						</li>
						
						
						<li class="gsv-home-interior-carousel-list-item" data-grouping="gsv-insights" data-set="2">
						
							
							<h3 class="gsv-home-carousel-list-item-subheading">Identifying the <br />Stars of Tomorrow</h3>
			
							<img class="gsv-home-carousel-4ps-screenshot-image" src="<?php bloginfo('template_url');?>/i/home/gsv-4ps-carousel.png" alt="The 4ps Framework" />
							
							<p>See what companies we invest in and why using GSV's proprietary "Four Ps" growth investing framework.</p>
							
							<p>First introduced in Michael Moe's book <em>Finding the Next Starbucks</em>, the Four Ps boils down the essential characteristics of high impact growth companies.</p>
							
							<a class="gsv-home-carousel-list-item-learn-more-link" href="<?php bloginfo('wpurl');?>/4ps/">Learn More</a>					
							
						</li>
						
						<li class="gsv-home-interior-carousel-list-item" data-grouping="gsv-insights" data-set="3">
																
							<h3 class="gsv-home-carousel-list-item-subheading">The Pioneers + Mavericks who move our world...</h3>
							
							<img class="gsv-home-innovation-banner-image" src="<?php bloginfo('template_url');?>/i/home/pioneers-carousel.jpg" alt="Pioneers + Mavericks" />
							
							<p>An interactive showcase of the world's boldest, most innovative thinkers + doers.</p>
							
							<a class="gsv-home-carousel-list-item-learn-more-link" href="<?php bloginfo('wpurl');?>/about/pioneers-and-mavericks/" >Explore</a>
							
						</li>
						
						
					
					</ul>
					
					<ul class="gsv-home-interior-carousel-controls-list">
					
						<li data-class="gsv-home-carousel-item" data-set="1" data-grouping="gsv-insights" class="gsv-home-interior-carousel-controls-list-item gsv-home-interior-carousel-controls-list-item-active">Item 1</li>
						<li data-class="gsv-home-carousel-item" data-set="2" data-grouping="gsv-insights" class="gsv-home-interior-carousel-controls-list-item">Item 2</li>
						
						<li data-class="gsv-home-carousel-item" data-set="3" data-grouping="gsv-insights" class="gsv-home-interior-carousel-controls-list-item">Item 3</li>
					
					</ul>
					</div>
					
					<div class="gsv-home-carousel-list-item-footer">
						<h3 class="gsv-home-carousel-list-item-footer-heading">GSV Social</h3>
						<div class="gsv-home-carousel-list-item-twitter-feed">
						<?php $status = get_status('gsvcap', 2); ?>
							<span class="tweetbox"></span>
						</div>
						<div class="gsv-moving-ideas-aside-blog-contents-aside-section-twitter-footer">
							
							<!-- a class="gsv-moving-ideas-aside-blog-contents-aside-section-twitter-footer-follow-us" href="http://twitter.com/gsvcap/" target="_blank">Follow @GSVcap</a -->
							
							<ul class="gsv-social-networks">
								<li class="gsv-social-networks-list-item">
									<a class="gsv-social-network" href="http://www.facebook.com/pages/GSV-Capital/126927080741564" target="_blank">Facebook</a>
								</li>
								<li class="gsv-social-networks-list-item">
									<a class="gsv-social-network gsv-social-network-linkedin" href="http://www.linkedin.com/company/2316138?goback=%2Efcs_MDYS_GSV_false_R_*2_*2_*2_1_*2_*2_*2_*2_*2_*2_*2&trk=ncsrch_hits" target="_blank">LinkedIn</a>
								</li>
								<li class="gsv-social-networks-list-item">
									<a class="gsv-social-network gsv-social-network-pinterest" href="http://pinterest.com/gsvcap/" target="_blank">Pinterest</a>
								</li>
							</ul>
							
							<a href="https://twitter.com/#!/gsvcap" target="_blank" class="twitter-gsvcap">@GSVcap</a>
							
							
						</div>
					</div>
									
				</li>
				
				<li class="gsv-home-carousel-list-item gsv-home-carousel-list-item-coverage">
					
					<h2 class="gsv-home-carousel-list-item-heading">Featured Coverage</h2>
					
					<div class="gsv-home-carousel-list-item-content">
					
						<ul class="gsv-home-interior-carousel-list">
						
							<li class="gsv-home-interior-carousel-list-item active" data-grouping="featured-coverage" data-set="1">
							
								<h3 class="gsv-home-carousel-list-item-subheading gsv-home-carousel-list-item-subheading-long">&ldquo;...opportunity to invest in...top notch private companies...&rdquo;</h3>
						
								
									<p><img class="gsv-home-moe-interview-banner-image" src="<?php bloginfo('template_url');?>/i/home/seeking-alpha.jpg" alt="Leading stock market opinion + analysis source considers GSVC Deep Value With Numerous Potential Catalysts" />
									</p>
								
								<p>Leading stock market opinion + analysis source considers GSVC "Deep Value With Numerous Potential Catalysts"</p>
								
								<a class="gsv-home-carousel-list-item-learn-more-link" target="_blank" href="http://seekingalpha.com/article/690861-gsv-capital-deep-value-with-numerous-potential-catalysts" >Read More</a>
								
								
							
							</li>
							
							<li class="gsv-home-interior-carousel-list-item" data-grouping="featured-coverage" data-set="2">
							
								<h3 class="gsv-home-carousel-list-item-subheading">Ladenburg: &ldquo;Buy&rdquo; &#8212; Price target = $17.00</h3>
						
								<img class="gsv-home-barrons-banner-image" src="<?php bloginfo('template_url');?>/i/home/ladenburg-headline.jpg" alt="Read investment banking firm Ladenburg Thalmann & Co.'s most recent report." />
								
								<p>Read investment banking firm Ladenburg Thalmann & Co.'s most recent report.</p>
								
								<a class="gsv-home-carousel-list-item-learn-more-link" target="_blank" href="http://files.shareholder.com/downloads/ABEA-5XHB8Q/1934847633x0x591550/3169F18F-B9EE-4EB8-BB6F-8DB1046066BE/Ladenburg_Thalmann_Q2_2012_Update_8-14-12_.pdf">Read More</a>	
							
							</li>
							
							<li class="gsv-home-interior-carousel-list-item" data-grouping="featured-coverage" data-set="3">
								
								<h3 class="gsv-home-carousel-list-item-subheading">&ldquo;Knowledge-based economy...Education makes a difference.&rdquo;</h3>
								
								<a class="gsv-home-carousel-finding-next-starbucks-link" href="#gsv-moe-interview-flyout" data-js="64i-overlay-link" ><img class="gsv-home-carousel-finding-next-starbucks-image" src="<?php bloginfo('template_url');?>/i/home/moe-fox.jpg" alt="Watch Michael Moe on FOX Business speaking about trends and opportunitiesin the Education Innovation space." /></a>
								
								<p>Watch Michael Moe on FOX Business speaking about trends and opportunitiesin the Education Innovation space.</p>
								
								
								<div id="gsv-moe-interview-flyout" data-js="64i-overlay" class="gsv-flyout gsv-video-flyout">
								
									<span data-js="64i-overlay-close-link" class="gsv-flyout-close-link gsv-video-flyout-close-link">x</span>
									
								    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
									<video class="gsv-return-of-growth-investing-video" width="640" height="480" controls="controls" preload="auto" poster="<?php bloginfo('template_url');?>/i/gsv-moe-interview-video-poster.png">
								    	<source src="<?php bloginfo('template_url');?>/v/Michael Moe - Fox Business News 8-3-2012 536PM.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
									    <source src="<?php bloginfo('template_url');?>/v/Michael Moe - Fox Business News 8-3-2012 536PM.webm" type='video/webm; codecs="vp8, vorbis"' />
									    <source src="<?php bloginfo('template_url');?>/v/Michael Moe - Fox Business News 8-3-2012 536PM.ogv" type='video/ogg; codecs="theora, vorbis"' />
								      	
								      	<!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
								      	<object class="vjs-flash-fallback" width="640" height="480" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
									        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
									        <param name="allowfullscreen" value="true" />
									        <param name="flashvars" value='config={"playlist":["<?php bloginfo('template_url');?>/i/gsv-moe-interview-video-poster.png", {"url": "<?php bloginfo('template_url');?>/v/Michael Moe - Fox Business News 8-3-2012 536PM.mp4","autoPlay":true,"autoBuffering":true}]}' />
									        <!-- Image Fallback. Typically the same as the poster image. -->
									        <img src="<?php bloginfo('template_url');?>/i/gsv-moe-interview-video-poster.png" width="640" height="480" alt="Poster Image" title="No video playback capabilities." />
										</object>
								  
									</video>
																				
								</div>
								
							</li>
						
						</ul>
						
						<ul class="gsv-home-interior-carousel-controls-list">
						
							<li data-class="gsv-home-carousel-item" data-set="1"  data-grouping="featured-coverage" class="gsv-home-interior-carousel-controls-list-item gsv-home-interior-carousel-controls-list-item-active">Item 1</li>
							<li data-class="gsv-home-carousel-item" data-set="2" data-grouping="featured-coverage" class="gsv-home-interior-carousel-controls-list-item">Item 2</li>
							
							<li data-class="gsv-home-carousel-item" data-set="3" data-grouping="featured-coverage"class="gsv-home-interior-carousel-controls-list-item">Item 3</li>
						
						</ul>
					</div>
					
					<div class="gsv-home-carousel-list-item-footer">
						<h3 class="gsv-home-carousel-list-item-footer-heading">GSV in the News</h3>
						<ul class="gsv-in-the-news-feed">
						<?php
							$count = 1;
							$args = array( 'numberposts' => 3,'order' => 'DESC', 'category' => 3 );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post);?>
							
							<li class="gsv-in-the-news-feed-list-item">
								<time class="gsv-news-list-time" datetime="<?php echo(get_post_meta($post->ID, "date_value", $single = true));?>"><?php echo(get_post_meta($post->ID, "date_value", $single = true));?></time>
								<p class="gsv-news-list-description"><?php the_title();?> <a <?php if(strtolower(get_post_meta($post->ID, "window_value", $single = true)) == 'yes'){?> target="_blank" <?php }?> href="<?php if(get_post_meta($post->ID, "page_links_value", $single = true) != ''){ echo(get_post_meta($post->ID, "page_links_value", $single = true));}else{ the_permalink(); }?>" class="gsv-news-list-link">Read More</a></p>
								
							</li>
							
						
						<?php endforeach; ?>
						</ul>
					</div>
													
				</li>
							
			</ul>
						
		</div>
	
<?php
	get_footer();
?>