<?php
$requireFields = [
	'email' => [
		'message' => 'Merci de renseigner une adresse email.',
		'rule' => 'validateEmail'
	],
	'password' => [
		'message' => 'Merci de renseigner un mot de passe.',
		'rule' => 'validatePassword'
	],
	'passwordConfirm' => [
		'message' => 'Merci de renseigner une confirmation de mot de passe.',
		'rule' => 'validateSame'
	],
	'role' => [
		'message' => 'Merci de renseigner un rôle.'
	]
];

/**	
 * Get roles
 * 
 * @return array all roles
 */
function getRoles(): array {
	global $db;
	$sql = 'SELECT id, name FROM roles ORDER BY name ASC';
	$request = $db->query($sql);
	return $request->fetchAll();
}
