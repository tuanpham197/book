-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2018 lúc 04:25 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_02_131052_create_smart_book_table', 2),
(6, '2018_09_02_132819_add_img_to_smart_book', 3),
(7, '2018_09_09_144216_add_level_to_users', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `smart_book`
--

CREATE TABLE `smart_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `smart_book`
--

INSERT INTO `smart_book` (`id`, `title`, `description`, `author`, `created_at`, `updated_at`, `img`, `id_user`) VALUES
(23, 'Ngữ Văn - Lớp 6', 'Hi I want to add new column to existing table and run migrate command ... open up migration files in database/migrations (Laravel 5.3) edit migration files ...', 'admin', '2018-09-10 08:51:06', '2018-09-10 08:51:06', 'nJH5Z_2.jpg', 1),
(25, 'Ngữ Văn - Lớp 7', 'Đến ngay Đấu Trường Ước Mơ - sự kiện cực ‘hot’ của Red Bull để húc tung nỗi sợ và dám làm những trò mạo hiểm không tưởng.', 'Phạm Văn Tuấn', '2018-09-10 09:29:03', '2018-09-10 09:29:03', 'kufvA_nguvan-7.jpg', 2),
(26, 'Toán lớp 5', 'The information in this post is no longer correct. It is now possible to update columns using migrations by adding the Doctrine DBAL ', 'Phạm Văn Tuấn', '2018-09-10 09:31:20', '2018-09-10 09:31:20', 'L9fiB_sgktoan5-1-cunghoctoan.net.png', 2),
(27, 'Toán lớp 1', 'The information in this post is no longer correct. It is now possible to update columns using migrations by adding the Doctrine DBAL ', 'Nguyen Van A', '2018-09-10 09:43:48', '2018-09-10 09:43:48', 'DVMoh_Sach-giao-khoa-toan-1-500x554.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'vantuankrn197@gmail.com', '$2y$12$oHd04WHw1Iria/ZGlhMdk.JbgDKjjqrNbb0TkJpLnIvIagUe.zTb6', 'VNagwH7928aQuLGNaXhDF3Ia6090XLkJJcmY53NbuCDmuciGSAS2GOQmStrA', NULL, '2018-09-10 10:17:58', 1),
(2, 'Phạm Văn Tuấn', 'user@gmail.com', '$2y$10$ijBcm98HWYcFKBjVGw8LiO0UulRTTf8qoR.Ux9PPMQ..DFq0nXx..', '8wTWfIGuntEwxOEXjd0WL6y0BVdZpPUxP1VPLNK7nKv6w0rLQMiUnqgQmQdI', '2018-09-09 09:24:19', '2018-09-10 10:15:27', 2),
(3, 'Nguyen Van A', 'user2@gmail.com', '$2y$10$bAxggrVjMLLcKqYWWBTM0uweDUEhYBN62RRRDuV40mg/X/2J96zNW', '923OC993dL8gzIS8I69vwLshOTJNCBcB8QO8AycRgEYI63fpvDBACMicHN5G', '2018-09-10 09:43:15', '2018-09-10 10:17:30', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `smart_book`
--
ALTER TABLE `smart_book`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `smart_book`
--
ALTER TABLE `smart_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
