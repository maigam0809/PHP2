<?php
require_once "../Role.php";
$roles = Role::all();
// var_dump($roles);
// die;
?>

<form action="save-new.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Email</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <label for="">Avatar</label>
        <input type="file" name="file">
    </div>
    <div>
        <label for="">Role</label>
        <select name="role" >
            <?php foreach($roles as $r): ?>
            <option value="<?= $r->id?>"><?= $r->name?></option>
            <?php endforeach?>
        </select>
    </div>
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>