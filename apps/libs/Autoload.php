<?php
class Autoload{
    public function __construct(){
        include "helper/request.php";
        $rq=request();
        $controller=$rq->controller;
        $method=$rq->method;
        $path="apps/controller/$controller.php";
        if(file_exists($path)){
        include $path;
        $obj=new $controller();
        $obj->$method();
        }
    }
}