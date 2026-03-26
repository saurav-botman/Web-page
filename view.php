<?php
require_once "datab.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Programmes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Programmes</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

<?php
$result = $pdo->query("SELECT * FROM Programmes");

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['ProgrammeID']."</td>";
    echo "<td>".$row['ProgrammeName']."</td>";
    echo "<td>".$row['Description']."</td>";

    echo "<td>
            <img src='".$row['Image']."' width='80'>
          </td>";

    echo "<td>
            <a href='update.php?id=".$row['ProgrammeID']."'>Edit</a> |
            <a href='delete.php?id=".$row['ProgrammeID']."'>Delete</a>
          </td>";

    echo "</tr>";
}
?>

</table>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</body>
</html>