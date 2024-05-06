<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST["user"];
    $message = $_POST["message"];
    
    $sql_insert = "INSERT INTO `comment`(`user`, `message`) VALUES ('$from','$message')";
    if ($conn->query($sql_insert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}

$sql_select = "SELECT *, DATE(date) AS only_date FROM comment";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<td>" . "• " . $row['user'] . ": " . $row['message'] . " @ " . $row['only_date']. "<br>";
    }
} else {
    echo "Be The First To Comment!";
}

$conn->close();
