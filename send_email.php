<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ositajason@gmail.com";
    $subject = "New Inquiry from CodingYaar";
    
    // Updated to match your HTML input names
    $name = $_POST['full_name'];
    $email = $_POST['email_address'];
    $project = $_POST['project_type'];
    $message = $_POST['project_details'];

    $body = "Name: $name\nEmail: $email\nProject: $project\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
