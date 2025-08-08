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
                <li><strong>Backend Developer intern</strong> at Skye8 tech company <?php echo date('M-d:Y') ?></li>
            </ul>
        </div>
    </section>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Intern at <strong>SKYE8 TECH COMPANY</strong></h2>
                <P>  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                
         </div>
         wanna know more about 
    </section>
    <p style="color: skyblue;">At SKYE8 we LIVE THE FUTURE! <a href="https://Skye8tech.com">read more</a></p>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Student at <strong><abbr>SHIBUST</abbr></strong></h2>
                <P>  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
         </div>
    </section>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Acquired Driving licens at <strong> DIGITAL DRIVING SCHOOL</strong></h2>
                <P>  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
         </div>
    </section>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Student  <strong><abbr>N</abbr></strong></h2>
                <P>  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
         </div>
    </section>
    <hr>
    
    <footer> <p> <?php include 'includes/footer.php'; ?></footer>
</body>
</html>