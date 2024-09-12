-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 02:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Ali', 'admin@gmail.com', '$2y$10$ePd4.dkXo4B1OUaPQj2VROSqW9Nz1v2XMVKXuTFA/SHJzj06EqpBa', '+1 (843) 653-4191', NULL, 'in9iYTd8w7', '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(2, 'Admin Fatima', 'admin1@gmail.com', '$2y$10$ePd4.dkXo4B1OUaPQj2VROSqW9Nz1v2XMVKXuTFA/SHJzj06EqpBa', '(551) 725-9052', NULL, 'y1euDlO1Wvnww2id8nQx05GdHX5MdbyN6qcwmhnHpGXO6vqYo2bot1cD3Ofu', '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(3, 'Destinee Ward DDS', 'margarita.rolfson@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '(660) 364-8683', NULL, 'P7tHwNvoiw', '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(4, 'Dr. Lauretta Quitzon', 'alexander28@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+18025655751', NULL, 'g1kIvXZRgS', '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(5, 'Mrs. Joana Becker Sr.', 'davis.margarete@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '386-779-5232', NULL, 'X34U8CHstP', '2024-08-25 13:19:48', '2024-08-25 13:19:48');

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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Male', 1, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(2, 'feMale', 1, '2024-08-25 13:19:48', '2024-08-25 13:19:48');

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
(5, '2024_08_22_165117_create_admins_table', 1),
(6, '2024_08_22_175352_create_patients_table', 1),
(7, '2024_08_22_182223_create_students_table', 1),
(8, '2024_08_22_183137_create_genders_table', 1),
(9, '2024_08_22_184648_create_services_table', 1),
(10, '2024_08_22_185121_create_universities_table', 1),
(11, '2024_08_22_190323_create_orders_table', 1),
(12, '2024_08_23_072117_create_bloods_table', 1),
(13, '2024_08_23_082614_create_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `patient_id` int(11) NOT NULL DEFAULT 1,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `date` date DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `patient_id`, `status_id`, `date`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 4, '2024-09-10', 1, '2024-08-25 12:22:07', '2024-09-05 00:02:24'),
(2, 2, 7, 2, '2024-09-10', 0, '2024-08-17 12:22:31', '2024-09-05 00:02:46'),
(3, 3, 9, 3, '2024-09-10', 0, '2024-08-25 12:22:09', '2024-09-05 00:02:49'),
(4, 6, 9, 3, '2024-09-10', 0, '2024-08-28 12:22:28', '2024-09-05 00:03:32'),
(5, 1, 2, 4, '2024-09-21', 0, '2024-08-02 12:22:25', '2024-09-05 00:05:00'),
(6, 6, 8, 3, '2024-09-10', 0, '2024-08-15 12:22:21', '2024-09-05 00:02:51'),
(7, 5, 9, 3, '2024-09-10', 0, '2024-08-20 12:22:36', '2024-09-05 00:02:43'),
(8, 6, 10, 2, '2024-09-10', 1, '2024-08-09 12:22:44', '2024-09-05 00:02:40'),
(9, 4, 1, 3, '2024-09-10', 1, '2024-08-25 12:22:39', '2024-09-05 00:02:37'),
(10, 7, 4, 2, '2024-09-10', 0, '2024-08-14 12:22:41', '2024-09-05 00:02:35'),
(11, 2, 5, 1, '2024-09-10', 0, '2024-08-27 10:00:23', '2024-09-05 00:02:31'),
(12, 4, 4, 1, '2024-09-10', 0, '2024-08-27 10:02:21', '2024-09-05 00:02:54'),
(13, 3, 2, 1, '2024-09-22', 0, '2024-08-27 10:04:56', '2024-09-05 00:04:33'),
(14, 2, 3, 4, '2024-09-10', 0, '2024-08-27 10:06:26', '2024-09-05 00:03:59'),
(15, 5, 1, 3, '2024-09-02', 0, '2024-08-27 10:06:51', '2024-09-05 00:15:59'),
(16, 5, 1, 1, '2024-09-22', 0, '2024-08-27 10:07:05', '2024-09-05 00:04:42'),
(17, 2, 3, 1, '2024-09-19', 1, '2024-08-28 10:40:44', '2024-09-05 00:04:10'),
(18, 2, 3, 2, '2024-09-10', 1, '2024-08-28 10:59:07', '2024-09-05 00:15:21'),
(19, 1, 5, 2, '2024-09-10', 0, '2024-09-03 10:11:45', '2024-09-05 00:15:18'),
(20, 1, 5, 1, '2024-09-14', 0, '2024-09-03 10:12:51', '2024-09-05 00:04:20'),
(21, 5, 1, 2, '2024-09-02', 0, '2024-09-03 10:22:01', '2024-09-05 00:15:41'),
(22, 5, 1, 1, '2024-09-24', 0, '2024-09-03 10:24:28', '2024-09-05 00:04:26'),
(23, 4, 1, 2, '2024-09-10', 0, '2024-09-03 10:26:13', '2024-09-05 00:15:38'),
(24, 3, 1, 1, '2024-09-10', 0, '2024-09-03 10:27:48', '2024-09-05 00:03:36'),
(25, 2, 1, 2, '2024-09-10', 0, '2024-09-03 10:31:08', '2024-09-05 00:15:48'),
(26, 6, 1, 3, '2024-09-17', 0, '2024-09-03 10:33:21', '2024-09-05 00:15:45'),
(27, 4, 1, 1, '2024-09-28', 0, '2024-09-03 10:41:09', NULL),
(28, 11, 1, 2, '2024-09-22', 0, '2024-09-03 11:02:12', '2024-09-05 00:15:26'),
(29, 8, 1, 1, '2024-09-24', 0, '2024-09-04 00:17:36', NULL),
(30, 8, 1, 3, '2024-09-24', 0, '2024-09-04 00:22:40', '2024-09-05 00:15:29'),
(31, 11, 1, 3, '2024-12-16', 0, '2024-09-04 00:32:47', '2024-09-05 00:15:33'),
(32, 3, 1, 1, '2024-10-22', 0, '2024-09-04 00:45:50', NULL),
(33, 10, 1, 2, '2024-09-16', 0, '2024-09-04 00:53:27', '2024-09-05 00:15:35'),
(34, 7, 1, 1, '2024-09-29', 0, '2024-09-04 01:04:17', NULL),
(35, 11, 2, 3, '2024-09-16', 0, '2024-09-04 01:19:38', '2024-09-05 00:15:52'),
(36, 11, 1, 4, '2024-09-29', 0, '2024-09-05 00:16:45', '2024-09-05 00:18:46'),
(37, 10, 1, 1, '2024-10-22', 0, '2024-09-05 00:21:06', NULL),
(38, 7, 1, 1, '2024-09-24', 0, '2024-09-05 00:37:57', NULL),
(39, 9, 1, 2, '2024-09-22', 0, '2024-09-05 00:42:56', '2024-09-05 00:45:12'),
(40, 8, 19, 4, '2024-09-14', 0, '2024-09-06 10:02:11', '2024-09-06 10:23:21'),
(41, 2, 19, 3, '2024-09-29', 0, '2024-09-06 10:22:44', '2024-09-06 10:23:34'),
(42, 2, 19, 3, '2024-10-29', 0, '2024-09-06 10:26:04', '2024-09-06 12:47:34'),
(43, 9, 19, 1, '2024-09-24', 0, '2024-09-06 12:52:58', NULL),
(44, 13, 19, 1, '2024-09-21', 0, '2024-09-06 13:04:34', NULL),
(45, 4, 19, 1, '2024-10-17', 0, '2024-09-06 13:06:54', NULL),
(46, 2, 2, 1, NULL, 0, '2024-09-06 13:20:45', NULL),
(47, 2, 3, 1, NULL, 0, '2024-09-06 13:21:29', NULL),
(48, 11, 19, 1, '2024-09-23', 0, '2024-09-06 13:21:57', NULL),
(49, 2, 3, 1, NULL, 0, '2024-09-06 13:28:05', NULL),
(50, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:28:51', NULL),
(51, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:29:12', NULL),
(52, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:30:44', NULL),
(53, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:31:09', NULL),
(54, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:31:55', NULL),
(55, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:32:45', NULL),
(56, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:33:20', NULL),
(57, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:35:04', NULL),
(58, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:35:32', NULL),
(59, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:36:54', NULL),
(60, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:37:12', NULL),
(61, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:37:44', NULL),
(62, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:39:13', NULL),
(63, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:39:39', NULL),
(64, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:40:09', NULL),
(65, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:40:31', NULL),
(66, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:41:01', NULL),
(67, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:41:34', NULL),
(68, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:41:43', NULL),
(69, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:46:03', NULL),
(70, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:47:54', NULL),
(71, 2, 3, 1, '2024-09-19', 0, '2024-09-06 13:48:45', NULL),
(72, 4, 5, 1, '2024-09-19', 0, '2024-09-06 23:32:42', NULL),
(73, 14, 19, 1, '2024-09-23', 0, '2024-09-07 00:15:03', NULL),
(74, 12, 22, 2, '2024-09-18', 0, '2024-09-07 00:23:46', '2024-09-07 00:24:21'),
(75, 8, 22, 3, '2024-09-24', 0, '2024-09-07 00:24:58', '2024-09-07 00:25:43'),
(76, 5, 22, 3, '2024-09-17', 0, '2024-09-07 00:25:17', '2024-09-07 00:25:35'),
(77, 13, 22, 1, '2024-09-17', 0, '2024-09-07 00:27:52', NULL),
(78, 2, 22, 1, '2024-09-17', 0, '2024-09-07 00:29:23', NULL),
(79, 13, 19, 1, '2024-09-17', 0, '2024-09-07 00:30:13', NULL),
(80, 14, 19, 1, '2024-09-17', 0, '2024-09-07 00:30:25', NULL);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barth_date` date NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `title`, `phone`, `email`, `barth_date`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Osman Ahmed', 'Khartoum', '0922228334', 'admin@gmail.com', '2012-10-22', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(2, 'Geovanni Schroeder', 'Jillian Moen', '+1 (440) 343-5154', 'admin2@gmail.com', '1974-05-31', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(3, 'Prof. Hazel Toy Sr.', 'Rodger McClure', '434-282-5014', 'corene86@example.net', '2019-04-12', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(4, 'Dr. Edythe Greenfelder', 'Mr. Ezequiel Padberg', '(332) 515-9930', 'norberto80@example.org', '2005-09-26', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(5, 'Mrs. Thelma Langosh', 'Jolie Lemke', '+1-475-586-5285', 'qreynolds@example.org', '1996-05-15', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(6, 'Jude Kling', 'Grady Bode', '1510378360', 'armstrong.lucie@example.net', '2022-10-26', 0, '2024-08-25 13:19:48', '2024-08-25 18:42:13'),
(7, 'Miss Alivia Wilderman', 'Nola Cormier', '1-820-809-7540', 'marlene11@example.org', '2012-02-21', 0, '2024-08-25 13:19:48', '2024-09-02 08:37:17'),
(8, 'Colin Larson II', 'Mr. Jeffry Gottlieb MD', '256.959.0181', 'edeckow@example.com', '2006-06-12', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(9, 'Dr. Edd Mosciski I', 'Aaron Upton', '754-304-6072', 'maxine.luettgen@example.org', '1992-08-21', 0, '2024-08-25 13:19:48', '2024-09-02 08:41:28'),
(10, 'Dr. Jada Hoppe MD', 'Kasey Stiedemann', '0909392323', 'nsmitham@example.org', '1994-04-28', 0, '2024-08-25 13:19:48', '2024-09-02 08:41:23'),
(11, 'Kja Kan', 'jhhsdsd', '0977744645', 'admin787@gmail.com', '1974-05-31', 0, '2024-08-27 00:52:57', '2024-08-27 00:52:57'),
(12, 'Lkmja', 'hgdgdg', '0977744600', 'admin0909@gmail.com', '1974-05-31', 0, '2024-08-27 00:55:51', '2024-09-02 08:41:17'),
(13, 'Kamala', 'hgdnhuh', '0977744607', 'admin6650909@gmail.com', '1974-05-31', 0, '2024-08-27 01:01:37', '2024-08-27 01:01:37'),
(15, 'Kamala Req', 'Register', '0977741107', 'admin611109@gmail.com', '2002-04-23', 0, '2024-08-28 08:57:27', '2024-09-01 18:26:59'),
(16, 'Fouad Mohamed', 'khartoum', '099992222', 'admin990@gamil.com', '2019-04-12', 0, '2024-08-28 09:17:09', '2024-09-01 18:04:57'),
(17, 'Al-Smah Osman Ali', 'Khartoum', '0999847465', 'admin0009@gmail.com', '2005-09-29', 0, '2024-09-01 18:18:35', '2024-09-01 18:18:35'),
(18, 'Foud Mohamed', 'hdudjkfkfkf', '5767686786', 'dmohamed2@gmail.com', '2024-09-17', 0, '2024-09-04 02:16:44', '2024-09-04 02:16:44'),
(19, 'Ahmed Amen', 'Khartoum', '0900000055', 'ahmed90@gmail.com', '2024-09-19', 0, '2024-09-06 10:57:23', '2024-09-06 10:57:23'),
(21, 'Hassan Osman', 'Khartoum', '0994646454', 'hasaan99@gmail.com', '2024-05-13', 0, '2024-09-06 11:27:52', '2024-09-06 11:27:52'),
(22, 'Kahlid Taha', 'Khartoum', '0111464648', 'khalid123@gmail.com', '2024-02-15', 0, '2024-09-07 01:22:48', '2024-09-07 01:22:48'),
(23, 'Fatima Mohamed', 'Bahry', '0900000000', 'fatima@gmail.com', '2023-03-14', 0, '2024-09-07 01:27:07', '2024-09-07 01:27:07');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'تركيبات الأسنان الثابتة', 0, '2024-08-25 13:19:48', '2024-09-07 01:19:35'),
(2, 'تقويم أسناني', 0, '2024-08-25 13:19:48', '2024-09-07 01:18:26'),
(3, 'زراعة الأسنان', 0, '2024-08-25 13:19:48', '2024-09-07 01:17:42'),
(4, 'تبيض اسنان', 0, '2024-08-25 13:19:48', '2024-09-02 08:32:40'),
(5, 'نظافة أسنان', 0, '2024-08-25 13:19:48', '2024-08-25 17:51:00'),
(6, 'حشو عصب', 0, '2024-08-25 16:06:43', '2024-08-25 16:06:43'),
(7, 'خلع اضراس', 0, '2024-08-25 17:53:36', '2024-09-06 11:18:41'),
(8, 'فحص الفم والأسنان', 0, '2024-09-07 01:02:55', '2024-09-07 01:02:55'),
(9, 'تنظيف الأسنان الاحترافي (إزالة الجير وتلميع الأسنان)', 0, '2024-09-07 01:04:09', '2024-09-07 01:04:09'),
(10, 'الاستشارات التغذوية', 0, '2024-09-07 01:04:54', '2024-09-07 01:04:54'),
(11, 'العلاج الموضعي بالفلورايد', 0, '2024-09-07 01:05:10', '2024-09-07 01:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'طلب جديد', 1, '2024-08-25 13:19:48', '2024-08-25 18:15:48'),
(2, 'قيد الانتظار', 1, '2024-08-25 13:19:48', '2024-08-26 14:27:27'),
(3, 'تم الإلغاء', 1, '2024-08-25 13:19:48', '2024-08-26 14:27:38'),
(4, 'تمت المقابله', 1, '2024-08-25 18:17:06', '2024-08-25 18:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `phone`, `address`, `specialization`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Rickie Hills', '(971) 903-5016', 'Prof. Kaya Walsh II', 'Deron Dickinson', 0, '2024-08-25 13:19:48', '2024-08-25 13:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `gender_id` int(10) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `title`, `phone`, `service_id`, `gender_id`, `is_deleted`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rayan User', 'admin1@gmail.com', 'Oren Olson', '(818) 788-9818', 1, 1, 0, '2024-08-25 13:19:48', '$2y$10$ePd4.dkXo4B1OUaPQj2VROSqW9Nz1v2XMVKXuTFA/SHJzj06EqpBa', 'zQaakTb8go', '2024-08-25 13:19:48', '2024-08-25 13:19:48'),
(2, 'Fatima Docotr', 'admin@gmail.com', 'Nola Stanton', '1-434-224-5490', 7, 1, 1, '2024-08-25 13:19:48', '$2y$10$ePd4.dkXo4B1OUaPQj2VROSqW9Nz1v2XMVKXuTFA/SHJzj06EqpBa', 'kevzO8MjTND4Gnph23lWMnP39RuGVvRDHcPOqN1mkQ6WPrUGUW2vHfI23RG4', '2024-08-25 13:19:48', '2024-09-03 09:47:31'),
(3, 'Ehsan ALtag', 'Ehsan.alanis@example.org', 'Kassandra Dare DVM', '401-696-4404', 3, 2, 0, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'C5RHf1afHx', '2024-08-25 13:19:48', '2024-09-03 09:49:19'),
(4, 'Manal Kaml', 'smitham.tony@example.com', 'Prof. Sydnee Gottlieb', '228-827-6091', 5, 1, 1, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'riYAL9hKN7', '2024-08-25 13:19:48', '2024-09-03 09:48:18'),
(5, 'Omer Mohamed', 'roob.maribel@example.com', 'Dr. Abel Lindgren MD', '458-351-4674', 10, 1, 1, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eiRcP98O2Z', '2024-08-25 13:19:48', '2024-09-03 09:48:41'),
(6, 'Altag Ali', 'queen.marquardt@example.org', 'Mr. Nathan VonRueden Sr.', '+1 (563) 778-3201', 2, 1, 0, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8cyU1jwaek', '2024-08-25 13:19:48', '2024-09-03 09:48:03'),
(7, 'Aamar Kamal', 'amy88@example.com', 'Breanna Yundt', '(406) 583-0759', 4, 1, 0, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FBK9bWmwdT', '2024-08-25 13:19:48', '2024-09-03 09:48:58'),
(8, 'Amera Hassan', 'ncormier@example.org', 'Dallas Casper', '+1 (430) 720-8113', 5, 1, 0, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g8AzvVekUl', '2024-08-25 13:19:48', '2024-09-03 09:47:50'),
(9, 'kamal ali', 'kohler.marina@example.org', 'Deja Abbott', '+1.806.517.1955', 9, 1, 1, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OykYCQkm8V', '2024-08-25 13:19:48', '2024-09-03 09:47:14'),
(10, 'Samera Osman', 'nikolas13@example.org', 'Else Langosh', '1-929-633-5671', 2, 1, 1, '2024-08-25 13:19:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6rHl0UgriW', '2024-08-25 13:19:48', '2024-09-03 09:46:56'),
(11, 'Khansa Omer', 'dada@gmail.com', 'شارع الامدادات الطبيه', '9988000882', 4, 1, 0, '2024-08-25 14:27:16', '$2y$10$LT.KMUiOnKCpTx1lBYh3kOwJSFnU9DHJKGTYp2XcdG87si2PWrOVe', NULL, '2024-08-25 15:26:40', '2024-09-03 09:46:35'),
(12, 'Osman Omer', 'user22@gmail.com', 'شارع الامدادات الطبيه', '01222247445', 2, 1, 0, NULL, '$2y$10$aL5pRpdND2DYXZmDXIraweWiUWZsEm9Lz/Xsp6G9gR5bRZyldD0GO', NULL, '2024-08-25 15:29:06', '2024-08-25 15:33:31'),
(13, 'Salama Osman', 'user90@gmail.com', 'Bahray', '09999282737', 8, 2, 0, NULL, '$2y$10$eSIXthHX3eGblrD4LGYUSuts3m62hGOBCJnNTxPianomGJlPLhCze', NULL, '2024-08-25 15:31:15', '2024-08-25 19:03:24'),
(14, 'Hala Hassan', 'hala@gmail.com', 'Lara', '09993434343', 8, 2, 0, NULL, '$2y$10$HWABU027Vg37YkcnWnfSLeQHu8ZcdVOVsvDjqXABvkJ21VPwhBOti', NULL, NULL, NULL),
(15, 'Al-Smah Osman Ali', 'khasda@gamil.com', 'Khartoum', '09090998', 4, 1, 0, NULL, '$2y$10$ykrc5uVLFbSvtFjLgAY4z.BWy22d/9bF9HtjEhz60wW7c1gL1E.NG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_phone_unique` (`phone`),
  ADD UNIQUE KEY `patients_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_phone_unique` (`phone`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `universities_phone_unique` (`phone`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
