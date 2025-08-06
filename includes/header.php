<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <nav style="display: flex; justify-content: space-between; align-items: center; background: #222; padding: 1rem;">
            <div class="logo" style="font-size: 1.5rem;">
                <a href="/" style="color: #fff; text-decoration: none; font-weight: bold;">Samba Noel N</a>
            </div>
            <ul class="nav-links" style="list-style: none; display: flex; gap: 1.5rem; margin: 0; padding: 0;">
                <li><a href="index.php" style="color: #fff; text-decoration: none;">Home</a></li>
                <li><a href="about.php" style="color: #fff; text-decoration: none;">About</a></li>
                <li><a href="projects.php" style="color: #fff; text-decoration: none;">Projects</a></li>
                <li><a href="contact.php" style="color: #fff; text-decoration: none;">Contact</a></li>
                <li><a href="blog/index.php" style="color: #fff; text-decoration: none;">Blogs</a></li>
            </ul>
            <button id="toggleNav" style="background: #444; color: #fff; border: none; padding: 0.5rem 1rem; cursor: pointer; font-size: 1rem;">Menu</button>
        </nav>
    </header>
    <script>
        const toggleBtn = document.getElementById('toggleNav');
        const navLinks = document.querySelector('.nav-links');
        toggleBtn.addEventListener('click', function() {
            if (navLinks.style.display === 'none') {
                navLinks.style.display = 'flex';
            } else {
                navLinks.style.display = 'none';
            }
        });
        // Hide nav links on small screens initially
        if (window.innerWidth < 600) {
            navLinks.style.display = 'none';
        }
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 600) {
                navLinks.style.display = 'flex';
            } else {
                navLinks.style.display = 'none';
            }
        });
    </script>
</body>
</html>
