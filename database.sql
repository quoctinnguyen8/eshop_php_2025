
CREATE TABLE IF NOT EXISTS dm_sanpham (
  id int(11) NOT NULL AUTO_INCREMENT,
  ten_danh_muc varchar(100),
  ngay_tao datetime,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS thuong_hieu (
  id int(11) NOT NULL AUTO_INCREMENT,
  ten_thuong_hieu varchar(255),
  quoc_gia varchar(100),
  ngay_tao datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS san_pham (
  id int(11) NOT NULL AUTO_INCREMENT,
  ten_san_pham varchar(255),
  mo_ta text,
  gia_ban decimal(15,2),
  gia_khuyen_mai decimal(15,2),
  anh_san_pham varchar(255),
  ton_kho int(11) DEFAULT 0,
  id_danh_muc int(11),
  id_thuong_hieu int(11),
  ngay_tao datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id),
  KEY id_thuong_hieu (id_thuong_hieu),
  KEY id_danh_muc (id_danh_muc),
  FOREIGN KEY (id_thuong_hieu) REFERENCES thuong_hieu (id),
  FOREIGN KEY (id_danh_muc) REFERENCES dm_sanpham (id)
);

CREATE TABLE IF NOT EXISTS tai_khoan (
  id int(11) NOT NULL AUTO_INCREMENT,
  ten_dang_nhap varchar(100),
  mat_khau varchar(100),
  ngay_tao datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id)
);
