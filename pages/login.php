<?php
include_once "../include/common.php";
session_start();

if (is_post_method()) {
    $ten_dang_nhap = $_POST["ten_dang_nhap"] ?? "";
    $mat_khau = $_POST["mat_khau"] ?? "";

    $sql = "SELECT ten_dang_nhap, mat_khau FROM tai_khoan WHERE ten_dang_nhap = ?";
    $data = db_select($sql, [$ten_dang_nhap]);

    if (count($data) > 0) {
        $data = $data[0];
        $hash = $data["mat_khau"];
        if (password_verify($mat_khau, $hash) === true) {
            // Mật khẩu đúng => gắn tên đăng nhập vào session
            $_SESSION["ten_dang_nhap"] = $data["ten_dang_nhap"];
            redirect_to("/admin");
        } else {
            // Mật khẩu sai
            js_alert("Mật khẩu không đúng!");
        }
    } else {
        // Sai tên đăng nhập
        js_alert("Tên đăng nhập không đúng!");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        form {
            width: 400px;
            margin: 50px auto;
        }
        input {
            width: 100%;
            display: block;
            padding: 5px;
        }
        form div {
            margin-top: 15px;
        }
        button {
            width: 100%;
            display: block;
            margin: auto;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div>
            <h2>Đăng nhập</h2>
        </div>
        <div>
            <label>Tên đăng nhập</label>
            <input type="text" name="ten_dang_nhap" />
        </div>
        <div>
            <label>Mật khẩu</label>
            <input type="password" name="mat_khau" />
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</body>
</html>