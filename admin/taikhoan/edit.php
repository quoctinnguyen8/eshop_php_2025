<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/taikhoan");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, ten_dang_nhap, ngay_tao
        FROM tai_khoan
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?=$id?>" type="hidden" name="id">
    <label>Tên đăng nhập</label>
    <input type="text" name="ten_dang_nhap" value="<?=$data["ten_dang_nhap"]?>" required />

    <br>
    <label>Mật khẩu</label>
    <input type="password" name="mat_khau" />
    <br>

    <button>Sửa tài khoản</button>
</form>

<?php include_once "../_footer.php" ?>
