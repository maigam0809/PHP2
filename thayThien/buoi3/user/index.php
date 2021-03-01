<?php
require_once '../User.php';
require_once '../utils.php';

$users = User::all();
// echo "<pre>";
// var_dump($users);


?>

<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>AVATAR</th>
                <th>
                    <a class="btn" href="add-new.php">Tạo mới 1</á>
                </th>
                <th>
                    <a class="btn" href="new2.php">Tạo mới 2</á>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $u): ?>
            <tr>
                <td><?= $u->id?></td>
                <td><?= $u->name?></td>
                <td><?= $u->email?></td>
                <td>
                    <img src="<?= BASE_URL . $u->avatar?> " alt="" width=70px;>
                </td>
                <td>
                    <a href="edit.php?id=<?=$u->id?>">Sửa1</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" href="remove.php?id=<?=$u->id?>">Xoá</a>
                </td>
                <td>
                    <a href="edit2.php?id=<?=$u->id?>">Sửa2</a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>

</table>