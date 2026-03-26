<?php require_once "datab.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Staff Members</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Actions</th>
</tr>

<?php
$result = $pdo->query("SELECT * FROM staff");

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['StaffID']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>
        <a href='edit_staff.php?id=".$row['StaffID']."'>Edit</a> |
        <a href='delete_staff.php?id=".$row['StaffID']."' onclick=\"return confirm('Delete?')\">Delete</a>
    </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</body>
</html>