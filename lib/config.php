<?php

// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'modtestone');

// Establish database connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
