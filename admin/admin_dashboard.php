<?php
session_start();
include("../config/db.php");

/* Fetch all classes */
$classes = mysqli_query($conn, "SELECT * FROM pilates_classes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | MyPilates</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<!-- ADMIN NAVBAR -->
<div class="navbar">
    <strong>MyPilates Admin</strong>
    <div>
        <a href="admin_dashboard.php">DASHBOARD</a>
        <a href="#">MANAGE CLASSES</a>
        <a href="#">MEMBERSHIPS</a>
        <a href="../logout.php">LOG OUT</a>
    </div>
</div>

<!-- PAGE TITLE -->
<section class="section">
    <h2>Pilates Classes</h2>
    <p>Manage all available Pilates class offerings</p>
</section>

<!-- CLASSES GRID -->
<section class="section">
    <div class="class-grid">

        <?php while ($row = mysqli_fetch_assoc($classes)) { ?>
            <div class="class-card">

                <img src="../assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['class_name']; ?>">

                <h3><?php echo $row['class_name']; ?></h3>

                <p><?php echo $row['description']; ?></p>

                <!-- EDIT BUTTON -->
                <a href="edit_class.php?id=<?php echo $row['id']; ?>" class="btn">
                    EDIT
                </a>

                <!-- ENABLE / DISABLE -->
                <?php if ($row['status'] == 'active') { ?>
                    <a href="toggle_class.php?id=<?php echo $row['id']; ?>&status=inactive" class="btn">
                        DISABLE
                    </a>
                <?php } else { ?>
                    <a href="toggle_class.php?id=<?php echo $row['id']; ?>&status=active" class="btn">
                        ENABLE
                    </a>
                <?php } ?>

            </div>
        <?php } ?>

    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2025 MyPilates Admin Panel
</footer>

</body>
</html>
