<?php

require_once './model/cateModel.php';

class CateController {
    function index(){
        $model = new CateModel();
        $products = $model->productAll();
        require_once './view/product/index.php';
    }
    function create(){
        $model = new CateModel();
        $cateNames =$model->cateName();
        require_once './view/product/create.php';
    }

    
    function update(){
        require_once './view/product/update.php';
    }
    function delete(){
        
    }
}