<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['member'])) {
    header("Location: ../login.php");
}

$email = $_SESSION['member'];
$user = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM users WHERE email='$email'")
);

$bookings = mysqli_query($conn,
"SELECT classes.class_name, classes.price
 FROM bookings
 JOIN classes ON bookings.class_id = classes.class_id
 WHERE bookings.user_id='{$user['user_id']}'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<div class="navbar">
    <strong>LINE</strong>
    <div>
        <a href="../index.php">Home</a>
        <a href="../logout.php">Logout</a>
    </div>
</div>

<div class="section">
    <h2>Welcome, <?php echo $user['full_name']; ?></h2>

    <h3>Your Booked Classes</h3>

    <table>
        <tr>
            <th>Class</th>
            <th>Price</th>
        </tr>
        <?php while ($b = mysqli_fetch_assoc($bookings)) { ?>
        <tr>
            <td><?php echo $b['class_name']; ?></td>
            <td>RM <?php echo $b['price']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
