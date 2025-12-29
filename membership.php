<?php
include("config/db.php");
$plans = mysqli_query($conn, "SELECT * FROM membership_plans");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Membership Plans | LINE Pilates</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <strong>LINE</strong>
    <div>
        <a href="index.php">HOME</a>
        <a href="index.php#classes">CLASSES</a>
        <a href="membership.php">MEMBERSHIP</a>
        <a href="login.php">LOG IN</a>
    </div>
</div>

<!-- MEMBERSHIP SECTION -->
<div class="section">
    <h2>Membership Plans</h2>
    <p>Choose a plan that fits your Pilates journey</p>

    <?php while ($plan = mysqli_fetch_assoc($plans)) { ?>
        <div class="card">
            <h3><?php echo $plan['plan_name']; ?></h3>
            <p><?php echo $plan['description']; ?></p>
            <p>
                <strong>
                    RM <?php echo $plan['price']; ?> /
                    <?php echo $plan['duration_months']; ?> month(s)
                </strong>
            </p>

            <a href="signup.php" class="btn">Join Now</a>
        </div>
    <?php } ?>
</div>

<footer>
    © 2025 LINE Pilates Membership System
</footer>

</body>
</html>
