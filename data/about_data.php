<?php

$aboutData = [
    'name' => 'Samba Noel',
    'title' => 'Web Developer',
    'description' => 'I am a passionate web developer with experience in PHP, JavaScript, and modern web technologies. I love building responsive and user-friendly websites.',
    'skills' => [
        'PHP',
        'JavaScript',
        'HTML5',
        'CSS3',
        'MySQL',
        'javascripts',
    
    ],
    'profile_image' => 'dome3.png', 
    'contact_email' => 'sambanoelnformi@gmail.com'
];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="about-detail">
        <?php echo $aboutData; ?>
    </div>
</body>
</html>