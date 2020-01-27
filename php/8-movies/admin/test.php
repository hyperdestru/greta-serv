<?php
require_once('../includes/database.php');
require_once('functions.php');

// Display all users
$sql = 'SELECT * FROM users WHERE id = 3';
$request = $db->query($sql);
$result = $request->fetchAll();
echo '<pre>';
	print_r($result);
echo '</pre>';


// Select with params 
$data = [
	'email' => 'mon@email.com',
	'password' => 'passwsssss'
];
$sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
$request = $db->prepare($sql);
$request->execute($data);
$result = $request->fetchAll();
echo '<pre>';
	print_r($result);
echo '</pre>';

echo alert2();