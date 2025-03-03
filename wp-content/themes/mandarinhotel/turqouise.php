<?php

/**
 * Template Name: La turqouise
 */
get_header();
?>

<section class="hero-section-turquoise">
    <div class="row padding-rl">
        <div class="col-md-3">
            <iframe src="https://www.youtube.com/embed/kLiSjdu4iDc" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            </iframe>
        </div>
        <div class="col-md-9">
            <div class="content-img-header">
                <img src="<?php echo the_field('banner') ?>" alt="Banniere">
            </div>
            <div class="content-desc-turquoise">
                <h2> La turquoise beach club </h2>
                <div class="desc-turquoise">
                    <?php the_content(); ?>
                </div>
                <div class="read-more">
                    <a href="#" class="btn btn-read">la carte</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="turquoise-beach-section">
    <h1> GALERIE PHOTOS</h1>
    <div class="turquoise-gallery">
        <?php
        $images = get_field('galerie');
        if ($images):
            foreach ($images as $image): ?>
                <a href="#"> <img src="<?php echo esc_url($image['url']); ?>" alt="gallery-1" /> </a>
        <?php
            endforeach;
        endif;
        ?>
    </div>
    <?php
    if (have_rows('posts')):
        while (have_rows('posts')) : the_row();
            $row_index = get_row_index();
    ?>

            <?php if ($row_index == 1): ?>
                <div class="row padding-rl ">
                    <div class="col-md-6 first-row-content">
                        <div class="container-intro">
                            <h2> <?php the_sub_field('title') ?> </h2>
                            <div>
                                <?php the_sub_field('content') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 first-row-image">
                        <div class="content-img">
                            <img src="<?php the_sub_field('image') ?>" alt="restaurant-img">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($row_index == 2): ?>
                <div class="row padding-rl space-tp">
                    <div class="col-md-6">
                        <div class="content-img">
                            <img src="<?php the_sub_field('image') ?>" alt="atmosphere-img">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="container-intro px-0 justify-content-center">
                            <h2><?php the_sub_field('title') ?></h2>
                            <div class="container-info-p">
                                <?php the_sub_field('content') ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

            <?php if ($row_index == 3): ?>
                <div class="row padding-rl space-tp">
                    <div class="col-md-6 first-row-content">
                        <div class="container-intro px-0 justify-content-center">
                            <h2> <?php the_sub_field('title') ?> </h2>
                            <div>
                                <?php the_sub_field('content') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 first-row-image">
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
</section>

<?php
get_footer();
?>