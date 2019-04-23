<?php
header('content-type:text/html;charset=utf-8');
class People{
    public $name = '张亮';
    public $sex = '男';
    public function say(){
        echo "Hello World";
    }
}


$a = new People();
print_r($a->sex);


?>