-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 07:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freelance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `firstname`, `lastname`, `address`, `email`, `phone`, `age`, `nationality`, `whatsapp`, `languages`, `work_year`, `freelance`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `image`, `frontimage`, `backimage`, `head`, `name`, `designation`, `title`, `project`, `github`, `fb`, `linkdin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '202307051348aallll-removebg-preview.png', '202307051349202306160918figma-logo.png', '202307051349202306160918photoshop-logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_131009_create_products_table', 1),
(6, '2023_05_27_133311_create_tasks_table', 1),
(7, '2023_06_24_103105_create_messages_table', 2),
(8, '2014_10_12_100000_create_password_resets_table', 3),
(9, '2023_02_22_094025_create_settings_table', 3),
(10, '2023_06_16_083458_create_hero_sections_table', 3),
(11, '2023_06_16_100238_create_servives_table', 3),
(12, '2023_06_16_132230_create_abouts_table', 3),
(13, '2023_06_16_135602_create_skills_table', 3),
(14, '2023_06_17_083301_create_port_types_table', 3),
(15, '2023_06_17_083400_create_portfolios_table', 3),
(16, '2023_06_18_052451_create_contacts_table', 3);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `type_id`, `title`, `desc`, `image`, `project`, `languages`, `client`, `preview`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `port_types`
--

CREATE TABLE `port_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `qty`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241009book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:09:32'),
(4, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241009index2.jpg', '0', '2023-06-24 04:07:02', '2023-06-24 04:09:44'),
(5, 'Adipisci in culpa co', 'Nisi exercitation qu', '100.00', '79.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-08-23 00:48:41'),
(6, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(11, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(12, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(13, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(14, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(15, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(16, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(18, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(19, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(20, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(21, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(22, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(23, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(24, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(25, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(26, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(27, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(28, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(29, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(30, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(31, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(32, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(33, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(34, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(35, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(36, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(37, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(39, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(40, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(41, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(43, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(44, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(45, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(46, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(47, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(48, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(49, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(50, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(51, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '2023-06-24 04:07:09'),
(52, 'Sint temporibus est', 'Provident corporis', '71.00', '23.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:02', '2023-06-24 04:07:02'),
(53, 'Et ut reprehenderit', 'Quam ex possimus na', '32.00', '100.00', 'images/202306241007book.jpg', '1', '2023-06-24 04:07:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `email`, `phone`, `title`, `s_title`, `s_desc`, `a_title`, `sk_title`, `sk_desc`, `p_title`, `p_desc`, `created_at`, `updated_at`) VALUES
(1, '202307051347202305041442WhatsApp_Image_2023-05-04_at_12.14.16-removebg-previewaa.png', '202307051347202305041406icon-removebg-preview.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mdamadul', 'haque', 'mdamadulhaque8@gmail.com', NULL, '$2y$10$83xCDiCwnesL.eodYGFxBOytsfHIXLhmxQpfOBUr8BtSnL4dX96Te', NULL, '2023-07-05 07:46:22', '2023-07-05 07:46:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_types`
--
ALTER TABLE `port_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `port_types`
--
ALTER TABLE `port_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
