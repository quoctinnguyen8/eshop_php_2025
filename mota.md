# Web bán (Sách/Xe/Điện thoại/Laptop/Máy ảnh/...)

Trang web bán Laptop

## Database

Danh mục sản phẩm (dm_sanpham)

- Id danh mục, khóa chính, tự tăng
- Tên danh mục
- Ngày tạo

Thương hiệu (hoặc Nhà sản xuất)
- Id thương hiệu/NSX, khóa chính, tự tăng
- Tên thương hiệu
- Quốc gia
- Ngày tạo

Sản phẩm
- Id, khóa chính, tự tăng
- Tên sản phẩm
- Mô tả
- Giá bán
- Giá khuyến mãi
- Ảnh sản phẩm
- Tồn kho
- Id danh mục, khóa ngoại
- Id thương hiệu, khóa ngoại
- Ngày tạo

Tài khoản
- Id, khóa chính tự tăng
- Tên đăng nhập
- Mật khẩu (100 ký tự)
- Ngày tạo
