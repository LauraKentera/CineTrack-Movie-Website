<?php
const HOSTNAME = 'localhost';
const PORT = '3308';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'movies_database';

$connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE, PORT);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}