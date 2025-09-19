<!-- Logic xử lý thêm danh mục sản phẩm -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$ten_dm = $_POST["ten_dm"] ?? "";

// Tạo câu truy vấn
$sql = "UPDATE dm_sanpham
        SET ten_danh_muc = ?
        WHERE id = ?";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$ten_dm, $id]);

// Quay về trang danh sách danh mục
redirect_to("/admin/dm_sanpham");
