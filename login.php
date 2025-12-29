<?php
session_start();
include("config/db.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $q = mysqli_query($conn,
        "SELECT * FROM users WHERE email='$email' AND password='$pass'");
    if (mysqli_num_rows($q) == 1) {
        $_SESSION['member'] = $email;
        header("Location: member/dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member Login | LINE Pilates</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <strong>LINE</strong>
    <div>
        <a href="index.php">HOME</a>
        <a href="signup.php">SIGN UP</a>
    </div>
</div>

<!-- LOGIN FORM -->
<div class="section">
    <div class="card">
        <h2>Member Login</h2>
        <p>Please log in to access your dashboard.</p>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn" name="login">LOG IN</button>
        </form>
    </div>
</div>

<footer>
    © 2025 LINE Pilates
</footer>

</body>
</html>
