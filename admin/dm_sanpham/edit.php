<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/dm_sanpham");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, ten_danh_muc, ngay_tao
        FROM dm_sanpham
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?=$id?>" type="hidden" name="id">
    <label>Tên danh mục</label>
    <input type="text" name="ten_dm" value="<?=$data["ten_danh_muc"]?>" />

    <button>Sửa danh mục</button>
</form>

<?php include_once "../_footer.php" ?>