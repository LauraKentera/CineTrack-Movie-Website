<?php
// MySQL connection parameters

// if (!defined('DB_HOSTNAME')) {
//     define('DB_HOSTNAME', 'localhost'); // Hostname or IP address of the database server
// }

// if (!defined('DB_PORT')) {
//     define('DB_PORT', '3308'); // Default MySQL port
// }

// if (!defined('DB_USER')) {
//     define('DB_USER', 'root'); // Database username
// }

// if (!defined('DB_PASSWORD')) {
//     define('DB_PASSWORD', ''); // Database password
// }

// if (!defined('DB_DATABASE')) {
//     define('DB_DATABASE', 'movies_database'); // Name of the database
// }


// Example database hosted on serenity.rit.edu (your code must be on serenity for this to work)
// you see host is localhost, this mean code must be on serenity to access it's local database
const DB_HOSTNAME = 'localhost';
const DB_PORT = '3308';
const DB_USER = 'kp6694'; //eg. ab1234
const DB_PASSWORD = 'Shogun6$rurally'; // passowrd from my.cnf file in your serenity home directory
const DB_DATABASE = 'kp6694'; // eg. ab1234

$conn = mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
