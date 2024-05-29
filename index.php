<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $number = $_POST['Number'];
    $message = $_POST['Message'];

    // Set up the email
    $to = "maple.rahim1@gmail.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
