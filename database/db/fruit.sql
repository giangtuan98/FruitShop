-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Dec 24, 2020 at 04:41 PM
-- Server version: 8.0.22
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, NULL),
(2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, NULL),
(3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, NULL),
(4, 2, 4, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, NULL),
(5, 2, 5, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, NULL),
(6, 2, 6, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, NULL),
(7, 2, 7, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, NULL),
(8, 0, 0, 'Product', 'fa-product-hunt', 'products', '*', '2020-12-19 09:34:09', '2020-12-19 09:34:09'),
(9, 0, 0, 'Category', 'fa-bars', 'categories', NULL, '2020-12-19 09:50:48', '2020-12-19 09:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '172.19.0.1', '[]', '2020-12-19 09:32:34', '2020-12-19 09:32:34'),
(2, 1, 'admin/auth/menu', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:33:06', '2020-12-19 09:33:06'),
(3, 1, 'admin/auth/menu', 'POST', '172.19.0.1', '{\"parent_id\":\"0\",\"title\":\"Product\",\"icon\":\"fa-product-hunt\",\"uri\":\"products\",\"roles\":[null],\"permission\":\"*\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\"}', '2020-12-19 09:34:09', '2020-12-19 09:34:09'),
(4, 1, 'admin/auth/menu', 'GET', '172.19.0.1', '[]', '2020-12-19 09:34:09', '2020-12-19 09:34:09'),
(5, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:34:15', '2020-12-19 09:34:15'),
(6, 1, 'admin/products/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:34:18', '2020-12-19 09:34:18'),
(7, 1, 'admin/products/create', 'GET', '172.19.0.1', '[]', '2020-12-19 09:49:10', '2020-12-19 09:49:10'),
(8, 1, 'admin/products/create', 'GET', '172.19.0.1', '[]', '2020-12-19 09:49:49', '2020-12-19 09:49:49'),
(9, 1, 'admin/products/create', 'GET', '172.19.0.1', '[]', '2020-12-19 09:50:09', '2020-12-19 09:50:09'),
(10, 1, 'admin/auth/menu', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:50:24', '2020-12-19 09:50:24'),
(11, 1, 'admin/auth/menu', 'POST', '172.19.0.1', '{\"parent_id\":\"0\",\"title\":null,\"icon\":\"fa-bars\",\"uri\":\"categories\",\"roles\":[null],\"permission\":null,\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\"}', '2020-12-19 09:50:39', '2020-12-19 09:50:39'),
(12, 1, 'admin/auth/menu', 'GET', '172.19.0.1', '[]', '2020-12-19 09:50:39', '2020-12-19 09:50:39'),
(13, 1, 'admin/auth/menu', 'POST', '172.19.0.1', '{\"parent_id\":\"0\",\"title\":\"Category\",\"icon\":\"fa-bars\",\"uri\":\"categories\",\"roles\":[null],\"permission\":null,\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\"}', '2020-12-19 09:50:48', '2020-12-19 09:50:48'),
(14, 1, 'admin/auth/menu', 'GET', '172.19.0.1', '[]', '2020-12-19 09:50:48', '2020-12-19 09:50:48'),
(15, 1, 'admin/categories', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:50:51', '2020-12-19 09:50:51'),
(16, 1, 'admin/categories/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:50:53', '2020-12-19 09:50:53'),
(17, 1, 'admin/categories', 'POST', '172.19.0.1', '{\"name\":\"Vegetable\",\"description\":\"vegetable\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/categories\"}', '2020-12-19 09:54:15', '2020-12-19 09:54:15'),
(18, 1, 'admin/categories', 'GET', '172.19.0.1', '[]', '2020-12-19 09:54:15', '2020-12-19 09:54:15'),
(19, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:54:17', '2020-12-19 09:54:17'),
(20, 1, 'admin/products/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 09:54:20', '2020-12-19 09:54:20'),
(21, 1, 'admin/products', 'POST', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-19 09:55:48', '2020-12-19 09:55:48'),
(22, 1, 'admin/products/create', 'GET', '172.19.0.1', '[]', '2020-12-19 09:55:48', '2020-12-19 09:55:48'),
(23, 1, 'admin/products', 'POST', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\"}', '2020-12-19 09:56:28', '2020-12-19 09:56:28'),
(24, 1, 'admin/products/create', 'GET', '172.19.0.1', '[]', '2020-12-19 09:56:28', '2020-12-19 09:56:28'),
(25, 1, 'admin/products', 'POST', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\"}', '2020-12-19 09:59:14', '2020-12-19 09:59:14'),
(26, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-19 09:59:14', '2020-12-19 09:59:14'),
(27, 1, 'admin/products/1/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 10:42:12', '2020-12-19 10:42:12'),
(28, 1, 'admin/auth/setting', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 11:17:26', '2020-12-19 11:17:26'),
(29, 1, 'admin/products/1/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 11:17:31', '2020-12-19 11:17:31'),
(30, 1, 'admin/products/1/edit', 'GET', '172.19.0.1', '[]', '2020-12-19 11:17:32', '2020-12-19 11:17:32'),
(31, 1, 'admin/products/1', 'PUT', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"is_hot\":\"on\",\"quantity\":\"10000\",\"_token\":\"Mk9dqRVijYnztP9ZFZ9b3eFQErZIjwjmctgsWWbZ\",\"_method\":\"PUT\"}', '2020-12-19 11:18:01', '2020-12-19 11:18:01'),
(32, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-19 11:18:01', '2020-12-19 11:18:01'),
(33, 1, 'admin/products/1/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 15:08:37', '2020-12-19 15:08:37'),
(34, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 15:31:40', '2020-12-19 15:31:40'),
(35, 1, 'admin/products/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 15:31:41', '2020-12-19 15:31:41'),
(36, 1, 'admin/products', 'POST', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u1ea3i b\\u1eafp tr\\u1eafng\",\"unit\":\"B\\u1eafp\",\"unit_price\":\"15000\",\"promotion_price\":\"0\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-18\",\"description\":null,\"is_new\":\"on\",\"is_hot\":\"off\",\"quantity\":\"0\",\"_token\":\"JSYxx12GbbPIWxY5UIGrF6AuhyvMnAEcDjbCmaDf\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-19 15:32:59', '2020-12-19 15:32:59'),
(37, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-19 15:32:59', '2020-12-19 15:32:59'),
(38, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-19 15:33:46', '2020-12-19 15:33:46'),
(39, 1, 'admin/products/2/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-19 15:33:52', '2020-12-19 15:33:52'),
(40, 1, 'admin/products/2', 'PUT', '172.19.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u1ea3i b\\u1eafp tr\\u1eafng\",\"unit\":\"B\\u1eafp\",\"unit_price\":\"15000\",\"promotion_price\":\"0\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-18\",\"description\":null,\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"on\",\"quantity\":\"0\",\"_token\":\"JSYxx12GbbPIWxY5UIGrF6AuhyvMnAEcDjbCmaDf\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-19 15:33:57', '2020-12-19 15:33:57'),
(41, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-19 15:33:57', '2020-12-19 15:33:57'),
(42, 1, 'admin', 'GET', '172.19.0.1', '[]', '2020-12-20 05:58:46', '2020-12-20 05:58:46'),
(43, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 05:58:49', '2020-12-20 05:58:49'),
(44, 1, 'admin/categories', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:01:51', '2020-12-20 06:01:51'),
(45, 1, 'admin/categories/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:01:57', '2020-12-20 06:01:57'),
(46, 1, 'admin/categories', 'POST', '172.19.0.1', '{\"name\":\"Fruit\",\"description\":\"fruit\",\"_token\":\"YKow0HBPrPwW4wUH4SNZCbtfExQNUzwL4b9Q7TMd\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/categories\"}', '2020-12-20 06:02:43', '2020-12-20 06:02:43'),
(47, 1, 'admin/categories', 'GET', '172.19.0.1', '[]', '2020-12-20 06:02:43', '2020-12-20 06:02:43'),
(48, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:03:00', '2020-12-20 06:03:00'),
(49, 1, 'admin/products/create', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:03:04', '2020-12-20 06:03:04'),
(50, 1, 'admin/products', 'POST', '172.19.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-20\",\"promotion_end_date\":\"2020-12-19\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"YKow0HBPrPwW4wUH4SNZCbtfExQNUzwL4b9Q7TMd\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-20 06:06:12', '2020-12-20 06:06:12'),
(51, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-20 06:06:12', '2020-12-20 06:06:12'),
(52, 1, 'admin/products', 'GET', '172.19.0.1', '[]', '2020-12-20 06:19:22', '2020-12-20 06:19:22'),
(53, 1, 'admin/categories', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:20:20', '2020-12-20 06:20:20'),
(54, 1, 'admin/categories/1/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:20:22', '2020-12-20 06:20:22'),
(55, 1, 'admin/categories/1', 'PUT', '172.19.0.1', '{\"name\":\"Vegetables\",\"description\":\"vegetable\",\"_token\":\"YKow0HBPrPwW4wUH4SNZCbtfExQNUzwL4b9Q7TMd\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/categories\"}', '2020-12-20 06:20:25', '2020-12-20 06:20:25'),
(56, 1, 'admin/categories', 'GET', '172.19.0.1', '[]', '2020-12-20 06:20:26', '2020-12-20 06:20:26'),
(57, 1, 'admin/categories/2/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:20:28', '2020-12-20 06:20:28'),
(58, 1, 'admin/categories/2', 'PUT', '172.19.0.1', '{\"name\":\"Fruits\",\"description\":\"fruit\",\"_token\":\"YKow0HBPrPwW4wUH4SNZCbtfExQNUzwL4b9Q7TMd\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/categories\"}', '2020-12-20 06:20:30', '2020-12-20 06:20:30'),
(59, 1, 'admin/categories', 'GET', '172.19.0.1', '[]', '2020-12-20 06:20:30', '2020-12-20 06:20:30'),
(60, 1, 'admin/products', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:25:59', '2020-12-20 06:25:59'),
(61, 1, 'admin/products/2/edit', 'GET', '172.19.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-20 06:26:04', '2020-12-20 06:26:04'),
(62, 1, 'admin', 'GET', '172.25.0.1', '[]', '2020-12-22 15:01:09', '2020-12-22 15:01:09'),
(63, 1, 'admin/products', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:01:14', '2020-12-22 15:01:14'),
(64, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:01:17', '2020-12-22 15:01:17'),
(65, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"1\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:02:10', '2020-12-22 15:02:10'),
(66, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"2\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:02:12', '2020-12-22 15:02:12'),
(67, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"is_hot\":\"on\",\"is_coming_soon\":\"off\",\"quantity\":\"10000\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 15:02:33', '2020-12-22 15:02:33'),
(68, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:02:33', '2020-12-22 15:02:33'),
(69, 1, 'admin/products/2/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:02:39', '2020-12-22 15:02:39'),
(70, 1, 'admin/products/2', 'PUT', '172.25.0.1', '{\"key\":\"3\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:02:51', '2020-12-22 15:02:51'),
(71, 1, 'admin/products/2', 'PUT', '172.25.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u1ea3i b\\u1eafp tr\\u1eafng\",\"unit\":\"B\\u1eafp\",\"unit_price\":\"15000\",\"promotion_price\":\"0\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-18\",\"description\":null,\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"on\",\"quantity\":\"0\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 15:02:53', '2020-12-22 15:02:53'),
(72, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:02:53', '2020-12-22 15:02:53'),
(73, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:02:55', '2020-12-22 15:02:55'),
(74, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"key\":\"4\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:03:06', '2020-12-22 15:03:06'),
(75, 1, 'admin/products/3', 'GET', '172.25.0.1', '[]', '2020-12-22 15:03:18', '2020-12-22 15:03:18'),
(76, 1, 'admin', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:03:27', '2020-12-22 15:03:27'),
(77, 1, 'admin/products', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:03:28', '2020-12-22 15:03:28'),
(78, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:03:31', '2020-12-22 15:03:31'),
(79, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-20\",\"promotion_end_date\":\"2020-12-19\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 15:03:43', '2020-12-22 15:03:43'),
(80, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:03:44', '2020-12-22 15:03:44'),
(81, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:05:24', '2020-12-22 15:05:24'),
(82, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:05:27', '2020-12-22 15:05:27'),
(83, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"5\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:05:35', '2020-12-22 15:05:35'),
(84, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"6\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:05:38', '2020-12-22 15:05:38'),
(85, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"7\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:05:41', '2020-12-22 15:05:41'),
(86, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '[]', '2020-12-22 15:06:26', '2020-12-22 15:06:26'),
(87, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '[]', '2020-12-22 15:06:43', '2020-12-22 15:06:43'),
(88, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"key\":\"8\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:07:01', '2020-12-22 15:07:01'),
(89, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-22\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"is_hot\":\"on\",\"is_coming_soon\":\"off\",\"quantity\":\"10000\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:07:04', '2020-12-22 15:07:04'),
(90, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:07:04', '2020-12-22 15:07:04'),
(91, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:07:06', '2020-12-22 15:07:06'),
(92, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '[]', '2020-12-22 15:09:09', '2020-12-22 15:09:09'),
(93, 1, 'admin/products', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:09:14', '2020-12-22 15:09:14'),
(94, 1, 'admin/products/2/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:09:18', '2020-12-22 15:09:18'),
(95, 1, 'admin/products/2', 'PUT', '172.25.0.1', '{\"key\":\"9\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:09:31', '2020-12-22 15:09:31'),
(96, 1, 'admin/products/2', 'PUT', '172.25.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u1ea3i b\\u1eafp tr\\u1eafng\",\"unit\":\"B\\u1eafp\",\"unit_price\":\"15000\",\"promotion_price\":\"0\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-18\",\"description\":null,\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"on\",\"quantity\":\"0\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 15:09:34', '2020-12-22 15:09:34'),
(97, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:09:35', '2020-12-22 15:09:35'),
(98, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 15:09:37', '2020-12-22 15:09:37'),
(99, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"key\":\"10\",\"images\":\"_file_del_\",\"_file_del_\":null,\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\"}', '2020-12-22 15:09:50', '2020-12-22 15:09:50'),
(100, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-20\",\"promotion_end_date\":\"2020-12-19\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 15:09:53', '2020-12-22 15:09:53'),
(101, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 15:09:54', '2020-12-22 15:09:54'),
(102, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-22 17:05:22', '2020-12-22 17:05:22'),
(103, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-20\",\"promotion_end_date\":\"2020-12-24\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"on\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-22 17:05:33', '2020-12-22 17:05:33'),
(104, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-22 17:05:33', '2020-12-22 17:05:33'),
(105, 1, 'admin/products/1/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 00:37:11', '2020-12-23 00:37:11'),
(106, 1, 'admin/products/1', 'PUT', '172.25.0.1', '{\"category_id\":\"1\",\"name\":\"C\\u00e0 chua\",\"unit\":\"Qu\\u1ea3\",\"unit_price\":\"12000\",\"promotion_price\":\"10000\",\"promotion_start_date\":\"2020-12-18\",\"promotion_end_date\":\"2020-12-20\",\"description\":\"C\\u00e0 chua nam \\u0111inhj\",\"is_new\":\"on\",\"is_hot\":\"on\",\"is_coming_soon\":\"off\",\"quantity\":\"10000\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 00:37:20', '2020-12-23 00:37:20'),
(107, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 00:37:20', '2020-12-23 00:37:20'),
(108, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 00:37:53', '2020-12-23 00:37:53'),
(109, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-19\",\"promotion_end_date\":\"2020-12-23\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"off\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"2DQLKqXxtChDyymOHZrhQP8tgCAksZYgxS65aJY9\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 00:37:58', '2020-12-23 00:37:58'),
(110, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 00:37:58', '2020-12-23 00:37:58'),
(111, 1, 'admin', 'GET', '172.25.0.1', '[]', '2020-12-23 22:39:36', '2020-12-23 22:39:36'),
(112, 1, 'admin/products', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:39:39', '2020-12-23 22:39:39'),
(113, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:39:43', '2020-12-23 22:39:43'),
(114, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"40000\",\"promotion_start_date\":\"2020-12-18\",\"promotion_end_date\":\"2020-12-25\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"off\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"e8WacKTlOgKQjWAAsKk92q6FvVxEEDDMPdGjvy72\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 22:39:51', '2020-12-23 22:39:51'),
(115, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 22:39:52', '2020-12-23 22:39:52'),
(116, 1, 'admin/products/2/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:40:11', '2020-12-23 22:40:11'),
(117, 1, 'admin/products', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:40:13', '2020-12-23 22:40:13'),
(118, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:40:16', '2020-12-23 22:40:16'),
(119, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"35000\",\"promotion_start_date\":\"2020-12-17\",\"promotion_end_date\":\"2020-12-24\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"off\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"e8WacKTlOgKQjWAAsKk92q6FvVxEEDDMPdGjvy72\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 22:40:24', '2020-12-23 22:40:24'),
(120, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 22:40:24', '2020-12-23 22:40:24'),
(121, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:40:36', '2020-12-23 22:40:36'),
(122, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"11000\",\"promotion_start_date\":\"2020-12-16\",\"promotion_end_date\":\"2020-12-23\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"off\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"e8WacKTlOgKQjWAAsKk92q6FvVxEEDDMPdGjvy72\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 22:40:42', '2020-12-23 22:40:42'),
(123, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 22:40:42', '2020-12-23 22:40:42'),
(124, 1, 'admin/products/3/edit', 'GET', '172.25.0.1', '{\"_pjax\":\"#pjax-container\"}', '2020-12-23 22:40:54', '2020-12-23 22:40:54'),
(125, 1, 'admin/products/3', 'PUT', '172.25.0.1', '{\"category_id\":\"2\",\"name\":\"Nh\\u00e3n l\\u1ed3ng h\\u01b0ng y\\u00ean\",\"unit\":\"Kg\",\"unit_price\":\"40000\",\"promotion_price\":\"11000\",\"promotion_start_date\":\"2020-12-15\",\"promotion_end_date\":\"2020-12-25\",\"description\":\"Nh\\u00e3n  c\\u00f3 t\\u00ean khoa h\\u1ecdc l\\u00e0 Dimocarpus longan, ti\\u1ebfng h\\u00e1n vi\\u1ec7t g\\u1ecdi l\\u00e0 \\u201clong nh\\u00e3n\\u201d. \\u0110\\u00e2y l\\u00e0 m\\u1ed9t lo\\u1ea1i tr\\u00e1i c\\u00e2y \\u0111i\\u1ec3n h\\u00ecnh c\\u1ee7a v\\u00f9ng nhi\\u1ec7t \\u0111\\u1edbi thu\\u1ed9c th\\u00e2n g\\u1ed7, s\\u1ed1ng l\\u00e2u n\\u0103m. Theo t\\u1ed5ng h\\u1ee3p t\\u1eeb c\\u00e1c \\u0111\\u1ecba ph\\u01b0\\u01a1ng, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean l\\u00e0 n\\u01a1i c\\u00f3 di\\u1ec7n t\\u00edch tr\\u1ed3ng l\\u1edbn nh\\u1ea5t v\\u00e0 cho ch\\u1ea5t l\\u01b0\\u1ee3ng nh\\u00e3n ngon nh\\u1ea5t, hi\\u1ec7n nay H\\u01b0ng Y\\u00ean c\\u00f3 g\\u1ea7n 4 ngh\\u00ecn ha nh\\u00e3n, trong \\u0111\\u00f3, di\\u1ec7n t\\u00edch cho thu ho\\u1ea1ch kho\\u1ea3ng 3 ngh\\u00ecn ha.\\r\\n\\r\\nN\\u0103m nay, s\\u1ea3n l\\u01b0\\u1ee3ng nh\\u00e3n l\\u1ed3ng to\\u00e0n t\\u1ec9nh \\u01b0\\u1edbc \\u0111\\u1ea1t 30 ngh\\u00ecn t\\u1ea5n, t\\u1eadp trung ch\\u1ee7 y\\u1ebfu \\u1edf x\\u00e3 H\\u1ed3ng Nam v\\u00e0 huy\\u1ec7n Kho\\u00e1i Ch\\u00e2u. H\\u01b0ng Y\\u00ean \\u0111\\u01b0\\u1ee3c coi l\\u00e0 c\\u00e1i n\\u00f4i c\\u1ee7a nh\\u00e3n l\\u1ed3ng ti\\u1ebfn vua n\\u1ed5i ti\\u1ebfng. N\\u01a1i \\u0111\\u00e2y v\\u1eabn gi\\u1eef \\u0111\\u01b0\\u1ee3c gi\\u1ed1ng nh\\u00e3n l\\u1ed3ng g\\u1ed1c, cho h\\u01b0\\u01a1ng v\\u1ecb ngon nh\\u1ea5t, c\\u00f9i d\\u1ea7y gi\\u00f2n, v\\u1ecb ng\\u1ecdt s\\u1eafc, h\\u01b0\\u01a1ng th\\u01a1m kh\\u00f3 qu\\u00ean. H\\u1ea1t nh\\u00e3n nh\\u1ecf v\\u00e0 d\\u00f3c, s\\u1eafc \\u0111en \\u00e1nh n\\u00e2u \\u0111\\u1ecf.\",\"is_new\":\"off\",\"is_hot\":\"off\",\"is_coming_soon\":\"off\",\"quantity\":\"100\",\"_token\":\"e8WacKTlOgKQjWAAsKk92q6FvVxEEDDMPdGjvy72\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/fruit.test\\/admin\\/products\"}', '2020-12-23 22:41:01', '2020-12-23 22:41:01'),
(126, 1, 'admin/products', 'GET', '172.25.0.1', '[]', '2020-12-23 22:41:01', '2020-12-23 22:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2020-12-19 09:32:08', '2020-12-19 09:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$ZQQvFKqehqd7TVFbAaFW1uMIRoEMIO9OrnTExzRWusiMsSAElbkRK', 'Administrator', NULL, 'BcvJuGLB3Fj8f3ujLe2MN5JVoWRo6zMpBmrg4GVuvE6QOqwApqh5OdTGKVon', '2020-12-19 09:32:08', '2020-12-19 09:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `picture`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Vegetables', 'images/vege.jpeg', 'vegetable', NULL, '2020-12-19 09:54:15', '2020-12-20 06:20:25'),
(2, 'Fruits', 'images/fruit.jpeg', 'fruit', NULL, '2020-12-20 06:02:43', '2020-12-20 06:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `imageable_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(11, '1', 'App\\Models\\Product', 'images/8cf25115c8e4bda5a3aa2e214bc2e83b.png', NULL, '2020-12-22 15:07:04', '2020-12-22 15:07:04'),
(12, '2', 'App\\Models\\Product', 'images/1d33e7df8c1a162a0c2ec819ae03f5cf.png', NULL, '2020-12-22 15:09:35', '2020-12-22 15:09:35'),
(13, '2', 'App\\Models\\Product', 'images/1f7428e7700b663072b32e63470fd6f0.png', NULL, '2020-12-22 15:09:35', '2020-12-22 15:09:35'),
(14, '3', 'App\\Models\\Product', 'images/69e3f9840a36170d4fa45e99d11cb2ae.jpg', NULL, '2020-12-22 15:09:54', '2020-12-22 15:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_01_04_173148_create_admin_tables', 1),
(2, '2020_12_03_145808_create_categories_table', 1),
(3, '2020_12_03_150327_create_images_table', 1),
(4, '2020_12_03_150502_create_products_table', 1),
(5, '2020_12_03_151434_create_orders_table', 1),
(6, '2020_12_03_151846_create_order_details_table', 1),
(7, '2020_12_03_152115_create_sale_codes_table', 1),
(10, '2020_12_19_093558_add_is_new_column_to_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_info` json NOT NULL,
  `total` bigint NOT NULL,
  `total_after_sale` bigint NOT NULL,
  `sale_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` tinyint NOT NULL,
  `unit_price` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` bigint UNSIGNED NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `promotion_price` bigint UNSIGNED NOT NULL,
  `promotion_start_date` date NOT NULL,
  `promotion_end_date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `is_coming_soon` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` bigint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit_price`, `unit`, `category_id`, `promotion_price`, `promotion_start_date`, `promotion_end_date`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`, `is_new`, `is_hot`, `is_coming_soon`, `quantity`) VALUES
(1, 'Cà chua', 12000, 'Quả', 1, 10000, '2020-12-18', '2020-12-20', 'Cà chua nam đinhj', 'images/53171f1b16acb1047f1403c51c5a47bd.png', NULL, '2020-12-19 09:59:14', '2020-12-23 00:37:20', 1, 1, 0, 10000),
(2, 'Cải bắp trắng', 15000, 'Bắp', 1, 0, '2020-12-19', '2020-12-18', NULL, 'images/1d33e7df8c1a162a0c2ec819ae03f5cf.png', NULL, '2020-12-19 15:32:59', '2020-12-22 15:02:53', 1, 0, 1, 0),
(3, 'Nhãn lồng hưng yên', 40000, 'Kg', 2, 11000, '2020-12-15', '2020-12-25', 'Nhãn  có tên khoa học là Dimocarpus longan, tiếng hán việt gọi là “long nhãn”. Đây là một loại trái cây điển hình của vùng nhiệt đới thuộc thân gỗ, sống lâu năm. Theo tổng hợp từ các địa phương, hiện nay Hưng Yên là nơi có diện tích trồng lớn nhất và cho chất lượng nhãn ngon nhất, hiện nay Hưng Yên có gần 4 nghìn ha nhãn, trong đó, diện tích cho thu hoạch khoảng 3 nghìn ha.\r\n\r\nNăm nay, sản lượng nhãn lồng toàn tỉnh ước đạt 30 nghìn tấn, tập trung chủ yếu ở xã Hồng Nam và huyện Khoái Châu. Hưng Yên được coi là cái nôi của nhãn lồng tiến vua nổi tiếng. Nơi đây vẫn giữ được giống nhãn lồng gốc, cho hương vị ngon nhất, cùi dầy giòn, vị ngọt sắc, hương thơm khó quên. Hạt nhãn nhỏ và dóc, sắc đen ánh nâu đỏ.', 'images/nhan-long-hung-yen-co-mau-vang-sam-da-tron-bong.jpg', NULL, '2020-12-20 06:06:12', '2020-12-23 22:41:01', 0, 0, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sale_codes`
--

CREATE TABLE `sale_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_price_require` bigint NOT NULL,
  `max_price_require` bigint NOT NULL,
  `type` tinyint NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_price_reduce` int NOT NULL,
  `amount_reduce` int NOT NULL,
  `type_reduce` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_codes`
--
ALTER TABLE `sale_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sale_codes_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale_codes`
--
ALTER TABLE `sale_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
