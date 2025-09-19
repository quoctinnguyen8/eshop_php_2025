<?php
include_once "../_header.php";

$sql = "SELECT
            sp.id,
            sp.ten_san_pham,
            sp.anh_san_pham,
            sp.gia_ban,
            sp.gia_khuyen_mai,
            sp.ngay_tao,
            sp.ton_kho,
            dm.ten_danh_muc,
            th.ten_thuong_hieu
        FROM san_pham sp
        LEFT JOIN dm_sanpham dm
            ON dm.id = sp.id_danh_muc
        LEFT JOIN thuong_hieu th
            ON th.id = sp.id_thuong_hieu
        ORDER BY sp.id DESC ";

$data = db_select($sql);
//dd($data);
?>

<a href="create.php">Thêm thương hiệu</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá bán</th>
            <th>Giá KM</th>
            <th>Tồn kho</th>
            <th>Tên danh mục</th>
            <th>Tên thương hiệu</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td>
                    <img src="<?= upload($d["anh_san_pham"]) ?>" width="50" height="50" />
                </td>
                <td><?= $d["ten_san_pham"] ?></td>
                <td><?= $d["gia_ban"] ?></td>
                <td><?= $d["gia_khuyen_mai"] ?></td>
                <td><?= $d["ton_kho"] ?></td>
                <td><?= $d["ten_danh_muc"] ?></td>
                <td><?= $d["ten_thuong_hieu"] ?></td>
                <td><?= $d["ngay_tao"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $d["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $d["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php" ?>