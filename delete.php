<?php
require_once "datab.php";

$id = $_GET['id'];
$pdo->prepare("DELETE FROM Programmes WHERE ProgrammeID=?")->execute([$id]);

header("Location: view.php");
?>