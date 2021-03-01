<?php
namespace App\Controllers;

use App\Models\Category;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::all();
        $this->render('cate-list', compact('cates'));
    }

    public function about(){
        return "About page here!";
    }
}


?>