
<table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Star</th>
                <th>
                    <!-- chú ý là tên action = create phải có ở trong Controller -->
                    <a class="btn" href="product&action=create">Thêm mới</á>
                </th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $p): ?>
            <tr>
                <td><?= $p->id?></td>
                <td><?= $p->name?></td>
                <td><?= $p->price?></td>
                <td>
                    <img src="<?= BASE_URL . $p->image?> " alt="" width=70px;>
                </td>
                <td><?= $p->star?></td>
                <td>
                    <a href="product&action=edit&id=<?=$p->id?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" href="product&action=destroy&id=<?=$p->id?>">Xoá</a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>

</table>