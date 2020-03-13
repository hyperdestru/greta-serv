<?php

class Router {

	private $_basepath = '';
	private $_pathNotFound;
	private $_routes = [];
	private $_namedRoutes = [];

	/**
	 * @param string $method
	 * @param string $route
	 * @param string $path
	 * @param string $name
	 */
	public function map(string $method, string $route, string $path, string $name = '') {
		$this->_routes[] = [
			'method'=> $method, 
			'route' => $route, 
			'target' => $path, 
			'name' => $name
		];
		$this->_routeNameExist($name, $route);
	}

	private function _routeNameExist(string $name, string $route) {
		if ($name) {
			if (array_key_exists($name, $this->_namedRoutes)) {
				throw new RuntimeException("This route name already exists");
			}
			$this->_namedRoutes[$name] = $route;
		}
	}

	public function match() {
		$url = str_replace($this->_basepath, '', $_SERVER['REQUEST_URI']);
		$method = $_SERVER['REQUEST_METHOD'];

		foreach ($this->_routes as $route) {
			// Check method with current method, continue to next route if not match
			if ($method !== strtoupper($route['method'])) {
				continue;
			}

			if ($route['route'] === $url) {
				return ['target' => $route['target'], 'name' => $route['name']];
			} else {

			}
		}
	}

	private function _notFound() {
		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		if ($this->_pathNotFound) {
			require_once $this->_pathNotFound;
		} else {
			die('Use setPathNotFound() to define path');
		}
	}

	public function setPathNotFound() {
		
	}

	public function setBasePath(string $pBasepath) {
		$this->_basepath = $pBasepath;
	}

	public function generate() {
	}
}

$router = new Router();
$router->setBasePath("/greta-serv/php/9-appMovies");
$router->map('GET', '/login', 'users/login.php', 'login');
$router->match();