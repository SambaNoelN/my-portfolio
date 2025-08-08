<?php  
//database connection
 require_once("../includes/config.php");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    // Assuming you have a database connection in $conn
    $query = "INSERT INTO Blogs (title, content) VALUES ('$title', '$content')";
    
    if(mysqli_query($conn, $query)) {
        echo "Blog post created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
</head>
<body>
    <h1>Create Blog Post</h1>
    <form action="" method="POST">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" name="submit">Create Blog Post</button>
    </form>
</body>
</html>