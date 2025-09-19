<?php
include_once "../_header.php";

$sql = "SELECT id, ten_danh_muc, ngay_tao FROM dm_sanpham";
$data = db_select($sql);
//dd($data);
?>

<a href="create.php">Thêm danh mục</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["ten_danh_muc"] ?></td>
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