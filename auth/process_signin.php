<?php require '../lib/config.php'; ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE mobile_number = '$mobile_number' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        
        // Perform validation here
        // ...

        // Redirect to success page
        header('Location: .././success.php');
        exit;
    } else {
        // If the user enters incorrect login information, redirect them to the signin page with an error message
        header('Location: ./signin.php?error=1');
        exit;
    }
}

// If the user navigates to this page without submitting the form, redirect them to the index page
header('Location: ./signin.php');
exit;

?>
