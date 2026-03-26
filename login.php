<?php
require_once "datab.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username=? AND password=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);

if ($stmt->rowCount() > 0) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid login";
}
?>