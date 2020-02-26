<?php

function getCategories():array {

	global $db;

	$sql = 'SELECT name FROM categories ORDER BY name ASC';
	$request = $db->query($sql);
	$result = $request->fetchAll();

	return $result;

}

function getMovies():array {

	global $db;

	$sql = 'SELECT id, title, description, image, releaseDate, viewer
	FROM movies ORDER BY viewer DESC';
	$request = $db->query($sql);
	$result = $request->fetchAll();

	return $result;
	
}
