<?php
class Untils{
    function dd($val){
        echo "<pre>";
        var_dump($val);
        die;
    }
    
    function img_upload($file){
        if($file['size'] > 0){
            $filename = uniqid() . '-' . $file['name'];
            move_uploaded_file($file['tmp_name'], '.IMAGE_BE./products/' . $filename);
            return './public/uploads/' . $filename;
        }
        return null;
    }
}


?>