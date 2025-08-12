<?php  
    session_start();
    if (isset($_POST["language"])) {$_SESSION["language"] = $_POST["language"];}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <marquee style="position: stick; top: 0;">Present intern at <b style="color: skyblue;">skye8 tech company</b> &#128526;track:  <b style="color:black">back-end dev</b> <?php echo date('D, j M Y, :H:i:s') ?></marquee>
    <header style="position: stick; top: 0;"><?php include 'includes/header.php'; ?></header>
    
        <h1> <img src="data/dom.png" alt="image" style="border-radius: 50%; width:75px; height: 75px;">Welcome to My Portfolio</h1>
        <div class="intro">&#128526;
            Hi, I'm a passionate developer showcasing my latest projects and featured work. Explore below to see what I've been working on!
        </div>
        <h2>Featured projects</h2>
        <div class="featured-items">
            <div class="item">
                <div class="item-title">Project Alpha</div>
                <div class="item-desc">A web application for managing tasks efficiently with a modern UI.</div>
                <img src="data/project1.jpg" alt="project photo" width="100px" height="100px">
            </div>
            <div class="item">
                <div class="item-title">Design Portfolio</div>
                <div class="item-desc">A collection of my best graphic and UI/UX design work.">
                <a href="includes/portfolio.php"><img src="data/project2.jpg" alt="project photo" width="100px" height="100px"></a>
                
            </div>
            <div class="item">
                <div class="item-title">Open Source Contributions</div>
                <div class="item-desc">Highlights of my contributions to open source projects on GitHub.</div>
                <img src="data/project1.jpg" alt="project photo" width="100px" height="100px">
            </div>
            <div class="item">
                <div class="item-title">school management system</div>
                <div class="item-desc">A system that manages all student can register, login, and recover password when forgetton</div>
                <img src="data/project2.jpg" alt="project photo" width="100px" height="100px">
            </div>
           
        </div>
    <footer><?php include 'includes/footer.php'; ?></footer>
</body>
</html>