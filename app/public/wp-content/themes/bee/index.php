<?php get_header() ?>

<section class="page-blog">
	<div class="container page-blog__container">
		<div class="page-blog__top">
			<h2 class="page-blog__title">The Hive</h2>
		</div>
		<div class="home-blog__list">

		<?php while (have_posts()) : the_post(); ?>

			<?php $bg = wp_get_attachment_url( get_post_thumbnail_id()); ?>

		    <div class="home-blog__item">
		    	<a href="<?php echo the_permalink(); ?>">
					<div class="home-blog__item-image reveal reveal--dark" style="background-image: url('<?php echo $bg ?>')"></div>
				</a>
				<h6 class="home-blog__item-date"><?php echo the_date(); ?></h6>
				<a href="<?php echo the_permalink(); ?>">
					<h4 class="home-blog__item-title"><?php echo the_title(); ?></h4>
				</a>
				<a href="<?php echo the_permalink(); ?>" class="button button--outline home-blog__item-button">Read more</a>
			</div>

		<?php endwhile; ?>

		</div>
	</div>
</section>

<?php the_posts_navigation(); ?>

<?php get_footer() ?>