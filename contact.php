

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header><?php include 'includes/header.php'; ?></header>
    <div class="contact-form">
        <?php
        $success = '';
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
       {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $message = trim($_POST['message'] ?? '');
        
            if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {

                // send email, save to DB
               

                $success = "Thank you for contacting us!";
            } else {
                $error = "Please fill in all fields correctly.";
            }
        }
        ?>
        <?php if ($success): ?>
            <p class="success"><?= htmlspecialchars($success) ?></p>
        <?php endif; ?>
        <?php if ($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <h1 style="text-shadow: 2px 2px 5px skyblue; ">Contact form</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send</button>
        </form>
    </div>
    <footer><?php include 'includes/footer.php'; ?></footer>
</body>
</html>