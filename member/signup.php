<?php
include("config/db.php");

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    mysqli_query($conn, "INSERT INTO users (full_name, email, password)
    VALUES ('$name','$email','$pass')");
    header("Location: login.php");
}
?>

<form method="POST">
    <h2>Member Sign Up</h2>
    <input name="name" placeholder="Full Name"><br><br>
    <input name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button name="signup">Sign Up</button>
</form>
