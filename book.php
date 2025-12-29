<?php
session_start();
include("config/db.php");

if (!isset($_SESSION['member'])) {
    header("Location: login.php");
}

$class_id = $_GET['id'];
$email = $_SESSION['member'];

$user = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT user_id FROM users WHERE email='$email'")
);

mysqli_query($conn,
"INSERT INTO bookings (user_id, class_id)
 VALUES ('{$user['user_id']}', '$class_id')");

header("Location: member/dashboard.php");
