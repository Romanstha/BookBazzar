<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if email is set and not empty
  if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = $_POST["email"];

    // Send the email
    $to = $email;
    $subject = "Subscription Confirmation";
    $message = "Thank you for subscribing to our newsletter!";
    $headers = "From: your-email@example.com"; // Replace with your own email address

    if (mail($to, $subject, $message, $headers)) {
      echo "Email sent successfully!";
    } else {
      echo "Email sending failed.";
    }
  }
}
