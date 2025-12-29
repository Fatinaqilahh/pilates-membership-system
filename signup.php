<?php
include("config/db.php");

if (isset($_POST['signup'])) {
    mysqli_query($conn,
    "INSERT INTO users (full_name,email,password)
     VALUES ('{$_POST['name']}','{$_POST['email']}',MD5('{$_POST['password']}'))");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up | LINE Pilates</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="navbar">
    <strong>LINE</strong>
    <div>
        <a href="index.php">HOME</a>
        <a href="login.php">LOG IN</a>
    </div>
</div>

<div class="section">
    <div class="card">
        <h2>Become a Member</h2>
        <p>Create an account to book classes and manage your membership.</p>

        <form method="POST">
            <input name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn" name="signup">SIGN UP</button>
        </form>
    </div>
</div>

<footer>
    © 2025 LINE Pilates
</footer>

</body>
</html>
