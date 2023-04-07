<?php

namespace ishop;

class ErrorHandler
{
    public function __construct(){
        if(DEBUG){
            error_reporting(-1); //включить показ ошибок
        }else{
            error_reporting(0); // включить показ ошибок
        }

        set_exception_handler([$this, 'exceptionHandler']); //назначить свои исключения
    }

    public function exceptionHandler($e){
        $this->logErrors($e->getMeddage, $e->getFile, $e->getLine());
    }

    protected function logErrors($message = '', $file = '', $line = ''){
        error_log("[" . date('Y-m-d H:i:s' . "] Текст ошибки: {$message} | file: {$file} | line: {$line} \n  ================== \n",
                3, ROOT . "/tmp/errors.log" ));
    }

    protected function  displayError($errno, $errstr, $errfile, $errline, $response = 404){
        http_response_code($response);
        if($response == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev.php';
        }else{
            require WWW . '/errors/prod.php';
        }
        die;
    }
}