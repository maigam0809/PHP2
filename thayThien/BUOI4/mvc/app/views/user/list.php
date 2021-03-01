
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>AVATAR</th>
                <th>
                    <a class="btn" href="user&action=create">Tạo mới 1</á>
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
                    <a href="user&ation=edit?id=<?=$u->id?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" href="remove.php?id=<?=$u->id?>">Xoá</a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>

</table>