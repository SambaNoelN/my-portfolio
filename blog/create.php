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