



<?php
// am to be replace this Sample data: Replace with database query in production
$posts = [
    [
        'title' => 'First Blog Post',
        'date' => '',
        'content' => 'Welcome to my first blog post!'
    ],
    [
        'title' => 'Another Update',
        'date' => '2024-06-05',
        'content' => 'Here is another update on my portfolio.'
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .post { border-bottom: 1px solid #ccc; margin-bottom: 20px; padding-bottom: 10px; }
        .title { font-size: 1.5em; margin: 0; }
        .date { color: #888; font-size: 0.9em; }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2 class="title"><?php echo htmlspecialchars($post['title']); ?></h2>
            <div class="date"><?php echo htmlspecialchars($post['date']); ?></div>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>