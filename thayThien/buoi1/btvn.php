<!-- tạo lớp cầu thủ bóng đá gồm các thuộc tính:
tên
tuổi
năm sinh
quốc tịch
giải đấu tham gia 
số trận đã đá 
số bàn thắng 
lương 
thực hiện viết và kiểm tra lại kết quả các hàm sau:
ham_ghi_ban ($so_ban_thang)
hàm tang_luong($so_luong_tang_them) 
gia_thi_truong () => tính bằng công thức :
Nếu cầu thủ dưới 23 tuổi => 15tr + mỗi bàn thắng trị giá 300k
Nếu cầu thủ từ 23-27 tuổi => 30tr + mỗi bàn thắng trị giá 500k
Nếu cầu thủ trên 27 tuổi => 15tr + mỗi bàn thắng trị giá 200k -->


<?php

class CauThuBongDa{
    public $ten;
    public $namSinh;
    public $quocTich;
    public $giaiDauThamGia;
    public $soTranDaThang;
    public $soBanThang;
    public $luong;
    
    function ghi_ban($soBanThang = 0){
        $this->soBanThang +=$soBanThang;

    }

    function tang_luong($soLuongTangThem){
        $this->luong += $soLuongTangThem;
    }

    function giaThiTruong(){

        /// muốn lấy tuổi hiện tại thì ta phải lấy số năm hiện tại trừ đi năm sinh sẽ ra số tuổi hiện tại và thực tế
        $nam = date('Y');// hàm sử dụng năm hiện tại
        $tuoi = $nam - $this->namSinh; // tính tuổi
        $giaThiTruong;
        if($tuoi < 23){
            $giaThiTruong = 15000000 + ($this->soBanThang*300000);
        }elseif($tuoi <=27){
            $giaThiTruong = 30000000 + ($this->soBanThang*500000);
        }else{
            $giaThiTruong = 25000000 + ($this->soBanThang*200000);
        }
        return $giaThiTruong;
    }
}

$chi = new CauThuBongDa();
$chi->namSinh = 1998;
$chi->soBanThang = 10;

// echo $chi->giaThiTruong();
// Làm tròn số sau 3 số 0 tách chuỗi sau 3 số.
echo "Giá Thị Trường : ".number_format($chi->giaThiTruong(), 0, '.', '.') ;


?>







