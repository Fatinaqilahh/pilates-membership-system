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

<form method="POST">
    <h2>Member Login</h2>
    <input name="email"><br><br>
    <input type="password" name="password"><br><br>
    <button name="login">Login</button>
</form>
