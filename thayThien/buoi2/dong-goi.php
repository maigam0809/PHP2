<?php
 class Cha{
    public $name ="FPT POLY";
    protected $salary = 10000;
    private $bankAcount = 0.022;
    public function getBankAcount(){
        return $this->bankAcount;
    }
 }
 $trung = new Cha();
echo $trung->getBankAcount();

 class Con extends Cha{
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($newSalary){
         $this->salary = $newSalary;
         return $newSalary;
    }
 }
$gam = new Con();
echo $gam->getSalary();
echo $gam->setSalary(20000);


?>