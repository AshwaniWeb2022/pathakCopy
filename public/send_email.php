<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Construct email content
    $to = "ashwani.kumar@codmsoftware.com"; // Replace with the recipient's email address
    $subject = "Contact Form from website ";
    $headers = "From: $name";
    $body = "Name: $name\n\n Email: $email\n\n Phone no: $phone\n\n Message: $message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'echo "<script>alert(\'Thank you for your message. We\'ll get back to you soon!\');';
        echo 'window.location.href = "contact";</script>';
    } else {
        echo 'echo "<script>alert(\'Failed to send email. Please try again later.\');';
        echo 'window.location.href = "contact";</script>';
    }
}
?>
