<?php
include_once "../_header.php";

$id = $_GET["id"] ?? "";
$sql = "SELECT
            sp.id,
            sp.ten_san_pham,
            sp.mo_ta,
            sp.anh_san_pham,
            sp.gia_ban,
            sp.gia_khuyen_mai,
            sp.ngay_tao,
            sp.ton_kho,
            sp.id_danh_muc,
            sp.id_thuong_hieu
        FROM san_pham sp
        WHERE id = ?";

$data = db_select($sql, [$id]);
$data = $data[0];
?>
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?=$data["id"]?>" name="id" />
    <label>Tên sản phẩm</label>
    <input type="text" value="<?=$data["ten_san_pham"]?>" name="ten_san_pham" required />
    <br>
    <label>Mô tả</label>
    <textarea name="mo_ta"><?=$data["mo_ta"]?></textarea>
    <br>
    <label>Giá</label>
    <input type="number" value="<?=$data["gia_ban"]?>" name="gia_ban" required />
    <br>
    <label>Giá khuyến mãi</label>
    <input type="number" value="<?=$data["gia_khuyen_mai"]?>" name="gia_khuyen_mai" />
    <br>
    <label> </label>
    <img src="<?=upload($data["anh_san_pham"])?>" height="100" width="100" />
    <br>
    <label>Ảnh sản phẩm</label>
    <input type="file" name="anh_san_pham" accept="image/*" />
    <br>
    <label>Tồn kho</label>
    <input type="number" value="<?=$data["ton_kho"]?>" name="ton_kho" min="0" max="9999" />
    <br>
    <label>Danh mục</label>
    <select name="id_danh_muc">
        <?php gen_option_ele('dm_sanpham', 'id', 'ten_danh_muc', $data["id_danh_muc"]) ?>
    </select>
    <br>
    <label>Thương hiệu</label>
    <select name="id_thuong_hieu">
        <?php gen_option_ele('thuong_hieu', 'id', 'ten_thuong_hieu', $data["id_thuong_hieu"]) ?>
    </select>
    <br>
    <button>Cập nhật sản phẩm</button>
</form>
<br>
<?php include_once "../_footer.php" ?>