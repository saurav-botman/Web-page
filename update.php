<?php
require_once "datab.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM Programmes WHERE ProgrammeID=?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if ($_POST) {
    $name = $_POST['ProgrammeName'];
    $desc = $_POST['Description'];
    $image = $_POST['Image'];

    $sql = "UPDATE Programmes 
            SET ProgrammeName=?, Description=?, Image=? 
            WHERE ProgrammeID=?";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $desc, $image, $id]);

    header("Location: view.php");
}
?>

<h2>Edit Programme</h2>

<form method="POST">
    <input type="text" name="ProgrammeName" value="<?php echo $row['ProgrammeName']; ?>"><br><br>
    
    <input type="text" name="Description" value="<?php echo $row['Description']; ?>"><br><br>
    
    <input type="text" name="Image" value="<?php echo $row['Image']; ?>" placeholder="Image path"><br><br>

    <button>Update</button>
</form>