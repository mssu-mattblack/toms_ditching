<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
<body>
<?php
session_start();
require 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
<body>

<h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>

<!-- FETCH CURRENT HOURS -->
<?php
$res = mysqli_query($conn, "SELECT business_hours FROM business_info WHERE id = 1");
$current = mysqli_fetch_assoc($res)['business_hours'];
?>

<h3>Update Business Hours</h3>

<form method="POST" action="update_hours.php">
    <input type="text" name="hours" value="<?php echo $current; ?>" required>
    <button type="submit">Save Hours</button>
</form>

<br>
<a href="logout.php">Logout</a>

</body>
</html>

