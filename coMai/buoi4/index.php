<?php

require_once 'controller/main.php';
require_once 'controller/product.php';
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page){
    case '':
        $ctr = new main();
        echo $ctr->showHomeAdmin();
        break;
    case 'sp':
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch($action){
            case '':
                $ctr = new ProductController();
                $ctr->index();
            break;
            case 'add':
                $ctr = new ProductController();
                $ctr->create();
            break;
            case 'delete':
                $ctr = new ProductController();
                $ctr->destroy();
            break;

        }
    break;
    default:
    echo "Lỗi";
    
}
?>
