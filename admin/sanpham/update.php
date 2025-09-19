<?php 
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$ten_san_pham = $_POST["ten_san_pham"] ?? "";
$mo_ta = $_POST["mo_ta"] ?? "";
$gia_ban = $_POST["gia_ban"] ?? "";
$gia_khuyen_mai = $_POST["gia_khuyen_mai"] ?? "";
$anh_san_pham = upload_and_return_filename("anh_san_pham");
$ton_kho = $_POST["ton_kho"] ?? "";
$id_danh_muc = $_POST["id_danh_muc"] ?? "";
$id_thuong_hieu = $_POST["id_thuong_hieu"] ?? "";

if (empty($anh_san_pham)) {
    $sql = "UPDATE san_pham SET
                ten_san_pham = ?,
                mo_ta = ?,
                gia_ban = ?,
                gia_khuyen_mai = ?,
                ton_kho = ?,
                id_danh_muc = ?,
                id_thuong_hieu = ?
            WHERE id = ?";
    
    // Gọi hàm để thực thi truy vấn
    db_execute($sql, [
        $ten_san_pham,
        $mo_ta,
        $gia_ban,
        $gia_khuyen_mai,
        $ton_kho,
        $id_danh_muc,
        $id_thuong_hieu,
        $id
    ]);
} else {
    $sql = "UPDATE san_pham SET
                ten_san_pham = ?,
                mo_ta = ?,
                anh_san_pham = ?,
                gia_ban = ?,
                gia_khuyen_mai = ?,
                ton_kho = ?,
                id_danh_muc = ?,
                id_thuong_hieu = ?
            WHERE id = ?";
    
    // Gọi hàm để thực thi truy vấn
    db_execute($sql, [
        $ten_san_pham,
        $mo_ta,
        $anh_san_pham,
        $gia_ban,
        $gia_khuyen_mai,
        $ton_kho,
        $id_danh_muc,
        $id_thuong_hieu,
        $id
    ]);
}
// Quay về trang danh sách sản phẩm
redirect_to("/admin/sanpham");
?>