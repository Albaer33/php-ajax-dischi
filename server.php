<?php
include __DIR__ . '/database.php';

$albums = json_encode($database);
header('Content-Type: application/json');

echo $albums;
?>