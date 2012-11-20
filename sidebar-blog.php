<div class="gsv-moving-ideas-aside-blog-contents-aside">
						<form class="gsv-moving-ideas-aside-blog-contents-aside-blog-search gsv-moving-ideas-aside-blog-contents-aside-section" name="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>">
							<input type="text" class="blog-search-term" value="Search Blog" name="s" id="s" />
							<input type="hidden" value="post" name="post_type" id="ptype" />
							<input type="hidden" value="-3" name="cat" id="scat" />
							<button type="submit" id="searchsubmit" name="submit-search" data-js="gsv-moving-ideas-aside-blog-contents-aside-blog-search-submit" class="gsv-moving-ideas-aside-blog-contents-aside-blog-search-submit">Search</button>
						</form>
						
												
						<div class="gsv-moving-ideas-aside-blog-contents-aside-section">
							<h3 class="gsv-moving-ideas-aside-blog-contents-aside-section-heading">Categories</h3>

						</div>
						
						
						<ul class="gsv-moving-ideas-aside-blog-contents-aside-categories-list">
						<?php 
											
							 $categories=  get_categories(array('exclude' => array(1,3, 54))); 
 							 foreach ($categories as $category) {?>
 							 <li class="gsv-moving-ideas-aside-blog-contents-aside-categories-list-item">
 							 	<a href="<?php echo(bloginfo(wpurl).'/'.$category->slug);?>" class="gsv-moving-ideas-aside-blog-contents-aside-categories-list-item-link"><?php echo($category->name);?></a>
 							 </li>
 						
 							 <?php	
 							 }
						?>
						</ul>
					
						<div class="gsv-moving-ideas-aside-blog-contents-aside-section gsv-moving-ideas-aside-blog-contents-aside-section-newsletter">
							<h3 class="gsv-moving-ideas-aside-blog-contents-aside-section-heading">Sign up for email updates</h3>
							<p>Subscribe to receive periodic emails with new <br />blog entries and commentary from GSV.</p>
							
							<form class="gsv-moving-ideas-aside-blog-contents-aside-newsletter" name="gsv-moving-ideas-aside-blog-contents-aside-blog-search">
							<input type="text" class="gsv-newsletter-signup-flyout-form-field" name="gsv-newsletter-signup-flyout-form-name" value="First + Last Name" />
								<input type="text" class="gsv-moving-ideas-aside-blog-contents-aside-newsletter-email" value="Enter Email" name="gsv-newsletter-signup-flyout-form-email" />
								<input type="hidden" name="gsv-newsletter-gsv-blog-moving-ideas" value="on" />
								<button type="submit" data-js="gsv-moving-ideas-aside-blog-contents-aside-newsletter-submit" class="gsv-moving-ideas-aside-blog-contents-aside-newsletter-submit">Sign Up</button>
							</form>
							
						</div>
						
						<div class="gsv-moving-ideas-aside-blog-contents-aside-section gsv-moving-ideas-aside-blog-contents-aside-section-twitter">
						<?php $status = get_status('gsvcap'); ?>
							<span class="tweetbox"></span>
						</div>
						<div class="gsv-moving-ideas-aside-blog-contents-aside-section-twitter-footer">
							
							<a class="gsv-moving-ideas-aside-blog-contents-aside-section-twitter-footer-follow-us" href="http://twitter.com/gsvcap/" target="_blank">Follow @GSVcap</a>
							<span class="twitter-gsvcap">@GSVcap</span>
						</div>
					

						
				</div>