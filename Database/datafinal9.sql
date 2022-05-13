-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2022 lúc 06:43 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datafinal9`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `MAHD` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MASP` int(10) NOT NULL,
  `SLUONG` int(11) DEFAULT NULL,
  `DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`MAHD`, `MASP`, `SLUONG`, `DONGIA`) VALUES
('1004e790-30a2-4589-bf53-10807f', 23, 2, 1250),
('1004e790-30a2-4589-bf53-10807f', 24, 2, 195),
('1004e790-30a2-4589-bf53-10807f', 46, 2, 399),
('1cfa7e95-9d9a-429b-85ff-9f67df', 64, 2, 4281120),
('1cfa7e95-9d9a-429b-85ff-9f67df', 65, 2, 7056480),
('1cfa7e95-9d9a-429b-85ff-9f67df', 66, 1, 6938380),
('26ab66a2-1470-44f8-8894-157d80', 65, 1, 7056480),
('27297cf8-c777-4b77-bef2-cc7615', 65, 2, 7056480),
('27297cf8-c777-4b77-bef2-cc7615', 66, 2, 6938380),
('2b4a79e6-d6f6-479d-8beb-e7c67b', 34, 1, 356),
('2b4a79e6-d6f6-479d-8beb-e7c67b', 93, 1, 3863640),
('2b4a79e6-d6f6-479d-8beb-e7c67b', 94, 1, 2988180),
('2e0aa26a-3317-4acb-86f4-940759', 63, 10, 2922980),
('2e0aa26a-3317-4acb-86f4-940759', 65, 5, 7056480),
('2e0aa26a-3317-4acb-86f4-940759', 76, 5, 2034090),
('3d2c4d46-b66c-4a88-852b-f49a4c', 65, 1, 7056480),
('4288a932-a779-4c9f-8e26-eb3fd3', 65, 1, 7056480),
('5a9298e5-ba5b-4bf7-8867-4c73c0', 65, 1, 7056480),
('5bb44669-1378-4725-afa3-74fec8', 65, 1, 7056480),
('5e636af9-61c1-4dfd-9c49-31fcbe', 53, 1, 359),
('5e636af9-61c1-4dfd-9c49-31fcbe', 55, 1, 929),
('5e636af9-61c1-4dfd-9c49-31fcbe', 59, 1, 459),
('5e636af9-61c1-4dfd-9c49-31fcbe', 94, 1, 2988180),
('5e636af9-61c1-4dfd-9c49-31fcbe', 100, 1, 2272730),
('628ac22b-574b-4118-9904-f30cbb', 29, 1, 652),
('628ac22b-574b-4118-9904-f30cbb', 54, 2, 799),
('628ac22b-574b-4118-9904-f30cbb', 61, 2, 359),
('6312d7e9-7931-48d0-9292-b2fc47', 64, 1, 4281120),
('80548563-1c47-42b6-be28-17c4bd', 65, 1, 7056480),
('80548563-1c47-42b6-be28-17c4bd', 73, 1, 3367720),
('8c997fca-e8ac-4162-8775-22b6bd', 65, 1, 7056480),
('900cbdf6-29ae-4334-be97-9037a4', 65, 1, 7056480),
('90fac6be-6922-4804-a01d-e63981', 35, 2, 1520),
('90fac6be-6922-4804-a01d-e63981', 54, 1, 799),
('90fac6be-6922-4804-a01d-e63981', 55, 1, 929),
('90fac6be-6922-4804-a01d-e63981', 76, 2, 2034090),
('90fac6be-6922-4804-a01d-e63981', 100, 1, 2272730),
('90fac6be-6922-4804-a01d-e63981', 101, 1, 2066750),
('94e339fd-a184-4fce-9782-faf9e8', 25, 1, 2150),
('94e339fd-a184-4fce-9782-faf9e8', 63, 1, 2922980),
('94e339fd-a184-4fce-9782-faf9e8', 75, 2, 1134060),
('96cf0723-dcbe-49a7-874c-8553d9', 35, 2, 1520),
('96cf0723-dcbe-49a7-874c-8553d9', 54, 1, 799),
('96cf0723-dcbe-49a7-874c-8553d9', 55, 1, 929),
('96cf0723-dcbe-49a7-874c-8553d9', 76, 2, 2034090),
('b367fce8-b87d-4ccd-b4b8-ee4bbf', 65, 1, 7056480),
('d174c63e-a621-4d3c-acf5-b74797', 65, 1, 7056480),
('e82dc0a8-487f-48ce-a4a6-d93fb1', 52, 1, 799),
('e82dc0a8-487f-48ce-a4a6-d93fb1', 65, 1, 7056480),
('e82dc0a8-487f-48ce-a4a6-d93fb1', 76, 1, 2034090),
('f6312217-db25-474d-b3e8-9c252a', 54, 1, 799),
('f6312217-db25-474d-b3e8-9c252a', 55, 1, 929),
('f6312217-db25-474d-b3e8-9c252a', 76, 2, 2034090),
('f80ee829-8c62-40c2-9b7e-bae14c', 65, 1, 7056480),
('ff05b642-5d54-4698-99b1-99edbc', 94, 1, 2988180),
('ff05b642-5d54-4698-99b1-99edbc', 100, 1, 2272730);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `MAHANG` int(10) NOT NULL,
  `TENHANG` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MALOAI` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`MAHANG`, `TENHANG`, `MALOAI`) VALUES
(20001, 'OPPO', 101),
(20002, 'Samsung', 101),
(20003, 'Dell', 102),
(20004, 'Acer', 102),
(20005, 'Logitech', 103),
(20006, 'Steelseries', 103),
(20007, 'Apple', 104),
(20008, 'Lenovo', 104);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHD` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MAKH` int(10) DEFAULT NULL,
  `MANV` int(10) DEFAULT NULL,
  `TINHTRANG` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYHD` datetime NOT NULL,
  `TONGTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MAHD`, `MAKH`, `MANV`, `TINHTRANG`, `NGAYHD`, `TONGTIEN`) VALUES
('0a2b4295-4553-4ec1-a2bf-d5493f', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:22:22', 0),
('1004e790-30a2-4589-bf53-10807f', 1, 1005, 'ĐÃ XỬ LÝ', '2022-05-06 15:56:10', 3688),
('1cfa7e95-9d9a-429b-85ff-9f67df', 1, 1002, 'ĐÃ XỬ LÝ', '2022-05-05 15:49:22', 29613575),
('26ab66a2-1470-44f8-8894-157d80', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:25', 7056475),
('27297cf8-c777-4b77-bef2-cc7615', 1, 1003, 'ĐÃ XỬ LÝ', '2022-01-07 15:55:17', 27989700),
('2b4a79e6-d6f6-479d-8beb-e7c67b', 1, 1005, 'ĐÃ XỬ LÝ', '2022-01-04 15:57:39', 6852173),
('2e0aa26a-3317-4acb-86f4-940759', 1, 1005, 'ĐÃ XỬ LÝ', '2022-05-06 16:47:40', 74682575),
('3d2c4d46-b66c-4a88-852b-f49a4c', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:33:16', 7056475),
('4288a932-a779-4c9f-8e26-eb3fd3', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:28', 7056475),
('5a9298e5-ba5b-4bf7-8867-4c73c0', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:28', 7056475),
('5bb44669-1378-4725-afa3-74fec8', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:28', 7056475),
('5e636af9-61c1-4dfd-9c49-31fcbe', 1, 1003, 'ĐÃ XỬ LÝ', '2022-02-18 15:57:26', 5262655),
('628ac22b-574b-4118-9904-f30cbb', 1, 1007, 'ĐÃ XỬ LÝ', '2022-02-01 15:55:56', 2968),
('6312d7e9-7931-48d0-9292-b2fc47', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-10 02:15:21', 4281125),
('80548563-1c47-42b6-be28-17c4bd', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-10 02:13:39', 10424199),
('8c997fca-e8ac-4162-8775-22b6bd', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:33:37', 7056475),
('900cbdf6-29ae-4334-be97-9037a4', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:26', 7056475),
('90fac6be-6922-4804-a01d-e63981', 1, 1005, 'ĐÃ XỬ LÝ', '2022-03-20 15:57:06', 8412425),
('94e339fd-a184-4fce-9782-faf9e8', 1, 1007, 'ĐÃ XỬ LÝ', '2022-06-06 15:55:41', 5193235),
('96cf0723-dcbe-49a7-874c-8553d9', 1, 1007, 'ĐÃ XỬ LÝ', '2022-07-13 15:56:31', 4072948),
('9e4bb8d5-cdd3-4839-9429-80e7de', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:22:21', 0),
('b367fce8-b87d-4ccd-b4b8-ee4bbf', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-10 02:05:39', 7056475),
('d174c63e-a621-4d3c-acf5-b74797', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:28', 7056475),
('e82dc0a8-487f-48ce-a4a6-d93fb1', 1, 1002, 'ĐÃ XỬ LÝ', '2022-08-05 17:07:34', 9091364),
('f6312217-db25-474d-b3e8-9c252a', 1, 1007, 'ĐÃ XỬ LÝ', '2022-09-14 15:56:22', 4069908),
('f80ee829-8c62-40c2-9b7e-bae14c', 1, NULL, 'ĐANG XỬ LÝ', '2022-05-09 14:09:27', 7056475),
('ff05b642-5d54-4698-99b1-99edbc', 1, 1007, 'ĐÃ XỬ LÝ', '2022-10-04 15:57:18', 5260908);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) NOT NULL,
  `HOKH` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENKH` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `USERID_KH` int(6) NOT NULL,
  `DIACHI` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `enable_kh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOKH`, `TENKH`, `USERID_KH`, `DIACHI`, `SDT`, `enable_kh`) VALUES
(1, 'Đinh', 'Thanh Tiên', 1, 'Cam Ranh', 862106951, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MALOAI` int(10) NOT NULL,
  `TENLOAI` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MALOAI`, `TENLOAI`) VALUES
(101, 'Điện thoại'),
(102, 'Laptop'),
(103, 'Phụ kiện'),
(104, 'Tablets');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MANCC` int(10) NOT NULL,
  `TENNCC` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHINCC` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `DIENTHOAI` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SOFAX` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` int(10) NOT NULL,
  `HONV` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENNV` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `USERID_NV` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HONV`, `TENNV`, `DIACHI`, `SDT`, `USERID_NV`) VALUES
(1001, 'Vũ Mai Lan', 'Hương', '8 Điện Biên Phủ', 8330733, 5),
(1002, 'Trần Cương', 'Phong', '1 Lý Thường Kiệt', 8308117, 6),
(1003, 'Bùi Thanh', 'Quang', '78 Trương Đình', 8324461, 7),
(1004, 'Lê Tuấn', 'Phương', '351 Lạc Long Quân', 8308155, 8),
(1005, 'Hồ Thị', 'Giao', '65 Nguyễn Thái Sơn', 8324467, 9),
(1006, 'Nguyễn Thị', 'Chi', '12/6 Nguyễn Kiệm', 8120012, 10),
(1007, 'Nguyễn Tru', 'Tâm', '36 Nguyễn Văn Cừ', 8458188, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhaphang`
--

CREATE TABLE `phieunhaphang` (
  `IDNHAP` int(10) NOT NULL,
  `MANCC` int(10) NOT NULL,
  `MASP` int(10) NOT NULL,
  `NGAYNHAP` datetime(6) NOT NULL,
  `DONGIANHAP` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `TONGTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `MAQUYEN` int(10) NOT NULL,
  `TENQUYEN` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`MAQUYEN`, `TENQUYEN`) VALUES
(0, 'User'),
(1, 'Staff'),
(2, 'Admin'),
(3, 'Manager');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(10) NOT NULL,
  `TENSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `GIA` int(11) DEFAULT NULL,
  `DONVITINH` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MAHANG` int(10) DEFAULT NULL,
  `IMG` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `SOLUONG`, `GIA`, `DONVITINH`, `MAHANG`, `IMG`, `DESCRIPTION`, `enable`) VALUES
(10, 'Laptop Acer Spin 3', 3, 1250, 'Dollar', 20004, '1.png', '\'Laptop Acer Spin 3 SP314-51-36JE (NX.GUWSV.005) (14\\\" FHD/i3-7130U/4GB/1TB HDD/HD 620/Win10/1.7 kg)', 1),
(11, 'Laptop Acer Spin 5', 6, 1250, 'Dollar', 20004, 'acer-spin-5.png', 'Laptop Acer Spin 5 SP513-52N-556V (NX.GR7SV.004) (13.3\" FHD/i5-8250U/8GB/UHD 620/Win10/1.5 kg)', 1),
(12, 'Laptop Acer Nitro 5', 7, 1100, 'Dollar', 20004, 'acer-nitro-5.png', 'Laptop Acer Nitro 5 AN515-52-51LW (NH.Q3LSV.002) (15.6\" FHD/i5-8300H/8GB/1TB HDD/GTX 1050Ti/Linux/2.', 1),
(13, 'Laptop Acer Swift 3', 4, 1520, 'Dollar', 20004, 'acer-swift-3.png', 'Laptop Acer Swift 3 SF313-51-56UW (NX.H3ZSV.002) (13.3\" FHD/i5-8250U/8GB/256GB SSD/UHD 620/Win10/1.4', 1),
(14, 'Laptop ACER Aspire 3', 6, 1200, 'Dollar', 20004, 'acer-aspire-3.png', 'Laptop ACER Aspire 3 A315-56-502X (NX.HS5SV.00F) ( 15.6\" Full HD/Intel Core i5-1035G1/4GB/256GB SSD/', 1),
(15, 'Laptop ACER Swift X', 2, 1440, 'Euro', 20004, 'acer-swift-x.png', 'Laptop ACER Swift X SFX14-41G-R61A NX.AU3SV.001 ( 14\" Full HD/AMD Ryzen 5 5600U/16GB/1TB SSD/NVIDIA ', 1),
(16, 'Laptop ACER Nitro 5 Eagle', 6, 1250, 'Dollar', 20004, 'acer-nitro-5-eagle.png', 'Laptop ACER Nitro 5 Eagle AN515-57-54MV NH.QENSV.003 ( 15.6\" Full HD/ 144Hz/Intel Core i5-11400H/8GB', 1),
(17, 'Laptop ACER Aspire 7', 6, 1850, 'Dollar', 20004, 'acer-aspire-7.png', 'Laptop ACER Aspire 7 A715-42G-R1SB NH.QAYSV.005 ( 15.6\" Full HD/ 144Hz/AMD Ryzen 5 5500U/8GB/256GB S', 1),
(18, 'Laptop ACER TravelMate P2', 10, 1600, 'Euro', 20004, 'acer-travelmate-p2.png', 'Laptop ACER TravelMate P2 TMP214-53-51CU NX.VPNSV.01S ( 14\" Full HD/Intel Core i5-1135G7/8GB/512GB S', 1),
(19, 'Laptop ACER Gaming Nitro 5', 14, 1450, 'Dollar', 20004, 'acer-gaming-nitro-5.png', 'Laptop ACER Gaming Nitro 5 AN515-45-R86D NH.QBCSV.005 ( 15.6\" Full HD/ 144Hz/Ryzen 7 5800H/8GB/512GB', 1),
(20, 'Laptop ACER TravelMate B3', 3, 1250, 'Dollar', 20004, 'acer-travelmate-b3.png', 'Laptop ACER TravelMate B3 TMB311-31-P49D NX.VNFSV.005 ( 11.6\" HD/Intel Pentium Silver N5030/4GB/256G', 1),
(21, 'Laptop Acer Predator Triton 300 ', 3, 1580, 'Dollar', 20004, 'acer-predator-trion-500.png', 'Laptop Acer Predator Triton 300 PT315-53-7440 (NH.QDRSV.003)', 1),
(22, 'Laptop Dell Vostro 14', 6, 320, 'Dollar', 20003, '2.png', 'Laptop Dell Vostro 14 3405 V4R53500U003W ( 14\\\" Full HD/AMD Ryzen 5 3500U/8GB/512GB SSD/Windows 10 H', 1),
(23, 'Laptop Doanh Nghiệp Dell Latitude 3520', 9, 1250, 'Euro', 20003, 'dell-latitude-3520.png', 'Laptop Doanh Nghiệp Dell Latitude 3520 70251603 ( 15.6inch HD/Intel Core i3-1115G4/4GB/256GB SSD/Fed', 1),
(24, 'Laptop Dell Inspiron 15', 7, 195, 'Dollar', 20003, 'dell-inspiron-15.png', 'Laptop Dell Inspiron 15 3511 P112F001ABL ( 15.6\" Intel Core i3-1115G4/4GB/256GB SSD/Windows 10 Home ', 1),
(25, 'Laptop Dell Alienware M15 R6', 7, 2150, 'Dollar', 20003, 'dell-alienware-m15-r6.png', 'Laptop Dell Alienware M15 R6 (P109F001BBL) P109F001 ( 15.6\" 165Hz/Intel Core i7-11800H/32GB/1TB SSD/', 1),
(26, 'Laptop Dell Gaming G15', 3, 1250, 'Euro', 20003, 'dell-gaming-g15.png', 'Laptop Dell Gaming G15 5515 5515-P105F004CGR ( 15.6\" Full HD/ 120Hz/AMD Ryzen 5 5600H/8GB/256GB SSD/', 1),
(27, 'Laptop Dell Vostro 3400', 3, 159, 'Dollar', 20003, 'dell-vostro-3400.png', 'Laptop Dell Vostro 3400 3400-70270644 ( 14\" Intel Core i3-1115G4/8GB/256GB SSD/Windows 11 Home SL 64', 1),
(28, 'Laptop Dell Vostro 5410', 9, 157, 'Dollar', 20003, 'dell-vostro-5410.png', 'Laptop Dell Vostro 5410 V4I5214W1 ( 14\" Full HD/Intel Core i5-11320H/8GB/512GB SSD/Windows 11 Home S', 1),
(29, 'Laptop Lenovo V330-14IKBR', 7, 652, 'Dollar', 20008, 'Laptop-Lenovo-V330-14IKBR.png', 'Laptop Lenovo V330-14IKBR (81B0008LVN) (14\" HD/i5-8250U/4GB/1TB HDD/UHD 620/Free DOS/1.5 kg)', 1),
(30, 'Laptop Lenovo Ideapad 330', 8, 582, 'Dollar', 20008, 'Lenovo-Ideapad-330.png', 'Laptop Lenovo Ideapad 330-15IKBR (15IKBR 81DE010CVN) (15.6\" HD/i3-7020U/4GB/2TB HDD/Radeon 530/Win10', 1),
(31, 'Laptop Lenovo Yoga Slim 7', 9, 952, 'Dollar', 20008, 'Lenovo-Yoga-Slim-7.png', 'Laptop Lenovo Yoga Slim 7 14ITL05- 82A3002QVN ( 14 inch Full HD/Intel Evo Core i5-1135G7/8GB/512GB S', 1),
(32, 'Laptop Lenovo IdeaPad 3', 7, 475, 'Dollar', 20008, 'Lenovo-IdeaPad-3.png', 'Laptop Lenovo IdeaPad 3 15ITL6 82H800M3VN ( 15.6\" Full HD/Intel Core i5-1135G7/8GB/256GB SSD/Windows', 1),
(33, 'Laptop Lenovo Ideapad 1', 8, 475, 'Dollar', 20008, 'Lenovo-Ideapad-1.png', 'Laptop Lenovo Ideapad 1 11IGL05 81VT006FVN ( 11.6\" Intel Pentium Silver N5030/4GB/256GB SSD/Windows ', 1),
(34, 'Laptop Lenovo IdeaPad 5', 8, 356, 'Dollar', 20008, 'Lenovo-IdeaPad-5.png', 'Laptop Lenovo IdeaPad 5 15ITL05 82FG01H8VN ( 15.6\" Intel Core i5-1135G7/8GB/256GB SSD/Windows 11 Hom', 1),
(35, 'Laptop Lenovo Ideapad Gaming 3', 17, 1520, 'Dollar', 20008, 'lenovo-ideapad-gaming-3.png', 'Laptop Lenovo Ideapad Gaming 3 15IMH05 81Y400X0VN ( 15.6\" Full HD/ 120Hz/Intel Core i5-10300H/8GB/51', 1),
(36, 'Laptop Lenovo Legion 5', 8, 582, 'Dollar', 20008, 'lenovo-legion-5.png', 'Laptop Lenovo Legion 5 15ITH6H 82JH002VVN ( 15.6\" Full HD/ 165Hz/Intel Core i7-11800H/16GB/512GB SSD', 1),
(37, 'Laptop Lenovo Legion 5 Pro', 8, 693, 'Dollar', 20008, 'lenovo-legion-5-pro.png', 'Laptop Lenovo Legion 5 Pro 16ITH6H 82JD00BCVN ( 16\" 165Hz/Intel Core i7-11800H/16GB/512GB SSD/NVIDIA', 1),
(38, 'Laptop Lenovo Yoga Slim 7 Pro', 8, 1580, 'Euro', 20008, 'lonovo-yoga-slim-7-pro.png', 'Laptop Lenovo Yoga Slim 7 Pro 14IHU5 O 82NH008TVN ( 14\" Retina/ 90Hz/Intel Core i7-11370H/16GB/1TB S', 1),
(39, 'Laptop Lenovo Yoga Slim 7 Carbon', 5, 745, 'Dollar', 20008, 'lenovo-yoga-slim-7-carbon.png', 'Laptop Lenovo Yoga Slim 7 Carbon 14ACN6-82L0005BVN', 1),
(40, 'Laptop Lenovo Thinkpad X1 Carbon', 8, 856, 'Dollar', 20008, 'lenovo-thinkpad-x1-carbon.png', 'Laptop Lenovo Thinkpad X1 Carbon Gen 3 i5-5300U, Ram 8GB, SSD 256 GB, 14 Inch Full HD IPS', 1),
(41, 'SAMSUNG Galaxy S22+ Smartphone', 15, 999, 'Dollar', 20002, '3.png', 'SAMSUNG Galaxy S22+ Smartphone, Factory Unlocked Android Cell Phone, 128GB, 8K Camera & Video, Brigh', 1),
(42, 'SAMSUNG Galaxy S22 Ultra Smartphone', 15, 1199, 'Dollar', 20002, '4.png', 'SAMSUNG Galaxy S22 Ultra Smartphone, Factory Unlocked Android Cell Phone, 128GB, 8K Camera & Video, ', 1),
(43, 'SAMSUNG Galaxy S20 FE 5G', 15, 560, 'Dollar', 20002, '5.png', 'SAMSUNG Galaxy S20 FE 5G Factory Unlocked Android Cell Phone 128GB US Version Smartphone Pro-Grade C', 1),
(44, 'Samsung Galaxy S21 FE 5G Cell Phone', 15, 599, 'Dollar', 20002, '6.png', 'Samsung Galaxy S21 FE 5G Cell Phone, Factory Unlocked Android Smartphone, 128GB, 120Hz Display, Pro ', 1),
(45, 'SAMSUNG Galaxy A13 5G Cell Phone', 15, 249, 'Dollar', 20002, '7.png', 'SAMSUNG Galaxy A13 5G Cell Phone, Factory Unlocked Android Smartphone, 64GB, Long Lasting Battery, E', 1),
(46, 'Samsung Electronics Galaxy A42 5G', 15, 399, 'Dollar', 20002, '8.png', 'Samsung Electronics Galaxy A42 5G, Factory Unlocked Smartphone, Android Cell Phone, Multi-Lens Camer', 1),
(47, 'SAMSUNG Electronics Galaxy Z Flip 3 5G', 15, 49, 'Dollar', 20002, '9.png', 'SAMSUNG Electronics Galaxy Z Flip 3 5G Factory Unlocked Android Cell Phone US Version Smartphone Fle', 1),
(48, 'Samsung Galaxy A22 5G', 15, 245, 'Dollar', 20002, '10.png', 'Samsung Galaxy A22 5G 128GB 6GB Ram GSM Factory Unlocked Smartphone International Version - No Warra', 1),
(49, 'Samsung Galaxy S10 Plus', 15, 286, 'Dollar', 20002, '11.png', 'Samsung Galaxy S10 Plus 128GB ROM 8GB RAM G975 6.4\" GSM Unlocked Smartphone - Manufacturer Refurbish', 1),
(50, 'Samsung Galaxy S10e', 15, 222, 'Dollar', 20002, '12.png', 'Samsung Galaxy S10e 128GB ROM 6GB RAM G970 GSM Unlocked Smartphone - Manufacturer Refurbished', 1),
(51, 'Samsung Galaxy Note 9', 15, 264, 'Dollar', 20002, '13.png', 'Samsung Galaxy Note 9 128GB ROM 6GB RAM N960 6.4\" GSM Unlocked Smartphone - Manufacturer Refurbished', 1),
(52, 'Apple iPhone 12 Pro', 18, 799, 'Dollar', 20007, '20.png', 'Apple iPhone 12 Pro, 128GB, Graphite - Unlocked (Renewed Premium)', 1),
(53, 'Apple iPhone XR', 18, 359, 'Dollar', 20007, '21.png', 'Apple iPhone XR, 128GB, White', 1),
(54, 'Apple iPhone 12 Pro', 18, 799, 'Dollar', 20007, '22.png', 'Apple iPhone 12 Pro, 128GB, Pacific Blue', 1),
(55, 'Apple iPhone 12 Pro Max', 18, 929, 'Dollar', 20007, '23.png', 'Apple iPhone 12 Pro Max, 128GB, Graphite', 1),
(56, 'Apple iPhone 11 Pro', 18, 549, 'Dollar', 20004, '24.png', 'Apple iPhone 11 Pro, 64GB, Midnight Green', 1),
(57, 'Apple iPhone SE', 18, 289, 'Dollar', 20007, '25.png', 'Apple iPhone SE, 64GB, Black', 1),
(58, 'Apple iPhone 8', 18, 486, 'Dollar', 20007, '26.png', 'Apple iPhone 8, US Version, 64GB, Gold', 1),
(59, 'Apple iPhone XS Max', 18, 459, 'Dollar', 20007, '27.png', 'Apple iPhone XS Max, 256GB, Space Gray', 1),
(60, 'Apple iPhone X', 18, 359, 'Dollar', 20007, '28.png', 'Apple iPhone X, 256GB, Silver', 1),
(61, 'Apple iPhone 8 Plus', 18, 359, 'Dollar', 20007, '28.png', 'Apple iPhone 8 Plus, 256GB, Red - GSM Carriers (Renewed Premium)', 1),
(62, 'Apple iPhone 7 Plus Pre', 18, 269, 'Dollar', 20007, '30.png', 'Apple iPhone 7 Plus Pre-Owned (GSM Unlocked) 128GB', 1),
(63, 'Oppo A15', 20, 2922975, 'Vnd', 20001, '50.png', 'Oppo A15 32GB Dual SIM Unlocked Black Blue Android 4G Smart Phone | Excellent', 1),
(64, 'Oppo A54 5G', 20, 4281125, 'Vnd', 20001, '51.png', 'Oppo A15 32GB Dual SIM Unlocked Black Blue Android 4G Smart Phone | Excellent', 1),
(65, 'Oppo Reno 5G', 20, 7056475, 'Vnd', 20001, '53.png', 'Oppo Reno 5G 256GB Unlocked Black Green Android Smart Phone CPH1921 | Excellent', 1),
(66, 'Oppo Find X2', 20, 6938375, 'Vnd', 20001, '54.png', 'Oppo Find X2 256GB Unlocked Black Blue Smartphone Mobile CPH2023 5G | Very Good', 1),
(67, 'Oppo Find X3 Pro', 20, 15398471, 'Vnd', 20001, '55.png', 'Oppo Find X3 Pro - As New Condition', 1),
(68, 'OPPO F21 Pro', 20, 8386363, 'Vnd', 20001, '56.png', 'OPPO F21 Pro (RAM 8GB, 128GB Storage)6.43\" 64MP Camera Dual SIM Googleplay Store', 1),
(69, ' Oppo Reno7 Pro 5G', 20, 14543181, 'Vnd', 20001, '57.png', 'Oppo Reno7 Pro 5G Factory Unlocked Dual SIM 12GB/256GB Sony Flagship Camera', 1),
(70, 'OPPO A96', 20, 7351725, 'Vnd', 20001, '58.png', 'OPPO A96 (RAM 8GB, 128GB Storage) 6.59\" 50MP-Camera Dual Sim Googleplay Store', 1),
(71, 'OPPO Reno 4 5G ', 20, 9482878, 'Vnd', 20001, '59.png', 'OPPO Reno 4 5G (Dual Sim, 6.43\", 48MP, 128GB/8GB) - Space Black', 1),
(72, 'Oppo Find X3', 20, 7056475, 'Vnd', 20001, '60.png', 'Oppo Find X3 Lite Dual SIM 128GB Unlocked Black Silver Blue 5G Phone | Excellent', 1),
(73, 'Logitech G G502 HERO mouse Right-hand USB Type', 30, 3367724, 'Vnd', 20005, '80.png', 'Logitech G G502 HERO mouse Right-hand USB Type-A Optical 16000 DPI', 1),
(74, 'LOGITECH G PRO WIRED LIGHTSYNC RGB GAMING MOUSE', 10, 2496429, 'Vnd', 20005, '81.png', 'LOGITECH G PRO WIRED LIGHTSYNC RGB GAMING MOUSE,6 PROGRAMMABLE BUTTONS,UP TO 256', 1),
(75, 'Logitech Wireless K270 keyboard RF Wireless QWERTY', 15, 1134055, 'Vnd', 20005, '82.png', 'Logitech Wireless K270 keyboard RF Wireless QWERTY English Black 920-003745 Wir', 1),
(76, 'Logitech Pro C2920 1080p Stream Webcam', 30, 2034090, 'Vnd', 20005, '84.png', 'Logitech Pro C2920 1080p Stream Webcam - Black', 1),
(77, 'Logitech G435 LIGHTSPEED and Bluetooth Wireless Ga', 30, 1972954, 'Vnd', 20005, '85.png', 'Logitech G435 LIGHTSPEED and Bluetooth Wireless Gaming Headset - Lightweight ...', 1),
(88, 'Logitech H540 Wired Headset, Stereo Headphone with', 30, 1664914, 'Vnd', 20005, '76.png', 'Logitech H540 Wired Headset, Stereo Headphone with Noise-Cancelling ‎Black', 1),
(89, 'Logitech POP Keys Keyboard Mechanical Wireless Wit', 30, 1664914, 'Vnd', 20005, '77.png', 'Logitech POP Keys Keyboard Mechanical Wireless With Keys Emoji Sashes', 1),
(90, 'Logitech G Pro (920009388) Wired Gaming Keyboard', 30, 2477272, 'Vnd', 20005, '78.png', 'Logitech G Pro (920009388) Wired Gaming Keyboard', 1),
(91, 'Logitech g935', 30, 2451477, 'Vnd', 20005, '79.png', 'Logitech g935', 1),
(92, 'Logitech - G305 Wireless Gaming Mouse - Lilac NEW', 30, 2205227, 'Vnd', 20005, '80.png', 'Logitech - G305 Wireless Gaming Mouse - Lilac NEW', 1),
(93, 'SteelSeries Arctis 7X ', 25, 3863636, 'Vnd', 20006, '93.png', 'SteelSeries Arctis 7X Wireless Gaming Headset for Xbox Series X/S - Black', 1),
(94, 'SteelSeries Arctis 7P+', 25, 2988181, 'Vnd', 20006, '94.png', 'SteelSeries Arctis 7P+ - Wireless Gaming Headset for PlayStation 4/5/ Nintendo', 1),
(95, 'REFURB SteelSeries Arctis 9X', 25, 1817954, 'Vnd', 20006, '95.png', 'REFURB SteelSeries Arctis 9X Wireless Stereo Gaming Headset for Xbox One', 1),
(96, 'SteelSeries Arctis 3 Console', 25, 908863, 'Vnd', 20006, '96.png', 'SteelSeries Arctis 3 Console - Stereo Wired Gaming HeadsetOpens in a new window or tab', 1),
(97, 'SteelSeries Arctis 9X Wireless Bluetooth Gaming He', 25, 1363409, 'Vnd', 20006, '97.png', 'SteelSeries Arctis 9X Wireless Bluetooth Gaming Headset - Tested', 1),
(98, 'STEELSERIES Arctis 3 Gaming Headset (All Platforms', 25, 1181000, 'Vnd', 20006, '98.png', 'STEELSERIES Arctis 3 Gaming Headset (All Platforms) - Black (BRAND NEW)', 1),
(99, 'SteelSeries Apex 3 Water Resistant Gaming Keyboard', 25, 1172897, 'Vnd', 20006, '99.png', 'SteelSeries Apex 3 Water Resistant Gaming Keyboard - Black', 1),
(100, 'SteelSeries Apex Pro TKL Wired Keyboard', 25, 2272727, 'Vnd', 20006, '100.png', 'SteelSeries Apex Pro TKL Wired Keyboard', 1),
(101, 'SteelSeries Aerox 3 Wireless Optical Gaming Mouse ', 25, 2066750, 'Vnd', 20006, '101.png', 'SteelSeries Aerox 3 Wireless Optical Gaming Mouse - Ghost Limited Edition', 1),
(102, 'SteelSeries Arctis Pro Wireless TRANSCEIVER and 2x', 25, 719986, 'Vnd', 20006, '102.png', 'SteelSeries Arctis Pro Wireless TRANSCEIVER and 2x batteries', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `USERID` int(10) NOT NULL,
  `USERNAME` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `MAQUYEN` int(10) NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`USERID`, `USERNAME`, `PASSWORD`, `EMAIL`, `MAQUYEN`, `enable`) VALUES
(1, 'thanhtien', '123456789', 'thanhtien@gmail.com', 0, 1),
(2, 'staff', 'staff', 'staff@gmail.com', 1, 1),
(3, 'admin', 'admin', 'admin@gmail.com', 2, 1),
(4, 'manager', 'manager', 'manager@gmail.com', 3, 1),
(5, 'lanhuong123', '123456789', 'lanhuong@gmail.com', 1, 1),
(6, 'tranphong22', '123456789', 'tranphong@gmail.com', 1, 1),
(7, 'thanhquang99', '123456789', 'buiquang@gmail.com', 1, 1),
(8, 'phuongle1999', '123456789', 'phuongle@gmail.com', 1, 1),
(9, 'hogiao2k2', '123456789', 'hogiao@gmail.com', 1, 1),
(10, 'chinguyenthi', '123456789', 'chinguyen@gmail.com', 1, 1),
(11, 'tamtru45', '123456789', 'nguyentam@gmail.com', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`MAHD`,`MASP`),
  ADD KEY `FK_CTHD` (`MASP`,`MAHD`) USING BTREE;

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MAHANG`),
  ADD KEY `FK_H` (`MALOAI`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHD`) USING BTREE,
  ADD KEY `FK_HD` (`MAKH`),
  ADD KEY `FK_HD_1` (`MANV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `FK_TK_KH` (`USERID_KH`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MANCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `FK_TK_NV` (`USERID_NV`);

--
-- Chỉ mục cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD PRIMARY KEY (`IDNHAP`),
  ADD KEY `FK_MANCC` (`MANCC`),
  ADD KEY `FK_SP` (`MASP`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MAQUYEN`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_SP` (`MAHANG`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`USERID`),
  ADD UNIQUE KEY `FK_ID` (`USERID`),
  ADD KEY `FK_Q` (`MAQUYEN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `MAHANG` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20009;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MALOAI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MANCC` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  MODIFY `IDNHAP` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `USERID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `FK_CTHD` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`),
  ADD CONSTRAINT `FK_CTHD_1` FOREIGN KEY (`MAHD`) REFERENCES `hoadon` (`MAHD`);

--
-- Các ràng buộc cho bảng `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `FK_H` FOREIGN KEY (`MALOAI`) REFERENCES `loai` (`MALOAI`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`),
  ADD CONSTRAINT `FK_HD_1` FOREIGN KEY (`MANV`) REFERENCES `nhanvien` (`MANV`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk` FOREIGN KEY (`USERID_KH`) REFERENCES `taikhoan` (`USERID`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk` FOREIGN KEY (`USERID_NV`) REFERENCES `taikhoan` (`USERID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
