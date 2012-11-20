var baseURL = 'http://gsvcap.com/wp/wp-content/themes/gsvcap/';
var ipSortCategory = '';
$(document).ready(function() {
	
	
	/* Homepage Slider */
	if($('.gsv-gravity-slider').length){
		$('.gsv-gravity-slider').cycle({
			timeout: 6000,
			pager : '.gsv-gravity-slider-nav-controls',
			before : function(current, next){
				$('.gsv-gravity-slider-nav-list-item-active').removeClass('gsv-gravity-slider-nav-list-item-active');
				$('[data-js="gsv-gravity-slider-nav"]').css('opacity', '0.5')
				$('[data-js="gsv-gravity-slider-nav"][data-slideindex="'+$(this).index()+'"]').addClass('gsv-gravity-slider-nav-list-item-active').css('opacity', '1.0');
				$(next).css('width', '100%');
				$(current).css('width', '100%');
			},
			after : function(current, next){
				$(next).css('width', '100%');
				$(current).css('width', '100%');
				
			},
			fit : 1,
			width : '100%' 
		});
	}
	
	
	/* Homepage Slider Button Hover */
	
	$('.gsv-gravity-slider-nav-controls a').hover(function(){
		if(!$(this).hasClass('activeSlide')){
			$('[data-js="gsv-gravity-slider-nav"][data-slideindex="'+$(this).index()+'"]').animate({
				opacity : '1.0'
			}, 200)
		}
	},function(){
		if(!$(this).hasClass('activeSlide')){
			$('[data-js="gsv-gravity-slider-nav"][data-slideindex="'+$(this).index()+'"]').animate({
				opacity : '0.5'
			}, 200)
		}
	}
	
	)
	/* Homepage Logo Slider */
	if($('.gsv-home-company-carousel-list').length){
		$('.gsv-home-company-carousel-list').cycle({
			timeout: 0,
			 fx:    'scrollHorz',
			 next : '.gsv-home-company-carousel-control-left',
			 prev : '.gsv-home-company-carousel-control-right',
			 rev  : 1,
			 easing: 'swing' 
		});
	}
	
	
		
	var ipSort = false;
	var ipSortCategory = '';
	/* Investment Portfolio Landing Page 
		- Show Porftolio details on click 
	*/
	$(document).delegate('.gsv-investment-portfolio-landing-client-list-item', 'click', function(){
		$this = $(this);
		
		
		
		var position, appender;
		if(ipSort == true){
			var sortResults = $('.gsv-investment-portfolio-landing-client-list-item[data-category="'+ipSortCategory +'"]');
			var activeResult = '';
			for(i = 0; i < sortResults.length; i++){
				
				if($this.attr('data-title') == $(sortResults[i]).attr('data-title')){
					activeResult = i;
				}
			}
			
			position = activeResult;
			appender = ((4 - (position % 4)) + parseInt(position)) - 1;
		
			
			
			if($this.attr('data-openip') == 'true'){
				
				$this.attr('data-openip', 'false')
				
				$('.gsv-investment-portfolio-landing-client-list-item-details').slideUp(function(){
					$(this).detach().appendTo('.gsv-investment-portfolio-landing-client-list')
					//$('[data-counter="'+ appenderBorder + '"]').removeClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow').hide();
					
				})
				
			}else{
				
				$('.gsv-investment-portfolio-landing-client-list-item').attr('data-openip', 'false')
				
				$this.attr('data-openip', 'true')
				
				$('.gsv-investment-portfolio-landing-client-list-item-details').slideUp(function(){
					$(this).detach().appendTo('.gsv-investment-portfolio-landing-client-list')
					//$('[data-counter="'+ appenderBorder + '"]').removeClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow').hide();
					
					$('.gsv-investment-portfolio-landing-client-list-item-details-heading').text($this.attr('data-title'));
					$('.gsv-investment-portfolio-landing-client-list-item-details-why-we-like-it-link').attr('href', $this.attr('data-link'))
					$('.gsv-investment-portfolio-landing-client-list-item-details-industry').text($this.attr('data-industry'))
					$('.gsv-investment-portfolio-landing-client-list-item-details-percentage').text($this.attr('data-percentage') + '% of GSVC')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow', $this).show();
					
					
					if((position % 4 == 0 && position != 0) && (position % 4 == 0 && position != 4) && (position % 4 == 0 && position != 8) && (position % 4 == 0 && position != 12) && (position % 4 == 0 && position != 16) && (position % 4 == 0 && position != 20) && (position % 4 == 0 && position != 24) && (position % 4 == 0 && position != 28) && (position % 4 == 0 && position != 32)){
						$(sortResults[position]).after($('.gsv-investment-portfolio-landing-client-list-item-details'));
					}else{
						
						
						$(sortResults[appender]).after($('.gsv-investment-portfolio-landing-client-list-item-details'))
						//$('[data-counter="'+ appenderBorder + '"]').addClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
						
					}
					
					$('.gsv-investment-portfolio-landing-client-list-item-details').slideDown().attr('data-active', 'true');
						
						
					
					
				})
			}
			
					
			
			
			
			
			
			
			
			
		}else{
			position = $this.attr('data-counter');
			appender = (4 - (position % 4)) + parseInt(position);
			var appenderBorder = parseInt(appender) + 4;
			
		
			if($this.attr('data-openip') == 'true'){
				
				$this.attr('data-openip', 'false')
				
				$('.gsv-investment-portfolio-landing-client-list-item-details').slideUp(function(){
					$(this).detach().appendTo('.gsv-investment-portfolio-landing-client-list')
					$('[data-counter="'+ appenderBorder + '"]').removeClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow').hide();
					
				})
				
			}else{
				
				$('.gsv-investment-portfolio-landing-client-list-item').attr('data-openip', 'false')
				
				$this.attr('data-openip', 'true')
				
				$('.gsv-investment-portfolio-landing-client-list-item-details').slideUp(function(){
					$(this).detach().appendTo('.gsv-investment-portfolio-landing-client-list')
					$('[data-counter="'+ appenderBorder + '"]').removeClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow').hide();
					
					
					
					$('.gsv-investment-portfolio-landing-client-list-item-details-heading').text($this.attr('data-title'));
					$('.gsv-investment-portfolio-landing-client-list-item-details-why-we-like-it-link').attr('href', $this.attr('data-link'))
					$('.gsv-investment-portfolio-landing-client-list-item-details-industry').text($this.attr('data-industry'))
					$('.gsv-investment-portfolio-landing-client-list-item-details-percentage').text($this.attr('data-percentage') + '% of GSVC')
					$('.gsv-investment-portfolio-landing-client-list-item-active-arrow', $this).show();
					//var position = $this.attr('data-counter');
					
					if(position % 4 == 0){
						$this.after($('.gsv-investment-portfolio-landing-client-list-item-details'));
					}else{
						var appender = (4 - (position % 4)) + parseInt(position);
						var appenderBorder = parseInt(appender) + 4;
						
						$('[data-counter="'+ appender + '"]').after($('.gsv-investment-portfolio-landing-client-list-item-details'))
						$('[data-counter="'+ appenderBorder + '"]').addClass('gsv-investment-portfolio-landing-client-list-item-right-border-fix')
						
					}
					
					$('.gsv-investment-portfolio-landing-client-list-item-details').slideDown().attr('data-active', 'true');
						
						
					
					
				})
			}
		}
			
	 		
	})
	
	var portHover = false;
	
	/* Hover Investment Portfolio Category 
	$('.gsv-investment-portfolio-landing-client-categories-list-item-category').hover(function(){
		if(portHover == false){
			portHover == true;
			$this = $(this);
			if($this.attr('data-category') != 'All'){
				if(!$this.hasClass('gsv-investment-portfolio-landing-client-categories-list-item-category-heading')){
					$('.gsv-investment-portfolio-landing-client-list-item:not([data-category="'+$this.attr('data-category')+'"]) .gsv-investment-portfolio-landing-client-list-item-client-logo').animate({
						opacity: '0.1'
					}, 500, function(){
						portHover = false;
						
					})
				}
			}
		}
	}, function(){
		$('.gsv-investment-portfolio-landing-client-list-item .gsv-investment-portfolio-landing-client-list-item-client-logo').animate({
				opacity: 1
			}, 100)
		
	});
	*/
	
	
	/* Click to sort Investment Portfolio */
	
	
	$(document).delegate('.gsv-investment-portfolio-landing-client-categories-list-item-category', 'click', function() { 
		$this = $(this);
		$('.gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border').removeClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
		$('.gsv-investment-portfolio-landing-client-list-item-active-arrow').hide();
		
		if($this.attr('data-category') == 'All'){
			$('.gsv-investment-portfolio-landing-client-list-item-details').slideUp();
			ipSort = false;
		
			$('.gsv-investment-portfolio-landing-client-list-item-row-sorted-right').removeClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-right')
			$('.gsv-investment-portfolio-landing-client-list-item-row-sorted-right-not-end').removeClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-right-not-end')
		
			$('.gsv-investment-portfolio-landing-client-list-item-row-end-retain').addClass('gsv-investment-portfolio-landing-client-list-item-row-end')
			
		
			
			$('.gsv-investment-portfolio-landing-client-list-item').each(function(){
				if(!$(this).hasClass('gsv-investment-portfolio-landing-client-list-item-details')){
					$(this).show(function(){
						$(this).animate({
							
						}, 50, function(){
							$(this).show()
						})
						
					})
				}
				
			})
		}else{
				
			ipSort = true;
			ipSortCategory = $this.attr('data-category');
			var portCounter = 1;
			var sortResults = $('.gsv-investment-portfolio-landing-client-list-item[data-category="'+ipSortCategory +'"]');
			
			var numIPs = sortResults.length;
			var lastRow = numIPs % 4;
			
			if(lastRow == 3){
				$(sortResults[numIPs-3]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-2]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-1]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
			}else if(lastRow == 0){
				$(sortResults[numIPs-4]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-3]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-2]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-1]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
			}else if(lastRow == 2){
				$(sortResults[numIPs-2]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');
				$(sortResults[numIPs-1]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');

			}else if(lastRow == 1){
				$(sortResults[numIPs-1]).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-bottom-border');

			}
			
			
			
			
			
			$('.gsv-investment-portfolio-landing-client-list-item[data-category="'+$this.attr('data-category')+'"]').each(function(){
				var portSize = $('.gsv-investment-portfolio-landing-client-list-item[data-category="'+$this.attr('data-category')+'"]').length
				
				$('.gsv-investment-portfolio-landing-client-list-item-row-end').addClass('gsv-investment-portfolio-landing-client-list-item-row-end-retain').removeClass('gsv-investment-portfolio-landing-client-list-item-row-end')
				
				if(portCounter % 4 == 0){
					
					$(this).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-right')
				
				}else if(portCounter == portSize){
					$(this).addClass('gsv-investment-portfolio-landing-client-list-item-row-sorted-right-not-end')
					
				}
				
				//$(this).fadeIn();
				$(this).show(function(){
						$(this).animate({
							
						}, 50, function(){
							$(this).show()
						})
						
					})
				portCounter++;
			})
			
			
			$('.gsv-investment-portfolio-landing-client-list-item:not([data-category="'+$this.attr('data-category')+'"])').each(function(){
				
				$(this).hide(function(){
					$(this).animate({
						
					}, 700, function(){
					
					})
				})
				
			})
			
	
			
		}
		
		
		
		
	 });
	
	
	
	/* Blog sidebar height */
	if($(".gsv-moving-ideas-aside-blog-contents-aside").length > 0){
		$(".gsv-moving-ideas-aside-blog-contents-aside").height($('.gsv-moving-ideas-blog-contents-posts').height() - 19)	
	}
	
	if($("#gsv-gravity-flash").length > 0) {
	
		var flashvars = {},
		params = {wmode: "transparent"},
		attributes = {};
	
		swfobject.embedSWF(baseURL +"swf/gsv-gravity-new5.swf", "gsv-gravity-flash", "2000", "350", "10", "", flashvars, params, attributes);	
		
	}
	
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		$('.gsv-flash-replacement-content').fadeIn();
	}
	
	/* Innovation Banner */
	setInterval(function(){

		$('.gsv-innovation-banner-image.left.active').animate({
			top: '293px'
		}, 500, 'swing', function(){
			$(this).detach().appendTo($('.gsv-innovation-banner')).addClass('inactive').css('top', '-293px');
		}).removeClass('active');
		
		$('.gsv-innovation-banner-image.right.active').animate({
			top: '-293px'
		}, 500, 'swing', function(){
			$(this).detach().appendTo($('.gsv-innovation-banner')).addClass('inactive').css('top', '293px');
		}).removeClass('active');
		
		$('.gsv-innovation-banner-image.left.inactive:first').animate({
			top: '0'
		}, 500, 'swing', function(){
			$(this).addClass('active');
		}).removeClass('inactive');
		
		$('.gsv-innovation-banner-image.right.inactive:first').animate({
			top: '0'
		}, 500, 'swing', function(){
			$(this).addClass('active');
		}).removeClass('inactive');

		
	}, 4000);
		
	/* Logo Carousel */
	setInterval(function(){
		$('.gsv-home-logo-carousel-list-item.active').animate({
			left: '-=1000'
		}, 500, 'swing', function() {
			$(this).removeClass('active').detach().appendTo('.gsv-home-logo-carousel-list');
		});
		
		$('.gsv-home-logo-carousel-list-item.active').next('.gsv-home-logo-carousel-list-item').css('left', 1000).animate({
			left: '-=1000'
		}, 500, 'swing', function() {
			$(this).addClass('active');
		});
	}, 3000);
	
	/* News Cycle */
	setInterval(function(){
		$('.gsv-news-list-item.active').fadeOut(1000, function() {
			$this = $(this);
			next = $this.next();
			$this.removeClass('active').detach().appendTo('.gsv-news-list');
			next.fadeIn(1000, function() {
				$(this).addClass('active');
			});
		});
		
	}, 5000);
	
});

/* Home Interior Carousel */
var activeICControlClass = 'gsv-home-interior-carousel-controls-list-item-active';
var iCActiveSet = 1;
var iCInactiveSet;

$(document).delegate('.gsv-home-interior-carousel-controls-list-item', 'click', function(){
	
	$this = $(this);
	
	if($this.attr('data-grouping')== 'gsv-insights'){
		resetInsightsCarousel();
	}else{
		resetFeaturedCarousel();
	}
	
	if($(this).hasClass(activeICControlClass)) {
		return false;
	} else {
		
		iCInactiveSet = $('.' + activeICControlClass).attr('data-set');
		iCActiveSet = $this.attr('data-set');			
		$('.' + activeICControlClass+'[data-grouping='+$this.attr('data-grouping')+']').removeClass(activeICControlClass);
		$(this).addClass(activeICControlClass);
		
		$('.gsv-home-interior-carousel-list-item.active[data-grouping='+$this.attr('data-grouping')+']').animate({
			'left': '-=1000px',
			'opacity': '0'
		}, 400, 'swing', function(){
			$(this).removeClass('active').css('left', '320px');
		});
		
		$('.gsv-home-interior-carousel-list-item[data-set="' + iCActiveSet + '"][data-grouping='+$this.attr('data-grouping')+']').eq(0).animate({
			'left': '0',
			'opacity': '1'
		}, 400, 'swing', function(){
			$(this).addClass('active');
		});
		
	}
});

var insightsInterval;
var featuredInterval;
//start carousels
resetInsightsCarousel();
resetFeaturedCarousel();

/* Auto rotate insights carousel */
function resetInsightsCarousel(){
	clearInterval(insightsInterval);
	
	insightsInterval = setInterval(function(){
			if(!$('.gsv-home-interior-carousel-controls-list-item-active').is(':last-child')){
				$('[data-grouping=gsv-insights].gsv-home-interior-carousel-controls-list-item-active').next().trigger('click')
			}else{
				$('.gsv-home-interior-carousel-controls-list [data-grouping=gsv-insights].gsv-home-interior-carousel-controls-list-item:first-child').trigger('click')
			}	
	}, 7000);

}


function resetFeaturedCarousel(){
	clearInterval(featuredInterval);
	
	featuredInterval = setInterval(function(){
			if(!$('.gsv-home-interior-carousel-controls-list-item-active').is(':last-child')){
				$('[data-grouping=featured-coverage].gsv-home-interior-carousel-controls-list-item-active').next().trigger('click')
			}else{
				$('.gsv-home-interior-carousel-controls-list [data-grouping=featured-coverage].gsv-home-interior-carousel-controls-list-item:first-child').trigger('click')
			}	
	}, 8000);

}


//pause auto-rotate on hover
$('.gsv-home-carousel-list-item-insights').hover(function(){
	clearInterval(insightsInterval)
}, function(){
	resetInsightsCarousel()
});

$('.gsv-home-carousel-list-item-coverage').hover(function(){
	clearInterval(featuredInterval)
}, function(){
	resetFeaturedCarousel()
});


/* Home Show More Blog Items */
$(document).delegate('[data-class="gsv-show-more-blog-items"]', 'click', function(){
	
	$this = $(this);
	
	if($this.attr('data-direction') == 'down'){
	
		if(!$('.gsv-home-blog-list-item-active').eq(3).is(':last-child')){
			
			$('.gsv-home-carousel-list-item-blog-view-more-link-up').removeClass('gsv-home-carousel-list-item-blog-view-more-link-inactive');
			
			$('.gsv-home-blog-list-item-active').eq(0).slideUp(500, 'swing', function(){
				
				$(this).removeClass('gsv-home-blog-list-item-active');
				$('.gsv-home-blog-list-item-active').eq(2).next().addClass('gsv-home-blog-list-item-active');
				
							
				$('.gsv-home-blog-list-item-active').css({
					'position': 'relative',
					'left': '0'
				}).fadeIn(500, 'swing')
				if($('.gsv-home-blog-list-item-active').eq(3).is(':last-child')){
					$('.gsv-home-carousel-list-item-blog-view-more-link-down').addClass('gsv-home-carousel-list-item-blog-view-more-link-inactive');
				}	
			})
		}else {
			
		}	
	}else{
		if(!$('.gsv-home-blog-list-item-active').eq(0).is(':first-child')){
			
			$('.gsv-home-carousel-list-item-blog-view-more-link-down').removeClass('gsv-home-carousel-list-item-blog-view-more-link-inactive');
			
			$('.gsv-home-blog-list-item-active').eq(3).slideDown(500, 'swing', function(){
				
				$(this).removeClass('gsv-home-blog-list-item-active');
				$('.gsv-home-blog-list-item-active').eq(0).prev().addClass('gsv-home-blog-list-item-active');
				
				
				
				$('.gsv-home-blog-list-item-active').css({
					'position': 'relative',
					'left': '0'
				}).fadeIn(500, 'swing')
				if($('.gsv-home-blog-list-item-active').eq(0).is(':first-child')){
					$('.gsv-home-carousel-list-item-blog-view-more-link-up').addClass('gsv-home-carousel-list-item-blog-view-more-link-inactive');
				}
			})
		}
	}	
	
});

//Erase Blog Search Current Text on click
$('.blog-search-term').focus(function(){
	$(this).val('')
})

function resetCarousel(){
	clearInterval(carouselInterval)
	carouselInterval = setInterval(function(){
		$('.gsv-home-carousel-control-next').trigger('click')
		
	}, 7000);
}


/* Tabset */
$(document).delegate('.gsv-tabset-navigation-list-item-link', 'click', function(){
	
	$this = $(this);
	
	if($this.hasClass('active')) {
		return false;
	}
	
	$parent = $this.closest('.gsv-tabset');
	linkID = $this.attr('href');
	
	$('.gsv-tabset-navigation-list-item-link.active', $parent).removeClass('active').parent('.gsv-tabset-navigation-list-item').attr('tabindex', '-1');
	
	$('.gsv-tabset-content.active', $parent).fadeOut(200, function() {
		$(this).removeClass('active').attr('aria-hidden', 'true');
	});
	
	$this.addClass('active').parent('.gsv-tabset-navigation-list-item').attr('tabindex', '0');
			
	$('.gsv-tabset-content[id=' + linkID + ']', $parent).fadeIn(500, function() {
		$(this).addClass('active').attr('aria-hidden', 'false');
	});

	return false;

});

/* Homepage "Carousel" */
$(document).delegate('.gsv-home-carousel-control-next', 'click', function() {
	
	/* Reset Interval */ 
	resetCarousel()
	
	$this = $(this);
	var firstActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(1)');
	var secondActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(2)');
	var thirdActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(3)');
	var nextItem = $('.gsv-home-carousel-list-item.active:nth-child(3)').next();
	
	if($('.gsv-home-carousel-control').hasClass('disabled')) {
		// Do nothing
	} else {

		$('.gsv-home-carousel-control').addClass('disabled');
	
		$(firstActiveItem).animate({
			'opacity': '0',
			'left': '-=320'
		}, 500, 'swing', function(){
		
			$(firstActiveItem).removeClass('active');
		
			$(secondActiveItem).animate({
				'z-index': '1',
				'left': '-=320'
			}, 500, 'swing');
			
			$(thirdActiveItem).delay(100).animate({
				'z-index': '2',
				'left': '-=320'
			}, 500, 'swing');
			
			$(nextItem).delay(200).addClass('active').css({
				'opacity': '0',
				'left': '960px',
				'top': '0',
				'z-index': '3'
			}).show().animate({
				'opacity': '1',
				'left': '640'
			}, 500, 'swing', function() {
				$('.gsv-home-carousel-control').removeClass('disabled');
			});
			
		}).detach().appendTo('.gsv-home-carousel-list');
	}
});

$(document).delegate('.gsv-home-carousel-control-previous', 'click', function() {
	
	/* Reset Interval */ 
	resetCarousel()
	
	var firstActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(1)');
	var secondActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(2)');
	var thirdActiveItem = $('.gsv-home-carousel-list-item.active:nth-child(3)');
	var nextItem = $('.gsv-home-carousel-list-item:last-child');
	
	if($('.gsv-home-carousel-control').hasClass('disabled')) {
		// Do nothing
	} else {
		
		$('.gsv-home-carousel-control').addClass('disabled');
	
		$(thirdActiveItem).animate({
			'opacity': '0',
			'left': '+=320'
		}, 500, 'swing', function(){
		
			$(thirdActiveItem).removeClass('active');
		
			$(secondActiveItem).animate({
				'z-index': '3',
				'left': '+=320'
			}, 500, 'swing');
			
			$(firstActiveItem).delay(100).animate({
				'z-index': '2',
				'left': '+=320'
			}, 500, 'swing');
			
			$(nextItem).delay(200).prependTo('.gsv-home-carousel-list').addClass('active').css({
				'opacity': '0',
				'left': '-320px',
				'z-index': '1'
			}).show().animate({
				'opacity': '1',
				'left': '0'
			}, 500, 'swing', function() {
				$('.gsv-home-carousel-control').removeClass('disabled');
			});
			
		});
	}
});

/* Dropdown Navigation */
$(document).delegate('[data-js="top-level-dropdown-navigation-link"]', 'mouseenter', function(){
	$(this).children('.gsv-header-navigation-dropdown').fadeIn(200);
});

$(document).delegate('[data-js="top-level-dropdown-navigation-link"]', 'mouseleave', function(){
	$(this).children('.gsv-header-navigation-dropdown').fadeOut(200);
});

/* Overlay */
var activeOverlay;

$(document).delegate('[data-js=64i-overlay-link]', 'click', function() {
		
	$this = $(this);
	activeOverlay = $this.attr('href');
	activeOverlayXOffset = ($(activeOverlay).outerWidth()/2)*-1;
	activeOverlayYOffset = ($(activeOverlay).outerHeight()/2)*-1;
	
	$('[data-js="64i-modal"]').fadeIn();
	$(activeOverlay).detach().appendTo('body').css({
		marginTop: activeOverlayYOffset,
		marginLeft: activeOverlayXOffset
	}).fadeIn(function(){
		if($(activeOverlay).hasClass('gsv-video-flyout')) {
			$(activeOverlay).children('video')[0].play();
		}
	});
	
	return false;

});

$(document).delegate('[data-js="64i-modal"]', 'click', function(){
		
	$('[data-js="64i-modal"]').fadeOut(function(){
		$(this).hide();
	});
	
	$('[data-js="64i-overlay"]').fadeOut(function(){
		$(this).fadeOut(function(){
			if($(activeOverlay).hasClass('gsv-video-flyout')) {
				$(activeOverlay).children('video')[0].pause();
			}			
		});
	});

});

$(document).delegate('[data-js="64i-overlay-close-link"]', 'click', function(){
		
	$('[data-js="64i-modal"]').fadeOut(function(){
		$(this).hide();
	});
	
	$('[data-js="64i-overlay"]').fadeOut(function(){
		$(this).fadeOut(function(){
			if($(activeOverlay).hasClass('gsv-video-flyout')) {
				$(activeOverlay).children('video')[0].pause();
			}			
		});
	});

});

$(document).delegate('.slide-video', 'click', function(){
	externalPlayMovie();
})

function externalPlayMovie() {

	activeOverlay = '#gsv-growth-video-flyout';
  	activeOverlayXOffset = ($(activeOverlay).outerWidth()/2)*-1;
	activeOverlayYOffset = ($(activeOverlay).outerHeight()/2)*-1;
  	
  	$('[data-js="64i-modal"]').fadeIn();
	$(activeOverlay).detach().appendTo('body').css({
		marginTop: activeOverlayYOffset,
		marginLeft: activeOverlayXOffset
	}).fadeIn(function(){
		if($(activeOverlay).hasClass('gsv-video-flyout')) {
			$(activeOverlay).children('video')[0].play();
		}
	});

} // end of externalPlayMovie();

/*-----------------------
	Get Stock Quote
-----------------------*/


var firstTime = 0;
get_quote();
var timespan = 30000;
var intervalID = setInterval(get_quote, timespan);
var d = new Date();
var MONTH = 0;
var DATE = 1;
var YEAR = d.getFullYear()
var TIME = 2;

function get_quote() {

	$.getJSON('/quote.php', function(response){

		var current_sale = $('.gsv-footer-stock-ticker-current-value').text()
		var last_sale = response[0].l_cur
		var change = response[0].cp;
		var time = response[0].lt;
		time = time.replace(',','');
		time = time.split(' ')
		

	
		var midday = time[TIME].substr(time[TIME].length-2)

		if(firstTime == 0){

			$('.gsv-footer-stock-ticker-current-value').text(last_sale);
			$('.gsv-footer-stock-ticker-change-percentage').text(change+'%');
			$('.gsv-footer-stock-ticker-update-time').text(time[TIME]+' EST on '+ time[MONTH] + ' ' + time[DATE] + ', '+ YEAR).attr('datetime',YEAR+'-'+time[MONTH]+'-'+time[DATE]+'T'+time[TIME])
			
			if(change.indexOf('-') == 0){
						$('.gsv-footer-stock-ticker-change-percentage').addClass('gsv-footer-stock-ticker-change-percentage-down')
					}else{
						$('.gsv-footer-stock-ticker-change-percentage').addClass('gsv-footer-stock-ticker-change-percentage-up')
					}
			$('.gsv-footer-stock-ticker').fadeIn();
			firstTime = 1;
		}else{
			if(current_sale != last_sale && last_sale != ''){
				$('.gsv-footer-stock-ticker-current-value').fadeOut(function(){
					$(this).text(last_sale);
					$(this).fadeIn();
				})
				$('.gsv-footer-stock-ticker-change-percentage').fadeOut(function(){
					$(this).text(change+'%');
					$(this).removeClass('gsv-footer-stock-ticker-change-percentage-up').removeClass('gsv-footer-stock-ticker-change-percentage-down');
					if(change.indexOf('-') == 0){
						$(this).addClass('gsv-footer-stock-ticker-change-percentage-down')
					}else{
						$(this).addClass('gsv-footer-stock-ticker-change-percentage-up')
					}
					$(this).fadeIn()
				})
			}		
		$('.gsv-footer-stock-ticker-update-time').text(time[TIME]+' EST on '+ time[MONTH] + ' ' + time[DATE] + ', '+ YEAR).attr('datetime',YEAR+'-'+time[MONTH]+'-'+time[DATE]+'T'+time[TIME])
		}
	})
}


function convert_month(month){
	switch(month){
		case 'Jan':
			return '01';
			break;
		case 'Feb':
			return '02';
			break;
		case 'Mar':
			return '03';
			break;
		case 'Apr':
			return '04';
			break;
		case 'May':
			return '05';
			break;
		case 'Jun':
			return '06';
			break;
		case 'Jul':
			return '07';
			break;
		case 'Aug':
			return '08';
			break;
		case 'Sep':
			return '09';
			break;
		case 'Oct':
			return '10';
			break;
		case 'Nov':
			return '11';
			break;
		case 'Dec':
			return '12';
			break;
	}
}

function convert24(time){
	if(time < 13){
		return time;
	}else{
		switch(time){
			case 13:
				return '01';
				break;
			case 14:
				return '02';
				break;
			case 15:
				return '03';
				break;
			case 16:
				return '04';
				break;
			case 17:
				return '05';
				break;
			case 18:
				return '06';
				break;
			case 19:
				return '07';
				break;
			case 20:
				return '08';
				break;
			case 21:
				return '09';
				break;
			case 22: 
				return '10';
				break;
			case 23:
				return '11';
				break;
			case 24:
				return '12';
				break;
		}
	}
}





/* Form Submission */


/* Contact Us */
$(document).delegate('[data-js=gsv-contact-us-flyout-form-submit]','click', function(){

	error_list = validate($('[data-js=gsv-contact-us-flyout-form]'));
	if(error_list == ''){
		$('[data-js=gsv-contact-us-flyout-form]').fadeOut(function(){
				$('[data-js=gsv-flyout-form-successful]').fadeIn();	
			});

		$.post(baseURL + 'email-contactus.php', { name: $('[name=gsv-contact-us-flyout-form-name]').val(),  email : $('[name=gsv-contact-us-flyout-form-email]').val(), phone: $('[name=gsv-contact-us-flyout-form-phone]').val(), reason : $('[name=gsv-contact-us-flyout-form-reason]').val() }, function(response){
						
		
		})

	}else{
		show_errors(error_list)		
	}
	return false;

})

/* Newsletter */
$(document).delegate('[data-js="gsv-newsletter-signup-form-submit"]','click', function(){

	error_list = validate($('[data-js="gsv-newsletter-signup-form"]'));
	if(error_list == ''){
	
		$.post(baseURL + 'email-newsletter.php', { name: $('[name=gsv-newsletter-signup-form-name]').val(),  email : $('[name=gsv-newsletter-signup-form-email]').val()}, function(response){
		
			$('[data-js="gsv-newsletter-signup-form"]').fadeOut(function(){
					$('[data-js="gsv-newsletter-signup-form"]').html('<p>Your information has been submitted.</p><p>Thank you.</p>').fadeIn()
			});				
		
		})

	}else{
		show_errors(error_list)		
	}
	return false;

})



$(document).delegate('[name=gsv-newsletter-signup-flyout-form-name], [name=gsv-newsletter-signup-form-name], [name=gsv-newsletter-signup-flyout-form-email] ,[name=gsv-newsletter-signup-form-email]', 'click', function(){
	$(this).select().focus()
})

/* Newsletter */
$(document).delegate('[data-js=gsv-newsletter-signup-flyout-form-submit]','click', function(){
	error_list = validate($('[data-js=gsv-newsletter-signup-flyout-form]'));
	if(error_list == ''){

		$.ajax({
			url: '/wp/wp-content/themes/gsvcap/mailchimp/store-address.php?ajax=true&'+$('[data-js=gsv-newsletter-signup-flyout-form]').serialize(),
			success: function(msg) {
				
				$('[data-js=gsv-newsletter-signup-flyout-form]').fadeOut(function(){
					$('.gsv-newsletter-signup-flyout-form-successful').fadeIn();
					setTimeout(function(){
						$('[data-js="64i-modal"], [data-js="64i-overlay-close-link"]').trigger('click')
						
					}, 5000);
				});			
			}
		});
		return false;
		

	}else{
		show_errors(error_list)	 
		return false;	
	}
	return false;
}) 


/* Moving Ideas Blog */
$(document).delegate('[data-js=gsv-moving-ideas-aside-blog-contents-aside-newsletter-submit]','click', function(){

	error_list = validate($('[name=gsv-moving-ideas-aside-blog-contents-aside-blog-search]'));
	if(error_list == ''){

		$.ajax({
			url: '/wp/wp-content/themes/gsvcap/mailchimp/store-address.php?ajax=true&'+$('[name=gsv-moving-ideas-aside-blog-contents-aside-blog-search]').serialize(),
			success: function(msg) {
				
				$('.gsv-moving-ideas-aside-blog-contents-aside-section-newsletter').fadeOut(function(){
					$('.gsv-moving-ideas-aside-blog-contents-aside-section-newsletter').html('<p>Your information has been submitted.</p><p>Thank You.</p>').fadeIn()
				});			
			}
		});
		return false;
		

	}else{
		show_errors(error_list)	
		return false;	
	}
	return false;
})


function validate(form){
	var errors = '';
$('.gsv-newsletter-signup-flyout-form-error').hide()
	$('input', form).each(function(){
		
		
		
		
		if($(this).attr('name') == 'gsv-newsletter-signup-flyout-form-email' ||     $(this).attr('name') == 'gsv-contact-us-flyout-form-email'){
			if(!isValidEmailAddress($(this).val()) || $(this).val().toLowerCase() == 'email' ){
				errors += '&'+$(this).attr('name')
				$(this).val('Invalid Email');
				
			}
		}else{
			if($(this).val() == '' || $(this).val() == 'Required Field' || $(this).val().toLowerCase() == 'name' || $(this).val().toLowerCase() == 'first + last name' ){
				errors += '&'+$(this).attr('name')
			}
		}
	})
	
	$('textarea', form).each(function(){
		
			if($(this).val() == '' || $(this).val() == 'Required Field' || $(this).val() == 'Reason for contacting us'){
				errors += '&'+$(this).attr('name')
			}
		
	})
	
	
	if(form.attr('class') == 'gsv-newsletter-signup-flyout-form'){
		if($('.gsv-newsletter-signup-flyout-form input:checkbox:checked').length == 0){
			$('.gsv-newsletter-signup-flyout-form-error').show()
			errors += '&checkbox'
		}
	}
	
	return errors;

}	

function isValidEmailAddress(emailAddress) {
var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
return pattern.test(emailAddress);
};
	
	

function show_errors(error_list){
	error_list = error_list.split('&')
			for(var i = 1; i <= error_list.length; i++){
				if(error_list[i] == 'email'){
					$('[name='+error_list[i]+']').val('Invalid Email')
				}else{
					$('[name='+error_list[i]+']').val('Required Field')
				}			}
			$('[name='+error_list[1]+']').select().focus()
	

}	

/* Hall of Fame */
var overlay = false;

$(document).delegate('.gsv-hof-list-item-wrapper','click', function() {
	$this = $(this);
	
	if(!overlay) {
		$('[data-class="gsv-hof-container"]').append('<div class="gsv-hof-overlay" data-class="gsv-hof-overlay"><div class="gsv-hof-overlay-close-button" data-class="gsv-hof-overlay-close"></div><div class="gsv-hof-overlay-info" data-class="gsv-hof-overlay-info"><h2 class="gsv-hof-overlay-heading" data-class="gsv-hof-overlay-name"></h2><p class="gsv-hof-overlay-heading-description" data-class="gsv-hof-overlay-name-description"></p><p class="gsv-hof-overlay-summary" data-class="gsv-hof-overlay-summary"></p><div class="gsv-hof-overlay-content" data-class="gsv-hof-overlay-content"></div></div><div class="gsv-hof-overlay-media-wrap"><div class="gsv-hof-overlay-image-play-button"></div><img src="" class="gsv-hof-overlay-image" data-class="gsv-hof-overlay-image" /><div class="gsv-hof-overlay-video" id="gsv-hof-overlay-video"></div></div><blockquote class="gsv-hof-overlay-quote" data-class="gsv-hof-overlay-quote"></blockquote></div>');
		overlay = true;
	}

	/* Add video behind image in overlay */
	
	//	$('[data-class="gsv-hof-overlay"] .gsv-hof-overlay-media-wrap').append('<iframe class="gsv-hof-overlay-video" width="480" height="270" src="http://www.youtube.com/v/'+$this.attr('data-video')+'?version=3&enablejsapi=1" frameborder="0" allowfullscreen></iframe>');
	
	
	/* Embed video if there is a video to embed and it hasn't already been embedded */
	if($this.attr('data-video')!= undefined){
		var params = { allowScriptAccess: "always" };
	    var atts = { id: "gsv-hof-overlay-video" };
	    swfobject.embedSWF("http://www.youtube.com/v/"+$this.attr('data-video')+"?enablejsapi=1&playerapiid=ytplayer&version=3&rel=0",
	                       "gsv-hof-overlay-video", "480", "270", "8", null, null, params, atts);
	                       
	                       
	}
	
	$('[data-class="gsv-hof-overlay"]').removeClass().addClass('gsv-hof-overlay').addClass($this.attr('data-category'));
	$('[data-class="gsv-hof-overlay-name"]').html($this.find('[data-class="gsv-hof-name"]').eq(0).text());
	$('[data-class="gsv-hof-overlay-name-description"]').html($this.find('[data-class="gsv-hof-name-description"]').eq(0).text());
	$('[data-class="gsv-hof-overlay-summary"]').html($this.find('[data-class="gsv-hof-list-item-summary"]').html());
	$('[data-class="gsv-hof-overlay-content"]').html($this.find('[data-class="gsv-hof-content"]').eq(0).html());
	$('[data-class="gsv-hof-overlay-image"]').attr('src', $this.find('[data-class="gsv-hof-image"]').eq(0).attr('src'));
	$('[data-class="gsv-hof-overlay-quote"]').html($this.find('[data-class="gsv-hof-quote"]').eq(0).html());
	$('[data-class="gsv-hof-overlay"]').show().css({ left: "25%", top: "25%" }).animate({ height: '575px', width: '960px', top: 0, left: 0, opacity: 1 }, 500, function(){		
		$('[data-class="gsv-hof-overlay-quote"] p').css('marginTop', ($('[data-class="gsv-hof-overlay-quote"] p').height()/2)*-1);
		$('[data-class="gsv-hof-overlay-info"]').show();
		$('[data-class="gsv-hof-overlay-name"]').fadeIn(500, 'swing');
		$('[data-class="gsv-hof-overlay-name-description"]').delay(200).fadeIn(500, 'swing');
		$('[data-class="gsv-hof-overlay-summary"]').delay(300).fadeIn(500, 'swing');
		$('[data-class="gsv-hof-overlay-content"]').delay(400).fadeIn(500, 'swing');
		$('[data-class="gsv-hof-overlay-image"]').delay(500).fadeIn(500, 'swing',function(){
				 /* Show Play Button */
		if($this.attr('data-video')!= undefined){
			
			 $('.gsv-hof-overlay-image-play-button').fadeIn();
		}else{
			$('.gsv-hof-overlay-image-play-button').hide();
		}
			
		});
		$('[data-class="gsv-hof-overlay-quote"]').delay(500).animate({ opacity: 1 }, 500, 'swing');
		
	});
});

function onYouTubePlayerReady(playerId) {
      ytplayer = document.getElementById("gsv-hof-overlay-video");
      ytplayer.playVideo()
      ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
}


function onytplayerStateChange(newState) {
	/* Video ended */
   if(newState == 0){
		 ytplayer = document.getElementById("gsv-hof-overlay-video");
		 ytplayer.pauseVideo()
		 
		 var duration = ytplayer.getDuration();
		
		ytplayer.seekTo(-duration);
		ytplayer.pauseVideo()
		/* Show image - may have been hidden to show video */
		$('.gsv-hof-overlay-image').show(function() { 
			$('.gsv-hof-overlay-image-play-button').show();
			$('#gsv-hof-overlay-video').fadeOut();
			
		 });
	   
   }
}


/* Click overlay image to show video */
$(document).delegate('.gsv-hof-overlay-image,.gsv-hof-overlay-image-play-button', 'click', function(){
	if($('#gsv-hof-overlay-video').html() !== ''){
			
		$('.gsv-hof-overlay-image,.gsv-hof-overlay-image-play-button').fadeOut(function(){
			$('#gsv-hof-overlay-video').css('display', 'block');
						
		});
		
		return false;
	}
});



$(document).delegate('[data-class="gsv-hof-overlay"]','click', function(e) {

	if(e.target.id != 'gsv-hof-overlay-video'){

	$('[data-class="gsv-hof-overlay"]').fadeOut(200, 'swing', function() {
		$(this).css({
			opacity: 0,
			display: 'block',
			height: '1px',
			width: '1px',
			left: '-9999px',
			top: '-9999px'
		});
		
		
				
		$('[data-class="gsv-hof-overlay-info"], [data-class="gsv-hof-overlay-name"], [data-class="gsv-hof-overlay-summary"], [data-class="gsv-hof-overlay-name-description"], [data-class="gsv-hof-overlay-content"], [data-class="gsv-hof-overlay-image"]').hide();
		$('[data-class="gsv-hof-overlay-quote"]').css('opacity', 0);
	});

		/* Remove Video */
		$('.gsv-hof-overlay-image-play-button').hide();
		//$('[data-class="gsv-hof-overlay"] .gsv-hof-overlay-media-wrap iframe').remove()
		// ytplayer = document.getElementById("gsv-hof-overlay-video");
		// ytplayer.pauseVideo()
		$('#gsv-hof-overlay-video').html('').hide();
		/* Show image - may have been hidden to show video */
		$('.gsv-hof-overlay-image').show();
		$('.gsv-hof-overlay-image-play-button').hide();
	}
});

var hofSort = false;

/*
$(document).delegate('[data-class="gsv-hof-category"]','mouseenter', function() {
	var cat = $(this).attr('data-category');
	if(cat != 'gsv-hof-reset' && hofSort == false){
		$('.gsv-hof-list-item-wrapper').each(function() {
			if(!$(this).hasClass(cat)) {
				$(this).addClass('gsv-hof-list-item-wrapper-inactive');
			}	
		});
	}
});

$(document).delegate('[data-class="gsv-hof-category"]','mouseleave', function() {
	$('.gsv-hof-list-item-wrapper-inactive').removeClass('gsv-hof-list-item-wrapper-inactive');
	
});
*/
function resetHOF(){
	hofSort = false;
	
	$('.gsv-hof-list-item-wrapper').each(function() {
						
			if($(this).attr('data-set') == activeSet){
				$(this).addClass('gsv-hof-list-item-wrapper-visible').removeClass('gsv-hof-list-item-wrapper-invisible')
			}else{
				$(this).removeClass('gsv-hof-list-item-wrapper-visible').addClass('gsv-hof-list-item-wrapper-invisible')

			}
			
			
			if($(this).hasClass('gsv-hof-large')){
				$(this).animate({
				
					left : $(this).attr('data-x')+'px',
					top  : $(this).attr('data-y')+'px',
					width: '320px',
					height: '180px',
					opacity: 1
					
				}, 700, 'swing', function(){
					$(this).css('opacity', '').removeClass('gsv-hof-large-shrunk')
				})
			}else{					
				$(this).animate({
					
					left : $(this).attr('data-x')+'px',
					top  : $(this).attr('data-y')+'px',
					opacity: 1
					
					
				}, 700, 'swing', function(){
					$(this).css('opacity', '')
				})
			}
	});
}

var xpos = [160, 640, 480, 800, 1, 320, 480, 640,800, 320,800, 480,160, 800, 640, 480, 800, 1, 640, 480, 640, 1, 640, 320, 480, 800, 160 ];
var ypos = [270,90,360,180,360, 450, 0,270, 450, 360,90, 180, 450, 0, 450, 270, 360, 270, 180, 450, 0, 450, 360, 270, 90, 270, 360];

$(document).delegate('[data-class="gsv-hof-category"]','click', function() {
	$this = $(this);
	$('.active-category').removeClass('active-category')
		//Don't do anything if this category is already being shown
	if($this.attr('data-active') == 'false'){
		$('[data-class="gsv-hof-category"]').attr('data-active', 'false');
		$this.attr('data-active', 'true');
	
		var cat = $this.attr('data-category');
		var activeSet = $('.'+activeMoreClass).attr('data-set');
		
		if(cat == 'gsv-hof-reset'){
			resetHOF();
		}else{
			
			$this.addClass('active-category');
		
			hofSort = true;
			var items = $('.gsv-hof-list-item [data-category="'+cat+'"]');
			
			$('.gsv-hof-list-item-wrapper').each(function() {
				$(this).parent().removeClass('gsv-hof-flip')
				if(!$(this).hasClass(cat)) {
					//$(this).fadeOut(function(){
						$(this).css({
						'opacity' : 0,
						'left': $(this).attr('data-x')+'px',
						'top' : $(this).attr('data-y')+'px'
						}).addClass('gsv-hof-list-item-wrapper-invisible').removeClass('gsv-hof-list-item-wrapper-visible');
						
					//})
				}else{
					$(this).removeClass('gsv-hof-list-item-wrapper-invisible').addClass('gsv-hof-list-item-wrapper-visible')
					
					if($(this).hasClass('gsv-hof-large')){
						$(this).addClass('gsv-hof-large-shrunk');
					}
				}	
			});
			
			for(var i = 0; i < items.length; i++){
				$(items[i]).animate({
					left: xpos[i],
					top: ypos[i],
					width: '160px',
					height: '90px',
					opacity: 1
				}, 700, 'swing')
			}
		}
	}
});



var activeMoreClass = 'gsv-hov-view-more-list-item-active';
var inactiveSet;
var activeSet = 1;

	
/* IE View More */
$(document).delegate('.ie .gsv-hov-view-more-list-item','click', function() {
	$this = $(this);
	$('.active-category').removeClass('active-category')
	if(hofSort == true){
		resetHOF();
	}
	
		
	if($this.hasClass(activeMoreClass)) {
		return false;
	} else {
		inactiveSet = $('.' + activeMoreClass).attr('data-set');
		activeSet = $this.attr('data-set');		
		$('.' + activeMoreClass).removeClass(activeMoreClass);
		$this.addClass(activeMoreClass);
		$('.gsv-hof-list-item-wrapper').hide().addClass('gsv-hof-list-item-wrapper-invisible').removeClass('gsv-hof-list-item-wrapper-visible')	

		$('.gsv-hof-list-item-wrapper[data-set="'+activeSet+'"]').fadeIn().removeClass('gsv-hof-list-item-wrapper-invisible').addClass('gsv-hof-list-item-wrapper-visible')	
	
		
		/*
		
		
		*/	
	}
});	

$(document).delegate('.gsv-hov-view-more-list-item','click', function() {
	$('.active-category').removeClass('active-category')
	if(!$('html').hasClass('ie')){
		$this = $(this);
		
		if(hofSort == true){
			resetHOF();
		}
	
		if($this.hasClass(activeMoreClass)) {
			return false;
		} else {
			inactiveSet = $('.' + activeMoreClass).attr('data-set');
			activeSet = $this.attr('data-set');		
			$('.' + activeMoreClass).removeClass(activeMoreClass);
			$this.addClass(activeMoreClass);
			
			var groups = [
				[10, 7, 14],
				[5, 2, 15],
				[9, 18, 12],
				[13, 4, 8],
				[17, 1, 16],
				[3, 6, 11]
			];
			
			var interator = groups.length;
			
			(function myLoop(f) {
				setTimeout(function () {
					for(i = 0; i < groups[f].length; i++){
						$('.gsv-hof-list-item-wrapper[data-set="'+activeSet+'"][data-position="'+groups[f][i]+'"]').removeClass('gsv-hof-list-item-wrapper-invisible');
						$('.gsv-hof-list-item-wrapper[data-set="'+inactiveSet+'"][data-position="'+groups[f][i]+'"]').removeClass('gsv-hof-list-item-wrapper-visible');
						$('.gsv-hof-list-item [data-position="'+groups[f][i]+'"]').parent().addClass('gsv-hof-flip');
						$('.gsv-hof-list-item-wrapper[data-set="'+inactiveSet+'"][data-position="'+groups[f][i]+'"]').addClass('gsv-hof-list-item-wrapper-invisible');
						$('.gsv-hof-list-item-wrapper[data-set="'+activeSet+'"][data-position="'+groups[f][i]+'"]').addClass('gsv-hof-list-item-wrapper-visible');	
						
						//$('.gsv-hof-list-item [data-position="'+groups[f][i]+'"]').parent().delay(1000).removeClass('gsv-hof-flip');	
						$('.gsv-hof-list-item [data-position="'+groups[f][i]+'"]').parent()
						
					}
					f--;
					if (f >= 0) {           
						myLoop(f);            
					}
			   }, 200)
			})(interator-1);  
			
		}
	}

});
