<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Tên thương hiệu</label>
    <input type="text" name="ten_thuong_hieu" required />

    <label>Quốc gia</label>
    <input type="text" name="quoc_gia" />

    <button>Thêm thương hiệu</button>
</form>

<?php include_once "../_footer.php" ?>