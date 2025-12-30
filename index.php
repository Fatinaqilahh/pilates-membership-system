<?php
include("config/db.php");

$classes = mysqli_query($conn, "
    SELECT * FROM pilates_classes 
    WHERE status='active'
");
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
        <a href="signup.php" class="btn">ABOUT MYPILATES</a>
    </div>
</section>

<!-- ABOUT -->
<section class="section">
    <h2>We Help You Move With Strength & Control</h2>
    <p>
        Our studio provides a calm and supportive environment designed
        to help you strengthen, lengthen, and reconnect with your body.
    </p>
</section>

<!-- FEATURED CLASSES -->
<?php if (!empty($featured[0])) { ?>
<section class="reformer-section" id="classes">
    <div class="reformer-container">
        <div class="reformer-image">
            <img src="assets/images/<?php echo $featured[0]['image']; ?>">
        </div>
        <div class="reformer-content">
            <h2><?php echo $featured[0]['class_name']; ?></h2>
            <p><?php echo $featured[0]['description']; ?></p>
            <a href="membership.php" class="btn">VIEW PACKAGES</a>
        </div>
    </div>
</section>
<?php } ?>

<?php if (!empty($featured[1])) { ?>
<section class="reformer-section">
    <div class="reformer-container reverse">
        <div class="reformer-content">
            <h2><?php echo $featured[1]['class_name']; ?></h2>
            <p><?php echo $featured[1]['description']; ?></p>
            <a href="membership.php" class="btn">VIEW PACKAGES</a>
        </div>
        <div class="reformer-image">
            <img src="assets/images/<?php echo $featured[1]['image']; ?>">
        </div>
    </div>
</section>
<?php } ?>

<!-- OTHER CLASSES -->
<section class="section">
    <h2>Other Class Offerings</h2>

    <div class="class-grid">
        <?php for ($i = 2; $i < count($featured); $i++) { ?>
            <div class="class-card">
                <img src="assets/images/<?php echo $featured[$i]['image']; ?>">
                <h3><?php echo $featured[$i]['class_name']; ?></h3>
                <p><?php echo $featured[$i]['description']; ?></p>
                <a href="signup.php" class="btn">BOOK A CLASS</a>
            </div>
        <?php } ?>
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
            <p class="footer-link">Class Schedule</p>
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
