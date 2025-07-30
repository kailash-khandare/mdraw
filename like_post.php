<?php
session_start();

// Connect to database
$conn = new mysqli("localhost", "root", "", "drawing");
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

// Use dummy user_id if not logged in
$user_id = $_SESSION['user_id'] ?? 1;
$post_id = $_POST['post_id'] ?? null;

if ($user_id && $post_id) {
    // Check if user already liked this post
    $stmt = $conn->prepare("SELECT id FROM likes WHERE user_id = ? AND post_id = ?");
    $stmt->bind_param("ii", $user_id, $post_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        // Not yet liked: Insert like
        $insert = $conn->prepare("INSERT INTO likes (user_id, post_id) VALUES (?, ?)");
        $insert->bind_param("ii", $user_id, $post_id);
        $insert->execute();
        $insert->close();
    }

    $stmt->close();
}

$conn->close();
header("Location: view.php");
exit;
?>
