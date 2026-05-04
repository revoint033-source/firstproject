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

<<<<<<< HEAD
<form method="POST">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?= $user['phone'] ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>Edit User</h3>

    <form method="POST" class="card p-4">
        <input type="text" name="name" class="form-control mb-3"
               value="<?= $user['name'] ?>" required>

        <input type="email" name="email" class="form-control mb-3"
               value="<?= $user['email'] ?>" required>

        <input type="text" name="phone" class="form-control mb-3"
               value="<?= $user['phone'] ?>" required>

        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>
>>>>>>> f77dc92 (your message)
