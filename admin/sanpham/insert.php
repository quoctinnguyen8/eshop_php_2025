<?php 
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$ten_san_pham = $_POST["ten_san_pham"] ?? "";
$mo_ta = $_POST["mo_ta"] ?? "";
$gia_ban = $_POST["gia_ban"] ?? "";
$gia_khuyen_mai = $_POST["gia_khuyen_mai"] ?? "";
$anh_san_pham = upload_and_return_filename("anh_san_pham");
$ton_kho = $_POST["ton_kho"] ?? "";
$id_danh_muc = $_POST["id_danh_muc"] ?? "";
$id_thuong_hieu = $_POST["id_thuong_hieu"] ?? "";

// Tạo câu truy vấn
$sql = "INSERT INTO san_pham(
            ten_san_pham,
            mo_ta,
            gia_ban,
            gia_khuyen_mai,
            anh_san_pham,
            ton_kho,
            ngay_tao,
            id_danh_muc,
            id_thuong_hieu
        ) VALUES(?, ?, ?, ?, ?, ?, now(), ?, ?)";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [
    $ten_san_pham,
    $mo_ta,
    $gia_ban,
    $gia_khuyen_mai,
    $anh_san_pham,
    $ton_kho,
    $id_danh_muc,
    $id_thuong_hieu,
]);

// Quay về trang danh sách sản phẩm
redirect_to("/admin/sanpham");
?>