<?php

// Connect to database
require '.././lib/config.php';

// Initialize variables
$errors = [];

// Validate form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $countryCode = trim($_POST['countryCode']);
  $mobile_number = $_POST['mobile_number'];
  $password = trim(md5($_POST['password']));
  $confirm_password = trim(md5($_POST['confirm_password']));

  // Check name
  if (empty($name)) {
    $errors['name'] = 'Please enter your full name';
  }

  // Check password
  if (empty($email)) {
    $errors['email'] = 'Please enter a email';
  }






// Check mobile number
  $valid_international_pattern = '/^(?:\+|\d)[\d\s-]+$/';
  if (empty($mobile_number)) {
    $errors['mobile_number'] = 'Please enter your mobile number';
  } elseif (!preg_match($valid_international_pattern, $mobile_number)) {
    $errors['mobile_number'] = 'Please enter a valid mobile number';
  }

  // Remove extra characters (spaces, dashes, parentheses) from the mobile_number
  $clean_mobile_number = preg_replace('/[\s\-\(\)]+/', '', $mobile_number);

  // Remove the country code from the mobile_number
  $country_code_pattern = '/^\+?(' . preg_quote($countryCode, '/') . ')/';
  $clean_mobile_number = preg_replace($country_code_pattern, '', $clean_mobile_number);

  // If the number starts with '0', remove it
  if (substr($clean_mobile_number, 0, 1) == '0') {
    $clean_mobile_number = substr($clean_mobile_number, 1);
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
  }


  // if ($password !==) {
  //   # code...
  // } else {
  //   # code...
  // }
  
  // If there are no errors, insert data into users table
  if (empty($errors)) {
    $sql = "INSERT INTO user_two (name, email, countryCode, mobile_number, password, confirm_password) VALUES ('$name', '$email', '$countryCode', '$clean_mobile_number', '$password', '$confirm_password')";

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
