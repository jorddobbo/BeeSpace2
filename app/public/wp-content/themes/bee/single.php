<?php get_header() ?>

<?php $bg = wp_get_attachment_url( get_post_thumbnail_id()); ?>

<?php while (have_posts()) : the_post(); ?>
    
<section class="blog-hero">
    <div class="blog-hero__container container">
    	<div class="blog-meta">
            <div class="blog-meta__date">
                <?php echo the_date(); ?>
            </div>
        </div>
        <div class="blog-hero__content">
            <h2 class="blog-hero__title"><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="blog-hero__bg" style="background-image: url('<?php echo $bg; ?>');"></div>
</section>

<section class="blog-content">
	<div class="blog-content__container container">
		<?php echo the_content();?>
	</div>
</section>

<?php endwhile; ?>
<?php get_footer() ?>