<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BlogHub</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo"><h2>BlogHub</h2></div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="login.html">Login</a>
            <a href="register.html">Register</a>
        </div>
    </nav>

    <div class="auth-container">
        <h2>Login to BlogHub</h2>
        <form id="login-form" class="auth-form">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-input" required>
            </div>
            <button type="submit" class="auth-btn">Sign In</button>
        </form>
        <p class="auth-footer-text">
            Don't have an account? <a href="register.html">Register</a>
        </p>
    </div>

    <footer>
        <p>&copy; <span id="year"></span> BlogHub Pvt. Ltd.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>