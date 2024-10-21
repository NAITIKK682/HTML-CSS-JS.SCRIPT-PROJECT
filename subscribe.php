<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Recipient email
    $to = "naitikk682@gmail.com"; // Your email address
    $subject = "New Subscription";
    $message = "A new user has subscribed with the email: $email";
    $headers = "From: noreply@yourdomain.com"; // Set a "from" address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Subscription successful! Check your email for confirmation.";
    } else {
        echo "There was an error processing your subscription.";
    }
}
?>
