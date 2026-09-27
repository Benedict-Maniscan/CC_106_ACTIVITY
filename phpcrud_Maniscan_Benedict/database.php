<?php
$conn = new mysqli('localhost', 'root', '', 'phpcrud_maniscan_benedict');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
