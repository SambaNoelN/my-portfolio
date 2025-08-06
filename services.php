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

<ul>
    <?php foreach ($services as $service): ?>
        <li>
            <h3><?php echo htmlspecialchars($service['title']); ?></h3>
            <p><?php echo htmlspecialchars($service['description']); ?></p>
        </li>
    <?php endforeach; ?>
</ul>