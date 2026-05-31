<?php

include 'db.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "UPDATE coffee SET votes = votes + 1 WHERE id = $id"
);

header("Location: index.php");

?>