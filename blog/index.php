<?php 
//database connection

require_once("../includes/config.php");


$query= "SELECT * FROM Blogs ORDER BY id DESC";
$result = mysqli_query($conn, $query);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Blog - Website </title>
</head>
<body>
     <?php include '../includes/header.php'; ?>
    <header class="header">
      <div class="container">
        <div class="content">
          <div>
            <p class="badge">Our blog</p>
            <h1>Resources and insights</h1>
            <p>
              The latest industry news, interviews, technologies, and resources.
            </p>
          </div>
          <input class="search-bar" type="search" placeholder="Search...." />
        </div>
      </div>
    </header>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<p><small>Posted on " . $row['created_at'] . "</small></p>";
}

mysqli_close($conn);
?>
  <?php include '../includes/footer.php'; ?>
</body>
</html>
