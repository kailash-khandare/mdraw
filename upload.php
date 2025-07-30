<?php
$host = "localhost";
$dbname = "drawing"; // ✅ correct
$user = "root";
$pass = "";

// DB connect
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$title = $_POST['title'];
$name = $_POST['name'];
$image = $_FILES['image'];

if ($image['error'] === UPLOAD_ERR_OK) {
  $imgName = time() . '_' . basename($image['name']);
  $uploadDir = 'uploads/';
  $uploadPath = $uploadDir . $imgName;

  if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO images (title, name, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $name, $uploadPath);

    if ($stmt->execute()) {
      echo "<div style='padding: 20px; text-align: center; font-family: Arial;'>";
      echo "<h3>✅ Uploaded Successfully</h3>";
      echo "<p><strong>Title:</strong> " . htmlspecialchars($title) . "</p>";
      echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
      echo "<img src='$uploadPath' alt='Uploaded Image' style='max-width: 400px; height: auto; border: 1px solid #ccc; padding: 5px;'>";
      echo "<br><br><a href='upload.php' class='btn btn-primary'>Upload Another</a>";
      echo "</div>";
    } else {
      echo "❌ DB insert failed.";
    }
  } else {
    echo "❌ Failed to save file.";
  }
} else {
  echo "❌ Upload error.";
}
?>
