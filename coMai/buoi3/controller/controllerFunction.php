<?php
require_once './model/function.php';
class ControllerFunction {
    function showKiemTra(){
        require_once './view/kiemtra.php';
        $model = new ModelFunction();
    
        if(isset($_POST['btn_nt'])){
            $son = $_POST['son'];
           
            if($model->check_nto($son)){
                echo $son ." là số nguyên tố";
            }else{
                echo $son . " Không là số nguyên tố";
            }
        }

        if(isset($_POST['btn_list_nt'])){
            $son = $_POST['son'];
            echo ("Tất cả các số nguyên tố nhỏ hơn $son là: <br>");

            if ($son >= 2) {
                echo "2";
            }
            for ($i = 3; $i < $son; $i+=2) {
                if ($model->check_nto($i)) {
                    echo (" " . $i);
                }
            }
        }


      
        if(isset($_POST['btn_chan'])){
            $son = $_POST['son'];
            if($model->check_sochan($son)){
                echo $son . " là số chẵn";
            }else{
                echo $son . " Không là số chẵn.";
            }
        }
    }


}


?>
