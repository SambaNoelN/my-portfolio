<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');

    // Simple validation
    if ($title && $content) {
        // Here you would typically save to a database
        // For demonstration, we'll just show a success message
        $success = "Blog post created successfully!";
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { max-width: 500px; margin: auto; }
        input, textarea { width: 100%; padding: 8px; margin: 8px 0; }
        button { padding: 10px 20px; }
        .message { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Create a New Blog Post</h2>
    <?php if (!empty($success)): ?>
        <p class="message"><?= htmlspecialchars($success) ?></p>
    <?php elseif (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="8" required></textarea>

        <button type="submit">Create Post</button>
    </form>
</body>
</html>