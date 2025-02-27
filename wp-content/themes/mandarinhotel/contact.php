<?php

/**
 * Template Name: Contact
 */
get_header();
?>

<section class="hero-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-contact.jpg" alt="banner">
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
                Au cœur de notre établissement, l’énergie vibrante de la vie nocturne prend vie. Des soirées
                enflammées aux
                rythmes envoûtants, le 555 Hôtel Clubbing Marrakech est l’endroit où la fête ne s’arrête jamais.
                Nos espaces de
                divertissement exquis sont conçus pour créer des souvenirs mémorables, que ce soit dans nos
                clubs animés, nos
                bars élégants ou au bord de notre piscine scintillante.
            </p>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">



            <form id="contactForm" novalidate>
                <div class="row gap-4">
                    <div class="col-md-5">
                <textarea class="textarea-message" placeholder="Votre message..."></textarea>
                    </div>
                    <div class="col-md-5">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" />
                        <div id="error-subject" class="error-msg text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name/Surname" name="name" />
                        <div id="error-name" class="error-msg text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"/>
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
