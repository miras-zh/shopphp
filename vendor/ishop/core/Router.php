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

    public static function dispatch($url){
        if(self::matchRoute($url)){
            echo 'OK DISPATCH';
        }else{
            echo 'NO DISPATCH';
        }
    }

    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route){
            if(preg_match("#{$pattern}#", $url, $matches)){
                showVar($matches);
                return true;
            }
        }
        return false;
    }
}





















