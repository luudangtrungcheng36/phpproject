-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2024 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcoffeehomes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `AccountID` int(11) NOT NULL,
  `TenTaiKhoan` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` int(20) DEFAULT NULL,
  `Role` tinyint(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`AccountID`, `TenTaiKhoan`, `Email`, `Password`, `Address`, `PhoneNumber`, `Role`) VALUES
(3, 'cheng', 'luudangtrungcheng@gmail.com', '123', 'Ha noi', 1234567, 0),
(7, 'luudangtrungcheng', 'luudangtrungcheng@gmail.com', '123', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `HinhAnhSanPham` varchar(255) DEFAULT NULL,
  `TenSanPham` varchar(255) DEFAULT NULL,
  `GiaBan` decimal(10,3) NOT NULL,
  `SoLuong` int(3) NOT NULL,
  `TongTien` decimal(10,3) NOT NULL,
  `OrderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`CartID`, `AccountID`, `ProductID`, `HinhAnhSanPham`, `TenSanPham`, `GiaBan`, `SoLuong`, `TongTien`, `OrderID`) VALUES
(1, 3, 18, '1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1_large.webp', 'Trà la hán ', 35.000, 1, 35.000, 28),
(2, 3, 14, '1697441914_phin-gato_304446dce9ec4fe0a5527536b93f6eda_large.webp', 'Kem vani ', 30.000, 1, 30.000, 28),
(6, 7, 18, '1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1_large.webp', 'Trà la hán ', 35.000, 1, 35.000, 32),
(7, 7, 18, '1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1_large.webp', 'Trà la hán ', 35.000, 1, 35.000, 32),
(8, 7, 18, '1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1_large.webp', 'Trà la hán ', 35.000, 1, 35.000, 33),
(9, 7, 17, '1697450388_tx-latte_ef8fdb94fb2a4691b0cc909188b77829_large.webp', 'Trà quế ', 35.000, 1, 35.000, 34),
(10, 7, 13, 'tải xuống (2).jpg', 'Hot chocolate', 35.000, 1, 35.000, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoriesID` int(11) NOT NULL,
  `TenDanhMuc` varchar(255) DEFAULT NULL,
  `MoTaDanhMuc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoriesID`, `TenDanhMuc`, `MoTaDanhMuc`) VALUES
(5, 'Trà ', NULL),
(12, 'Cà Phê Việt Nam ', ''),
(13, 'Hot Drink ', ''),
(14, 'Sữa Chua ', ''),
(15, 'Kem ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `NguoiDatHang` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` int(50) NOT NULL,
  `NgayDatHang` datetime DEFAULT NULL,
  `PTTT` tinyint(1) NOT NULL,
  `GiamGia` double DEFAULT NULL,
  `TongGiaTriDonHang` decimal(10,3) DEFAULT NULL,
  `TrangThaiDonHang` varchar(50) DEFAULT NULL,
  `SoBan` varchar(50) DEFAULT NULL,
  `NguoiPhucVu` varchar(50) DEFAULT NULL,
  `GioVao` date DEFAULT NULL,
  `GioRa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`OrderID`, `NguoiDatHang`, `Email`, `Address`, `PhoneNumber`, `NgayDatHang`, `PTTT`, `GiamGia`, `TongGiaTriDonHang`, `TrangThaiDonHang`, `SoBan`, `NguoiPhucVu`, `GioVao`, `GioRa`) VALUES
(28, 'cheng', 'luudangtrungcheng@gmail.com', 'Ha noi', 1234567, '2024-03-04 16:31:31', 0, NULL, 65.000, NULL, NULL, NULL, NULL, NULL),
(29, 'asd', 'asd', 'dasd', 21312, '2024-03-11 21:14:38', 1, NULL, 35.000, NULL, NULL, NULL, NULL, NULL),
(30, 'asd', 'asd', 'dasd', 21312, '2024-03-11 21:14:54', 1, NULL, 35.000, NULL, NULL, NULL, NULL, NULL),
(31, 'asd', 'asd', 'dasd', 21312, '2024-03-11 21:15:15', 1, NULL, 35.000, NULL, NULL, NULL, NULL, NULL),
(32, 'luudangtrungcheng', 'luudangtrungcheng@gmail.com', 'dasd', 21312, '2024-03-11 21:23:09', 0, NULL, 70.000, NULL, NULL, NULL, NULL, NULL),
(33, 'luudangtrungcheng', 'luudangtrungcheng@gmail.com', 'Ha noi', 8812312, '2024-03-12 09:20:42', 0, NULL, 35.000, NULL, NULL, NULL, NULL, NULL),
(34, 'luudangtrungcheng', 'luudangtrungcheng@gmail.com', '', 0, '2024-03-12 09:21:12', 0, NULL, 70.000, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `TenSanPham` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `GiaBan` decimal(10,3) DEFAULT NULL,
  `HinhAnhSanPham` varchar(255) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `TenSanPham`, `MoTa`, `GiaBan`, `HinhAnhSanPham`, `CategoryID`) VALUES
(6, 'Cà Phê Đường Đen', 'Cà Phê Đường Đen mát lạnh, sảng khoái ngay từ ngụm đầu tiên nhờ sự kết hợp vượt chuẩn vị quen giữa Espresso đậm đà và Đường Đen ngọt thơm. Đặc biệt, whipping cream beo béo cùng thạch cà phê giòn dai, đậm vị nhân đôi sự hấp dẫn, khơi bừng sự hứng khởi trong tích tắc.\r\n\r\n', 30.000, 'capheduongden.webp', 12),
(10, 'Cà phê đen ', '', 25.000, '13.-Ca-phe-den-600x600.png', 12),
(11, 'Cà phê bạc xỉu ', '', 30.000, 'tải xuống.jpg', 12),
(12, 'Trà gừng mật ong ', '', 25.000, 'tải xuống (1).jpg', 5),
(13, 'Hot chocolate', '', 35.000, 'tải xuống (2).jpg', 13),
(14, 'Kem vani ', '', 30.000, '1697441914_phin-gato_304446dce9ec4fe0a5527536b93f6eda_large.webp', 15),
(15, 'Kem dâu ', '', 30.000, '1697441945_banh-kem-dau_b1d03d84a9944d458f5948a3b7ce48f3_large.webp', 15),
(16, 'Kem khoai môn ', '', 30.000, '1697441952_choco-chip_06433e0e342b40d7bc59391be6df4c84_large.webp', 15),
(17, 'Trà quế ', '', 35.000, '1697450388_tx-latte_ef8fdb94fb2a4691b0cc909188b77829_large.webp', 15),
(18, 'Trà la hán ', '', 35.000, '1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1_large.webp', 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AccountID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `lk_cart_products` (`ProductID`),
  ADD KEY `lk_cart_accounts` (`AccountID`),
  ADD KEY `lk_cart_orders` (`OrderID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoriesID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoriesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_accounts` FOREIGN KEY (`AccountID`) REFERENCES `accounts` (`AccountID`),
  ADD CONSTRAINT `lk_cart_orders` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `lk_cart_products` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoriesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
