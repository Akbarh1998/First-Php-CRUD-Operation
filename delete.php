<?php include 'db.php' ?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM employee WHERE id=$id";
$result = $conn->query($sql);

?>
<a href="read.php">Go back</a>