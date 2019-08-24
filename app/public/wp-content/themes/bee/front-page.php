<?php 

get_header();

$frontpage_id = get_option( 'page_on_front' );

?>

<div class="page-content">

	<section class="home-hero half-pattern">
		<div class="half-pattern__inner"></div>
		<div class="container home-hero__container">
			<div class="home-hero__inner">
				<div class="home-hero__content">
					<h1 class="home-hero__title title title-split">
						<div class="title-split__mask">
							<span class="title-split__line">Be <br>Original</span>
						</div>
						<div class="title-split__mask">
							<span class="title-split__line title__highlight">Think <br>Differently</span>
						</div>
					</h1>
				</div>
				<div class="home-hero__indication fadeUp">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" />
				</div>
			</div>
		</div>
	</section>

	<section class="home-intro">
		<div class="container home-intro__container">
			<div class="home-intro__inner">
				<div class="home-intro__row">
					<div class="home-intro__half">
						<div class="home-intro__half-inner">
							<h1 class="home-intro__title title-split">
								<div class="title-split__mask">
									<span class="title-split__line">Brand</span>
								</div>
								<div class="title-split__mask">
									<span class="title-split__line">Your Space</span>
								</div>
							</h1>
							<p class="home-intro__paragraph fadeUp">Beespace is a design-led creative property company. We specialise in creating co-living and co-working spaces with a difference. We design and develop creative concepts which are unique in design and memorable in experience.</p>
							<div class="home-intro__buttons fadeUp">
								<a href="#projects" class="button home-intro__button">Our work</a>
								<a href="/about" class="button home-intro__button button--outline">Learn more</a>
							</div>
						</div>
					</div>
					<div class="home-intro__half reveal">
						<img src="<?= get_template_directory_uri(); ?>/assets/img/intro_1.jpg" alt="Intro"/>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="projects" class="home-projects">
		<div class="container home-projects__container">
			<div class="home-projects__top">
				<h2 class="home-projects__title title-split">
					<div class="title-split__mask">
						<span class="title-split__line">Our Projects</span>
					</div>
				</h2>
				<!-- <a href="/" class="button home-projects__button">View all projects</a> -->
			</div>
			<div class="home-projects__list">

				<?php echo do_shortcode('[projects]'); ?>

			</div>
		</div>
	</section>

	<section class="pattern pattern--triangle"></section>

	<?php

	$wp_query = new WP_Query( 'posts_per_page=3' );
	$first = ' first';

	if ( $wp_query->have_posts() ) : ?>

	<section class="home-blog">
		<div class="container home-blog__container">
			<div class="home-blog__top">
				<h2 class="home-blog__title title-split">
					<div class="title-split__mask">
						<span class="title-split__line">The Hive</span>
					</div>
				</h2>
				<a href="/blog" class="button home-blog__button">View all posts</a>
			</div>
			<div class="home-blog__list">

		    <?php while ( $wp_query->have_posts() ) : 
		        $wp_query->the_post(); ?>

		        <?php $bg = wp_get_attachment_url( get_post_thumbnail_id()); ?>

		        <div class="home-blog__item">
		        	<a href="<?php echo the_permalink(); ?>">
						<div class="home-blog__item-image reveal" style="background-image: url('<?php echo $bg ?>')"></div>
					</a>
					<h6 class="home-blog__item-date fadeUp"><?php echo the_date(); ?></h6>
					<a href="<?php echo the_permalink(); ?>">
						<h4 class="home-blog__item-title fadeUp"><?php echo the_title(); ?></h4>
					</a>
					<a href="<?php echo the_permalink(); ?>" class="button button--outline home-blog__item-button fadeUp">Read more</a>
				</div>

		        <?php
		    endwhile; //* end of one post ?>


		   </div>
		</div>
	</section>

	<?php endif; //* end loop

	wp_reset_query();

	?>

	<section class="home-testimonials half-pattern">
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
	</section>

	<section class="home-gallery">
		<div class="container home-gallery__container">
			<h2 class="home-gallery__title title-split">
				<div class="title-split__mask">
					<span class="title-split__line">Love what we do?</span>
				</div>
			</h2>
			<p class="home-gallery__paragraph fadeUp">With bank interest rates at record lows, it makes sense to make your money work for you. By choosing to invest in a property project with us we can guarantee you so much more of a desirable return on your investment, and most importantly a working relationship you can trust. We actively work with joint-venture partners and investors that share our values and vision. Why not come and follow us across our social media platforms to see what projects we are working on daily.</p>
			<a href="/contact" class="button fadeUp">Let’s talk</a>
		</div>
		<div class="home-gallery__slider reveal">
			<div class="home-gallery__slide"><div><img src="<?= get_template_directory_uri(); ?>/assets/img/gallery/gallery_one.jpg" /></div></div>
			<div class="home-gallery__slide"><div><img src="<?= get_template_directory_uri(); ?>/assets/img/gallery/gallery_two.jpg" /></div></div>
			<div class="home-gallery__slide"><div><img src="<?= get_template_directory_uri(); ?>/assets/img/gallery/gallery_three.jpg" /></div></div>
		</div>
		<h6 class="home-gallery__indication"></h6>
		<div class="container home-gallery__container">
			<div class="home-gallery__arrows">
				<div class="home-gallery__prev home-gallery__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-left.svg" />
				</div>
				<div class="home-gallery__next home-gallery__arrow">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-right.svg" />
				</div>
			</div>
		</div>
	</section>

	<section class="footer-feature">
		<div class="container footer-feature__container">
			<div class="footer-feature__inner">
				<div class="footer-feature__item fadeUp">Featured in</div>
				<div class="footer-feature__item fadeUp"><a target="_blank" href="https://www.insidepropertyinvesting.com/jade-bailey-mansfield-hmo-3/"><img src="<?= get_template_directory_uri(); ?>/assets/img/feature_inside.png" /></a></div>
				<div class="footer-feature__item fadeUp"><img src="<?= get_template_directory_uri(); ?>/assets/img/feature_property.png" /></div>
				<div class="footer-feature__item fadeUp"><img src="<?= get_template_directory_uri(); ?>/assets/img/feature_hmo.png" /></div>
				<div class="footer-feature__item fadeUp"><img src="<?= get_template_directory_uri(); ?>/assets/img/feature_notts.png" /></div>
			</div>
		</div>
	</section>

<?php get_footer() ?>