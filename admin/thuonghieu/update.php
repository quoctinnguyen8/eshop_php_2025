<!-- Logic xử lý cập nhật thương hiệu -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$ten_thuong_hieu = $_POST["ten_thuong_hieu"] ?? "";
$quoc_gia = $_POST["quoc_gia"] ?? "";

// Tạo câu truy vấn
$sql = "UPDATE thuong_hieu
        SET ten_thuong_hieu = ?, quoc_gia = ?
        WHERE id = ?";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$ten_thuong_hieu, $quoc_gia, $id]);

// Quay về trang danh sách thương hiệu
redirect_to("/admin/thuonghieu");
