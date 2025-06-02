<?php

/**
 * Template Name: Hebergement
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php echo the_field('banner') ?>" alt="Hebergement">
</section>
<section class="service-hotel hebergement-services">
    <div class="heading">
        <div class="title">
            <h1>
                Chambres & Suites
            </h1>
        </div>
        <div class="description">
            <p class="fw-medium">
                Découvrez nos hébergements raffinés, conçus pour offrir un confort inégalé et une expérience de
                luxe unique à Tanger. <br> Que vous choisissiez une chambre élégante ou une suite spacieuse, chaque
                détail est pensé pour rendre
                votre séjour mémorable
            </p>
        </div>
    </div>
    <div class="items-services ">
        <div class="list-services">

            <?php
            if (have_rows('rooms')):
                while (have_rows('rooms')) : the_row();
            ?>
                    <div class="item">
                        <div class="item-featured">
                            <a href="#">
                                <img src="<?php the_sub_field('image') ?>" alt="Image 1">
                                <h3><?php the_sub_field('title') ?></h3>
                                <div class="desc-cat-rooms">
                                    <div class="item-content">
                                        <?php the_sub_field('content') ?>
                                    </div>
                                    <div class="read-more">
                                        <a href="<?php the_sub_field('link') ?>" class="btn btn-read">réservez maintenant</a>
                                    </div>
                                </div>
                            </a>
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
<?php
if( have_rows('mandarin_block') ):
    while( have_rows('mandarin_block') ) : the_row(); 
        $row_index = get_row_index();
?>
<section class="restaurant-intro-section">
    <?php  if ($row_index == 1): ?>
    <div class="row padding-rl">
        <div class="col-md-6">
            <div class="container-intro">
                <img src="<?php the_sub_field('awards') ?>" class="certif" alt="">
                <h2> <?php the_sub_field('title') ?></h2>
                <div>
                    <?php the_sub_field('content') ?>
                </div>
                <div class="read-more">
                    <a href="<?php the_sub_field('link') ?>" target="_blank" class="btn btn-read">la carte</a>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="content-img">
                <img src="<?php the_sub_field('image') ?>" alt="restaurant-img">
            </div>
        </div>
    </div>
    <?php  endif; ?>

    <?php  if ($row_index == 2): ?>
    <div class="row padding-rl">
        <div class="col-md-6">
            <div class="content-img">
                <img src="<?php the_sub_field('image') ?>" alt="restaurant-img">
            </div>
        </div>
        <div class="col-md-6">
            <div class="container-intro">
                <h2> <?php the_sub_field('title') ?></h2>
                <div class="container-info-p">
                    <?php the_sub_field('content') ?>
                </div>
                <div class="read-more">
                    <a href="<?php the_sub_field('link') ?>" target="_blank" class="btn btn-read">la carte</a>
                </div>
            </div>

        </div>
    </div>
    <?php  endif; ?>

</section>
<?php 
    endwhile;
else:

endif;
?>
<?php
get_footer();
?>