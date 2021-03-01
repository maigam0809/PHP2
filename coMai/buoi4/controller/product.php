<?php

require_once './model/productModel.php';
require_once './model/cateModel.php';

class ProductController {
    function index(){
        $model = new productModel();
        $products = $model->productAll();
        require_once './view/product/index.php';
    }


    function create(){
        $model = new CateModel();
        $cateNames =$model->cateName();
        require_once './view/product/create.php';

        $err = [
            'name' => '',
            'image' => '',
            'detail' => '',
            'price' => '',
            'sale' => '',
            'description' => '',
        
        ];
                
        if (isset($_POST['btn_insert']) ){
            // extract($_REQUEST);
            // $data = $_POST;
            // var_dump($_REQUEST['name']);
            
            // die;
            
            try {
                // $data = $_POST;
                // var_dump($data);
                // die;
                

                $pattern['name'] = "/^([a-zA-Z ]{3,})$/i";
            
                if (trim($_POST['name']) == '') {
                    $err['name'] = "Please name products.";
                } elseif (preg_match($pattern['name'], $_POST['name']) == 0) {
                    $errors['name'] = "Nhập tên không đúng";
                }


                // chuyển đổi không phân biệt chữ cái hoa và chữ cái thường
                // $a = strtoupper($name);
                // $sql = "SELECT name FROM products where id <> $id and name like '$name'";
                // $b = pdo_query($sql);
                // var_dump($b);
                // die;
                // if(count($b) > 0){
                //     $err['name'] = "Tên sp đã tồn tại";
                // }
                

                

                if ($_FILES['image']['size'] > 0) {
                
                    if (
                    $_FILES['image']['type'] == 'image/png' ||
                    $_FILES['image']['type'] == 'image/jpg' ||
                    $_FILES['image']['type'] == 'image/jpeg'
                    ) {
                    if ($_FILES['image']['size'] > 0) {
                        $up_hinh = save_file("image", "$IMAGE_DIR/products/");
                        $image = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
                    } else {
                        $err['image'] = "Nhập đúng định dạng ảnh nhưng không đúng kích thước";
                    }
                    } else {
                    $err['image'] = "Ảnh của bạn sai định dạng.
                        <br>Bạn hãy chọn ảnh có định dạng : jpg,jpeg,png";
                    }
                } else {
                    $err['image'] = "Bạn chưa nhập ảnh";
                }



                // if (trim($_POST['detail']) == '') {
                //     $err['detail'] = "Chưa nhập chi tiết cho sản phẩm";
                // }

                
                if (trim($_POST['description']) == '') {
                    $err['description'] = "Chưa nhập chi tiết cho sản phẩm";
                }

                if (trim($_POST['price']) == '') {
                    $err['price'] = "Bạn không được để trống giá của sản phẩm";
                } elseif ($_POST['price'] <= 0) {
                    $err['price'] = "Giá của sản phẩm phải nhập vào giá trị dương và không được phép âm";
                }

                if (trim($_POST['sale']) == '') {
                    $err['sale'] = "Bạn không được để trống giảm giá";
                } elseif ($_POST['sale'] < 0) {
                    $err['sale'] = "Giảm giá của sản phẩm phải nhập vào giá trị dương và không được phép âm";
                }

                var_dump($err);
                // die;

              



                if (!array_filter($err)) {
                    $data = [
                        'id' => $id,
                        'name' => $name,
                        'image' => $image,
                        'description' => $description,
                        'cate_id' => $cate_id,
                        'detail' => $detail,
                        'price' => $price,
                        'sale' => $sale,
                        'status' => $status,
                        
                    ];

                    $model = new productModel();
                    echo $model->productCreat($data);
                    unset($data);
                    $MESSAGE = "Thêm mới thành công!";
                    header("location:index");
                }

            } 
            catch (Exception $exc) {
                $MESSAGE = "thêm mới thất bại!";
                $item = hang_hoa_select_by_id($id);
                extract($item);
            }


        } 
    }
    function update(){
        require_once './view/product/update.php';
    }
    function delete(){
        
    }
}       