<?php
include("config/db.php");
$plans = mysqli_query($conn, "SELECT * FROM membership_plans");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership Plans | MyPilates</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <strong>MyPilates</strong>
    <div>
        <a href="index.php">HOME</a>
        <a href="index.php#classes">CLASSES</a>
        <a href="membership.php">MEMBERSHIP</a>
        <a href="login.php">LOG IN</a>
    </div>
</div>

<!-- MEMBERSHIP SECTION -->
<section class="membership-wrapper">
    <h2 class="membership-title">Membership Packages</h2>
    <p class="membership-subtitle">
        Flexible options designed to support your Pilates journey
    </p>

    <div class="membership-cards">
        <?php while ($plan = mysqli_fetch_assoc($plans)) { ?>
            <div class="membership-card">

                <h4><?php echo strtoupper($plan['plan_name']); ?></h4>

                <h1>RM <?php echo $plan['price']; ?></h1>

                <p><?php echo $plan['description']; ?></p>

                <hr>

                <p>
                    Valid for <?php echo $plan['duration_months']; ?> month(s)
                </p>

                <a href="signup.php" class="membership-btn">
                    SELECT PLAN
                </a>
            </div>
        <?php } ?>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
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
        </div>

        <div class="footer-col">
            <h4>Follow</h4>
            <p class="footer-link">Instagram</p>
            <p class="footer-link">Facebook</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 MyPilates Membership System
    </div>
</footer>

</body>
</html>
