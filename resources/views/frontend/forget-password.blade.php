<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - BlogHub</title>
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

    <main class="auth-container">
        <h2>Reset Password</h2>
        <p class="auth-description">Enter your registered email address and we will send you instructions to reset your password.</p>
        
        <form id="forgot-password-form" class="auth-form">
            <div class="form-group">
                <label for="reset-email">Email Address</label>
                <input type="email" id="reset-email" class="form-input" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="auth-btn">Send Reset Link</button>
        </form>

        <p class="auth-footer-text">
            Remembered your password? <a href="login.html">Back to Login</a>
        </p>
    </main>

    <footer>
        <p>&copy; <span id="year"></span> BlogHub Pvt. Ltd.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>