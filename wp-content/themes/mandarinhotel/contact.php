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
    <div class="container">
        <form id="contactForms" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <textarea class="textarea-message" placeholder="Votre message..." name="message"></textarea>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" />
                        <div id="error-subject" class="error-msg text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name/Surname" name="name" />
                        <div id="error-name" class="error-msg text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
                        <div id="error-email" class="error-msg text-danger"></div>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="btn">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>

    </div>
</section>

<?php
get_footer();
?>