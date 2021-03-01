
<?php
class Category{
    function __construct()
    {
        $this->connect = 
                new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                            "root", "");
    }
    function getAll(){
        $sql = "select * from categories";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
$cateObj = new Category();
echo "<pre>";
var_dump($cateObj->getAll());