<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors Directory - BlogHub</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo"><h2>BlogHub</h2></div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="blogs.html">Blogs</a>
            <a href="categories.html">Categories</a>
            <a href="authors.html">Authors</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="login.html">Login</a>
        </div>
    </nav>

    <main class="authors-page-container">
        <header class="page-header">
            <h2>Our Authors</h2>
            <p>Meet the talented writers and experts behind BlogHub's content.</p>
        </header>

        <div id="authors-container" class="grid-container">
            <!-- Author Card 1 -->
            <div class="blog-card author-card">
                <img src="assets/images/img2.jpg" alt="Khalida" class="author-avatar" >
                <h3 class="author-name">Khalida</h3>
                <span class="category-badge">Technology</span>
                <p class="author-bio">Tech enthusiast and full-stack developer writing about modern web tools.</p>
                <p class="author-stats">12 Published Articles</p>
                <a href="author-profile.html" class="author-profile-btn">View Profile</a>
            </div>

            <!-- Author Card 2 -->
            <div class="blog-card author-card">
                <img src="assets/images/im1.jpg" alt="Devon" class="author-avatar">
                <h3 class="author-name">Devon</h3>
                <span class="category-badge">Travel</span>
                <p class="author-bio">Travel photographer and storyteller exploring hidden gems across the world.</p>
                <p class="author-stats">8 Published Articles</p>
                <a href="author-profile.html" class="author-profile-btn">View Profile</a>
            </div>

            <!-- Author Card 3 -->
            <div class="blog-card author-card">
                <img src="assets/images/img3.jpg" alt="Amina" class="author-avatar">
                <h3 class="author-name">Amina</h3>
                <span class="category-badge">Education</span>
                <p class="author-bio">Data analyst passionate about making complex subjects accessible for everyone.</p>
                <p class="author-stats">15 Published Articles</p>
                <a href="author-profile.html" class="author-profile-btn">View Profile</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <span id="year"></span> BlogHub Pvt. Ltd.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>