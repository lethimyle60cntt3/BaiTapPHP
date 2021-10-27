-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 06:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_nhan_vien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_nv`
--

CREATE TABLE `loai_nv` (
  `ma_loai_nv` varchar(10) NOT NULL,
  `ten_loai_nv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_nv`
--

INSERT INTO `loai_nv` (`ma_loai_nv`, `ten_loai_nv`) VALUES
('GV', 'Giáo viên'),
('TK', 'Thư kí'),
('TQ', 'Thủ quỷ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma_nv` varchar(10) NOT NULL,
  `ho` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `dia_chi` varchar(225) NOT NULL,
  `anh` varchar(225) NOT NULL,
  `ma_loai_nv` varchar(10) NOT NULL,
  `ma_phong` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma_nv`, `ho`, `ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `anh`, `ma_loai_nv`, `ma_phong`) VALUES
('ab', 'a', 'Lê Ngọc Lâm', '0000-00-00', 1, 'Ninh Phước', 'xuka.jpg', 'TQ', 'KT'),
('NV005', 'Lê Thị Mỹ', 'Lê', '2000-09-09', 0, 'Ninh Hòa- Khánh Hòa', 'le.jpg', 'TK', 'HC'),
('NV006', 'Võ', 'Chí', '2000-04-02', 1, 'Suối Hiệp - Diên Khánh', '', 'TK', 'NS'),
('NV01', 'La Thị Hoài', 'Hoa', '2021-09-10', 0, 'Đá Bàn- Ninh Hòa', 'hoa.jpg', 'TQ', 'KT'),
('NV02', 'Cáp Minh', 'Hoàng', '2011-10-17', 1, 'Nha Trang', 'hoang.jpg', 'TK', 'KT'),
('NV03', 'Hùng', 'Vương', '2000-04-19', 0, 'Nha Trang', 'hung.jpg', 'GV', 'HC'),
('NV05', 'Cao Thị Thu', 'Trinh', '0000-00-00', 0, 'Ninh Hòa', 'me.jpg', 'TK', 'HC'),
('NV06', 'Hoàng Phi', 'Hồng', '1971-02-04', 1, 'Ninh Hòa', 'hong.jpg', 'TK', 'HC'),
('NV09', 'a', 'a', '0000-00-00', 0, 'Ninh Phước', 'chaien.jpg', 'TK', 'KT'),
('NV10', 'Lê Ngọc', 'Trường', '1995-02-01', 1, 'Ninh Hòa', '246736559_1082556409220739_6405735158871566967_n.png', 'TQ', 'KT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `ma_phong` varchar(10) NOT NULL,
  `ten_phong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`ma_phong`, `ten_phong`) VALUES
('HC', 'Hành chính'),
('KT', 'Kế toán'),
('NS', 'Nhân sự');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
('U1', 'myle', '123'),
('U2', 'dinhchi', 'abc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loai_nv`
--
ALTER TABLE `loai_nv`
  ADD PRIMARY KEY (`ma_loai_nv`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma_nv`),
  ADD KEY `ma_loai_nv` (`ma_loai_nv`),
  ADD KEY `ma_phong` (`ma_phong`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`ma_phong`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_ibfk_1` FOREIGN KEY (`ma_loai_nv`) REFERENCES `loai_nv` (`ma_loai_nv`),
  ADD CONSTRAINT `nhan_vien_ibfk_2` FOREIGN KEY (`ma_phong`) REFERENCES `phong_ban` (`ma_phong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
