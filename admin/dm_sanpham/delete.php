<?php
include_once "../../include/common.php";

// Nhận id từ URL
$id = $_GET["id"] ?? "";

if (empty($id)){
    redirect_to("/admin/dm_sanpham");
}

// Tạo câu query
$sql = "DELETE FROM dm_sanpham WHERE id=?";

// Thực thi câu query
db_execute($sql, [$id]);

// Quay về trang danh sách danh mục
redirect_to("/admin/dm_sanpham");
