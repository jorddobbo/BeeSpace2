		<section class="footer-instagram" id="instafeed"></section>

		<footer class="footer">
			<div class="container footer__container">
				<div class="footer__subscribe">
					<h4 class="footer__subscribe-title">STAY IN THE KNOW</h4>
					<p class="footer__subscribe-paragraph">Get the latest in all things Bee Space & property investment</p>
					<div class="footer__subscribe-form">
						<input type="email" class="footer__subscribe-input" placeholder="Enter your email address" />
						<button type="submit" class="button footer__subscribe-button">Join</button>
					</div>
				</div>
				<div class="footer__middle">
					<div class="footer__middle-item">
						<h6 class="footer__middle-subtitle">Get in touch</h6>
						<h4 class="footer__middle-title">07734883890</h4>
					</div>
					<div class="footer__middle-item">
						<h6 class="footer__middle-subtitle">Email us</h6>
						<h4 class="footer__middle-title">SEND AN EMAIL <img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow-right.svg" /></h4>
					</div>
					<div class="footer__middle-item footer__middle-social">
						<h6 class="footer__middle-subtitle">Get in touch</h6>
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/social_in.svg" /></a>
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/social_tw.svg" /></a>
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/social_fb.svg" /></a>
					</div>
				</div>
				<div class="footer__bottom">
					<div class="footer__bottom-left">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" /> © <?php echo date('Y'); ?> Bee Space. All rights reserved.
					</div>
					<div class="footer__bottom-right">
						<ul class="footer__bottom-menu">
							<li><a href="/">Home</a></li>
							<li><a href="/">About</a></li>
							<li><a href="/">Design</a></li>
							<li><a href="/">Portfolio</a></li>
							<li><a href="/">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<section class="pattern pattern--triangle"></section>
	</div>

	<div class="home-projects__overlay"></div>

<?php wp_footer(); ?>

</body>

<script type="text/javascript"
  src="js/jquery.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script>

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

</script>

<script type="text/javascript" src="js/insta.js"></script>

<script>

$(document).ready(function () {
	var userFeed = new Instafeed({
		get: 'user',
		userId: '8987997106',
		clientId: '924f677fa3854436947ab4372ffa688d',
		accessToken: '8987997106.924f677.8555ecbd52584f41b9b22ec1a16dafb9',
		resolution: 'standard_resolution',
		template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
		sortBy: 'most-recent',
		limit: 5,
		links: false
	});
	userFeed.run();
});

</script>

<script type="text/javascript" src="js/anime.min.js"></script>

<script>

$(document).ready(function () {

	$('.home-projects__item').on('click', function() {
		var $project = $(this),
			$projectInner = $project.find('.home-projects__item-inner')
			$projectTitle = $projectInner.find('.home-projects__item-title'),
			$projectClone = $projectInner.clone(true, true),
			height = $projectInner.outerHeight(),
			$projectOverlay = $('.home-projects__overlay');

		$([document.documentElement]).animate({ scrollTop: $(this).offset().top }, 500);

		window.history.replaceState('page2', 'Title', '/project.html');

		$projectClone
			.insertBefore('.page-content')
			.addClass('clone')
			.css({
				position: 'fixed',
		 	    top: 0,
		 	    left: $projectInner.offset().left,
		 	    width: $projectInner.outerWidth(),
		 	    height: height
			})

		$projectClone
			.animate({
				opacity: 1,
			}, 500);

		$projectClone.find('.home-projects__item-title').fadeOut(500);

		$projectClone.delay(500).queue(function(){
			$(this).animate({
				'left': 0,
				'width': '100%'
			}, 500).dequeue();

			$projectClone.find('.home-projects__item-image').addClass('full');

			$('.home-projects__overlay').addClass('visible').dequeue();
			$([document.documentElement]).delay(500).queue(function(){
				$(this).animate({
					scrollTop: 0
				}, 0).dequeue();
				$projectClone.css({ position: 'relative' });
				$('.page-content').load("project.html .project-body");
				$('.home-projects__overlay').removeClass('visible').dequeue();
			});
		});

		console.log($projectClone.find('.home-projects__item-image'));

	    	//$('.home-projects__overlay').removeClass('visible').hide();
	    	//$projectImage.css({ position: 'relative' });
			//$('.page-content').load("project.html .project-body");

	});
});

</script>

</html>