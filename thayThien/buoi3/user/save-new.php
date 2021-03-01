<?php
require_once '../User.php';

$data = $_POST;

$file = $_FILES['file'];

$avatar = '';

// Nếu có file thì uploads ảnh và lưu ảnh và thư mục uploads
if($file['size']>0){
    // uniqid() dùng để mỗi khi thêm ảnh nó sẽ tự động thêm tên đầu 5sdndfadf- 
    $avatar = 'uploads/' . uniqid() . '-' . $file['name'];
    move_uploaded_file($file['tmp_name'], "../".$avatar);
    $data['avatar'] = $avatar;
}

// MÃ hoá pass
$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

// tạo một đối tượng mơi
$model = new User();
$model->insert($data);
header('location: index.php');


?>