<?php include "db.php"; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "UPDATE users SET
        name='$name',
        email='$email',
        phone='$phone'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?= $user['phone'] ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>