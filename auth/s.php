<?php
// Database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modtestone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['image'])) {
    $file = $_FILES['image'];

    // File details
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Determine file extension
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            // Generate a unique filename to avoid overwriting existing files
            $newFileName = uniqid('', true) . "." . $fileExt;
            $fileDestination = "uploadedImg/" . $newFileName;
            $dbSrc = "src/" . $newFileName;

            move_uploaded_file($fileTmpName, $fileDestination);

            // Insert the image source into the database
            $sql = "INSERT INTO images003 (src) VALUES ('$dbSrc')";
            if ($conn->query($sql) === true) {
                echo "Image uploaded and stored in the database.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Image Uploader</title>
</head>
<body>
    <h1>Image Uploader</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" id="uploadImage">
        <img id="preview" src="" alt="Image Preview" style="max-width: 300px; max-height: 300px;">
        <input type="submit" value="Upload">
    </form>

    <script>
        const uploadImage = document.getElementById('uploadImage');
        const preview = document.getElementById('preview');

        uploadImage.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
