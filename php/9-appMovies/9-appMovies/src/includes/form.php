<?php
/**
 * Return id if exist into url param
 */
function getId() {
	if (!empty($_GET['id'])) :
		return $_GET['id'];
	endif;
}

function checkFields(array $requireFields) {
	$errorsFields = [];

	if (!empty($_POST)) :
		$valide = true;
		foreach ($_POST as $key => $value) :
			if (!empty($requireFields[$key]) && empty($value)) :
				$errorsFields[$key] = $requireFields[$key]['message'];
				$valide = false;
			elseif (!empty($requireFields[$key]['rule'])) :
				$rule = $requireFields[$key]['rule']($_POST[$key], $key);
				if ($rule) :
					$errorsFields[$key] = $rule;
					$valide = false;
				endif;
			endif;
		endforeach;

		if (!$valide) :
			notif('Merci de valider les informations de votre formulaire.');
		endif;
	endif;

	return $errorsFields;
}


function errorField(array $errors, string $field): array
{
	$results['message'] = '';
	$results['class'] = '';

	if (!empty($errors[$field])) :
		$results['message'] = '<div class="invalid-feedback">' . $errors[$field] . '</div>';
		$results['class'] = ' is-invalid';
	endif;

	return $results;
}


/**
 * Complete field value if exist $_POST['fieldName']
 * 
 * @param string $fieldName current field name
 */
function valueField(string $fieldName) {
	if (!empty($_POST[$fieldName])) :
		return $_POST[$fieldName];
	endif;
}


/**	
 * Complete field type select if exist and value === current $_POST['fieldname']
 * 
 * @param string $fieldname current field name
 * @param string $value current field value
 */
function valueFieldSelect(string $fieldName, string $value) {
	if (!empty($_POST[$fieldName]) && $_POST[$fieldName] === $value) :
		return ' selected';
	endif;
}


/**	
 * Validate email
 * 
 * @param string $mail
 */
function validateEmail(string $mail, $fieldName = false) {
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) :
		return 'Merci de renseigner un email avec un format valide.';
	endif;
}


function validatePassword($password, $fieldName = false) {
	if (!preg_match('/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,50})/', $password)) :
		return 'Merci de renseigner un mot de passe au bon format.';
	endif;
}

/**
 * Validate same value user 'Confirm' field
 */
function validateSame($field, $fieldName = false) {
	$originalField = str_replace('Confirm', '', $fieldName);
	
	if ($field !== $_POST[$originalField]) :
		return 'Merci de faire correspondre les deux champs';
	endif;
}


/**	
 * Validate slug format
 */
function validateSlug($field, $fieldName = false) {
	if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $field)) :
		return 'Merci de renseigner un slug au bon format.';
	endif;
}


/**
 * Validate date sql format
 */
function validateDate(string $field, $fieldName = false) {
	if (!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $field)) :
		return 'Merci de renseigner une  date au bon format YYYY-MM-DD.';
	endif;
}


/**
 * Validate number format
 */
function validateInt(string $field, $fieldName = false) {
	if (!filter_var($field, FILTER_VALIDATE_INT)) :
		return 'Merci de renseigner un nombre entier.';
	endif;
}