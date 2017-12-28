-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2017 lúc 08:14 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltw_nhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangnhap`
--

CREATE TABLE `tbl_dangnhap` (
  `idnv` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangnhap`
--

INSERT INTO `tbl_dangnhap` (`idnv`, `username`, `password`, `phanquyen`) VALUES
(8744, 'dinhhung', '19589899fcbbf480ff61254d8404d7f3', 1),
(8747, 'admin', '25f9e794323b453885f5181f1b624d0b', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `idnv` int(50) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `gioitinh` int(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `vitri` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(50) NOT NULL,
  `anh` varchar(250) NOT NULL,
  `phanquyen` int(10) NOT NULL,
  `mota` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`idnv`, `hoten`, `gioitinh`, `ngaysinh`, `email`, `diachi`, `vitri`, `sdt`, `anh`, `phanquyen`, `mota`) VALUES
(847, 'NguyÃªÌƒn ÄiÌ€nh VÆ°Æ¡ng', 1, '1996-08-11', 'nguyendinhvuong@gmail.com', 'Thanh HoÌa', '6', 966666, '10003879_650120888374468_861491603_n_1196635.jpg', 0, 'oÌc choÌ1'),
(8479, 'bui anh ducwqewq', 1, '1996-03-06', 'mai1dinhhung06@gmail.com', 'than hoa11', 'th', 9874, '10003879_650120888374468_861491603_n_1196635.jpg', 0, ''),
(8744, 'Mai ÄiÌ€nh HuÌ€ng', 1, '1996-10-06', 'maidinhhung96@gmail.com', 'Thanh HoÌa', '1', 964506168, '10003879_650120888374468_861491603_n_1196635.jpg', 1, 'oÌc choÌ1'),
(8746, 'NguyÃªÌƒn HuÌ€ng MaÌ£nh', 1, '1996-06-10', 'buianhduc@gmail.cm', 'Thanh HoÌa', '7', 2147483647, '10003879_650120888374468_861491603_n_1196635.jpg', 0, 'yu'),
(9999, 'BuÌ€i Anh ÄÆ°Ìc', 1, '1996-06-10', 'buianhduc@gmail.cm', 'Thanh HoÌa', '3', 9874, '10003879_650120888374468_861491603_n_1196635.jpg', 0, 'rtr');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vitri`
--

CREATE TABLE `tbl_vitri` (
  `vitri` varchar(250) NOT NULL,
  `idvt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_vitri`
--

INSERT INTO `tbl_vitri` (`vitri`, `idvt`) VALUES
('GiaÌm ÄÃ´Ìc', 1),
('KyÌƒ SÆ°', 2),
('ThÆ° KyÌ', 3),
('NhÃ¢n ViÃªn BaÌn HaÌ€ng', 4),
('PhoÌ GiaÌm ÄÃ´Ìc', 6),
('NhÃ¢n ViÃªn NgoaÌ£i Giao', 7);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_dangnhap`
--
ALTER TABLE `tbl_dangnhap`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  ADD PRIMARY KEY (`idvt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  MODIFY `idvt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
