<?php
class View{
    public function view($path,$data=[]){
        //product/index
       $path="apps/views/$path.php";
    
       include $path;
    }
}
?>