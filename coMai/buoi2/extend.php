<?php
class SinhVien{
    // Khai báo các thuộc tính
    public $maSV;
    public $tenSV;
    public $diem;

    // khai báo hằng số
    // const PI = 3.14;

    // hàm tạo contructor  được đặt ngay sau các thuộc tính
    function __construct($MaSV, $TenSV, $Diem){
        // code thực thi lệnh
        $this->maSV = $MaSV;
        $this->tenSV = $TenSV;
        $this->diem = $Diem;
    }
  

    // xây dựng function hiển thị thông tin sinh viên
    function htsv(){
       echo "<br>Mã sinh viên :  $this->maSV";
       echo "<br>Tên sinh viên : $this->tenSV";
       echo "<br>Điểm sinh viên : $this->diem";
      

    }

    function xepLoai(){
        if($this->diem >=9){
            echo "=>Sinh viên xuất sắc";
        }elseif($this->diem >=8){
            echo "=>Sinh viên giỏi";
        }elseif($this->diem >=7){
            echo "=>Sinh viên khá";
        }elseif($this->diem >=5){
            echo "=>Sinh viên TB";
        }else{
            echo "=>Sinh viên Yếu";
        }
    }

}



class SinhVienDH extends SinhVien{
    public $diemTA;

    function __construct($MaSV, $TenSV, $Diem, $DiemTA){
        $this->maSV = $MaSV;
        $this->tenSV = $TenSV;
        $this->diem = $Diem;
        $this->diemTA = $DiemTA;
    }

    // Ham hiển thị thông tin sinh viên
    function htsv(){
        parent::htsv();
        echo "<br>Điểm TA: $this->diemTA";
        
    }

}

$SVDH1 = new SinhVienDH("Ph10005","Mai Thị Gấm",7,8);
echo "Thông tin SV đại học là :";
$SVDH1->htsv();