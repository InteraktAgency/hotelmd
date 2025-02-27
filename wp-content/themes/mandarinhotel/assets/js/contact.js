jQuery(document).ready(function () {
    $("#contactForm").submit(function (event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        // Réinitialisation des messages d'erreur
        $(".error-msg").text("");

        // Récupération des valeurs des champs
        let subject = $("#subject").val().trim();
        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let isValid = true;

        // Validation du champ "Subject"
        if (subject === "") {
            $("#error-subject").text("Le sujet est obligatoire");
            isValid = false;
        }

        // Validation du champ "Name"
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

        // Si toutes les validations passent, on soumet le formulaire
        if (isValid) {

                var formData = new FormData(this);

                formData.append('action', 'send_contact_form');
                formData.append('security', ajax_object.security);

                $.ajax({
                    url: ajax_object.ajaxurl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response); // Vérifier la réponse ici
                        if (response.success) {
                            Swal.fire({
                                title: "Félicitations!",
                                text: "votre message a été envoyée avec succès",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            alert(response.data);
                        }
                    }

                });
                formData.append('action', 'send_contact_form');
                formData.append('security', ajax_object.security);

        }
    });
});