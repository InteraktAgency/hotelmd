<?php

/**
 * Template Name: Night Lounge
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php echo the_field('banner') ?>" alt="banner">
</section>

<section class="service-hotel">
    <div class="heading">
        <div class="title">
            <h1>
               <?php the_title(); ?>
            </h1>
        </div>
        <div class="description">
            <p>
                 <?php the_content(); ?>
            </p>
        </div>
    </div>

    <div class="image-services">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="item">
                    <a href="<?php the_permalink(114); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/turquoise.jpg" alt="Turquoise">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nouba.jpg" alt="Nouba">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>