<?php
namespace App\Controllers;

use App\Models\Publishers;
use App\Models\Books;

class BookController{
    
    public function index(){
        $books = Books::all();

        include_once './app/views/book/list.php';
    }

    public function create(){
        $PubNames = Publishers::getAtributes(['pub_id','pub_name'])->get();
        include_once './app/views/book/create.php';
    }

    public function store($request){
        $data = $request;
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
        
        // var_dump($data);
        // die;
        $model = new Books();
        $model->insert($data);
        header('location: books');
    }



    public function edit($id){
        $PubNames = Publishers::getAtributes(['pub_id','pub_name'])->get();
        $pro_one = Books::where(['book_id','=',$id])->first();
        include_once './app/views/book/update.php';
    }

    public function update($id){
        $model = Books::where(['book_id','=',$id])->first();
        $data = $_POST;
        $file = $_FILES['image'];
        if($file['size']>0){
                
            $path = '/news/';
            $fileName =  uniqid() . '-' . $file['name'];
            $avatar = $path . $fileName;
        
            move_uploaded_file($file['tmp_name'],'public/uploads'. $avatar);
            $data['image'] = $avatar;



        }
        // var_dump($data);
        // die;

        var_dump($model->update($data));
        // die;
        header('location: books');
    }

    public function destroy($id){
        echo Books::destroy('book_id',$id);
        header('location: books');
    }
}   