<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header><?php include 'includes/header.php'; ?></header>
    <section class="about-section">
        <div class="about-image">
            <img src="data/dom.png" alt="Profile Image">
        </div>
        <div class="about-details">
            <h2>About Me</h2>
            <p>
                Hi, I'm Samba noel, a passionate web developer with experience in PHP, JavaScript, and modern frontend frameworks. I love building clean, efficient, and user-friendly web applications.
            </p>
            <h3>Experience</h3>
            <ul class="experience-list">
                <li><strong>Web Developer intern</strong> at Skye8 tech company (2025 - Present)</li>
                <li><strong>Frontend Developer</strong> at ABC Studio (2023 - 204)</li>
                <li><strong>Freelance Projects</strong> (2024 - 2025)</li>
            </ul>
        </div>
    </section>
    <footer> <p> <?php include 'includes/footer.php'; ?></footer>
</body>
</html>