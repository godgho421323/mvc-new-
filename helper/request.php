<?php
    function request(){
        $obj=(object)['controller'=>'productController','method'=> 'index','get'=>$_GET,'post'=>$_POST,'para'=>null];
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url']);
            $url=explode('/',$url);

            $obj->controller=ucfirst(strtolower($url[0]));
            $obj->method=$url[1];
            
             unset($obj->get['url']);
            
        }

    return $obj;
    }
    
?>