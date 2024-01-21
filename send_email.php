<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email recipient (replace with your actual email address)
$to = 'info@modusmsp.com';

// Email subject
$subject = 'New contact from website';

// Email body
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email using PHP's mail() function
if (mail($to, $subject, $body)) {
    // Redirect to a success page or display a success message
    header('Location: contact-success.html');
    exit();
} else {
    // Handle email sending error
    echo "Error sending email";
}
?>