<?php

require "./controller/controllerFunction.php";

$url = isset($_GET['url']) ? $_GET['url'] : '';
switch ($url){
    case '':
        $ctr = new controllerFunction();
        $ctr->showKiemTra();
        break;
    default :
        echo "đường dẫn lỗi";
        brek;

}

?>