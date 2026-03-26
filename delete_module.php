<?php
require_once "datab.php";

$id = $_GET['id'];

$pdo->prepare("DELETE FROM modules WHERE ModuleID=?")->execute([$id]);

header("Location: modules.php");
?>