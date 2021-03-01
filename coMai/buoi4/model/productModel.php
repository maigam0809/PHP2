<?php
require_once 'BaseModel.php';

class ProductModel extends BaseModel{

    function productAll(){
        $sql = "select * from products";
        return $this->all($sql);

    }

    function productCreat($arr){
        $created_at =  date('yyyy-mm-dd h:m:s');
        $updated_at =  date('yyyy-mm-dd h:m:s');
        // e tu them vao nhe oke anh
        $sql = "INSERT INTO products(name, description, image, cate_id, detail, price, sale, status) 
        VALUES (?,?,?,?,?,?,?,?)";
        excuteSQL($sql, $arr['name'], $arr['description'], $arr['image'], $arr['cate_id'], $arr['detail'], $arr['price'], $arr['sale'], $arr['status'] == 1);
    

    }

}

?>