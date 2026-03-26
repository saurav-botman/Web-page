<?php 
require_once "datab.php";

if ($_POST) {
    $pdo->prepare("INSERT INTO modules (ModuleName, ModuleLeaderID, Description) 
                   VALUES (?, ?, ?)")
        ->execute([$_POST['ModuleName'], $_POST['ModuleLeaderID'], $_POST['Description']]);

    header("Location: modules.php");
}
?>

<h2>Add Module</h2>

<form method="POST">

<input type="text" name="ModuleName" placeholder="Module Name"><br><br>

<select name="ModuleLeaderID">
<?php
$staff = $pdo->query("SELECT * FROM staff");
foreach ($staff as $s) {
    echo "<option value='".$s['StaffID']."'>".$s['Name']."</option>";
}
?>
</select><br><br>

<input type="text" name="Description" placeholder="Description"><br><br>

<button>Add Module</button>

</form>