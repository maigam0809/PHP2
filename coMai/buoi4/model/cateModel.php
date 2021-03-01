<?php
require_once 'BaseModel.php';

class CateModel extends BaseModel{

    function cateAll(){
        $sql = "select * from categories ";
        return $this->all($sql);

    }

    function cateName(){
        $sql = "select id,cate_name from categories";
        strtoupper($sql);
        return $this->all($sql);

    }

  

}

?>