<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "portfolio");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Helper: Escape and sanitize
function esc($conn, $str) {
    return htmlspecialchars(mysqli_real_escape_string($conn, $str));
}

// Handle Create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $title = esc($conn, $_POST['title'] ?? '');
    $content = esc($conn, $_POST['content'] ?? '');
    if ($title && $content) {
        $sql = "INSERT INTO blogs (title, content) VALUES ('$title', '$content')";
        mysqli_query($conn, $sql);
        header("Location: new.php");
        exit;
    } else {
        $error = "Title and content required.";
    }
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $title = esc($conn, $_POST['title'] ?? '');
    $content = esc($conn, $_POST['content'] ?? '');
    if ($title && $content) {
        $sql = "UPDATE blogs SET title='$title', content='$content' WHERE id=$id";
        mysqli_query($conn, $sql);
        header("Location: new.php");
        exit;
    } else {
        $error = "Title and content required.";
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM blogs WHERE id=$id");
    header("Location: new.php");
    exit;
}

// Fetch for Edit
$edit_blog = null;
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $res = mysqli_query($conn, "SELECT * FROM blogs WHERE id=$id");
    $edit_blog = mysqli_fetch_assoc($res);
}

// Fetch for View
$view_blog = null;
if (isset($_GET['view'])) {
    $id = intval($_GET['view']);
    $res = mysqli_query($conn, "SELECT * FROM blogs WHERE id=$id");
    $view_blog = mysqli_fetch_assoc($res);
}

// Fetch all blogs
$blogs = mysqli_query($conn, "SELECT * FROM blogs ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Manager</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { margin-bottom: 30px; }
        .error { color: red; }
        .blog { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
        .actions a { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Blog Manager</h1>

    <?php if (!empty($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <?php if ($edit_blog): ?>
        <h2>Edit Blog</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $edit_blog['id'] ?>">
            <input type="text" name="title" value="<?= htmlspecialchars($edit_blog['title']) ?>" placeholder="Title" required><br><br>
            <textarea name="content" rows="5" cols="40" placeholder="Content" required><?= htmlspecialchars($edit_blog['content']) ?></textarea><br><br>
            <button type="submit" name="update">Update Blog</button>
            <a href="new.php">Cancel</a>
        </form>
    <?php elseif ($view_blog): ?>
        <h2><?= htmlspecialchars($view_blog['title']) ?></h2>
        <div><?= nl2br(htmlspecialchars($view_blog['content'])) ?></div>
        <a href="new.php">Back</a>
    <?php else: ?>
        <h2>New Blog</h2>
        <form method="post">
            <input type="text" name="title" placeholder="Title" required><br><br>
            <textarea name="content" rows="5" cols="40" placeholder="Content" required></textarea><br><br>
            <button type="submit" name="create">Create Blog</button>
        </form>
    <?php endif; ?>

    <h2>All Blogs</h2>
    <?php while ($row = mysqli_fetch_assoc($blogs)): ?>
        <div class="blog">
            <strong><?= htmlspecialchars($row['title']) ?></strong>
            <div class="actions">
                <a href="new.php?view=<?= $row['id'] ?>">View</a>
                <a href="new.php?edit=<?= $row['id'] ?>">Edit</a>
                <a href="new.php?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this blog?')">Delete</a>
            </div>
        </div>
    <?php endwhile; ?>

</body>
</html>