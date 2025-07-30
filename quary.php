<?php
$host = "localhost";
$dbname = "drawing";
$user = "root";
$pass = "";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form data
$username = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$profilePic = $_FILES['profilePic'] ?? null;

// Simple validation
if ($username && $email && $password && $profilePic) {
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Upload profile pic
  $imgName = time() . '_' . basename($profilePic['name']);
  $uploadDir = 'uploads/';
  $uploadPath = $uploadDir . $imgName;

  if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  if (move_uploaded_file($profilePic['tmp_name'], $uploadPath)) {
    // Save to DB
    $stmt = $conn->prepare("INSERT INTO user (name, email, password, profile_pic) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashedPassword, $uploadPath);

    if ($stmt->execute()) {
      header("Location: view.php"); // Redirect after success
      exit();
    } else {
      echo "❌ Failed to save user.";
    }
  } else {
    echo "❌ Failed to upload image.";
  }
} else {
  echo "❌ All fields are required.";
}
?>


