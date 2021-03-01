<?

function dd($val){
    echo "<pre>";
    var_dump($val);
    die;
}

function img_upload($file){
    if($file['size'] > 0){
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], '../uploads/' . $filename);
        return '/uploads/' . $filename;
    }
    return null;
}
const BASE_URL = "http://localhost/PHP2/thayThien/buoi3/";


?>