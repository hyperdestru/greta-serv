<?php
if (isset($_POST['email'])) :
	$_SESSION['auth'] = true;
	header('Location: ' . $router->generate('usersList'));
	die();
endif;