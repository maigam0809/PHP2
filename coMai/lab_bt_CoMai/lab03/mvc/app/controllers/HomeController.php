<?php
namespace App\Controllers;

// use App\Models\Category;

class HomeController{

    public function index(){
        return "Đây là trang chủ của quản trị";
    //    $cates = Category::all();
    //    include_once './app/views/cate/cate-list.php';
    }

    public function about(){
        return "About page here";
    }
    
}