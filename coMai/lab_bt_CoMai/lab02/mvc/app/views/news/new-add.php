<div class="container">
    <h2>Thêm danh mục </h2>

    <form action="news&action=store" method="post" class="form_dang_nhap"
        enctype="multipart/form-data">
        <div>
            <label for="">Tên loại</label>
            <select name="cate_id" class="" id="cate_id">
                <?php
            foreach ($cateNames as $item) : ?>
                <option value="<?= $item->cate_id ?>"
                    <?php echo (isset($_POST['cate_id']) && $_POST['cate_id'] == $item->cate_id) ? 'selected' : ''; ?>>
                    <?= $item->cate_name ?>
                </option>
                <?php endforeach; ?>
            </select>

        </div>

        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" class="" value="<?php echo $_POST['tilte'] ?? ''; ?>" name="title" id=""
                placeholder="Pro Name ?">
            <p><?php echo $err['pro_name'] ?? ''; ?></p>
        </div>

        <div>
            <label for="">Ảnh</label>
            <input type="file" class="" name="image" value="<?php echo $_POST['image'] ?? ''; ?>" id=""
                placeholder="Pro Image ?">
            <p style="color:red;"><?php echo $err['image'] ?? ''; ?></p>
        </div>

        <div>
            <label for="">Intro</label>
            <input type="text" name="intro" class="" id="" value="<?php echo $_POST['intro'] ?? ''; ?>"
                placeholder="Intro ?">
            <p style="color:red;"><?php echo $err['intro'] ?? ''; ?></p>
        </div>
        <div>
            <label for="">Detail</label>
            <textarea name="detail" class="" id="" placeholder="Detail ?"><?php echo $err['detail'] ?? ''; ?><?php echo $_POST['detail'] ?? ''; ?></textarea>
        </div>
        <button type="submit" class=" btn">Lưu</button>
    </form>
</div>