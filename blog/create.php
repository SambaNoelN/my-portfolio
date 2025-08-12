<?php  
//database connection
 require_once("../includes/config.php");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    
    
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
    <style>
            body {
                font-family: Arial, sans-serif;
                background: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                color: #333;
                margin-top: 40px;
                margin-bottom: 30px;
                font-size: 2.2em;
                letter-spacing: 1px;
            }
            form {
                background: #fff;
                max-width: 500px;
                margin: 0 auto;
                padding: 30px 40px 25px 40px;
                border-radius: 8px;
                box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            }
            form div {
                margin-bottom: 20px;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: 600;
                color: #444;
            }
            input[type="text"], textarea {
                width: 100%;
                padding: 10px 12px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 1em;
                background: #fafafa;
                transition: border-color 0.2s;
            }
            input[type="text"]:focus,input[type="file"], textarea:focus {
                border-color: #007bff;
                outline: none;
            }
            button[type="submit"] {
                background: #007bff;
                color: #fff;
                border: none;
                padding: 12px 28px;
                border-radius: 5px;
                font-size: 1em;
                font-weight: 600;
                cursor: pointer;
                transition: background 0.2s;
                margin-top: 10px;
                display: block;
                width: 100%;
            }
            button[type="submit"]:hover {
                background: #0056b3;
            }
        </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>
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
<div class="width: fit-content; background: #0056b3;"><a href="index.php">view post</a></div>
    </form>
    <footer><?php include("../includes/footer.php"); ?></footer>
</body>
</html>