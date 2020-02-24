<?php
require('./lib/db.php');

$result = $db->query('SELECT * FROM items');
$items = $result->fetchAll();

echo json_encode($items);  