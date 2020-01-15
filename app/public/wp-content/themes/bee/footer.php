<section class="footer-instagram"><?php echo do_shortcode('[instagram-feed]'); ?></section>

<footer class="footer">
	<div class="container footer__container">
		<div class="footer__subscribe">
			<h4 class="footer__subscribe-title">STAY IN THE KNOW</h4>
			<p class="footer__subscribe-paragraph">Get the latest in all things Beespace & property investment</p>

			<!-- Begin Mailchimp Signup Form -->
			<div class="footer__subscribe-form" id="mc_embed_signup">
			<form action="https://dobbodesign.us10.list-manage.com/subscribe/post?u=ea9184824ee1bea88fb96f570&amp;id=b708dd2ff0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				
			<input type="email" value="" name="EMAIL" class="required email footer__subscribe-input" id="mce-EMAIL" placeholder="Enter your email address" >
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ea9184824ee1bea88fb96f570_b708dd2ff0" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button footer__subscribe-button"></div>
			    </div>
			</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->

		</div>
		<div class="footer__middle">
			<div class="footer__middle-item">
				<h6 class="footer__middle-subtitle">The Hive</h6>
				<h4 class="footer__middle-title"><a href="/blog">Latest News <img src="<?= get_template_directory_uri(); ?>/assets/img/icon_arrow-white-right.svg" /></a></h4>
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
				<a target="_blank" href="https://www.youtube.com/channel/UCj4OzA8oFX9tmcPJy5hJaIA"><img src="<?= get_template_directory_uri(); ?>/assets/img/social_yt.svg" /></a>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__bottom-left">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/logo-white.svg" /> © 2019 Beespace. All rights reserved.
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