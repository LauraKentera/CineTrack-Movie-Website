<?php
    const HOSTNAME = 'localhost';
    const PORT = '3306';
    const USERNAME = ''; // add your username, ex. abc1234
    const PASSWORD = ''; // add your .my.cnf password
    const DATABASE = 'movies';

    $connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE, PORT);

    if ($connection -> connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $connection->close();
    
?>