<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mandarinhotel
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/home.css">
	<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/main.css"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<nav class="navbar navbar-expand-lg navbar-custom">
			<div class="container-fluid px-5">
				<!-- Logo -->
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Mandarin-Logo.svg" alt="Mandarin Palace Tanger">
				</a>

				<!-- Bouton pour le menu mobile -->
				<button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Menu -->
				<div class="collapse navbar-collapse" id="navbarNav">
					
					<ul class="navbar-nav ms-auto d-flex gap-2">
 
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
					</ul>
				</div>
		</nav>
	</header>
	<main>