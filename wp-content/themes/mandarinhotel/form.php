<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_form'])) {
    $nom = filter_var(trim($_POST['nom']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "youssef@interaktagency.com"; 
    $subject = "Nouveau message de $nom";
    
    $headers = "From: Mandarinhotel <no-reply@mandarinhotel.com>\r\n";
    $headers .= "Reply-To: $nom <$email>\r\n";

    $body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";

    ini_set('sendmail_from', 'no-reply@mandarinhotel.com');

    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color:green;'>Message envoyé avec succès !</p>";
    } else {
        echo "<p style='color:red;'>Échec de l'envoi du message.</p>";
    }
}
?>

<form method="post" action="forms.php">
    <label for="nom">Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" name="email" required><br><br>

    <label for="message">Message :</label><br>
    <textarea name="message" required></textarea><br><br>

    <input type="hidden" name="contact_form" value="1">
    <input type="submit" value="Envoyer">
</form>
