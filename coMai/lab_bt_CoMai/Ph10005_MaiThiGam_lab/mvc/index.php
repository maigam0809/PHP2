<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
define("BASE_URL", "http://localhost/PHP2/coMai/lab_bt_CoMai/baithi1/mvc/");
// đường dẫn đến ảnh chỉ back- end
define('IMAGE_BE', BASE_URL . "public/uploads/");

require_once './app/controllers/BookController.php';
require_once './app/models/BaseModel.php';
require_once './app/models/Books.php';
require_once './app/models/Publishers.php';

use App\Controllers\HomeController;
use App\Controllers\BookController;

switch ($url){
    case "books":
        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';
        // var_dump($action);
        $id = isset($_GET['id']) == true ? $_GET['id'] : '';
        // var_dump($a);
        // die;
        switch($action){
            case "/":
                $ctr = new BookController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new BookController();
                echo $ctr->create();
            break;
            case "store":
                $ctr = new BookController();
                echo $ctr->store($_POST);
            break;
            case "edit":
                $ctr = new BookController();
                $id = $_GET['id'];
                echo $ctr->edit($id);
            break;
            case "update":
                $ctr = new BookController();
                $id = $_POST['book_id'];
                // var_dump($id);
                // die;
                echo $ctr->update($id);
            break;
            case "destroy":
                $ctr = new BookController();
                // $id = $_GET['id'];
                // var_dump($id);
                // die;
                echo $ctr->destroy($id);
            break;
        }
    break;

    default:
        echo "NOT FOUND ";
        break;

    
        
    
}


?>