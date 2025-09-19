
<?php
include_once  __DIR__ . "/../include/common.php";

// Kiểm tra đăng nhập
session_start();

// Chưa đăng nhập thì chuyển về trang đăng nhập
if (empty($_SESSION["ten_dang_nhap"])) {
    redirect_to("/pages/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('css/admin.css') ?>" />
</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="/eshop3/admin/dm_sanpham">Danh mục</a></li>
            <li><a href="/eshop3/admin/thuonghieu">Thương hiệu</a></li>
            <li><a href="/eshop3/admin/sanpham">Sản phẩm</a></li>
            <li><a href="/eshop3/admin/taikhoan">Tài khoản</a></li>
        </ul>
    </nav>