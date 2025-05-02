<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mandarinhotel
 */

get_header();
?>

	<section class="hero-section">
		<img src="<?php echo the_field('banner', 228) ?>" alt="banner">
	</section>

	<div class="content-article padd-content">
		<h1><?php the_title(); ?></h1>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
<?php
get_footer();
