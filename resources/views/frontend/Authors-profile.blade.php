<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarah Ahmed - Author Profile | BlogHub</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo"><h2>BlogHub</h2></div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="blogs.html">Blogs</a>
            <a href="categories.html">Categories</a>
            <a href="authors.html" class="active">Authors</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </div>
    </nav>

    <main class="content-wrapper">
        <!-- Author Profile Header -->
        <section class="profile-card">
            <img src="https://via.placeholder.com/120x120" alt="Sarah Ahmed" class="profile-avatar">
            <div class="profile-info">
                <h1 class="profile-name">Sarah Ahmed</h1>
                <p class="profile-role">Senior Frontend Developer & Tech Writer</p>
                <p class="profile-bio">Passionate about web standards, CSS architectures, and teaching modern web development practices through clear, actionable tutorials.</p>
                
                <div class="profile-stats">
                    <div class="stat-box">
                        <span class="stat-num">12</span>
                        <span class="stat-label">Articles</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-num">15K+</span>
                        <span class="stat-label">Reads</span>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#">Twitter</a>
                    <a href="#">GitHub</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </section>

        <!-- Articles by Author -->
        <section class="author-articles">
            <h2 class="section-title">Articles by Sarah Ahmed</h2>
            
            <div class="grid-container">
                <!-- Article 1 -->
                <article class="blog-card">
                    <img src="https://via.placeholder.com/400x220" alt="Blog Image" class="card-img">
                    <div class="card-body">
                        <span class="badge">Technology</span>
                        <h3 class="card-title">Getting Started with Web Development in 2026</h3>
                        <p class="card-excerpt">Learn the fundamentals of modern HTML, CSS, and JavaScript to build fast websites.</p>
                        <div class="card-meta">
                            <span>Sep 01, 2026</span>
                            <a href="blog-details.html" class="read-more">Read More &rarr;</a>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="blog-card">
                    <img src="https://via.placeholder.com/400x220" alt="Blog Image" class="card-img">
                    <div class="card-body">
                        <span class="badge">Design</span>
                        <h3 class="card-title">Responsive Design Best Practices</h3>
                        <p class="card-excerpt">A deep dive into container queries, flexbox, and modern CSS layout techniques.</p>
                        <div class="card-meta">
                            <span>Aug 15, 2026</span>
                            <a href="blog-details.html" class="read-more">Read More &rarr;</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 BlogHub Pvt. Ltd. All rights reserved.</p>
    </footer>

</body>
</html>