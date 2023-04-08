<?php

namespace ishop;

class Router
{
    protected static $routes = []; // таблица маршрутов
    protected static $route = []; // текущий мрашрут

    public static function add($regexp,$route = []){
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public function dispatch($url){

    }

    public function matchRoute($url){

    }
}