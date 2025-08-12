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
            <img src="data/sky.jpg" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Was an intern at <strong>Skye8 tech company</strong> in networking and cyber security</h2>
                <P>Networking and cyber security are critical components of modern computing working with  network protocols, network architecture and network devices</P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li>Using strong passwords</li>
                    <li>Keep software up-to-date</li>
                    <li>Implement firewalls and intrusion detection</li>
                </ul>
                
         </div>
         <div class="about-details">
            <h3>Certifications</h3>
         <ol>CompTIA security+</ol>
         <ol>cisco CCNA security</ol>
         <ol>CISSP</ol>
         </div>
    </section>
    <p style="color: skyblue;">At SKYE8 we LIVE THE FUTURE! <a href="https://Skye8.tech.com">read more</a></p>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Student at <strong><abbr>(SHIBUST)</abbr>Solidarity Higher Institute Of Business Science And Technology</strong></h2>
                <P>Igniting mind Inspirinng future  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li>Highly qualified lecturers</li>
                    <li></li>
                    <li></li>
                </ul>
         </div>
    </section>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="data/zion.jpg" alt="profile image">
        </div>
        <div class="about-details">
                <h2>Acquired Driving licens at <strong>Zion digital driving school</strong></h2>
                <P>At Zion digital driving school is an institution that provide training and instruction to individuals seeking to learn how to drive a vehicle  </P>
                <h3>Experience</h3>
                <ul class="experince-list">
                    <li>Importance of signs in the high way</li>
                    <li>High code and good driving conditions</li>
                    <li>Road safty</li>
                </ul>
         </div>
    </section>
    <hr>
    <section class="about-section">
        <div class="about-image">
            <img src="photo.png" alt="profile image">
        </div>
        <div class="about-details">
                <h2> <strong><abbr></abbr></strong></h2>
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