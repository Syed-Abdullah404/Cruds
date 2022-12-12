-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 01:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project01`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(129, 'coke', 'com@gmail.com', NULL, NULL),
(130, 'coke', 'com@gmail.com', NULL, NULL),
(131, 'coke', 'com@gmail.com', NULL, NULL),
(132, 'coke', 'com@gmail.com', NULL, NULL),
(133, 'coke', 'com@gmail.com', NULL, NULL),
(134, 'coke', 'com@gmail.com', NULL, NULL),
(135, 'coke', 'com@gmail.com', NULL, NULL),
(136, 'coke', 'com@gmail.com', NULL, NULL),
(137, 'coke', 'com@gmail.com', NULL, NULL),
(138, 'coke', 'com@gmail.com', NULL, NULL),
(139, 'coke', 'com@gmail.com', NULL, NULL),
(140, 'coke', 'com@gmail.com', NULL, NULL),
(141, 'coke', 'com@gmail.com', NULL, NULL),
(142, 'coke', 'com@gmail.com', NULL, NULL),
(143, 'coke', 'com@gmail.com', NULL, NULL),
(144, 'coke', 'com@gmail.com', NULL, NULL),
(145, 'coke', 'com@gmail.com', NULL, NULL),
(146, 'coke', 'com@gmail.com', NULL, NULL),
(147, 'coke', 'com@gmail.com', NULL, NULL),
(148, 'coke', 'com@gmail.com', NULL, NULL),
(149, 'coke', 'com@gmail.com', NULL, NULL),
(150, 'coke', 'com@gmail.com', NULL, NULL),
(151, 'coke', 'com@gmail.com', NULL, NULL),
(152, 'd', 'lk@gmail.com', '2022-11-28 12:46:05', '2022-11-28 12:46:05'),
(153, 'abdullah1', 'admin@gmail.com', '2022-11-28 13:28:48', '2022-11-28 13:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(16, 'asdf', 'leo', 'ali@gmail.com', '+(09)-0078601___', 'coke', '2022-11-17 23:54:13', '2022-12-01 06:15:34'),
(17, 'z', 'd', 'd@gmail.com', '023232', 'coke', '2022-11-28 12:47:02', '2022-11-28 12:47:02'),
(18, 'pak', 'pak', 'pak@gmail.com', '234', 'coke', '2022-11-28 12:48:27', '2022-11-28 12:48:27'),
(20, 'z', 'd', 'admin@gmail.com', '023232', 'coke', '2022-11-28 13:29:11', '2022-11-28 13:29:11'),
(21, 'elif', 'allah', 'admin@gmail.com', '023232', 'coke', '2022-11-28 13:44:02', '2022-11-28 13:44:02'),
(22, 'z', 'd', 'admin@gmail.com', '023232', 'coke', '2022-11-28 13:44:43', '2022-11-28 13:44:43'),
(23, 'sdf', 'd', 'admin@gmail.com', '023232', 'coke', '2022-11-28 13:45:43', '2022-11-28 13:45:43');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`, `updated_at`, `name`) VALUES
(1, 'admin@admin.com', '123', NULL, '2022-11-11 17:12:56', 'abdullah');

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
(5, '2022_11_04_171213_create_login_table', 1),
(6, '2022_11_04_222201_create_company_table', 2),
(7, '2022_11_05_124155_create_employee_table', 3),
(8, '2022_11_15_203206_add_role_as_to_users_table', 4),
(9, '2022_11_22_095101_data', 5),
(10, '2022_11_22_150627_create_todo_table', 5),
(11, '2022_11_23_194142_add_completed_to_todo_table', 6),
(12, '2022_11_23_194511_add_completed_to_todo_table', 7),
(13, '2022_11_26_101103_create_posts_table', 8),
(14, '2022_11_26_211116_add_user_id_to_posts_table', 9),
(15, '2022_11_26_212320_add_user_id_to_posts_table', 10),
(48, '2022_12_01_183627_drop_title_column_from_posts_table', 11),
(49, '2022_12_05_202154_create_jobs_table', 11),
(50, '2022_12_01_152449_drop_title_column_from_posts', 12),
(51, '2022_12_06_095226_create_posts_table', 12),
(55, '2022_12_06_202229_create_notifications_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0f9cbb6f-3085-4319-ae0a-b790f20a056a', 'App\\Notifications\\postNotification', 'App\\Models\\User', 25, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('1454e259-2eb4-4152-806d-2583dfb0d72d', 'App\\Notifications\\postNotification', 'App\\Models\\User', 28, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('17bf32a9-46aa-487f-9553-0e1104f2b276', 'App\\Notifications\\postNotification', 'App\\Models\\User', 16, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('1f239cc1-34c7-4222-b124-6cc8617d59f2', 'App\\Notifications\\postNotification', 'App\\Models\\User', 28, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('2abcf543-bdbf-4072-b5eb-dd1cac6a759e', 'App\\Notifications\\postNotification', 'App\\Models\\User', 27, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('521df479-b205-48c7-bf59-5dcc448828dd', 'App\\Notifications\\postNotification', 'App\\Models\\User', 25, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('544bc87a-5dfd-4bdb-9912-4246b4398343', 'App\\Notifications\\postNotification', 'App\\Models\\User', 26, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('54e729ea-a47e-4cc3-aafe-02ab048eb7f7', 'App\\Notifications\\postNotification', 'App\\Models\\User', 24, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('625fa5e5-4eba-48bf-afb0-f9dcf3252c1a', 'App\\Notifications\\postNotification', 'App\\Models\\User', 20, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('71b538cd-ed09-4375-b072-017624c13d2c', 'App\\Notifications\\postNotification', 'App\\Models\\User', 19, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:49', '2022-12-10 11:32:49'),
('7253f40d-7852-4499-9ead-5e03fccd74a8', 'App\\Notifications\\postNotification', 'App\\Models\\User', 19, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('8c9f99df-05c6-4c49-9e9c-acfaab7fc4a8', 'App\\Notifications\\postNotification', 'App\\Models\\User', 21, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:49', '2022-12-10 11:32:49'),
('8f3e27ea-baa6-4864-a950-191e3aa2722a', 'App\\Notifications\\postNotification', 'App\\Models\\User', 26, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('92026a2e-1e05-474b-81ef-7a4f0548286b', 'App\\Notifications\\postNotification', 'App\\Models\\User', 17, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('975cea29-20b6-4aa9-baf4-d6605971e246', 'App\\Notifications\\postNotification', 'App\\Models\\User', 23, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('9ca52d6e-1f20-40a1-b1a2-f63060d24f0b', 'App\\Notifications\\postNotification', 'App\\Models\\User', 22, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('9f6ab530-8b4a-4450-83b6-99f9a5058bbb', 'App\\Notifications\\postNotification', 'App\\Models\\User', 24, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('aad34013-8f49-4ed3-b21e-8b59b40a3d1d', 'App\\Notifications\\postNotification', 'App\\Models\\User', 20, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:49', '2022-12-10 11:32:49'),
('c5cdd092-3da4-4f1e-832c-4659caaa3b28', 'App\\Notifications\\postNotification', 'App\\Models\\User', 23, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('c8407a57-71d7-4376-9479-f3a44a0c2e08', 'App\\Notifications\\postNotification', 'App\\Models\\User', 16, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:49', '2022-12-10 11:32:49'),
('c9ea907b-b226-4cf9-ad5b-b8c3664bf277', 'App\\Notifications\\postNotification', 'App\\Models\\User', 22, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('e7a8bbaa-8c7a-40a9-b3d8-72ffc6136a69', 'App\\Notifications\\postNotification', 'App\\Models\\User', 27, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:50', '2022-12-10 11:32:50'),
('ee8cbc4e-0875-4523-9f61-4ce2f102d4be', 'App\\Notifications\\postNotification', 'App\\Models\\User', 21, '{\"name\":\"hassan\"}', NULL, '2022-12-09 05:41:19', '2022-12-09 05:41:19'),
('ff11f858-f10d-412e-b58b-5ab80c063b77', 'App\\Notifications\\postNotification', 'App\\Models\\User', 18, '{\"name\":\"ali\"}', NULL, '2022-12-10 11:32:49', '2022-12-10 11:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fix404error@gmail.com', '$2y$10$/s8lVJ92expL622fSVw2LOD0rHPr.ZgDgo2IMLk/t9Hh7TSnS.0lW', '2022-11-12 09:09:14');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(130, 'pakistan', '<p><strong>Pakistan has the fourth largest irrigation system in the world</strong> (Indus Basin). World\'s second largest salt mines (Khewra Mines) are located in Pakistan.&nbsp;</p>', 'pak.jfif', 18, '2022-12-09 05:41:18', '2022-12-09 05:41:18'),
(131, 'hassan', '<p>akjsdfh<strong>akjdshfk<em>akljdsf<span style=\"text-decoration: underline;\">alkjsjhdf</span></em></strong></p>', 'face2.jpg', 17, '2022-12-10 11:32:48', '2022-12-10 11:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `task`, `user_id`, `created_at`, `updated_at`, `completed`) VALUES
(6, 'pa', '17', '2022-11-22 14:03:44', '2022-12-10 11:30:28', 0),
(7, 'hassan', '17', '2022-11-22 14:03:51', '2022-12-10 11:30:43', 0),
(9, 'my name is ali', '17', '2022-11-22 22:24:20', '2022-11-22 22:24:20', 0),
(11, 'df', '17', '2022-11-22 22:27:16', '2022-11-22 22:27:16', 0),
(31, 'Abdullah', '16', '2022-11-24 13:09:38', '2022-11-25 07:50:43', 0),
(33, 'my name is umer', '16', '2022-11-25 07:31:54', '2022-11-25 07:51:15', 0),
(34, 'hammad', '16', '2022-11-25 07:49:20', '2022-11-25 07:51:18', 0),
(35, 'sdf', '16', '2022-11-27 15:45:22', '2022-11-27 15:45:22', 0),
(36, 'sdf', '16', '2022-11-27 15:45:28', '2022-11-27 15:45:28', 0),
(37, 'lkskdjd', '17', '2022-12-10 11:30:24', '2022-12-10 11:30:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(16, 'abdullah', 'admin@gmail.com', NULL, '$2y$10$TT.cJybAHjgotyYAkqyiPuHjYXBMuGp82qLEIg6Ya4O72bIQTFrYe', NULL, '2022-11-22 04:02:40', '2022-12-09 05:09:51', 1),
(17, 'ali', 'ali@gmail.com', NULL, '$2y$10$ahfpLh1UWwZh/yLszOa9jeT/CRxaavs1vDKnXP67//NOorTioGCpm', NULL, '2022-11-22 11:23:52', '2022-12-10 11:32:07', 1),
(18, 'hassan', 'hassan@gmail.com', NULL, '$2y$10$ImThYBdu0aluq1eTkaMt.uA6wnNES7uwnniQM8LRWifx0elnoAkCO', NULL, '2022-12-06 03:42:52', '2022-12-06 03:42:52', 0),
(19, 'noman', 'noman@gmail.com', NULL, '$2y$10$xcrFLB4V2GW.7o7l1m7xr.H7VeGGCu3PQOy6Ilze.CJf6oEQJvqJC', NULL, '2022-12-06 03:43:27', '2022-12-06 03:43:27', 0),
(20, 'ammad', 'ammad@gmail.com', NULL, '$2y$10$kg3WYgvUBzQAbI0CP5M7LelA1IaoYEPsf47VaOztn8IGWy4at8IrW', NULL, '2022-12-06 13:00:22', '2022-12-06 13:00:22', 0),
(21, 'momin', 'momin@gmail.com', NULL, '$2y$10$q.NwtjxEryiC/HUN.RTEZO.tDniFsOWEfhQxBXB5qENz18wT.pIuq', NULL, '2022-12-06 13:00:56', '2022-12-06 13:00:56', 0),
(22, 'umer', 'umer@gmail.com', NULL, '$2y$10$Z6LDsu3F55ZdI8bjRXyvr.eBH87m1NajJtzn8I54B2a.SXFHRnFB.', NULL, '2022-12-06 13:01:38', '2022-12-06 13:01:38', 0),
(23, 'umari', 'umair@gmail.com', NULL, '$2y$10$e8IvdVBkpScHl7iRSThXqudYc7xIM.ZBSrNyBQhm1zKQjl75ENCDW', NULL, '2022-12-06 13:02:29', '2022-12-06 13:02:29', 0),
(24, 'talha', 'talha@gmail.com', NULL, '$2y$10$Tzg6xVVZDTh4/R7FffKgxutOoEvGzsiCvL.rukid2Mf9Qe7.Yiddi', NULL, '2022-12-06 13:03:04', '2022-12-06 13:03:04', 0),
(25, 'ibrahim', 'ibrahim@gmail.com', NULL, '$2y$10$wbfNwHlILOzTaa/HmZF2gedLFKSROGKCNf0q/fGaD4AibmhHy7uiu', NULL, '2022-12-06 13:03:38', '2022-12-06 13:03:38', 0),
(26, 'asim', 'asim@gmail.com', NULL, '$2y$10$q4OEDF6.FO5MCOXBMMG5Duj.iLx3pO3/SZDtN2D2ej5WxcHUzGKJy', NULL, '2022-12-06 13:04:11', '2022-12-06 13:04:11', 0),
(27, 'zohaib', 'zohaib@gmail.com', NULL, '$2y$10$UCDqpiqIAZl3aV5ozOm3keQ4FCLYL8pROtiDnAiBeK3TVuji9AT6W', NULL, '2022-12-06 13:04:47', '2022-12-06 13:04:47', 0),
(28, 'zunair', 'zunair@gmail.com', NULL, '$2y$10$BUPUWRt/O037DCTc4nKV7O66NjCp8CCdtFvpDsuJ./.vdx1KneMbW', NULL, '2022-12-06 13:05:33', '2022-12-06 13:05:33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
