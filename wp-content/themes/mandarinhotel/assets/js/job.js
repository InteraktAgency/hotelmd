jQuery(document).ready(function($) {
    $("#jobForm").submit(function(event) {
        event.preventDefault();

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

        if (email === "") {
            $("#error-email").text("L'email est obligatoire");
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            $("#error-email").text("L'email n'est pas valide");
            isValid = false;
        }

        if ($("#phone").length && phone !== "") {
            if (!/^\d{10}$/.test(phone)) {
                $("#error-phone").text("Le numéro de téléphone doit contenir 10 chiffres.");
                isValid = false;
            }
        }

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


                var formData = new FormData(this);

                formData.append('action', 'handle_job_form');
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
                                text: "votre candidature a été envoyée avec succès",
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
            formData.append('action', 'handle_job_form');
            formData.append('security', ajax_object.security); 
        }
    });
});
