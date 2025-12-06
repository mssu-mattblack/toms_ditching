<?php
session_start();
require 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$newHours = $_POST['hours'];

$sql = "UPDATE business_info SET business_hours='$newHours' WHERE id=1";
mysqli_query($conn, $sql);

header("Location: admin.php");
exit();
