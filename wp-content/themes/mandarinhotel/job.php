<?php

/**
 * Template Name: Job
 */
get_header();
?>

<section class="job-section">
    <div class="container-page ">
        <h1>JOBS</h1>
        <form id="jobForm" enctype="multipart/form-data">
    <input type="text" name="name" id="name" placeholder="Votre Nom">
    <div id="error-name" class="error-msg text-danger"></div>
 
    <input type="email" name="email" id="email" placeholder="Votre email">
    <div id="error-email" class="error-msg text-danger"></div>
 
    <input type="tel" name="phone" id="phone" placeholder="Numéro de Téléphone">
    <div id="error-phone" class="error-msg text-danger"></div>
 

    <label for="post">Post :</label>
    <select name="post" id="post">
        <option value=""> —Veuillez choisir une option— </option>
        <option value="developpeur">Développeur</option>
        <option value="designer">Designer</option>
        <option value="marketing">Marketing</option>
    </select>

    <label for="cv">Uploader votre CV :</label>
    <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx">
    <div id="error-cv" class="error-msg text-danger"></div>
 
    <textarea name="message" placeholder="Message" rows="5"></textarea>

    <button type="submit">Envoyer</button>
</form>
<div id="form-message"></div>

    </div>
</section>



<?php

get_footer();
?>