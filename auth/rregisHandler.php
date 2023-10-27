<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=mod000Auth', 'root', '');

// Start a session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['logged_in'])) {
    // Redirect the user to the home page
    header('Location: index.php');
    exit();
}

// Process the sign-in form
if (isset($_POST['sign-in'])) {
    // Validate the sign-in form data
    $errors = [];
    if (empty($_POST['username'])) {
        $errors[] = 'Username is required.';
    }
    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    }

    // If there are no errors, try to log the user in
    if (empty($errors)) {
        // Get the user's credentials from the database
        $sql = 'SELECT * FROM users WHERE username = :username';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        $user = $stmt->fetch();

        // If the user is not found, display an error message
        if (!$user) {
            $errors[] = 'Invalid username or password.';
        }

        // If the user is found, verify their password
        else {
            if (!password_verify($_POST['password'], $user['password'])) {
                $errors[] = 'Invalid username or password.';
            }

            // If the password is valid, log the user in
            else {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect the user to the home page
                header('Location: index.php');
                exit();
            }
        }
    }
}

// Process the login form
if (isset($_POST['login'])) {
    // Validate the login form data
    $errors = [];
    if (empty($_POST['email'])) {
        $errors[] = 'Email is required.';
    }
    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    }

    // If there are no errors, try to log the user in
    if (empty($errors)) {
        // Get the user's credentials from the database
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->execute();
        $user = $stmt->fetch();

        // If the user is not found, display an error message
        if (!$user) {
            $errors[] = 'Invalid email or password.';
        }

        // If the user is found, verify their password
        else {
            if (!password_verify($_POST['password'], $user['password'])) {
                $errors[] = 'Invalid email or password.';
            }

            // If the password is valid, log the user in
            else {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect the user to the home page
                header('Location: index.php');
                exit();
            }
        }
    }
}

// Display any errors
if (!empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
}

?>