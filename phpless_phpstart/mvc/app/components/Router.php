<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 19.01.18
 * Time: 21:15
 */


class Router{
    private $routes;

    public function __construct(){
        $routesPath = ROOT.'/app/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run(){
        print_r($this->routes);
    }

}