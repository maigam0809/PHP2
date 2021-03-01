<?php

class DongVat{
    function __construct (){
        // echo "tôi là động vật và tôi biết di chuyển";
        $this->connect = 
        new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                    "root", "");
    }
    function tiengKeu (){
        echo "Oảng oảng";
    }
}

class ConMeo extends DongVat{

}



$van = new ConMeo();
$van->tiengKeu();// hàm được phép dử dụng khi thằng cha có mà extend cha

class MeoVietNam extends ConMeo{

}


