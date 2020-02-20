<?php

// Users
$router->map('GET', '/admin', 'users/admin_index.php', 'usersList');
$router->map('GET', '/admin/users/delete/[i:id]', 'users/admin_delete.php', 'usersDelete');
$router->map('GET|POST', '/admin/users/add', 'users/admin_add.php', 'usersAdd');
