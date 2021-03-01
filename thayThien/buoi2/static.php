<?php
class Cha{

}

class Con extends Cha{
    
    static function demo(){
        // $model = new Con(); cách1
        $model = new static();
        return $model;
    }

    function demo2(){
        echo "Demo 2 đã chạy";
    }

}

Con::demo()->demo2();


?>