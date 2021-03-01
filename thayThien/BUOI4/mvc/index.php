<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
define("BASE_URL", "http://localhost/PHP2/thayThien/BUOI4/mvc/");

// require_once './app/controllers/HomeController.php';
// require_once './app/controllers/ProductController.php';
// require_once './app/controllers/CateController.php';
// require_once './app/controllers/UserController.php';
// require_once './app/controllers/RoleController.php';
// require_once './app/models/BaseModel.php';
// require_once './app/models/Category.php';
// require_once './app/models/Product.php';
// require_once './app/models/User.php';
// require_once './app/models/Role.php';

require_once './vendor/autoload.php';
require_once './config/database.php';

use App\Controllers\HomeController;
use App\Controllers\CateController;
use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\Controllers\RoleController;

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

        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';

        // index -> lay list -> GET
        // create -> hien view create -> GET
        // store -> tao moi -> POST
        // edit($id) -> hien view sua -> GET
        // update($id, $_REQUEST) -> update -> PUT
        // destroy($id) -> xoa -> DETELE
        
        // var_dump($action);
        switch($action){
            case "/":
                $ctr = new CateController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new CateController();
                echo $ctr->create();
            break;
            case "store":
                $ctr = new CateController();
                echo $ctr->store();
            break;
            case "edit":
                $ctr = new CateController();
                $id = $_GET['id'];
                // var_dump($id);die;
                echo $ctr->edit($id);
            break;
            case "update":
                $ctr = new CateController();
                $id = $_GET['id'];
                echo $ctr->update($id);
            break;
            case "destroy":
                $ctr = new CateController();
                $id = $_GET['id'];
                // var_dump($id);
                // die;
                echo $ctr->destroy($id);
            break;
        }
        break;
    case "product":
        // $ctr = new ProductController();
        // echo $ctr->index();
        // break;
        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';

        // index -> lay list -> GET
        // create -> hien view create -> GET
        // store -> tao moi -> POST
        // edit($id) -> hien view sua -> GET
        // update($id, $_REQUEST) -> update -> PUT
        // destroy($id) -> xoa -> DETELE
        
        // var_dump($action);
        switch($action){
            case "/":
                $ctr = new ProductController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new ProductController();
                echo $ctr->create();
            break;
            case "store":
                $ctr = new ProductController();
                echo $ctr->store($_POST);
            break;
            case "edit":
                $ctr = new ProductController();
                $id = $_GET['id'];
                // var_dump($id);die;
                echo $ctr->edit($id);
            break;
            case "update":
                $ctr = new ProductController();
                $id = $_GET['id'];
                echo $ctr->update($id);
            break;
            case "destroy":
                $ctr = new ProductController();
                $id = $_GET['id'];
                // var_dump($id);
                // die;
                echo $ctr->destroy($id);
            break;
        }
    break;
    case "user":
        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';
        // var_dump($action);
        // die;
        switch($action){
            case "/":
                $ctr = new UserController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new UserController();
                echo $ctr->create();
            break;
            case "edit":
                $ctr = new UserController();
                echo $ctr->edit();
            break;
        }
    break;
    case "role":
        $action = isset($_GET['action']) == true ? $_GET['action'] : '/';
        // var_dump($action);
        // die;
        switch($action){
            case "/":
                $ctr = new RoleController();
                echo $ctr->index();
            break;
            case "create":
                $ctr = new RoleController();
                echo $ctr->create();
            break;
            case "edit":
                $ctr = new RoleController();
                echo $ctr->edit();
            break;
        }
        break;
    default:
        echo "NOT FOUND ";
        break;

    
        
    
}


?>

