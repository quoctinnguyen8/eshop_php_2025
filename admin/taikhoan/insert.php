<!-- Logic xử lý thêm tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$ten_dang_nhap = $_POST["ten_dang_nhap"] ?? "";
$mat_khau = $_POST["mat_khau"] ?? "";

// BCrypt hash
$hashed = password_hash($mat_khau, PASSWORD_DEFAULT);

// Tạo câu truy vấn
$sql = "INSERT INTO tai_khoan(ten_dang_nhap, mat_khau, ngay_tao)
        VALUES(?, ?, now())";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$ten_dang_nhap, $hashed]);

// Quay về trang danh sách tài khoản
redirect_to("/admin/taikhoan");
