<?php

# Template Name: Book

get_header();

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

<div class="book-template">

	<div class="book-hero">
		<div class="book__container container">
			<div class="book-hero__inner">
				<div class="book-hero__left">
					<div class="book-hero__left-inner">
						<h1 class="book-hero__title title title-split">
							<div class="title-split__mask">
								<span class="title-split__line">Download the</span>
							</div>
							<div class="title-split__mask">
								<span class="title-split__line title__highlight"><?php echo the_title() ?></span>
							</div>
						</h1>
						<div class="book-hero__paragraph fadeUp"><?php echo the_content() ?></div>
						<a href="<?php echo the_field('download_link') ?>" class="button">Download</a>
					</div>
				</div>
				<div class="book-hero__book">
					<img src="<?php echo the_field('hero') ?>" />
				</div>
			</div>
		</div>
	</div>

</div>

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