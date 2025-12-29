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

        <!-- REFORMER PILATES -->
        <div class="class-card">
            <img src="../assets/images/reformer_pilates.jpg" alt="Reformer Pilates">
            <h3>Reformer Pilates</h3>
            <p>Strengthen, lengthen, and tone using reformer equipment.</p>
            <a href="#" class="btn">EDIT</a>
        </div>

        <!-- CONTEMPORARY PILATES -->
        <div class="class-card">
            <img src="../assets/images/contemporary_pilates.jpg" alt="Contemporary Pilates">
            <h3>Contemporary Pilates</h3>
            <p>Modern Pilates focusing on functional strength and mobility.</p>
            <a href="#" class="btn">EDIT</a>
        </div>

        <!-- MAT PILATES -->
        <div class="class-card">
            <img src="../assets/images/mat_class.jpg" alt="Mat Pilates">
            <h3>Mat Pilates</h3>
            <p>Core-focused floor-based Pilates class.</p>
            <a href="#" class="btn">EDIT</a>
        </div>

        <!-- ADVANCED PILATES -->
        <div class="class-card">
            <img src="../assets/images/advanced_pilates.jpg" alt="Advanced Pilates">
            <h3>Advanced Pilates</h3>
            <p>High-level Pilates focusing on strength and precision.</p>
            <a href="#" class="btn">EDIT</a>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2025 MyPilates Admin Panel
</footer>

</body>
</html>
