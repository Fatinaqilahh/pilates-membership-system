<?php
session_start();
include("../config/db.php");

/* Get class ID */
$id = $_GET['id'];

/* Fetch class data */
$result = mysqli_query($conn, "SELECT * FROM pilates_classes WHERE id=$id");
$class = mysqli_fetch_assoc($result);

/* Handle form submission */
if (isset($_POST['update'])) {

    $name = $_POST['class_name'];
    $desc = $_POST['description'];

    /* If new image uploaded */
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp, "../assets/images/" . $image);

        mysqli_query($conn, "
            UPDATE pilates_classes 
            SET class_name='$name', description='$desc', image='$image'
            WHERE id=$id
        ");
    } else {
        mysqli_query($conn, "
            UPDATE pilates_classes 
            SET class_name='$name', description='$desc'
            WHERE id=$id
        ");
    }

    header("Location: admin_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Class | MyPilates Admin</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<!-- ADMIN NAVBAR -->
<div class="navbar">
    <strong>MyPilates Admin</strong>
    <div>
        <a href="admin_dashboard.php">BACK TO DASHBOARD</a>
        <a href="../logout.php">LOG OUT</a>
    </div>
</div>

<!-- EDIT FORM -->
<section class="section">
    <h2>Edit Pilates Class</h2>

    <form method="POST" enctype="multipart/form-data">

        <input 
            type="text" 
            name="class_name" 
            value="<?php echo $class['class_name']; ?>" 
            required
        >

        <textarea 
            name="description" 
            rows="5" 
            required
        ><?php echo $class['description']; ?></textarea>

        <p>Current Image:</p>
        <img 
            src="../assets/images/<?php echo $class['image']; ?>" 
            style="width:200px; border-radius:8px; margin-bottom:20px;"
        >

        <input type="file" name="image">

        <button type="submit" name="update" class="btn">
            UPDATE CLASS
        </button>

    </form>
</section>

<footer>
    © 2025 MyPilates Admin Panel
</footer>

</body>
</html>
