<?php

/**
 * Template Name: Restaurants
 */
get_header();
?>

<section class="section-brasserie">
    <div class="logo-awards">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/awards.png" alt="awards">
    </div>
    <div class="content-book-now">
        <h2>la brasserie de paris tanger</h2>
        <div class="book-now">
            <a href="#" class="btn btn-book">book now</a>
        </div>
    </div>
    <div class="row mb-4">
        <ul class="nav nav-tabs">
            <div class="col-md-6 px-0">
                <div class="gallery-restaurant">
                    <li class="nav-item  active" data-bs-toggle="tab" href="#restaurant">
                        <a href="#" class="btn btn-restaurant nav-link">restaurant</a>
                    </li>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="gallery-restaurant">
                    <li class="nav-item" data-bs-toggle="tab" href="#gallery">
                        <a href="#" class="btn btn-gallery nav-link">gallery</a>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</section>
<section class="restaurant-intro-section tab-content">

    <div class="tab-pane fade show active" id="restaurant">
        <?php
        if (have_rows('posts')):
            while (have_rows('posts')) : the_row();
                $row_index = get_row_index();
                if ($row_index == 1):
        ?>
                    <div class="row">
                        <div class="col-md-6 px-0">
                            <div class="content-img">
                                <img src="<?php the_sub_field('image') ?>" alt="restaurant-img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container-intro pe-5">
                                <h2><?php the_sub_field('title') ?></h2>
                                <div class="container-info-p">
                                    <?php the_sub_field('content') ?>
                                </div>
                                <div class="cart">
                                    <a href="<?php the_sub_field('link') ?>" target="_blank" class="btn btn-cart ">la carte</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="items-services ">
                        <div class="list-services">
                            <?php
                            if (have_rows('sub_posts')):
                                while (have_rows('sub_posts')) : the_row();
                            ?>
                                    <div class="item">
                                        <div class="item-featured">
                                            <a href="#">
                                                <img src="<?php the_sub_field('image') ?>" alt="Image-atmosphère">
                                                <h2><?php the_sub_field('title') ?></h2>
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <?php the_sub_field('content') ?>
                                        </div>
                                    </div>

                            <?php
                                endwhile;
                            else:
                            endif;
                            ?>

                        </div>
                    </div>
                <?php endif; ?>
        <?php
            endwhile;
        else:

        endif;
        ?>
    </div>
    <div id="gallery" class="tab-pane fade gal-rest">
        <?php echo do_shortcode('[modula id="170"]'); ?>
    </div>
</section>

<section class="section-brasserie">
    <div class="content-book-now">
        <h2>la brasserie de paris tanger</h2>
        <div class="book-now">
            <a href="#" class="btn btn-book">book now</a>
        </div>
    </div>
    <div class="row mb-4">
        <ul class="nav nav-tabs">
            <div class="col-md-6 ">
                <div class="gallery-restaurant">
                    <li class="nav-item active " data-bs-toggle="tab" href="#restaurant-sec-2">
                        <a href="#" class="btn btn-restaurant nav-link ">restaurant</a>
                    </li>
                </div>
            </div>
            <div class="col-md-6">
                <div class="gallery-restaurant">
                    <li class="nav-item" data-bs-toggle="tab" href="#gallery-sec-2">
                        <a href="#" class="btn btn-gallery nav-link">gallery</a>
                    </li>
                </div>
            </div>
        </ul>
    </div>
</section>

<section class="restaurant-intro-section tab-content">
    <div class="tab-pane fade show active" id="restaurant-sec-2">
    <?php
        if (have_rows('posts')):
            while (have_rows('posts')) : the_row();
                $row_index = get_row_index();
                if ($row_index == 2):
        ?>
        <div class="row">
            <div class="col-md-6 padding-rl order-content">
                <div class="container-intro">
                    <h2><?php the_sub_field('title') ?></h2>
                    <div class="container-info-p">
                        <?php the_sub_field('content') ?>
                    </div>
                    <div class="cart">
                        <a href="<?php the_sub_field('link') ?>" target="_blank" class="btn btn-cart ">la carte</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 p-0">
                <div class="content-img">
                    <img src="<?php the_sub_field('image') ?>" alt="restaurant-img">
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php
            endwhile;
        else:

        endif;
        ?>
    </div>
    <div id="gallery-sec-2" class="tab-pane fade gal-rest">
        <?php echo do_shortcode('[modula id="186"]'); ?>
    </div>
</section>

<?php
get_footer();
?>