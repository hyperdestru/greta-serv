<?php 

require_once('../includes/database.php');

//Display all users
$sql = 'SELECT firstname, lastname FROM users';
$request = $db->query($sql);
$result = $request->fetchAll();
echo '<pre>';
	print_r($result);
echo '</pre>';

