<?php

namespace onli\tasks;

include 'include/database.php';

$db = Database::getInstance();
$db->setupDB();

include 'include/router.php';
$router = new Router();
$router->servePage();
