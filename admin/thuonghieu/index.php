<?php
include_once "../_header.php";

$sql = "SELECT id, ten_thuong_hieu, quoc_gia, ngay_tao FROM thuong_hieu ORDER BY id DESC";
$data = db_select($sql);
//dd($data);
?>

<a href="create.php">Thêm thương hiệu</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên thương hiệu</th>
            <th>Quốc gia</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["ten_thuong_hieu"] ?></td>
                <td><?= $d["quoc_gia"] ?></td>
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