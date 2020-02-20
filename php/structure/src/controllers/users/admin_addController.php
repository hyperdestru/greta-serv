<?php

$requireFields = [
	'email' => [
		'message' => 'Merci de renseigner une adresse email.',
		'rule' => 'validateEmail'
	],

	'password' => [
		'message' => 'Merci de renseigner un mot de passe valide.',
		'rule' => 'validatePassword'
	],

	'passwordConfirm' => [
		'message' => 'Le mot de passe doit être identique.',
		'rule' => 'isIdentical'
	],

	'role' => [
		'message' => 'Merci de renseigner un rôle.'
	]
];

function checkFields(array $requireFields) {
	$errorsFields = [];

	if (!empty($_POST)) {

		$valid = true;

		foreach ($_POST as $key => $value) {

			if (!empty($requireFields[$key]) && empty($value)) {

				$errorsFields[$key] = $requireFields[$key]['message'];
				$valid = false;

			} else if (!empty($requireFields[$key]['rule'])) {

				// Similar to : $rule = validateEmail($_POST[$key])
				$rule = $requireFields[$key]['rule']($_POST[$key]);

				if ($rule) {
					$errorsFields[$key] = $rule;
					$valid = false;
				}

			}			

		}

		if (!$valid) {
			notif('Merci de valider les informations de votre formulaire.');
		}
	}

	return $errorsFields;
}

function valueField(string $pName) {
	if (!empty($_POST[$pName])) {
		return $_POST[$pName];
	}
}

function valueFieldSelect(string $pName, string $pValue) {
	if (!empty($_POST[$pName]) && $_POST[$pName] === $pValue) {
		return 'selected';
	}
}

function errorField(array $errors, string $field) {
	$results['message'] = '';
	$results['class'] = '';

	if (!empty($errors[$field])) {
		$results['message'] = '<div class="invalid-feedback">' . $errors[$field] . '</div>';
		$results['class'] = ' is-invalid';
	}

	return $results;
}

function validateEmail(string $pEmail) {
	if (!filter_var($pEmail, FILTER_VALIDATE_EMAIL)) {
		return "Merci de renseigner un email avec un format valide.";
	}
}

function validatePassword(string $pPassword) {
	$regex = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,50})/";

	if (!preg_match($regex, $pPassword)) {
		return "Merci de renseigner un email avec un format valide.";
	}
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


