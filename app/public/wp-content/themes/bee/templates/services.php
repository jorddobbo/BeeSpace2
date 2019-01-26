<?php

# Template Name: Services

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
								<span class="title-split__line">Our</span>
							</div>
							<div class="title-split__mask">
								<span class="title-split__line title__highlight">Services</span>
							</div>
						</h1>
						<p class="page-hero__paragraph fadeUp">Do you want to be a leading landlord in your area and disrupt the market? Do you want to achieve the highest rental rates possible? Do you want to minimise your void periods and maximise your tenant profile? Then you need to <strong>brand your space!</strong></p>
					</div>
				</div>
			</div>
		</div>
		<section class="pattern pattern--triangle"></section>
	</div>

	<section class="services-intro">
		<div class="services-intro__container container">
			<div class="services-intro__row">
				<div class="services-intro__third fadeUp">
					<img class="services-intro__icon" src="<?= get_template_directory_uri(); ?>/assets/img/icon_plan.svg" alt="Intro"/>
					<h3 class="services-intro__title">Concept</h3>
					<p class="services-intro__paragraph">We design for you. By talking to you, we learn what you feel inspired by. We then look at how we can creatively apply that into a bespoke concept tailored to your property investment area and strategy. We want you to feel passionate and proud about the property brand we create for you.</p>
				</div>
				<div class="services-intro__third fadeUp" data-delay="400">
					<img class="services-intro__icon" src="<?= get_template_directory_uri(); ?>/assets/img/icon_bedroom.svg" alt="Intro"/>
					<h3 class="services-intro__title">Investment</h3>
					<p class="services-intro__paragraph">By committing and investing into your property you are investing into yourself. Through the use of our creative property concepts we’ve seen landlords achieve 30%+ higher then average rents, often with waiting lists for the property of potential new tenants. Lower void periods and maintenance issues. It’s a no brainer.</p>
				</div>
				<div class="services-intro__third fadeUp" data-delay="400">
					<img class="services-intro__icon" src="<?= get_template_directory_uri(); ?>/assets/img/icon_house-plan.svg" alt="Intro"/>
					<h3 class="services-intro__title">Time</h3>
					<p class="services-intro__paragraph">As property investors our selves we know the value of time and how you use it.  By choosing to work with us we can support your project by making decisions quickly about materials and where they come from. We will get the property 100% aesthetically ready for the open market.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="services-breakdown">
		<div class="services-breakdown__container container">
			<div class="services-breakdown__top">
				<h2 class="services-breakdown__top-title title-split">
					<div class="title-split__mask">
						<span class="title-split__line">
							How it works
						</span>
					</div>
				</h2>
				<p class="services-breakdown__top-paragraph fadeUp">As property investors we understand how precious time is during a project, and how many design decisions need to be made on time and in budget.

					Our design service has been created to give you more time back. It’s a turn-key deign service, which guarantees you have the best house at the end, stress free. Meaning you can use your time and expertise elsewhere.
				</p>
			</div>
			<div class="services-breakdown__list">
				<div class="services-breakdown__indicator">
					<div></div>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>1</div>
					<h3 class="services-breakdown__item-title">The Brief</h3>
					<p class="services-breakdown__item-paragraph">An initial meeting will take place with you so we can understand you and the market you operate in.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>2</div>
					<h3 class="services-breakdown__item-title">The Concept</h3>
					<p class="services-breakdown__item-paragraph">The concept will be created in the form of a mood-board. Which will show the proposed look, feel, and colour palette.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>3</div>
					<h3 class="services-breakdown__item-title">Material Spec</h3>
					<p class="services-breakdown__item-paragraph">After initial concept approval, a detailed material specification pack is then created to demonstrate the type of materials that will be used throughout your project.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>4</div>
					<h3 class="services-breakdown__item-title">Furniture & Lighting</h3>
					<p class="services-breakdown__item-paragraph">Detailed CAD drawings will be created that will whow all key layouts, including furniture and lighting.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>5</div>
					<h3 class="services-breakdown__item-title">Visit Site</h3>
					<p class="services-breakdown__item-paragraph">Throughout the project, visits to the site will be made to track and support progress.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>6</div>
					<h3 class="services-breakdown__item-title">Source</h3>
					<p class="services-breakdown__item-paragraph">All interior related items will be sourced and created by us.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>7</div>
					<h3 class="services-breakdown__item-title">Install</h3>
					<p class="services-breakdown__item-paragraph">We will install all items and fully stage and dress your property to perfection.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>8</div>
					<h3 class="services-breakdown__item-title">Photography</h3>
					<p class="services-breakdown__item-paragraph">We can arrange professional photography, meaning when we leave the building your project is good-to-go on the market.</p>
				</div>
				<div class="services-breakdown__item fadeUp">
					<div class="services-breakdown__item-number"><div></div>9</div>
					<h3 class="services-breakdown__item-title">To Market</h3>
					<p class="services-breakdown__item-paragraph">Jade Bailey is the Creative Director and founder of Beespace. As a property owner herself, she wanted to challenge the everyday perception of what a co-living house could look and feel like by</p>
				</div>
			</div>
		</div>
	</section>

	<section class="services-layout">
		<div class="services-layout__container container">
			<img src="<?= get_template_directory_uri(); ?>/assets/img/services_layout.jpg">
		</div>
	</section>

	<section class="services-render">
		<div class="services-render__container container">
			<div class="services-render__swipe">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/img_render.jpg">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/img_render-2.jpg">
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
					<p class="services-projects__paragraph fadeUp">We’ve had the pleasure of working on some great projects. Some for ourselves, some for others with like minded investors that share our values, and belive that being design-led and original is the way forward.</p>
					<a class="button fadeUp" href="/#projects">Our Work</a>
				</div>
			</div>
		</div>
		<div class="services-projects__right reveal reveal--dark" style="background-image: url('http://beespace.local/wp-content/uploads/2019/01/69wallbrook-69.jpg');">
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