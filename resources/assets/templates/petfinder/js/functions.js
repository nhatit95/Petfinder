jQuery(document).ready(function($){
	"use strict";
	
	
	// runs countdown function
	$.fn.kode_countdown = function(){
		if(typeof($.fn.countdown) == 'function'){
			$(this).each(function(){
				var austDay = new Date();
				var data_year;
				var data_month;
				var data_day;
				var data_time;
				var current_day;
				
				// data-year duration
				if( $(this).attr('data-year') ){
					data_year = parseInt($(this).attr('data-year'));
				}
				//Month
				if( $(this).attr('data-month') ){
					data_month = parseInt($(this).attr('data-month'));
				}
				//day
				if( $(this).attr('data-day') ){
					data_day = parseInt($(this).attr('data-day'));
				}
				//time
				if( $(this).attr('data-time') ){
					data_time = parseInt($(this).attr('data-time'));
				}
						
				current_day = new Date(data_year, data_month-1, data_day,data_time);
				$(this).countdown({until: current_day});	
				jQuery('#year').text(current_day.getFullYear());
			});	
		}
	}
	
	
	// runs countdown function
	$.fn.kode_countdown_timmer = function(){
		if(typeof($.fn.downCount) == 'function'){
			$(this).each(function(){
				var austDay = new Date();
				var data_year;
				var data_month;
				var data_day;
				var data_time;
				var current_day;
				
				// data-year duration
				if( $(this).attr('data-year') ){
					data_year = parseInt($(this).attr('data-year'));
				}
				//Month
				if( $(this).attr('data-month') ){
					data_month = parseInt($(this).attr('data-month'));
				}
				//day
				if( $(this).attr('data-day') ){
					data_day = parseInt($(this).attr('data-day'));
				}
				//time
				if( $(this).attr('data-time') ){
					data_time = parseInt($(this).attr('data-time'));
				}
				
				var current_day = new Date(data_year, data_month-1, data_day,data_time);
				//$(this).downCount({ date: "'"+data_month+'/'+data_day+'/'+data_year+' '+data_time+"'", offset: +1 });
				$(this).downCount({ date: current_day, offset: +1 });
				
			});	
		}
	}
	

	$('.cart-option .widget_shopping_cart_content').hide();
	 //Header Search Area Function
    $('.cart-option a').on('click',function () {
        if ($(this).attr('id') == 'active-btn-shopping') {
            $(this).attr('id', 'no-active-btn-shopping');
            $(this).siblings('.widget_shopping_cart_content').slideUp();
        } else {
            $(this).attr('id', 'active-btn-shopping');
			$(this).siblings('.widget_shopping_cart_content').slideDown();
        }
    });
	
	
	if($(".range").length){
		$(".range").slider();
		$(".range").on("slide", function(slideEvt) {
			$(".range-slider").text(slideEvt.value);
		});
	}

	
	if($('.header-stickyyyyy').length){
		// grab the initial top offset of the navigation 		
		var stickyNavTop = $('.kode-pet-nav-sticky-style').offset().top;
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var stickyNav = function(){
			var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scrollTop > stickyNavTop) { 
				$('.kode-pet-nav-sticky-style').addClass('kf_sticky');
			} else {
				$('.kode-pet-nav-sticky-style').removeClass('kf_sticky'); 
			}
		};
		stickyNav();
		// and run it again every time you scroll
		$(window).scroll(function() {
			stickyNav();
		});
	
	}	
	
	if($('.nav_one_page').length){
		$('.navigation .menu').singlePageNav({
			offset: 70,
			filter: ':not(li.external a)',
			updateHash: true,
			beforeStart: function() {
				console.log('begin scrolling');
			},
			onComplete: function() {
				console.log('done scrolling');
			}
		});
	}
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').css('opacity','1');
		} else {
			$('.back-to-top').css('opacity','0');
		}
	});
	
	//Click event to scroll to top
	$('.back-to-top a').on('click',function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	// runs bx slider function
	$.fn.kode_bxslider = function(){
		if(typeof($.fn.bxSlider) == 'function'){
			$(this).each(function(){
				var bx_attr = {
					mode: 'slide',
					auto: true,
					controls:true,
					infiniteLoop:true,
					slideMargin:10,
					// prevText: '<i class="icon-angle-left" ></i>', 
					// nextText: '<i class="icon-angle-right" ></i>',
					// useCSS: false
				};
				
				// slide duration
				if( $(this).attr('data-pausetime') ){
					bx_attr.pause = parseInt($(this).attr('data-pausetime'));
				}
				if( $(this).attr('data-slidespeed') ){
					bx_attr.speed = parseInt($(this).attr('data-slidespeed'));
				}
				if( $(this).attr('data-mode') ){
					bx_attr.mode = $(this).attr('data-mode');
				}
				if( $(this).attr('data-min') ){
					bx_attr.minSlides = $(this).attr('data-min');
				}
				if( $(this).attr('data-width') ){
					bx_attr.slideWidth = $(this).attr('data-width');
				}
				if( $(this).attr('data-max') ){
					bx_attr.maxSlides = $(this).attr('data-max');
				}
				if( $(this).attr('data-margin') ){
					bx_attr.slideMargin = $(this).attr('data-margin');
				}
				if( $(this).attr('data-auto') ){
					bx_attr.auto = $(this).attr('data-auto');
				}
				if( $(this).attr('data-ticker') ){
					bx_attr.ticker = false;
				}
				if( $(this).attr('data-tickerHover') ){
					bx_attr.tickerHover = $(this).attr('data-tickerHover');
				}
				$(this).bxSlider(bx_attr);	
			});				
			
			$(".bx-controls-direction .bx-prev").empty();
			$(".bx-controls-direction .bx-next").empty();
			$(".bx-controls-direction .bx-next").append('<i class="fa fa-angle-right"></i>');
			$(".bx-controls-direction .bx-prev").append('<i class="fa fa-angle-left"></i>');
			
		}
	}
	
	if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || 
		navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || 
		navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || 
		navigator.userAgent.match(/Windows Phone/i) ){ 
		var kode_touch_device = true; 
	}else{ 
		var kode_touch_device = false; 
	}
	
	// retrieve GET variable from url
	$.extend({
	  getUrlVars: function(){
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
		  hash = hashes[i].split('=');
		  vars.push(hash[0]);
		  vars[hash[0]] = hash[1];
		}
		return vars;
	  },
	  getUrlVar: function(name){
		return $.getUrlVars()[name];
	  }
	});	
	
	// blog - port nav
	function kode_set_item_outer_nav(){
		$('.blog-item-wrapper > .kode-nav-container').each(function(){
			var container = $(this).siblings('.blog-item-holder');
			var child = $(this).children();
			child.css({ 'top':container.position().top, 'bottom':'auto', height: container.height() - 50 });
		});
		$('.portfolio-item-wrapper > .kode-nav-container').each(function(){
			var container = $(this).siblings('.portfolio-item-holder');
			var child = $(this).children();
			child.css({ 'top':container.position().top, 'bottom':'auto', height: container.height() - 40 });
		});		
	}

	
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	
	$.fn.kode_owl_carousel_abc = function(){
		if(typeof($.fn.owlCarousel) == 'function'){
			$(this).each(function(){
				var option;
				var data_small;
				var data_margin
				if($(this).attr('data-slide')){
					option = $(this).attr('data-slide');
				}
				if($(this).attr('data-small-slide')){
					data_small = $(this).attr('data-small-slide');
				}
				if($(this).attr('data-margin')){
					data_margin = $(this).attr('data-margin');
				}
				var owl_attr = {
					autoPlay: 3000, //Set AutoPlay to 3 seconds
					margin:25,
					
					responsive:{
						0:{
							items:1
						},
						600:{
							items:data_small
						},
						1000:{
							items:option
						}
					}
				};
				
				$(this).owlCarousel(owl_attr);	
				// Custom Navigation Events
				$(".next").click(function(){
					$(this).trigger('owl.next');
				});
				$(".prev").click(function(){
					$(this).trigger('owl.prev');
				});
				$(".play").click(function(){
					$(this).trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
				});
				$(".stop").click(function(){
					$(this).trigger('owl.stop');
				});
			});	
		}
	}
	
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	
	$.fn.kode_owl_carousel = function(){
		if(typeof($.fn.owlCarousel) == 'function'){
			$(this).each(function(){
				var option;
				var data_small;
				var data_margin
				if($(this).attr('data-slide')){
					option = $(this).attr('data-slide');
				}
				if($(this).attr('data-small-slide')){
					data_small = $(this).attr('data-small-slide');
				}
				if($(this).attr('data-margin')){
					data_margin = $(this).attr('data-margin');
				}
				var owl_attr = {
					autoPlay: 3000, //Set AutoPlay to 3 seconds
					margin:25,
					
					responsive:{
						0:{
							items:1
						},
						600:{
							items:data_small
						},
						1000:{
							items:option
						}
					}
				};
				
				$(this).owlCarousel(owl_attr);	
			});	
		}
	}
	
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$.fn.kode_owl_carousel_no_space = function(){
		if(typeof($.fn.owlCarousel) == 'function'){
			$(this).each(function(){
				var option;
				var data_small;
				var data_margin;
				if($(this).attr('data-slide')){
					option = $(this).attr('data-slide');
				}
				if($(this).attr('data-small-slide')){
					data_small = $(this).attr('data-small-slide');
				}
				if($(this).attr('data-margin')){
					data_margin = $(this).attr('data-margin');
				}
				var nice_attr = {
					autoPlay: 3000, //Set AutoPlay to 3 seconds
					responsive:{
						0:{
							items:1
						},
						600:{
							items:data_small
						},
						1000:{
							items:option
						}
					}
				};				
				$(this).owlCarousel(nice_attr);	
			});	
		}
	}
	
	/* ---------------------------------------------------------------------- */
	/*	Nice Scroll
	/* ---------------------------------------------------------------------- */
	$.fn.kode_nicescroll = function(){
		if(typeof($.fn.niceScroll) == 'function'){
			$(this).each(function(){					
				var nice_attr = {
					cursorwidth:'12px',	
					cursorcolor:'red',
					cursoropacitymax:0.7,
					boxzoom:true,
					touchbehavior:false,
					cursorborder :'1px solid #195D10',
					zindex :999999
				};
				// Nice Scroll Color
				if($('.body-wrapper').attr('data-color')){
					nice_attr.cursorcolor = $('.body-wrapper').attr('data-color');
				}
				// Nice Scroll Color
				if($('.body-wrapper').attr('data-color')){
					nice_attr.cursorborderradius = $('.body-wrapper').attr('data-radius');
				}
				
				// Nice Scroll Color
				// if($('.body-wrapper').attr('data-touch')){
					// nice_attr.touchbehavior = $('.body-wrapper').attr('data-touch');
				// }
				// Nice Scroll Color
				if($('.body-wrapper').attr('data-width')){
					nice_attr.cursorwidth = $('.body-wrapper').attr('data-width');
				}
				$('.nicescroll').niceScroll(nice_attr);	
			});	
		}
	}
	
	
	// runs flex slider function
	$.fn.kode_flexslider = function(){
		if(typeof($.fn.flexslider) == 'function'){
			$(this).each(function(){
				var flex_attr = {
					animation: 'fade',
					animationLoop: true,
					prevText: '<i class="fa fa-angle-left" ></i>', 
					nextText: '<i class="fa fa-angle-right" ></i>',
					useCSS: false
				};
				
				// slide duration
				if( $(this).attr('data-pausetime') ){
					flex_attr.slideshowSpeed = parseInt($(this).attr('data-pausetime'));
				}
				if( $(this).attr('data-slidespeed') ){
					flex_attr.animationSpeed = parseInt($(this).attr('data-slidespeed'));
				}

				// set the attribute for carousel type
				if( $(this).attr('data-type') == 'carousel' ){
					flex_attr.move = 1;
					flex_attr.animation = 'slide';
					
					if( $(this).closest('.kode-item-no-space').length > 0 ){
						flex_attr.itemWidth = $(this).width() / parseInt($(this).attr('data-columns'));
						flex_attr.itemMargin = 0;							
					}else{
						flex_attr.itemWidth = (($(this).width() + 30) / parseInt($(this).attr('data-columns'))) - 30;
						flex_attr.itemMargin = 30;	
					}		
					
					// if( $(this).attr('data-columns') == "1" ){ flex_attr.smoothHeight = true; }
				}else{
					if( $(this).attr('data-effect') ){
						flex_attr.animation = $(this).attr('data-effect');
					}
				}
				if( $(this).attr('data-columns') ){
					flex_attr.minItems = parseInt($(this).attr('data-columns'));
					flex_attr.maxItems = parseInt($(this).attr('data-columns'));	
				}				
				
				// set the navigation to different area
				if( $(this).attr('data-nav-container') ){
					var flex_parent = $(this).parents('.' + $(this).attr('data-nav-container')).prev('.kode-nav-container');
					
					if( flex_parent.find('.kode-flex-prev').length > 0 || flex_parent.find('.kode-flex-next').length > 0 ){
						flex_attr.controlNav = false;
						flex_attr.directionNav = false;
						flex_attr.start = function(slider){
							flex_parent.find('.kode-flex-next').click(function(){
								slider.flexAnimate(slider.getTarget("next"), true);
							});
							flex_parent.find('.kode-flex-prev').click(function(){
								slider.flexAnimate(slider.getTarget("prev"), true);
							});
							
							kode_set_item_outer_nav();
							$(window).resize(function(){ kode_set_item_outer_nav(); });
						}
					}else{
						flex_attr.controlNav = false;
						flex_attr.controlsContainer = flex_parent.find('.nav-container');	
					}
					
				}

				$(this).flexslider(flex_attr);	
			});	
		}
	}
	
	// runs nivo slider function
	$.fn.kode_nivoslider = function(){
		if(typeof($.fn.nivoSlider) == 'function'){
			$(this).each(function(){
				var nivo_attr = {};
				
				if( $(this).attr('data-pausetime') ){
					nivo_attr.pauseTime = parseInt($(this).attr('data-pausetime'));
				}
				if( $(this).attr('data-slidespeed') ){
					nivo_attr.animSpeed = parseInt($(this).attr('data-slidespeed'));
				}
				if( $(this).attr('data-effect') ){
					nivo_attr.effect = $(this).attr('data-effect');
				}

				$(this).nivoSlider(nivo_attr);	
			});	
		}
	}	
	
	
	$(document).ready(function(){
	
		/*
	  ==============================================================
		   Progress Bar Script Start
	  ============================================================== */  
	  $('.progressbar').each(function(){
			var t = $(this),
				dataperc = t.attr('data-perc'),
				barperc = Math.round(dataperc*5.56);
			t.find('.bar').animate({width:barperc}, dataperc*25);
			t.find('.label').append('<div class="perc"></div>');
			
			function perc() {
				var length = t.find('.bar').css('width'),
					perc = Math.round(parseInt(length)/5.56),
					labelpos = (parseInt(length)-2);
				t.find('.label').css('left', labelpos);
				t.find('.perc').text(perc+'%');
			}
			perc();
			setInterval(perc, 0); 
		});
	
		// top woocommerce button
		$('.kode-top-woocommerce-wrapper').hover(function(){
			$(this).children('.kode-top-woocommerce').fadeIn(200);
		}, function(){
			$(this).children('.kode-top-woocommerce').fadeOut(200);
		});
	
		
		// script for parallax background
		$('.kode-parallax-wrapper').each(function(){
			if( $(this).hasClass('kode-background-image') ){
				var parallax_section = $(this);
				var parallax_speed = parseFloat(parallax_section.attr('data-bgspeed'));
				if( parallax_speed == 0 || kode_touch_device ) return;
				if( parallax_speed == -1 ){
					parallax_section.css('background-attachment', 'fixed');
					parallax_section.css('background-position', 'center center');
					return;
				}
					
				$(window).scroll(function(){
					// if in area of interest
					if( ( $(window).scrollTop() + $(window).height() > parallax_section.offset().top ) &&
						( $(window).scrollTop() < parallax_section.offset().top + parallax_section.outerHeight() ) ){
						
						var scroll_pos = 0;
						if( $(window).height() > parallax_section.offset().top ){
							scroll_pos = $(window).scrollTop();
						}else{
							scroll_pos = $(window).scrollTop() + $(window).height() - parallax_section.offset().top;
						}
						parallax_section.css('background-position', 'center ' + (-scroll_pos * parallax_speed) + 'px');
					}
				});			
			}else if( $(this).hasClass('kode-background-video') ){
				if(typeof($.fn.mb_YTPlayer) == 'function'){
					$(this).children('.kode-bg-player').mb_YTPlayer();
				}
			}else{
				return;
			}
		});
		
		
		
		// responsive menu
		if(typeof($.fn.dlmenu) == 'function'){
			$('#kode-responsive-navigation').each(function(){
				$(this).find('.dl-submenu').each(function(){
					if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
						var parent_nav = $('<li class="menu-item kode-parent-menu"></li>');
						parent_nav.append($(this).siblings('a').clone());
						
						$(this).prepend(parent_nav);
					}
				});
				$(this).dlmenu();
			});
		}	
		
		// gallery thumbnail type
		$('.kode-gallery-thumbnail').each(function(){
			var thumbnail_container = $(this).children('.kode-gallery-thumbnail-container');
		
			$(this).find('.gallery-item').click(function(){
				var selected_slide = thumbnail_container.children('[data-id="' + $(this).attr('data-id') + '"]');
				if(selected_slide.css('display') == 'block') return false;
			
				// check the gallery height
				var image_width = selected_slide.children('img').attr('width');
				var image_ratio = selected_slide.children('img').attr('height') / image_width;
				var temp_height = image_ratio * Math.min(thumbnail_container.width(), image_width);
				
				thumbnail_container.animate({'height': temp_height});
				selected_slide.fadeIn().siblings().hide();
				return false;
			});		

			$(window).resize(function(){ thumbnail_container.css('height', 'auto') });
		});

		
		// image shortcode 
		$('.kode-image-link-shortcode').hover(function(){
			$(this).find('.kode-image-link-overlay').animate({opacity: 0.8}, 150);
			$(this).find('.kode-image-link-icon').animate({opacity: 1}, 150);
		}, function(){
			$(this).find('.kode-image-link-overlay').animate({opacity: 0}, 150);
			$(this).find('.kode-image-link-icon').animate({opacity: 0}, 150);
		});	
		
		

		// runs nivoslider when available
		$('.nivoSlider').kode_nivoslider();		
		
		// runs flexslider when available
		$('.flexslider').kode_flexslider();
		
		// runs bxslider when available
		$('.bxslider').kode_bxslider();
		
		/*  Carousel */
		$('.owl-carousel').kode_owl_carousel();
		
		$('.owl-no-space').kode_owl_carousel_no_space();
		
		// runs CountDown when available
		$('.countdown').kode_countdown();
		
		$('.downcount').kode_countdown_timmer();
		
		$('.event_countdown').kode_countdown_timmer();
		
		// runs niceScroll when available
		$('.nicescroll').kode_nicescroll();
		
		
	});
	
	$(window).load(function(){

		
	});
	
	
	/* ---------------------------------------------------------------------- */
	/*	Search Function
	/* ---------------------------------------------------------------------- */
	jQuery('.searchform').hide();
	jQuery("a.search-btn").click(function(){
		jQuery('.searchform').hide();
		jQuery(".searchform").fadeToggle();
	});
	jQuery('html').click(function() {
		jQuery(".searchform").fadeOut();
	});
	jQuery('.kd-search').click(function(event){
		event.stopPropagation();
	});
	
	/* ---------------------------------------------------------------------- */
	/*	Scroll to Top
	/* ---------------------------------------------------------------------- */
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#kode-topbtn').fadeIn();
		} else {
			jQuery('#kode-topbtn').fadeOut();
		}
	});
	
	/* ---------------------------------------------------------------------- */
	/*	Click to Trigger an Event
	/* ---------------------------------------------------------------------- */
	jQuery('#kode-topbtn').click(function(){
		jQuery('html, body').animate({scrollTop : 0},1200);
		return false;
	});

});