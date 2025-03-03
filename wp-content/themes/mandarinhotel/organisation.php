<?php

/**
 * Template Name: Organisation
 */
get_header();
?>

<section class="service-organisation">
    <div class="heading">
        <div class="title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="description">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="section-content">
        <div class="row align-items-center">
            <div class="col-md-6 order-class">
                <div class="content">
                    <h2><?php echo the_field('title') ?></h2>
                    <div class="description">
                        <?php echo the_field('content') ?>
                    </div>
                    <div class="read-more">
                        <a href="<?php echo the_field('link') ?>" class="btn btn-read">Demande de devis</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/org.jpg" alt="Organisation">
                </div>
            </div>
        </div>

        <div class="row gal-fancy">
            <?php
            $images = get_field('gallery');
            if ($images):
                foreach ($images as $image): ?>
                    <div class="col-md-4">
                        <div class="gal-item">
                            <a href="#">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="Organisation">
                            </a>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>