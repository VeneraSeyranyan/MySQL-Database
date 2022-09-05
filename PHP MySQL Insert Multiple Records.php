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

$sql = "INSERT INTO MyTB  (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyTB (firstname, lastname, email)
VALUES ('Mary', 'Maryan', 'mary@example.com');";
$sql .= "INSERT INTO MyTB (firstname, lastname, email)
VALUES ('Bagrat', 'Bagratyan', 'bagrat@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>