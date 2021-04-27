-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 27, 2021 lúc 09:19 AM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `we_meet_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('f500d83032d03253425e2a4991c872e33b7915e5', '::1', 1618532730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533323733303b),
('e3224d4300699d67588fc49d3ac820f21f0a57b9', '::1', 1618533095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533333039353b),
('f04d0c3d90b11f293d49142f5acef30944d5d17b', '::1', 1618532968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533323936303b),
('c92900b52a60fe35449ed9867ce39ed36f398c1c', '::1', 1618533402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533333430323b),
('5ca35817d298376fc74ad45b2980eb8246f4e0c1', '::1', 1618533728, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533333732383b),
('53765156c0f31cab06c9fc3a9521e5bed10f25d1', '::1', 1618534064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533343036343b),
('b35d8e134bacbb5aa9c987dc66ab199cf97873d1', '::1', 1618534523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533343532333b),
('987fd4a5d7938d39953924a98ef5c6155a056d66', '::1', 1618534785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383533343532333b),
('7f1e962f4520ee16d4eb7a521a12d0cb4b0eee35', '::1', 1618889065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383838393036353b),
('b052fe32abd7e760a537388e005b059f629ab986', '::1', 1618889193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631383838393139313b);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`config_id`, `title`, `value`) VALUES
(49, 'app_name', 'WeMeet'),
(50, 'version', '1.0.4'),
(51, 'app_mode', 'free'),
(52, 'app_mandatory_login', 'false'),
(53, 'purchase_code', 'tLhws3UupiVDxP'),
(54, 'business_address', 'business_address'),
(55, 'business_phone', ''),
(56, 'system_email', 'ilikemusic2017@yandex.com'),
(57, 'contact_email', 'ilikemusic2017@yandex.com'),
(58, 'privacy_policy_text', '<p>Privacy policy text goes here.</p>'),
(59, 'jitsi_server', 'https://meet.jit.si/'),
(60, 'system_short_name', 'system_short_name'),
(61, 'site_name', 'site_name'),
(62, 'protocol', 'smtp'),
(63, 'smtp_host', 'smtp.gmail.com'),
(64, 'smtp_user', 'youremail@gmail.com'),
(65, 'smtp_pass', 'xxxxxxxxxxx'),
(66, 'smtp_port', '465'),
(67, 'smtp_crypto', 'ssl'),
(68, 'mailpath', 'mailpath'),
(69, 'onesignal_api_keys', 'xxxxxxxxxxxxx'),
(70, 'onesignal_appid', 'xxxxxxxxxxx'),
(71, 'mobile_ads_enable', '0'),
(72, 'mobile_ads_network', 'admob'),
(73, 'admob_publisher_id', 'admob_publisher_id'),
(74, 'admob_app_id', 'admob_app_id'),
(75, 'admob_banner_ads_id', 'admob_banner_ads_id'),
(76, 'admob_interstitial_ads_id', 'admob_interstitial_ads_id'),
(77, 'meeting_prefix', 'MT'),
(78, 'allow_unauthorized_meeting_code', 'true'),
(79, 'backdrop_image', 'backdrop_image.jpg'),
(80, 'addthis_enable', 'false'),
(81, 'addthis_pubid', 'ra-58d74b9dcfd76af7'),
(82, 'logo', 'logo.png'),
(83, 'favicon', 'favicon.png'),
(84, 'og_image', 'og_image.jpg'),
(85, 'cron_key', 'cron_key'),
(86, 'db_backup', 'db_backup');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cron`
--

CREATE TABLE `cron` (
  `cron_id` int(11) NOT NULL,
  `type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `save_to` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `videos_id` int(250) DEFAULT NULL,
  `admin_email_from` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `admin_email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_to` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_sub` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `label` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'System',
  `key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `keys`
--

INSERT INTO `keys` (`id`, `label`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 'Admin', 'd7cbc21ba595154', 1, 0, 0, NULL, 1584340674);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `method` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `params` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `api_key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL,
  `meeting_title` varchar(250) DEFAULT NULL,
  `meeting_code` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `meeting_title`, `meeting_code`, `user_id`, `created_at`, `remarks`) VALUES
(1, 'Untitled', 'MTMyDHzyQP4w', 2, '2021-04-14 09:20:50', NULL),
(2, 'Personal Meeting ID', 'MTgq0kFXMDIj', 3, '2021-04-16 06:47:45', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `meeting_history`
--

CREATE TABLE `meeting_history` (
  `meeting_history_id` int(11) NOT NULL,
  `meeting_code` varchar(250) NOT NULL,
  `nick_name` varchar(250) DEFAULT 'No-name',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `joined_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `meeting_history`
--

INSERT INTO `meeting_history` (`meeting_history_id`, `meeting_code`, `nick_name`, `user_id`, `joined_at`, `remarks`) VALUES
(1, 'MTMyDHzyQP4w', 'No-name', 2, '2021-04-14 09:20:50', NULL),
(2, 'MTMyDHzyQP4w', 'No-name', 2, '2021-04-14 09:20:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rest_logins`
--

CREATE TABLE `rest_logins` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `rest_logins`
--

INSERT INTO `rest_logins` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'bfd2d78c8b49a2a', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `email` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` int(2) DEFAULT '1',
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `token` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `join_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `deactivate_reason` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `status` int(10) NOT NULL DEFAULT '1',
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT '0000-00-00',
  `meeting_code` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `firebase_auth_uid` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `gender`, `role`, `token`, `join_date`, `last_login`, `deactivate_reason`, `status`, `phone`, `dob`, `meeting_code`, `firebase_auth_uid`) VALUES
(1, 'Hoa Hoang', 'admin@admin.com', '25d55ad283aa400af464c76d713c07ad', 1, 'admin', NULL, NULL, '2021-04-16 06:25:38', NULL, 1, NULL, '0000-00-00', 'bf02411de4e9', NULL),
(2, 'Hoang Hoa 3', 'hoanghoa12@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 'user', NULL, NULL, '2021-04-16 06:30:00', NULL, 1, '03456893765', '0000-00-00', '', NULL),
(3, 'No name set', 'hoanghoa1234@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 'subscriber', NULL, '2021-04-16 06:47:45', '2021-04-16 06:47:45', NULL, 1, '00000000000', '0000-00-00', 'MTgq0kFXMDIj', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Chỉ mục cho bảng `cron`
--
ALTER TABLE `cron`
  ADD PRIMARY KEY (`cron_id`);

--
-- Chỉ mục cho bảng `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Chỉ mục cho bảng `meeting_history`
--
ALTER TABLE `meeting_history`
  ADD PRIMARY KEY (`meeting_history_id`);

--
-- Chỉ mục cho bảng `rest_logins`
--
ALTER TABLE `rest_logins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `cron`
--
ALTER TABLE `cron`
  MODIFY `cron_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `meeting_history`
--
ALTER TABLE `meeting_history`
  MODIFY `meeting_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `rest_logins`
--
ALTER TABLE `rest_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
