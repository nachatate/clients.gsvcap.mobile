<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 ie"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 ie"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 ie"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9 ie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
	
	<title>GSV Capital: <?php the_title(); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
		
</head>

<body id="gsv-<?php echo(str_replace(' ', '-',strtolower(get_the_title()))); ?>">

	<div class="gsv-container">

<div class="gsv-header" role="banner">

	<div class="gsv-header-contents clearfix">
					
		<a href="<?php echo(bloginfo(siteurl)); ?>/" class="gsv-header-logo-link">			
			<h1 class="gsv-header-logo-heading">
				<img src="<?php bloginfo('template_url');?>/i/gsv-header-logo.png" alt="GSV Capital" class="gsv-header-logo-image" />
			</h1>
		</a>
						
		<ul class="gsv-header-navigation-list" role="navigation" tabindex="-1">
			<li class="gsv-header-navigation-list-item gsv-header-navigation-list-item-home"><a href="<?php echo(bloginfo(siteurl)); ?>/" class="gsv-header-navigation-list-item-link gsv-header-navigation-list-item-link-home">Home</a></li>
			<li class="gsv-header-navigation-list-item" data-js="top-level-dropdown-navigation-link">
				<a href="<?php echo(bloginfo(siteurl)); ?>/about" class="gsv-header-navigation-list-item-link">About<br />GSV</a>
				<div class="gsv-header-navigation-dropdown clearfix">
				
				<ul class="gsv-header-dropdown-navigation-list">
						
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="<?php echo(bloginfo(siteurl)); ?>/about" class="gsv-header-dropdown-navigation-list-item-link">Philosophy + Purpose</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="<?php echo(bloginfo(siteurl)); ?>/about/pioneers-and-mavericks/" class="gsv-header-dropdown-sub-navigation-list-item-link">Pioneers + Mavericks</a></li>
							</ul>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="<?php echo(bloginfo(siteurl)); ?>/moving-ideas" class="gsv-header-dropdown-navigation-list-item-link">Moving Ideas Blog</a>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="<?php echo(bloginfo(siteurl)); ?>/about/leadership" class="gsv-header-dropdown-navigation-list-item-link">Leadership</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="<?php echo(bloginfo(siteurl)); ?>/management/" class="gsv-header-dropdown-sub-navigation-list-item-link">Management Team</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/directors.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Board of Directors</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://gsvcap.com/about/leadership/advisory-board/" class="gsv-header-dropdown-sub-navigation-list-item-link">Advisory Board</a></li>
							</ul>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item gsv-header-dropdown-navigation-list-item-media-relations">
							<a href="http://investors.gsvcap.com/releases.cfm" class="gsv-header-dropdown-navigation-list-item-link">Media Relations</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item">
								<div class="gsv-header-dropdown-sub-navigation-list-item-media-text">
									<p>Download our <a href="<?php echo(bloginfo(template_url)); ?>/assets/GSVC_CorporateBackgrounder.pdf">Corporate Backgrounder</a> (PDF).</p><p>For interview requests and other media inquiries, please use our <a href="#gsv-contact-us-flyout" data-js="64i-overlay-link">contact form</a>.</p><div></li>
							</ul>
						</li>					</ul>
					
				</div>
			</li>
			<li class="gsv-header-navigation-list-item" data-js="top-level-dropdown-navigation-link">
				<a href="<?php echo(bloginfo(siteurl)); ?>/investment-portfolio" class="gsv-header-navigation-list-item-link">Investment<br />Portfolio</a>
				<div class="gsv-header-navigation-dropdown clearfix">
				
					<div class="gsv-header-navigation-dropdown-four-ps">
					
						<a href="<?php echo(bloginfo(siteurl)); ?>/4ps" class="gsv-header-dropdown-navigation-list-item-link">Four Ps Framework</a>
						
						<div class="gsv-header-navigation-dropdown-four-ps-content">
						
							<p>How to identify<br /> tomorrow's stars</p>
							
							
							
							<a href="<?php echo(bloginfo(siteurl)); ?>/4ps" class="gsv-header-navigation-dropdown-four-ps-learn-more-link">Learn More</a>
						
						</div>
					
					</div>
					
					<div class="gsv-header-navigation-dropdown-our-investments">
					
						<a href="<?php echo(bloginfo(siteurl)); ?>/investment-portfolio" class="gsv-header-dropdown-navigation-list-item-link">Our Investments</a>
						
						<ul class="gsv-header-navigation-dropdown-our-investments-list">
							<?php
							global $post;
							$holdPost = $post;
							$portfolioCount = 0;
							$args = array( 'numberposts' => 100, 'post_type' => 'investment-portfolio', 'orderby' => 'menu_order', 'order' => 'ASC');
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post);
							
							$numPortfolio = sizeof($myposts);
							
							?>	
								<li class="gsv-header-navigation-dropdown-our-investments-list-item <?php if($portfolioCount == $numPortfolio -4 || $portfolioCount == $numPortfolio -3 || $portfolioCount == $numPortfolio -2 || $portfolioCount == $numPortfolio -1){?> gsv-header-navigation-dropdown-our-investments-list-item-last-row<?php } ?>">
									<a href="<?php the_permalink();?>" class="gsv-header-navigation-dropdown-our-investments-list-item-link"><?php the_title();?></a>							
								</li>
								
							<?php 
								 $portfolioCount++;
							endforeach; 
							while($portfolioCount < 32){ ?>
								<li class="gsv-header-navigation-dropdown-our-investments-list-item">
									<span class="gsv-header-navigation-dropdown-our-investments-list-item-link gsv-header-navigation-dropdown-our-investments-list-item-link-empty"></span>
								</li>
							<?php 
								$portfolioCount++;
							}
							$post = $holdPost;
							?>

						</ul>
						
					</div>
					
				</div>
			</li>
			<li class="gsv-header-navigation-list-item" data-js="top-level-dropdown-navigation-link">
				<a href="http://investors.gsvcap.com/" class="gsv-header-navigation-list-item-link">Investor<br />Relations</a>
				<div class="gsv-header-navigation-dropdown clearfix">
				
					<ul class="gsv-header-dropdown-navigation-list">
						
						<!--li class="gsv-header-dropdown-navigation-list-item">
							<a href="http://investors.gsvcap.com/releases.cfm" class="gsv-header-dropdown-navigation-list-item-link">Latest News</a>
						</li -->
						<li class="gsv-header-dropdown-navigation-list-item">
							<!--a href="http://investors.gsvcap.com/releases.cfm" class="gsv-header-dropdown-navigation-list-item-link">Latest News</a -->
							<span class="gsv-header-dropdown-navigation-list-item-link gsv-header-dropdown-navigation-list-item-link-latest-news">Latest News</span>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/releases.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Press Releases</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/coverage.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Media Coverage</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/research.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Research Reports</a></li>
							</ul>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="http://investors.gsvcap.com/events.cfm" class="gsv-header-dropdown-navigation-list-item-link">Events + Presentations</a>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="http://investors.gsvcap.com/governance.cfm" class="gsv-header-dropdown-navigation-list-item-link">Corporate Governance</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="<?php echo(bloginfo(siteurl)); ?>/management/" class="gsv-header-dropdown-sub-navigation-list-item-link">Management Team</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/directors.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Board of Directors</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/committees.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Committee Composition</a></li>
							</ul>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="http://investors.gsvcap.com/financials.cfm" class="gsv-header-dropdown-navigation-list-item-link">Financial Information</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/sec.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">SEC Filings</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/results.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Quarterly Results</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/contactus.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">IR Inquiries</a></li>
							</ul>
						</li>
						<li class="gsv-header-dropdown-navigation-list-item">
							<a href="http://investors.gsvcap.com/stockquote.cfm" class="gsv-header-dropdown-navigation-list-item-link">Stock Information</a>
							<ul class="gsv-header-dropdown-sub-navigation-list">
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/stocklookup.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Historic Stock Lookup</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/calculator.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Investment Calculator</a></li>
								<li class="gsv-header-dropdown-sub-navigation-list-item"><a href="http://investors.gsvcap.com/ownership-profile.cfm" class="gsv-header-dropdown-sub-navigation-list-item-link">Ownership Profile</a></li>
							</ul>
						</li>
					
					</ul>
					
				</div>
			</li>
			<li class="gsv-header-navigation-list-item">
				<a href="#gsv-contact-us-flyout" data-js="64i-overlay-link" class="gsv-header-navigation-list-item-link">Contact<br />GSV</a>
			</li>
		</ul>
	
	</div>
	
</div>