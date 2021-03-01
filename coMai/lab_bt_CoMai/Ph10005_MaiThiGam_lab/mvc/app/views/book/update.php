<form action="books&action=update" method="post" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="book_id" value="<?=$pro_one->book_id?>">
    </div>

    <div>
        <label for="">Name</label>
        <input type="text" name="book_title" value="<?=$pro_one->book_title?>">
    </div>

    <div>
        <label for="">Avatar</label>
        <img src="<?=IMAGE_BE.$pro_one->image?> " alt="" width=70px;><br>
        <input type="file" name="image" value="">
    </div>

    <div>
        <label for="">Pub Id</label>
        <select name="pub_id">
            <?php foreach($PubNames as $r): ?>
            <?php if($r->pub_id == $pro_one->pub_id):?>
            <option value="<?= $r->pub_id?>" selected><?= $r->pub_name?></option>
            <?php else: ?>
            <option value="<?= $r->pub_id?>"><?= $r->pub_name?></option>
            <?php endif ?>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price" value="<?=$pro_one->price?>">
    </div>
  
    <div>
        <label for="">Detail</label>
        <textarea name="detail" id="" cols="30" rows="3"><?=$pro_one->detail?></textarea>
    </div>


    </div>
    <div>
        <button type="submit">sửa</button>
    </div>
</form>