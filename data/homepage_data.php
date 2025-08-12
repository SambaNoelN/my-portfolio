<?php

$homepageData = [
    'name' => 'Samba noel ',
    'title' => 'Web Developer & Designer',
    'bio' => 'Passionate developer with experience in building modern web applications and creative designs.',
    'profile_image' => 'dom.png',
    'social_links' => [
        [
            'platform' => 'GitHub',
            'url' => 'https://github.com/SambaNoelN',
            'icon' => 'assets/icons/github.svg'
        ],
        [
            'platform' => 'LinkedIn',
            'url' => 'https://linkedin.com/in/Sambanoelnformi',
            'icon' => 'assets/icons/linkedin.svg'
        ],
        [
            'platform' => 'Twitter',
            'url' => 'https://twitter.com/SambaNoelN',
            'icon' => 'assets/icons/twitter.svg'
        ]
    ],
    'featured_projects' => [
        [
            'name' => 'Project One',
            'description' => 'A brief description of your first featured project.',
            'url' => 'https://github.com/yourusername/project-one',
            'image' => 'project1.jpg'
        ],
        [
            'name' => 'Project Two',
            'description' => 'A brief description of your second featured project.',
            'url' => 'https://github.com/SambaNoelN/project-two',
            'image' => 'project2.jpg'
        ]
    ],
    'contact_email' => 'Sambanoelnformi@gmail.com'
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
    <?php foreach($homepageData as $homepageData) echo $homepageData['name'] ?>
    <?php      echo $homepageData['title'] ?>
    <?php   echo  $homepageData['bio']   ?>
</body>
</html>
    
