<?php 
include("../includes/config.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM Blogs WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
}

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE Blogs SET title='$title', content='$content' WHERE id='$id'";

    mysqli_query($conn, $query);
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit blog</title>
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
    <h1>Updat post</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
             <label for="title">Title:</label>
             <input type="text" name="title" value="<?php echo $row['title'];  ?>">
        </div>
        <div>
             <label for="content">Content:</label>
             <textarea id="text" name="content" value="<?php echo $row['content']; ?>">
        </div>
        <button type="submit" name="submit">Update post</button>
        <div class="width: fit-content; background: #0056b3;"><a href="index.php">Go backto post</a></div>
    </form>
    <footer><?php include '../includes/footer.php'; ?></footer>
</body>
</html>