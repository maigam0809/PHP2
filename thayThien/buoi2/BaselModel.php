
<?php
class BaseModel{
    var $tableName = '';// tạo ra thuộc tính cha có giá trị rỗng
    
    // Hàm getConnect là kết nối mysql lấy dữ kiệu từ bảng kaopiz

    function getConnect(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                    "root", "");
        return $connect;
    }


    static function getAll(){
        $model = new static();
        $sql = "select * from " . $model->tableName;
        $stmt = $model->getConnect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function where($col, $op, $val){
        // $col = tên cột
        // $op = phép so sánh
        // $val = giá trị cần so sánh
        
        $model = new static();
        $model->query = "select * from " . $model->tableName;
        $model->query .= " where " . $col . " " . $op . " " . $val;// nối chuỗi với where
        // $stmt = $model->getConnect()->prepare($model->query);
        // $stmt->execute();
        // return  $stmt->fetchAll();
        
        return $model->query;
    }
}

class Category extends BaseModel{
    var $tableName = "categories";
    
}
class Product extends BaseModel{
    var $tableName = "products";
    
}
echo "<pre>";
// var_dump(Product::getAll());
var_dump(Product::where('name', 'like', '%Ava Olson%'));

?>