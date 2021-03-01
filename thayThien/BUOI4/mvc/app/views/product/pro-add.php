
<form action="<?= BASE_URL . 'product&action=store' ?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''?>">
    </div>

    <div>
        <label for="">Avatar</label>
        <input type="file" name="image" value="">
    </div>

    <div class="form-group">
        <label for="">Cate Name</label>
        <select name="cate_id" class="form-control" id="cate_id">
            <?php
            foreach ($cateNames as $item) : ?>
                <option value="<?= $item->id ?>"
                    <?php echo (isset($_POST['cate_id']) && $_POST['cate_id'] == $item->id) ? 'selected' : ''; ?>>
                    <?= $item->cate_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="">Price</label>
        <input type="text" name="price" value=<?php echo($_POST['price']) ?? ''?>>
    </div>
    <div>
        <label for="">short Desc</label>
        <textarea name="short_desc" id="" cols="30" rows="3"></textarea>
    </div>
    <div>
        <label for="">Detail</label>
        <textarea name="detail" id="" cols="30" rows="3"></textarea>
    </div>
 
   
    </div>
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>