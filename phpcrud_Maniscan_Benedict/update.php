<?php

include 'database.php';
$id = $_POST['id'];
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];

$query = "UPDATE students SET first_name = ?, last_name = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('ssi', $first_name, $last_name, $id);
$stmt->execute();
$stmt->close();

header("Location: index.php");
