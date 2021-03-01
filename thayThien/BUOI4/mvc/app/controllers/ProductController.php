<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Utils;
class ProductController{
    
    public function index(){
        $products = Product::all();
        include_once './app/views/product/pro-list.php';
    }

    public function create(){
        // $cateNamess = Category::getAtribute('cate_name')->get(); lấy một cột của bảng
        // Lấy nhiều cột của một bảng
        $cateNames = Category::getAtributes(['id','cate_name'])->get();
        include_once './app/views/product/pro-add.php';
    }

    public function store($request){
        $data = $request;
        // var_dump($data);
        // die;
        $file = $_FILES['image'];
        $avatar = '';
        // Nếu có file thì uploads ảnh và lưu ảnh và thư mục uploads
        if($file['size']>0){
            // uniqid() dùng để mỗi khi thêm ảnh nó sẽ tự động thêm tên đầu 5sdndfadf- 
            $avatar = 'mvc/uploads/' . uniqid() . '-' . $file['name'];
            move_uploaded_file($file['tmp_name'], "../".$avatar);
            $data['image'] = $avatar;
        }

        die;
        //Khởi tạo đối tượng Product
        $model = new Product();
        $model->insert($data);

        header('location: product');
    }



    public function edit($id){
        // var_dump($pro_one);die;
        include_once './app/views/product/pro-update.php';
        $pro_one = Product::where(['id','=',$id])->get();
    }

    public function update($id){

    }

    public function destroy($id){
        Product::destroy($id);
        header('location: product');
    }
}   