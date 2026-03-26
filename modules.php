<?php require_once "datab.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Modules</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Modules</h2>

<a href="add_module.php">➕ Add Module</a>

<table>
<tr>
    <th>ModuleID</th>
    <th>ModuleName</th>
    <th>ModuleLeaderID</th>
    <th>Description</th>
    <th>Actions</th>
</tr>

<?php
$result = $pdo->query("SELECT * FROM modules");

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['ModuleID']."</td>";
    echo "<td>".$row['ModuleName']."</td>";
    echo "<td>".$row['ModuleLeaderID']."</td>";
    echo "<td>".$row['Description']."</td>";
    echo "<td>
        <a href='edit_module.php?id=".$row['ModuleID']."'>Edit</a> |
        <a href='delete_module.php?id=".$row['ModuleID']."' onclick=\"return confirm('Delete?')\">Delete</a>
    </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</body>
</html>