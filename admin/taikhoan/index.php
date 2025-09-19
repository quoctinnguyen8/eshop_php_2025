<?php
include_once "../_header.php";

$sql = "SELECT id, ten_dang_nhap, ngay_tao FROM tai_khoan ORDER BY id DESC";
$data = db_select($sql);
?>

<a href="create.php">Thêm tài khoản</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["ten_dang_nhap"] ?></td>
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
