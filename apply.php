<?php
require_once "datab.php";

if ($_POST) {

    $name = $_POST['StudentName'];
    $email = $_POST['Email'];
    $programmeID = $_POST['ProgrammeID'];

    $sql = "INSERT INTO InterestedStudents (ProgrammeID, StudentName, Email)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$programmeID, $name, $email]);

    echo "<p class='success'>✅ Registered Successfully!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title >Apply Now</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header id="header">
    <h1><span id="un">Register Interest</span></h1>
</header>

<div id="container">

<form id="form-box" method="POST">

    <input type="text" name="StudentName" placeholder="Your Name" required>

    <input type="email" name="Email" placeholder="Your Email" required>

    <select name="ProgrammeID" required>
        <option value="">Select Programme</option>

        <?php
        $result = $pdo->query("SELECT * FROM Programmes");

        foreach ($result as $row) {
            echo "<option value='".$row['ProgrammeID']."'>".$row['ProgrammeName']."</option>";
        }
        ?>
    </select>

    <button type="submit">Submit</button>

</form>

<br>
<a href="index.html" class="back-btn">⬅ Back to Home</a>

</div>

</body>
</html>