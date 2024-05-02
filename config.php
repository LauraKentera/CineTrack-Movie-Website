<?php
// MySQL connection parameters

// Constants for local database connection
const DB_HOSTNAME = 'localhost'; // Hostname or IP address of the database server
const DB_PORT = '3308'; // Default MySQL port
const DB_USER = 'root'; // Database username
const DB_PASSWORD = ''; // Database password
const DB_DATABASE = 'movies_database'; // Name of the database

// Example database hosted on serenity.rit.edu (your code must be on serenity for this to work)
// you see host is localhost, this mean code must be on serenity to access it's local database
// const DB_HOSTNAME = 'localhost';
// const DB_PORT = '3308';
// const DB_USER = ''; //eg. ab1234
// const DB_PASSWORD = ''; // passowrd from my.cnf file in your serenity home directory
// const DB_DATABASE = ''; // eg. ab1234

$conn = mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD,  DB_DATABASE, DB_PORT);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
