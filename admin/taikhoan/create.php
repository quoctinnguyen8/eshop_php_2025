<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Tên đăng nhập</label>
    <input type="text" name="ten_dang_nhap" required />

    <br>
    <label>Mật khẩu</label>
    <input type="password" name="mat_khau" required />
    <br>
    <button>Thêm tài khoản</button>
</form>

<?php include_once "../_footer.php" ?>
