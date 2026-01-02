<?php
include("config/db.php");

$classes = mysqli_query($conn, "SELECT * FROM class");
$featured = mysqli_fetch_all($classes, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyPilates | Membership System</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <strong>MyPilates</strong>
    <div>
        <a href="#">STUDIO</a>
        <a href="membership.php">MEMBERSHIP</a>
        <a href="#classes">CLASSES</a>
        <a href="#contact">CONTACT US</a>
        <a href="login.php">LOG IN</a>
        <a href="admin/admin_login.php">ADMIN</a>
    </div>
</div>

<!-- HERO -->
<section class="hero">
    <div>
        <h1>PILATES FOR ALL,<br>AND FOR EXPERTS.</h1>
        <p>
            MyPilates is a contemporary Pilates studio offering classes
            for beginners and experienced practitioners.
        </p>
        <a href="#classes" class="btn">VIEW CLASSES</a>
    </div>
</section>

<!-- OUR CLASSES -->
<section class="section" id="classes">
    <h2>Our Classes</h2>

    <div class="class-grid">
        <?php foreach ($featured as $class): ?>
            <div class="class-card">
                <img src="assets/images/<?php echo htmlspecialchars($class['image']); ?>" 
                     alt="<?php echo htmlspecialchars($class['class_name']); ?>">
                <h3><?php echo htmlspecialchars($class['class_name']); ?></h3>
                <p><?php echo htmlspecialchars($class['class_schedule']); ?></p>
                <a href="membership.php" class="btn">VIEW PACKAGES</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- FOOTER -->
<footer id="contact" class="footer">
    <div class="footer-wrapper">

        <div class="footer-col">
            <h4>Contact</h4>
            <p>
                MyPilates Sdn Bhd<br>
                Level 2, Wellness Centre<br>
                Kuala Lumpur, Malaysia
            </p>
            <p>
                T: +60 12-345 6789<br>
                E: info@mypilates.com
            </p>
        </div>

        <div class="footer-col">
            <h4>Timetable + Hours</h4>
            <p>Mon – Fri: 08:00 – 22:00</p>
            <p>Sat – Sun: 09:00 – 18:00</p>
        </div>

        <div class="footer-col">
            <h4>About</h4>
            <p class="footer-link">Terms of Use</p>
            <p class="footer-link">FAQ</p>
            <p class="footer-link">Feedback</p>
        </div>

        <div class="footer-col">
            <h4>Follow</h4>
            <p class="footer-link">Facebook</p>
            <p class="footer-link">Instagram</p>
            <p class="footer-link">TikTok</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 MyPilates Membership System
    </div>
</footer>

</body>
</html>
