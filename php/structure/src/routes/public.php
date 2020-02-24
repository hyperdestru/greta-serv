<?php
/**	
 * Create routes for public site
 * 
 * { method, url, pathFile, name }
 * @link https://altorouter.com/
 */

// USERS
$router->map('GET|POST', '/login', 'users/login.php', 'login');

// MOVIES
$router->map('GET', '/', 'movies/index.php');
