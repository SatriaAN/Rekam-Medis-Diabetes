-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdiabetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', ''),
(2, 'Pasien', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 6),
(2, 7),
(2, 8),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 9),
(2, 16),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'galih476@gmail.com', 1, '2023-04-24 15:10:00', 1),
(2, '::1', 'galihRamadhan123', NULL, '2023-04-29 12:56:48', 0),
(3, '::1', 'tpamujahidin100', NULL, '2023-04-29 13:03:54', 0),
(4, '::1', 'aditRamadhan123@gmail.com', 2, '2023-04-29 13:04:08', 1),
(5, '::1', 'aditRamadhan123@gmail.com', 2, '2023-04-30 08:46:13', 1),
(6, '::1', 'aditRamadhan123@gmail.com', 2, '2023-04-30 12:58:05', 1),
(7, '::1', 'aditRamadhan123@gmail.com', 2, '2023-04-30 13:12:39', 1),
(8, '::1', 'aditRamadhan123@gmail.com', 2, '2023-05-06 10:45:42', 1),
(9, '::1', 'galih4762@gmail.com', 3, '2023-05-09 02:53:39', 1),
(10, '::1', 'galih4762@gmail.com', 3, '2023-05-09 06:02:25', 1),
(11, '::1', 'galihAdmin', NULL, '2023-05-15 11:41:01', 0),
(12, '::1', 'galihAdmin', NULL, '2023-05-15 11:41:19', 0),
(13, '::1', 'galih4762@gmail.com', 3, '2023-05-15 11:41:30', 1),
(14, '::1', 'galih4762@gmail.com', 3, '2023-05-16 04:17:45', 1),
(15, '::1', 'galih4762@gmail.com', 3, '2023-05-16 06:28:32', 1),
(16, '::1', 'galih4762@gmail.com', 3, '2023-05-16 14:43:08', 1),
(17, '::1', 'galih4762@gmail.com', 3, '2023-05-17 12:55:18', 1),
(18, '::1', 'galih4762@gmail.com', 3, '2023-05-17 18:07:12', 1),
(19, '::1', 'galih4762@gmail.com', 3, '2023-05-18 08:31:47', 1),
(20, '::1', 'galihAdmin', NULL, '2023-05-18 13:20:25', 0),
(21, '::1', 'galih4762@gmail.com', 3, '2023-05-18 13:20:32', 1),
(22, '::1', 'galih4762@gmail.com', 3, '2023-05-19 03:24:30', 1),
(23, '::1', 'galih4762@gmail.com', 3, '2023-05-19 06:41:15', 1),
(24, '::1', 'galih4762@gmail.com', 3, '2023-05-19 07:39:32', 1),
(25, '::1', 'galih4762@gmail.com', 3, '2023-05-19 13:53:42', 1),
(26, '::1', 'satr20119ti', NULL, '2023-05-21 06:30:17', 0),
(27, '::1', 'galihAdmin', NULL, '2023-05-21 06:30:24', 0),
(28, '::1', 'gali', NULL, '2023-05-21 06:30:27', 0),
(29, '::1', 'galih4762@gmail.com', 3, '2023-05-21 06:30:36', 1),
(30, '::1', 'galih4762@gmail.com', 3, '2023-05-21 09:15:04', 1),
(31, '::1', 'satria182002@gmail.com', 4, '2023-05-21 10:23:38', 1),
(32, '::1', 'galihTesting', NULL, '2023-05-21 10:24:52', 0),
(33, '::1', 'galihAdmin', NULL, '2023-05-21 10:25:00', 0),
(34, '::1', 'galih', NULL, '2023-05-21 10:25:32', 0),
(35, '::1', 'adit@gmail.com', 6, '2023-05-21 10:25:38', 1),
(36, '::1', 'admin', NULL, '2023-05-21 10:26:08', 0),
(37, '::1', 'satria182002@gmail.com', 7, '2023-05-21 10:26:14', 1),
(38, '::1', 'satria182002@gmail.com', 8, '2023-05-21 10:26:58', 1),
(39, '::1', 'satria182002@gmail.com', 9, '2023-05-21 10:43:35', 1),
(40, '::1', 'adit@gmail.com', 16, '2023-05-21 13:06:09', 1),
(41, '::1', 'satria182002@gmail.com', 9, '2023-05-22 09:49:27', 1),
(42, '::1', 'satria182002@gmail.com', 9, '2023-05-27 15:42:21', 1),
(43, '::1', 'aditPasien', NULL, '2023-05-27 17:13:09', 0),
(44, '::1', 'adit21@gmail.com', 16, '2023-05-27 17:13:14', 1),
(45, '::1', 'rani@gmail.com', 17, '2023-05-28 04:51:32', 1),
(46, '::1', 'adit21@gmail.com', 16, '2023-05-28 10:36:38', 1),
(47, '::1', 'satria182002@gmail.com', 9, '2023-05-28 11:29:00', 1),
(48, '::1', 'adit21@gmail.com', 16, '2023-05-28 11:29:13', 1),
(49, '::1', 'satria182002@gmail.com', 9, '2023-05-28 13:52:49', 1),
(50, '::1', 'adit21@gmail.com', 16, '2023-05-28 13:53:28', 1),
(51, '::1', 'satria182002@gmail.com', 9, '2023-05-28 14:11:15', 1),
(52, '::1', 'admin', NULL, '2023-05-29 13:18:31', 0),
(53, '::1', 'satria182002@gmail.com', 9, '2023-05-29 13:18:40', 1),
(54, '::1', 'adit21@gmail.com', 16, '2023-05-29 14:49:46', 1),
(55, '::1', 'satria182002@gmail.com', 9, '2023-05-29 14:53:44', 1),
(56, '::1', 'satria182002@gmail.com', 9, '2023-05-30 01:58:40', 1),
(57, '::1', 'adit21@gmail.com', 16, '2023-05-30 02:16:05', 1),
(58, '::1', 'admin@gmail.com', 9, '2023-05-30 07:51:20', 1),
(59, '::1', 'admin@gmail.com', 9, '2023-05-30 10:37:11', 1),
(60, '::1', 'adit21@gmail.com', 16, '2023-05-30 11:35:45', 1),
(61, '::1', 'adit21@gmail.com', 16, '2023-05-30 16:27:46', 1),
(62, '::1', 'admin@gmail.com', 9, '2023-05-31 02:10:20', 1),
(63, '::1', 'adit21@gmail.com', 16, '2023-05-31 02:20:00', 1),
(64, '::1', 'admin@gmail.com', 9, '2023-05-31 02:30:23', 1),
(65, '::1', 'admin', NULL, '2023-06-01 10:13:35', 0),
(66, '::1', 'admin@gmail.com', 9, '2023-06-01 10:13:42', 1),
(67, '::1', 'admin@gmail.com', 9, '2023-06-02 06:46:47', 1),
(68, '::1', 'admin', NULL, '2023-06-02 11:59:38', 0),
(69, '::1', 'admin@gmail.com', 9, '2023-06-02 11:59:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'menu-users', 'Menu Users'),
(2, 'edit-data-dashboard', 'Mengubah Data Dashboard'),
(3, 'delete-data-dashboard', 'Menghapus Data Dashboard'),
(4, 'edit-pasien', 'Mengubah Data Pasien'),
(5, 'delete-pasien', 'Menghapus Data Pasien'),
(6, 'menu-pasien', 'Menu Pasien'),
(7, 'menu-dashboard', 'Menu Dashboard'),
(8, 'tambah-data-dashboard', 'Menambah Data Dashboard'),
(9, 'tambah-pasien', 'Menambah Data Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1682348906, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `nama`, `umur`, `tinggi_badan`, `berat_badan`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(2, 'Rina', 22, 164, 55, 'Perempuan', 'Bandung', '082143214321', 'rina@gmail.com'),
(56, 'Panji', 21, 180, 80, 'Laki-laki', 'Bandung', '08123123123', 'jinja@gmail.com'),
(58, 'Kayla', 32, 174, 68, 'Perempuan', 'Bekasi', '0812232323232', 'Kaela@gmail.com'),
(61, 'Mario', 32, 192, 80, 'Laki-laki', 'Makasar', '0813332161826', 'Mar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `idreport` int(11) NOT NULL,
  `gula_darah_puasa` int(11) DEFAULT NULL,
  `gula_darah_sewaktu` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pasien_idpasien` int(11) DEFAULT NULL,
  `sistolik` int(3) NOT NULL DEFAULT 0,
  `diastolik` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `gula_darah_puasa`, `gula_darah_sewaktu`, `tanggal`, `pasien_idpasien`, `sistolik`, `diastolik`) VALUES
(68, 99, 100, '2023-04-23', 2, 120, 80),
(69, 97, 120, '2023-03-24', 2, 122, 90),
(72, 124, 90, '2023-01-01', 2, 130, 70),
(81, 80, 100, '2023-06-09', 2, 117, 67),
(86, 120, 140, '2023-02-14', 2, 120, 100),
(89, 120, 90, '2023-07-16', 2, 118, 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `telegram_id` int(15) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `telegram_id`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'galih476@gmail.com', 'galihUser', 0, '$2y$10$W1LkAcXsx4oaNDbZU8600.Dk6XWzDB4nbcFOLGMiF3y.am2RYCRIS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-21 10:24:45', '2023-05-21 10:24:45', NULL),
(9, 'admin@gmail.com', 'admin', 0, '$2y$10$Syd6o0TTaT/vp1bJUi.d6Ome5JfBz4MQvUEvIUUweyKRayDvQFXSm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-21 10:43:31', '2023-05-21 10:43:31', NULL),
(16, 'adit21@gmail.com', 'aditPasien', 0, '$2y$10$QZL9wy9rP4FOeIe.RDDSHePtHUgAtXiBt1dG65RxvKqjrq5/T3c3q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-21 13:06:03', '2023-05-21 13:06:03', NULL),
(17, 'rani@gmail.com', 'raniPasien', 0, '$2y$10$P5xTTU4UywJUKYushDJt7elp1BeSC4S2d9FGNpCJX6rCi7fNFUzZ.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-28 04:51:22', '2023-05-28 04:51:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`),
  ADD KEY `pasien_idpasien` (`pasien_idpasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`pasien_idpasien`) REFERENCES `pasien` (`idpasien`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
