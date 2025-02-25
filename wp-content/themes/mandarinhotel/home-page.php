<?php

/**
 * Template Name: Accueil
 */
get_header();
?>

<section class="slider">
    <div class="swiper-slider">
    <?php 
        $images = get_field('slider');
        if( $images ):
     ?>
        <div class="swiper-wrapper">
            <?php foreach( $images as $image ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/swiper-left.svg" alt="prev">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/swiper-right.svg" alt="next">
        </div>
    </div>
</section>

<section class="service-hotel">
    <div class="heading">
        <div class="title">
            <h1>
                Le Mandarin Palace, bien plus qu'un Hôtel à Tanger !
            </h1>
        </div>
        <div class="description">
            <p>
                Le Mandarin Palace Hotel Tanger vous invite à découvrir l'univers raffiné de ses chambres et
                suites. Tous les décors ont été étudiés avec soin pour vous offrir une expérience mémorable dans
                un cadre paisible.
            </p>
            <p>
                Le Mandarin Palace Hotel Tanger vous invite à découvrir l'univers raffiné Depuis votre suite,
                profitez d'une vue imprenable sur la baie de la ville de Tanger.
                Réservez dès maintenant pour vivre une expérience unique dans nos chambres d'exception !
            </p>
        </div>
    </div>

    <div class="items-services">
        <div class="list-services">
    <?php
        if( have_rows('mandarin_pages') ):
        while( have_rows('mandarin_pages') ) : the_row(); 
    ?>
            <div class="item">
                <div class="item-featured">
                    <a href="<?php the_sub_field('link') ?>">
                        <img src="<?php the_sub_field('image') ?>" alt="Le Mandarin Palace, bien plus qu'un Hôtel à Tanger !">
                        <h2><?php the_sub_field('title') ?></h2>
                    </a>
                </div>
                <div class="item-content">
                    <?php the_sub_field('content') ?>
                </div>
                <div class="read-more">
                    <a href="<?php the_sub_field('link') ?>" class="btn btn-read">See more</a>
                </div>
            </div>
    <?php 
        endwhile;

        else:
        endif;
    ?>
        </div>
    </div>
</section>


<section class="galerie">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video-ytb">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/SkEd5yeXCEQ">
                </iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special.jpg" alt="Special">
                <div class="content-gal">
                    <h2>Special rates</h2>
                    <a href="#" class="btn btn-read">See more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-turk">
        <div class="items-turk">
            <div class="list-img">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt1.jpg" alt="pic">
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt2.jpg" alt="pic">
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt3.jpg" alt="pic">
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt4.jpg" alt="pic">
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt5.jpg" alt="pic">
                </div>
            </div>
            <div class="img-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cnt6.jpg" alt="pic">
            </div>
        </div>

        <div class="content-turk">
            <h2>la turquoise</h2>
            <a href="#" class="btn btn-read">See more</a>
        </div>
    </div>

    <div class="experiences-hotel">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exp1.jpg" alt="experience" class="img-featured">
                        <h3>POOL & BEACH PARTY</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exp1.jpg" alt="experience" class="img-featured">
                        <h3>VIP TABLE</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exp1.jpg" alt="experience" class="img-featured">
                        <h3>experience</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facepic.jpg" alt="experience" class="img-featured">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fbwhite.svg" alt="Facebook">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instapic.jpg" alt="experience" class="img-featured">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/snapwhite.svg" alt="Snap">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/snappic.jpg" alt="experience" class="img-featured">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instawhite.svg" alt="Instagram">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>