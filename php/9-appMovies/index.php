<?php
// Use session 
session_start();

// Load dependecies composer
require_once 'vendor/autoload.php';

// Load custom files
require_once 'src/config/config.php';
require_once 'src/config/database.php';
require_once 'src/includes/tools.php';

// Init router
$router = new AltoRouter();
$router->setBasePath(BASEPATH);

// Create route
require_once 'src/routes/admin.php';
require_once 'src/routes/public.php';
require_once 'src/routes/api.php';

// Execute routes
$match = $router->match();

// Display content
if ($match) {
	// Prepare load controllers
	$controller = explode('.php', $match['target']);
	$controller = $controller[0] . 'Controller.php';

	// Params routes
	if (!empty($match['params'])) {
		$_GET = array_merge($_GET, $match['params']);
	}

	// Check admin
	checkAdmin($router, $match['target']);
	
	require_once CONTROLLERS . $controller; // Load controllers
	
	/* On ne va pas creer de view pour l'api (on fait tout dans le controller)
	Du coup cela nous leve une erreur donc on ne va pas faire l'appel des views si
	il y a le mot "api" dans le chemin */
	if (strpos($match['target'], 'api/') === false) {
		require_once PAGES . $match['target']; // Load views
	}

} else {

	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
	require_once PAGES . 'errors/404.php';
}
