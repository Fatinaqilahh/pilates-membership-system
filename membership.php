<?php
include("config/db.php");
$plans = mysqli_query($conn, "SELECT * FROM membership_plans");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership Packages | MyPILATES</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <strong>MyPILATES</strong>
    <div>
        <a href="index.php">HOME</a>
        <a href="index.php#classes">CLASSES</a>
        <a href="membership.php">MEMBERSHIP</a>
        <a href="login.php">LOG IN</a>
    </div>
</div>

<!-- MEMBERSHIP PACKAGES -->
<div class="membership-wrapper">
    <h2 class="membership-title">Membership Packages</h2>
    <p class="membership-subtitle">
        We offer flexible options so you can enjoy Pilates with better value.
    </p>

    <div class="membership-cards">
        <?php while ($plan = mysqli_fetch_assoc($plans)) { ?>
            <div class="membership-card">
                <h4><?php echo $plan['plan_name']; ?></h4>

                <h1>RM <?php echo $plan['price']; ?></h1>

                <p><?php echo $plan['description']; ?></p>
                <hr>

                <p>
                    Valid for <?php echo $plan['duration_months']; ?> month(s)
                    from the date of purchase.
                </p>
                <hr>

                <p>
                    Membership access included.
                </p>

                <a href="signup.php" class="membership-btn">JOIN NOW</a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- FOOTER -->
<footer>
    © 2025 MyPILATES Membership System
</footer>

</body>
</html>
