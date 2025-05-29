<?php

/**
 * Template Name: Conciergie
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
    </div>

    <div class="image-services">
        <div class="row g-2">
            <div class="col-md-6">
                <div class="item">
                    <div class="item-featured">
                        <a href="<?php the_permalink(110) ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport.jpg" alt="Image 1">
                            <h2>Service de transfert</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item">
                    <div class="item-featured">
                        <a href="<?php the_permalink(58) ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event.jpg" alt="Image 1">
                            <h2>Organisation des événements</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>