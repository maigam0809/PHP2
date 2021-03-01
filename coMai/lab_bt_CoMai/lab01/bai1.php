<?php

class QuanLi{
    public $maNV;
    public $tenNV;
    public $heSo;
  

    function __construct ($MaNV, $TenNV, $HeSo){

        $this->maNV = $MaNV;
        $this->tenNV = $TenNV;
        $this->heSo = $HeSo;
      

    }

    function tinhLuong(){
        $thuong=0;
        if($this->heSo >= 6){
            $thuong = 8000;
        }elseif($this->heSo >= 4){
            $thuong = 4500;
        }elseif($this->heSo >= 3.24){
            $thuong = 3000;
        }else{
            $thuong = 1500;
        }
        return( $this->heSo*1200 + $thuong);
    }

    function hienThiThongTin(){
        echo "<br>Mã Nhân viên : $this->maNV ";
        echo "<br>Tên Nhân viên: $this->tenNV";
        echo "<br>Hệ số Lương : $this->heSo";
        echo "<br>Luong :". $this->tinhLuong();

    }


}

$nhanVien = new QuanLi("PH10005","Mai THị Gấm", 3);

echo "Thông tin nhân viên đó là : ".$nhanVien->tinhLuong();
$nhanVien->hienThiThongTin();


class  NhanVien extends QuanLi{
    public $chucVu;

    function __construct($MaNV, $TenNV, $HeSo, $ChucVu) {
        $this->maNV = $MaNV;
        $this->tenNV = $TenNV;
        $this->heSo = $HeSo;
        $this->chucVu = $ChucVu;

    }


    function hienThiThongTin(){
        parent::hienThiThongTin();
        echo "<br>Chức vụ : $this->chucVu ";
    }

    

}
echo "<br><br><br>Hiển thị nhân viên và chức vụ :";
$nhanVien1 = new NhanVien("PH10005","Mai THị Gấm", 5 ,"nhân viên");

$nhanVien1->hienThiThongTin();


class TaiKhoan extends NhanVien{
    public $user;
    public $password;

    function __construct ($MaNV, $TenNV, $HeSo, $ChucVu, $User, $Password){
        $this->maNV = $MaNV;
        $this->tenNV = $TenNV;
        $this->heSo = $HeSo;
        $this->chucVu = $ChucVu;
        $this->user = $User;
        $this->password = $Password;
    }
  
    function hienThiThongTin(){
        parent::hienThiThongTin();
        echo "<br>User : $this->user ";
        echo "<br>Password : $this->password ";
    }

}

echo "<br><br><br>Hiển thị Tài khoản :";
$taiKhoan1 = new TaiKhoan("PH10005","Mai THị Gấm", 5 ,"nhân viên", "gammtph10005","Gammai_0809");

$taiKhoan1->hienThiThongTin();




?>