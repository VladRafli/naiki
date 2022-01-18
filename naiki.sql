-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `warna_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_barang`, `nama_barang`, `gambar`, `harga_barang`, `stok_barang`, `warna_barang`, `detail_barang`, `created_at`, `updated_at`) VALUES
(1, 'Nike Air Zoom Alphafly', 'alphafly.jpg', 4299000, 10, 'Amarillo Magma, Orange Healing', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(2, 'Nike Dunk High Retro SE', 'dunk.jpg', 1799000, 10, 'Black, Black/White, Hyper Royal', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(3, 'Nike React Metcon Turbo', 'react.jpg', 2279000, 10, 'Black, Total Orange/Clear, Emerald/White', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(4, 'Air Jordan 4 Crimson', 'crimson.jpg', 2779000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(5, 'Nike Court Vision Low', 'vision.jpg', 1029000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(6, 'Nike Air Max Pre-Day', 'preday.jpg', 1979000, 10, '2 Colours', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(7, 'Nike Air Max 90', '90.jpg', 999000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(8, 'Nike Victori One', 'victori.jpg', 449000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(9, 'Nike SB Ishod Wair', 'ishod.jpg', 1429000, 10, '2 Colours', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(10, 'Kyrie Infinity EP', 'infinity.jpg', 1979000, 10, '3 Colours', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(11, 'LeBron 19', 'lebron.jpg', 2999000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL),
(12, 'NikeCourt React Vapor NXT', 'vapor.jpg', 2389000, 10, '1 Colour', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus augue quis leo euismod nec.\"', NULL, NULL);

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
(5, '2022_01_11_111519_create_items_table', 1),
(7, '2022_01_14_005419_create_pesanan_details_table', 1),
(8, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(9, '2022_01_14_172648_create_sessions_table', 2),
(10, '2022_01_14_005128_create_pesanans_table', 3);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(1, 5, '2022-01-18', '1', 67641000, NULL, '2022-01-17 22:17:58'),
(2, 5, '2022-01-17', '1', 1799000, NULL, NULL),
(3, 5, '2022-01-18', '1', 44378000, '2022-01-17 22:26:29', '2022-01-17 22:27:46'),
(4, 5, '2022-01-18', '1', 2279000, '2022-01-17 22:29:05', '2022-01-17 22:29:08'),
(5, 5, '2022-01-18', '1', 83770000, '2022-01-17 22:29:28', '2022-01-17 22:29:55'),
(6, 5, '2022-01-18', '1', 34088000, '2022-01-17 22:32:20', '2022-01-17 22:32:33'),
(7, 5, '2022-01-18', '1', 26388000, '2022-01-17 22:33:20', '2022-01-17 22:34:31'),
(8, 5, '2022-01-18', '1', 28009000, '2022-01-17 22:42:40', '2022-01-18 00:04:34'),
(9, 5, '2022-01-18', '1', 2389000, '2022-01-18 07:08:09', '2022-01-18 07:39:57'),
(10, 7, '2022-01-18', '1', 21053000, '2022-01-18 07:32:02', '2022-01-18 07:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7LSvadn5Iu3AKVecF4n2RbLpOQXK43sR2flDSHxK', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicndNbnc0bXc3UzJNWjAweWduN0tyVFA5S3g3VllhSlJjd1NORjhKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvbmFpa2kvcHVibGljL2NoZWNrLW91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRldWdmMjZFaG1VaVFRMkhsazJqSC9PZVdNa0hqbFo1U2JYUUR5bS9EdFFNT0tObU9acnNpYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZXVnZjI2RWhtVWlRUTJIbGsyakgvT2VXTWtIamxaNVNiWFFEeW0vRHRRTU9LTm1PWnJzaWEiO30=', 1642516772),
('DEPRakmbLAq6xkfOxVoWK3cpk4sohqWmXJ4urOCR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjU4TnpIQmE4VzJtT3JodGF4ZHQwMzd0Z1BvVUlKR0Z1ZW1keUFEcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3QvbmFpa2kvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1642519706),
('dkoD5KbqwKFKdlPjABGtgcmQnzIGNZGYDkWXsxS3', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid3d2T2RjN3Rva3BXQlpIbDBxTVZuY2FKMnNGR01YZmJabkRSVW9HcCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozOToiaHR0cDovL2xvY2FsaG9zdC9uYWlraS9wdWJsaWMvY2hlY2stb3V0Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3QvbmFpa2kvcHVibGljL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1642516341),
('L0anRlUzU2R11rKPVu31e03pwi3WR2yJ0sIEnF52', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieEN1QjUydnFpQUtUeWpaRndHVnlYc3JzWkVkSEpXSVR2cThRbm01YSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbG9jYWxob3N0L25haWtpL3B1YmxpYy9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJG43YVAwbGV3cDU1Ly9KaS9PZUNHSHV5TTV1dHVFN1ZRRkIxVHk5cXo3bHd2MXB6RnV3LlNxIjt9', 1642515845),
('nE59v1w6hHIhsz85ODfu4Okcx5JUQtVZHngKNKW0', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSkVZTTd3czF2bjB3NkhyVVZsOWxLNU5MTjQwTnJhWkNKNXdiN3pWTCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbG9jYWxob3N0L25haWtpL3B1YmxpYy9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJG43YVAwbGV3cDU1Ly9KaS9PZUNHSHV5TTV1dHVFN1ZRRkIxVHk5cXo3bHd2MXB6RnV3LlNxIjt9', 1642519720),
('T7XXeYMGP9zfkUImsi80pldYzwkK67giYTwpfBuy', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicVhRZ0VvOVEyalVhckdhSWNOMEVsRDZONVBvdG1BRlE4MEN6U3RTVCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vbG9jYWxob3N0L25haWtpL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRuN2FQMGxld3A1NS8vSmkvT2VDR0h1eU01dXR1RTdWUUZCMVR5OXF6N2x3djFwekZ1dy5TcSI7fQ==', 1642516996),
('uee2IEankU5QgZK3PeAz6saxGyfQgMCamTjnCM0b', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibmJxdTB3R09SSjZXTnlKbFNhUHpEczR5TW5BcTU1aVRYM0ZqSDVKMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvbmFpa2kvcHVibGljL3NlYXJjaD9zZWFyY2g9bGVicm9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRuN2FQMGxld3A1NS8vSmkvT2VDR0h1eU01dXR1RTdWUUZCMVR5OXF6N2x3djFwekZ1dy5TcSI7fQ==', 1642522527);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `handphone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'NoelLienardi', 'noel@gmail.com', 'Surabaya', '08989898989', NULL, '$2y$10$n7aP0lewp55//Ji/OeCGHuyM5utuE7VQFB1Ty9qz7lwv1pzFuw.Sq', NULL, NULL, 'D644GkesC7XCfYQAUYyPMUv9vknGIBNtYoOHs8wiTFsHyFNAKL7DGqdWe4u5', '2022-01-15 14:19:20', '2022-01-15 14:19:20'),
(7, 'emanuel', 'n@gmail.com', 'Surabaya', '08123456789', NULL, '$2y$10$eugf26EhmUiQQ2Hlk2jH/OeWMkHjlZ5SbXQDym/DtQMOKNmOZrsia', NULL, NULL, NULL, '2022-01-18 03:38:03', '2022-01-18 03:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_barang`);

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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
