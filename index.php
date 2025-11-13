<?php


// Main file of the example project. Starts database and router calls

namespace onli\tasks;

include 'include/database.php';

$db = Database::getInstance();
$db->setupDB();

include 'include/router.php';
$router = new Router();
$router->servePage();
