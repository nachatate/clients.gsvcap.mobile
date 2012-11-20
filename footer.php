<?php
	
	

?>

<div class="gsv-footer">

	<div class="gsv-footer-contents">
								
		<div class="gsv-footer-stock-ticker">
		
			<h3 class="gsv-footer-stock-ticker-heading">The Market</h3>
			
			<div class="gsv-footer-stock-ticker">
				<span class="gsv-footer-stock-ticker-title">NASDAQ: GSVC</span>
				<span class="gsv-footer-stock-ticker-current-value"></span>
				<span class="gsv-footer-stock-ticker-change-percentage"></span>
				<time class="gsv-footer-stock-ticker-update-time" datetime="2011-07-15T10:50">10:50 am EST on July 15, 2011</time>
			</div>
			
			<a class="gsv-footer-legal-link" href="/legal">Legal</a>
			
		</div>
		
		<div class="gsv-footer-copyright">
		
			<img class="gsv-footer-logo-image" src="<?php bloginfo('template_url');?>/i/gsv-footer-logo.png" alt="GSV Capital: Invest in tomorrow's stars. Today." />
			<p class="gsv-footer-copyright-text">&copy; 2011-12 GSV Capital Corp.</p>
			
		</div>
		
	</div>
	
</div>

<div id="gsv-contact-us-flyout" data-js="64i-overlay" class="gsv-flyout gsv-contact-us-flyout" itemscope itemtype="http://schema.org/Organization">
					
	<span data-js="64i-overlay-close-link" class="gsv-flyout-close-link">x</span>
	
	<div class="gsv-contact-us-flyout-details">
	
		<h1 class="gsv-flyout-heading">Contact Us</h1>
		
		<div class="gsv-contact-us-flyout-mailing-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<h2 class="gsv-contact-us-flyout-mailing-address-heading">Mailing Address:</h2>

			<div itemprop="name">GSV Capital Corp.</div>
			<div itemprop="streetAddress">2965 Woodside Road</div>
			<span itemprop="addressLocality">Woodside,</span> <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">94062</span>
		</div>
		
		<p>For Investor Relations inquiries, <a href="http://investors.gsvcap.com/contactus.cfm">click here</a>.</p>

	
	</div>
	
	<form class="gsv-contact-us-flyout-form" data-js="gsv-contact-us-flyout-form">
	
		<div class="gsv-field">
			<label>Name</label>
			<input type="text" name="gsv-contact-us-flyout-form-name" value="Name" />
			<span class="gsv-required">*</span>
		</div>								
		
		<div class="gsv-field">
			<label>Email</label>
			<input type="text" name="gsv-contact-us-flyout-form-email" value="Email" />
			<span class="gsv-required">*</span>
		</div>								
		
		<div class="gsv-field">
			<label>Phone</label>
			<input type="text" name="gsv-contact-us-flyout-form-phone" value="Phone" />
		</div>								
		
		<div class="gsv-field">

			<label>Reason for contacting us</label>
			<textarea class="gsv-contact-us-flyout-textarea" name="gsv-contact-us-flyout-form-reason">Reason for contacting us</textarea>
			<span class="gsv-required">*</span>
		</div>
		
		<button type="submit" data-js="gsv-contact-us-flyout-form-submit" class="gsv-contact-us-flyout-form-submit">Submit</button>
		<span class="gsv-required">* Required</span>

					
	</form>
	
	<!-- Contact Flyout Complete -->
	<div class="gsv-flyout-form-successful gsv-contact-us-flyout-form-successful" data-js="gsv-flyout-form-successful">
		<p>Your information has been submitted and we will be in touch with you shortly.</p>
		<p>Thank you</p>
		<p><a class="gsv-flyout-form-successful-return-link" href="<?php bloginfo('siteurl');?>/">Return to the GSV Homepage</a></p>
	</div>

</div>


	</div>
	
	<div data-js="64i-modal" class="gsv-modal"></div>
	
	<!-- Only enable these on the investors side
	<script src="http://apps.shareholder.com/irxml/irxml.aspx?COMPANYID=ABEA-5XHB8Q&amp;PIN=9247dca51cfd3566c53eca36c238b28e&amp;FUNCTION=StockQuote&amp;OUTPUT=js2&amp;TICKER=gsvc" type="text/javascript"></script>
	<script src="http://apps.shareholder.com/irxml/js/irxml.functions.js" type="text/javascript"></script -->

	<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/swfobject.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/functions.js"></script>
	
</body>
</html>