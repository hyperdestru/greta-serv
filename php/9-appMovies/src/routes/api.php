<?php

/**
* Route for API
**/

// Movies
$router->map('GET', '/api/v1/movies', 'api/movies/index.php');
$router->map('POST', '/api/v1/movies', 'api/movies/add.php');