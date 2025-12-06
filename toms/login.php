<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username='$user' AND password='$pass'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) == 1) {
        $_SESSION['admin'] = $user;
        header("Location: admin.php");
        exit();
    } else {
        $msg = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>

<h2>Admin Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<?php if (!empty($msg)) echo "<p style='color:red'>$msg</p>"; ?>

<p><a href="index.php" style="display:inline-block; margin-top:20px; text-decoration:none; padding:8px 16px; border:1px solid #ccc; border-radius:6px; background:#f4f4f4;">Return Home</a></p>

</body>
</html>
