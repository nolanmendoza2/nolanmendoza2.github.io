<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $to = "nolanmendoza2@gmail.com";
    $subject = "New Message from Contact Form";
    $headers = "From: nolanmendoza2@yahoo.com"; // Replace with your website's email

    // Send email
    mail($to, $subject, $message, $headers);
}
?>

