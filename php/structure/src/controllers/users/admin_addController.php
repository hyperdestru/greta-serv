<?php

$requireFields = [
	'email' => 'Merci de renseigner une adresse email.',
	'role' => 'Merci de renseigner un rôle.'
];

function checkFields(array $requireFields) {
	$errorsFields = [];

	if (!empty($_POST)) {

		$valid = true;

		foreach ($_POST as $key => $value) {

			if (!empty($requireFields[$key]) && empty($value)) {

				$errorsFields[$key] = $requireFields[$key];
				$valid = false;
			}

		}

		if (!$valid) {
			notif('Merci de valider les informations de votre formulaire.');
		}
	}

	return $errorsFields;
}


function errorField(array $errors, string $field): array {
	$results['message'] = '';
	$results['class'] = '';

	if (!empty($errors[$field])) {
		$results['message'] = '<div class="invalid-feedback">' . $errors[$field] . '</div>';
		$results['class'] = ' is-invalid';
	}

	return $results;
}

/**	
* Get roles
* @return array all roles
**/
function getRoles(): array {
	global $db;
	
	$sql = 'SELECT id, name FROM roles ORDER BY name ASC';
	$request = $db->query($sql);

	return $request->fetchAll();
}


