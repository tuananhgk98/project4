-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2019 lúc 04:54 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbangiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadonban`
--

CREATE TABLE `chitiethoadonban` (
  `id` int(10) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_hdb` int(10) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL COMMENT 'số lượng',
  `size` int(11) NOT NULL,
  `giaban` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadonban`
--

INSERT INTO `chitiethoadonban` (`id`, `hinhanh`, `id_hdb`, `id_sp`, `tensp`, `soluong`, `size`, `giaban`, `created_at`, `updated_at`) VALUES
(31, '18.jpg', 48, 18, 'Giày búp bê', 10, 35, 450, '2019-05-09 03:40:02', '2019-05-08 01:35:38'),
(30, '18.jpg', 47, 18, 'Giày búp bê', 1, 36, 450, '2019-05-07 18:29:49', '2019-05-07 18:29:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadonnhap`
--

CREATE TABLE `chitiethoadonnhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hdb` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` int(11) NOT NULL COMMENT 'số lượng',
  `gianhap` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadonnhap`
--

INSERT INTO `chitiethoadonnhap` (`id`, `id_hdb`, `id_sp`, `soluong`, `gianhap`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsx`
--

CREATE TABLE `hangsx` (
  `id_hang` int(11) NOT NULL,
  `tenhang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsx`
--

INSERT INTO `hangsx` (`id_hang`, `tenhang`) VALUES
(1, 'Jimmy Choo'),
(2, 'Chanel'),
(3, 'Gucci');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `tenkh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaymua` date DEFAULT NULL,
  `tongtien` float DEFAULT NULL COMMENT 'tổng tiền',
  `ghichu` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`id`, `id_kh`, `tenkh`, `ngaymua`, `tongtien`, `ghichu`, `created_at`, `updated_at`) VALUES
(48, 50, 'Nguyễn Thị Thoa', '2019-05-08', 4500, 'gửi luôn', '2019-05-08 17:42:06', '2019-05-08 17:42:06'),
(46, 48, 'Nguyễn Thị Thoa', '2019-05-08', 1350, 'không phải gửi', '2019-05-07 18:26:40', '2019-05-07 18:26:40'),
(45, 47, 'Nguyễn Thị Thoa', '2019-05-08', 1350, 'không phải gửi', '2019-05-07 18:26:25', '2019-05-07 18:26:25'),
(43, 45, 'Nguyễn Thị Thoa', '2019-05-08', 800, 'gửi luôn', '2019-05-07 17:57:58', '2019-05-07 17:57:58'),
(41, 43, 'Nguyễn Thị Thoa', '2019-05-08', 1050, 'Chưa giao', '2019-05-07 17:53:44', '2019-05-07 17:53:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hang` int(11) DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `tongtien` float DEFAULT NULL COMMENT 'tổng tiền',
  `ghichu` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`id`, `id_hang`, `ngaynhap`, `tongtien`, `ghichu`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 13, '2017-03-21', 400000, 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `email`, `diachi`, `sodt`, `ghichu`, `created_at`, `updated_at`) VALUES
(50, 'Nguyễn Thị Thoa', 'nguyenthithoa222@gmail.com', 'hưng yên', '02743896', 'Gửi sau 24h', '2019-05-08 01:35:38', '2019-05-08 01:35:38'),
(49, 'Nguyễn Thị Thoa', 'nguyenthithoa@gmail.com', 'hưng yên', '13242235', 'gửi luôn', '2019-05-07 18:29:49', '2019-05-07 18:29:49'),
(48, 'Nguyễn Thị Thoa', 'nguyenthithoa222@gmail.com', 'hưng yên', '31203383', 'không phải gửi', '2019-05-07 18:26:40', '2019-05-07 18:26:40'),
(47, 'Nguyễn Thị Thoa', 'nguyenthithoa222@gmail.com', 'hưng yên', '31203383', 'không phải gửi', '2019-05-07 18:26:25', '2019-05-07 18:26:25'),
(46, 'Nguyễn Thị Thoa', 'nguyenthithoa222@gmail.com', 'hưng yên', '31203383', 'không phải gửi', '2019-05-07 18:25:18', '2019-05-07 18:25:18'),
(45, 'Nguyễn Thị Thoa', 'nguyenthithoa@gmail.com', 'hưng yên', '02743896', 'gửi luôn', '2019-05-07 17:57:58', '2019-05-07 17:57:58'),
(43, 'Nguyễn Thị Thoa', 'nguyenthithoa222@gmail.com', 'hưng yên', '1682930', NULL, '2019-05-07 17:53:44', '2019-05-07 17:53:44'),
(44, 'linh', 'ninhcoikc@gmail.com', 'Ân Thi', '02743896', NULL, '2019-05-07 17:55:22', '2019-05-07 17:55:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenlsp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenlsp`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Giày cao gót', 0, NULL, '2019-05-08 18:23:00'),
(2, 'Giày búp bê', 1, '2016-10-12 02:16:15', '2019-05-08 18:21:34'),
(3, 'Giày sandal', 1, '2016-10-18 00:33:33', '2019-05-08 18:21:36'),
(4, 'Giày boots', 1, '2016-10-18 00:33:33', '2019-05-08 18:21:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_loai` int(10) UNSIGNED DEFAULT NULL,
  `tenhang` text COLLATE utf8_unicode_ci,
  `gia` float DEFAULT NULL,
  `giakm` float DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `docao` tinyint(4) DEFAULT '0',
  `new` int(11) NOT NULL,
  `tinhtrang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `id_loai`, `tenhang`, `gia`, `giakm`, `hinhanh`, `soluong`, `docao`, `new`, `tinhtrang`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Giày cao gót nơ đen E50', 1, 'chanel', 350, 320, '1.jpg', 17, 5, 1, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:43:19'),
(2, 'Giày cao gót vàng E55', 1, 'Chanel', 450, 420, '2.jpg', 20, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(3, 'Giày cao gót đen E52', 1, 'Chanel', 450, 420, '3.jpg', 20, 5, 0, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(4, 'Giày cao gót E54', 1, 'Gucci', 350, 320, '4.jpg', 30, 5, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(5, 'Giày cao gót nhọn E56', 1, 'Chanel', 350, 320, '5.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(6, 'Giày cao gótE58', 1, 'Jimmy choo', 350, 0, '6.jpg', 30, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:45:24'),
(7, 'Giày cao gót E59', 1, 'Chanel', 350, 320, '9.png', 30, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:46:39'),
(8, 'Giày cao gót E60', 1, 'Jimmy choo', 350, 320, '8.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(9, 'Giày cao gót E61', 1, 'Jimmy choo', 350, 320, '9.jpg', 29, 5, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:01'),
(10, 'Giày cao gót E62', 1, 'Gucci', 350, 320, '10.jpg', 30, 7, 0, '', 1, '0000-00-00 00:00:00', '2019-05-08 03:50:01'),
(11, 'Giày cao gót E63', 1, 'Jimmy choo', 350, 320, '11.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(12, 'Giày cao gót E64', 1, 'Chanel', 350, 320, '12.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(13, 'Giày cao gót E65', 1, 'Jimmy choo', 350, 320, '13.jpg', 30, 7, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(14, 'Giày cao gót E66', 1, 'Chanel', 450, 420, '14.jpg', 30, 3, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(15, 'Giày búp bê đen EBB1', 2, 'Gucci', 450, 420, '15.jpg', 29, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:50:20'),
(16, 'Giày búp bê EB2', 2, 'Jimmy choo', 450, 420, '16.jpg', 30, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:50:54'),
(17, 'Giày búp bê đỏ EBB3', 2, 'Chanel', 450, 420, '17.jpg', 20, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:52:22'),
(18, 'Giày búp bê EBB6', 2, 'Jimmy choo', 450, 420, '18.jpg', -5, 3, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(19, 'Giày búp bê  EBB7', 2, 'Chanel', 450, 420, '19.jpg', 25, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(20, 'Giày búp bê EBB5', 2, 'chanel', 450, 420, '20.jpg', 30, 5, 1, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:52:58'),
(21, 'Giày búp bê EBB8', 2, 'Gucci', 450, 420, '21.jpg', 29, 5, 1, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(22, 'Giày búp bê EBB9', 2, 'Jimmy choo', 450, 0, '22.jpg', 30, 3, 0, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(23, 'Giày búp bê EBB10', 2, 'Chanel', 450, 420, '23.jpg', 25, 5, 1, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(24, 'Giày búp bê EBB11', 2, 'Jimmy choo', 450, 420, '24.jpg', 30, 5, 0, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(25, 'Giày búp bê EBB12', 2, 'Jimmy choo', 450, 420, '25.jpg', 30, 5, 0, 'sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(26, 'Giày sandal ED15', 3, 'Chanel', 450, 420, '39.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(27, 'Giày sandal ED16', 3, 'Jimmy choo', 450, 420, '40.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(28, 'Giày sandal ED1', 3, 'Chanel', 450, 420, '41.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(29, 'Giày sandal ED2', 3, NULL, 450, 420, '42.jpg', 30, 5, 0, 'Sẵn hàng', 1, '2016-10-26 03:00:16', '2019-05-09 03:39:19'),
(30, 'Giày sandal ED3', 3, 'Jimmy choo', 450, 420, '43.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(31, 'Giày sandal ED4', 3, 'Gucci', 450, 420, '44.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(32, 'Giày sandal ED5', 3, 'Jimmy choo', 450, 0, '45.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(33, 'Giày sandal ED6', 3, 'Gucci', 450, 420, '46.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(34, 'Giày sandal ED7', 3, 'Jimmy choo', 450, 420, '47.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(35, 'Giày sandal ED8', 3, 'Gucci', 450, 0, '48.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(36, 'Giày sandal ED9', 3, 'Jimmy choo', 450, 420, '49.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(37, 'Giày sandal ED10', 3, 'Chanel', 450, 420, '50.jpg', 30, 5, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(38, 'Giày sandal ED11', 3, 'Jimmy choo', 450, 420, '51.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(39, 'Giày sandal ED12', 3, 'Gucci', 450, 420, '52.jpg', 30, 5, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(40, 'Giày boots EB1', 4, 'Jimmy choo', 450, 0, '29.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(41, 'Giày boots EB2', 4, 'Chanel', 450, 420, '30.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(42, 'Giày boots EB3', 4, 'Gucci', 450, 420, '31.jpg', 30, 3, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(43, 'Giày boots EB4', 4, 'Gucci', 450, 0, '32.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(44, 'Giày boots EB5', 4, 'Jimmy choo', 450, 420, '33.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(45, 'Giày boots EB6', 4, 'Gucci', 450, 420, '34.jpg', 30, 5, 1, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(46, 'Giày boots EB7', 4, 'Jimmy choo', 450, 420, '35.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(47, 'Giày boots EB8', 4, 'Gucci', 450, 0, '36.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:02'),
(48, 'Giày boots EB9', 4, 'Jimmy choo', 450, 420, '37.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(49, 'Giày boots EB10', 4, 'Chanel', 450, 420, '38.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(50, 'Giày cao gót nơ EB11', 4, 'Jimmy choo', 350, 320, '14.jpg', 30, 7, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(51, 'Giày búp bê EBB15', 4, 'Jimmy choo', 450, 420, '26.jpg', 30, 5, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(52, 'Giày búp bê EBB16', 4, 'Gucci', 450, 420, '27.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(53, 'Giày búp bê EBB17', 4, 'Chanel', 450, 420, '28.jpg', 30, 1, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(54, 'Giày búp bê EBB18', 4, 'Jimmy choo', 450, 420, '29.jpg', 30, 3, 0, '', 1, '2016-10-26 03:00:16', '2019-05-08 03:50:03'),
(56, 'dương văn duy123', 1, 'chanel', 12000, 11000, '54.jpg', 29, 5, 1, '', 1, '2019-04-22 05:33:20', '2019-05-08 03:50:03'),
(60, 'Giày cao gót nơ đen E69', 2, 'Chanel', 350, 0, '1.jpg', 20, 5, 1, '', 1, '2019-04-22 07:28:19', '2019-05-08 03:50:03'),
(61, NULL, 1, NULL, 13000, 11000, '1.jpg', 19, 5, 1, 'Hết hàng', 1, '2019-05-08 02:40:05', '2019-05-08 03:50:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 35),
(2, 36),
(3, 37),
(4, 38),
(5, 39);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'slide1.jpg'),
(2, '', 'slide2.jpg'),
(3, '', 'slide3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nguyen thi thoa', 'nguyenthithoa@gmail.com', '$2y$10$rZeRU/3EbLtdOuzt/bD5IepLvMkubrgx8.ncHXMuw4MJBHj1FSale', NULL, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', '$2y$10$iM7zUqUmproVhCZw4yw8R.ZKR5yjimOLOMv/nMmoHA3VbsZ8YPPIO', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadonban`
--
ALTER TABLE `chitiethoadonban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hdb` (`id_hdb`);

--
-- Chỉ mục cho bảng `chitiethoadonnhap`
--
ALTER TABLE `chitiethoadonnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_sp`);

--
-- Chỉ mục cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`id_hang`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_kh`);

--
-- Chỉ mục cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_hang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_loai`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadonban`
--
ALTER TABLE `chitiethoadonban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `chitiethoadonnhap`
--
ALTER TABLE `chitiethoadonnhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `id_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_loai`) REFERENCES `loaisp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
