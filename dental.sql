-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 12:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phoneNumber`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Amro', 'Salah', 'amro@gmail.com', 790369501, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2023-03-29 21:01:48', '2023-03-29 21:01:48'),
(2, 'Coach Mons', 'Tareq', 'tareq@gmail.com', 799379763, 'ttttttttttttttttttttttttttttt', '2023-03-30 06:36:01', '2023-03-30 06:36:01'),
(3, 'Amro', 'Salah', 'amro@gmail.com', 790369501, 'ffgggggggggggggggggg', '2023-03-30 18:49:41', '2023-03-30 18:49:41'),
(4, 'Amro', 'Al-Wageei', 'shandaqamro@gmail.com', 788888888, 'nnnnnnnnnnnnnnnnnnnn', '2023-03-31 04:46:37', '2023-03-31 04:46:37'),
(5, 'Ahmad', 'aaaa', 'shandaqamro@gmail.com', 788888888, 'hhhhhhhhhhhhhhhhhhh', '2023-03-31 14:59:50', '2023-03-31 14:59:50'),
(6, 'Mohamed', 'Aqeed', 'aqeed@gmail.com', 799876543, 'jjjj', '2023-04-04 12:10:45', '2023-04-04 12:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_03_29_202415_create_contacts_table', 1),
(6, '2023_03_29_204820_create_trainees_table', 1),
(7, '2023_03_29_210829_create_services_table', 1),
(8, '2023_03_29_213328_create_reservations_table', 1),
(9, '2023_03_30_180108_create_todolists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `comment` text DEFAULT NULL,
  `res_date` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `phoneNumber`, `email`, `user_id`, `services_id`, `status`, `comment`, `res_date`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Coach Mons', 'Tareq', 799379763, 'tareq@gmail.com', 2, 1, 'Rejected', NULL, '04/05/2023', '25.00', NULL, '2023-03-30 17:52:23', '2023-03-31 04:55:02'),
(3, 'Coach Mons', 'Tareq', 799379763, 'tareq@gmail.com', 2, 1, 'Accepted', NULL, '04/20/2023', '25.00', NULL, '2023-03-30 17:52:38', '2023-04-04 12:23:42'),
(4, 'Amro', 'Salah', 790369501, 'amro@gmail.com', 2, 3, 'Rejected', 'slwfkdefvkwev', '04/20/2023', '25.00', NULL, '2023-03-30 18:23:54', '2023-03-31 19:53:04'),
(5, 'Amro', 'Al-Wageei', 788888888, 'shandaqamro@gmail.com', 2, 3, 'Pending', 'yessssssssssssss', '04/09/2023', '25.00', NULL, '2023-03-30 18:50:06', '2023-03-30 18:50:06'),
(6, 'Coach Mons', 'Tareq', 799379763, 'tareq@gmail.com', 7, 2, 'Pending', 'gggggggggggggggggggg', '04/26/2023', '25.00', NULL, '2023-03-31 04:51:10', '2023-03-31 04:51:10'),
(7, 'Mohamed', 'Abdin', 799285011, 'abdin@gmail.com', 2, 4, 'Pending', 'hhhhhhhhhhhhhhhhhh', '04/05/2023', '33.00', NULL, '2023-03-31 19:59:00', '2023-03-31 19:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sana Hotari', 'hhhhhhhhhhhhhhhhhhhhhhh', 25, 'Avatar (1).png', '2023-03-29 18:49:33', '2023-03-29 18:49:33'),
(2, 'Tareq', 'dd', 25, 'mg 1 (2).png', '2023-03-29 21:05:25', '2023-03-29 21:05:25'),
(3, 'dental', 'hhhhhhhhhhhhhhhhhhhhhhh', 25, 'mg 1.png', '2023-03-29 21:05:41', '2023-03-29 21:05:41'),
(4, 'Ruba', 'Test', 33, '3.png', '2023-03-31 19:53:32', '2023-03-31 19:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `todolists`
--

CREATE TABLE `todolists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE `trainees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `intrest` text NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`id`, `name`, `email`, `intrest`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Amro Al-Wageei', 'amro@gmail.com', 'I\'m Intrsted to join in dr . abdalmajed for dental clinic', 788888888, '2023-03-29 21:01:25', '2023-03-29 21:01:25'),
(2, 'Leen', 'tareq@gmail.com', 'I\'m Intrsted to join in dr . abdalmajed for dental clinic', 799379763, '2023-03-30 06:35:45', '2023-03-30 06:35:45'),
(3, 'MOna', 'amro@gmail.com', 'ssssssssss', 788888888, '2023-03-30 18:49:08', '2023-03-30 18:49:08'),
(4, 'Mohamed', 'shandaqamro@gmail.com', 'I\'m Intrsted to join in dr . abdalmajed for dental clinic', 788888888, '2023-03-31 04:47:33', '2023-03-31 04:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'icon.png',
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `image`, `role`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-03-29 18:48:16', 77777777, '$2y$10$b00N8Ndd/wIrd6nfIrJ2G.GZU2zhEb2SRJeyIhcdB23Uv57ah0jAC', 'icon.png', 'admin', NULL, NULL, '2023-03-29 18:48:16', '2023-03-29 18:48:16'),
(2, 'Amro', 'amro@gmail.com', NULL, 788888888, '$2y$10$8bL5vrWKQpXLIBCBQYPcDeHN7m7Di6EZ7ysnqF5ca6DlnU.NnTCzq', 'icon.png', 'user', NULL, NULL, '2023-03-29 20:47:27', '2023-03-29 20:47:27'),
(3, 'Sana Hotari', 'sana@gmail.com', NULL, 799379762, '$2y$10$F/LGEJwBue5e3f5oSlATL./QRWJ0H1E3bWspwhnHTAcdT.TNGpZNS', 'icon.png', 'user', NULL, NULL, '2023-03-29 20:58:21', '2023-03-29 20:58:21'),
(4, 'Ala\'a Mohamed', 'alaa@gmail.com', NULL, 799379763, '$2y$10$7c2awz7ocNKzcBIilbILlO8KCT3Jov.0Z0BuThPsteWDo5hCtHB8q', 'icon.png', 'user', NULL, NULL, '2023-03-29 20:58:44', '2023-03-29 20:58:44'),
(5, 'Tareq', 'tareq@gmail.com', NULL, 799379743, '$2y$10$QmUJnMkbxT0m2MHgxi/mue6N9KcE7ti5.fxRwGGhxKQ4ky8WyQNjG', 'icon.png', 'user', NULL, NULL, '2023-03-29 20:59:21', '2023-03-29 20:59:21'),
(6, 'Amro', 'shandaqamro@gmail.com', NULL, 799373425, '$2y$10$hCFoO176sUOT5lX/UfdRPuOrPa.JJeUT9kbOuvJtRMt4N5.cZouLa', 'icon.png', 'admin', NULL, NULL, '2023-03-30 06:39:55', '2023-03-30 06:39:55'),
(7, 'Haya', 'haya@gmail.com', NULL, 799373445, '$2y$10$KdMRVWyisctzr6MK4IYDA.KrFwi2mCkOIjjU34nIv0ifuNFHXARE.', 'icon.png', 'user', NULL, NULL, '2023-03-31 04:49:56', '2023-03-31 04:49:56'),
(8, 'Mom', 'mom@gmail.com', NULL, 777777777, '$2y$10$wI9LN1.Z27FRUY5uSmh4luxjV01CiWM2OyCIPbv4vNEBJpH2rJGj2', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:00:58', '2023-03-31 12:00:58'),
(9, 'Dad', 'dad@gmail.com', NULL, 777777778, '$2y$10$cR.XqPCAU9wSoBtqWmtVS.wFuZL1JAdxnzus2SLyaLzUX.lqghZxu', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:01:43', '2023-03-31 12:01:43'),
(10, 'Ruba', 'ruba@gmail.com', NULL, 777777779, '$2y$10$cXtCFhs47BSZNCg3znX5U.YploOu9v7akUR9yPjsOYMQ8.ZxpAbza', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:03:19', '2023-03-31 12:03:19'),
(11, 'Rand', 'rand@gmail.com', NULL, 777777710, '$2y$10$k/kIy3vJzkYX.nEMqKH2Ful7zA7tf8wXfbTi79IVdCht2z5wUVAU2', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:03:43', '2023-03-31 12:03:43'),
(12, 'Abdallah', 'abdallah@gmail.com', NULL, 777777711, '$2y$10$xJtJKD3OdxkDpD7m.ipBlO/P2OCai9zUe.XzK44Vq1y8mdjWuBLkq', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:04:45', '2023-03-31 12:04:45'),
(13, 'Raneem', 'raneem@gmail.com', NULL, 777777712, '$2y$10$7RHEJ6giP/1Y0levfZ0nxedaFa30CISZgDaGdb99bs6iMc/R09YGO', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:05:09', '2023-03-31 12:05:09'),
(14, 'Tasneem', 'tasneem@gmail.com', NULL, 777777713, '$2y$10$02Tu8KeKmakBZcdbsUNEqeNh4jyLQW6i/ZQfHGHwiYuH5ohnAVVc6', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:05:25', '2023-03-31 12:05:25'),
(15, 'Mohamed', 'mohamed@gmail.com', NULL, 777777714, '$2y$10$FGazL9xzw63nJ7jvk.d8I.Lr3Yzk1L3/mQylnyp4uTkfIJXXz7sy6', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:05:45', '2023-03-31 12:05:45'),
(16, 'Abd', 'abd@gmail.com', NULL, 777777715, '$2y$10$O8BF4jAk0b8nNjEmXoisQumq2mCQpH//PBxY7g66mRT3y66QE7p7W', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:06:04', '2023-03-31 12:06:04'),
(17, 'Omar', 'omar@gmail.com', NULL, 777777716, '$2y$10$VkxGpOU0V2pnA16vofaT.eBbwUmRS.Q8477lPgOmkkFu07fpQbm6W', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:06:18', '2023-03-31 12:06:18'),
(18, 'Rafeef', 'rafeef@gmail.com', NULL, 777777717, '$2y$10$Pp2ubS4WZV2/va1d5s4cPOYVgNODPEdvHb6OVclVR9lndQIA51T1e', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:06:36', '2023-03-31 12:06:36'),
(19, 'Rayan', 'rayan@gmail.com', NULL, 777777718, '$2y$10$88Wrl71.gPOEg6A7eW5wjeHJz/r8sfOd1/xWZvJ3FjveWmNE5gMMK', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:06:54', '2023-03-31 12:06:54'),
(20, 'Modather', 'modather@gmail.com', NULL, 777777719, '$2y$10$5g2YTgM.gHsd8v1/Oq0JieNobRZSnFdiHg1Lfy7slCxQfHGE5n93S', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:07:11', '2023-03-31 12:07:11'),
(21, 'Rashed', 'rashed@gmail.com', NULL, 777777720, '$2y$10$X9772ACas7JFUY6j1fTj1O.3ZUrEQLRqaGGi/ch1FDuAyuyPvxGya', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:07:31', '2023-03-31 12:07:31'),
(22, 'Malak', 'malak@gmail.com', NULL, 777777721, '$2y$10$v7pAtT1cwP2EpQ5BkPHIU.O0nxIJav4uR2TblsyphtPvn4slo6S8C', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:07:46', '2023-03-31 12:07:46'),
(23, 'Marah', 'marah@gmail.com', NULL, 777777722, '$2y$10$k1reQjVkHgx6lASJ7vg/w.o4CnooFZHl89FGKxKHuflnZVHA8hE.W', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:08:13', '2023-03-31 12:08:13'),
(24, 'Ahlam', 'ahlam@gmail.com', NULL, 777777723, '$2y$10$ukWJF7VdjusyqHQKBMYpIu8rXmNGFoUjfsFiIHndhwBMEefp0zyAe', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:08:33', '2023-03-31 12:08:33'),
(25, 'Mohamed Abdin', 'abdin@gmail.com', NULL, 777777742, '$2y$10$.2xJtimT1qfBw1GapASHVOnNG8e7uJmg5p4YjygFPA.357SWPa0NC', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:09:01', '2023-03-31 12:09:01'),
(26, 'Zaina', 'zaina@gmail.com', NULL, 777777724, '$2y$10$QYY1Uiw3Lt6P.ZDUCXP2vO/xAs.zkh/U1/ADe2WzDxaQ6Sdamx7IW', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:09:37', '2023-03-31 12:09:37'),
(27, 'Fatima', 'fatima@gmail.com', NULL, 777777726, '$2y$10$K4y.JNUIk8E.u11WpvkDOemtAcGYfzUIKHUZBZe0Qqve.taiYJcQi', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:09:54', '2023-03-31 12:09:54'),
(28, 'Tala', 'tala@gmail.com', NULL, 777777727, '$2y$10$Xnt1Gc4skC1KVl5FhkoNLeKDiBuZ0sOzjwjJG3n4sgZY0cJ1CbV9y', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:10:45', '2023-03-31 12:10:45'),
(29, 'Salah', 'salah@gmail.com', NULL, 799263629, '$2y$10$RQvUz6rZqColP0r2MvBZvuIgSMzxLswJijIfHqG/MUkSsKdaQr5HG', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:11:13', '2023-03-31 12:11:13'),
(30, 'Khadija', 'khadija@gmail.com', NULL, 799285011, '$2y$10$oTeVEeZZwS.DF/YZg/nhjexJv5MgBcSoLPSUPPj4oHboUbyxs9Qz.', 'icon.png', 'user', NULL, NULL, '2023-03-31 12:11:43', '2023-03-31 12:11:43'),
(31, 'Aqeed', 'aqeed@gmail.com', NULL, 799876543, '$2y$10$zIJSWsRlxWRVx2ooDCMpJ.Gq3uNhZIrA5Tu61ms3mcMoG7TLW/3eW', 'icon.png', 'user', NULL, NULL, '2023-04-04 12:09:37', '2023-04-04 12:09:37'),
(32, 'Aqeed', 'ddqeed@gmail.com', NULL, 799876544, '$2y$10$jablYZ3I4f5zqO21P32a/ukWyjZD.O3dd.1FqF/u0zQN1Ibhr7s2W', 'icon.png', 'admin', NULL, NULL, '2023-04-04 12:23:08', '2023-04-04 12:23:08');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_services_id_foreign` (`services_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolists`
--
ALTER TABLE `todolists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainees`
--
ALTER TABLE `trainees`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `todolists`
--
ALTER TABLE `todolists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainees`
--
ALTER TABLE `trainees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
