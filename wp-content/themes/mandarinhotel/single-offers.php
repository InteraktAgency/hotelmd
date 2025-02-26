<?php
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
        </div>

    </div>
</section>

<section class="detail-content container">
    <div class="card-details">
        <div class="card-content">
            <div class="description">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="card-img">
            <img src="<?php the_field('image_offre') ?>" alt="offre">
        </div>
    </div>
</section>
<?php
get_footer();
?>