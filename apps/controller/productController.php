<?php
class productController extends Controller{
    public function index(){
// $a=[
//             'name'=>'kunal',
//             'class'=>'9'
//         ];        

        $this->load->view('product/index');
    }public function create(){
        echo "helwegfus";
    }
}
?>