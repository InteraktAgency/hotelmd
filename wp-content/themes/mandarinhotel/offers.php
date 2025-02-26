<?php

/**
 * Template Name: Offres
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php the_field('banner') ?>" alt="banner">
</section>

<section class="offers-hotel">
    <div class="container">
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
        <div class="list-offers row">
        <?php
    $loop = new WP_Query( array( 'post_type' => 'offers') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-3">
                <div class="item">
                    <div class="item-img">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Offers">
                        </a>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">Voir l'offre</a>
                </div>
            </div>
            <?php  endwhile;
            endif;
    wp_reset_postdata();
?>
            
        </div>
    </div>
</section>

<?php
get_footer();
?>