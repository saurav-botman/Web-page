<?php
require_once "datab.php";

$id = $_GET['id'];

$pdo->prepare("DELETE FROM staff WHERE StaffID=?")->execute([$id]);

header("Location: staff.php");
?>