<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}

$classes = mysqli_query($conn, "SELECT * FROM classes");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<div class="navbar">
    <strong>ADMIN</strong>
    <div>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="../logout.php">Logout</a>
    </div>
</div>

<div class="section">
    <h2>Manage Classes</h2>

    <?php while ($c = mysqli_fetch_assoc($classes)) { ?>
        <div class="card">
            <strong><?php echo $c['class_name']; ?></strong><br>
            RM <?php echo $c['price']; ?>
        </div>
    <?php } ?>
</div>

</body>
</html>
