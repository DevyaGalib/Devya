-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 07:08 AM
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
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas_siswa`
--

CREATE TABLE `berkas_siswa` (
  `id_berkas_siswa` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `kk_berkas_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_berkas_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_berkas_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_10_082037_create_sessions_table', 1),
(7, '2023_08_10_131629_create_settings_table', 2),
(8, '2023_08_10_145207_create_siswas_table', 3),
(9, '2023_08_11_135858_create_berkas_siswas_table', 4),
(10, '2023_08_11_153627_create_pembayarans_table', 5);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_pembayaran` float NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0WsdxxqdjKfkbc8LD6fyOEQ1IriQP6IeimSyVD6N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiem5VQ1NWdXNCcnYwVFNFTzN3RHZsZ2c4Qk9IUU9UME01OGZwMThrMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1691760859),
('Lw3oZlhdSTMhnFujm8LTIdUH3WFZZlRhP8zyYXZu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiakxmczBFcDFtSlBIUDJlU1VZMGg5MklSeUt0aFh6ZWFKSlN1ZFVLUCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcGVtYmF5YXJhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZGJTL2NlSTZsMHI5VnZvM2NhVG1UZWZqVTZlNW8wZjFOZ1R1OWwyN1gwVEpVbGkyakxVUEMiO30=', 1691816706),
('VCR3u9NSE72FsAH4intpwFfut4X8umQasv9csD7n', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia0FtVXVvSXY3ZHBpMWJyWm5KeFBtRjFUbFJyd2N0RVVpMGhnMWZ6MiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9iZXJrYXNfc2lzd2EvY3JlYXRlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRuZDNCWmdYc3lEU253eXBpNXguVXNlbTdjZDRuMkhoQVF3dTV5LzBMSnF3N25aQzkvOG4wNiI7fQ==', 1691766218);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `instansi_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_setting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps_setting` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `instansi_setting`, `pimpinan_setting`, `logo_setting`, `favicon_setting`, `tentang_setting`, `keyword_setting`, `alamat_setting`, `instagram_setting`, `youtube_setting`, `email_setting`, `no_hp_setting`, `maps_setting`, `created_at`, `updated_at`) VALUES
(1, 'PPDB SMA', 'Admin', 'logo.png', 'logo1.png', 'Aplikasi PPDB SMA', 'PPDB SMA', 'Jl. AY. Patty', '#', '#', 'admin@gmail.com', '081150021000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.7602494351752!2d128.17724749445915!3d-3.6958846723409873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8454347818b%3A0xd507f40415dcaa71!2sKAMPUS%20ITB%20STIKOM%20AMBON%20-%20INSTITUT%20TEKNOLOGI%20DAN%20BISNIS%20STIKOM%20AMBON!5e0!3m2!1sid!2sid!4v1689604253273!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat_siswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_siswa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `nama_ayah_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah_siswa` float NOT NULL,
  `nama_ibu_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu_siswa` float NOT NULL,
  `nama_sekolah_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn_sekolah_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `alamat_siswa`, `jenis_kelamin_siswa`, `no_hp_siswa`, `agama_siswa`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `nama_ayah_siswa`, `pekerjaan_ayah_siswa`, `penghasilan_ayah_siswa`, `nama_ibu_siswa`, `pekerjaan_ibu_siswa`, `penghasilan_ibu_siswa`, `nama_sekolah_siswa`, `nisn_sekolah_siswa`, `nik_siswa`, `created_at`, `updated_at`) VALUES
(1, 3, 'Jl. Kebun Cengkeh', 'Laki-laki', '851150021000', 'Islam', 'Ambon', '1999-05-21', 'Siapa sajaaaaa', 'Pilih Pekerjaan Ayah', 3000000, 'Paling Kepo', 'Pilih Pekerjaan Ayah', 0, 'SMK Muhammadiyah Ambon', '9990001201', '8171012105990006', '2023-08-11 04:31:50', '2023-08-11 04:31:50'),
(2, 4, 'Jl. Jalan', 'Laki-laki', '851150021000', 'Islam', 'Ambon', '1010-01-01', 'Kepo', 'Tidak Bekerja', 0, 'Kepo', 'Tidak Bekerja', 0, 'Dimana Sajaaaaa', '01010101', '010101010101', '2023-08-11 04:36:51', '2023-08-11 04:36:51'),
(3, 5, 'Tes', 'Laki-laki', '851150021000', 'Islam', 'Ambon', '1999-05-21', 'Kepo', 'PNS / Polri / TNI', 1000000, 'Kepo', 'PNS / Polri / TNI', 1000000, 'Blabla', '09102190', '210988547832', '2023-08-11 06:00:08', '2023-08-11 06:00:08');

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
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dbS/ceI6l0r9Vvo3caTmTefjU6e5o0f1NgTu9l27X0TJUli2jLUPC', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 04:27:37', '2023-08-10 04:27:37'),
(5, 'Tes', 'tes@gmail.com', NULL, '$2y$10$nd3BZgXsyDSnwypi5x.Usem7cd4n2HhAQwu5y/0LJqw7nZC9/8n06', 'Siswa', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-11 06:00:08', '2023-08-11 06:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_siswa`
--
ALTER TABLE `berkas_siswa`
  ADD PRIMARY KEY (`id_berkas_siswa`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

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
-- AUTO_INCREMENT for table `berkas_siswa`
--
ALTER TABLE `berkas_siswa`
  MODIFY `id_berkas_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
