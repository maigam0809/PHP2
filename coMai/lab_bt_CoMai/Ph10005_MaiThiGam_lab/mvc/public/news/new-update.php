<form action="news&action=update" method="post" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="id" value="<?=$pro_one->id?>">
    </div>

    <div>
        <label for="">Name</label>
        <input type="text" name="title" value="<?=$pro_one->title?>">
    </div>

    <div>
        <label for="">Avatar</label>
        <img src="<?=IMAGE_BE.$pro_one->image?> " alt="" width=70px;><br>
        <input type="file" name="image" value="">
    </div>

    <div>
        <label for="">cate_id</label>
        <select name="cate_id">
            <?php foreach($cateNames as $r): ?>
            <?php if($r->cate_id == $pro_one->cate_id):?>
            <option value="<?= $r->cate_id?>" selected><?= $r->cate_name?></option>
            <?php else: ?>
            <option value="<?= $r->cate_id?>"><?= $r->cate_name?></option>
            <?php endif ?>
            <?php endforeach;?>
        </select>
    </div>
    <div>
        <label for="">Intro</label>
        <input type="text" name="intro" value="<?=$pro_one->intro?>">
    </div>
  
    <div>
        <label for="">Detail</label>
        <textarea name="detail" id="" cols="30" rows="3"><?=$pro_one->detail?></textarea>
    </div>


    </div>
    <div>
        <button type="submit">Tạo mới</button>
    </div>
</form>