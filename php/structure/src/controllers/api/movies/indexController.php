<?php

function getAll() {
	global $db;

	$options = options();

	$order = order($options['order']);
	$limit = (int)$options['limit'];
	$fieldOrder = fieldOrder('releaseDate');

	$sql = "SELECT * FROM movies ORDER BY $fieldOrder $order LIMIT $limit";
	$request = $db->query($sql);
	$data = $request->fetchAll();

	//dump($data);

	header('Content-Type: application/json');
	http_response_code(200);

	return json_encode($data);
}

function options():array {
	$options = [
		'limit' => 4,
		'order' => 'asc'
	];

	foreach ($options as $key) {
		if (!empty($_GET[$key])) {
			$options[$key] = $_GET[$key];
		}
	}

	return $options;
}

function order(string $pOrder):string {
	$order;

	if ($pOrder === "desc") {
		$order = "DESC";
	} else {
		$order = "ASC";
	}

	return $order;
}

function fieldOrder(string $field):string {
	$result;
	$validFields = ['id', 'created', 'title', 'releaseDate'];

	if (in_array($field, $validFields)) {
		$result = $field;
	} else {
		$result = 'id';
	}

	return $result;
}

echo getAll();