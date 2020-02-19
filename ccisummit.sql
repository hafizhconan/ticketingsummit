-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 09:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccisummit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$xbVMXNJ40RDzjiBGC3MMLOEEZqw91wKtBOlE.tIYFDf9GEEnLKgRG', 'v7MZQnHNszDI4pVxDwc9drhYn9NNlNsx3Kvw4mZRuLkG7tEDro004ftweUms', '2019-03-08 05:08:32', '2019-03-08 05:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buktis`
--

CREATE TABLE `buktis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buktis`
--

INSERT INTO `buktis` (`id`, `id_transaction`, `nama_pengirim`, `bank_pengirim`, `bukti`, `created_at`, `updated_at`) VALUES
(1, '8', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:22:34', '2019-03-10 07:22:34'),
(2, '8', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:23:02', '2019-03-10 07:23:02'),
(4, '7', 'Sayyid Taufiq A', 'Mandiri', '20190310142554__takagaki_kaede_idolmaster_and_idolmaster_cinderella_girls_drawn_by_baffu__sample-15111e30e5eb8a8fb2689508ebaf964f.jpg', '2019-03-10 07:25:54', '2019-03-10 07:25:54'),
(5, '10', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:35:38', '2019-03-10 07:35:38'),
(6, '6', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:38:17', '2019-03-10 07:38:17'),
(7, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:38:49', '2019-03-10 07:38:49'),
(8, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:39:10', '2019-03-10 07:39:10'),
(9, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:40:36', '2019-03-10 07:40:36'),
(10, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:41:54', '2019-03-10 07:41:54'),
(11, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:42:09', '2019-03-10 07:42:09'),
(12, '11', 'Arbi Nourman', 'Mandiri', '20190310144824rak.jpg', '2019-03-10 07:48:24', '2019-03-10 07:48:24'),
(13, '12', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 07:59:28', '2019-03-10 07:59:28'),
(14, '13', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 08:04:17', '2019-03-10 08:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username_updated` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `nama`, `no_hp`, `from`, `email`, `username`, `username_updated`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Sayyid Taufiq Abdul Hafizh', '085794832299', 'SMK Telkom Purwokerto', 'hafizhconan@gmail.com', '1', NULL, NULL, '2019-03-09 07:28:10', '2019-03-09 07:28:10'),
(2, 'arbi nourman', '085794832288', 'asdasda', 'hafizhconan@gmail.com', '1', NULL, 1, '2019-03-09 07:28:34', '2019-03-09 07:29:07'),
(3, 'Retad Alerta', '085794832288', 'SMK Telkom Purwokerto', 'hafizhconan@gmail.com', '1', '1', NULL, '2019-03-09 08:05:24', '2019-03-09 08:06:46'),
(4, 'Arbi Nourman', '085794832299', '1301174017', 'hafizhconan@gmail.com', '1', '1', NULL, '2019-03-09 08:48:15', '2019-03-09 08:49:52'),
(5, 'Last testing', '8912631872361', '1301174018', 'hafizhconan@gmail.com', '1', NULL, NULL, '2019-03-09 09:08:06', '2019-03-09 09:08:06'),
(6, 'asdasd', '085794832299', '1301174017', 'hafizhconan@gmail.com', '1', NULL, NULL, '2019-03-09 09:11:12', '2019-03-09 09:11:12'),
(7, 'yeaaah', '0918239123123', '10123786123', 'hafizhconan@gmail.com', '1', NULL, NULL, '2019-03-09 09:13:48', '2019-03-09 09:13:48'),
(8, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, NULL, '2019-03-09 21:39:58', '2019-03-09 21:39:58'),
(9, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, NULL, '2019-03-09 21:44:37', '2019-03-09 21:44:37'),
(10, 'Arbi Nourmies', '085794832299', '1301174026', 'hafizhconan@gmail.com', 'U1', NULL, NULL, '2019-03-10 07:44:07', '2019-03-10 07:44:07'),
(11, 'Arbi Nourmies', '085794832299', '14045', 'hafizhconan@gmail.com', 'U4', NULL, NULL, '2019-03-10 07:53:44', '2019-03-10 07:53:44'),
(12, 'Retad Alert', '0109283102123', '14047', 'hafizhconan@gmail.com', 'U4', NULL, NULL, '2019-03-10 08:03:44', '2019-03-10 08:03:44'),
(13, 'Rakha', '98123918723', '1301174018', 'hafizhconan@gmail.com', '1', NULL, NULL, '2019-03-10 08:28:33', '2019-03-10 08:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
(1, '2019_03_10_133642_create_buktis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$/FXCcI9OE1DcpvirPkBtHuuYDXy0UvJVpawVPsyyV/H1F0l/z67Qy', 'cGgoDr0xb6RB4GH46c9LBNTNTLEs9ELjOFLhchSSk1ZTPJo14ptcCoc0AyWx', '2019-03-08 05:07:33', '2019-03-08 05:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `panitium_password_resets`
--

CREATE TABLE `panitium_password_resets` (
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
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `Barcode` longtext COLLATE utf8mb4_unicode_ci,
  `Absen_1` tinyint(4) DEFAULT NULL,
  `Absen_2` tinyint(4) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `Barcode`, `Absen_1`, `Absen_2`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(1, '0001', NULL, NULL, 1, NULL, '2019-03-09 07:28:13', '2019-03-09 07:28:13'),
(2, '0002', NULL, NULL, 1, 1, '2019-03-09 07:28:36', '2019-03-09 07:29:07'),
(3, '0003', NULL, NULL, 1, NULL, '2019-03-09 08:05:27', '2019-03-09 08:05:27'),
(4, '0004', NULL, NULL, 1, NULL, '2019-03-09 08:49:25', '2019-03-09 08:49:25'),
(5, '0005', NULL, NULL, 1, NULL, '2019-03-09 09:08:09', '2019-03-09 09:08:09'),
(6, '0006', NULL, NULL, 1, NULL, '2019-03-09 09:11:17', '2019-03-09 09:11:17'),
(7, '0007', NULL, NULL, 1, NULL, '2019-03-09 09:13:50', '2019-03-09 09:13:50'),
(8, '0008', NULL, NULL, 1, NULL, '2019-03-09 22:12:09', '2019-03-09 22:12:09'),
(9, '0009', NULL, NULL, 1, NULL, '2019-03-09 22:20:18', '2019-03-09 22:20:18'),
(10, '0010', NULL, NULL, 1, NULL, '2019-03-09 22:23:43', '2019-03-09 22:23:43'),
(11, '0011', NULL, NULL, 1, NULL, '2019-03-10 07:46:54', '2019-03-10 07:46:54'),
(12, '0012', NULL, NULL, 1, NULL, '2019-03-10 07:53:48', '2019-03-10 07:53:48'),
(13, '0013', NULL, NULL, 1, NULL, '2019-03-10 08:03:48', '2019-03-10 08:03:48'),
(14, '0014', NULL, NULL, 1, NULL, '2019-03-10 08:28:37', '2019-03-10 08:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `acc_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_ticket`, `id_buyer`, `id_user`, `jenis_tiket`, `status_pembayaran`, `acc_by`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Presale1', 1, '1', NULL, '2019-03-09 07:28:13', '2019-03-09 07:32:34'),
(2, 2, 2, 1, 'Presale1', 0, NULL, 1, '2019-03-09 07:28:37', '2019-03-09 07:29:07'),
(3, 3, 3, 1, 'Presale1', 1, '1', NULL, '2019-03-09 08:05:28', '2019-03-09 08:08:47'),
(4, 4, 4, 1, 'Umum', 1, '1', NULL, '2019-03-09 08:49:25', '2019-03-09 08:50:09'),
(5, 5, 5, 1, 'Umum', 1, '1', NULL, '2019-03-09 09:08:09', '2019-03-09 09:21:51'),
(6, 6, 6, 1, 'Umum', 2, NULL, NULL, '2019-03-09 09:11:17', '2019-03-10 07:38:17'),
(7, 7, 7, 1, 'Umum', 2, NULL, NULL, '2019-03-09 09:13:50', '2019-03-10 07:25:54'),
(8, 8, 9, 1, 'Umum', 1, NULL, NULL, '2019-03-09 22:12:09', '2019-03-10 07:23:02'),
(9, 9, 9, 1, 'Umum', 2, NULL, NULL, '2019-03-09 22:20:18', '2019-03-10 07:38:49'),
(10, 10, 9, 1, 'Umum', 2, NULL, NULL, '2019-03-09 22:23:43', '2019-03-10 07:35:38'),
(11, 11, 10, 1, 'Umum', 1, '1', NULL, '2019-03-10 07:46:55', '2019-03-10 07:50:37'),
(12, 12, 11, 4, 'Umum', 1, '1', NULL, '2019-03-10 07:53:48', '2019-03-10 08:00:26'),
(13, 13, 12, 4, 'Umum', 1, '1', NULL, '2019-03-10 08:03:48', '2019-03-10 08:04:34'),
(14, 14, 13, 1, 'Umum', 0, NULL, NULL, '2019-03-10 08:28:37', '2019-03-10 08:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$HKF8qFrZzpseIKLACsn76uAhrXvvX/j0MEldjbaNVhsSF17rNnoLy', 'ZJIjF9e2cEmmTQWiiR1jxSm30S81lxA6noC1KmMcYL92WFOTq5aNW6h38hex', '2019-03-08 05:08:07', '2019-03-10 08:34:08'),
(2, 'tes', 'test@gmail.com', '$2y$10$NQjEYJ9O9HrnY.UemNutsOu1JuGDBfKasovLe6muJlgwCMiq9Sy1a', '4UhyeonPcbHWhtD6oCVPerfJA0bEqe11nqSO7K46kjgvebZXmOAnX0bydtnC', '2019-03-08 09:15:02', '2019-03-08 09:15:02'),
(3, 'Ariani Puspitawati', 'ariani@gmail.com', '$2y$10$JoqQOn0w2E7Ts8KMQxWq0.BSOsgAS7VzZMZ8gCZnsQxhXxssS.AVq', 'ufdkme4eU3wdFVqA4kH9LUNb0OHhEf74pamBMP8YjftfF7XUFMiSzbSPWkYA', '2019-03-09 04:30:37', '2019-03-09 04:30:37'),
(4, 'arbi nourmies', 'arbi@gmail.com', '$2y$10$uPmKqyeO8s8dyVEQb60tZ.PG0vZRvY0Ms6PBZ3QDgRuXiTMv2wXcy', 'mLqYDnh0jhFiGW8no5PpTcUBlipxomOfVFUljR0VphtPq5NAdpPNUjhWOuaV', '2019-03-10 07:52:44', '2019-03-10 07:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buktis`
--
ALTER TABLE `buktis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buktis`
--
ALTER TABLE `buktis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
