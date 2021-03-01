<div class="container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Cate Id</th>
            <th>Image Pro</th>
            <th>Intro</th>
            <th>Detail</th>
            <th><a href="news&action=create">Thêm </a></th>
        </tr>
        <!-- Đổ dữ liệu từ bảng vào  -->
        <?php
          foreach ($news as $item) : ?>
        <tr>
            <td><?= $item ->id?></td>
            <td><?= $item ->title?></td>
            <td><?= $item ->cate_id?></td>
            <td><img src="<?=BASE_URL?>public/uploads<?= $item ->image?>" width="100px" alt="" srcset=""></td>
            <td><?= $item ->intro?></td>
            <td><?= $item ->detail?></td>
            <td>
                <a href="news&action=edit&id=<?=$item->id?>">Sửa</a>
                <a onclick="return confirm('Bạn có chắc chắn xóa không ?')"
                    href="news&action=destroy&id=<?=$item->id?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>