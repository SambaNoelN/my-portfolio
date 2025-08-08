<?php
$services = [
    [
        'title' => 'Web Development',
        'description' => 'Building responsive and modern websites tailored to your business needs.'
    
    ],
    [
        'title' => 'UI/UX Design',
        'description' => 'Designing intuitive user interfaces and engaging user experiences.'
    ],
    [
        'title' => 'SEO Optimization',
        'description' => 'Improving your website ranking and visibility on search engines.'
    ],
    [
        'title' => 'E-commerce Solutions',
        'description' => 'Creating secure and scalable online stores for your products.'
    ],
    [
        'title' => 'Content Management',
        'description' => 'Implementing easy-to-use CMS for effortless content updates.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: lightblue;">
    <header style="position: stick; top: 0;"> <?php include ('includes/header.php'); ?></header>
    <div class="conntainer">
    <ul style="columns: auto;">
    <?php foreach ($services as $service): ?>
        <section class="about-section">
        <li>
            <div class="item">
            <h3><?php echo htmlspecialchars($service['title']); ?></h3>
            <p><?php echo htmlspecialchars($service['description']); ?></p>
            
            </div>
        </li>
        </section>
    <?php endforeach; ?>
    </ul>
</div>
<footer> <?php  include ('includes/footer.php');?></footer>
</body>
</html>
