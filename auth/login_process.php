<?php
session_start();

// Database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modtestone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve the stored hashed password from the database
    $sql = 'SELECT id, name, email, password FROM users_auth WHERE email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $name, $dbEmail, $dbPasswordHash);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $dbPasswordHash)) {
        // Passwords match; user is authenticated
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $name;

        // Redirect to the dashboard or a protected page
        header('Location: dashboard.php');
    } else {
        // Passwords don't match; show an error message
        echo "Invalid email or password.";
    }
}

$conn->close();
?>
