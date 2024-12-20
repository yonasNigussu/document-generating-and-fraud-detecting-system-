-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 04:26 PM
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
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `csstdudents`
--

CREATE TABLE `csstdudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) NOT NULL,
  `advanced_database` varchar(255) DEFAULT NULL,
  `datastructure_and_algorithms` varchar(255) DEFAULT NULL,
  `java_programming` varchar(255) DEFAULT NULL,
  `internet_programming` varchar(255) DEFAULT NULL,
  `software_engineering` varchar(255) DEFAULT NULL,
  `python` varchar(255) DEFAULT NULL,
  `computer_graphics` varchar(255) DEFAULT NULL,
  `mobile_application_development` varchar(255) DEFAULT NULL,
  `computer_security` varchar(255) DEFAULT NULL,
  `compiler_design` varchar(255) DEFAULT NULL,
  `multimedia` varchar(255) DEFAULT NULL,
  `operating_system` varchar(255) DEFAULT NULL,
  `introduction_to_artificial_intelligence` varchar(255) DEFAULT NULL,
  `linear_algebra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `first_name`, `last_name`, `grand_father_name`, `id_number`, `title`, `text`, `created_at`, `updated_at`) VALUES
(14, 'yonas', 'nigussu', 'tadesse', 'DDU1206010', 'fghghf', 'fdfdg', '2023-09-07 04:21:22', '2023-09-07 04:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `graduated_student_lists`
--

CREATE TABLE `graduated_student_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `year_of_graduation` varchar(255) DEFAULT NULL,
  `admission_type` varchar(255) DEFAULT NULL,
  `degree_type` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `gpa` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_04_182551_create_sessions_table', 1),
(7, '2023_04_08_210812_create_request__lists_table', 2),
(8, '2023_04_10_185454_create_request_lists_table', 3),
(9, '2023_04_10_190454_create_request_lists_table', 4),
(10, '2023_04_20_063400_create_graduated_student_lists_table', 5),
(11, '2023_06_01_120532_create_csstdudents_table', 6),
(12, '2023_06_10_194710_create_photos_table', 7),
(13, '2023_06_15_133431_create_feedback_table', 8),
(14, '2023_06_15_135143_create_feedback_table', 9),
(15, '2023_06_18_193130_create_posts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('ems@gmail.com', '$2y$10$FT/43Xpa4BeNTSNC7kmw1uaE.6BNScPoRmP98IP9vxvUFkexufEEm', '2023-09-07 03:11:48');

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We create memorable memories for you', 'From life-long friendships to life-changing moments, DDU alumni shared a wealth of special experiences.', '1687238250.png', '2023-06-18 17:01:23', '2023-06-20 02:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `request_lists`
--

CREATE TABLE `request_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `request_type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `year_of_graduation` varchar(255) DEFAULT NULL,
  `admission_type` varchar(255) DEFAULT NULL,
  `degree_type` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `transaction_number` varchar(255) DEFAULT NULL,
  `name_of_institution` varchar(255) DEFAULT NULL,
  `address_of_institution` varchar(255) DEFAULT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `cost_sharing_letter` varchar(255) DEFAULT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'unpaid',
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8d8KdLNFiNxRxiJsVzDHEPqK76MhtcmJ0hf6j1wC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUGRYTVlRbEUyVTR1REo5UEVUa09KejFXT1lNYXNaMXF1YXowcXN6QyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXF1ZXN0X2xpc3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1696842774),
('mxzaXpDQkx3MJgtOMMIiFeBAaIze62rb6tQKEiG5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRnRoU092eXBGSjRrS1Q3aDdHOVB3NWx5WTQ1Ujhud2FNOFZGZmZKZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lL2FjdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1696837862);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(30) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `grand_father_name` varchar(256) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_number` varchar(256) DEFAULT NULL,
  `mobile_number` int(30) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `password_changed` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `acc_status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `account_id`, `name`, `last_name`, `grand_father_name`, `email`, `id_number`, `mobile_number`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `password_changed`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `acc_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'registrar', '', '', 'registrar@gmail.com', '1', 0, '121212', 'dire dawa', '1', NULL, '$2y$10$QaOfir1LY8VjUvVZ.OErUOhoXxVE7Ph3D5foQJ1x4/ItcL7QscXZe', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-04-05 15:53:31', '2023-06-15 06:06:47'),
(84, 12123, 'cs school head', NULL, NULL, 'csschoolhead@gmail.com', '12123', NULL, NULL, NULL, '2', NULL, '$2y$10$meFJ9lTNPugb9q7y0hdkx.iQ2iUPZAoEbvw8CuMz6M0zDLQwU4rY.', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-08 19:07:38', '2023-06-18 05:26:03'),
(85, 567, 'it school head', NULL, NULL, 'itschoolhead@gmail.com', '567', NULL, NULL, NULL, '3', NULL, '$2y$10$sU4VDt5klFaJfxg3a1nCzueFNbjs8oHrIo2QoditlVaBMTcBtuGK.', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-08 19:34:27', '2023-06-20 03:16:14'),
(86, 567, 'admin', NULL, NULL, 'admin@gmail.com', '567', NULL, NULL, NULL, '4', NULL, '$2y$10$5fSxuHQETjleKd2xGOKF.emmZ3HMBaFqIjdUTMaiHUj6M1rToWQ3O', 1, NULL, NULL, NULL, '40C7CVrlNk3iDAQeref22RK4qyu3jbYIFwSWsWGq3ebNw483wZiwVB6i1kZe', NULL, NULL, 1, '2023-06-08 21:01:46', '2023-06-20 04:30:43'),
(100, 123, 'EMS', NULL, NULL, 'ems@gmail.com', '123', NULL, NULL, NULL, '6', NULL, '$2y$10$eaUki8gCdEcal6heoETC1.F6yP4dmZ4SP0WNtUMBoPJ8LmhCNWwOW', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-15 11:40:45', '2023-06-15 11:41:21'),
(104, 98, 'clerk', NULL, NULL, 'clerk@gmail.com', '098', NULL, NULL, NULL, '7', NULL, '$2y$10$bvr00q77AQ9UALCaNTB08.gfHQAVOGQqPcxCVulEnNcod7C/hIfgu', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-16 17:59:12', '2023-06-16 17:59:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csstdudents`
--
ALTER TABLE `csstdudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `csstdudents_id_number_unique` (`id_number`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduated_student_lists`
--
ALTER TABLE `graduated_student_lists`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photos_image_unique` (`image`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_lists`
--
ALTER TABLE `request_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `csstdudents`
--
ALTER TABLE `csstdudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `graduated_student_lists`
--
ALTER TABLE `graduated_student_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_lists`
--
ALTER TABLE `request_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
