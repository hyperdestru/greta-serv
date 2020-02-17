<?php

/**
* Get current user data into database
* @return array result sql request
**/
function getUser(): array {
	global $db;

	$data['id'] = $_GET['id'];
	$sql = 'SELECT email FROM users WHERE id = :id';
	$request = $db->prepare($sql);
	$request->execute($data);
	$results = $request->fetch();

	return ($results) ? $results : [];
}
$currentUser = getUser();


/**
* Check if id matches with user into database
* @param object $router
* @param array $currentUser data of current user id
**/
// Si pas de currentUser alors redirection vers..? Effet de generate('usersList') ?
// Redirection vers users/admin_index.php ?
function existUser(object $router, array $currentUser) {
	if (empty($currentUser)) {
		header('Location: ' . $router->generate('usersList'));
		die();
	}
}
existUser($router, $currentUser);


/**
* Delete current user into db and redirect
* @param object $router
**/
function delete(object $router) {
	global $db;

	if (!empty($_GET['confirm'])) {

		$data['id'] = $_GET['id'];
		// Pas de * aprés delete ?
		$sql = 'DELETE FROM users WHERE id = :id';
		$request = $db->prepare($sql);
		$request->execute($data);

		notif('L\'utilisateur a bien été supprimé.', 'success');
	
		header('Location: ' . $router->generate('usersList'));
		die();
	}
}
delete($router);
