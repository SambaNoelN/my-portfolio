<?php

$services = [
    [
        'title' => 'Web Development',
        'description' => 'Building responsive and modern websites using the latest technologies.',
        'icon' => 'fa fa-code'
    ],
    [
        'title' => 'UI/UX Design',
        'description' => 'Designing user-friendly interfaces and experiences for web and mobile applications.',
        'icon' => 'fa fa-paint-brush'
    ],
    [
        'title' => 'SEO Optimization',
        'description' => 'Improving website visibility and ranking on search engines.',
        'icon' => 'fa fa-search'
    ],
    [
        'title' => 'Content Creation',
        'description' => 'Crafting engaging content for blogs, websites, and social media.',
        'icon' => 'fa fa-pencil-alt'
    ]
];

// You can use $services in your portfolio pages.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>services</h1>
    <?php foreach ($services as $idx => $service): ?>
        <?php echo $services['title'] ?>
    <?php endforeach; ?>
</body>
</html>