<?php
echo 'Hello World';

ini_set('display_errors',1); // include errors;
error_reporting(E_ALL);



define('ROOT', dirname(__FILE__));
require_once (ROOT.'/app/components/Router.php');


$router = new Router();
$router->run();


?>