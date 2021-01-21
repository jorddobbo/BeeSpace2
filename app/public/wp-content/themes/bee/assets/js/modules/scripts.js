export default function() {

	jQuery(document).ready(function($) {

		var FadeTransition = Barba.BaseTransition.extend({

		  start: function() {
		    /**
		     * This function is automatically called as soon the Transition starts
		     * this.newContainerLoading is a Promise for the loading of the new container
		     * (Barba.js also comes with an handy Promise polyfill!)
		     */

		    // As soon the loading is finished and the old page is faded out, let's fade the new page
		    Promise
		      .all([this.newContainerLoading, this.fadeOut()])
		      .then(this.fadeIn.bind(this));
		  },

		  fadeOut: function() {
		    /**
		     * this.oldContainer is the HTMLElement of the old Container
		     */

		     $('.barba-overlay').css({
		     	leftt: 0,
		    	right: 'auto',
		   		width: '100%'
		   	});

		    return Promise.resolve(true);
		  },

		  fadeIn: function() {
		    /**
		      * this.newContainer is the HTMLElement of the new Container
		      * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
		      * Please note, newContainer is available just after newContainerLoading is resolved!
		      */

		    setTimeout(function () {
		    	$('.barba-overlay').css({
		    		right: 0,
		    		left: 'auto',
			   		width: 0
			   	});

			   	$(document).scrollTop(0);

			    $(this.oldContainer).hide();
			    $(this.newContainer).show();

		    	this.done();
		    }.bind(this), 1000);
		  }
		});

		/**
		 * Next step, you have to tell Barba to use the new Transition
		 */

		Barba.Pjax.getTransition = function() {
		  /**
		   * Here you can use your own logic!
		   * For example you can use different Transition based on the current page or link...
		   */

		  return FadeTransition;
		};

		Barba.Pjax.start();
		Barba.Prefetch.init();

		setTimeout(function(){
			$(window).trigger('resize');
		}, 200);

	});

	Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container, rawHTML) {
		window.dispatchEvent(new Event('resize'));
	});

	Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container, rawHTML) {

		if ($(".instagram-media")[0]){
		    window.instgrm.Embeds.process();
		};

		$('a').on('click', function (event) {
		    if(this.pathname === window.location.pathname){
		        console.log('same link');
		    } else {
		    	console.log('different link');
		    }
		});

		$('.fadeUp').on('inview', function(event, isInView) {
			var $el = $(this);
				if (typeof $el.data('delay') !== 'undefined') {
					var $delay = $el.data('delay');
				} else {
					var $delay = 0;
				}

			if (isInView) {
				setTimeout(function() {
					$el.addClass('inview');
				}, $delay);
			} else {
				// $el.removeClass('inview');
			}
		});

		$('.reveal').on('inview', function(event, isInView) {
			var $el = $(this);
				if (typeof $el.data('delay') !== 'undefined') {
					var $delay = $el.data('delay');
				} else {
					var $delay = 0;
				}

			if (isInView) {
				setTimeout(function() {
					$el.addClass('inview');
				}, $delay);
			} else {
				// $el.removeClass('inview');
			}
		});

		$('.fadeIn').on('inview', function(event, isInView) {
			var $el = $(this);
				if (typeof $el.data('delay') !== 'undefined') {
					var $delay = $el.data('delay');
				} else {
					var $delay = 0;
				}

			if (isInView) {
				setTimeout(function() {
					$el.addClass('inview');
				}, $delay);
			} else {
				// $el.removeClass('inview');
			}
		});

		$('.title-split__line').on('inview', function(event, isInView) {
			var $el = $(this);
				if (typeof $el.closest('.title-split').data('delay') !== 'undefined') {
					var $delay = $el.closest('.title-split').data('delay');
				} else {
					var $delay = 0;
				}

			if (isInView) {
				setTimeout(function() {
					$el.addClass('inview');
				}, $delay);
			} else {
				// $el.removeClass('inview');
			}
		});

		$('header').on('click', '.header__toggle:not(.show)', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.header__toggle').addClass('show');
			header.find('.menu-main-container').addClass('show');
		});

		$('header').on('click', '.header__toggle.show', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.header__toggle').removeClass('show');
			header.find('.menu-main-container').removeClass('show');
		});

		$('header').on('click', '.menu-item', function (event) {
			var header = $('header');

			setTimeout(function () {
				header.find('.menu-main-container').removeClass('show');
		    	header.find('.header__toggle').removeClass('show');
			}, 700);
		});

		// $('.home-projects__item').on('click', function() {
		// 	var $project = $(this),
		// 		$projectInner = $project.find('.home-projects__item-inner')
		// 		$projectTitle = $projectInner.find('.home-projects__item-title'),
		// 		$projectClone = $projectInner.clone(true, true),
		// 		height = $projectInner.outerHeight(),
		// 		$projectOverlay = $('.home-projects__overlay');

		// 	$([document.documentElement]).animate({ scrollTop: $(this).offset().top }, 500);

		// 	window.history.replaceState('page2', 'Title', '/project.html');

		// 	$projectClone
		// 		.insertBefore('.page-content')
		// 		.addClass('clone')
		// 		.css({
		// 			position: 'fixed',
		// 	 	    top: 0,
		// 	 	    left: $projectInner.offset().left,
		// 	 	    width: $projectInner.outerWidth(),
		// 	 	    height: height
		// 		})

		// 	$projectClone
		// 		.animate({
		// 			opacity: 1,
		// 		}, 500);

		// 	$projectClone.find('.home-projects__item-title').fadeOut(500);

		// 	$projectClone.delay(500).queue(function(){
		// 		$(this).animate({
		// 			'left': 0,
		// 			'width': '100%'
		// 		}, 500).dequeue();

		// 		$projectClone.find('.home-projects__item-image').addClass('full');

		// 		$('.home-projects__overlay').addClass('visible').dequeue();
		// 		$([document.documentElement]).delay(500).queue(function(){
		// 			$(this).animate({
		// 				scrollTop: 0
		// 			}, 0).dequeue();
		// 			$projectClone.css({ position: 'relative' });
		// 			$('.page-content').load("project.html .project-body");
		// 			$('.home-projects__overlay').removeClass('visible').dequeue();
		// 		});
		// 	});

		// 	console.log($projectClone.find('.home-projects__item-image'));

		//     	//$('.home-projects__overlay').removeClass('visible').hide();
		//     	//$projectImage.css({ position: 'relative' });
		// 		//$('.page-content').load("project.html .project-body");

		// });

		(function() {

			var $homeIndication = $('.home-gallery__indication'),
				$homeGallery = $('.home-gallery__slider'),
				$blogGallery = $('.wp-block-gallery');

			$homeGallery.on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide){
			    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
			    var i = (currentSlide ? currentSlide : 0) + 1;
			    $homeIndication.text(('0' + i).slice(-2) + ' / ' + ('0' + slick.slideCount).slice(-2));
			});

			$homeGallery.slick({
				infinite: true,
		        centerMode: true,
		        adaptiveHeight: true,
		        variableWidth: true,
		        accessibility: false,
		        prevArrow: $('.home-gallery__prev'),
		        nextArrow: $('.home-gallery__next'),
		        responsive: [
				    {
				      breakpoint: 1200,
				      settings: {
				      	centerMode: false,
				      	variableWidth: false,
				      }
				    },
				]
			});

			$blogGallery.slick({
				infinite: true,
		        accessibility: false,
		        adaptiveHeight: true,
		        dots: true,
		        responsive: [
				    {
				      breakpoint: 1200,
				      settings: {
				      	centerMode: false,
				      	variableWidth: false,
				      }
				    },
				]
			});

			var $testimonials = $('.home-testimonials__inner');

			$testimonials.slick({
				adaptiveHeight: true,
				accessibility: false,
				prevArrow: $('.home-testimonials__prev'),
		        nextArrow: $('.home-testimonials__next'),
			});

		})();

		function serviceIndicator() {

			var $bar = $('.services-breakdown__indicator'),
				$line = $bar.find('div');

			// $line.height(windowMiddle);
			// console.log($line);

			if($bar.length) {
				$(window).on( 'scroll', function(){
					var windowHeight = $(window).height(),
						windowMiddle = windowHeight * .5,
						scrollTop     = $(window).scrollTop(),
						elementOffset = $bar.offset().top,
						distance      = (elementOffset - scrollTop),
						scrollMiddle = scrollTop + windowMiddle,
						hello = scrollMiddle - elementOffset,
						height = distance - windowMiddle;

					$line.height(hello);
				});
			}

		} serviceIndicator(); 
		
		sbi_init(function(i,t,a,b) {
		    sbi_cache_all(i,t,a,b);
		});

		$(".services-render__swipe").twentytwenty();
    });

}