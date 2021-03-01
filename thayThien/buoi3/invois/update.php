<?php

require_once "../User.php";
require_once "../utils.php";


$id = $_POST['id'];
// echo ($id);
// die;
// $model = User::find($id);

$model = User::where(['id','=',$id])->first();
// $model1 = User::where(['id','=',$id])->get();
// var_dump($model);
// echo "<pre>";
// var_dump($model1);
// die;

$data = $_POST;

$filename = img_upload($_FILES['file']);
if($filename != null){
    $data['avatar'] = $filename;
}

if(!empty( $data['password'])) {
    // bam password o day
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
}

// if($file['size']>0){
//     // uniqid() dùng để mỗi khi thêm ảnh nó sẽ tự động thêm tên đầu 5sdndfadf- 
//     $avatar = 'uploads/' . uniqid() . '-' . $file['name'];
//     move_uploaded_file($file['tmp_name'], "../".$avatar);
//     $data['avatar'] = $avatar;
// }

echo $model->update($data);





// $file = $_FILES['file'];

// $avatar = '';

// Nếu có file thì uploads ảnh và lưu ảnh và thư mục uploads

// if($file['size']>0){
//     // uniqid() dùng để mỗi khi thêm ảnh nó sẽ tự động thêm tên đầu 5sdndfadf- 
//     $avatar = 'uploads/' . uniqid() . '-' . $file['name'];
//     move_uploaded_file($file['tmp_name'], "../".$avatar);
//     $data['avatar'] = $avatar;
// }

header('location: index.php');

?>



