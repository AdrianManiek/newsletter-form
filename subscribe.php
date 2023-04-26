<link rel="stylesheet" href="style.css">
<?php
if(isset($_POST['email'])) {
    $to = "example@example.com"; # Replace with your own email address
    $subject = "New subscriber";
    $email = $_POST['email'];
    $message = "You have a new subscriber: $email";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    echo "<p class='newsletter'>Thank you for subscribing!</p>";
}
?>
