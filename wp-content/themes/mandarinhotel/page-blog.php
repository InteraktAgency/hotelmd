<?php

/**
 * Template Name: Blog
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php echo the_field('banner') ?>" alt="banner">
</section>

<section class="blog">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 12,
                'post_status'    => 'publish',
            );

            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-md-3">
                        <div class="article">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <span class="date"><?php echo get_the_date(); ?></span>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="excerpt">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>