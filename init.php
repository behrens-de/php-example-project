<?php
// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// Init 
require_once __DIR__.'/autoload.php';
// DEFINES

define('MAINURL', 'http://localhost:8888/php-example-project');

$container = new App\App\Container();