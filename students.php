<?php require_once "datab.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><span id="un">K.S.S.S. University</span></h1>
    <p><span id="un">Interested Students</span></p>
</header>

<div id="container">

<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Programme</th>
</tr>

<?php
$sql = "SELECT InterestedStudents.StudentName, InterestedStudents.Email, Programmes.ProgrammeName
        FROM InterestedStudents
        JOIN Programmes ON InterestedStudents.ProgrammeID = Programmes.ProgrammeID";

$result = $pdo->query($sql);

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['StudentName']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['ProgrammeName']."</td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</div>

</body>
</html>