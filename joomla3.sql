-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2023 lúc 05:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `joomla3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhtaikhoan`
--

CREATE TABLE `anhtaikhoan` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `anh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cholayhang`
--

CREATE TABLE `cholayhang` (
  `taiKhoanKh` varchar(30) NOT NULL,
  `maMuahang` int(11) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sdt` varchar(40) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `maSp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongTien` float NOT NULL,
  `thoiGian` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danggiao`
--

CREATE TABLE `danggiao` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `maMuahang` int(11) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(40) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `maSp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongTien` float NOT NULL,
  `thoiGian` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `maGio` int(11) NOT NULL,
  `taiKhoanKh` varchar(40) NOT NULL,
  `maSp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`maGio`, `taiKhoanKh`, `maSp`) VALUES
(142, 'bb', 2),
(143, 'bb', 20),
(144, 'bb', 16),
(145, 'bb', 4),
(146, 'bb', 9),
(147, 'bb', 3),
(148, 'bb', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `matKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`taiKhoanKh`, `matKhau`) VALUES
('', ''),
('bb', '21ad0bd836b90d08f4cf640b4c298e7c'),
('buiquiquyet', '202cb962ac59075b964b07152d234b70'),
('mm', 'b3cd915d758008bd19d0f2428fbb354a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsudonhang`
--

CREATE TABLE `lichsudonhang` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `maMuahang` int(11) NOT NULL,
  `maSp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongTien` float NOT NULL,
  `thoiGian` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sdt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsudonhang`
--

INSERT INTO `lichsudonhang` (`taiKhoanKh`, `maMuahang`, `maSp`, `soluong`, `tongTien`, `thoiGian`, `sdt`) VALUES
('bb', 116, 16, 1, 51300000, '2023-05-17 14:59:23', '0379952714'),
('bb', 139, 2, 1, 34000000, '2023-05-17 21:51:10', '0379952714'),
('bb', 140, 6, 2, 46000000, '2023-05-17 22:19:00', '0379952714'),
('buiquiquyet', 142, 2, 1, 34000000, '2023-05-17 23:15:36', '0379952714'),
('buiquiquyet', 143, 2, 1, 34000000, '2023-05-17 23:15:36', '0379952714'),
('nn', 127, 17, 1, 7200000, '2023-05-17 16:37:01', '0379952714'),
('buiquiquyet', 144, 2, 1, 34000000, '2023-05-17 23:15:36', '0379952714'),
('bb', 147, 1, 1, 32300000, '2023-06-14 16:29:37', '0379952714'),
('bb', 149, 1, 1, 32300000, '2023-06-15 09:07:31', '0379952714');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maLoai`, `tenLoai`) VALUES
(1, 'Movado'),
(2, 'Casio'),
(3, 'Chronograph'),
(4, 'Solar'),
(5, 'Patek Philippe'),
(6, 'Rolex '),
(7, 'Omega');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `ma` varchar(200) NOT NULL,
  `taiKhoanKh` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`ma`, `taiKhoanKh`, `stt`) VALUES
('0OpaH', 'bb', 1),
('KHp03', 'bb', 2),
('NMVU5', 'nn', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muahang`
--

CREATE TABLE `muahang` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `maMuahang` int(11) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `sdt` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `maSp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongTien` float NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `thoiGian` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `muahang`
--

INSERT INTO `muahang` (`taiKhoanKh`, `maMuahang`, `ten`, `sdt`, `email`, `maSp`, `soluong`, `tongTien`, `diaChi`, `thoiGian`) VALUES
('bb', 150, 'bùi quí quyết', '0379952714', 'ss@gmail.com', 12, 1, 120450000, 'gia lộc hải dương ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanxet`
--

CREATE TABLE `nhanxet` (
  `ten` varchar(100) NOT NULL,
  `nhanxet` varchar(200) NOT NULL,
  `maLoai` int(11) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanxet`
--

INSERT INTO `nhanxet` (`ten`, `nhanxet`, `maLoai`, `anh`, `id`) VALUES
('bùi quí quyết', 'sản phẩm ôk', 1, '', 8),
('trần văn b', 'sản phẩm đẹp', 1, '', 9),
('pham van hưng', 'nhân viên tận tình', 1, '', 10),
('bùi quí quyết', 'sản phẩm ok', 5, '', 11),
('ok', 'ok', 1, '', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSp` int(11) NOT NULL,
  `maLoai` varchar(30) NOT NULL,
  `tenSp` varchar(40) NOT NULL,
  `donGia` int(11) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `anh1` varchar(200) NOT NULL,
  `anh2` varchar(200) NOT NULL,
  `moTa` text NOT NULL,
  `trangThai` tinyint(4) NOT NULL DEFAULT 0,
  `thoiGian` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSp`, `maLoai`, `tenSp`, `donGia`, `anh`, `anh1`, `anh2`, `moTa`, `trangThai`, `thoiGian`, `soLuong`) VALUES
(1, '1', 'Movado BOLD Evolution ', 34000000, 'UploadsNewsmovado-1881-automatic-39-5mmpng_540_660.jpg', './UploadsNewsmovado-1881-automatic-black-men-s-watch-39-5mm1jpg_540_660.jpg', './UploadsNewsmovado-1881-automatic-blue-watch-39-5mmpng_540_660.jpg', '', 0, '2023-06-15 09:07:31', 0),
(2, '1', 'Movado Bold Chronograph', 405000000, 'UploadsNewsmovado-1881-automatic-black-men-s-watch-39-5mm1jpg_540_660.jpg', './UploadsNewsmovado-1881-automatic-blue-watch-39-5mmpng_540_660.jpg', './UploadsNewsmovado-bold-evolution-34mm4jpg_540_660.jpg', '', 0, '2023-06-10 21:24:15', 81),
(3, '1', 'Movado Linio Diamond Black ', 350000000, 'UploadsNewsmovado-1881-automatic-blue-watch-39-5mmpng_540_660.jpg', './UploadsNewsmovado-bold-evolution-34mm4jpg_540_660.jpg', './UploadsNewsmovado-bold-evolution-gold-watch-34mmpng_540_660.jpg', '', 0, '2023-05-21 21:39:24', 78),
(4, '1', 'Movado Bold White Dial', 17450000, 'UploadsNewsmovado-bold-evolution-34mm4jpg_540_660.jpg', './UploadsNewsmovado-bold-evolution-gold-watch-34mmpng_540_660.jpg', './UploadsNewsmovado-bold-evolution-watch-34mm5png_540_660.jpg', '', 0, '2023-05-21 21:39:27', 50),
(5, '1', 'Movado Bela Swiss', 34790000, 'UploadsNewsmovado-bold-evolution-gold-watch-34mmpng_540_660.jpg', './UploadsNewsmovado-bold-evolution-watch-34mm5png_540_660.jpg', './UploadsNewsmovado-bold-evolution-watch-34mm6png_540_660.jpg', '', 0, '2023-05-21 21:39:30', 56),
(6, '1', 'ESQ Movado Women Swiss ', 54342050, 'UploadsNewsmovado-bold-evolution-watch-34mm5png_540_660.jpg', './UploadsNewsmovado-bold-evolution-watch-34mm6png_540_660.jpg', './UploadsNewsmovado-mens-red-label-automatic-watch-42mmjpg_540_660.jpg', '', 0, '2023-05-21 21:39:32', 34),
(7, '1', 'Movado 1881 Automatic Blue', 8940000, 'UploadsNewsmovado-bold-evolution-watch-34mm6png_540_660.jpg', './UploadsNewsmovado-mens-red-label-automatic-watch-42mmjpg_540_660.jpg', './UploadsNewsmovado-modern-47-watch-40mm31png_540_660.jpg', '', 0, '2023-05-21 21:39:37', 67),
(8, '1', 'Movado Museum Classic', 43899000, 'UploadsNewsmovado-mens-red-label-automatic-watch-42mmjpg_540_660.jpg', './UploadsNewsmovado-modern-47-watch-40mm31png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-40mm1png_540_660.jpg', '14560052', 0, '2023-05-21 21:39:40', 62),
(9, '1', 'Movado Bold Evolution', 11299000, 'UploadsNewsmovado-modern-47-watch-40mm31png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-40mm1png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-watch-40mm2png_540_660.jpg', '', 0, '2023-05-21 21:39:43', 100),
(10, '1', 'Movado Museum Watch 40mm', 9780000, 'UploadsNewsmovado-museum-classic-automatic-40mm1png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-watch-40mm2png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-watch-40mmpng_540_660.jpg', '', 0, '2023-05-21 21:39:45', 100),
(11, '1', 'Movado 1881 Automatic', 67920000, 'UploadsNewsmovado-museum-classic-automatic-watch-40mm2png_540_660.jpg', './UploadsNewsmovado-museum-classic-automatic-watch-40mmpng_540_660.jpg', './UploadsNewsmovado-museum-classic-watch-40mm7png_540_660.jpg', '', 0, '2023-05-21 21:39:00', 100),
(12, '1', 'MOVADO Red Label', 120450000, 'UploadsNewsmovado-museum-classic-automatic-watch-40mmpng_540_660.jpg', './UploadsNewsmovado-museum-classic-watch-40mm7png_540_660.jpg', './UploadsNewsmovado-museum-classic-women-s-watch-28mm20jpg_540_660.jpg', '', 0, '2023-06-15 09:09:30', 99),
(13, '1', 'Movado NGH', 14299000, 'UploadsNewsmovado-museum-classic-watch-40mm7png_540_660.jpg', './UploadsNewsmovado-museum-classic-women-s-watch-28mm20jpg_540_660.jpg', './UploadsNewsmovado-museum-watch-40mmjpg_540_660.jpg', '', 0, '2023-05-21 21:39:50', 100),
(14, '1', 'Movado Bold Yellow', 56830000, 'UploadsNewsmovado-museum-classic-women-s-watch-28mm20jpg_540_660.jpg', './UploadsNewsmovado-museum-watch-40mmjpg_540_660.jpg', './UploadsNewsmovado-ngh-men-s-watch-40mmjpg_540_660.jpg', '', 0, '2023-05-21 21:39:53', 100),
(15, '1', 'Movado Face Pale', 3450000, 'UploadsNewsmovado-museum-watch-40mmjpg_540_660.jpg', './UploadsNewsmovado-ngh-men-s-watch-40mmjpg_540_660.jpg', './UploadsNewsmovado-1881-automatic-39-5mmpng_540_660.jpg', '', 0, '2023-05-21 21:39:55', 100),
(16, '1', 'Movado NGH Men Watch 40mm', 349000000, 'UploadsNewsmovado-ngh-men-s-watch-40mmjpg_540_660.jpg', './UploadsNewsmovado-1881-automatic-black-men-s-watch-39-5mm1jpg_540_660.jpg', './UploadsNewsmovado-1881-automatic-blue-watch-39-5mmpng_540_660.jpg', '', 0, '2023-05-21 21:39:58', 100),
(17, '2', 'Casio MTP-1370D-7A2VDF ', 16890000, 'A168WGG-1B-1-1654850839647.webp', '/AE-1200WHB-3BVDF.webp', '/AE-1200WHD-1AVDF.webp', '', 0, '2023-05-21 21:48:56', 100),
(18, '2', 'Casio EFV-550L-1AVUDF', 3590000, 'AE-1200WHB-3BVDF.webp', '/AE-1200WHD-1AVDF.webp', '/AEQ-110BW-9A-1-1654484899900.webp', '', 0, '2023-05-21 21:48:59', 100),
(19, '2', 'Casio MTP-1381D-1AVDF', 1200000, 'AE-1200WHD-1AVDF.webp', '/AEQ-110BW-9A-1-1654484899900.webp', '/DW-5600BB-1DR.webp', '', 0, '2023-05-21 21:49:02', 100),
(20, '2', 'Casio MTP-1384D-1AVDF', 1499000, 'AEQ-110BW-9A-1-1654484899900.webp', '/DW-5600BB-1DR.webp', '/F-91W-1DG.webp', '', 0, '2023-05-21 21:49:04', 100),
(21, '2', 'Casio A158WA-1DF', 4500000, 'DW-5600BB-1DR.webp', '/F-91W-1DG.webp', '/GA-2100-1A1DR-1679285744067.webp', '', 0, '2023-05-21 21:49:07', 100),
(22, '2', 'Casio AQ-S810W-1A4VDF', 38999000, 'F-91W-1DG.webp', 'GA-2100-1A1DR-1679285744067.webp', 'gm-2100-1a-1-1656564439998.webp', '', 0, '0000-00-00 00:00:00', 100),
(23, '2', 'Casio MTP-V006GL-7BUDF', 4300000, 'GA-2100-1A1DR-1679285744067.webp', 'gm-2100-1a-1-1656564439998.webp', 'gshock-ga-2100-1adr-1.webp', '', 0, '0000-00-00 00:00:00', 100),
(24, '2', 'Casio AEQ-110W-3AVDF', 1200000, 'gm-2100-1a-1-1656564439998.webp', 'gshock-ga-2100-1adr-1.webp', 'MTP-1374D-1AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(25, '2', 'Casio Edifice EFV', 3240000, 'gshock-ga-2100-1adr-1.webp', 'MTP-1374D-1AVDF.webp', 'MTP-1375L-7AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(26, '2', 'Casio A168WA-1DF', 7200000, 'MTP-1374D-1AVDF.webp', 'MTP-1375L-7AVDF.webp', 'MTP-1384L-1AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(27, '2', 'Casio Nữ – Quartz', 3999000, 'MTP-1374D-1AVDF.webp', 'MTP-1375L-7AVDF.webp', 'MTP-1384L-1AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(28, '2', 'Casio EFR-552D-1AVUDF', 6589000, 'MTP-1375L-7AVDF.webp', 'MTP-1384L-1AVDF.webp', 'MTP-V004L-1AUDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(29, '2', 'Casio F-91WM-7ADF', 7200000, 'MTP-1384L-1AVDF.webp', 'MTP-V004L-1AUDF.webp', 'MTP-V300L-1AUDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(30, '2', 'Casio ECB-900DB-1BDR', 2700000, 'MTP-V004L-1AUDF.webp', 'MTP-V300L-1AUDF.webp', 'MTP-VT01L-7B2UDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(31, '2', 'Casio A159WGED-1DF', 8230000, 'MTP-V300L-1AUDF.webp', 'MTP-VT01L-7B2UDF.webp', 'MTS-100D-2AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(32, '2', 'Casio W-735H-2AVDF', 6230000, 'MTP-VT01L-7B2UDF.webp', 'MTS-100D-2AVDF.webp', 'A168WGG-1B-1-1654850839647.webp', '', 0, '0000-00-00 00:00:00', 100),
(33, '2', 'Casio LW-200-2BVDF', 4258000, 'MTS-100D-2AVDF.webp', 'AE-1200WHB-3BVDF.webp', 'AE-1200WHD-1AVDF.webp', '', 0, '0000-00-00 00:00:00', 100),
(34, '3', 'Orient RA-KV0401L10B Nam Quartz', 6700000, 'h32596131_1681577704.jpg.webp', 'h36606130_1682618335.jpg.webp', 'h36606730_1682618586.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(35, '3', 'Orient RA-KV0405S10B Nam Quartz', 2300000, 'h36606130_1682618335.jpg.webp', 'h36606730_1682618586.jpg.webp', 'h36616640_1682618781.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(36, '3', 'Orient RA-KV0403S10B Nam Quartz', 7800000, 'h36606730_1682618586.jpg.webp', 'h36616640_1682618781.jpg.webp', 'h36626710_1678692063.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(37, '3', 'Orient RA-KV0402S10B Nam Quartz', 6160000, 'h36616640_1682618781.jpg.webp', 'h36626710_1678692063.jpg.webp', 'h38416141_1653469563.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(38, '3', 'Orient RA-KV0404B10B Nam Quartz', 1999000, 'h36626710_1678692063.jpg.webp', 'h38416141_1653469563.jpg.webp', 'h38416160_1664457784.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(39, '3', 'Orient RA-KV0302S10B Nam Quartz', 9199000, 'h38416141_1653469563.jpg.webp', 'h38416160_1664457784.jpg.webp', 'h76726530_1662369529.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(40, '3', 'Orient RA-KV0301L10B Nam Quartz', 12999000, 'h38416160_1664457784.jpg.webp', 'h76726530_1662369529.jpg.webp', 'h76746140_1682619544.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(41, '3', 'Orient FTT0U002W0 Nam Quartz', 3444000, 'h76726530_1662369529.jpg.webp', 'h76746140_1682619544.jpg.webp', 'h76746540_1682619674.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(42, '3', 'Orient RA-KV0304Y10B Nam Quartz', 5600000, 'h76746140_1682619544.jpg.webp', 'h76746540_1682619674.jpg.webp', 'h77916920_1678959896.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(43, '3', 'Orient FTT0U002H0 Nam Quartz', 3346000, 'h76746540_1682619674.jpg.webp', 'h77916920_1678959896.jpg.webp', 'khung-anh-chinh_1649299643.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(44, '3', 'Orient FTW01004B0 Nam Quartz', 3390000, 'h77916920_1678959896.jpg.webp', 'khung-anh-chinh_1649299643.jpg.webp', 'l2-859-4-78-6_1658905539.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(45, '3', 'Edifice EF-328D-1AVUDF Nam Quartz', 3553000, 'khung-anh-chinh_1649299643.jpg.webp', 'l2-859-4-78-6_1658905539.jpg.webp', 'l2-859-4-92-0_1658905681.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(46, '3', 'Edifice EFR-526D-1AVUDF Nam Quartz', 4660000, 'l2-859-4-78-6_1658905539.jpg.webp', 'l2-859-4-92-0_1658905681.jpg.webp', 't1244271605100_1679679389.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(47, '3', 'Edifice EFV-540D-1A9VUDF Nam Quartz', 6330000, 'l2-859-4-92-0_1658905681.jpg.webp', 't1244271605100_1679679389.jpg.webp', 't1424621605200_1663938721.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(48, '3', 'Edifice EFR-556L-1AVUDF Nam Quartz', 9800000, 't1244271605100_1679679389.jpg.webp', 't1424621605200_1663938721.jpg.webp', 'h32596131_1681577704.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(49, '3', ' Edifice EFR-552D-1A2VUDF Nam Quartz', 6210000, 't1424621605200_1663938721.jpg.webp', 'h32596131_1681577704.jpg.webp', 'h36606130_1682618335.jpg.webp', '', 0, '0000-00-00 00:00:00', 100),
(50, '4', 'Seiko SUP860P1 – Nam – Solar', 4350000, 'dong_ho_seiko_sne094p1.jpg', 'dong_ho_seiko_sne366p2.jpg', 'dong_ho_seiko_sne475p1s.jpg', '', 0, '0000-00-00 00:00:00', 100),
(51, '4', 'Seiko SUP429P1 – Nữ – Solar', 7320000, 'dong_ho_seiko_sne366p2.jpg', 'dong_ho_seiko_sne475p1s.jpg', 'dong_ho_seiko_ssc553p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(52, '4', 'Seiko SUP450P1 – Nữ – Sola', 4550000, 'dong_ho_seiko_sne475p1s.jpg', 'dong_ho_seiko_ssc553p1.jpg', 'dong_ho_seiko_ssc555p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(53, '4', 'Seiko SNE530P1 – Nam – Solar', 6150000, 'dong_ho_seiko_ssc553p1.jpg', 'dong_ho_seiko_ssc555p1.jpg', 'dong_ho_seiko_ssc557p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(54, '4', 'Seiko Lukia SUT387J1 – Nữ – Solar', 12440000, 'dong_ho_seiko_ssc555p1.jpg', 'dong_ho_seiko_ssc557p1.jpg', 'dong_ho_seiko_ssc621p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(55, '4', 'Seiko SUT300J1 – Nữ ', 15040000, 'dong_ho_seiko_ssc557p1.jpg', 'dong_ho_seiko_ssc621p1.jpg', 'dong_ho_seiko_ssc625p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(56, '4', 'Seiko Lukia SUT331J1 – Nữ – Solar', 23000000, 'dong_ho_seiko_ssc621p1.jpg', 'dong_ho_seiko_ssc625p1.jpg', 'dong_ho_seiko_ssc645p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(57, '4', 'Seiko SSC013P1 – Nam – Solar', 8890000, 'dong_ho_seiko_ssc625p1.jpg', 'dong_ho_seiko_ssc645p1.jpg', 'dong_ho_seiko_ssc653p1.jpg', '', 0, '0000-00-00 00:00:00', 100),
(58, '5', 'Patek Philippe Complications 5205R-010', 1120000000, 'timthumb (1).jpg', 'timthumb (2).jpg', 'timthumb (3).jpg', '', 0, '0000-00-00 00:00:00', 100),
(59, '5', 'Patek Philippe 5205R-001 Annual Calendar', 999000000, 'timthumb (2).jpg', 'timthumb (3).jpg', 'timthumb (4).jpg', '', 0, '0000-00-00 00:00:00', 100),
(60, '5', 'Patek Philippe Complications 5905R 42mm', 1460000000, 'timthumb (3).jpg', 'timthumb (4).jpg', 'timthumb (5).jpg', '', 0, '0000-00-00 00:00:00', 100),
(61, '5', 'Patek Philippe Complications', 1110000000, 'timthumb (4).jpg', 'timthumb (5).jpg', 'timthumb (6).jpg', '', 0, '0000-00-00 00:00:00', 100),
(62, '5', 'Patek Philippe 5205G-013', 995000000, 'timthumb (5).jpg', 'timthumb (6).jpg', 'timthumb (7).jpg', '', 0, '0000-00-00 00:00:00', 100),
(63, '5', 'Patek Philippe Nautilus 5712R-001', 1780000000, 'timthumb (6).jpg', 'timthumb (7).jpg', 'timthumb (8).jpg', '', 0, '0000-00-00 00:00:00', 100),
(64, '5', 'Patek Philippe 5961R-010 Annual', 2147483647, 'timthumb (8).jpg', 'timthumb (9).jpg', 'timthumb (10).jpg', '', 0, '0000-00-00 00:00:00', 100),
(65, '5', 'Patek Philippe 5396R-011', 1050000000, 'timthumb (7).jpg', 'timthumb (8).jpg', 'timthumb (9).jpg', '', 0, '0000-00-00 00:00:00', 100),
(66, '6', 'Đồng Hồ Rolex Datejust 41 126331', 438000000, 'timthumb (1).jpg', 'timthumb (1).png', 'timthumb (2).jpg', '', 0, '0000-00-00 00:00:00', 100),
(67, '6', 'Đồng Hồ Rolex Datejust 31 278271', 650000000, 'timthumb (1).png', 'timthumb (2).jpg', 'timthumb (2).png', '', 0, '0000-00-00 00:00:00', 100),
(68, '6', 'Đồng Hồ Rolex Datejust 126333 Mặt Số Đen', 760000000, 'timthumb (2).jpg', 'timthumb (2).png', 'timthumb (3).jpg', '', 0, '0000-00-00 00:00:00', 100),
(69, '6', 'Đồng Hồ Rolex Datejust 31 278271 Mặt Số ', 235000000, 'timthumb (2).png', 'timthumb (3).jpg', 'timthumb (3).png', '', 0, '0000-00-00 00:00:00', 100),
(70, '6', 'Đồng Hồ Rolex Datejust 36 126231 Mặt Số ', 799000000, 'timthumb (3).jpg', 'timthumb (3).png', 'timthumb (4).jpg', '', 0, '0000-00-00 00:00:00', 100),
(71, '6', 'Đồng Hồ Rolex Datejust 31 278271 Mặt Số ', 405000000, 'timthumb (3).png', 'timthumb (4).jpg', 'timthumb (4).png', '', 0, '0000-00-00 00:00:00', 100),
(72, '6', 'Đồng Hồ Rolex Lady Datejust 31 278273 Mặ', 388000000, 'timthumb (4).jpg', 'timthumb (4).png', 'timthumb (5).jpg', '', 0, '0000-00-00 00:00:00', 100),
(73, '6', 'Đồng Hồ Rolex Datejust 126333 Mặt Số Đen', 789000000, 'timthumb (4).png', 'timthumb (5).jpg', 'timthumb (6).jpg', '', 0, '0000-00-00 00:00:00', 100),
(74, '6', 'Đồng Hồ Rolex Datejust 36 126234 Mặt Số ', 455000000, 'timthumb (5).jpg', 'timthumb (6).jpg', 'timthumb (7).jpg', '', 0, '0000-00-00 00:00:00', 100),
(75, '6', 'Đồng Hồ Rolex Datejust 36 126234 Mặt Số ', 610000000, 'timthumb (6).jpg', 'timthumb (7).jpg', 'timthumb (8).jpg', '', 0, '0000-00-00 00:00:00', 100),
(76, '6', 'Đồng Hồ Rolex Datejust 36 126231 Mặt Số ', 889000000, 'timthumb (7).jpg', 'timthumb (8).jpg', 'timthumb (9).jpg', '', 0, '0000-00-00 00:00:00', 100),
(77, '6', 'Đồng Hồ Rolex Day-Date 40 228238', 1330000000, 'timthumb (8).jpg', 'timthumb (9).jpg', 'timthumb (16).jpg', '', 0, '0000-00-00 00:00:00', 0),
(78, '6', 'Đồng Hồ Rolex Day-Date 40 228238 ', 423000000, 'timthumb (9).jpg', 'timthumb (16).jpg', 'timthumb.jpg', '', 0, '0000-00-00 00:00:00', 100),
(79, '6', 'Đồng Hồ Rolex Day-Date 36 128235 Mặt Số ', 564000000, 'timthumb (16).jpg', 'timthumb.jpg', 'timthumb.png', '', 0, '0000-00-00 00:00:00', 100),
(80, '6', 'Đồng Hồ Rolex Day-Date 36 128238', 770000000, 'timthumb.jpg', 'timthumb.png', 'timthumb (1).jpg', '', 0, '0000-00-00 00:00:00', 100),
(81, '6', 'Đồng Hồ Rolex Day-Date 36 128238 Mặt Số ', 230000000, 'timthumb.png', 'timthumb (1).jpg', 'timthumb (1).png', '', 0, '0000-00-00 00:00:00', 100),
(82, '7', 'Omega De Ville Trésor 428.18.36.60.04.00', 101000000, '1-1675129444360.webp', '6-1672714027184.webp', '7-1672831363025.webp', '', 0, '0000-00-00 00:00:00', 100),
(83, '7', 'Omega De Ville 425.35.34.20.57.001 Ladym', 404000000, '6-1672714027184.webp', '7-1672831363025.webp', '210.30.42.20.03.001-1-1666596707369.webp', '', 0, '0000-00-00 00:00:00', 100),
(84, '7', 'Omega De Ville 424.13.40.20.03.003 Prest', 550000000, '7-1672831363025.webp', '210.30.42.20.03.001-1-1666596707369.webp', '210.webp', '', 0, '0000-00-00 00:00:00', 100),
(85, '7', 'Omega Constellation Brushed Watch 24mm', 334000000, '210.30.42.20.03.001-1-1666596707369.webp', '210.webp', '210-417783265-853046296.webp', '', 0, '0000-00-00 00:00:00', 100),
(86, '7', 'Omega DeVille Prestige 424.25.33.60.58.0', 326999000, '210.webp', '210-417783265-853046296.webp', '220.13.41.21.03.002-1-1667109490224.webp', '', 0, '0000-00-00 00:00:00', 100),
(87, '7', 'Omega De Ville  Trésor Watch 26mm', 779000000, '210-417783265-853046296.webp', '220.13.41.21.03.002-1-1667109490224.webp', '220-1992040055-328510480.webp', '', 0, '0000-00-00 00:00:00', 100),
(88, '7', 'Omega DeVille Prestige Watch 24.4mm', 555000000, '220.13.41.21.03.002-1-1667109490224.webp', '220-1992040055-328510480.webp', '231.10.39.21.57.001-2-1680060577953.webp', '', 0, '0000-00-00 00:00:00', 100),
(89, '7', 'Omega De Ville Prestige Watch 32.7mm', 336999000, '220-1992040055-328510480.webp', '231.10.39.21.57.001-2-1680060577953.webp', '231.13.42.21.03-0-1661421954686.webp', '', 0, '0000-00-00 00:00:00', 100),
(90, '7', 'Omega Constellation Manhattan 29', 299000000, '231.13.42.21.03-0-1661421954686.webp', '231.53.42.22.02.001-1-1667200281222.webp', '43353412203001.webp', '', 0, '0000-00-00 00:00:00', 100),
(91, '7', 'Omega Constellation Manhattan 29', 666000000, '231.10.39.21.57.001-2-1680060577953.webp', '231.13.42.21.03-0-1661421954686.webp', '231.53.42.22.02.001-1-1667200281222.webp', '', 0, '0000-00-00 00:00:00', 100),
(92, '7', 'Omega De Ville Prestige 39.5mm', 777000000, '231.53.42.22.02.001-1-1667200281222.webp', '43353412203001.webp', 'df5a9494c93f16614f2e14.webp', '', 0, '0000-00-00 00:00:00', 100),
(93, '7', 'Omega Constellation Manhattan 36mm', 823000000, '43353412203001.webp', 'df5a9494c93f16614f2e14.webp', 'L4.774.3.27-1675159873003.webp', '', 0, '0000-00-00 00:00:00', 100),
(94, '7', 'Omega Constellation Manhattan Watch 41mm', 129000000, 'df5a9494c93f16614f2e14.webp', 'L4.774.3.27-1675159873003.webp', 'omega-424-13-40-20-03-002-hang-luot-99-999-fullbox-2-the-hang-424-13-40-20-03-002-rf01-17001.webp', '', 0, '0000-00-00 00:00:00', 100),
(95, '7', 'Omega Constellation Manhattan Watch 41mm', 217990000, 'L4.774.3.27-1675159873003.webp', 'omega-424-13-40-20-03-002-hang-luot-99-999-fullbox-2-the-hang-424-13-40-20-03-002-rf01-17001.webp', 'Untitled-1-1677324518319.webp', '', 0, '0000-00-00 00:00:00', 100),
(96, '7', 'Omega De Ville Prestige 27.4mm', 460000000, 'omega-424-13-40-20-03-002-hang-luot-99-999-fullbox-2-the-hang-424-13-40-20-03-002-rf01-17001.webp', 'Untitled-1-1677324518319.webp', '1-1675129444360.webp', '', 0, '0000-00-00 00:00:00', 100),
(97, '7', 'Omega De Ville Prestige 27.4mm', 388000000, 'Untitled-1-1677324518319.webp', '6-1672714027184.webp', '7-1672831363025.webp', '', 0, '0000-00-00 00:00:00', 100),
(98, '5', 'Patek Philippe Calatrava 18k White Gold ', 395000000, 'timthumb (9).jpg', 'timthumb (10).jpg', 'timthumb (11).jpg', '', 0, '0000-00-00 00:00:00', 100),
(99, '5', 'Patek Philippe Nautilus Rose Gold with D', 499000000, 'timthumb (10).jpg', 'timthumb (11).jpg', 'timthumb (12).jpg', '', 0, '0000-00-00 00:00:00', 100),
(100, '5', 'Patek Philippe Aquanaut 5068R-010', 599000000, 'timthumb (11).jpg', 'timthumb (12).jpg', 'timthumb (13).jpg', '', 0, '0000-00-00 00:00:00', 100),
(101, '5', 'Patek Philippe Aquanaut 5068R-001', 889000000, 'UploadsNewsmovado-1881-automatic-39-5mmpng_540_660.jpg', 'UploadsNewsmovado-1881-automatic-black-men-s-watch-39-5mm1jpg_540_660.jpg', 'UploadsNewsmovado-1881-automatic-blue-watch-39-5mmpng_540_660.jpg', '', 0, '2023-06-10 21:30:19', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien1`
--

CREATE TABLE `sinhvien1` (
  `maSv` varchar(30) NOT NULL,
  `tenSv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien1`
--

INSERT INTO `sinhvien1` (`maSv`, `tenSv`) VALUES
('xx', 'xx1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `taiKhoanKh` varchar(30) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nhanXet` varchar(200) NOT NULL,
  `sdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`taiKhoanKh`, `ten`, `email`, `nhanXet`, `sdt`) VALUES
('$ma', 'bùi quí quyết', 'quyetbuiqui@gmail.com', ' chất lượng ok, sản phẩm tốt', ''),
('$ma', 'hưng', 'quyetbuiqui@gmail.com1111', ' ok', ''),
('bb', 'bùi quí quyết', 'quyetbuiqui@gmail.com', ' ', ''),
('', 'à', 'quyetbuiqui@gmail.com', ' ', ''),
('', 'bùi quí quyết', 'quyetbuiqui@gmail.com1111', '', ''),
('', 'à', 'quyetbuiqui@gmail.com', ' ', ''),
('bb', '1', '1', '1', '1'),
('bb', 'ss', 'ss', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin1`
--

CREATE TABLE `thongtin1` (
  `taiKhoanKh` varchar(40) NOT NULL,
  `ten` varchar(40) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sdt` varchar(40) DEFAULT NULL,
  `diaChi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin1`
--

INSERT INTO `thongtin1` (`taiKhoanKh`, `ten`, `email`, `sdt`, `diaChi`) VALUES
('nn', 'bùi quí quyết', 'quyetbuiqui@gmail.com', '0379952714', 'gia lộc hải dương'),
('buiquiquyet', 'bùi quí quyết', 'quyetbuiqui@gmail.com', '0379952714', 'gia lộc hải dương'),
('buiquiquyet1', 'bùi quí quyết', 'quyetbuiqui@gmail.com', '0379952714', 'gia lộc hải dương'),
('mm', 'bùi quyết', 'ss@gmail.com', '037994271', 'hải dương'),
('bb', 'bùi quí quyết', 'ss@gmail.com', '0379952714', 'gia lộc hải dương');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cholayhang`
--
ALTER TABLE `cholayhang`
  ADD PRIMARY KEY (`maMuahang`);

--
-- Chỉ mục cho bảng `danggiao`
--
ALTER TABLE `danggiao`
  ADD PRIMARY KEY (`maMuahang`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maGio`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`taiKhoanKh`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`stt`);

--
-- Chỉ mục cho bảng `muahang`
--
ALTER TABLE `muahang`
  ADD PRIMARY KEY (`maMuahang`);

--
-- Chỉ mục cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSp`);

--
-- Chỉ mục cho bảng `sinhvien1`
--
ALTER TABLE `sinhvien1`
  ADD PRIMARY KEY (`maSv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danggiao`
--
ALTER TABLE `danggiao`
  MODIFY `maMuahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `maGio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT cho bảng `muahang`
--
ALTER TABLE `muahang`
  MODIFY `maMuahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
