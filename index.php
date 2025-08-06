<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<body>
    <marquee>Present intern at <b style="color: skyblue;">skye8 tech company</b> track:  <b style="color:black">back-end dev</b></marquee>
    <header><?php include 'includes/header.php'; ?></header>
    <div class="container">
        <h1>Welcome to My Portfolio</h1>
        <div class="intro">
            Hi, I'm a passionate developer showcasing my latest projects and featured work. Explore below to see what I've been working on!
        </div>
        <h2>Featured Items</h2>
        <div class="featured-items">
            <div class="item">
                <div class="item-title">Project Alpha</div>
                <div class="item-desc">A web application for managing tasks efficiently with a modern UI.</div>
            </div>
            <div class="item">
                <div class="item-title">Design Portfolio</div>
                <div class="item-desc">A collection of my best graphic and UI/UX design work.</div>
            </div>
            <div class="item">
                <div class="item-title">Open Source Contributions</div>
                <div class="item-desc">Highlights of my contributions to open source projects on GitHub.</div>
            </div>
        </div>
    </div>
    <footer><?php include 'includes/footer.php'; ?></footer>
</body>
</html>