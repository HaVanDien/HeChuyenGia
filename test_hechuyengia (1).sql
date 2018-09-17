-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 17, 2018 lúc 08:14 PM
-- Phiên bản máy phục vụ: 5.7.23-0ubuntu0.18.04.1
-- Phiên bản PHP: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test_hechuyengia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `academy`
--

CREATE TABLE `academy` (
  `id` int(11) NOT NULL,
  `nameAcademy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `academy`
--

INSERT INTO `academy` (`id`, `nameAcademy`) VALUES
(1, 'công nghệ thông tin'),
(2, 'Quản trị kinh doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `user_created` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danh_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `namecity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `namecity`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh'),
(3, 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codecity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `companyname`, `codecity`) VALUES
(1, 'APPLE', 2),
(2, 'CỔ PHẦN ĐẦU TƯ 379', 2),
(3, 'NORTH INFORMATION TECHNOLOGIES', 1),
(4, 'TNHH PHẦN MỀM FPT', 1),
(5, 'TNHH MINGU VIỆT NAM', 3),
(6, 'TNHH MST VIỆT NAM', 2),
(7, 'TNHH ĐẦU TƯ NAM THUẬN', 2),
(8, 'TNHH POUTUEN VIỆT NAM', 1),
(9, 'TNHH MÁY QUANG MINH', 3),
(10, 'TNHHH THƯƠNG MẠI TRUNG DŨNG', 3),
(11, 'TNHH TÔN HÒA PHÁT', 2),
(12, 'TNHH XUẤT NHẬP KHẨU THIÊN PHÚ ', 2),
(13, 'TNHH TÂN THẾ KỶ', 2),
(14, 'THE SEOND HOME', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `id_academy` int(11) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `id_he` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`id`, `id_company`, `id_vitri`, `id_academy`, `salary`, `id_he`, `name`) VALUES
(1, 3, 1, 1, '1000000', 1, 'Tuyển dụng lập trình viên php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `user_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he`
--

CREATE TABLE `he` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `he`
--

INSERT INTO `he` (`id`, `name`) VALUES
(1, 'Cao đẳng'),
(2, 'Đại học'),
(3, 'Trung cấp'),
(4, 'Nghề');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `jobname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expectedposition` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languages` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id`, `id_company`, `jobname`, `education`, `expectedposition`, `experience`, `languages`, `sex`, `salary`) VALUES
(1, 1, 'LẬP TRÌNH JAVA', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 1000),
(2, 1, 'QUẢN LÝ DỰ ÁN', 'ĐẠI HỌC', 'PHÓ PHÒNG', '3', 'ENGLISH', 'MEN', 3000),
(3, 1, 'KẾ TOÁN', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'WOMEN', 500),
(4, 1, 'KỸ SƯ XÂY DỰNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 800),
(5, 1, 'KỸ SƯ GIÁM SÁT XÂY DỰNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '2', 'ENGLISH', 'MEN', 1100),
(6, 1, 'THIẾT KẾ KIẾN TRÚC', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', '', 1000),
(7, 1, 'KỸ SƯ CẦU ĐƯỜNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 1000),
(8, 1, 'LẬP TRÌNH VIÊN', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 600),
(9, 1, 'LẬP TRÌNH WORDPRESS', 'CAO ĐẲNG', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 600),
(10, 1, 'LẬP TRÌNH PHP', 'TRUNG CẤP', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 600),
(11, 1, 'NHÂN VIÊN KINH DOANH', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'WOMEN', 500),
(12, 1, 'LẬP TRÌNH PHP', 'CAO ĐẲNG', 'NHÂN VIÊN', '1', 'TIẾNG VIỆT', 'MEN', 400),
(13, 1, 'WORDPRESS FRONTEND DEVELOPER', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', '', 700),
(14, 1, 'LẬP TRÌNH JAVA', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'TIẾNG VIỆT', '', 500),
(15, 1, 'KẾ TOÁN', 'TRUNG CẤP', 'NHÂN VIÊN', '1', 'TIẾNG VIỆT', 'WOMEN', 300),
(16, 1, 'KỸ SƯ CẦU ĐƯỜNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '', 'TIẾNG VIỆT', 'MEN', 500),
(17, 1, 'KỸ SƯ XÂY DỰNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 500),
(18, 1, 'KỸ SƯ THIẾT KẾ', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'MEN', 550),
(19, 1, 'NHÂN VIÊN BÁN HÀNG', 'CAO ĐẲNG', 'NHÂN VIÊN', '0', 'TIẾNG VIỆT', 'WOMEN', 350),
(20, 1, 'NHÂN VIÊN NHÂN SỰ', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'W0MEN', 500),
(21, 1, 'NHÂN VIÊN KINH DOANH', 'TRUNG CẤP', 'NHÂN VIÊN', '', 'TIẾNG VIỆT', 'WOMEN', 400),
(22, 1, 'NHÂN VIÊN MAKETTING ', 'CAO ĐẲNG', 'NHÂN VIÊN', '0', 'TIẾNG VIỆT', '', 400),
(23, 1, 'TRƯỞNG PHÒNG MAKETTING', 'ĐẠI HỌC', 'TRƯỞNG PHÒNG', '3', 'ENGLISH', '', 1000),
(24, 1, 'KỸ SƯ CƠ KHÍ', 'TRUNG CẤP', 'NHÂN VIÊN', '1', 'TIẾNG VIỆT', '', 400),
(25, 1, 'THỢ MÁY', 'CAO ĐẲNG', 'NHÂN VIÊN', '1', 'TIẾNG VIỆT', 'MEN', 450),
(26, 1, 'GIÁM SÁT MÁY', 'ĐẠI HỌC', 'PHÓ PHÒNG', '1', 'ENGLISH', 'MEN', 600),
(27, 1, 'LẬP TRÌNH WEB', 'CAO ĐẲNG', 'NHÂN VIÊN', '0', 'TIẾNG VIỆT', 'MEN', 600),
(28, 1, 'KẾ TOÁN', 'ĐẠI HỌC', 'NHÂN VIÊN', '1', 'ENGLISH', 'WOMEN', 400),
(29, 1, 'KẾ TOÁN TRƯỞNG', 'ĐẠI HỌC', 'NHÂN VIÊN', '3', 'ENGLISH', 'MEN', 800),
(30, 1, 'KẾ TOÁN TRƯỞNG', 'ĐẠI HỌC', 'TRƯỞNG PHÒNG', '4', 'ENGLISH', 'WOMEN', 700),
(31, 1, 'NHÂN VIÊN KINH DOANH', 'CAO ĐẲNG', 'NHÂN VIÊN', '1', 'ENGLISH', '', 400),
(32, 1, 'NHÂN VIÊN THU NGÂN', 'TRUNG CẤP', 'NHÂN VIÊN', '0', 'TIẾNG VIỆT', 'WOMEN', 350);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `roleid` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong_khoa`
--

CREATE TABLE `truong_khoa` (
  `id_truong` int(11) NOT NULL,
  `id_khoa` int(11) NOT NULL,
  `diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truong_khoa`
--

INSERT INTO `truong_khoa` (`id_truong`, `id_khoa`, `diem`) VALUES
(1, 1, 15),
(1, 2, 20),
(2, 1, 10),
(2, 2, 14),
(3, 2, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `nameUnversity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codecity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `university`
--

INSERT INTO `university` (`id`, `nameUnversity`, `codecity`) VALUES
(1, 'Đại học phương đông', 1),
(2, 'đại học công nghệ', 2),
(3, 'Đại học khoa học tự nhiên', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nameuser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT NULL,
  `roleid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri`
--

CREATE TABLE `vitri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri`
--

INSERT INTO `vitri` (`id`, `name`) VALUES
(1, 'Leader'),
(2, 'Nhân viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danh_muc` (`id_danh_muc`),
  ADD KEY `user_created` (`user_created`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_company_city` (`codecity`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_he` (`id_he`),
  ADD KEY `id_vitri` (`id_vitri`),
  ADD KEY `id_company` (`id_company`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_created` (`user_created`);

--
-- Chỉ mục cho bảng `he`
--
ALTER TABLE `he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Chỉ mục cho bảng `truong_khoa`
--
ALTER TABLE `truong_khoa`
  ADD PRIMARY KEY (`id_truong`,`id_khoa`),
  ADD KEY `id_khoa` (`id_khoa`);

--
-- Chỉ mục cho bảng `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_uni_city` (`codecity`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_role` (`roleid`);

--
-- Chỉ mục cho bảng `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `academy`
--
ALTER TABLE `academy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `he`
--
ALTER TABLE `he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vitri`
--
ALTER TABLE `vitri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`user_created`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`codecity`) REFERENCES `city` (`id`);

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`id_he`) REFERENCES `he` (`id`),
  ADD CONSTRAINT `congviec_ibfk_2` FOREIGN KEY (`id_vitri`) REFERENCES `vitri` (`id`),
  ADD CONSTRAINT `congviec_ibfk_3` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`user_created`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`);

--
-- Các ràng buộc cho bảng `truong_khoa`
--
ALTER TABLE `truong_khoa`
  ADD CONSTRAINT `truong_khoa_ibfk_1` FOREIGN KEY (`id_truong`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `truong_khoa_ibfk_2` FOREIGN KEY (`id_khoa`) REFERENCES `academy` (`id`);

--
-- Các ràng buộc cho bảng `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`codecity`) REFERENCES `city` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
