<?php

class ConVit{
    // public $tuoi;
    public function __construct($ten, $tuoi, $namsinh = 2000, $quoctich = "Việt Nam"){
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->namSinh = $namsinh;
        $this->quocTich = $quoctich;

    }

}
$donalTrump = new ConVit("Donal Trump",23);
var_dump($donalTrump);