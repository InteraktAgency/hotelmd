<?php

/**
 * Template Name: Job
 */
get_header();
?>

<section class="job-section">
    <div class="container-page ">
        <h1>JOBS</h1>
        <form id="contactForm" novalidate>
            <input type=" text" name="name" id="name" placeholder="Votre Nom">
            <div id="error-name" class="error-msg"></div>
            <input type="email" name="email" id="email" placeholder="Votre email">
            <div id="error-email" class="error-msg"></div>
            <input type="tel" name="phone" id="phone" placeholder="Numéro de Téléphone">
            <div id="error-phone" class="error-msg"></div>


            <label for="post">Post :</label>
            <select name="post" id="post">
                <option value=""> —Veuillez choisir une option— </option>
                <option value="developpeur">Développeur</option>
                <option value="designer">Designer</option>
                <option value="marketing">Marketing</option>
            </select>

            <label for="cv">Uploader votre CV :</label>
            <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required>
            <div id="error-cv" class="error-msg"></div>


            <textarea name="message" placeholder="Message" rows="5"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</section>


<script>
        $(document).ready(function () {
            $("#contactForm").submit(function (event) {
                event.preventDefault();

                // Réinitialisation des messages d'erreur
                $(".error-msg").text("");

                let name = $("#name").val()?.trim();
                let email = $("#email").val()?.trim();
                let phone = $("#phone").val()?.trim();
                let cv = $("#cv")[0].files.length > 0 ? $("#cv")[0].files[0].name : "";
                let isValid = true;

                if (name === "") {
                    $("#error-name").text("Le nom est obligatoire");
                    isValid = false;
                }

                // Validation du champ "Email"
                if (email === "") {
                    $("#error-email").text("L'email est obligatoire");
                    isValid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    $("#error-email").text("L'email n'est pas valide");
                    isValid = false;
                }

                // Validation du champ "Téléphone" (facultatif mais doit être valide s'il est rempli)
                if ($("#phone").length && phone !== "") {
                    if (!/^\d{10}$/.test(phone)) {
                        $("#error-phone").text("Le numéro de téléphone doit contenir 10 chiffres.");
                        isValid = false;
                    }
                }

                // Validation du champ "CV" (obligatoire)
                if ($("#cv").length && cv === "") {
                    $("#error-cv").text("Veuillez télécharger votre CV.");
                    isValid = false;
                } else if ($("#cv").length) {
                    let allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
                    if (!allowedExtensions.test(cv)) {
                        $("#error-cv").text("Format de fichier invalide. Veuillez choisir un PDF ou un fichier Word.");
                        isValid = false;
                    }
                }


                if (isValid) {
                    alert("Formulaire soumis avec succès !");
                    this.submit();
                }
            });
        });
    </script>

<?php
get_footer();
?>