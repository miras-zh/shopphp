<?php

namespace ishop;

class App
{
    public function __construct(){
//        $query = trim($_SERVER['QUERY_STRING'], '/');
        $query = trim($_SERVER['REQUEST_URI'], '/');

        var_dump($query);
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
    }
}