- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2024 at 10:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `narocanje-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_12_22_160757_create_rooms_table', 1),
(5, '2024_12_22_162319_create_reservations_table', 1);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sporocilo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prihod` date NOT NULL,
  `odhod` date NOT NULL,
  `skupna_cena` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `room_id`, `ime`, `email`, `telefon`, `sporocilo`, `prihod`, `odhod`, `skupna_cena`, `created_at`, `updated_at`) VALUES
(2, 1, 'AM 1', 'andrej.marsetic007@gmail.com', 'asvasv', NULL, '2024-12-22', '2024-12-29', '350.00', '2024-12-22 17:57:00', '2024-12-22 17:57:00'),
(3, 1, 'AM 2', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:31:16', '2024-12-22 18:31:16'),
(4, 1, 'AM 3', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:31:21', '2024-12-22 18:31:21'),
(11, 1, 'Asfa', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:52:44', '2024-12-22 18:52:44'),
(12, 1, 'Asfa', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:53:36', '2024-12-22 18:53:36'),
(13, 1, 'Asfa', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:55:45', '2024-12-22 18:55:45'),
(14, 1, 'Asfa', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:57:53', '2024-12-22 18:57:53'),
(15, 1, 'Asfa', 'andrej.marsetic@gmail.com', 'asvasv', 'vdsbsb', '2024-12-22', '2024-12-29', '350.00', '2024-12-22 18:58:13', '2024-12-22 18:58:13'),
(27, 3, 'AM nov', 'andrej.marsetic@gmail.com', '+38640271758', 'ascasc', '2024-12-22', '2024-12-30', '640.00', '2024-12-22 20:30:30', '2024-12-22 20:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(8,2) NOT NULL,
  `kratek_opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolg_opis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `ime`, `cena`, `kratek_opis`, `dolg_opis`, `created_at`, `updated_at`) VALUES
(1, 'Enoposteljna soba', '50.00', 'Enostavna soba z osnovnimi potrebščinami.', 'Enostavana postelja primerna za eno osebo.', '2024-12-22 16:37:45', '2024-12-22 16:37:45'),
(2, 'Dvoposteljna soba', '120.00', 'Prostorna soba z luksuznimi dodatki.', 'Prostorna soba z dvema posteljema.', '2024-12-22 16:37:45', '2024-12-22 16:37:45'),
(3, 'Družinska soba', '80.00', 'Idealna za družine, z dodatnimi ležišči.', 'Družinska soba s tremi posteljami, primerna za večje skupine ali družine.', '2024-12-22 16:37:45', '2024-12-22 16:37:45'),
(4, 'Apartma', '160.00', 'Apartma z ločenim bivalnim prostorom.', 'Luksuzen apartma s kuhinjo, dnevnim prostorom in spalnico.', '2024-12-22 16:37:45', '2024-12-22 20:21:18');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@gmail.com', NULL, '$2y$10$9KL8GTFMNmSaFLzdbtjrU.C8y2r2subsW5wVMOuxJXwNG/USNvMNK', NULL, '2024-12-22 19:35:22', '2024-12-22 19:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_room_id_foreign` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;
COMMIT;
