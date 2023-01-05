<?php

$path ='helper/env.php';
if(file_exists($path)){
    include $path;
};

spl_autoload_register(function($clname){
    $path="apps/libs/$clname.php";
    include $path;
});
$obj= new Autoload();