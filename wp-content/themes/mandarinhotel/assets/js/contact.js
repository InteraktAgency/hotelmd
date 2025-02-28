jQuery(document).ready(function () {
    $("#contactForms").submit(function (event) {
        event.preventDefault();  
        console.log('goo');
        $(".error-msg").text("");

        let subject = $("#subject").val().trim();
        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let isValid = true;

        if (subject === "") {
            $("#error-subject").text("Le sujet est obligatoire");
            isValid = false;
        }

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
                        console.log(response); 
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