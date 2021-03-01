<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
define("BASE_URL", "http://localhost/PHP2/coMai/lab_bt_CoMai/lab02/mvc/");
// đường dẫn đến ảnh chỉ back- end
define('IMAGE_BE', BASE_URL . "public/uploads/");

require_once './app/controllers/HomeController.php';
require_once './app/controllers/CateController.php';
require_once './app/controllers/NewController.php';
require_once './app/models/BaseModel.php';
require_once './app/models/Category.php';
require_once './app/models/News.php';

use App\Controllers\HomeController;
use App\Controllers\CateController;
use App\Controllers\NewController;

switch ($url){
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "about":
        $ctr = new HomeController();
        echo $ctr->about();
        break;
    case "category":
        
        $ctr = new CateController();
        echo $ctr->index();
        break;    
    case "news":
        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';
        switch($action){
            case "/":
                $ctr = new NewController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new NewController();
                echo $ctr->create();
            break;
            case "store":
                $ctr = new NewController();
                echo $ctr->store($_POST);
            break;
            case "edit":
                $ctr = new NewController();
                $id = $_GET['id'];
                echo $ctr->edit($id);
            break;
            case "update":
                $ctr = new NewController();
                $id = $_POST['id'];
                // var_dump($id);
                // die;
                echo $ctr->update($id);
            break;
            case "destroy":
                $ctr = new NewController();
                $id = $_GET['id'];
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