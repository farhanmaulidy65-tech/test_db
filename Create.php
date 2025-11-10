<?php
include("connection.php");

$task = $_POST['task'];
$sql = "INSERT INTO tasks (task) VALUES (\"$task\")";
$conn->query($sql);
header("Location: index.php");
?>