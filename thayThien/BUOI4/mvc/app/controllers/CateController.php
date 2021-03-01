<?php
namespace App\Controllers;

use App\Models\Category;

class CateController{

    public function index(){
        $cates = Category::all();
        include_once './app/views/cate/cate-list.php';
    }

    public function create(){
        include_once './app/views/cate/add-new.php';

    }
    public function store(){
        $model = new Category();
        $model->fill($_POST);
        $mode->save();

        // var_dump($_POST);

    }

    public function edit($id){

    }

    public function delete($id){

    }
}