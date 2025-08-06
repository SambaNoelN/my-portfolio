<?php
// Database connection (update with your credentials)
 include_once 'includes/config.php';

// Get post ID from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch post data
$post = ['title' => '', 'content' => ''];
if ($id > 0) {
    $stmt = $conn->prepare("SELECT title, content FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($post['title'], $post['content']);
    $stmt->fetch();
    $stmt->close();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if ($title && $content) {
        $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $content, $id);
        $stmt->execute();
        $stmt->close();
        echo "<p>Post updated successfully. <a href='view.php?id=$id'>View post</a></p>";
        exit;
    } else {
        echo "<p style='color:red;'>Please fill in all fields.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>
    <h2>Edit Blog Post</h2>
    <form method="post">
        <label>Title:<br>
            <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </label><br><br>
        <label>Content:<br>
            <textarea name="content" rows="10" cols="50" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </label><br><br>
        <button type="submit">Update Post</button>
    </form>
</body>
</html>