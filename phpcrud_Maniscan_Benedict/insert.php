<?php

include 'database.php';

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];

$query = "INSERT INTO students (first_name, last_name) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('ss', $first_name, $last_name);
$stmt->execute();
$stmt->close();

header("Location: index.php");
