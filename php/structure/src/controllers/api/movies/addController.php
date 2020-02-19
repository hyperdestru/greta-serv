<?php

dump($_POST);

$requiredFields = [
	'title' => 'string',
	'description' => 'string',
	'viewer' => 'int',
	'releaseDate' => 'date'
];

function paramsExist():bool {

	$errorMsg = "SQL task not performed. Missing parameter(s). 
	Required fields : 'title', 'description', 'viewer', 'releaseDate'";

	if (!empty($_POST)) {

		if (!empty($_POST['title']) && !empty($_POST['description']) && 
			!empty($_POST['viewer']) && !empty($_POST['releaseDate'])) {

			$valid = true;

		} else {
			$valid = false;
		}

	} else {
		$valid = false;
	}

	if ($valid === false) {
		http_response_code(400);
		echo $errorMsg;
	}

	return $valid;
}


function checkTypes(array $requiredFields):bool {

	$errorMsg = "SQL task not performed. Wrong type.
	Required types : title: string, description: string, viewer: int, releaseDate: date";

	$regex = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

	$valid = true;	

	foreach ($_POST as $key => $value) {

		switch ($requiredFields[$key]) {

			case 'int':
				$value = (int)$value;
				if ($value === 0 || !is_int($value)) {
					$valid = false;
				}
				break;

			case 'string':
				if (!is_string($value)) {
					$valid = false;
				}
				break;

			case 'date':
				if (!preg_match($regex, $value) || !strtotime($value)) {
					$valid = false;
				}
				break;
		}
	}

	if ($valid === false) {
		http_response_code(400);
		echo $errorMsg;
	}
	
	return $valid;
}


function addMovies() {

	global $db;

	$data = [
		"title" => $_POST['title'],
		"description" => $_POST['description'],
		"viewer" => $_POST['viewer'],
		"releaseDate" => $_POST['releaseDate']
	];

	$sql = 'INSERT INTO movies 
	(title, description, viewer, releaseDate) 
	VALUES (:title, :description, :viewer, :releaseDate)';

	$request = $db->prepare($sql);
	$result = $request->execute($data);

	return json_encode($result);
}

if (paramsExist() && checkTypes($requiredFields)) {
	addMovies();
}


