<form action="books&action=store" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="book_title">
    </div>
    <div>
            <label for="">Tên Pub</label>
            <select name="pub_id" class="" id="pub_id">
                <?php
            foreach ($PubNames as $item) : ?>
                <option value="<?= $item->pub_id ?>"
                    <?php echo (isset($_POST['pub_id']) && $_POST['pub_id'] == $item->pub_id) ? 'selected' : ''; ?>>
                    <?= $item->pub_name ?>
                </option>
                <?php endforeach; ?>
            </select>

        </div>
    <div>
        <label for="">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">Quantity</label>
        <input type="number" name="quantity">
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="quantity">
    </div>
  
  
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>