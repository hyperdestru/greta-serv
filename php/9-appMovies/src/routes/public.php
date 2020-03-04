<?php
/**	
 * Create routes for public site
 * 
 * { method, url, pathFile, name }
 * @link https://altorouter.com/
 */

// USERS
$router->map('GET|POST', '/login', 'users/login.php', 'login');
$router->map('GET', '/logout', 'users/logout.php', 'logout');

// MOVIES
$router->map('GET', '/', 'movies/index.php');
$router->map('GET', '/movie/[a:slug]', 'movies/single.php', 'moviesSingle');
