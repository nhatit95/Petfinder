jQuery( document ).ready(function($) {
	"use strict";	
	/* ---------------------------------------------------------------------- */
	/*	PrettyPhoto Modal Box Script
	/* ---------------------------------------------------------------------- */
	
	if($('.gallery-item').length){
		$(".gallery-item:first a[data-gal^='prettyphoto']").prettyPhoto({
			animation_speed: 'normal',
			slideshow: 10000,
			autoplay_slideshow: true
		});
		$(".gallery-item:gt(0) a[data-gal^='prettyphoto']").prettyPhoto({
			animation_speed: 'fast',
			slideshow: 10000,
			hideflash: true
		});
		
	}
	
	if($('.kode-gallery').length){
		$(".kode-gallery:first a[data-gal^='prettyphoto']").prettyPhoto({
			animation_speed: 'normal',
			slideshow: 10000,
			autoplay_slideshow: true
		});
		$(".kode-gallery:gt(0) a[data-gal^='prettyphoto']").prettyPhoto({
			animation_speed: 'fast',
			slideshow: 10000,
			hideflash: true
		});
		
	}
	
		$("a[data-rel^='prettyphoto']").prettyPhoto({
			animation_speed: 'fast',
			slideshow: 10000,
			hideflash: true
		});
	
});	
	