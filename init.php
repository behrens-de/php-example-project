<?php
// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// Init 
require_once __DIR__.'/autoload.php';
// DEFINES

define('MAINURL', 'http://localhost:8888/php-example-project');

// Functions

function html(string $string){
    #prevents crossSideScripting
    #use it as output of a database entry befor you print it out
    return htmlentities($string, ENT_QUOTES, 'UFT-8');
}

$container = new App\App\Container();