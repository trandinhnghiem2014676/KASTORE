-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 10:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT '0:dang chuan bị hang,1:dang giao hang,2 đã giao hàng',
  `phuongthucTT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priceship` double(8,2) DEFAULT NULL,
  `voucher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `sdt`, `address`, `total`, `statuss`, `phuongthucTT`, `priceship`, `voucher`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '0969400633', 'VH-VL-Bạc Liêu-Viet Nam', '1374', '2', 'Nhận hàng trả tiền', 0.00, NULL, 10, '2022-10-22 21:16:57', '2022-11-04 09:10:27'),
(3, '0123456789', 'KTXB- ĐHCT-Bạc Liêu-Tokyo', '400', '0', 'Nhận hàng trả tiền', 0.00, NULL, 10, '2022-10-22 21:22:37', '2022-10-22 21:22:37'),
(4, '0969400633', 'KTXB- ĐHCT-Cần Thơ-USA', '956', '0', 'Nhận hàng trả tiền', 0.00, NULL, 10, '2022-10-22 21:44:15', '2022-10-22 21:44:15'),
(5, '0123456789', 'KTXB- ĐHCT-Cần Thơ-USA', '1374', '0', 'Nhận hàng trả tiền', 0.00, NULL, 7, '2022-10-22 22:16:33', '2022-10-22 22:16:33'),
(6, '0123456780', 'Vĩnh Hưng, Vĩnh Lợi-Bạc Liêu-Viet Nam', '1463', '2', 'Nhận hàng trả tiền', 0.00, NULL, 7, '2022-11-02 03:05:35', '2022-11-02 08:47:30'),
(7, '023568864', 'Long Xuyen-An Giang-Viet Nam', '665', '1', 'Nhận hàng trả tiền', 0.00, NULL, 7, '2022-11-02 08:49:47', '2022-11-02 08:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(12, 'Giày Joden', '2022-08-20 09:42:10', '2022-08-20 09:42:10'),
(13, 'Adidas Kampung', '2022-08-20 09:43:08', '2022-08-20 09:43:08'),
(14, 'Giày Adidas', '2022-08-20 10:10:59', '2022-10-16 19:07:40'),
(15, 'Giày Nike', '2022-08-20 10:11:12', '2022-10-16 19:08:45'),
(16, 'Giày Boot', '2022-08-20 10:16:18', '2022-11-02 08:05:15'),
(17, 'Giay the thao', '2022-08-20 10:16:44', '2022-10-20 17:47:25'),
(19, 'aaaaaaaaaaa1', '2022-09-05 04:18:21', NULL),
(20, 'aaaaaaaaaaa1', '2022-09-05 04:18:28', NULL),
(21, 'Huỳnh Mai', '2022-09-05 04:24:34', '2022-09-16 06:44:52'),
(32, 'dsadasdsadasdasdsad', '2022-09-22 20:06:10', '2022-09-22 20:06:10'),
(34, 'idgfdgfjdhgfjsdf', '2022-09-22 20:08:53', '2022-09-22 20:08:53'),
(35, 'www', '2022-09-22 20:10:14', '2022-09-22 20:10:14'),
(36, 'eeeee', '2022-09-22 20:10:48', '2022-09-22 20:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `message`, `rating`, `created_at`, `updated_at`) VALUES
(1, 7, 11, 'san pham te', 1.00, '2022-10-23 08:49:45', '2022-10-23 08:49:45'),
(2, 7, 11, 'hoeef', 4.00, '2022-10-23 09:19:45', '2022-10-23 09:19:45'),
(3, 7, 11, 'asjkdasjjkasd', 5.00, '2022-10-23 09:48:29', '2022-10-23 09:48:29'),
(4, 10, 4, 'san pham tot', 1.50, '2022-11-02 06:53:42', '2022-11-02 06:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bills`
--

CREATE TABLE `detail_bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_bills`
--

INSERT INTO `detail_bills` (`id`, `id_bill`, `id_pro`, `number`, `total`, `price`, `image`, `name_pro`, `created_at`, `updated_at`) VALUES
(2, 2, 10, 1, 487.00, 487.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132780/nzixw2ncb0uohsogk9oz.webp', 'ZAPATOS DG MECARDOLIBRE', '2022-10-22 21:16:57', '2022-10-22 21:16:57'),
(3, 2, 4, 1, 498.00, 498.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665209928/eubhdzyx5dwtvknhxfoj.webp', 'KEVIN DURANT SHOES', '2022-10-22 21:16:57', '2022-10-22 21:16:57'),
(4, 3, 7, 1, 400.00, 400.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210019/idzzagpsvnsvmtybllfp.webp', 'FASHION BOOT', '2022-10-22 21:22:37', '2022-10-22 21:22:37'),
(5, 4, 9, 2, 778.00, 389.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210098/zlqaq6gsjckqlf0u8fgr.webp', 'ELEVATOR SHOES', '2022-10-22 21:44:15', '2022-10-22 21:44:15'),
(6, 4, 11, 1, 178.00, 178.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132848/e9avbxrxuhmr9jynr4zy.webp', 'Adidas Kampung', '2022-10-22 21:44:15', '2022-10-22 21:44:15'),
(7, 5, 7, 1, 400.00, 400.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210019/idzzagpsvnsvmtybllfp.webp', 'FASHION BOOT', '2022-10-22 22:16:33', '2022-10-22 22:16:33'),
(8, 5, 10, 2, 974.00, 487.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132780/nzixw2ncb0uohsogk9oz.webp', 'ZAPATOS DG MECARDOLIBRE', '2022-10-22 22:16:33', '2022-10-22 22:16:33'),
(9, 6, 35, 1, 478.00, 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665212119/xoitk4goxcwomppuj7yv.webp', 'VANS BLACK CANVAS SHOES', '2022-11-02 03:05:35', '2022-11-02 03:05:35'),
(10, 6, 10, 1, 487.00, 487.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132780/nzixw2ncb0uohsogk9oz.webp', 'ZAPATOS DG MECARDOLIBRE', '2022-11-02 03:05:35', '2022-11-02 03:05:35'),
(11, 6, 4, 1, 498.00, 498.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665209928/eubhdzyx5dwtvknhxfoj.webp', 'KEVIN DURANT SHOES', '2022-11-02 03:05:35', '2022-11-02 03:05:35'),
(12, 7, 10, 1, 487.00, 487.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132780/nzixw2ncb0uohsogk9oz.webp', 'ZAPATOS DG MECARDOLIBRE', '2022-11-02 08:49:47', '2022-11-02 08:49:47'),
(13, 7, 11, 1, 178.00, 178.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132848/e9avbxrxuhmr9jynr4zy.webp', 'Adidas Kampung', '2022-11-02 08:49:47', '2022-11-02 08:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-09-27 19:35:35', '2022-09-27 20:05:46'),
(5, 'Clien', '2022-09-27 21:41:04', '2022-09-27 21:41:04'),
(7, 'Staff', '2022-11-04 05:59:38', '2022-11-04 05:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_19_153836_create_categories_table', 2),
(6, '2022_09_23_035700_create_products_table', 3),
(7, '2022_09_28_015851_create_groups_table', 4),
(8, '2022_09_28_041321_add_column_users_table', 5),
(9, '2022_10_23_024920_create_bills_table', 6),
(10, '2022_10_23_030145_create_detail_bills_table', 7),
(11, '2022_10_23_153945_create_comments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` double(8,2) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `cate` int(11) UNSIGNED DEFAULT 12,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `gia`, `image`, `mota`, `luotxem`, `cate`, `created_at`, `updated_at`) VALUES
(2, 'ZAPATOS OSIRIS', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665209869/xgofmnvblu82w1liwfgz.webp', 'Giày đẹp !!', 0, 13, '2022-09-22 23:12:33', '2022-10-08 03:46:33'),
(4, 'KEVIN DURANT SHOES', 498.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665209928/eubhdzyx5dwtvknhxfoj.webp', 'Giày quá đẹp !!', 0, 36, '2022-09-22 23:21:10', '2022-10-08 03:46:47'),
(7, 'FASHION BOOT', 400.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210019/idzzagpsvnsvmtybllfp.webp', 'Giày rất êm chân và thoải mái.', 0, 12, '2022-09-22 23:44:52', '2022-10-07 23:20:18'),
(9, 'ELEVATOR SHOES', 389.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210098/zlqaq6gsjckqlf0u8fgr.webp', 'Giày chống chịu được nước', 0, 12, '2022-10-07 01:25:23', '2022-10-07 23:21:37'),
(10, 'ZAPATOS DG MECARDOLIBRE', 487.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132780/nzixw2ncb0uohsogk9oz.webp', 'Giày đẹp !', 0, 12, '2022-10-07 01:53:00', '2022-11-02 08:16:20'),
(11, 'Adidas Kampung', 178.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665132848/e9avbxrxuhmr9jynr4zy.webp', 'Giày bền bỉ', 0, 12, '2022-10-07 01:54:08', '2022-11-02 08:16:39'),
(12, 'BAST SHOE', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665133089/cqxjnicl1dqk3mnnglca.webp', 'Giay rat dep va thoai  mai', 0, 12, '2022-10-07 01:58:09', '2022-10-07 01:58:09'),
(13, 'SKATE SHOE', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210211/fo1qhp1qnvp0x3odlca0.webp', 'Giày được làm bằng da bò tự nhiên', 0, 12, '2022-10-07 23:23:31', '2022-10-07 23:23:31'),
(14, 'CLIMBING SHOE', 675.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210298/qpl8skvz1z16oqyql4zt.webp', 'Giày thích hợp thể thao', 0, 12, '2022-10-07 23:24:58', '2022-10-07 23:24:58'),
(15, 'BALLET SHOE', 200.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210421/uekvmn728sp7fa8cqbvi.webp', 'Giày được làm từ cao su tự nhiên', 0, 12, '2022-10-07 23:27:01', '2022-10-07 23:27:01'),
(16, 'BOAT SHOE', 532.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210556/ul5nxmu7john2nwlenlj.webp', 'Giày  rất ok', 0, 12, '2022-10-07 23:29:16', '2022-10-07 23:29:16'),
(17, 'BLUCHER SHOE', 780.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210719/cs6hvhvsajfmsvp63oti.webp', 'Giày có độ bền cao', 0, 12, '2022-10-07 23:31:59', '2022-10-07 23:31:59'),
(18, 'BOY\'S POLO SHOES', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210792/wtoelqwuya2sf2w8baxu.webp', 'Hàng mới về', 0, 12, '2022-10-07 23:33:12', '2022-10-07 23:33:12'),
(19, 'BROGUE SHOE', 134.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210888/sf3g9bl8btxdhwqq3yck.webp', 'Giày phổ thông', 0, 12, '2022-10-07 23:34:48', '2022-10-07 23:34:48'),
(20, 'COURT SHOE', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665210999/bvqiprddoto6vzweh4rp.webp', 'Giày mẫu mới nhất', 0, 12, '2022-10-07 23:36:39', '2022-10-07 23:36:39'),
(21, 'DERBY SHOE', 756.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211039/eflmqvrmxumnra1phzb2.webp', 'Giày xịn', 0, 12, '2022-10-07 23:37:18', '2022-10-07 23:37:18'),
(22, 'DIABETIC SHOE', 364.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211097/wzzrcxbaixyhjuex6xmj.webp', 'Giày có độ bền cao và chống chịu tốt', 0, 12, '2022-10-07 23:38:17', '2022-10-07 23:38:17'),
(23, 'DORI SHOES', 389.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211280/iahpcuctuaeh9k1hudnc.webp', 'Giày thể thao', 0, 12, '2022-10-07 23:41:20', '2022-10-07 23:41:20'),
(24, 'DRESS SHOE', 336.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211372/rfnymctu4bv0hwmypp0e.webp', 'Giày đang chuộng trên thị trường', 0, 12, '2022-10-07 23:42:52', '2022-10-07 23:42:52'),
(25, 'ELEVATOR SHOES', 389.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211435/m2dt17gurxkma80isgim.webp', 'Giày cao cấp', 0, 12, '2022-10-07 23:43:55', '2022-10-07 23:43:55'),
(26, 'FASHION BOOT', 400.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211500/q3hsuw1scy3upkwhq4bz.webp', 'Giày cổ cao thời trang', 0, 12, '2022-10-07 23:45:00', '2022-10-07 23:45:00'),
(27, 'FORMAL SHOES FOR MEN', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211599/qb5y6hkjclebs6p07y5g.webp', 'Giày đẹp và thời trang Hot', 0, 12, '2022-10-07 23:46:39', '2022-10-07 23:46:39'),
(28, 'HIGH-HEELED FOOTWEAR', 250.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211679/szc7uhx8w5arzh2hnnbf.webp', 'Shoes save', 0, 12, '2022-10-07 23:47:59', '2022-10-07 23:47:59'),
(29, 'JUNIORS\' ATHLETIC SHOES', 498.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211738/kx0csvpeomrvgemp5k1s.webp', 'Đeo vào cảm giác thoải mái', 0, 12, '2022-10-07 23:48:58', '2022-10-07 23:48:58'),
(30, 'KEVIN DURANT SHOES', 498.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211798/nf6axjvyx2dgc0oumbvw.webp', 'Dòng thời trang Kevin', 0, 12, '2022-10-07 23:49:58', '2022-10-07 23:49:58'),
(31, 'MEN\'S GO RUN 400 X-WIDE RUNNING SHOE', 885.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211858/clucl3nlmbvxegiffzro.webp', 'Giày cao cấp', 0, 12, '2022-10-07 23:50:58', '2022-10-07 23:50:58'),
(32, 'MEN\'S HARPOON 2 EYE BOOT', 135.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211906/epm4fibphzn27tljborv.webp', 'Giày giá thấp độ bền cao', 0, 12, '2022-10-07 23:51:46', '2022-10-07 23:51:46'),
(33, 'NEW MEN\'S RUNNING SHOES', 275.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665211944/kneqartqwdkarhwomesm.webp', 'Giày giá rẽ', 0, 12, '2022-10-07 23:52:24', '2022-10-07 23:52:24'),
(34, 'ROGER DUBUIS', 275.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665212030/zctirtpztfbil9sgkqj0.webp', 'Giày giá tầm trung', 0, 12, '2022-10-07 23:53:50', '2022-10-07 23:53:50'),
(35, 'VANS BLACK CANVAS SHOES', 478.00, 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665212119/xoitk4goxcwomppuj7yv.webp', 'Giày cao cấp', 0, 12, '2022-10-07 23:55:19', '2022-10-07 23:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email_verified_at`, `password`, `address`, `remember_token`, `created_at`, `updated_at`, `email`, `phone`, `img`, `group_id`) VALUES
(7, 'Von Nguyen', NULL, '$2y$10$TRXeu5L5edGJmJ2ALPJS..sAYpo32AohcFaJqXO.BZ34I/LRlRQjy', 'VH-Vĩnh Lợi - Bạc Liêu', NULL, '2022-09-22 20:03:08', '2022-10-06 22:44:16', 'vonnguyen041096@gmail.com', '0969400633', 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665121354/fpsdsfhls6v5fbay9iwd.jpg', 1),
(10, 'von', NULL, '$2y$10$t7u3X1LfTMz6x.9EU9aqNu4f0fpAdAN49Pil5RzzZ32A5kv7fYd9i', 'Ninh Kieu Can Tho', NULL, '2022-10-10 08:33:33', '2022-10-10 08:33:33', 'von@gmail.com', '1234567890', 'https://res.cloudinary.com/drf9ghu55/image/upload/v1665416011/jlgqqgtywbaifvvgjqtd.jpg', 5),
(11, 'minh', NULL, '$2y$10$p3K7gbvz8c9gFQGA6CHxS.FkJLZYgiXlyl3a7r6TvKT99rp3bO0yG', NULL, NULL, '2022-10-22 19:25:48', '2022-10-22 19:25:48', 'minh@gmail.com', NULL, NULL, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_bills`
--
ALTER TABLE `detail_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate` (`cate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_bills`
--
ALTER TABLE `detail_bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
