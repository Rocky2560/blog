<?php
$errors = [];
$successMessage = $errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate subject and message
    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required";
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    }

    // If no validation errors, send email
    if (empty($errors)) {
        $to = "sudipmanandhar2560@gmail.com";  // Replace with the actual recipient email address
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = "From: " . $_POST["email"];

        $mailSuccess = mail($to, $subject, $message, $headers);
       
        if ($mailSuccess) {
            
            $successMessage = "Email sent successfully!";
        } else {
            $errorMessage = "Failed to send email. Please try again later.";
             echo "hello";
        }
    }
}
?>