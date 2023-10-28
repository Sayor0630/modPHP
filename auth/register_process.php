<?php
// Connect to your database here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modtest002";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["signup-btn"])) { // Check if the registration button was clicked
    // Handle file upload
    $target_dir = "uploadedImg/";
    $target_file = $target_dir . uniqid() . "_" . basename($_FILES["imageUser"]["name"]);
    if (move_uploaded_file($_FILES["imageUser"]["tmp_name"], $target_file)) {
        $imagePath = $target_file;
    } else {
        echo "Image upload failed.";
        exit;
    }

    // Get user input
    $fullName = $_POST["fullNameUser"];
    $mobileNumber = '+880' . $_POST["mobile_numberUser"];
    $gender = $_POST["genderUser"];
    $grade = $_POST["gradeUser"];
    $religion = $_POST["religionUser"];
    $district = $_POST["districtUser"];
    $email = $_POST["emailUser"];
    $password = password_hash($_POST["passwordUser"], PASSWORD_DEFAULT);


    // Insert data into the database
    $sql = "INSERT INTO user_profile (fullNameUser, mobile_numberUser, genderUser, gradeUser, religionUser, districtUser, emailUser, passwordUser, profile_image) VALUES ('$fullName', '$mobileNumber', '$gender', '$grade', '$religion', '$district', '$email', '$password', '$imagePath')";

    if ($conn->query($sql) === TRUE) {


        // Store user information in sessions
        session_start();
        $_SESSION['fullNameUser'] = $fullName;
        $_SESSION['emailUser'] = $email;


        header('Location: h.php');

        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
