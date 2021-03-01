<div class="row">
    <div class="card-body table-responsive p-0">
        <div class="col-md-12">
            <?php
                        // if (strlen($MESSAGE)) {
                            // echo "<h5>$MESSAGE</h5>";
                        // }
                        ?>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">QUẢN LÝ LOẠI HÀNG</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" class="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 pr-4">
                                <div class="form-group">
                                    <label for="">Tên hàng hóa</label>
                                    <input type="text" class="form-control" name="name"
                                        value="<?php echo $_POST['name'] ?? ''; ?>" id="" placeholder="Enter name">
                                    <p style="color:red;"><?php echo $err['name'] ?? ''; ?></p>
                                </div>

                                <div class="form-group">
                                    <label for="">Cate Name</label>
                                    <select name="cate_id" class="form-control" id="cate_id">
                                        <?php
                                            foreach ($cateNames as $item) : ?>
                                        <option value="<?= $item['id'] ?>"
                                            <?php echo (isset($_POST['id']) && $_POST['id'] == $item->id) ? 'selected' : ''; ?>>
                                            <?= $item['cate_name'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Hình Ảnh</label>
                                    <input type="file" class="form-control" name="image" id="" placeholder="Enter name">
                                    <p style="color:red;"><?php echo $err['image'] ?? ''; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" class="form-control" name="description"
                                        value="<?php echo $_POST['description'] ?? ''; ?>" id=""
                                        placeholder="Enter name">
                                    <p style="color:red;"><?php echo $err['description'] ?? ''; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sale</label>
                                    <input type="number" class="form-control" name="sale"
                                        value="<?php echo $_POST['sale'] ?? ''; ?>" id="" placeholder="Enter name">
                                    <p style="color:red;"><?php echo $err['sale'] ?? ''; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Đơn giá</label>
                                    <input type="number" class="form-control" name="price"
                                        value="<?php echo $_POST['price'] ?? ''; ?>" id="" placeholder="Enter price">
                                    <p style="color:red;"><?php echo $err['price'] ?? ''; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <input class="p-3 mr-1" name="status" value="0" type="radio">Đặc biệt
                                        <input class="p-3 mr-1" name="status" value="1" type="radio" checked>Bình thường
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <div>
                                        <input class="p-3 mr-1" name="trang_thai" value="0" type="radio" checked>Ẩn
                                        <input class="p-3 mr-1" name="trang_thai" value="1" type="radio">Hiển thị
                                        <p style="color:red;"><?php echo $err['trang_thai'] ?? ''; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-info" name="btn_insert">Thêm mới</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>