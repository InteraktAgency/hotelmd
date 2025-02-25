<?php

/**
 * Template Name: Chambres
 */
get_header();
?>

<section class="rooms">
    <div class="container">
        <?php
        if (have_rows('room')):
            while (have_rows('room')) : the_row();
        ?>
                <div class="item-room">
                    <h2><?php the_sub_field('title') ?></h2>
                    <div class="swiper-slider-rooms">

                        <div class="swiper-wrapper">
                            <?php
                            $images = get_sub_field('galeries');
                            if ($images):
                                foreach ($images as $image):
                                    
                            ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="Galerie">
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <div class="content-rooms">
                        <?php the_sub_field('content') ?>
                    </div>

                    <div class="specefic-room">
                        <?php
                        if (have_rows('specification')):
                            while (have_rows('specification')) : the_row();
                        ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('icone') ?>" alt="Chambre">
                                    <span><?php the_sub_field('title') ?></span>
                                </div>
                        <?php
                            endwhile;
                        else:
                        endif;
                        ?>
                    </div>
                    <div class="btn-reserver">
                        <a href="<?php the_sub_field('link') ?>" class="btn btn-read">Réservez</a>
                    </div>
                </div>
        <?php
            endwhile;

        else:
        endif;
        ?>

        <div class="specefic-global">
            <h2>Toutes les chambres et suites sont <br> équipées de :</h2>
            <div class="row list-specefic">
                <div class="col-md-4">
                    <ul class="list-items">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/lit.svg" alt="Lit king size">
                            <span>Lit King size</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/sallebain.svg" alt="Salle de bain avec douche">
                            <span>Salle de bain avec douche</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/seche.svg" alt="Sèche cheveux">
                            <span>Sèche cheveux</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul class="list-items">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clima.svg" alt="Climatisation réversible">
                            <span>Climatisation réversible</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/produits.svg" alt="Produits naturels bio Botanika">
                            <span>Produits naturels bio Botanika</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/coffre.svg" alt="Coffre fort">
                            <span>Coffre fort</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul class="list-items">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/wifi.svg" alt="wifi">
                            <span>wifi</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/wifi.svg" alt="Connexion WI-FI gratuite haut débit">
                            <span>Connexion WI-FI gratuite haut débit</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tv.svg" alt="TV numérique (Chaînes internationales)">
                            <span>TV numérique (Chaînes internationales)</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>