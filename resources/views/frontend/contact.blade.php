<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - BlogHub</title>
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

    <main class="contact-container">
        <h2>Contact Us</h2>
        <p class="contact-info">Email: support@bloghub.com | Phone: +92 300 0000000</p>
        
        <form class="contact-form">
            <div class="form-group">
                <label for="contact-name">Name</label>
                <input type="text" id="contact-name" class="form-input" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">Email</label>
                <input type="email" id="contact-email" class="form-input" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <label for="contact-message">Message</label>
                <textarea id="contact-message" class="form-input form-textarea" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="contact-btn">Send Message</button>
        </form>
    </main>

    <footer>
        <p>&copy; <span id="year"></span> BlogHub Pvt. Ltd.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>