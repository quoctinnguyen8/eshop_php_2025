<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/thuonghieu");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, ten_thuong_hieu, quoc_gia, ngay_tao
        FROM thuong_hieu
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?=$id?>" type="hidden" name="id">
    <label>Tên thương hiệu</label>
    <input type="text" name="ten_thuong_hieu" value="<?=$data["ten_thuong_hieu"]?>" required />

    <label>Quốc gia</label>
    <input type="text" name="quoc_gia" value="<?=$data["quoc_gia"]?>" />

    <button>Sửa thương hiệu</button>
</form>

<?php include_once "../_footer.php" ?>
