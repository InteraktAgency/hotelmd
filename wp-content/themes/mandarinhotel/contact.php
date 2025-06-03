<?php

/**
 * Template Name: Contact
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php echo the_field('banner') ?>" alt="banner">
</section>

<section class="contactus-heading">
    <div class="heading">
        <div class="title">
            <h1>
                CONTACT US
            </h1>
        </div>
        <div class="description">
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container" >
       
            <?php echo do_shortcode('[contact-form-7 id="0893383" title="Contact us"]') ?>
       

    </div>
</section>

<?php
get_footer();
?>