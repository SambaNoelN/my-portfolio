<?php
// delete.php

//database connection
include_once 'includes/config.php';

// Get post ID from query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Prepare and execute delete statement
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Post deleted successfully.";
    } else {
        echo "Error deleting post.";
    }
    $stmt->close();
} else {
    echo "Invalid post ID.";
}

$conn->close();
?>