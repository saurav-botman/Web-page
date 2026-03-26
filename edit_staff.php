<?php
require_once "datab.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM staff WHERE StaffID=?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if ($_POST) {
    $name = $_POST['Name'];

    $pdo->prepare("UPDATE staff SET Name=? WHERE StaffID=?")
        ->execute([$name, $id]);

    header("Location: staff.php");
}
?>

<h2>Edit Staff</h2>

<form method="POST">
    <input type="text" name="Name" value="<?php echo $row['Name']; ?>">
    <button>Update</button>
</form>