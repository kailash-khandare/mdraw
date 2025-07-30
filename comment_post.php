<?php
session_start();
$conn = new mysqli("localhost", "root", "", "drawing");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'] ?? 1;
$post_id = $_POST['post_id'] ?? null;
$comment = trim($_POST['comment'] ?? '');

if ($post_id && !empty($comment)) {
    $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $post_id, $user_id, $comment);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
header("Location: view.php");
exit;
?>
