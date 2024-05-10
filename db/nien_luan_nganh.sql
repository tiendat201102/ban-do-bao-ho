-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2024 lúc 03:01 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nien_luan_nganh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `usernameAD` varchar(10) NOT NULL,
  `passwordAD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`usernameAD`, `passwordAD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieuxuat`
--

CREATE TABLE `chitietphieuxuat` (
  `id_sanpham` int(10) NOT NULL,
  `id_donhang` int(10) NOT NULL,
  `soluongban` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieuxuat`
--

INSERT INTO `chitietphieuxuat` (`id_sanpham`, `id_donhang`, `soluongban`) VALUES
(3, 4, 2),
(1, 4, 2),
(1, 10, 1),
(2, 10, 1),
(1, 11, 1),
(7, 15, 1),
(6, 16, 1),
(6, 17, 1),
(6, 18, 1),
(1, 19, 2),
(3, 19, 1),
(5, 19, 1),
(8, 20, 1),
(2, 21, 1),
(2, 22, 1),
(2, 23, 1),
(2, 24, 1),
(2, 25, 1),
(6, 25, 1),
(5, 26, 1),
(5, 27, 1),
(5, 28, 1),
(5, 29, 1),
(5, 30, 1),
(5, 31, 1),
(5, 32, 1),
(5, 33, 1),
(1, 34, 1),
(4, 35, 1),
(16, 36, 1),
(11, 37, 1),
(11, 38, 1),
(11, 39, 1),
(11, 40, 1),
(11, 41, 1),
(11, 42, 1),
(11, 43, 1),
(11, 44, 1),
(11, 45, 1),
(11, 46, 1),
(11, 47, 1),
(11, 48, 1),
(24, 49, 1),
(2, 50, 1),
(2, 51, 2),
(6, 52, 1),
(16, 52, 1),
(4, 53, 1),
(19, 54, 1),
(12, 55, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `tenkhachhang` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `email`, `password`, `tenkhachhang`, `sdt`, `diachi`) VALUES
(7, 'm@gmail.com', '251cbcaa078c30839f4e8a4e3c9dff92fea64a24', 'Nguyen Van A', '0123456789', 'Can Tho'),
(8, 'duckl2002vn@gmail.com', 'a7a61c6eb7550dcb17549a3ed55902488f2393be', 'Nguyen Van B', '0123456788', 'Hau Giang'),
(9, 'duc@gmail.com', 'eefdf4727bb0f59c2c5c19b72583b80f77883237', 'Nguyen Van C', '0123456787', 'Kien Giang'),
(10, 'T@gmail.com', '16d26f68a1026a6f3e01ad84a543cf0b6b17fde8', 'Nguyen Van T', '0123456786', 'Ben Tre'),
(11, 'd@gmail.com', '1724852c76533f5e5746ac3e5291e8f376091e70', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(10) NOT NULL,
  `id_khachhang` int(5) NOT NULL,
  `soluongsanpham` int(5) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydathang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_khachhang`, `soluongsanpham`, `tongtien`, `ngaydathang`) VALUES
(4, 9, 1, 150000, '2024-03-28'),
(5, 9, 2, 488000, '2024-03-28'),
(6, 9, 1, 150000, '2024-03-28'),
(7, 9, 2, 300000, '2024-03-28'),
(8, 9, 2, 488000, '2024-03-28'),
(9, 9, 2, 300000, '2024-03-28'),
(10, 9, 2, 488000, '2024-03-28'),
(11, 9, 1, 150000, '2024-03-28'),
(15, 9, 1, 234000, '2024-04-07'),
(16, 9, 1, 899000, '2024-04-07'),
(17, 9, 1, 899000, '2024-04-07'),
(18, 9, 1, 899000, '2024-04-07'),
(19, 10, 4, 2373000, '2024-04-07'),
(20, 10, 1, 179000, '2024-04-10'),
(21, 10, 1, 169000, '2024-04-10'),
(22, 10, 1, 169000, '2024-04-10'),
(23, 10, 1, 169000, '2024-04-10'),
(24, 10, 1, 169000, '2024-04-10'),
(25, 10, 2, 1068000, '2024-04-10'),
(26, 10, 1, 399000, '2024-04-10'),
(27, 10, 1, 399000, '2024-04-10'),
(28, 10, 1, 399000, '2024-04-10'),
(29, 10, 1, 399000, '2024-04-10'),
(30, 10, 1, 399000, '2024-04-10'),
(31, 10, 1, 399000, '2024-04-10'),
(32, 10, 1, 399000, '2024-04-10'),
(33, 10, 1, 399000, '2024-04-10'),
(34, 10, 1, 150000, '2024-04-10'),
(35, 10, 1, 499000, '2024-04-10'),
(36, 10, 1, 189000, '2024-04-10'),
(37, 10, 1, 599000, '2024-04-15'),
(38, 10, 1, 599000, '2024-04-15'),
(39, 10, 1, 599000, '2024-04-15'),
(40, 10, 1, 599000, '2024-04-15'),
(41, 10, 1, 599000, '2024-04-15'),
(42, 10, 1, 599000, '2024-04-15'),
(43, 10, 1, 599000, '2024-04-15'),
(44, 10, 1, 599000, '2024-04-15'),
(45, 10, 1, 599000, '2024-04-15'),
(46, 10, 1, 599000, '2024-04-15'),
(47, 10, 1, 599000, '2024-04-15'),
(48, 10, 1, 599000, '2024-04-15'),
(49, 10, 1, 199000, '2024-04-15'),
(50, 10, 1, 169000, '2024-04-18'),
(51, 10, 2, 338000, '2024-04-18'),
(52, 10, 2, 1088000, '2024-04-18'),
(53, 10, 1, 499000, '2024-04-18'),
(54, 10, 1, 279000, '2024-04-18'),
(55, 10, 1, 699000, '2024-04-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(5) NOT NULL,
  `tenloaisp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloaisp`) VALUES
(1, 'quanao'),
(2, 'gangtay'),
(3, 'giay'),
(4, 'mu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `id_loaisp` int(5) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `giaban` int(10) NOT NULL,
  `soluongtonkho` int(5) NOT NULL,
  `motachitiet` text NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_loaisp`, `tensanpham`, `giaban`, `soluongtonkho`, `motachitiet`, `image`) VALUES
(1, 1, 'Áo Phản Quang 3M Màu Cam', 150000, 0, 'Áo Phản Quang 3M Màu Cam', 'images/a01.png'),
(2, 1, 'Áo Phản Quang Xanh Lá - Dây Vàng', 169000, 5, 'Áo Phản Quang Xanh Lá - Dây Vàng', 'images/a02.png'),
(3, 1, 'Áo Phản Quang Lưới Màu Đỏ', 159000, 0, 'Áo Phản Quang Lưới Màu Đỏ', 'images/a03.png'),
(4, 1, 'Quần áo công nhân Kaki màu ghi', 499000, 3, 'Quần áo công nhân Kaki màu ghi', 'images/a04.png'),
(5, 3, 'Ủng Bảo Hộ Cao Su Đen', 399000, 3, 'Ủng Bảo Hộ Cao Su Đen', 'images/b01.png'),
(6, 4, 'Mặt nạ hàn SM-849', 899000, 1, 'Mặt nạ hàn SM-849', 'images/c01.png'),
(7, 4, 'Nón Bảo Hộ có kính FC', 234000, 8, 'Nón Bảo Hộ có kính FC', 'images/c02.png'),
(8, 2, 'Găng tay da thợ hàn GNC', 179000, 4, 'Găng tay da thợ hàn GNC', 'images/d01.png'),
(9, 1, 'Quần áo kĩ sư vải kaki hàn quốc', 299000, 10, 'Quần áo kĩ sư vải kaki hàn quốc', 'images/qa4.png'),
(10, 1, 'Quần áo kĩ sư kaki phối màu', 279000, 8, 'Quần áo kĩ sư kaki phối màu', 'images/qa5.jpg'),
(11, 1, 'Quần Áo Chống Nóng Chịu Nhiệt Tráng Bạc', 599000, 4, 'Quần Áo Chống Nóng Chịu Nhiệt Tráng Bạc', 'images/qa6.jpg'),
(12, 1, 'Quần Áo Liền Quần Giấy Type 3M', 699000, 1, 'Quần Áo Liền Quần Giấy Type 3M', 'images/qa7.jpg'),
(13, 1, 'Quần áo công nhân kaki xanh', 269000, 3, 'Quần áo công nhân kaki xanh', 'images/qa8.png'),
(14, 1, 'Quần áo công nhân kaki màu cam', 179000, 4, 'Quần áo công nhân kaki màu cam', 'images/qa9.png'),
(15, 2, 'Găng Tay Sợi Chống Trượt Đa Dụng Runflex', 199000, 3, 'Găng Tay Sợi Chống Trượt Đa Dụng Runflex', 'images/gt1.jpg'),
(16, 2, 'Găng Tay Phòng Sạch Kẻ Sọc Phủ Hạt Nhựa', 189000, 6, 'Găng Tay Phòng Sạch Kẻ Sọc Phủ Hạt Nhựa', 'images/gt2.jpg'),
(17, 2, 'Găng Tay Chống Cắt Niroflex Easyfit Dài', 129000, 3, 'Găng Tay Chống Cắt Niroflex Easyfit Dài', 'images/gt3.jpg'),
(18, 2, 'Găng Tay Chống Hóa Chất BlueShell Skinner', 299000, 4, 'Găng Tay Chống Hóa Chất BlueShell Skinner', 'images/gt4.jpg'),
(19, 2, 'Găng Tay Siêu Mịn 2 Chun', 279000, 6, 'Găng Tay Siêu Mịn 2 Chun', 'images/gt5.jpg'),
(20, 2, 'Găng Tay Da Hàn GNC Màu Đỏ', 199000, 10, 'Găng Tay Da Hàn GNC Màu Đỏ', 'images/gt6.jpg'),
(21, 2, 'Găng Tay Da Hàn 2 Lớp', 599000, 12, 'Găng Tay Da Hàn 2 Lớp Bảo Vệ', 'images/gt7.jpg'),
(22, 3, 'Ủng Bảo Hộ 895181', 899000, 10, 'Ủng Bảo Hộ 895181', 'images/giay1.jpg'),
(23, 3, 'Giày Bảo Hộ Cao Cấp 89524', 999000, 11, 'Giày Bảo Hộ Cao Cấp Xincaihong 89524', 'images/giay2.jpg'),
(24, 3, 'Dép Chống Tĩnh Điện ESD', 199000, 7, 'Dép Chống Tĩnh Điện ESD', 'images/giay3.jpg'),
(25, 3, 'Ủng Cao Su TGP Màu Trắng - Đế Vàng', 299000, 4, 'Ủng Cao Su TGP Màu Trắng - Đế Vàng', 'images/giay4.jpg'),
(26, 3, 'Giày Bảo Hộ Nhà Bếp Jogger Dolce S3 SRC', 599000, 10, 'Giày Bảo Hộ Nhà Bếp Jogger Dolce S3 SRC', 'images/giay6.jpg'),
(27, 3, 'Ủng Chịu Nhiệt AL4 đảm bảo an toàn', 699000, 8, 'Ủng Chịu Nhiệt AL4 đảm bảo an toàn', 'images/giay7.jpg'),
(28, 3, 'Giày Bảo Hộ Jogger EH Cách Điện 18kV', 899000, 10, 'Giày Bảo Hộ Jogger EH Cách Điện 18kV', 'images/giay8.jpg'),
(29, 4, 'Nón Bảo Hộ Hàn Quốc COV Thoáng Khí', 599000, 3, 'Nón Bảo Hộ Hàn Quốc COV', 'images/mu1.jpg'),
(30, 4, 'Nón Bảo Hộ Hàn Quốc COV E001', 599000, 2, 'Nón Bảo Hộ Hàn Quốc COV E001', 'images/mu2.jpg'),
(31, 4, 'Nón Bảo Hộ Proguard HG2-PHSL', 499000, 3, 'Nón Bảo Hộ Proguard HG2-PHSL', 'images/mu3.jpg'),
(32, 4, 'Nón Vải Thuỷ Sản - Bảo Vệ Tóc', 199000, 5, 'Nón Vải Thuỷ Sản - Bảo Vệ Tóc', 'images/mu4.jpg'),
(33, 4, 'Nón Bảo Hộ Hàn Quốc COV Có Kính', 279000, 8, 'Nón Bảo Hộ Hàn Quốc COV Có Kính', 'images/mu5.jpg'),
(34, 4, 'Mũ Bảo Hộ Hàn Quốc Kukje Trắng Có Kính', 499000, 6, 'Mũ Bảo Hộ Hàn Quốc Kukje Trắng Có Kính', 'images/mu7.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietphieuxuat`
--
ALTER TABLE `chitietphieuxuat`
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietphieuxuat`
--
ALTER TABLE `chitietphieuxuat`
  ADD CONSTRAINT `chitietphieuxuat_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`),
  ADD CONSTRAINT `chitietphieuxuat_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
