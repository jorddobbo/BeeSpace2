<?php

# Template Name: About

get_header();

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

	<div class="page-hero">
		<div class="page-hero__right" style="background-image: url('<?= $featured_img_url ?>');">
		</div>
		<div class="page__container container">
			<div class="page-hero__inner">
				<div class="page-hero__left">
					<div class="page-hero__left-inner">
						<h1 class="page-hero__title title title-split">
							<div class="title-split__mask">
								<span class="title-split__line">About</span>
							</div>
							<div class="title-split__mask">
								<span class="title-split__line title__highlight">BeeSpace</span>
							</div>
						</h1>
						<p class="page-hero__paragraph fadeUp">Beespace is a design-led creative property company. We specialise in creating co-living and co-working spaces with a difference. We design and develop creative concepts which are unique in design and memorable in experience.</p>
					</div>
				</div>
			</div>
		</div>
		<section class="pattern pattern--triangle"></section>
	</div>

	<section class="about-jade">
		<div class="about-jade__container container">
			<div class="about-jade__row">
				<div class="about-jade__half reveal"><img src="<?= get_template_directory_uri(); ?>/assets/img/img_jade.jpg" alt="Intro"/></div>
				<div class="about-jade__half">
					<div class="about-jade__half-inner">
						<h2 class="about-jade__title title-split">Jade<br>Bailey</h2>
						<div class="about-jade__social fadeUp">
							<a target="_blank" href="https://www.instagram.com/____beespace/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_ig-dark.svg" /></a>
							<a target="_blank" href="https://www.pinterest.co.uk/jade5115/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_pi-dark.svg" /></a>
							<a target="_blank" href="https://www.facebook.com/beespaceproperty/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_fb-dark.svg" /></a>
							<a target="_blank" href="https://www.linkedin.com/in/jade-bailey-0b108584/?originalSubdomain=uk"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_in-dark.svg" /></a>
						</div>
						<p class="about-jade__paragraph">Jade Bailey is the Creative Director and Founder of Beespace. As a property investor and developer herself, she wants to challenge the everyday perception of what a co-living house could look and feel like by branding the houses she owns.
						<br><br>
						Before becoming a mother Jade's background was in retail store design and display. Jade is experienced in many areas of property investing including; co-living (HMO), buy-to-sell, serviced accommodation, co-working, and buy-to-let.</p>
						<a class="button" href="/blog">Hear her story</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home-testimonials half-pattern">
		<div class="half-pattern__inner reveal reveal--dark"></div>
		<div class="container home-testimonials__container">
			<div class="home-testimonials__icon fadeUp">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_quote.svg" />
			</div>
			<div class="home-testimonials__inner">
				<div class="home-testimonials__item">
					<h3 class="home-testimonials__title title-split">
						<div class="title-split__mask">
							<span class="title-split__line">
								For me the experience of the house should start out on the street.
							</span>
						</div>
					</h3>
					<p class="home-testimonials__paragraph fadeUp">Most investors don’t see the importance of it, but first impressions are everything. I’m incredibly passionate about design, it needs to have an impact on you and create a memory. I like to create aspirational places for people to live in, work in, or even both at the same time. 
					<br><br>
					The difference between a creative concept and just 'items in a room', is when the small details connect to the overall look within the space so that everything looks and feels cohesive, and ultimately creates a unique experience. This is how you 'Brand Your Space'.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-chat">
		<div class="footer-chat__container container">
			<h2 class="footer-chat__title">
				<div class="title-split__mask">
					<span class="title-split__line"><a href="/contact">Want to chat? <img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-dark-right.svg"></a></span>
			</h2>
		</div>
	</section>

<?php get_footer() ?>