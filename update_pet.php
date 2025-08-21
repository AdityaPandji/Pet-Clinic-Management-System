<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$species = $_POST['species'];
$age = $_POST['age'];
$owner = $_POST['owner'];

$conn->query("UPDATE pets SET name='$name', species='$species', age='$age', owner='$owner' WHERE id=$id");
?>
