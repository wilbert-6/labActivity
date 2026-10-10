<?php
require 'dbcon.php';

$id = $_GET['id'] ?? 0;

if ($id > 0) {
    $conn->query("DELETE FROM users WHERE id = $id");
}

header("Location: index.php?msg=deleted");
exit();
?>