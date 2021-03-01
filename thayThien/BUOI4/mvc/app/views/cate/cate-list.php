
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Desc</th>
                <th>
                    <a class="btn" href="category&action=create">Tạo mới</a>
                </th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach($cates as $c): ?>
            <tr>
                <td><?= $c->id?></td>
                <td><?= $c->cate_name?></td>
                <td><?= $c->desc?></td>
                <td>
                    <a href="?id=<?=$c->id?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" href="category&action=delete?id=<?=$c->id?>">Xoá</a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>

</table>