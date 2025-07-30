
<?php
session_start();
require_once 'connection.php';

$conn = db_conn();

$user_id = $_SESSION['user_id'] ?? 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $caption = $_POST['caption'] ?? '';
    $image = $_FILES['image'];

    if ($image['error'] === UPLOAD_ERR_OK) {
        $imageName = uniqid() . '_' . basename($image['name']);
        $uploadDir = 'uploads/posts/';
        $uploadPath = $uploadDir . $imageName;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
            $stmt = $conn->prepare("INSERT INTO post (user_id, image, caption) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $user_id, $uploadPath, $caption);
            $stmt->execute();
            header("Location: index.php");
            exit();
        } else {
            echo "Image upload failed.";
        }
    } else {
        echo "Invalid image.";
    }
}
?>
