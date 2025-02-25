<?php

/**
 * Template Name: Conciergie
 */
get_header();
?>

<section class="service-hotel">
    <div class="heading">
        <div class="title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

    <div class="image-services">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="item">
                    <div class="item-featured">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport.jpg" alt="Image 1">
                            <h2>Service de transfert</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="item-featured">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event.jpg" alt="Image 1">
                            <h2>Organisation des événements</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="item-featured">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport.jpg" alt="Image 1">
                            <h2>LOCATION DE VEHICULES</h2>
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