<?php
Class Router {

	protected $routes = [];

	public function __contruct() {
		
	}

	/**
	 * Create route
	 */
	public function map($method, $route, $target, $name = null) {
		$this->routes[] = [$method, $route, $target, $name];
	}
}

$customRouter = new Router();

$customRouter->map('GET', '/admin', 'users/admin_index.php', 'usersList');
$customRouter->map('GET', '/admin2', 'users/admin_index.php', 'usersList2');

dump($customRouter);