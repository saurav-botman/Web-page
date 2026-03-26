<?php
require_once "datab.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM modules WHERE ModuleID=?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if ($_POST) {
    $pdo->prepare("UPDATE modules 
        SET ModuleName=?, ModuleLeaderID=?, Description=? 
        WHERE ModuleID=?")
        ->execute([$_POST['ModuleName'], $_POST['ModuleLeaderID'], $_POST['Description'], $id]);

    header("Location: modules.php");
}
?>

<h2>Edit Module</h2>

<form method="POST">

<input type="text" name="ModuleName" value="<?php echo $row['ModuleName']; ?>"><br><br>

<select name="ModuleLeaderID">
<?php
$staff = $pdo->query("SELECT * FROM staff");
foreach ($staff as $s) {
    $selected = ($s['StaffID'] == $row['ModuleLeaderID']) ? "selected" : "";
    echo "<option value='".$s['StaffID']."' $selected>".$s['Name']."</option>";
}
?>
</select><br><br>

<input type="text" name="Description" value="<?php echo $row['Description']; ?>"><br><br>

<button>Update</button>

</form>