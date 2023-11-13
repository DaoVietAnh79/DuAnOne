-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2023 lúc 04:05 PM
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
-- Cơ sở dữ liệu: `duan1_2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sản phẩm rất đang trải nghiệm', 2, 1, '2023-09-22'),
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'T-Shirt'),
(2, 'Túi'),
(3, 'Dép'),
(4, 'Mũ'),
(5, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `img2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `img2`) VALUES
(1, 'Áo sơ mi họa tiết nhiều màu sắc', 300000.00, 'product-1-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 10, 1, 'product-1-2.jpg'),
(2, 'Áo sơ mi Cuban LeeZone form rộng mặc hằng ngày Fullbox', 310000.00, 'product-2-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 12, 2, 'product-2-2.jpg'),
(3, 'Giày Sneaker _New_Blance CRT300 2.0', 320000.00, 'product-3-1.jpg', 'PHOM DÁNG TỐI GIẢN CHƯA BAO GIỜ LỖI THỜI. Đi làm thanh lịch, đi chơi êm chân. Thiết kế êm ái, gót cao vừa phải giúp việc di chuyển dễ dàng, tự tin hơn. Kiểu dàng hiện tại, năng động những vẫn toát lên được vẻ kiêu kỳ thời thượng của phái nữ. Dễ dàng phối với mọi trang phục, phụ kiện tôn lên sự cá tính của các nang.', 14, 3, 'product-3-2.jpg'),
(4, 'Quần hoa ống rộng nữ', 330000.00, 'product-4-1.jpg', 'Chất vải tơ in cao cấp đứng form, không quá mỏng, có lót habutai bên trong. Dáng váy liền may giả set, dài váy 113 - 115cm, phần chân dập ly quạt, tay chun nhẹ, cúc bọc, phần eo sau có chạy chỉ chun co giãn tốt giúp linh hoạt số đo eo.', 16, 4, 'product-4-2.jpg'),
(5, 'Mũ bucket trơn vành cụp CAPMAN phong cách unisex CM65 dành cho nam nữ', 340000.00, 'product-5-1.jpg', 'Mũ Bucket ZOE, một phụ kiện thời trang đa năng và ấn tượng. Với chất liệu kaki 100% đứng form nhưng vẫn mang lại cảm giác thoải mái cho đầu, cùng với viền mũ mềm mại tạo sự êm ái và linh hoạt. Hoạ tiết thêu 2D tạo điểm nhấn độc đáo và mang đậm chất thời trang. Để bạn có thể tự tin khám phá và sáng tạo phong cách riêng của mình trong mọi hoạt động.', 18, 5, 'product-5-2.jpg'),
(6, 'Áo sơ mi nam ROWAY vải lụa thoáng mát, form regular, Sơ mi họa tiết summer', 350000.00, 'product-6-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 20, 6, 'product-6-2.jpg'),
(7, 'Áo Sweater Nam Nữ Form Rộng Có Cổ Tay Dài Hàng Cao Cấp - Chanyoou Sweater', 360000.00, 'product-7-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 22, 7, 'product-7-2.jpg'),
(8, 'Áo sơ mi basic chất kaki cao cấp, Áo sơ mi nam nữ cực đẹp', 370000.00, 'product-8-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 24, 8, 'product-8-2.jpg'),
(9, 'Áo sơ mi basic chất kaki cao cấp, Áo sơ mi nam nữ cực đẹp', 380000.00, 'product-9-1.jpg', 'Được làm từ 100% sợi cotton siêu dài với kết cấu trang nhã. Được cập nhật với kiểu dáng vừa vặn, thoải mái theo xu hướng. Cổ cài cúc dễ dàng mặc lên hoặc xuống.Cổ áo cuộn đảm bảo kiểu dáng đẹp ngay cả khi không cài cúc trên cùng. Được thiết kế để cử động cánh tay dễ dàng. Khâu được lựa chọn để tạo ra một phong cách hoàn toàn giản dị.', 26, 9, 'product-9-2.jpg'),
(10, 'Áo sơ mi basic chất kaki cao cấp, Áo sơ mi nam nữ cực đẹp', 390000.00, 'product-10-1.jpg', 'PHOM DÁNG TỐI GIẢN CHƯA BAO GIỜ LỖI THỜI. Đi làm thanh lịch, đi chơi êm chân. Thiết kế êm ái, gót cao vừa phải giúp việc di chuyển dễ dàng, tự tin hơn. Kiểu dàng hiện tại, năng động những vẫn toát lên được vẻ kiêu kỳ thời thượng của phái nữ. Dễ dàng phối với mọi trang phục, phụ kiện tôn lên sự cá tính của các nang.', 28, 10, 'product-10-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '123456', 'admin@fpt.edu.vn', NULL, NULL, 1),
(2, 'Vanh', '123456', 'anhdvph38651@edu.fpt.vn', NULL, NULL, 2),
(3, 'Canh', '1234565', 'canh@gmail.com', 'Hà Nội', NULL, 2),
(4, 'Giap', '123', 'giap@gmail.com', NULL, NULL, 0),
(6, 'Vanh123', '132', 'lupinanh2k4@gmail.com', NULL, NULL, 0),
(7, 'vanh', '123', 'lupinanh2k4@gmail.com', NULL, NULL, 0),
(8, '', '', '', NULL, NULL, 0),
(9, '', '', '', NULL, NULL, 0),
(10, '', '', '', NULL, NULL, 0),
(11, '', '', '', NULL, NULL, 0),
(12, '', '', '', NULL, NULL, 0),
(13, '', '', '', NULL, NULL, 0),
(14, '', '', '', NULL, NULL, 0),
(15, '', '', '', NULL, NULL, 0),
(16, '', '', '', NULL, NULL, 0),
(17, '', '', '', NULL, NULL, 0),
(18, '', '', '', NULL, NULL, 0),
(19, '', '', '', NULL, NULL, 0),
(20, '', '', '', NULL, NULL, 0),
(21, '', '', '', NULL, NULL, 0),
(22, '', '', '', NULL, NULL, 0),
(23, '', '', '', NULL, NULL, 0),
(24, '', '', '', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
