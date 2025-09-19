<?php
include_once "include/common.php";

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?= asset("css/style.css")?>">
</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="/eshop3/">Sản phẩm</a></li>
            <li><a href="/eshop3/gio_hang">Giỏ hàng</a></li>
        </ul>
    </nav>
    <main>
        <h1 class="center">Cửa hàng ABC</h1>

        <div class="row">
            <?php foreach ($data as $p) : ?>
            <div class="col">
                <div class="p-img">
                    <img src="<?=upload($p["anh_san_pham"])?>" alt="">
                </div>
                <div class="p-detail">
                    <h5><?=$p["ten_san_pham"]?></h5>
                    <p>Giá: 
                    <?php
                        if ($p["gia_khuyen_mai"] > 0) {
                            echo number_format($p["gia_khuyen_mai"]);
                        } else {
                            echo number_format($p["gia_ban"]);
                        }
                    ?>
                    </p>
                    <p>Danh mục: <?=$p["ten_danh_muc"]?></p>
                </div>
                <div class="p-action">
                    <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>