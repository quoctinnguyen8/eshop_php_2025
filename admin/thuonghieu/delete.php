<?php
include_once "../../include/common.php";

// Nhận id từ URL
$id = $_GET["id"] ?? "";

if (empty($id)){
    redirect_to("/admin/thuonghieu");
}

// Tạo câu query
$sql = "DELETE FROM thuong_hieu WHERE id=?";

// Thực thi câu query
db_execute($sql, [$id]);

// Quay về trang danh sách thương hiệu
redirect_to("/admin/thuonghieu");
