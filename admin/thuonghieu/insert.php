<!-- Logic xử lý thêm thương hiệu -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$ten_thuong_hieu = $_POST["ten_thuong_hieu"] ?? "";
$quoc_gia = $_POST["quoc_gia"] ?? "";

// Tạo câu truy vấn
$sql = "INSERT INTO thuong_hieu(ten_thuong_hieu, quoc_gia, ngay_tao)
        VALUES(?, ?, now())";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$ten_thuong_hieu, $quoc_gia]);

// Quay về trang danh sách thương hiệu
redirect_to("/admin/thuonghieu");