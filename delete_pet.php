<?php
include "db.php";

$id = $_POST['id'];
$conn->query("DELETE FROM pets WHERE id=$id");
?>
