
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Pub_id</th>
                <th>
                    <a class="btn" href="books&action=create">Tạo mới</a>
                </th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $c): ?>
            <tr>
                <td><?= $c->book_id?></td>
                <td><?= $c->book_title?></td>
                <td><?= $c->slug?></td>
                <td>
                   <img src="<?=BASE_URL?>public/uploads<?=$c->image?>" alt="" style="width: 100px; height: auto;">
                </td>
                <td><?= $c->quantity?></td>
                <td><?= $c->price?></td>
                <td><?= $c->pub_id?></td>
                <td>
                    <a href="books&action=edit&id=<?=$c->book_id?>">Sửa</a>
                    <a onclick="return confirm('Bạn có muốn xóa thật không?')" href="books&action=destroy&id=<?=$c->book_id?>">Xoá</a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>

</table>