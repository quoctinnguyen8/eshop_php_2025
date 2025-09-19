<!-- Logic xử lý thêm danh mục sản phẩm -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$ten_dm = $_POST["ten_dm"] ?? "";

// Tạo câu truy vấn
$sql = "INSERT INTO dm_sanpham(ten_danh_muc, ngay_tao)
        VALUES(?, now())";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$ten_dm]);

// Quay về trang danh sách danh mục
redirect_to("/admin/dm_sanpham");
