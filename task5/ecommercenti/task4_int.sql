-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 مارس 2022 الساعة 19:19
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task4_int`
--

-- --------------------------------------------------------

--
-- بنية الجدول `acsess`
--

CREATE TABLE `acsess` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `addersses`
--

CREATE TABLE `addersses` (
  `id` bigint(20) NOT NULL,
  `building` int(3) NOT NULL,
  `floor` int(2) NOT NULL,
  `flat` int(3) NOT NULL,
  `notes` varchar(40) DEFAULT NULL,
  `region_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `addersses`
--

INSERT INTO `addersses` (`id`, `building`, `floor`, `flat`, `notes`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 10, 3, 2, NULL, 1, '2022-03-26 17:44:43', '2022-03-26 17:44:43'),
(2, 6, 3, 8, NULL, 5, '2022-03-26 17:45:07', '2022-03-26 17:45:07'),
(3, 7, 4, 7, NULL, 7, '2022-03-26 17:45:32', '2022-03-26 17:45:32'),
(4, 8, 5, 9, NULL, 8, '2022-03-26 17:45:50', '2022-03-26 17:45:50'),
(5, 8, 11, 22, NULL, 7, '2022-03-26 17:46:18', '2022-03-26 17:46:18'),
(6, 3, 4, 11, NULL, 6, '2022-03-26 17:46:54', '2022-03-26 17:46:54');

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` int(11) NOT NULL DEFAULT 1,
  `phone` tinyint(11) NOT NULL,
  `national_id` int(14) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` decimal(1,0) NOT NULL DEFAULT 1,
  `email_verified_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 is not active\r\n1 is active\r\n',
  `image` int(11) DEFAULT NULL,
  `crated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `image`, `crated_at`, `updated_at`) VALUES
(1, 'del', 1, NULL, '2022-03-23 20:01:32', '2022-03-23 20:01:32'),
(2, 'iphon', 1, NULL, '2022-03-23 20:05:05', '2022-03-23 20:05:05'),
(3, 'rolex', 1, NULL, '2022-03-23 20:14:48', '2022-03-23 20:14:48'),
(4, 'toshiba', 1, NULL, '2022-03-26 17:01:05', '2022-03-26 17:01:05'),
(5, 'lg', 1, NULL, '2022-03-26 17:01:25', '2022-03-26 17:01:25');

-- --------------------------------------------------------

--
-- بنية الجدول `carts`
--

CREATE TABLE `carts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quntitiy` int(3) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 is not active\r\n\r\n1 is active',
  `image` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `status`, `image`, `created_at`, `updated_at`) VALUES
(0, 'خضراوات', 'vegetables', 1, NULL, '2022-03-23 20:19:32', '2022-03-23 20:19:32'),
(1, 'الكترونيات', 'electronics', 1, NULL, '2022-03-23 20:15:48', '2022-03-23 20:15:48'),
(2, 'ساعات', 'watches', 1, NULL, '2022-03-23 20:16:45', '2022-03-23 20:16:45'),
(4, 'مطبخ', 'kitchen', 1, NULL, '2022-03-26 16:55:25', '2022-03-26 16:55:25'),
(5, 'سوبر ماركت', 'supermarket', 1, NULL, '2022-03-26 16:56:53', '2022-03-26 16:56:53');

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` decimal(1,0) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `cities`
--

INSERT INTO `cities` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'alex', '1', '2022-03-26 17:37:37', '2022-03-26 17:37:37'),
(2, 'cairo', '1', '2022-03-26 17:37:50', '2022-03-26 17:37:50');

-- --------------------------------------------------------

--
-- بنية الجدول `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` bigint(50) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime NOT NULL DEFAULT current_timestamp(),
  `discount` decimal(7,2) NOT NULL,
  `discound_id` bigint(20) UNSIGNED NOT NULL,
  `_order_valueminimum` smallint(5) UNSIGNED NOT NULL DEFAULT 10,
  `maximum_dicount_value` smallint(5) UNSIGNED NOT NULL DEFAULT 1000,
  `number_of_usage_per_user` smallint(4) UNSIGNED NOT NULL DEFAULT 1,
  `number_of_usage` tinyint(2) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `favs`
--

CREATE TABLE `favs` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(50) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `description_ar` longtext NOT NULL,
  `decsription_en` longtext NOT NULL,
  `image` geometry NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `count` int(11) NOT NULL DEFAULT 1,
  `discount` int(11) NOT NULL,
  `discount_type` char(5) NOT NULL DEFAULT '%',
  `applied_offer_count` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` decimal(1,0) NOT NULL DEFAULT 1,
  `total_price` int(6) NOT NULL,
  `shipping_price` int(4) NOT NULL,
  `delivared_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `adderess_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `order`
--

INSERT INTO `order` (`id`, `status`, `total_price`, `shipping_price`, `delivared_at`, `created_at`, `updated_at`, `user_id`, `adderess_id`) VALUES
(1, '1', 3000, 100, '2022-03-26 16:52:00', '2022-03-26 17:52:29', '2022-03-26 17:52:29', 1, 2),
(2, '1', 5000, 200, '2022-03-26 16:53:15', '2022-03-26 17:53:38', '2022-03-26 17:53:38', 4, 1),
(3, '1', 10000, 300, '2022-03-26 16:53:48', '2022-03-26 17:54:05', '2022-03-26 17:54:05', 2, 5),
(4, '1', 8080, 120, '2022-03-26 16:54:09', '2022-03-26 17:54:33', '2022-03-26 17:54:33', 3, 4),
(5, '1', 7000, 60, '2022-03-26 16:54:38', '2022-03-26 17:54:57', '2022-03-26 17:54:57', 1, 3),
(6, '1', 5667, 234, '2022-03-26 16:55:47', '2022-03-26 17:56:04', '2022-03-26 17:56:04', 4, 4);

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `status` decimal(1,0) NOT NULL DEFAULT 1 COMMENT '0 is not active\r\n1 is active',
  `image` text NOT NULL,
  `price` mediumint(9) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` int(10) UNSIGNED NOT NULL,
  `qountatity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `brand_id` bigint(20) DEFAULT NULL,
  `subcategory_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`id`, `name_ar`, `name_en`, `status`, `image`, `price`, `details_ar`, `details_en`, `created_at`, `updated_at`, `code`, `qountatity`, `brand_id`, `subcategory_id`) VALUES
(1, 'دل كور ه7', 'dell cor i7', '1', 'del1.jpg', 12000, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages', '2022-03-23 20:28:49', '2022-03-23 20:28:49', 22, 2, 1, 2),
(2, 'ايفون س 7', 'iphon 7', '1', 'iphon.png', 7000, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages', '2022-03-23 20:31:20', '2022-03-26 11:49:34', 112, 1, 2, 3),
(3, 'لاب توب', 'apple 10', '1', 'apple.jpg', 15000, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages', '2022-03-23 20:32:57', '2022-03-23 20:33:45', 43, 1, 2, 2),
(4, 'طماطم', 'tomato', '1', 'tom.jpg', 12, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages', '2022-03-23 20:36:53', '2022-03-23 20:36:53', 3343, 10, NULL, 1),
(5, 'تابليت', 'tablet dell 4', '0', 'tg.jpg', 0, '', 'jac awjcbwac cqwjcb', '2022-03-26 12:01:22', '2022-03-26 12:01:22', 442, 10, 1, 3),
(6, '', 'dell cor 10', '1', 'del2.jpg', 6000, 'جيد', '', '2022-03-26 12:05:51', '2022-03-26 12:05:51', 341, 1, 1, 2),
(8, 'طقم حلل تيفال', 'Tefal cookware set', '1', 'teval.jpg', 1300, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2022-03-26 17:08:16', '2022-03-26 17:08:16', 454, 4, NULL, 6),
(9, 'فاصوليا', 'beans', '1', 'beans.jpg', 23, '', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', '2022-03-26 17:12:56', '2022-03-26 17:14:33', 543, 1, NULL, 7),
(10, 'شاشة توشيبا 32 بوصة', 'Toshiba tv 32ench', '1', 'toshiba.jpg', 6000, '', 'stribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page ', '2022-03-26 17:19:34', '2022-03-26 17:19:34', 556, 1, 4, 5),
(11, 'شاشة إلج 24 بوصة', 'lg tv 24 inch', '1', 'lg.jpg', 5000, '', '', '2022-03-26 17:22:00', '2022-03-26 17:22:00', 898, 1, NULL, 5);

-- --------------------------------------------------------

--
-- بنية الجدول `product_coupon`
--

CREATE TABLE `product_coupon` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `product_offer`
--

CREATE TABLE `product_offer` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(5) NOT NULL,
  `price_after_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `product_order`
--

CREATE TABLE `product_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `product_order`
--

INSERT INTO `product_order` (`order_id`, `product_id`, `total_price`) VALUES
(1, 2, 5678),
(1, 9, 67),
(2, 1, 10000),
(2, 2, 7788),
(2, 8, 3008),
(2, 9, 6778),
(2, 11, 6789),
(3, 4, 67),
(3, 9, 678),
(3, 11, 7866),
(4, 3, 7897),
(5, 1, 671),
(5, 11, 10000),
(6, 9, 788);

-- --------------------------------------------------------

--
-- بنية الجدول `product_review`
--

CREATE TABLE `product_review` (
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `product_review`
--

INSERT INTO `product_review` (`review_id`, `product_id`) VALUES
(1, 2),
(2, 8),
(3, 1),
(9, 2),
(9, 10),
(9, 11),
(10, 1),
(10, 2),
(12, 2),
(12, 3),
(13, 10),
(14, 1),
(14, 2),
(14, 4),
(14, 11);

-- --------------------------------------------------------

--
-- بنية الجدول `product_specs`
--

CREATE TABLE `product_specs` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `specs_id` bigint(20) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` decimal(1,0) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `city_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `regions`
--

INSERT INTO `regions` (`id`, `name`, `status`, `created_at`, `updated_at`, `city_id`) VALUES
(1, 'new_egpypt', '1', '2022-03-26 17:38:53', '2022-03-26 17:38:53', 2),
(5, 'naser_city', '1', '2022-03-26 17:40:21', '2022-03-26 17:40:21', 2),
(6, 'marg', '1', '2022-03-26 17:40:39', '2022-03-26 17:40:39', 2),
(7, 'maamora', '1', '2022-03-26 17:42:05', '2022-03-26 17:42:05', 1),
(8, 'max', '1', '2022-03-26 17:42:27', '2022-03-26 17:42:27', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` tinyint(3) UNSIGNED DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `status` decimal(1,0) NOT NULL DEFAULT 1 COMMENT '0 is not active\r\n1 is active',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `reviews`
--

INSERT INTO `reviews` (`id`, `rate`, `comment`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, '1', 1, '2022-03-26 18:05:50', '2022-03-26 18:05:50'),
(2, 5, 'good', '1', 3, '2022-03-26 18:06:14', '2022-03-26 18:06:14'),
(3, 3, 'good', '1', 2, '2022-03-26 18:06:31', '2022-03-26 18:06:31'),
(9, 5, 'excellent', '1', 1, '2022-03-26 18:10:20', '2022-03-26 18:10:20'),
(10, 4, 'very_good', '1', 4, '2022-03-26 18:12:29', '2022-03-26 18:12:29'),
(11, 4, '', '1', 3, '2022-03-26 18:33:49', '2022-03-26 18:33:49'),
(12, 5, 'good', '1', 1, '2022-03-26 18:34:04', '2022-03-26 18:34:04'),
(13, 2, 'bad', '1', 4, '2022-03-26 18:34:42', '2022-03-26 18:34:42'),
(14, 4, 'good', '1', 4, '2022-03-26 18:35:07', '2022-03-26 18:35:07');

-- --------------------------------------------------------

--
-- بنية الجدول `specs`
--

CREATE TABLE `specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `_key_spcs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 is not active\r\n1 is active',
  `image` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name_ar`, `name_en`, `status`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'طازجة', 'fresh', 1, NULL, '2022-03-23 20:23:03', '2022-03-23 20:23:03', 0),
(2, 'لابتوب', 'laptops', 1, NULL, '2022-03-23 20:23:03', '2022-03-23 20:23:03', 1),
(3, 'موبيلات', 'mobiles', 1, NULL, '2022-03-23 20:23:53', '2022-03-23 20:23:53', 1),
(4, 'ساعات روليكس', 'rolex-whatesh', 1, NULL, '2022-03-23 20:25:18', '2022-03-23 20:25:18', 2),
(5, 'شاشات', 'screens', 1, NULL, '2022-03-26 16:57:54', '2022-03-26 16:57:54', 1),
(6, 'ادوات الطهى', 'cooking utensils', 1, NULL, '2022-03-26 16:59:09', '2022-03-26 16:59:09', 4),
(7, 'بقليات', 'fries', 1, NULL, '2022-03-26 16:59:51', '2022-03-26 16:59:51', 5);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image` varchar(50) DEFAULT '1',
  `password` varchar(50) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `verifiction_code` int(6) DEFAULT NULL,
  `code_expiration` int(3) DEFAULT NULL,
  `ststus` decimal(1,0) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` decimal(1,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `phone`, `image`, `password`, `email_verified_at`, `verifiction_code`, `code_expiration`, `ststus`, `created_at`, `updated_at`, `gender`) VALUES
(1, 'ahmed', 'abdelrahem', '', '01123456789', '1', '123456', '2022-03-25 17:30:07', 32234, 124, '1', '2022-03-26 17:30:53', '2022-03-26 17:30:53', '0'),
(2, 'mohamed ', 'ali', 'mohamed@gimal.com', '01124436789', '1', '345566', '2022-03-23 17:31:12', 67789, 77, '1', '2022-03-26 17:32:55', '2022-03-26 17:32:55', '0'),
(3, 'aya', 'abdo', 'aya@gimal.com', '01133457789', '1', '234451', '2022-03-26 16:33:00', 344234, 33, '1', '2022-03-26 17:34:10', '2022-03-26 17:34:10', '1'),
(4, 'ali', 'ali', 'ali@gimal.com', '01120456789', '1', '127456', '2022-03-23 17:35:12', 78888, 66, '1', '2022-03-26 17:36:58', '2022-03-26 17:36:58', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acsess`
--
ALTER TABLE `acsess`
  ADD PRIMARY KEY (`user_id`,`admin_id`),
  ADD KEY `acsess` (`admin_id`);

--
-- Indexes for table `addersses`
--
ALTER TABLE `addersses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `have` (`region_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `national_id` (`national_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `on_cart` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `discound_id` (`discound_id`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`product_id`,`user_id`),
  ADD KEY `have_fav` (`user_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delived_to` (`adderess_id`),
  ADD KEY `do` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `have_brand` (`brand_id`),
  ADD KEY `product_brand` (`subcategory_id`);

--
-- Indexes for table `product_coupon`
--
ALTER TABLE `product_coupon`
  ADD PRIMARY KEY (`product_id`,`coupon_id`),
  ADD KEY `coupon` (`coupon_id`);

--
-- Indexes for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD PRIMARY KEY (`product_id`,`offer_id`),
  ADD KEY `off_product` (`offer_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `on` (`product_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`review_id`,`product_id`),
  ADD KEY `review_product_r` (`product_id`);

--
-- Indexes for table `product_specs`
--
ALTER TABLE `product_specs`
  ADD PRIMARY KEY (`product_id`,`specs_id`),
  ADD KEY `val_spec` (`specs_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `located_in` (`city_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `re-user` (`user_id`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `verifiction_code` (`verifiction_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addersses`
--
ALTER TABLE `addersses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `acsess`
--
ALTER TABLE `acsess`
  ADD CONSTRAINT `acsess` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acsess_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `addersses`
--
ALTER TABLE `addersses`
  ADD CONSTRAINT `have` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `on_cart` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `have_fav` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `in` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `delived_to` FOREIGN KEY (`adderess_id`) REFERENCES `addersses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `do` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `have_brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_brand` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product_coupon`
--
ALTER TABLE `product_coupon`
  ADD CONSTRAINT `coupon` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_coupon` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- القيود للجدول `product_offer`
--
ALTER TABLE `product_offer`
  ADD CONSTRAINT `off_product` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_offer` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `contain` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `on` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `prroduct_rev` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_product_r` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product_specs`
--
ALTER TABLE `product_specs`
  ADD CONSTRAINT `have_spec` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `val_spec` FOREIGN KEY (`specs_id`) REFERENCES `specs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `located_in` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- القيود للجدول `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `re-user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
