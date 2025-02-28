<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mandarinhotel
 */

?>

<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h2>ABONNEZ-VOUS À NOTRE NEWSLETTER</h2>
					<div class="description">
						Soyez parmi les premiers informés sur tout ce qui concerne Le Mandarin Palace
					</div>
				</div>
			</div>
			<div class="col-md-6">
				 <?php echo do_shortcode('[newsletter_form form="1"]'); ?>  
			</div>
		</div>
	</div>
</section>
<section class="map-footer">
	<div class="row g-0">
		<div class="col-md-6">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.504189762181!2d-5.760669524360264!3d35.78755377255317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f7e6946a8a3%3A0x5d2de7dff546ede5!2sH%C3%B4tel%20Mandarin%20Palace!5e0!3m2!1sfr!2sma!4v1740675126751!5m2!1sfr!2sma" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="col-md-6">
			<div class="social-info">
				<div class="item">
					<h3>LOCATION</h3>
					<div class="link-item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.svg" alt="location">
						<a href="#" target="_blank"><?php the_field('location', 110) ?></a>
					</div>
				</div>
				<div class="item-phone">
					<div class="item">
						<h3>HOTEL BOOKING</h3>
						<div class="link-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tel.svg" alt="phone">
							<span><?php the_field('phone', 110) ?></span>
						</div>
						<div class="link-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/envelop.svg" alt="phone">
							<a href="mailto:<?php the_field('email', 110) ?>"><?php the_field('email', 110) ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
<footer class="footer">
	<div class="container primary-footer">
		<div class="row text-center text-md-start">
			<!-- Logo -->
			<div class="col-md-3 mb-3">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Mandarin-Logo.svg" alt="Mandarin-Logo">
				</div>
			</div>
			<!-- Navigation Links -->
			<div class="col-md-6 ">
				<div class="d-flex align-items-center h-100 ">
					<div class="nav-links  gap-2">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => 'nav-links',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
						?>
					</div>
				</div>

			</div>
			<!-- Social Icons -->
			<div class="col-md-3 mb-3 text-center text-md-end">
				<div class="d-flex align-items-center justify-content-center h-100 ">
					<div class="social-icons">
						<a href="<?php the_field('facebook', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fb.svg" alt="Facebook"></a>
						<a href="<?php the_field('instagram', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram"></a>
						<a href="<?php the_field('tiktok', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt="Twitter"></a>
						<a href="<?php the_field('youtube', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ytb.svg" alt="Youtube"></a>
						<a href="<?php the_field('linkedin', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.svg" alt="Linkedin"></a>
						<a href="<?php the_field('snapchat', 110) ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/profil.svg" alt="Profil"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="border-secondary">
	<div class="secondary-footer">
		<div class="col text-center">
			<div class="copyright">
				Copyright ©2025 All rights reserved | by <a href="#">Interakt Agency</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>