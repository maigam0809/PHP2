<?php

class ModelFunction {

    function check_nto($n){
        $check = true;
        for($i=2; $i< $n; $i++){
            if($n%$i ==0){
                $check =false;
            }
        }
        
        return $check;
    }

    function list_ntn($n){
        

        var_dump($check);
        die;

        if ($n >= 2) {
            echo "2";
        }
        for ($i = 3; $i < $n; $i+=2) {
            if (check_nto($i)) {
            echo (" " . $i);
            }
        }
        return $check;
    }

    function check_sochan($n){
        $check = false;
        if($n %2 == 0){
            $check = true;
            return $check;
        }
    }





}