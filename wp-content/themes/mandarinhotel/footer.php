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

<section class="map-footer">
	<div class="row g-0">
		<div class="col-md-6">
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.2287858318623!2d-5.799829484798371!3d35.77769368017071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c791f5b3eaf03%3A0x33cf80a0a633b1ec!2sH%C3%B4tel%20Mandarin%20Palace!5e0!3m2!1sen!2sma!4v1687193049145!5m2!1sen!2sma"
					allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
		</div>
		<div class="col-md-6">
			<div class="social-info">
				<div class="item">
					<h3>LOCATION</h3>
					<div class="link-item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.svg" alt="location">
						<a href="#" target="_blank">Av. du Front de Mer, Tanger 90000</a>
					</div>
				</div>
				<div class="item-phone">
					<div class="item">
						<h3>HOTEL BOOKING</h3>
						<div class="link-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tel.svg" alt="phone">
							<span>+212 539 300 148 / +212 6 57 58 14 92</span>
						</div>
						<div class="link-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/envelop.svg" alt="phone">
							<a href="mailto:sales@hotelmandarintanger.com">sales@hotelmandarintanger.com</a>
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
						<a href="#"> Hebergement </a>
						<a href="#"> Clubbing</a>
						<a href="#"> Redtaurants</a>
						<a href="#"> Experience</a>
						<a href="#"> Conciergerie</a>
						<a href="#"> Booking</a>
						<a href="#"> Jobs</a>
						<a href="#"> Contact</a>
						<span class="ms-2">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logoLanguege.svg" alt="English" width="20" class="me-2">
						</span>
					</div>
				</div>

			</div>
			<!-- Social Icons -->
			<div class="col-md-3 mb-3 text-center text-md-end">
				<div class="d-flex align-items-center justify-content-center h-100 ">
					<div class="social-icons">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fb.svg" alt="Facebook"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt="Twitter"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ytb.svg" alt="Youtube"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.svg" alt="Linkedin"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/profil.svg" alt="Profil"></a>
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

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/home.js"></script>
<script src="/assets/js/main.js"></script> -->

<?php wp_footer(); ?>

</body>

</html>