<?php

namespace onli\tasks;

include 'include/database.php';

$db = new Database();
$db->setupDB();

include 'include/router.php';
$router = new Router();
$router->servePage();
