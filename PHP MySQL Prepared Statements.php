<?php
$servername = "localhost";
$username = "root";
$password = "Pass123!@#";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyTB(firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Bavakan";
$lastname = "Bavakanyan";
$email = "bav@example.com";
$stmt->execute();

/*$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();*/
echo "New records created successfully";

$stmt->close();
$conn->close();
