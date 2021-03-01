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
       echo "Mã sinh viên :  $this->maSV";
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

// Khở tạo một đối tượng
$sv1=new SinhVien('Ph10005', 'Mai Thị Gấm', 9);
$sv2=new SinhVien('Ph10003', 'Mai Thị a', 3);
$sv3=new SinhVien('Ph10006', 'Mai Thị b', 5);
$sv4=new SinhVien('Ph10008', 'Mai Thị c', 7);

//hiển thị thông tin sinh viên
$sv1->htsv();
$sv1->xepLoai();

echo "<br>";
$sv2->htsv();
$sv2->xepLoai();
echo "<br>";
$sv3->htsv();
$sv3->xepLoai();

echo "<br>";
$sv4->htsv();
$sv4->xepLoai();

// xếp loại sinh viên



?>
<!-- đối tượng là sự vật,hiện tượng, sự việc được diễn ra -->
<!-- Đối tượng gồm : thuộc tính và phương thức(Hành động) -->
<!-- object gồm : properties  và methods -->
<!-- class là một tập hợp các đối tượng có chung thuộc tính  -->
