<?php
// Database connection settings
include_once("includes/config.php");

// Get post ID from query string
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id < 1) {
    die('Invalid post ID.');
}

// Fetch the blog post
$stmt = $pdo->prepare('SELECT * FROM blog_posts WHERE id = ?');
$stmt->execute([$id]);
$post = $stmt->fetch();

if (!$post) {
    echo '<h2>Post not found.</h2>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($post['title']); ?> - Blog Post</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><em>Posted on <?php echo htmlspecialchars($post['created_at']); ?></em></p>
    <div>
        <?php echo nl2br(htmlspecialchars($post['content'])); ?>
    </div>
    <p><a href="index.php">Back to Blog</a></p>
</body>
</html>