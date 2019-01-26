<section class="footer-instagram"><?php echo do_shortcode('[instagram-feed]'); ?></section>

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
				<h4 class="footer__middle-title"><a href="mailto:hello@bee-space.co.uk">SEND AN EMAIL <img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-right.svg" /></a></h4>
			</div>
			<div class="footer__middle-item footer__middle-social">
				<h6 class="footer__middle-subtitle">Get in touch</h6>
				<a target="_blank" href="https://www.instagram.com/____beespace/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_ig.svg" /></a>
				<a target="_blank" href="https://www.pinterest.co.uk/jade5115/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_pi.svg" /></a>
				<a target="_blank" href="https://www.facebook.com/beespaceproperty/"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_fb.svg" /></a>
				<a target="_blank" href="https://www.linkedin.com/in/jade-bailey-0b108584/?originalSubdomain=uk"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_in.svg" /></a>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__bottom-left">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/logo-white.svg" /> © 2019 Bee Space. All rights reserved.
			</div>
			<div class="footer__bottom-right">
				<?php
	                if (has_nav_menu('primary_navigation')) :
	                  wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'footer__bottom-menu']);
	                endif;
	              ?>
			</div>
		</div>
	</div>
</footer>
<section class="pattern pattern--triangle"></section>
</div>

	</div>
</div>

<div class="barba-overlay">
	<div class="barba-overlay__inner">
		<div class="barba-overlay__logo">
			<img src="<?= get_template_directory_uri(); ?>/assets/img/logo-white.svg" />
		</div>
	</div>
</div>

</body>

</html>

<?php wp_footer(); ?>