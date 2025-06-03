// jQuery(document).ready(function () {
//     $("#contactForms").submit(function (event) {
//         event.preventDefault();
//         $(".error-msg").text("");

//         let subject = $("#subject").val().trim();
//         let name = $("#name").val().trim();
//         let email = $("#email").val().trim();
//         let message = $("textarea[name='message']").val().trim();
//         let isValid = true;

//         if (subject === "") {
//             $("#error-subject").text("Le sujet est obligatoire");
//             isValid = false;
//         }

//         if (name === "") {
//             $("#error-name").text("Le nom est obligatoire");
//             isValid = false;
//         }

//         if (email === "") {
//             $("#error-email").text("L'email est obligatoire");
//             isValid = false;
//         } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
//             $("#error-email").text("L'email n'est pas valide");
//             isValid = false;
//         }

//         if (isValid) {
//             let formData = new FormData();
//             formData.append('subject', subject);
//             formData.append('name', name);
//             formData.append('email', email);
//             formData.append('message', message);
//             formData.append('action', 'send_contact_form');
//             formData.append('security', ajax_object.security);

//             $.ajax({
//                 url: ajax_object.ajaxurl,
//                 type: 'POST',
//                 data: formData,
//                 processData: false,
//                 contentType: false,
//                 dataType: 'json',
//                 success: function (response) {
//                     if (response.success) {
//                         Swal.fire("Félicitations !", "Votre message a été envoyé avec succès.", "success").then(() => {
//                             location.reload();
//                         });
//                     } else {
//                         Swal.fire("Erreur", response.data, "error");
//                     }
//                 },
//                 error: function (xhr, status, error) {
//                     Swal.fire("Erreur AJAX", error, "error");
//                     console.error("AJAX ERROR:", xhr.responseText);
//                 }
//             });
//         }
//     });
// });
