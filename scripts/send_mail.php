<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if ($email && $name && $message) {
        $to = "vincent.loucel.free@gmail.com";
        $subject = "New contact form submission from " . $name;
        $headers = "From: " . $email;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message!";
        } else {
            echo "Oops! Something went wrong, please try again.";
        }
    } else {
        echo "Please fill in all fields correctly.";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>
