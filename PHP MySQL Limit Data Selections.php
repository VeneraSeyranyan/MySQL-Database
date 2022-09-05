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
// sql to delete a record
$sql = "SELECT * FROM MyTB LIMIT 3 OFFSET 2";
//OR $sql = "SELECT * FROM MyTB LIMIT 2, 3"; Notice that the numbers are reversed when you use a comma
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>