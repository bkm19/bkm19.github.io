<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "brianmarques1999@gmail.com";

    // Set the email subject
    $subject = "New message from your website";

    // Construct the email body
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
