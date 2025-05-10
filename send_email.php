<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST['email'];
    $message = $_POST['message'];

    $to = "ykh6368@gmail.com"; // Replace with your email address
    $subject = "New Message from Website";
    $body = "Message from $userEmail:\n\n$message";

    $headers = "From: $userEmail";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Email sent successfully!";
    } else {
        echo "❌ Failed to send email.";
    }
}
?>
