<?php
require('lib/db.php');

/* Récupération du 'body', c'est ici que se trouve 
l'objet transporter par la requête HTTP */
$bodyEnJSON = file_get_contents('php://input');

//echo $bodyEnJSON;

// Du JSON vers un objet php
$item = json_decode($bodyEnJSON);

//var_dump ($item);

$sql = 'INSERT INTO items (name) VALUES (\'' . $item->name . '\')';
$db->query($sql);

// On a besoin de l'id généré par MySQL pour mettre à jour le client
$id = $db->lastInsertId();

$responseObj = [
  'id' => $id
];

$responseJSON = json_encode($responseObj);

echo $responseJSON;

