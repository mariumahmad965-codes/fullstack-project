<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BlogHub</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo"><h2>BlogHub</h2></div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="blogs.html">Blogs</a>
            <a href="categories.html">Categories</a>
            <a href="login.html">Login</a>
            <a href="register.html">Register</a>
        </div>
    </nav>

    <main class="auth-container">
        <h2>Create an Account</h2>
        <form id="register-form" class="auth-form">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-input" placeholder="Your Full Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-input" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-input" placeholder="Create Password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" class="form-input" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="auth-btn auth-btn-accent">Register</button>
        </form>
        <p class="auth-footer-text">
            Already have an account? <a href="login.html">Login</a>
        </p>
    </main>

    <footer>
        <p>&copy; <span id="year"></span> BlogHub Pvt. Ltd.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>