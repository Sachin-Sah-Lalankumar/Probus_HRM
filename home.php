<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
// Redirect to the login page if not logged in
    header("Location: index.html");
    exit;
}

	$username = $_SESSION['username'];
	$email = $_SESSION['email'];

	$userprofileURL = "userprofile.php?email=" . urlencode($email);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevoHub | Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
</head>
<style>
    /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background-color: #333;
    color: #fff;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

.nav-links {
    list-style: none;
}

.nav-links li {
    display: inline;
    margin-left: 2rem;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.hamburger .line {
    width: 25px;
    height: 3px;
    background: #fff;
    margin: 3px 0;
}

/* Hero Section */
.hero {
    background: url('../images/hero-bg.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
}

.hero-content h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
}

.btn {
    padding: 0.75rem 1.5rem;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    text-decoration: none;
}

.btn:hover {
    background-color: #0056b3;
}

/* About Section */
.about {
    padding: 2rem;
    text-align: center;
}

.about h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

/* Services Section */
.services {
    background-color: #f4f4f4;
    padding: 2rem;
    text-align: center;
}

.service-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.service-item {
    flex: 1;
    margin: 1rem;
    padding: 1rem;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.service-item h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    position: relative;
}

/* Media Queries */
@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
    }

    .nav-links li {
        text-align: center;
        margin: 1rem 0;
    }

    .hamburger {
        display: flex;
    }
}

</style>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">PROBUS</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to PROBUS</h1>
            <p>Your one-stop platform for developers.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </section>

    <section class="about">
        <h2>About Us</h2>
        <p>Probus is a platform designed for developers to connect, share projects, and collaborate on exciting new ideas.</p>
    </section>

    <section class="services">
        <h2>Our Services</h2>
        <div class="service-container">
            <div class="service-item">
                <h3>Networking</h3>
                <p>Connect with other developers.</p>
            </div>
            <div class="service-item">
                <h3>Projects</h3>
                <p>Share and collaborate on projects.</p>
            </div>
            <div class="service-item">
                <h3>Resources</h3>
                <p>Access a wealth of developer resources.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 ProbusS. All rights reserved.</p>
    </footer>
</body>
</html>
