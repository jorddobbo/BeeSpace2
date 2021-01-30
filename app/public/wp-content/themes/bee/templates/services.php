<?php

# Template Name: Services

get_header();

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

	<div id="design-modal" class="modal-window">
	    <a href="#" title="Close" class="modal-close">Close</a>
	    <div class="modal__inner">
	    	<h3>Download PDF</h3>
		    <?php echo do_shortcode('[contact-form-7 id="665" title="Design Guide"]'); ?>
		</div>
	</div>

	<div id="consultancy-modal" class="modal-window">
	    <a href="#" title="Close" class="modal-close">Close</a>
	    <div class="modal__inner">
	    	<h3>Download PDF</h3>
		    <?php echo do_shortcode('[contact-form-7 id="666" title="Consultancy"]'); ?>
		</div>
	</div>

	<div class="page-hero">
		<div class="page-hero__right" style="background-image: url('<?= $featured_img_url ?>');">
		</div>
		<div class="page__container container">
			<div class="page-hero__inner">
				<div class="page-hero__left">
					<div class="page-hero__left-inner">
						<h1 class="page-hero__title title title-split">
							<div class="title-split__mask">
								<span class="title-split__line">Work</span>
							</div>
							<div class="title-split__mask">
								<span class="title-split__line title__highlight">With Me</span>
							</div>
						</h1>
						<p class="page-hero__paragraph fadeUp"><?php echo the_field('intro_copy'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<section class="pattern pattern--triangle"></section>
	</div>

	<?php $block_one = get_field('block_one'); ?>

	<section class="about-jade">
		<div class="about-jade__container container">
			<div class="about-jade__row">
				<div class="about-jade__half reveal"><img src="<?php echo $block_one['image'] ?>" alt="Intro"/></div>
				<div class="about-jade__half">
					<div class="about-jade__half-inner">
						<h2 class="about-jade__title title-split"><?php echo $block_one['heading'] ?></h2>
						<p class="about-jade__paragraph"><?php echo $block_one['copy'] ?></p>
						<a class="button" href="<?php echo $block_one['button_link'] ?>"><?php echo $block_one['button_text'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		$block_two = get_field('block_two');
		$testimonials = $block_one['testimonials'];
	?>

	<section class="about-jade">
		<div class="about-jade__container container">
			<div class="about-jade__row about-jade__row--reverse">
				<div class="about-jade__half">
					<div class="about-jade__half-inner">
						<h2 class="about-jade__title title-split"><?php echo $block_two['heading'] ?></h2>
						<p class="about-jade__paragraph"><?php echo $block_two['copy'] ?></p>
						<a class="button" href="<?php echo $block_two['button_link'] ?>"><?php echo $block_two['button_text'] ?></a>
					</div>
				</div>
				<div class="about-jade__half reveal"><img src="<?php echo $block_two['image'] ?>" alt="Intro"/></div>
			</div>
		</div>
	</section>

	<?php if( have_rows('block_two') ): while ( have_rows('block_two') ) : the_row(); ?>

		<section class="home-testimonials services-testimonials">
			<div class="container home-testimonials__container">
				<div class="home-testimonials__icon fadeUp">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_quote.svg" />
				</div>

				<h6 class="services-testimonials__subheading">Here’s what they have to say</h6>

				<div class="home-testimonials__inner">


				    <?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row(); ?>   

				    <div class="home-testimonials__item">
						<h3 class="home-testimonials__title"><?php echo get_sub_field('heading'); ?></h3>
						<p class="home-testimonials__paragraph"><?php echo get_sub_field('copy'); ?></p>
						<div class="home-testimonials__author fadeUp">
							<?php if (get_sub_field('author_image')): ?>
								<img src="<?php echo get_sub_field('author_image'); ?>" />
							<?php endif ?>
							<div class="home-testimonials__author-right">
								<strong><?php echo get_sub_field('author_name'); ?> </strong>
								<?php echo get_sub_field('author_company'); ?>
							</div>
						</div>
					</div>  

				    <?php endwhile; endif; ?>

				   </div>

				   <div class="home-testimonials__arrows">
				<div class="home-testimonials__prev home-testimonials__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-left.svg" />
				</div>
				<div class="home-testimonials__next home-testimonials__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-right.svg" />
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; endif; ?>

	<!-- <section class="home-testimonials half-pattern">
		<div class="half-pattern__inner reveal reveal--dark"></div>
		<div class="container home-testimonials__container">
			<div class="home-testimonials__icon fadeUp">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_quote.svg" />
			</div>
			<div class="home-testimonials__inner">
				<div class="home-testimonials__item">
					<h3 class="home-testimonials__title">We've had the pleasure of working with Jade over the past 12 months</h3>
					<p class="home-testimonials__paragraph">and seeing her vision come to life on numerous projects. As well as a fantastic creative flair, she has a real passion for her work as well, ensuring her projects are delivered in the most professional way. Not only that, but she's a genuine nice person, which makes working with her fun as well as rewarding."</p>
					<div class="home-testimonials__author fadeUp">
						<img src="<?= get_template_directory_uri(); ?>/assets/img/author_1.png" />
						<div class="home-testimonials__author-right">
							<strong>Mike Stenhouse </strong>
							Inside Property Investing
						</div>
					</div>
				</div>
				<div class="home-testimonials__item">
					<h3 class="home-testimonials__title title-split">We work with Jade on a regular basis, Her design ideas are second to none.</h3>
					<p class="home-testimonials__paragraph fadeUp">She is professional yet friendly, nothing is too much trouble and we've built up a great relationship over the past few months. Simply looking at her Instagram page will give you design inspiration for your next project.“</p>
					<div class="home-testimonials__author fadeUp">
						<img src="<?= get_template_directory_uri(); ?>/assets/img/author_2.png" />
						<div class="home-testimonials__author-right">
							<strong>Lisa Wild </strong>
							Landlord Furniture
						</div>
					</div>
				</div>
				<div class="home-testimonials__item">
					<h3 class="home-testimonials__title title-split">Beespace turned a very tired, drab office block into a beautiful counselling space</h3>
					<p class="home-testimonials__paragraph fadeUp">My clients say things like "I feel better just walking in here". Jade used natural materials and calming colours, resulting in a very pleasant place to do counselling work. Thank you Jade for your creativity and commitment to the vision of the Palmer House Wellbeing Centre (and for delivering on time). I would highly recommend working with Beespace if you are looking to create something different that will stand out!"</p>
					<div class="home-testimonials__author fadeUp">
						<img src="<?= get_template_directory_uri(); ?>/assets/img/author_3.png" />
						<div class="home-testimonials__author-right">
							<strong>Julia Palmer</strong>
							Palmer House 
						</div>
					</div>
				</div>
			</div>
			<div class="home-testimonials__arrows">
				<div class="home-testimonials__prev home-testimonials__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-left.svg" />
				</div>
				<div class="home-testimonials__next home-testimonials__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-right.svg" />
				</div>
			</div>
		</div>
	</section> -->

	<?php $block_three = get_field('block_three'); ?>

	<section class="about-jade">
		<div class="about-jade__container container">
			<div class="about-jade__row about-jade__row--reverse">
				<div class="about-jade__half">
					<div class="about-jade__half-inner">
						<h2 class="about-jade__title title-split"><?php echo $block_three['heading'] ?></h2>
						<p class="about-jade__paragraph"><?php echo $block_three['copy'] ?></p>
						<a class="button" href="<?php echo $block_three['button_link'] ?>"><?php echo $block_three['button_text'] ?></a>
					</div>
				</div>
				<div class="about-jade__half reveal"><img src="<?php echo $block_three['image'] ?>" alt="Intro"/></div>
			</div>
		</div>
	</section>

	<?php $block_four = get_field('block_four'); ?>

	<section class="about-jade">
		<div class="about-jade__container container">
			<div class="about-jade__row">
				<div class="about-jade__half reveal"><img src="<?php echo $block_four['image'] ?>" alt="Intro"/></div>
				<div class="about-jade__half">
					<div class="about-jade__half-inner">
						<h2 class="about-jade__title title-split"><?php echo $block_four['heading'] ?></h2>
						<p class="about-jade__paragraph"><?php echo $block_four['copy'] ?></p>
						<a class="button" href="<?php echo $block_four['button_link'] ?>"><?php echo $block_four['button_text'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services-downloads">
		<div class="services-downloads__container container">
			<div class="services-downloads__column">
				<h3>Design Guide</h3>
				
				<a class="button fadeUp no-barba" href="#design-modal">Download Design Guide PDF</a>
			</div>

			<div class="services-downloads__column">
				<h3>1-2-1 Consultancy</h3>
				
				<a class="button fadeUp no-barba" href="#consultancy-modal">Download 1-2-1 Consultancy PDF</a>
			</div>
		</div>
	</section>

	<section class="services-projects">
		<div class="services-projects__container container">
			<div class="services-projects__left">
				<div class="services-projects__left-inner">
					<h1 class="services-projects__title title">
						<div class="title-split__mask">
							<span class="title-split__line">View our</span>
							<span class="title-split__line title__highlight">Projects</span>
						</div>
					</h1>
					<p class="services-projects__paragraph fadeUp">We’ve had the pleasure of working on some great projects. Some for ourselves, some for others with like-minded investors that share our values, and believe that being design-led and original is the way forward.</p>
					<a class="button fadeUp" href="/#projects">Our Work</a>
				</div>
			</div>
		</div>
		<div class="services-projects__right reveal reveal--dark" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/69wallbrook-69.jpg');">
		</div>
	</section>

	<section class="footer-chat">
		<div class="footer-chat__container container">
			<h2 class="footer-chat__title">
				<div class="title-split__mask">
					<span class="title-split__line"><a href="/contact">Want to chat? <img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-dark-right.svg"></a></span>
				</div>
			</h2>
		</div>
	</section>

<?php get_footer() ?>