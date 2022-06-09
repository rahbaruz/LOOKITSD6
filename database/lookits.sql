-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 05:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lookits`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `icon`, `created_at`, `updated_at`) VALUES
(10, 'Recuiretment', 'icons/c0qLxrOXEif22IoX2tVi11Kye4JMJ2zH4jTHwHzR.svg', '2022-06-05 02:55:09', '2022-06-05 02:55:09'),
(11, 'misc', 'icons/SqExBa8DkS54rFkngSZOmV87quSSyJ2VzMc0IACK.svg', '2022-06-05 02:55:23', '2022-06-05 02:55:23'),
(12, 'study', 'icons/HdSYoxogHFD6JetZr10UNZ94GTdFNvmHEbZxI1KY.svg', '2022-06-05 02:55:35', '2022-06-05 02:55:35'),
(13, 'Competetion', 'icons/GOMwwPyBQbnPqVIXC2iyj47wpM5usS0f0D9aGIMO.svg', '2022-06-05 02:56:21', '2022-06-05 02:56:21'),
(14, 'Seminar', 'icons/fbkkrL6GasyeMWeOYFmbH8D4W5Xf8uHBG6aEJ6Ek.svg', '2022-06-05 02:56:41', '2022-06-05 02:56:41'),
(15, 'master', 'icons/08jXNu4HiW1HzSBS6EmxAUggXLVQBuzomTB7gDBE.png', '2022-06-05 07:20:04', '2022-06-05 07:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `start_event` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cp1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `desc`, `active`, `start_event`, `cp1`, `cp2`, `social`, `location`, `id_user`, `created_at`, `updated_at`) VALUES
(12, 'osis', 'YyYegYYae6', 2, '2022-06-05 11:18:23', 'nH7IGqkS5v', 'PSWKfquPSX', 'a8Du60BB0P', '8r8J6NWWyv', 6, '2022-06-05 03:09:57', '2022-06-05 03:18:23'),
(13, 'one day informatics', 'NY9duieLe1', 0, '2022-06-05 12:16:10', 'uJLU8MErI1', 'OT59e9bAju', 'RDEyTcJrlr', 'iwAafD6AFA', 6, '2022-06-05 03:16:21', '2022-06-05 03:16:21'),
(14, 'osis', 'CSWUCCjaNn', 0, '2022-10-01 07:37:00', '0KNWp75FBf', 'bGy4nosz6r', 'VuQYs8OKvU', 'vLtmas9G3I', 6, '2022-06-05 06:51:54', '2022-06-05 06:51:54'),
(15, 'osis', 'RAsUzN9pgJ', 2, '2022-06-05 15:22:43', 'DkXdLLGgxG', 'EfmE5nJeVa', 'VkLadQgakp', 'Pcr5lcby3p', 13, '2022-06-05 07:22:15', '2022-06-05 07:22:43'),
(16, 'osis', 'o5Yz3o8uZ7', 2, '2022-06-05 16:03:29', 'Sx3iH5zYQN', 'XwHQDZvZRw', 'Ryd1Q8M5TQ', '6XQeqKOSVb', 13, '2022-06-05 07:25:08', '2022-06-05 08:03:29'),
(17, 'osis', 'wHppwjeabu', 2, '2022-06-05 16:05:50', 'z2iyzyCEW7', 'Afq1k8Jokf', 'uxiDmTzS2E', '0YQrQaQdFA', 13, '2022-06-05 08:05:42', '2022-06-05 08:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `has_categories`
--

CREATE TABLE `has_categories` (
  `id_event` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `has_categories`
--

INSERT INTO `has_categories` (`id_event`, `id_category`) VALUES
(12, 10),
(13, 10),
(14, 10),
(15, 13),
(16, 13),
(17, 13);

-- --------------------------------------------------------

--
-- Table structure for table `has_images`
--

CREATE TABLE `has_images` (
  `id_event` bigint(20) UNSIGNED NOT NULL,
  `id_image` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `has_images`
--

INSERT INTO `has_images` (`id_event`, `id_image`) VALUES
(12, 8),
(13, 9),
(14, 10),
(15, 11),
(16, 12),
(17, 13);

-- --------------------------------------------------------

--
-- Table structure for table `has_registers`
--

CREATE TABLE `has_registers` (
  `id_event` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `has_registers`
--

INSERT INTO `has_registers` (`id_event`, `id_user`) VALUES
(12, 14),
(13, 6),
(13, 9);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'events/hxGOQNLqyqpNvK45Jou2PePKc6ubVtx5uJ5byJKU.png', '2022-06-05 03:09:57', '2022-06-05 03:09:57'),
(9, 'events/4VH8XzxlINYXjfmvwcgdjf4kJnRiWXS7oRj5Z2Dv.jpg', '2022-06-05 03:16:21', '2022-06-05 03:16:21'),
(10, 'events/f18upmOni1CCFQCAdHPZpTAVgMThA0O4zMJONn9n.jpg', '2022-06-05 06:51:54', '2022-06-05 06:51:54'),
(11, 'events/ZHPG92fi4h7On2QGjclBtSy622q75vJUVdYeCJr0.png', '2022-06-05 07:22:16', '2022-06-05 07:22:16'),
(12, 'events/uVnyS8nAoIA4NGCHCHUL2XHfnV3oA4Lflxt4cQTz.jpg', '2022-06-05 07:25:08', '2022-06-05 07:25:08'),
(13, 'events/4GCVbE4QeBplL66ndLqqf45fF9YdIsKkgIjIDfIr.png', '2022-06-05 08:05:42', '2022-06-05 08:05:42');

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
(3, '2022_06_04_120939_create_events_table', 1),
(4, '2022_06_04_122054_create_categories_table', 1),
(5, '2022_06_04_122516_create_has_categories_table', 1),
(6, '2022_06_04_122602_create_images_table', 1),
(7, '2022_06_04_141302_create_has_images', 1),
(8, '2022_06_04_145658_add_column_avatar_to_users', 2),
(9, '2022_06_04_154649_add_column_desc_to_users', 3),
(10, '2022_06_05_125112_create_has_registers_table', 4),
(11, '2022_06_05_133010_create_password_reset_table', 5),
(12, '2022_06_05_133217_add_token_to_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_of_study` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('student','organization') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `token`, `desc`, `company`, `specialization`, `field_of_study`, `role`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'sadasd', 'sadsad@gmail.com', '2022-06-04 14:16:01', 'asdasd', 'aasdsad', NULL, NULL, 'sadsad', 'asdsad', 'asdsad', 'student', 'sadsad', '2022-06-04 14:16:01', '2022-06-04 14:16:01', 'avatar.png'),
(3, 'osis', 'sayidinaahmadalqososyi@gmail.com', NULL, '$2y$10$./V5YfgLetIVGJoOb4TtjOq2JA4NvE8DUb5LJYNLFNIkqoOqftpre', '081917320977', NULL, 'aku adalah mahasiswa TI', NULL, NULL, 'Teknologi informasi', 'student', NULL, '2022-06-04 06:45:56', '2022-06-04 11:14:03', 'avatars/avatar.png'),
(6, 'sayidina ahmadal qososyi', 'sayidinaahmadalqososyis@gmail.com', NULL, '$2y$10$hJoIvyuwdyFpATVopuRXO.0fvCNLlUsyZzMhEbJzmufhBSFooJyVS', '081917320977', NULL, 'aku adalah dosen TI', 'universitas bumigora', 'iot', NULL, 'organization', NULL, '2022-06-04 06:53:53', '2022-06-04 06:53:53', 'avatar.png'),
(9, 'osiss', 'admin@bajaga.com', NULL, '$2y$10$vPFOfUCApZzrCt0z22ULtuYjZtgNfTr.V1xV3BLxXv4rTZr6RvjS2', '081917320977', NULL, NULL, NULL, NULL, 'Teknologi informasi', 'student', NULL, '2022-06-05 06:14:47', '2022-06-05 06:14:47', 'avatars/avatar.png'),
(10, 'guru', 'guru@gmail.com', NULL, '$2y$10$dyTXeoeyFN3v4oI57RBfguQ0O2lwIAGybiuHba7MN0bZHwOoNqlgy', '081917320977', NULL, NULL, 'universitas bumigora', 'iot', NULL, 'organization', NULL, '2022-06-05 06:39:23', '2022-06-05 06:39:23', 'avatars/avatar.png'),
(11, 'sayidina ahmadal s', 'asdf@gmail.com', NULL, '$2y$10$LdSr7CgvSaZhcFHuhuenCOnHu8Vh7cFClHQAgzrpxW0rODQH4Edaa', '081917320977', NULL, NULL, NULL, NULL, 'Teknologi informasi', 'student', NULL, '2022-06-05 07:16:42', '2022-06-05 07:16:42', 'avatars/avatar.png'),
(12, 'osiss', 'qwerty@gmail.com', NULL, '$2y$10$ljU9VI/PIKdLclGXcC4A5./Uo0ULswPr8B3lM/wXFheIcGn6YKMCe', '081917320977', NULL, NULL, NULL, NULL, 'Teknologi informasi', 'student', NULL, '2022-06-05 07:17:51', '2022-06-05 07:17:51', 'avatars/avatar.png'),
(13, 'dosen', 'dosen@gmail.com', NULL, '$2y$10$DHV.jOZMv4bOTxp5gH42B.urggBMaLin0.sSB/XGoXPaN3FtNjtp6', '081917320977', NULL, NULL, 'universitas bumigora', 'iot', NULL, 'organization', NULL, '2022-06-05 07:18:34', '2022-06-05 07:18:34', 'avatars/avatar.png'),
(14, 'students', 'student@gmail.com', NULL, '$2y$10$hfyLhrA8XDeX7jiUFtNUFekLUQSFqaoijVwkICd/uMvy.mNd9JMmy', '081917320977', NULL, NULL, NULL, NULL, 'Teknologi informasi', 'student', NULL, '2022-06-05 07:25:55', '2022-06-05 07:58:05', 'avatars/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `has_categories`
--
ALTER TABLE `has_categories`
  ADD PRIMARY KEY (`id_event`,`id_category`),
  ADD KEY `has_categories_id_category_foreign` (`id_category`);

--
-- Indexes for table `has_images`
--
ALTER TABLE `has_images`
  ADD PRIMARY KEY (`id_event`,`id_image`),
  ADD KEY `has_images_id_image_foreign` (`id_image`);

--
-- Indexes for table `has_registers`
--
ALTER TABLE `has_registers`
  ADD PRIMARY KEY (`id_event`,`id_user`),
  ADD KEY `has_registers_id_user_foreign` (`id_user`);

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
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD KEY `password_reset_email_index` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `has_categories`
--
ALTER TABLE `has_categories`
  ADD CONSTRAINT `has_categories_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `has_categories_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `has_images`
--
ALTER TABLE `has_images`
  ADD CONSTRAINT `has_images_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `has_images_id_image_foreign` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `has_registers`
--
ALTER TABLE `has_registers`
  ADD CONSTRAINT `has_registers_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `has_registers_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
