<?php
namespace App\Controllers;

use App\Models\News;
use App\Models\Category;

class HomeController{

    public function index(){
        $news = News::all();
        $cateNames = Category::all();
        include_once './app/views/main/index.php';
  
    }

    // public function detail(){
    //     return "About page here";
    // }
    
}