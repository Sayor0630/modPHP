<?php
session_start();

// Check if the user is logged in (sessions are set)
if (isset($_SESSION['fullNameUser']) && isset($_SESSION['emailUser'])) {
    $username = $_SESSION['fullNameUser'];
    $email = $_SESSION['emailUser'];
    
    // Display the user's information
    echo "Welcome " . $username . "<br>";
    echo "Your email address is: " . $email;
} else {
    // Redirect or show an error message if the user is not logged in
    header('Location: signup.php'); // Redirect to the login page, change the URL as needed
    exit;
}
?>
