<?php
require_once "../User.php";
require_once '../utils.php';

$roles =[
    ['id'=> 1,'name' => 'Member'],
    ['id'=> 200,'name' => 'Admin'],
    ['id'=> 900,'name' => 'Super Admin']
];

$id = $_GET['id'];
// var_dump($id);
// die;
// truyền vào mảng các giá trị và  đưa ra các biến 
// $arr=[
//     'id','=',$id
// ];
// Lấy ra được mảng một mảng trong đó mảng đầu là object
// $user = User::where1($arr);
// echo "<pre>";
// var_dump($user);
// die;

$user = User::find($id);
?>

<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$user->id?>">

    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="<?=$user->name?>">
    </div>
    <div>
        <label for="">Email</label>
        <input type="text" name="email" value="<?=$user->email?>">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" value="">
        <!-- nếu nhập password thì update password 
        không thì k update -->
    </div>
    <div>
        <label for="">Avatar</label>
        <img src="<?= BASE_URL . $user->avatar?> " alt="" width=70px;><br>
        <input type="file" name="file">
    </div>

    <div>
        <label for="">Role</label>
        <select name="role">
            <?php foreach($roles as $r): ?>
            <?php if($r['id'] == $user->role):?>
            <option value="<?= $r['id']?>" selected><?= $r['name']?></option>
            <?php else: ?>
            <option value="<?= $r['id']?>"><?= $r['name']?></option>
            <?php endif ?>
            <?php endforeach;?>
        </select>
    </div>

    <div>
        <button type="submit">Cập nhật</button>
    </div>
</form>
