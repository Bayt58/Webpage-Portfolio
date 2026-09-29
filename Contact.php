<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ContactUS";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];
$person = $_POST['person'];
$query = $_POST['query'];


$sql = "INSERT INTO ContactUS (FirstName, LastName, Email, Person, query) VALUES ('$firstName', '$lastName', '$email', '$person', '$query')";


if ($conn->query($sql) === TRUE) {
    setcookie("user_firstname", $firstName, time() + 86400, "/");
    setcookie("user_lastname", $lastName, time() + 86400, "/");
    setcookie("user_email", $email, time() + 86400, "/");

    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
