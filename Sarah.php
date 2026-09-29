<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    mail("your_email@example.com", $subject, $message, "From: $email");

    echo "Thank you for your submission!";
} else {echo "Submittionn Error";}
?>