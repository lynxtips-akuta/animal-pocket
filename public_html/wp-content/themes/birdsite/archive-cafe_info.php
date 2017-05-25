<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage birdSITE
 * @since birdSITE 1.0
 */
get_header(); ?>



<ul id="thumbnails" class="row">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
</ul>

<?php the_posts_pagination( array( 'mid_size' => 3 ) ); ?>

<?php get_footer(); ?>
