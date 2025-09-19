<?php
include_once "../_header.php";

?>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <label>Tên sản phẩm</label>
    <input type="text" name="ten_san_pham" required />
    <br>
    <label>Mô tả</label>
    <textarea name="mo_ta"></textarea>
    <br>
    <label>Giá</label>
    <input type="number" name="gia_ban" required />
    <br>
    <label>Giá khuyến mãi</label>
    <input type="number" name="gia_khuyen_mai" />
    <br>
    <label>Ảnh sản phẩm</label>
    <input type="file" name="anh_san_pham" accept="image/*" />
    <br>
    <label>Tồn kho</label>
    <input type="number" name="ton_kho" min="0" max="9999" />
    <br>
    <label>Danh mục</label>
    <select name="id_danh_muc">
        <?php gen_option_ele('dm_sanpham', 'id', 'ten_danh_muc') ?>
    </select>
    <br>
    <label>Thương hiệu</label>
    <select name="id_thuong_hieu">
        <?php gen_option_ele('thuong_hieu', 'id', 'ten_thuong_hieu') ?>
    </select>
    <br>
    <button>Thêm sản phẩm</button>
</form>

<?php include_once "../_footer.php" ?>