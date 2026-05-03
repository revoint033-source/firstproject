<?php include "db.php"; ?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "INSERT INTO users (name, email, phone)
                         VALUES ('$name', '$email', '$phone')");

    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Phone: <input type="text" name="phone"><br><br>

    <button type="submit" name="submit">Save</button>
</form>