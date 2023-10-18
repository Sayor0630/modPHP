<?php

// Connect to database
require '.././lib/config.php';

// Initialize variables
$errors = [];

// Validate form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $mobile_number = trim($_POST['mobile_number']);
  $password = trim($_POST['password']);
  $confirm_password = trim($_POST['confirm_password']);

  // Check name
  if (empty($name)) {
    $errors['name'] = 'Please enter your full name';
  }

  // Check mobile number
  if (empty($mobile_number)) {
    $errors['mobile_number'] = 'Please enter your mobile number';
  } elseif (!preg_match('/^\d{11}$/', $mobile_number)) {
    $errors['mobile_number'] = 'Please enter a valid 11-digit mobile number';
  }

  // Check password
  if (empty($password)) {
    $errors['password'] = 'Please enter a password';
  } elseif (strlen($password) < 8) {
    $errors['password'] = 'Password must be at least 8 characters long';
  }

  // Check confirm password
  if (empty($confirm_password)) {
    $errors['confirm_password'] = 'Please confirm your password';
  } elseif ($password != $confirm_password) {
    $errors['confirm_password'] = 'Passwords do not match';
  }

  // If there are no errors, insert data into users table
  if (empty($errors)) {
    $sql = "INSERT INTO users (name, mobile_number, password, confirm_password) VALUES ('$name', '$mobile_number', '$password', '$confirm_password')";

    if (mysqli_query($conn, $sql)) {
      // Redirect to thank-you page
      header('Location: .././thankyou.php');
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

// Close database connection
mysqli_close($conn);
?>

<!-- Display errors (if any) -->
<?php if (!empty($errors)) : ?>
  <ul class="errors">
    <?php foreach ($errors as $error) : ?>
      <li><?= $error ?></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
