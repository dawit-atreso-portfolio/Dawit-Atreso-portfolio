<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "atresodawit19@gmail.com"; 
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Thank you for contacting me! Your message has been sent.</h1>";
    } else {
        echo "<h1>Sorry, your message could not be sent. Please try again later.</h1>";
    }
}
?>
