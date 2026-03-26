<?php
require_once "datab.php";

if ($_POST) {
    $name = $_POST['ProgrammeName'];
    $desc = $_POST['Description'];

    $stmt = $pdo->prepare("INSERT INTO Programmes (ProgrammeName, Description) VALUES (?, ?)");
    $stmt->execute([$name, $desc]);

    echo "<p class='success'>Programme added successfully!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Programme</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1><span id="un">K.S.S.S. University</span></h1>
    <p><span id="un">Excellence in Education and Innovation</span></p>
</header>



<div id="container">

<h2>Add Programme</h2>

<form id="form-box" method="POST">
    <input type="text" name="ProgrammeName" placeholder="Programme Name" required>
    <input type="text" name="Description" placeholder="Description">
    <button type="submit">Add Programme</button>
</form>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</div>

<footer id="footer">
    
    <p>Email: info@ksss.com</p>
    <p>Phone: +45 87651234</p>
    <p>Office Hours: Mon – Fri, 9:00 AM – 5:00 PM</p>
    <p>Address: Winshire 36, 4573, United Kingdom</p>
    <p>&copy; 2026 KSSS University. All Rights Reserved.</p>
</footer>

</body>
</html>