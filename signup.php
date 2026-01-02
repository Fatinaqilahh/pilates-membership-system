<?php
include("config/db.php");

if (isset($_POST['signup'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "
        INSERT INTO Customer 
        (customer_name, customer_email, customer_phone, customer_status)
        VALUES
        ('$name', '$email', '$phone', 'Free')
    ");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up | MyPilates</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="navbar">
    <strong>MyPilates</strong>
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
            <input name="phone" placeholder="Phone Number" required>
            <button class="btn" name="signup">SIGN UP</button>
        </form>
    </div>
</div>

<footer>
    © 2025 MyPilates
</footer>

</body>
</html>
