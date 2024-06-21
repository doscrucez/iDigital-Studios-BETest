-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 10:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idigitalstudios_doscrucez`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_ts`
--

CREATE TABLE `employees_ts` (
  `id` int(11) NOT NULL,
  `name_ets` varchar(255) NOT NULL,
  `lastname_ets` varchar(255) NOT NULL,
  `address_ets` longtext NOT NULL,
  `phonenumber_ets` varchar(255) NOT NULL,
  `emailaddress_ets` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees_ts`
--

INSERT INTO `employees_ts` (`id`, `name_ets`, `lastname_ets`, `address_ets`, `phonenumber_ets`, `emailaddress_ets`, `created_at`, `updated_at`) VALUES
(0, 'Juan', 'Guevara', 'El Salvador', '65656565', 'juanguevara@gmail.com', '2024-06-20 06:00:00', '2024-06-20 06:00:00'),
(1, 'Winston', 'Dos Crucez', 'El Salvador', '65656565', 'juanguevara@gmail.com', '2024-06-20 06:00:00', '2024-06-20 06:00:00');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_20_235959_create_users_ts_table', 1),
(6, '2024_06_21_000012_create_roles_ts_table', 1),
(7, '2024_06_21_000031_create_employees_ts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `roles_ts`
--

CREATE TABLE `roles_ts` (
  `id` int(11) NOT NULL,
  `name_rts` varchar(255) NOT NULL,
  `description_rts` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_ts`
--

INSERT INTO `roles_ts` (`id`, `name_rts`, `description_rts`, `created_at`, `updated_at`) VALUES
(0, 'Empleado', 'Tiene acceso restringido.', '2024-06-21 06:00:00', '2024-06-21 06:00:00'),
(1, 'ADMIN', 'Es capaz de hacer cambios globales sin restricciones.', '2024-06-20 06:00:00', '2024-06-20 06:00:00'),
(2, 'Empleado', 'Tiene acceso restringido.', '2024-06-21 06:00:00', '2024-06-21 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_ts`
--

CREATE TABLE `users_ts` (
  `id` int(11) NOT NULL,
  `username_uts` varchar(255) NOT NULL,
  `password_uts` varchar(255) NOT NULL,
  `id_rts` int(11) DEFAULT NULL,
  `id_ets` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_ts`
--

INSERT INTO `users_ts` (`id`, `username_uts`, `password_uts`, `id_rts`, `id_ets`, `created_at`, `updated_at`) VALUES
(1, 'doscrucez', '255520', 1, 1, '2024-06-21 07:36:55', '2024-06-21 07:36:55'),
(2, 'doscrucez', '255520', 1, 1, '2024-06-21 08:19:17', '2024-06-21 08:19:17'),
(3, 'doscrucez', '255520', 1, 1, '2024-06-21 08:19:48', '2024-06-21 08:19:48'),
(4, 'doscrucez', '255520', 1, 1, '2024-06-21 11:24:46', '2024-06-21 11:24:46'),
(5, 'doscrucez', '255520', 1, 1, '2024-06-21 11:25:46', '2024-06-21 11:25:46'),
(6, 'doscrucez', '255520', 1, 1, '2024-06-21 12:39:44', '2024-06-21 12:39:44'),
(7, 'doscrucez', '255520', 1, 1, '2024-06-21 12:49:37', '2024-06-21 12:49:37'),
(8, 'doscrucez', '255520', 1, 0, '2024-06-21 13:09:42', '2024-06-21 13:09:42'),
(9, 'doscrucez', '255520', 1, 1, '2024-06-21 13:54:05', '2024-06-21 13:54:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_ts`
--
ALTER TABLE `employees_ts`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles_ts`
--
ALTER TABLE `roles_ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_ts`
--
ALTER TABLE `users_ts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ets` (`id_ets`),
  ADD KEY `id_rts` (`id_rts`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_ts`
--
ALTER TABLE `users_ts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
