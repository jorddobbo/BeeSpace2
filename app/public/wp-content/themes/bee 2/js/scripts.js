(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		jQuery(document).ready(function($){
			var $homeIndication = $('.home-gallery__indication'),
				$homeGallery = $('.home-gallery__slider');

			$homeGallery.on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide){
			    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
			    var i = (currentSlide ? currentSlide : 0) + 1;
			    $homeIndication.text(('0' + i).slice(-2) + ' / ' + ('0' + slick.slideCount).slice(-2));
			});

			$homeGallery.slick({
				infinite: true,
		        centerMode: true,
		        variableWidth: true,
		        prevArrow: $('.home-gallery__prev'),
		        nextArrow: $('.home-gallery__next'),
			});

			var $testimonials = $('.home-testimonials__inner');

			$testimonials.slick({
				fade: true,
				prevArrow: $('.home-testimonials__prev'),
		        nextArrow: $('.home-testimonials__next'),
			});
		});
		
	});
	
})(jQuery, this);
