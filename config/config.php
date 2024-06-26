<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klas4s22_578146";
// ^ eigen school server wachtwoord en naam

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

