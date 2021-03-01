<?php
namespace App\Controllers;

use App\Models\News;
use App\Models\Category;
class NewController{
    
    public function index(){
        $news = News::all();
        include_once './app/views/news/new-list.php';
    }

    public function create(){
        // $cateNamess = Category::getAtribute('cate_name')->get(); lấy một cột của bảng
        // Lấy nhiều cột của một bảng
        $cateNames = Category::getAtributes(['cate_id','cate_name'])->get();
        include_once './app/views/news/new-add.php';
    }

    public function store($request){
        $data = $request;
        // var_dump($data);
        // die;
        $file = $_FILES['image'];
        $avatar = '';
        // Nếu có file thì uploads ảnh và lưu ảnh và thư mục uploads
        if($file['size']>0){
           
            $path = '/news/';
            $fileName =  uniqid() . '-' . $file['name'];
            $avatar = $path . $fileName;
           
            move_uploaded_file($file['tmp_name'],'public/uploads'. $avatar);
            $data['image'] = $avatar;
        }
        
        $model = new News();
        $model->insert($data);

        header('location: news');
    }



    public function edit($id){
        $cateNames = Category::getAtributes(['cate_id','cate_name'])->get();
        $pro_one = News::where(['id','=',$id])->first();
        include_once './app/views/news/new-update.php';
    }

    public function update($id){
        $model = News::where(['id','=',$id])->first();
        $data = $_POST;
        $file = $_FILES['image'];
        if($file['size']>0){
                
            $path = '/news/';
            $fileName =  uniqid() . '-' . $file['name'];
            $avatar = $path . $fileName;
        
            move_uploaded_file($file['tmp_name'],'public/uploads'. $avatar);
            $data['image'] = $avatar;



        }

        echo $model->update($data);
        header('location: news');
    }

    public function destroy($id){
        echo News::destroy($id);
        header('location: news');
    }



    public function detail($id){
        $pro_one = News::where(['id','=',$id])->first();
        $cateNames = Category::all();
        // var_dump($pro_one);
        // die;
        include_once './app/views/news/detail.php';
    }
}   