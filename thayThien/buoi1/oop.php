<?php
class ConMeo{
    var $name;
    var $age;
    var $hairColor;
    var $weight = 1;

    function diNgu(){
      
        return $this->name." Tôi đã đi ngủ rồi";
    }

    function thucDay(){
        return $this->name." Tôi đã thức dậy";
    }

    function an($foodType = 1){
        if($foodType = 1){
            $this->weight++;

        }elseif($foodType = 2){
            $this->weight+= 0.5;

        }elseif($foodType = 3){
            $this->weight+= 2;

        }

        return $this;
    }

    function chuyennhuong(){
        $a = $this->age * 2 + $this->weight;
        return $a;
    }
}

$mimi = new ConMeo();
$mimi->name ="Nguyễn Văn Mi";
$mimi->age = 4;
$alex = new ConMeo();
$alex->name ="Nguyễn Thị Alex";
$alex->age = 3;
$alex->gender = "cái";


echo "<pre>";
var_dump($alex);
echo "<br>";

var_dump($alex->an());
var_dump($alex->an());
var_dump($alex->an());

echo "Giá chuyển nhượng là: ".$alex->chuyennhuong();

// echo "<pre>";
// echo $mimi->dingu();
// echo "<br>";
// echo $alex->thucDay();
// echo "<pre>";
// var_dump($mimi);
// echo "<pre>";
// var_dump($alex);


// echo "<pre>";
// echo $alex->name;


?>


<?php

class Oto{
    var $tenXe;
    var $soBanh;
    var $soPhanh;

}

$lexu = new Oto();
$lexu->tenXe = "Lexu";
$lexu->soBanh = 4;
$lexu->soPhanh = 2;

// echo "<pre>";
// var_dump($lexu);
// echo $lexu->tenXe;






?>


<!-- $this là chỉ đến đối tượng đang hành động -->