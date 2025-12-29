<?php
session_start();
include("../config/db.php");

if (isset($_POST['login'])) {
    $q = mysqli_query($conn,
        "SELECT * FROM admins
         WHERE email='{$_POST['email']}'
         AND password=MD5('{$_POST['password']}')");

    if (mysqli_num_rows($q) == 1) {
        $_SESSION['admin'] = $_POST['email'];
        header("Location: admin_dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login | LINE Pilates</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<div class="navbar">
    <strong>ADMIN</strong>
    <div>
        <a href="../index.php">PUBLIC SITE</a>
    </div>
</div>

<div class="section">
    <div class="card">
        <h2>Administrator Login</h2>
        <p>Authorized staff access only.</p>

        <form method="POST">
            <input type="email" name="email" placeholder="Admin Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn" name="login">LOG IN</button>
        </form>
    </div>
</div>

<footer>
    © 2025 LINE Pilates Admin
</footer>

</body>
</html>
