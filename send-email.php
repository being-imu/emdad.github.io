<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $project = htmlspecialchars($_POST['project']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'emdad.imu@gmail.com'; // Replace with your email address
    $from = 'webmaster@yourdomain.com'; // Replace with your domain email address

    $headers = "From: $from" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $email_subject = "Contact Form Submission: $subject";
    $email_body = "<h2>Contact Form Submission</h2>
                   <p><strong>Name:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Phone:</strong> $phone</p>
                   <p><strong>Project:</strong> $project</p>
                   <p><strong>Message:</strong><br>$message</p>";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
