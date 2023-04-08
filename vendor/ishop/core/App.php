<?php

namespace ishop;

class App
{
    public  static $app;

    public function __construct(){
//        $query = trim($_SERVER['QUERY_STRING'], '/');
        $query = trim($_SERVER['REQUEST_URI'], '/');
//        var_dump($query);

//        echo '<br />';
//        echo $_SERVER['REQUEST_URI'];
//        echo '<br />';

//        echo '<pre>';
//        print_r($_SERVER);
//        echo '</pre>';

        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
    }

    protected function getParams(){
        $params = require_once CONF . 'params.php';

        if(!empty($params)){
            foreach ($params as $key => $value){
                self::$app->setProperty($key, $value);
            }
        }
    }
}