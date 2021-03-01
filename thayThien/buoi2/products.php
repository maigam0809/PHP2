
<?php
class Product{
    function __construct()
    {
        $this->connect = 
                new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                            "root", "");
    }
    function getAll(){
        $sql = "select * from products";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
$proOject = new Product();
echo "<pre>";
var_dump($proOject->getAll());