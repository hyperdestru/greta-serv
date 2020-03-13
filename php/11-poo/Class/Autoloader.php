<?php

class Autoloader {

	static function register() {
		spl_autoload_register([__CLASS__, 'autoload']);
	}

	static function autoload(string $className) {
		require_once('Class/' . $className . '.php');
	}
}