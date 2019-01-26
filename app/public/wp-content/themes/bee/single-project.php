<?php get_header() ?>

<?php $bg = wp_get_attachment_url( get_post_thumbnail_id()); ?>

<?php while (have_posts()) : the_post(); ?>
    
<section class="project-hero">
    <div class="project-hero__container container">
        <div class="project-meta">
            <div class="project-meta__year">
                <h3><?php echo the_field('project_year'); ?></h3>
            </div>
            <div class="project-meta__location">
                <h6>Location:</h6>
                <div class="project-meta__location-title"><?php echo the_field('project_location'); ?></div>
            </div>
        </div>
        <div class="project-hero__content">
            <h2 class="project-hero__title"><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="project-hero__bg" style="background-image: url('<?php echo $bg; ?>');"></div>
</section>

<section class="project-description">
    <div class="project-description__container container">
        <div class="project-description__inner"><?php the_content(); ?></div>
    </div>
</section>

<?php

// check if the flexible content field has rows of data
if( have_rows('page_builder') ): ?>

	<div class="project-content">

    <?php // loop through the rows of data
    while ( have_rows('page_builder') ) : the_row();

        if( get_row_layout() == 'full_width_image' ):?>

        	<?php 

        	$img = get_sub_field('full_width_image');
        	$url = $img['url'];
        	$caption = $img['caption'];

        	?>

       		<section class="project-full">

       			<div class="project-full__container container">
       				<img src="<?php echo $url ?>" />
       				<?php if( $caption ): ?>
						<div class="project-full__caption">
							<?php echo $caption ?>
						</div>
					<?php endif; ?>
       			</div>
       			
       		</section>

        <?php elseif( get_row_layout() == 'split_width_image' ): ?>

        	<?php 

        	$img1 = get_sub_field('image_left');
        	$url1 = $img1['url'];
        	$caption1 = $img1['caption'];

        	$img2 = get_sub_field('image_right');
        	$url2 = $img2['url'];
        	$caption2 = $img2['caption'];

        	?>

        	<section class="project-split">

        		<div class="project-split__inner">

	       			<div class="project-split__container container">
	       				<div class="project-split__column project-split__column--left">
		       				<img src="<?php echo $url1 ?>" />
		       				<?php if( $caption1 ): ?>
								<div class="project-split__caption">
									<?php echo $caption1 ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="project-split__column project-split__column--right">
		       				<img src="<?php echo $url2 ?>" />
		       				<?php if( $caption2 ): ?>
								<div class="project-split__caption">
									<?php echo $caption2 ?>
								</div>
							<?php endif; ?>
						</div>
	       			</div>
	       		</div>
       			
       		</section>

        <?php elseif( get_row_layout() == 'quote' ): ?>

        	<?php

        	$quote = get_sub_field('quote');

        	?>

        	<section class="project-quote">
        		<div class="project-quote__container">
        			<div class="project-quote__icon">
        				<img src="<?php echo get_template_directory_uri() ?>/assets/img/project/quote_icon.svg" />
        			</div>
        			<div class="project-quote__content"><?php echo $quote['quote_content'] ?></div>
        			<div class="project-quote__author"><?php echo $quote['quote_author'] ?></div>
        		</div>
        	</section>

        <?php elseif( get_row_layout() == 'text_area' ): ?>

        	Text Area

        <?php endif;

    endwhile; ?>

	</div>

<?php else :

    // no layouts found

endif;

?>

<?php endwhile; ?>
<?php get_footer() ?>