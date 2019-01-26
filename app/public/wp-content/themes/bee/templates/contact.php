<?php

# Template Name: Contact

get_header();

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

<div class="page-contact">

	<div class="page-header" style="background-image: url('<?= $featured_img_url ?>');"></div>

	<div class="page-wrap half-pattern">

		<div class="page-wrap__container container">

			<div class="half-pattern__inner"></div>

			<div class="page-contact__inner">
				<div class="page-contact__column">
					<div class="page-contact__item">
						<h6 class="page-contact__subtitle">Email us</h6>
						<h4 class="page-contact__title">hello@bee-space.co.uk <img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-right.svg" /></h4>
					</div>
					<div class="page-contact__item page-contact__social">
						<h6 class="page-contact__subtitle">Get in touch</h6>
						<a target="_blank" href="https://www.instagram.com/____beespace/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_ig.svg" /></a>
						<a target="_blank" href="https://www.pinterest.co.uk/jade5115/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_pi.svg" /></a>
						<a target="_blank" href="https://www.facebook.com/beespaceproperty/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_fb.svg" /></a>
						<a target="_blank" href="https://www.linkedin.com/in/jade-bailey-0b108584/?originalSubdomain=uk"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_in.svg" /></a>
					</div>
				</div>
				<div class="page-contact__column">
					<div class="page-contact__form">
						<?= do_shortcode('[contact-form-7 id="145" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php get_footer() ?>