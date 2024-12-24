-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 24, 2024 lúc 03:54 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webmaytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cvnv` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `cvnv`, `status`, `created_time`, `last_updated`) VALUES
(3, 'admin', '1', 0, 1, 1, 1640508066),
(6, 'admin2', '1', 1, 1, 1, 1),
(8, 'admin3', '1', 2, 1, 1, 1734837937);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_library`
--

CREATE TABLE `image_library` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_library`
--

INSERT INTO `image_library` (`id`, `product_id`, `path`, `created_time`, `last_updated`) VALUES
(38, 27, 'images/library/manhinh271.jpg', 1639750067, 1639750067),
(39, 27, 'images/library/manhinh272.jpg', 1639750067, 1639750067),
(40, 28, 'images/library/msi2.jpg', 1639750148, 1639750148),
(41, 28, 'images/library/msi3.jpg', 1639750148, 1639750148),
(42, 28, 'images/library/msi4.jpg', 1639750148, 1639750148),
(193, 9, 'images/library/pc1_3(1).jpg', 1734938622, 1734938622),
(194, 9, 'images/library/pc1_2(1).jpg', 1734938622, 1734938622),
(195, 9, 'images/library/pc1_1(1).jpg', 1734938622, 1734938622),
(196, 10, 'images/library/pc2_3(1).jpg', 1734940233, 1734940233),
(197, 10, 'images/library/pc2_1(1).jpg', 1734940233, 1734940233),
(198, 10, 'images/library/pc2_2(1).jpg', 1734940233, 1734940233),
(199, 11, 'images/library/pc3_3(1).jpg', 1734941053, 1734941053),
(200, 11, 'images/library/pc3_2(1).jpg', 1734941053, 1734941053),
(201, 11, 'images/library/pc3_1(1).jpg', 1734941053, 1734941053),
(202, 18, 'images/library/pc4_3(1).jpg', 1734941400, 1734941400),
(203, 18, 'images/library/pc4_2(1).jpg', 1734941400, 1734941400),
(204, 18, 'images/library/pc4_1(1).jpg', 1734941400, 1734941400),
(205, 17, 'images/library/pc5_3(1).jpg', 1734941720, 1734941720),
(206, 17, 'images/library/pc5_2(1).jpg', 1734941720, 1734941720),
(207, 17, 'images/library/pc5_1(1).jpg', 1734941720, 1734941720),
(208, 16, 'images/library/pc6_2(1).jpg', 1734941960, 1734941960),
(209, 16, 'images/library/pc6_1(1).jpg', 1734941960, 1734941960),
(210, 113, 'images/library/lap1_3(1).jpg', 1734942707, 1734942707),
(211, 113, 'images/library/lap1_2(1).jpg', 1734942707, 1734942707),
(212, 113, 'images/library/lap1_1(1).jpg', 1734942707, 1734942707),
(213, 114, 'images/library/lap2_3(1).jpg', 1734943012, 1734943012),
(214, 114, 'images/library/lap2_2(1).jpg', 1734943012, 1734943012),
(215, 114, 'images/library/lap2_1(1).jpg', 1734943012, 1734943012),
(216, 115, 'images/library/lap3_3(1).jpg', 1734943262, 1734943262),
(217, 115, 'images/library/lap3_2(1).jpg', 1734943262, 1734943262),
(218, 115, 'images/library/lap3_1(1).jpg', 1734943262, 1734943262),
(219, 116, 'images/library/lap4_3(1).jpg', 1734943774, 1734943774),
(220, 116, 'images/library/lap4_2(1).jpg', 1734943774, 1734943774),
(221, 116, 'images/library/lap4_1(1).jpg', 1734943774, 1734943774),
(222, 117, 'images/library/lap5_3(1).jpg', 1734943962, 1734943962),
(223, 117, 'images/library/lap5_2(1).jpg', 1734943962, 1734943962),
(224, 117, 'images/library/lap5_1(1).jpg', 1734943962, 1734943962),
(225, 118, 'images/library/lap6_2(1).jpg', 1734944159, 1734944159),
(226, 118, 'images/library/lap6_1(1).jpg', 1734944159, 1734944159),
(227, 119, 'images/library/lap7_3(1).jpg', 1734944290, 1734944290),
(228, 119, 'images/library/lap7_2(1).jpg', 1734944290, 1734944290),
(229, 119, 'images/library/lap7_1(1).jpg', 1734944290, 1734944290),
(230, 120, 'images/library/lap8_3(1).jpg', 1734944475, 1734944475),
(231, 120, 'images/library/lap8_2(1).jpg', 1734944475, 1734944475),
(232, 120, 'images/library/lap8_1(1).jpg', 1734944475, 1734944475),
(233, 121, 'images/library/lap9_3(1).jpg', 1734944734, 1734944734),
(234, 121, 'images/library/lap9_2(1).jpg', 1734944734, 1734944734),
(235, 121, 'images/library/lap9_1(1).jpg', 1734944734, 1734944734),
(236, 25, 'images/library/mh1_3(1).jpg', 1734945061, 1734945061),
(237, 25, 'images/library/mh1_2(1).jpg', 1734945061, 1734945061),
(238, 25, 'images/library/mh1_1(1).jpg', 1734945061, 1734945061),
(239, 22, 'images/library/mh2_3(1).jpg', 1734945246, 1734945246),
(240, 22, 'images/library/mh2_2(1).jpg', 1734945246, 1734945246),
(241, 22, 'images/library/mh2_1(1).jpg', 1734945246, 1734945246),
(242, 123, 'images/library/mh3_3(1).jpg', 1734950788, 1734950788),
(243, 123, 'images/library/mh3_2(1).jpg', 1734950788, 1734950788),
(244, 123, 'images/library/mh3_1(1).jpg', 1734950788, 1734950788),
(245, 20, 'images/library/mh4_2(1).jpg', 1734950986, 1734950986),
(246, 20, 'images/library/mh4_1(1).jpg', 1734950986, 1734950986),
(247, 26, 'images/library/mh5_2(1).jpg', 1734951179, 1734951179),
(248, 26, 'images/library/mh5_1(1).jpg', 1734951179, 1734951179),
(249, 23, 'images/library/mh6_3(1).jpg', 1734951366, 1734951366),
(250, 23, 'images/library/mh6_2(1).jpg', 1734951366, 1734951366),
(251, 23, 'images/library/mh6_1(1).jpg', 1734951366, 1734951366),
(252, 24, 'images/library/mh7_3(1).jpg', 1734951531, 1734951531),
(253, 24, 'images/library/mh7_2(1).jpg', 1734951531, 1734951531),
(254, 24, 'images/library/mh7_1(1).jpg', 1734951531, 1734951531),
(255, 124, 'images/library/pc7_2(1).jpg', 1734952086, 1734952086),
(256, 124, 'images/library/pc7_1(1).jpg', 1734952086, 1734952086),
(257, 126, 'images/library/lt1_3(1).jpg', 1734952560, 1734952560),
(258, 126, 'images/library/lt1_2(1).jpg', 1734952560, 1734952560),
(259, 126, 'images/library/lt1_1(1).jpg', 1734952560, 1734952560),
(260, 127, 'images/library/lt2_3(1).jpg', 1734952680, 1734952680),
(261, 127, 'images/library/lt2_2(1).jpg', 1734952680, 1734952680),
(262, 127, 'images/library/lt2_1(1).jpg', 1734952680, 1734952680);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_product`
--

CREATE TABLE `menu_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_product`
--

INSERT INTO `menu_product` (`id`, `name`) VALUES
(1, 'PC GAMING'),
(2, 'MÀN HÌNH MÁY TÍNH'),
(18, 'LAPTOP - PHỤ KIỆN'),
(19, 'THIẾT BỊ LƯU TRỮ'),
(20, 'TẢN NHIỆT PC - COOLING'),
(21, 'BÀN PHÍM - CHUỘT'),
(22, 'THIẾT BỊ MẠNG'),
(23, 'THIẾT BỊ VĂN PHÒNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `content`, `created_time`, `last_updated`, `status`) VALUES
(11599, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'kkkkk', 'fffff', 1734971854, 1734971854, 2),
(235592, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'Nam Định', 'gggggg', 1734999205, 1734999205, 2),
(252727, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'Nam Định', 'gggggg', 1734999224, 1734999224, 2),
(447408, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'Nam Định', 'gggggg', 1734999142, 1734999142, 2),
(835848, 85, 'Hợp Phạmccccccc', 'pvh140202@gmail.com', '0862056069', 'kkkkk', 'ccccccccccc', 1735006495, 1735006495, 0),
(842967, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'kkkkk', 'fffff', 1734971902, 1734971902, 0),
(862689, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'kkkkk', 'jajjxjncxcmxvbj', 1734971825, 1734971825, 0),
(886777, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'Nam Định', 'gggggg', 1734999284, 1734999284, 0),
(912496, 85, 'Hợp Phạm', 'pvh140202@gmail.com', '0862056069', 'kkkkk', 'jajjxjncxcmxvbj', 1734971520, 1734971520, 0),
(945038, 85, 'Hoppppp', 'pducdieu17102002@gmail.com', '0862056069', 'kkkkk', 'ggggggggg', 1734971343, 1734971343, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`order_id`, `product_id`, `product_name`, `quantity`, `image`, `price`, `time`) VALUES
(945038, 25, 'Màn Hình ASUS VY249HF -R (23.8 inch - IPS - FHD - 100Hz - 1ms)', 1, 'images/library/mh1(1).jpg', 2270000, 0),
(912496, 117, 'Laptop HP OMEN 16-k0033dx 16.1″QHD 165hz', 1, 'images/library/lap5(1).jpg', 27990000, 0),
(862689, 117, 'Laptop HP OMEN 16-k0033dx 16.1″QHD 165hz', 1, 'images/library/lap5(1).jpg', 27990000, 0),
(11599, 23, 'Màn hình TUF Gaming VG249Q3A (24 inch/ Full HD/ 180Hz/ FreeSync/ 1ms GTG)', 1, 'images/library/mh6(1).jpg', 3050000, 1735006255),
(842967, 23, 'Màn hình TUF Gaming VG249Q3A (24 inch/ Full HD/ 180Hz/ FreeSync/ 1ms GTG)', 1, 'images/library/mh6(1).jpg', 3050000, 0),
(447408, 10, 'PC GAMING CORE I5 12400F / RAM 16G RGB / VGA RTX 3050 6G', 2, 'images/library/pc2(1).jpg', 12500000, 1735006279),
(235592, 10, 'PC GAMING CORE I5 12400F / RAM 16G RGB / VGA RTX 3050 6G', 2, 'images/library/pc2(1).jpg', 12500000, 1735006260),
(252727, 10, 'PC GAMING CORE I5 12400F / RAM 16G RGB / VGA RTX 3050 6G', 2, 'images/library/pc2(1).jpg', 12500000, 1735005840),
(886777, 10, 'PC GAMING CORE I5 12400F / RAM 16G RGB / VGA RTX 3050 6G', 2, 'images/library/pc2(1).jpg', 12500000, 0),
(835848, 18, 'PC GAMING I5 12400F / RAM 16G / VGA 3060 12G', 1, 'images/library/pc4(1).jpg', 15990000, 0),
(835848, 118, 'LAPTOP ACER ASPIRE 5 A515', 1, 'images/library/lap6(1).jpg', 7990000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isActive` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producer`
--

INSERT INTO `producer` (`id`, `menu_id`, `name`, `address`, `image`, `description`, `isActive`) VALUES
(1, 1, 'CÔNG TY TNHH MÁY TÍNH NGUYỄN CÔNG', '17 Hà Kế Tấn - Phương Liệt - Thanh Xuân - Hà Nội.', 'images/library/NCC11(1).jpg', 'Là nhà tư vấn thiết kế, phân phối các thiết bị từ các thương hiệu/nhãn hiệu công nghệ máy tính công nghiệp.', 'Đang hoạt động'),
(8, 2, 'zShop', '264 Thái Hà, Q.Đống Đa, TP. Hà Nội', 'images/library/NCC12(1).jpg', 'Là đơn vị đã có bề dày với kinh nghiệm hơn 10 năm trong lĩnh vực cung cấp lắp đặt PC Gaming và PC Đồ họa tại Việt Nam, có hàng trăm ngàn khách hàng cá nhân cũng như doanh nghiệp luôn tin dùng và ủng hộ...', 'Đang hoạt động'),
(16, 18, 'Công ty TNHH Máy Tính Hà Nội Com', ' số 76 Ngõ 192 phố Lê Trọng Tấn, Phường Khương Mai,Quận Thanh Xuân,Thành Phố Hà Nội', 'images/library/NCC13(1).jpg', 'Chuyên cung cấp Laptop', 'Đang hoạt động'),
(17, 19, 'Hoàng Minh', 'Số 10 Ngõ 117 Thái Hà - Đống Đa - Hà Nội', 'images/library/NCC14(1).jpg', 'Chuyên cung cấp thiết bị lưu trữ', 'Đang hoạt động'),
(18, 20, 'FPT Shop', '640 Nguyễn Trãi, P. Thanh Xuân Bắc, Q. Thanh Xuân, TP. Hà Nội', 'images/library/NCC15(1).jpg', 'Chuyên cung cấp tản nhiệt', 'Đang hoạt động'),
(19, 21, 'Gearvn', '164 P. Thái Hà, Trung Liệt, Đống Đa, Hà Nội', 'images/library/NCC16(1).jpg', 'Chuyên cung cấp bàn phím và chuột', 'Đang hoạt động'),
(20, 22, 'Hoàng Hà Mobile', 'Số 89 Đường Tam Trinh, Phường Mai Động, Quận Hoàng Mai, Thành Phố Hà Nội', 'images/library/NCC17(1).jpg', 'Chuyên cung cấp thiết bị mạng', 'Đang hoạt động'),
(21, 23, 'Nguyễn Kim', '135 Đ. Trần Phú, P. Văn Quán, Hà Đông, Hà Nội', 'images/library/NCC18(1).jpg', 'Chuyên cung cấp thiết bị văn phòng', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `sltk` int(11) NOT NULL,
  `sldb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `menu_id`, `name`, `image`, `price`, `content`, `created_time`, `last_updated`, `sltk`, `sldb`) VALUES
(9, 1, 'PC CORE I5 14600K / RAM 32G DDR5 / RTX 3060 12G', 'images/library/pc1(1).jpg', 26690000, '- CPU Intel Core i5 14600K <br>\r\n- Mainboard ASROCK B760M PG RIPTIDE D5<br>\r\n- RAM ADATA XPG Lancer Kit 32GB (2x16GB) DDR5 RGB 6000MHz<br>\r\n- Card đồ họa INNO3D GEFORCE RTX 3060 TWIN X2 12GB<br>\r\n- Nguồn Sharkoon SHP 700W 80 Plus Bzonze<br>\r\n- Vỏ case MIK BARBATOS M BLACK (M-ATX)<br>\r\n- Tản nhiệt nước ASUS TUF LC 240 II ARGB<br>\r\n- Fan Case Asus TUF GAMING TF120 ARGB 3IN1 ( Bộ 3 fan 12cm có Hub)', 1639664576, 1734940644, 100, 17),
(10, 1, 'PC GAMING CORE I5 12400F / RAM 16G RGB / VGA RTX 3050 6G', 'images/library/pc2(1).jpg', 12500000, '  - CPU Intel Core i5-12400F <br>\r\n- Mainboard ASUS Prime B760M-K D4<br>\r\n- RAM Adata XPG D35G 16GB (2x8GB) DDR4 3200Mhz RGB Black<br>\r\n- SSD KIOXIA 500GB EXCERIA G2 NVMe<br>\r\n- Card màn hình ASUS DUAL RTX 3050 OC 6GB<br>\r\n- Nguồn MIK SPOWER C650B - 650W Bronze<br>\r\n- Vỏ case MIK MORAX 3FA BLACK (Sẵn 3 Fan ARGB)', 1639664817, 1734940485, 92, 16),
(11, 1, 'PC GAMING I5 12400F / RAM 16G / VGA RTX 3050 6G', 'images/library/pc3(1).jpg', 12990000, '- CPU Intel Core i5-12400F<br>\r\n- Mainboard Biostar H610MHP<br>\r\n- RAM OCPC 16GB DDR4 3200MHz Tản Nhiệt<br>\r\n- SSD Kioxia NVMe 500GB EXCERIA G2<br>\r\n- Card đồ họa GALAX / INNO3D GEFORCE RTX 3050 6GB 2 FAN GDDR6<br>\r\n- Nguồn Antec Zen 500-Non Modular 500w<br>\r\n- Vỏ case MIK AETHER BLACK<br>\r\n- Tản nhiệt CPU Xigmatek EPIX 1264 - Đen RGB ', 1639670794, 1734941053, 50, 5),
(16, 1, 'PC MEOW (I5 13500 / RAM 16G DDR5 / VGA RTX 4060 8G)', 'images/library/pc6(1).jpg', 26500000, ' - CPU Intel Core I5-13500<br>\r\n- Mainboard Colorfire B760M-MEOW D5<br>\r\n- RAM 16GB DDR5 bus 5200MHz<br>\r\n- Ổ cứng SSD MSI M450 500G M2 PCI Gen 4<br>\r\n- Card Màn Hình Colorfire GeForce RTX 4060 MEOW-ORG 8GB-V<br>\r\n- Nguồn máy tính Sharkoon 700W Bronze<br>\r\n- Vỏ Case Segotep Memphis-S MEOW-L<br>\r\n- Tản Nhiệt Segotep BeIced II 240 ARGB MEOW Orange', 1639739961, 1734942013, 45, 6),
(17, 1, 'PC CORE I7 13700K / RAM 32G DDR5 / RTX 4070 SUPER ULTRA WHITE 12G', 'images/library/pc5(1).jpg', 37940000, '  - CPU Intel Core i7 13700K <br>\r\n- Mainboard Asus PRIME Z790M PLUS CSM DDR5<br>\r\n- RAM V-Color 32GB (2x16GB) DDR5 6000MHz Manta XPrism White<br>\r\n- SSD Kingston NV2 500GB<br>\r\n- Card màn hình Colorful iGame GeForce RTX 4070 SUPER Ultra W OC 12GB-V<br>\r\n- Nguồn Sharkoon SHP 700W 80 Plus Bzonze<br>\r\n- Vỏ case Xigmatek Cubi M Arctic EN42782<br>\r\n- Tản nhiệt nước AIO Gamdias AURA GL360 v2 ARGB WHITE<br>\r\n- FAN TẢN NHIỆT VÔ CỰC JUNGLE LEOPARD PRISM 4RS ARGB (120MM | MÀU TRẮNG THỔI RA VÀ HÚT VÀO)<br>', 1639745767, 1734941720, 40, 8),
(18, 1, 'PC GAMING I5 12400F / RAM 16G / VGA 3060 12G', 'images/library/pc4(1).jpg', 15990000, '- CPU Intel Core i5-12400F<br>\r\n- Mainboard MSI Pro H610M-E DDR4<br>\r\n- RAM 16GB DDR4 3200MHz Tản Nhiệt<br>\r\n- SSD KIOXIA 500GB EXCERIA G2 NVMe<br>\r\n- Card đồ họa INNO3D GEFORCE RTX 3060 TWIN X2 12GB<br>\r\n- Nguồn MIK SPOWER C650B - 650W Bronze<br>\r\n- Vỏ case XIGMATEK PANO M NANO ARTIC 3GF<br>\r\n- Tản nhiệt CPU Xigmatek EPIX 1264 - Đen', 1639748930, 1734941400, 50, 9),
(19, 1, 'PC Xgear MAGNUM I5-12600K 16GB RTX 3070 256GB Nvme SSD', 'images/library/xgear1.jpg', 30990000, ' <p><span style=\"font-family:roboto,sans-serif; font-size:14px\">- CPU: Intel Core i3-8100 ( 3.60 GHz / 6MB / 4 nhân, 4 luồng ) không cảm ứng</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- RAM: 1 x 4GB DDR4 2400MHz</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Đồ họa: Intel UHD Graphics 630</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Lưu trữ: 1TB HDD 7200RPM</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Tặng kèm chuột và bàn phím</span></p>\r\n', 1639749133, 1734941977, 13, 7),
(20, 2, 'Màn Hình Viewsonic VA2436-H (23.8inch, FHD, IPS, 100Hz, 1ms)', 'images/library/mh4(1).jpg', 2150000, '- Loại sản phẩm: Màn hình máy tính<br>\r\n- Kích thước: 23 inch<br>\r\n- Độ phân giải: FHD 1920 x 1080<br>\r\n- Tấm nền: IPS<br>\r\n- Tần số quét: 100Hz<br>\r\n- Thời gian phản hồi: 1ms<br>\r\n- Tỉ lệ tương phản: 1300:1<br>\r\n- Độ sáng: 250cd/m2<br>\r\n- VESA: 100x100mm<br>\r\n- Cổng kết nối: HDMI, VGA', 1639749382, 1734950986, 40, 7),
(21, 2, 'Màn Hình LG 25MS500 (24.5 inch | FHD | IPS | 100Hz | 5ms)', 'images/library/mh8(1).jpg', 2530000, '- Kích thước: 24.5 inch\r\n- Độ phân giải: FHD 1920 x 1080\r\n- Tấm nền: IPS\r\n- Tần số quét: 100Hz\r\n- Thời gian phản hồi: 5ms\r\n- Độ sáng: 250 nits\r\n- Tỉ lệ tương phản: 1000:1\r\n- Tương thích VESA: 75x75mm\r\n- Cổng kết nối: HDMI 1.4 x2', 1639749501, 1734951686, 42, 1),
(22, 2, 'Màn Hình ViewSonic VX2528', 'images/library/mh2(1).jpg', 3190000, '- Kiểu dáng màn hình: Phẳng<br>\r\n- Tỉ lệ khung hình: 16:9<br>\r\n- Kích thước mặc định: 24.5 inch<br>\r\n- Công nghệ tấm nền: IPS<br>\r\n- Phân giải điểm ảnh: FHD - 1920 x 1080<br>\r\n- Độ sáng hiển thị: 250 cd/m² (typ)<br>\r\n- Tần số quét màn: 180Hz<br>\r\n- Thời gian đáp ứng: 0.5ms MPRT', 1639749621, 1734945246, 32, 8),
(23, 2, 'Màn hình TUF Gaming VG249Q3A (24 inch/ Full HD/ 180Hz/ FreeSync/ 1ms GTG)', 'images/library/mh6(1).jpg', 3050000, '- Tấm nền: IPS<br>\r\n- Màu hiển thị : 16,7M<br>\r\n- Độ phân giải : 1920x1080<br>\r\n- Model: TUF Gaming VG249Q3A<br>\r\n- Âm thanh: Loa (2Wx2)', 1639749753, 1734951366, 33, 7),
(24, 2, 'Màn hình ASROCK CL27FF (27 inch | FHD | IPS | 100Hz | 1ms)', 'images/library/mh7(1).jpg', 2690000, '- Kích thước: 27 inch<br>\r\n- Độ phân giải: FHD 1920 x 1080<br>\r\n- Tấm nền: IPS<br>\r\n- Tần số quét: 100Hz<br>\r\n- Thời gian phản hồi: 1ms<br>\r\n- Độ sáng: 300 nits<br>\r\n- Tỉ lệ tương phản: 1000:1<br>\r\n- VESA: 100x100mm<br>\r\n- Cổng kết nối: HDMI, VGA', 1639749848, 1734951531, 32, 5),
(25, 2, 'Màn Hình ASUS VY249HF -R (23.8 inch - IPS - FHD - 100Hz - 1ms)', 'images/library/mh1(1).jpg', 2270000, '- Kiểu dáng màn hình: Phẳng<br>\r\n- Tỉ lệ khung hình: 16:9<br>\r\n- Kích thước mặc định: 23.8 inch<br>\r\n- Công nghệ tấm nền: IPS<br>\r\n- Phân giải điểm ảnh: FHD - 1920 x 1080<br>\r\n- Tần số quét màn: 100Hz<br>\r\n- Thời gian đáp ứng: 1ms (MPRT)', 1639749903, 1734945061, 29, 11),
(26, 2, 'Màn hình VSP IP2706SG (27inch | Full HD | IPS | 100Hz | 1ms)', 'images/library/mh5(1).jpg', 2590000, '- Thương hiệu: VSP<br>\r\n- Mã sản phẩm: IP2706SG<br>\r\n- Kích thước: 27 inch IPS<br>\r\n- Độ phân giải: FHD 1,920 x 1,080<br>\r\n- Tần số quét: Max 100Hz 1ms (MPRT)<br>\r\n- Cổng xuất hình: VGA, HDMI<br>', 1639749953, 1734951179, 30, 6),
(27, 2, 'Màn hình LCD ACER ED273', 'images/library/manhinh27.jpg', 5290000, '<p><span style=\"font-family:roboto,sans-serif; font-size:14px\">- K&iacute;ch thước: 27&quot;</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Độ ph&acirc;n giải: 1920 x 1080 ( 16:9 )</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- C&ocirc;ng ngh&ecirc;̣ t&acirc;́m n&ecirc;̀n: VA</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Góc nhìn: 178 (H) / 178 (V)</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- T&acirc;̀n s&ocirc;́ quét: 75Hz</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Thời gian phản h&ocirc;̀i: 4 ms</span></p>\r\n', 1639750067, 1639750067, 33, 3),
(28, 2, 'Màn hình LCD MSI Optix AG32CV', 'images/library/msi1.jpg', 7800000, '<p><span style=\"font-family:roboto,sans-serif; font-size:14px\">- K&iacute;ch thước: 31.5&quot; (1920 x 1080), Tỷ lệ 16:9</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Tấm nền VA, G&oacute;c nh&igrave;n: 178 (H) / 178 (V)</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Tần số qu&eacute;t: 165Hz , Thời gian phản hồi 1 ms</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- HIển thị m&agrave;u sắc: 16.7 triệu m&agrave;u</span><br />\r\n<span style=\"font-family:roboto,sans-serif; font-size:14px\">- Cổng h&igrave;nh ảnh: 1 x DisplayPort 1.2, 1 x HDMI 2.0, 1 x DVI</span></p>\r\n', 1639750148, 1639750148, 22, 2),
(113, 18, 'Laptop Gaming Gigabyte G5 MF F2PH333SH', 'images/library/lap1(1).jpg', 19490000, '- CPU: Intel Core i5-12450H 3.3GHz up to 4.4GHz, 8 Cores 12 Threads, 12MB Cache<br>\r\n- VGA: Nvidia Geforce RTX 4050 6GB GDDR6<br>\r\n- Ram: 8GB (1x8GB) DDR4-3200Mhz<br>\r\n- SSD: 512GB SSD M.2 PCIE G4X4<br>\r\n- Màn hình: 15.6 inch IPS 144Hz FHD', 1734942707, 1734942707, 48, 2),
(114, 18, 'Laptop Gigabyte G6 MF-H2VN854KH', 'images/library/lap2(1).jpg', 25490000, '- CPU: Intel® Core™ i7-13620H (2.40GHz up to 4.90GHz, 24MB Cache)<br>\r\n- Ram: 16GB(2x8GB) DDR5 4800MHz (2 slots, up to 64GB)<br>\r\n- Ổ cứng: 1TB NVMe M.2 PCIe Gen 4 x 4 SSD<br>\r\n- VGA: NVIDIA® GeForce RTX™ 4050 6GB GDDR6<br>\r\n- Display: 16.0inch FHD+ (1920x1200) 165Hz, 100%sRGB<br>\r\n- Pin: 54WHrs<br>\r\n- Weight: 2.30 kg<br>\r\n- Color: Black (Đen)<br>\r\n- OS: Windows 11 Home bản quyền<br>', 1734943012, 1734943012, 34, 1),
(115, 18, 'Laptop HP Gaming Victus 15-fb2063dx', 'images/library/lap3(1).jpg', 14800000, '- CPU: AMD RYZEN 5 7535HS<br>\r\n- RAM: 8GB DDR5-4800MHz<br>\r\n- Ổ cứng: SSD 512GB<br>\r\n- Màn hình: 15.6-inch, FHD (1920 x 1080), 144 Hz, IPS<br>\r\n- Card đồ họa: AMD Radeon RX 6550M 4G', 1734943262, 1734943262, 35, 0),
(116, 18, 'Laptop Dell Gaming G15 5525', 'images/library/lap4(1).jpg', 17950000, '- CPU: AMD Ryzen™5 6600H 6-Cores Processor (19M Cache, up to 4.5 GHz)<br>\r\n- Màn hình: 15.6 inch 1920 x 1080 (Full HD)<br>\r\n- RAM: 8GB DDR5 4800 MHz<br>\r\n- Đồ họa: NVIDIA® GeForce RTX™ 3050, 4GB GDDR6<br>\r\n- Ổ cứng: 512 GB PCIe® NVMe™ M.2 SSD<br>', 1734943774, 1734943774, 34, 1),
(117, 18, 'Laptop HP OMEN 16-k0033dx 16.1″QHD 165hz', 'images/library/lap5(1).jpg', 27990000, '- CPU: Intel® Core™ i9-12900H 12th Generation<br>\r\n- RAM: 16 GBDDR5-4800 MHz RAM (2 x 8 GB)<br>\r\n- Ổ cứng: 1 TB PCIe® Gen4 NVMe™ M.2 SSD<br>\r\n- Màn hình: 16.1-inch diagonal, QHD (2560 x 1440), 165 Hz, 3 ms response time, IPS<br>\r\n- Card đồ họa: NVIDIA® GeForce RTX™ 3060 Laptop GPU (6 GB GDDR6 dedicated)<br>', 1734943962, 1734943962, 35, 0),
(118, 18, 'LAPTOP ACER ASPIRE 5 A515', 'images/library/lap6(1).jpg', 7990000, '- CPU: Intel Core i3 1115G4<br>\r\n- RAM: 4GB<br>\r\n- Ổ cứng: 128GB SSD<br>\r\n- VGA: Onboard<br>\r\n- Màn hình: 15.6 inch FHD<br>', 1734944159, 1734944159, 35, 0),
(119, 18, 'Laptop Asus Zenbook 14 Q410VA', 'images/library/lap7(1).jpg', 15800000, ' - Model: Q410VA<br>\r\n- CPU: Intel Core i5-13500H (12 cores x 16 threads, up to 4.7GHz, 18MB cache)<br>\r\n- RAM: 8GB LPDDR5 4800MHz<br>\r\n- Ổ cứng: 512GB PCIe® SSD<br>\r\n- Card đồ họa: Intel Iris Xe Graphics<br>\r\n- Màn hình: 14.5inch 120Hz 2.8K (2880x1800) OLED HDR', 1734944290, 1734951901, 45, 0),
(120, 18, 'Laptop Lenovo LOQ', 'images/library/lap8(1).jpg', 18800000, '- Loại sản phẩm: LAPTOP GAMING<br>\r\n- Thương hiệu: Lenovo<br>\r\n- Model: 82XV002LUS<br>\r\n- SSD: 1TB<br>\r\n- RAM: 8GB DDR5 5600Hz/ 2 khe RAM<br>\r\n- Tên sản phẩm: Laptop Lenovo LOQ<br>\r\nLoại màn hình: IPS\r\n- Độ phân giải màn hình: 1920 x 1080 (HD đầy đủ)<br>\r\n- Màn hình cảm ứng: Không<br>\r\n- Tốc độ làm mới: 144Hz<br>\r\n- Độ sáng: 350 nit<br>\r\n- Mẫu bộ xử lý: Intel Core i5 thế hệ thứ 13<br>\r\n- Tần số xung nhịp cơ sở CPU: 3,4 GHz', 1734944475, 1734944475, 45, 0),
(121, 18, 'Laptop Lenovo Ideapad Gaming 3', 'images/library/lap9(1).jpg', 14800000, '- CPU: AMD Ryzen 5-7535HS (3.30GHz up to 4.55GHz, 16MB Cache)<br>\r\n- RAM: 8GB DDR5 4800MHz (Có khả năng nâng cấp Ram)<br>\r\n- VGA: NVIDIA GeForce RTX 2050 4GB GDDR6<br>\r\n- Display: 15.6inch FHD (1920x1080) IPS 250nits Anti-glare, 45% NTSC, 120Hz, FreeSync™<br>\r\n- Pin: 60Wh<br>\r\n- Weight: 2.32 kg<br>\r\n- Tính năng: Bàn phím Led trắng<br>\r\n- Color: Onyx Grey<br>\r\n- OS: Windows 11 bản quyền<br>', 1734944734, 1734944734, 45, 0),
(122, 18, 'Laptop Gaming GIGABYTE G5 KF5-53VN353SH', 'images/library/lap10(1).jpg', 25400000, '- Loại sản phẩm: LAPTOP Máy Tính<br>\r\n- Model: KF5-53VN353SH<br>\r\n- Tên sản phẩm: Laptop Gaming GIGABYTE G5 KF5-53VN353SH<br>\r\n- CPU: Intel Core i5-13500H (Up to 4.7 GHz) 12 Cores 16 Threads<br>\r\n- Card đồ họa: NVIDIA GeForce RTX 4060 8GB GDDR6<br>\r\n- Memory: 16GB (2x8GB) DDR5 4800MHz', 1734944848, 1734944848, 45, 0),
(123, 2, 'Màn Hình VSP IP2407SG /IPS/ 24 Inch/ FHD/ 1ms/ 100Hz', 'images/library/mh3(1).jpg', 1990000, '- Màu sắc: Black<br>\r\n- Kích cỡ màn hình: 23.8\"<br>\r\n- Tỉ lệ khung hình: 16:9<br>\r\n- Tốc độ phản hồi: 1ms (OD)<br>\r\n- Màu sắc hỗ trợ: 6500K<br>\r\n- Màu sắc hiển thị: 16.7M<br>', 1734950787, 1734950787, 45, 0),
(124, 1, 'PC NC GAMING 04 (i5 12400F /RAM 16GB/ VGA RTX 12GB)', 'images/library/pc7(1).jpg', 19500000, ' - CPU Intel Core i5-12400F (Upto 4.4Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700)<br>\r\n- Mainboard ASROCK B660M STEEL LEGEND<br>\r\n- RAM ADATA 16GB ( 2x 8 ) DDR4U-DIMM3200 Spectrix D50 - Trắng<br>\r\n- Ổ cứng SSD Kingston NV2 500GB PCIe 4.0 x4 NVMe M.2 (SNV2S/500G)<br>\r\n- Vỏ case MIK LV12 MINI ELITE- WHITE<br>\r\n- Bộ tản nhiệt nước ID-Cooling ZoomFlow 240-XT SNOW', 1734952086, 1734952086, 45, 0),
(125, 1, 'PC GAMING (i5-12400F| Ram 16G| SSD 500GB| VGA RTX 3050 8G)', 'images/library/pc8(1).jpg', 15390000, '- CPU Intel I2 12400F<br>\r\n- Mainboard ASRock B760M PG Lightning/D4 DDR4<br>\r\n- RAM Adata XPG Spectrix D41 RGB Grey 16G (2 x8GB) 3200Mhz DDR4<br>\r\n- Ổ cứng SSD AGI AI298 512G NVME PCIE 2280 GEN3x4<br>\r\n- VGA OCPC RTX 2070 Super 8G', 1734952223, 1734952223, 45, 0),
(126, 19, 'Ổ cứng SSD PNY CS1031 256GB NVMe M.2 2280 PCIe Gen 3.0 x4 (M280CS1031-256-CL)', 'images/library/lt1(1).jpg', 650000, '- Hãng sản xuất: PNY <br>\r\n- Model: M280CS1031-256-CL<br>\r\n- Dung lượng: 256GB<br>\r\n- Tốc đọc đọc: 1700 MB/s<br>\r\n- Tốc độ ghi: 1100 MB/s<br>\r\n- Kích thước: 22x80mm<br>\r\n- Chuẩn: PCIe Gen 3×4 NVMe', 1734952560, 1734952560, 30, 0),
(127, 19, 'Ổ cứng SSD Lexar NQ790 1TB M.2 2280 PCIe 4×4 (Đọc 7000MB/s – Ghi 6000MB/s) – (LNQ790X001T-RNNNG)', 'images/library/lt2(1).jpg', 2150000, 'Dung lượng: 1TB<br>\r\nForm Factor: M.2 2280<br>\r\nGiao thức: PCIe Gen4x4<br>\r\nTốc độ đọc/ghi: 7000MB/s - 6000MB/s', 1734952680, 1734952680, 30, 0),
(128, 19, 'Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4', 'images/library/lt3(1).jpg', 890000, 'Dạng: M.2<br>\r\nGiao diện: NVMe PCIe Gen3*4<br>\r\nTính năng: TRIM, ECC, SMART<br>\r\nDung lượng: 512GB<br>\r\nNhiệt độ lưu trữ: -40°C ~ 85°C<br>\r\nTốc độ đọc tuần tự tối đa: 3100 MB/s<br>\r\nTốc độ ghi tuần tự tối đa: 2100 MB/s', 1734952750, 1734952750, 30, 0),
(129, 19, 'Ổ cứng SSD Kingston SNV3S 1TB NVME M.2 2280 PCIE GEN 4X4 (SNV3S/1000G)', 'images/library/lt4(1).jpg', 1800000, 'Kích thước: M.2 2280<br>\r\nGiao diện: PCIe 4.0 x4 NVMe<br>\r\nDung lượng: 1000GB<br>\r\nĐọc tối đa: 6000 MB/giây<br>\r\nGhi tối đa: 4000 MB/giây', 1734952811, 1734952811, 35, 0),
(130, 19, 'Ổ cứng SSD Kingston KC3000 512GB NVMe M.2 2280 PCIe Gen 4x4 (Đọc 7000MB/s, Ghi 3900MB/s)-(SKC3000S/512G)', 'images/library/lt5(1).jpg', 1650000, 'Ổ cứng tốc độ cao chuẩn NVME PCIe Gen 4<br>\r\nTốc độ đọc: 7000Mb/s<br>\r\nTốc độ ghi: 3900Mb/s<br>\r\nDung lượng: 512GB', 1734952888, 1734952888, 35, 0),
(131, 19, 'Ổ cứng SSD NVMe KIOXIA 500GB EXCERIA G2 NVMe R2100 W1700 wRAM (LRC20Z500GG8)', 'images/library/lt6(1).jpg', 990000, 'Model: LRC20Z500GG8<br>\r\nDung lượng: 500GB<br>\r\nGiao diện: PCIe® Gen3 x4<br>\r\nYếu tố hình thức: M.2 Loại 2280-S2-M<br>\r\nKích thước (Tối đa: LxWxH): 80,15 x 22,15 x 2,23 mm<br>\r\nTốc độ đọc: 2.100 MB/s<br>\r\nTốc độ ghi: 1.700 MB/s', 1734952990, 1734952990, 35, 0),
(132, 20, 'Tản nhiệt nước COUGAR AQUA ARGB 360', 'images/library/tn1(1).jpg', 1590000, 'Hiệu ứng ánh sáng ARGB sống động, đồng bộ với các linh kiện khác.<br>\r\nBa quạt VA120 mạnh mẽ, tốc độ 2000 RPM, hỗ trợ PWM.<br>\r\nBlock nước hoạt động êm, bơm tốc độ 3200 RPM.<br>\r\nTương thích đa dạng với socket CPU Intel và AMD.<br>\r\nRadiator nhôm kích thước 394x120x27 mm, ống dẫn bọc cao su.<br>', 1734953154, 1734953154, 40, 0),
(133, 20, 'Tản nhiệt khí ID-Cooling FROZN A620 Pro SE', 'images/library/tn2(1).jpg', 790000, 'Intel: LGA1851/1700/1200/1151/1150/1155/1156 <br>\r\nAMD: AM5/AM4<br>\r\nTDP: 260W<br>\r\nOverall Dimension: 120×142×157mm (L×W×H)', 1734953218, 1734953218, 32, 0),
(134, 20, 'Tản Nhiệt Khí ID-COOLING SE-214-XT RGB', 'images/library/tn3(1).jpg', 380000, '- Hỗ trợ full socket các dòng CPU của Intel (bao gồm intel 12 socket 1700) và AMD<br>\r\n- TDP vượt trội trong phân khúc nhỏ gọn: 180W<br>\r\n- Fan led RGB tự động chuyển màu ( không chỉnh được màu) và điều tốc theo nhiệt độ<br>\r\n- Không cấn ram với tất cả bo mạch chủ<br>\r\n- 4 ống đồng mạ niken chống oxy hóa, có top cover thiết kế phay xước chắc chắn', 1734953302, 1734953302, 35, 0),
(135, 20, 'Tản nhiệt khí ID-Cooling FROZN A720 Black', 'images/library/tn4(1).jpg', 1390000, 'Intel: LGA20XX/1700/1200/1151/1150/1155/1156<br>\r\nAMD: AM5/AM4<br>\r\nTDP: 300W<br>\r\nOverall Dimension: 140×153×163mm (L×W×H)', 1734953409, 1734953409, 35, 0),
(136, 20, 'TẢN NHIỆT VÔ CỰC JUNGLE LEOPARD PRISM 4RS ARGB (120MM | MÀU TRẮNG THỔI RA)', 'images/library/tn5(1).jpg', 150000, ' Loại màu trắng thổi ra<br>\r\nSize: 120 x 120 x 25 mm<br>\r\nFan speed: 800-1800 (±10% RPM)<br>\r\nLED color: ARGB<br>\r\nRated voltage: 12VDC<br>\r\nRated current: 0.25A<br>\r\nInterface: 4Pin + 5V 3Pin<br>\r\nMaximum volume: 58.36CFM<br>\r\nMaximum noise: 29dBA', 1734953485, 1734953643, 35, 0),
(137, 20, 'Tản Nhiệt Khí Infinity Dark Chroma V2 Pink', 'images/library/tn6(1).jpg', 300000, 'Loại sản phẩm: Tản nhiệt khí<br>\r\nSocket Intel : LGA 775 /LGA115X/ LGA1700<br>\r\nSocket AMD: FM2/ FM1/ AM3+/ AM3/ AM2/ AM2+ /AM4 / 940 /939 /754<br>\r\nKích thước 120*75*154mm<br>\r\nTốc độ quạt: 1600 RPM ± 10%<br>\r\nKết nối: 3pin<br>\r\nĐiện áp: 0.4A<br>\r\nĐộ ồn: 19-32 dBA<br>\r\nLuồng gió: 50CFM ± 10%<br>\r\nĐiện năng tiêu thụ: 150W ', 1734953615, 1734953615, 30, 0),
(138, 20, 'Tản nhiệt nước Corsair iCUE LINK H150i Liquid RGB (CW-9061003-WW)', 'images/library/tn7(1).jpg', 5860000, 'Model: CW-9061003-WW<br>\r\nHỗ trợ Socket: Intel 1700, Intel 1200, Intel 1150, Intel 1151, Intel 1155, Intel 1156, AMD AM5, AMD AM4<br>\r\nTốc độ quạt: 480 - 2400RPM ±10%<br>\r\nLuồng gió của quạt: 16,44 - 63,1 CFM<br>\r\nÁp suất tĩnh của quạt: 0,17 - 3,8mm-H2O<br>\r\nCân nặng: 2.654kg', 1734953784, 1734953784, 34, 0),
(139, 21, 'Bàn Phím Giả Cơ E-DRA EK506 (USB/ Led)', 'images/library/bp1(1).jpg', 160000, 'Giao diện: USB 2.0;<br>\r\nSố lượng phím: 104<br>\r\nCáp bàn phím dài: 1.3M<br>\r\nKích thước: 444*139*30mm<br>\r\nCân nặng: 530+10g<br>\r\nTương thích hệ điều hành: Windows<br>\r\nMàu sắc: màu đen', 1734954005, 1734954005, 30, 0),
(140, 21, 'Bàn phím cơ DareU EK87 V2 Gray Black PBT Dream switch', 'images/library/bp2(1).jpg', 540000, 'Phiên bản nâng cấp switch DareU Dream cao cấp<br>\r\nNâng cấp Keycap PBT Double shot siêu bền<br>\r\nLED Rainbow chia theo hàng<br>\r\n2 dải led bên hông RGB đổi màu siêu đẹp', 1734954072, 1734954072, 30, 0),
(141, 21, 'Bàn phím cơ Wireless Darmoshark TOP 75 RGB Black-Green', 'images/library/bp3(1).jpg', 2190000, 'Tên sản phẩm: Darmoshark TOP 75 Black-Green<br>\r\nChế độ kết nối: Không dây (Bluetooth/ 2.4Ghz) & Có dây<br>\r\nLayout: 81 phím - có màn hình & núm xoay<br>\r\nKepcaps Hai tông màu PBT OEM Profile<br>\r\nSwitch: TTC Shark<br>\r\nĐèn Led: RGB<br>\r\nPin 4000 mAh', 1734954140, 1734954140, 35, 0),
(142, 21, 'Bàn Phím Cơ Darmoshark K8 Mechanical Keyboard', 'images/library/bp4(1).jpg', 1750000, 'Model: K8<br>\r\nSố phím: 81<br>\r\nMàu sắc: White - Grey<br>\r\nLoại switch: Gateron EF<br>\r\nChất liệu keycap: PBT Dye-sub keycap<br>', 1734954214, 1734954214, 40, 0),
(143, 21, 'Bàn Phím Cơ ASUS TUF Gaming K3 Gen II - Red swtich', 'images/library/bp5(1).jpg', 1480000, 'Nhà Sản Xuất : Asus<br>\r\nTình Trạng : Mới<br>\r\nBảo Hành : 24 tháng<br>\r\nSwitch: Optical-Mechanical RGB Switch', 1734954277, 1734954277, 40, 0),
(144, 21, 'Chuột máy tính E-DRA EM606', 'images/library/c1(1).jpg', 90000, 'Kết Nối: USB 2.0<br>\r\nĐộ phân giải: 1000 DPI<br>\r\nSwitch: 5M clicks<br>\r\nĐộ dài dây: 1,5m', 1734954361, 1734954361, 40, 0),
(145, 21, 'Chuột ASUS TUF Gaming M3 thế hệ II', 'images/library/c2(1).jpg', 400000, 'Công tắc phím: 60 triệu<br>\r\nkết nối: USB 2.0 (TypeC đến TypeA)<br>\r\nTốc độ tối đa: 200<br>\r\nMax Acceleration: 30g<br>\r\nUSB Report rate: 1000 Hz<br>\r\nL/R Switch Type: 60 triệu', 1734954421, 1734954421, 50, 0),
(146, 21, 'CHUỘT GAMING KHÔNG DÂY ASUS ROG CHAKRAM X ORIGIN (90MP02N1-BMUA00)', 'images/library/c3(1).jpg', 3250000, 'Cảm biến quang học: (DPI/CPI)100 ~ 36.000 DPI<br>\r\nIPS: 650 IPS<br>\r\nSwitch: Push-Fit II<br>\r\nMàu sắc vỏ: màu bạc và đèn mờ<br>', 1734954485, 1734954485, 30, 0),
(147, 21, 'Chuột máy tính Logitech PRO X SUPERLIGHT 2 White', 'images/library/c4(1).jpg', 3250000, 'Cảm biến: HERO 2<br>\r\nĐộ phân giải: 100 – 32.000 dpi<br>\r\nTăng tốc tối đa: >40 G<br>\r\nTốc độ tối đa: >500 ips<br>\r\nChuyển động liên tục: 95 giờ<br>\r\nBộ vi xử lý: 32-bit ARM', 1734954546, 1734954546, 30, 0),
(148, 22, 'Bộ phát wifi TP-Link Archer C64', 'images/library/m1(1).jpg', 690000, ' ốc độ WIFI WiFi Wave2 802.11ac– 867 Mbps trên băng tần 5 GHz và 400 Mbps trên băng tần 2.4 GHz<br>\r\nAngten 4 Ăng-ten<br>\r\nCổng giao tiếp 1 x Cổng WAN Gigabit/ 4 x Cổng LAN Gigabit<br>\r\nMô tả khác Kết Nối Thông Minh – Kết nối thông minh hướng máy khách đến băng tần ít tắc nghẽn hơn và Airtime Fairness tối ưu hóa việc sử dụng thời gian', 1734954780, 1734954780, 40, 0),
(149, 22, 'Bộ phát wifi 6 TP-Link Archer AX55 AX3000Mbps', 'images/library/m2(1).jpg', 1490000, 'Tốc độ Wi-Fi 6 Gigabit thế hệ tiếp theo — 2402 Mb/giây trên băng tần 5 GHz và 574 Mb/giây trên băng tần 2.4 GHz giúp phát trực tuyến mượt mà hơn và tải xuống nhanh hơn.', 1734954872, 1734954872, 40, 0),
(150, 22, 'USB thu sóng Wifi Asus USB-AC53 Nano chuẩn AC - Tốc độ 1200Mbps', 'images/library/m3(1).png', 300000, 'Thiết bị thu Wi-Fi MU-MIMO dạng USB nhỏ nhất thế giới<br>\r\nChuẩn AC 1200Mbps<br>\r\nKích thước nhỏ gọn để bạn có thể kết nối Wi-Fi<br>\r\nNâng cấp Wi-Fi tức thời cho máy tính xách tay và PC<br>\r\nTận hưởng tốc độ Wi-Fi 802.11ac.<br>\r\nHoàn hảo để chơi game và phát trực tuyến', 1734954958, 1734954958, 40, 0),
(151, 22, 'Card mạng không dây USB TP-Link Archer TX20U Plus AX1800', 'images/library/m4(1).jpg', 790000, 'Tốc Độ Wi-Fi 6 Siêu Nhanh – Truyền phát video hoàn hảo với tốc độ không dây 1800 Mbps (1201 Mbps trên 5 GHz + 574 Mbps trên 2.4 GHz)<br>\r\nWi-Fi Băng Tần Kép Linh Hoạt – Đảm bảo PC bạn luôn có kết nối tốt nhất với băng tần 5 GHz và 2.4 GHz<br>\r\nĂng Ten Kép Độ Lợi Cao – Kết nối từ xa hơn với tín hiệu và đường truyền chất lượng cao<br>\r\nMU-MIMO – Duy trì tốc độ cao khi tải xuống và tải lên ngay cả khi các thiết bị khác tiêu tốn nhiều băng thông của bạn <br>\r\nOFDMA – Giảm độ trễ của bạn cho cuộc họp hội nghị và chơi game hoàn hảo trên các mạng đông đúc<br>\r\nCổng USB 3.0 Tốc Độ Nhanh – Nhanh hơn gấp 10 lần so với USB 2.0<br>\r\nBảo Mật Tinh Chỉnh –Bảo vệ dữ liệu cá nhân của bạn bằng mã hóa WPA3 mới nhất', 1734955065, 1734955065, 40, 0),
(152, 22, 'Bộ Phát Wifi TP-Link Archer BE230 Wi-Fi 7 Băng Tần Kép BE3600', 'images/library/m5(1).jpg', 2490000, 'Băng tần hỗ trợ: 2.4 GHz / 5 GHz<br>\r\nChuẩn kết nối: 802.11be<br>\r\nTốc độ 2.4GHz:688Mbps<br>\r\nTốc độ 5.0GHz:2882Mbps<br>\r\nĂng ten: 4x ngoài', 1734955126, 1734955126, 40, 0),
(153, 23, 'CÁP CHUYỂN ĐỔI DVI 24+1 TO HDMI UGREEN 20118', 'images/library/vp(1).jpg', 99000, ' Cáp chuyển đổi cao cấp của hãng Ugreen với 1 đầu HDMI Female và 1 đầu DVI 24+1 DVI-D Male<br>\r\nHoàn toàn tương thích với tất cả các định dạng HDTV. Hỗ trợ độ phân giải lên đến 1080p<br>\r\nThiết kế chắc chắn, đầu mạ vàng chống ăn mòn mà trong khi cung cấp chuyển giao tín hiệu tối ưu không hỗ trợ truyền âm thanh đầu ra, do đó âm thanh sẽ cần phải được truyền tải qua một cáp âm thanh riêng biệt', 1734955364, 1734955401, 40, 0),
(154, 23, 'Giá Treo Màn Hình AOC AM400S Silver (17-34 Inch)', 'images/library/vp2(1).png', 830000, 'Kích thước màn hình phù hợp: 17″ -34″<br>\r\nTrọng lượng: 2-9kg<br>\r\nGiá đỡ Vesa: Tấm Vesa 75mm*75mm hoặc 100mm*100mm<br>\r\nPhạm vi nghiêng: -15° ~ +90°<br>\r\nPhạm vi xoay: -90° ~ +90°<br>\r\nXoay màn hình: 360°<br>\r\nChiều cao tối đa: 495mm<br>\r\nPhạm vi nâng: 250mm<br>\r\nMở rộng tối đa: 455mm', 1734955491, 1734955491, 40, 0),
(155, 23, 'Camera Wifi Quay Quét Full Color 3MP iMOU IPC-GS7EP-3M0WE', 'images/library/vp3(1).jpg', 1425000, 'Độ phân giải 2K, cảm biến 1/2.8” CMOS, 25/30fps@3.0M(2304 x 1296)<br>\r\nỐng kính cố định 3.6mm cho góc nhìn 82°(H), 42°(V), 100°(D)<br>\r\nHỗ trợ quay quét: ngang 0-340°, dọc 0-90°<br>\r\nChuẩn nén H.265<br>\r\nChống ngược sáng HDR<br>\r\nChế độ ban đêm thông minh với 4 chế độ sáng: Tự động, Full Color, Hồng ngoại và tắt<br>\r\nCảnh báo chủ động: bật đèn và hú còi (110dB) khi phát hiện có đối tượng xâm nhập.<br>\r\nTích hợp mic và loa, hỗ trợ đàm thoại 2 chiều', 1734955587, 1734955587, 40, 0),
(156, 23, 'Camera IP 360 Độ 3MP TIANDY TC-H332N', 'images/library/vp4(1).jpg', 300000, 'Độ phân giải: 3MP (2304 x 1296 px)<br>\r\nGóc nhìn: 360 độ<br>\r\nLưu trữ: MicroSD ≤ 512GB (lên tới 30 ngày)<br>\r\nTầm nhìn xa hồng ngoại: 20m trong tối', 1734955685, 1734955685, 45, 0),
(157, 23, 'Bộ Chuyển Đổi 9 Trong 1 Acer Travel Dock ZL.DCK11.005', 'images/library/vp5(1).jpg', 1250000, '- Đầu ra: 2xUSB-A 3.0, 1xUSB C PD, 1xHDMI, 1xVGA, 1xSD Slot, 1xMicroSD Slot, 1x Lan RJ45, 1x Audio 3.5mm<br>\r\n- Cổng C hỗ trợ sạc nhanh Power Delivery 100W(Max 20V/5A)<br>\r\n- Cổng HDMI hỗ trợ độ phân giải tối đa 4K@30Hz<br>\r\n- Cổng VGA hỗ trợ độ phân giải tối đa 1080P@60hz<br>\r\n- Tốc độ truyền tải: USB 3.0 = Max 5Gbps, SD 2.0 = Max 60Mbps, RJ45 = 1Gbps<br>\r\n- Cổng đọc thẻ nhớ hỗ trợ thẻ SD/SDHC/SDXC lên tới 2TB<br>\r\n(Có thể sử dụng được đồng thời cả 2 cổng cùng lúc)<br>\r\n- Cổng cắm audio 3.5mm tiện lợi để thưởng thức âm nhạc và đàm thoại<br>\r\n- Phần case làm bằng nhôm giúp nâng cao hiệu quả tản nhiệt và bảo vệ thiết bị.<br>\r\n- Tương thích với mọi thiết bị Windows, Mac, Android,…', 1734955780, 1734955780, 50, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rate` tinyint(1) NOT NULL,
  `review` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rate`
--

INSERT INTO `rate` (`product_id`, `user_id`, `name`, `rate`, `review`) VALUES
(10, 76, 'Đặng Phúc Hữu', 5, 'Sản phẩm tuyệt vời'),
(10, 76, 'Hàng Ngọc Hưng', 3, 'Sản phẩm tuyệt vời'),
(10, 76, 'Phúc Hữu Đặng', 5, 'Sản phẩm tuyệt vời'),
(10, 76, 'Dương Nhật  Anh', 1, 'Nhân viên đánh khách hàng'),
(10, 76, 'Đặng Phúc Hữu', 5, 'Sản phẩm tuyệt vời'),
(10, 76, 'Đặng Phúc Hữu', 1, 'Sản phẩm tuyệt vời'),
(10, 76, 'Đặng Phúc Hữu', 2, 'Sản phẩm tuyệt vời'),
(10, 76, 'Đặng Phúc Hữu', 2, 'Sản phẩm tuyệt vời'),
(10, 76, 'Đặng Phúc Hữu', 1, 'Nhân viên đánh khách hàng'),
(10, 76, 'Màn hình Dell', 2, 'Sản phẩm tuyệt vời'),
(9, 76, 'Đặng Phúc Hữu', 5, 'Sản phẩm tuyệt vời'),
(9, 76, 'Đặng Phúc Hữu', 1, 'Nhân viên đánh khách hàng'),
(9, 67, 'Hàng Ngọc Hưng', 4, 'Sản phẩm chất lượng'),
(20, 67, 'Đặng Phúc Hữu', 5, 'Sản phẩm tuyệt vời'),
(10, 76, 'Đặng Phúc Hữu', 3, 'Sản phẩm tuyệt vời'),
(10, 67, 'Đặng Phúc Hữu', 4, 'Sản phẩm có chỗ hỏng, Khách cho tiền tip nhưng nhân viên không nhận'),
(11, 85, 'Phạm Văn Hợp', 5, 'tot'),
(113, 85, 'Phạm ', 5, 'Sản phẩm chất lượng'),
(113, 85, 'Hợp Phạm', 5, 'Tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_time` int(11) DEFAULT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `username`, `password`, `sdt`, `gioitinh`, `created_time`, `last_updated`) VALUES
(67, 'Hợp Phạm', 'hh@gmail.com', 'pvh', '202cb962ac59075b964b07152d234b70', '123', 'Nữ', 1640609006, 1734836272),
(76, 'hopppp', 'h1402@gmail.com', 'h1402', 'c4ca4238a0b923820dcc509a6f75849b', '9874561', 'Nam', 1640776566, 1640776566),
(85, 'Phạm Hợp', 'pvh140202@gmail.com', 'hop', '25f9e794323b453885f5181f1b624d0b', '12121521', 'Nam', 1733711491, 1733711491),
(108, 'aa', 'a@gmail.com', 'qqq', '202cb962ac59075b964b07152d234b70', '123', 'Nữ', 1734788993, 1734788993);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_image_product` (`product_id`);

--
-- Chỉ mục cho bảng `menu_product`
--
ALTER TABLE `menu_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producer_menu` (`menu_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `image_library`
--
ALTER TABLE `image_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT cho bảng `menu_product`
--
ALTER TABLE `menu_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD CONSTRAINT `FK_image_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `FK_detail_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_product_order` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `producer`
--
ALTER TABLE `producer`
  ADD CONSTRAINT `FK_producer_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_menu_product` FOREIGN KEY (`menu_id`) REFERENCES `menu_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `FK_product_rate` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_user_rate` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
