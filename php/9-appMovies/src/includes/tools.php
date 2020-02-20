<?php
/**
* Display header depending of layout
* @param string $layout name of layout
**/
function get_header(string $layout = 'public') {
	require_once ROOT . '/views/layouts/' . $layout . '/header.php';
}


/**
* Display footer depending of layout
* @param string $layout name of layout
**/
function get_footer(string $layout = 'public') {
	require_once ROOT . '/views/layouts/' . $layout . '/footer.php';
}


/**	
* Check exist word "admin_" into current path
* @param object $router
* @param string $path current path
**/
function checkAdmin(object $router, string $path) {

	$existAdmin = strpos($path, 'admin_');

	if ($existAdmin) {

		if (empty($_SESSION['auth'])) {

			header('Location: ' . $router->generate('login'));
			die();
		}
	}

}


/**	
* Convert date fo french format
**/
function dateFormat(string $date, bool $time = true) {

	setlocale(LC_ALL, 'fr_FR.utf8', 'fra');
	//$format = ($time) ? ' à %H:%M:%S' : '';
	$format = '';

	if ($time) {
		$format = ' &agrave; %H:%M:%S';
	}

	$date = strftime('Le %A %d %B %Y' . $format, strtotime($date));

	return $date;

}


/**
* Create notif message
* @param string $message
* @param string $type class name bootstrap
**/
function notif(string $message, string $type = 'danger') {

	$_SESSION['notif'] = [
		'message' => $message,
		'type' => $type
	];

}


/**	
* Display notif 
**/
function displayNotif() {

	if (!empty($_SESSION['notif'])) {

		$content = '<div class="alert alert-' . $_SESSION['notif']['type'] . '" role="alert">';
		$content .= $_SESSION['notif']['message'];
		$content .= '</div>';

		unset($_SESSION['notif']);

		return $content;
		
	}
}