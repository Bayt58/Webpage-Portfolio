<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ContactMe";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    if (empty($name) || empty($email) || empty($subject)) {
        echo "All fields are required.";
    } else {

        $to = "m7mdreyadimran@gmail.com"; 
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo "Your message has been sent successfully.";
        } else {
            echo "Something went wrong and we couldn't send your message.";
        }
    }
}
?>