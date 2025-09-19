<!-- Logic xử lý cập nhật tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$ten_dang_nhap = $_POST["ten_dang_nhap"] ?? "";
$mat_khau = $_POST["mat_khau"] ?? "";

if (empty($mat_khau)) {
    $sql = "UPDATE tai_khoan
            SET ten_dang_nhap = ?
            WHERE id = ?";
    db_execute($sql, [$ten_dang_nhap, $id]);
} else {
    $hash = password_hash($mat_khau, PASSWORD_DEFAULT);
    $sql = "UPDATE tai_khoan
        SET ten_dang_nhap = ?, mat_khau = ?
        WHERE id = ?";
    db_execute($sql, [$ten_dang_nhap, $hash, $id]);
}

// Quay về trang danh sách tài khoản
redirect_to("/admin/taikhoan");
