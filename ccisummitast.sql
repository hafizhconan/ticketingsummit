-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 07:17 PM
-- Server version: 10.1.30-MariaDB
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
-- Table structure for table `acaras`
--

CREATE TABLE `acaras` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemateri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acaras`
--

INSERT INTO `acaras` (`id`, `nama`, `logo`, `tgl`, `lokasi`, `pemateri`, `keterangan`, `jumlah`, `harga`, `due`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX DESIGN : Workshop Design UI and UX design for mobile.', 'images/design.png', 'Maret 17, 2019 Pukul 09.00 - Selesai', 'Gd P Fakultas Teknik Elektro, Ruang P401', 'Aprianil Sesti Rangga', 'TAK & SNACK', '40', '25', '2019-03-17 09:00:00', NULL, NULL),
(2, 'TECHWEEK WEB DEVELOPMENT : Workshop Web Development Deploy Dynamic Website : HTML, CSS, Bootstrap, PHP, CI dan Deploy', 'images/webdev.png', 'Maret 24, 2019 Pukul 13.00 - Selesai', 'To be Announced (TBA)', 'Khulafaur Rasyidin', 'TAK & SNACK', '40', '30', '2019-03-24 13:00:00', NULL, NULL),
(3, 'Data Debunked Day : Seminar Data Mining', 'images/research.png', 'April 06, 2019 Pukul 18.30 - Selesai', 'To be Announced (TBA)', 'Kordas Lab Data Mining', 'TAK & SNACK', '50', '25', '2019-04-06 18:30:00', NULL, NULL),
(4, 'Net Conf : Workshop Network', 'images/network.png', 'Maret 31, 2019 Pukul 09.00 - Selesai', 'To be Announced (TBA)', 'Kadiv Network', 'TAK & SNACK', '40', '30', '2019-03-31 09:00:00', NULL, NULL),
(5, 'Media Management', 'images/design.png', 'April 14, 2019 Pukul 09.00 - Selesai', 'To be Announced (TBA)', 'Kadiv MM', 'TAK & SNACKES', '60', '40', '2019-04-14 09:00:00', NULL, NULL);

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
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$xbVMXNJ40RDzjiBGC3MMLOEEZqw91wKtBOlE.tIYFDf9GEEnLKgRG', 'v7MZQnHNszDI4pVxDwc9drhYn9NNlNsx3Kvw4mZRuLkG7tEDro004ftweUms', '2019-03-07 22:08:32', '2019-03-07 22:08:32');

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
(1, '8', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:22:34', '2019-03-10 00:22:34'),
(2, '8', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:23:02', '2019-03-10 00:23:02'),
(4, '7', 'Sayyid Taufiq A', 'Mandiri', '20190310142554__takagaki_kaede_idolmaster_and_idolmaster_cinderella_girls_drawn_by_baffu__sample-15111e30e5eb8a8fb2689508ebaf964f.jpg', '2019-03-10 00:25:54', '2019-03-10 00:25:54'),
(5, '10', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:35:38', '2019-03-10 00:35:38'),
(6, '6', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:38:17', '2019-03-10 00:38:17'),
(7, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:38:49', '2019-03-10 00:38:49'),
(8, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:39:10', '2019-03-10 00:39:10'),
(9, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:40:36', '2019-03-10 00:40:36'),
(10, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:41:54', '2019-03-10 00:41:54'),
(11, '9', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:42:09', '2019-03-10 00:42:09'),
(12, '11', 'Arbi Nourman', 'Mandiri', '20190310144824rak.jpg', '2019-03-10 00:48:24', '2019-03-10 00:48:24'),
(13, '12', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 00:59:28', '2019-03-10 00:59:28'),
(14, '13', 'Sayyid Taufiq A', 'Mandiri', '', '2019-03-10 01:04:17', '2019-03-10 01:04:17'),
(15, '18', 'Arbi Nourman', 'Mandiri', '20190317113446dibajak retad.jpg', '2019-03-16 21:34:46', '2019-03-16 21:34:46'),
(16, '20', 'Sayyid Taufiq A', 'Mandiri', '20190324082617ss rekening.jpg', '2019-03-23 18:26:17', '2019-03-23 18:26:17'),
(17, '23', 'Sayyid Taufiq A', 'Mandiri', '20190325185904tiket1.png', '2019-03-25 04:59:04', '2019-03-25 04:59:04'),
(18, '25', 'Sayyid Taufiq A', 'Mandiri', '20190325190531rek.mandiri.jpeg', '2019-03-25 05:05:31', '2019-03-25 05:05:31'),
(19, '27', 'Sayyid Taufiq A', 'Mandiri', '20190409150305rak.jpg', '2019-04-09 01:03:05', '2019-04-09 01:03:05'),
(20, '31', 'Arbi Nourman', 'Mandiri', '20190926001601_temp_1565256231063.jpg', '2019-09-25 17:16:01', '2019-09-25 17:16:01');

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
  `jenis_tiket` int(5) DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `nama`, `no_hp`, `from`, `email`, `username`, `username_updated`, `jenis_tiket`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Sayyid Taufiq Abdul Hafizh', '085794832299', 'SMK Telkom Purwokerto', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-03-09 00:28:10', '2019-03-09 00:28:10'),
(2, 'arbi nourman', '085794832288', 'asdasda', 'hafizhconan@gmail.com', '1', NULL, NULL, 1, '2019-03-09 00:28:34', '2019-03-09 00:29:07'),
(3, 'Retad Alerta', '085794832288', 'SMK Telkom Purwokerto', 'hafizhconan@gmail.com', '1', '1', NULL, NULL, '2019-03-09 01:05:24', '2019-03-09 01:06:46'),
(4, 'Arbi Nourman', '085794832299', '1301174017', 'hafizhconan@gmail.com', '1', '1', NULL, NULL, '2019-03-09 01:48:15', '2019-03-09 01:49:52'),
(5, 'Last testing', '8912631872361', '1301174018', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-03-09 02:08:06', '2019-03-09 02:08:06'),
(6, 'asdasd', '085794832299', '1301174017', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-03-09 02:11:12', '2019-03-09 02:11:12'),
(7, 'yeaaah', '0918239123123', '10123786123', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-03-09 02:13:48', '2019-03-09 02:13:48'),
(8, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-09 14:39:58', '2019-03-09 14:39:58'),
(9, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-09 14:44:37', '2019-03-09 14:44:37'),
(10, 'Arbi Nourmies', '085794832299', '1301174026', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-10 00:44:07', '2019-03-10 00:44:07'),
(11, 'Arbi Nourmies', '085794832299', '14045', 'hafizhconan@gmail.com', 'U4', NULL, NULL, NULL, '2019-03-10 00:53:44', '2019-03-10 00:53:44'),
(12, 'Retad Alert', '0109283102123', '14047', 'hafizhconan@gmail.com', 'U4', NULL, NULL, NULL, '2019-03-10 01:03:44', '2019-03-10 01:03:44'),
(13, 'Rakha', '98123918723', '1301174018', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-03-10 01:28:33', '2019-03-10 01:28:33'),
(14, 'Ariani Puspitawati', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-14 09:28:21', '2019-03-14 09:28:21'),
(15, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-16 20:27:08', '2019-03-16 20:27:08'),
(16, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-16 21:03:59', '2019-03-16 21:03:59'),
(17, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-16 21:33:48', '2019-03-16 21:33:48'),
(18, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, NULL, NULL, '2019-03-16 22:07:47', '2019-03-16 22:07:47'),
(19, 'Ariani Puspitawati', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, 2, NULL, '2019-03-23 18:04:18', '2019-03-23 18:04:18'),
(20, 'asdasd', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, 1, NULL, '2019-03-23 18:14:05', '2019-03-23 18:14:05'),
(21, 'Ariani Puspitawati', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, 3, NULL, '2019-03-25 03:59:12', '2019-03-25 03:59:12'),
(22, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '1301174017', 'hafizhconan@gmail.com', 'U1', NULL, 3, NULL, '2019-03-25 04:01:56', '2019-03-25 04:01:56'),
(23, 'Sayyid Taufiq Abdul Hafizh', '085794832299', '1301174018', 'hafizhconan@gmail.com', 'U1', NULL, 3, NULL, '2019-03-25 04:58:25', '2019-03-25 04:58:25'),
(24, 'WEWEWEWE', '085794832299', '1301174018', 'hafizhconan@gmail.com', 'U1', NULL, 3, NULL, '2019-03-25 05:02:54', '2019-03-25 05:02:54'),
(25, 'last coba', '085794832288', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, 3, NULL, '2019-03-25 05:05:11', '2019-03-25 05:05:11'),
(26, 'yoloyoyol', '0193278019723', '103297183291', 'hafizhconan@gmail.com', 'U1', NULL, 2, NULL, '2019-03-25 05:12:30', '2019-03-25 05:12:30'),
(27, 'Ariani Puspitawati', '0019283120391', '123123123', 'hafizhconan@gmail.com', 'U1', NULL, 4, NULL, '2019-04-09 00:58:38', '2019-04-09 00:58:38'),
(28, 'CCI UNITEL', '085794832299', '10123786123', 'hakuku454@gmail.com', '1', NULL, NULL, NULL, '2019-09-25 17:07:10', '2019-09-25 17:07:10'),
(29, 'Ariani Puspitawati', '085794832299', '10123786123', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2019-09-25 17:08:34', '2019-09-25 17:08:34'),
(30, 'CCI UNITEL', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 4, 1, '2019-09-25 17:11:25', '2019-09-25 17:15:39');

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
(1, '2019_03_10_133642_create_buktis_table', 1),
(2, '2019_03_17_103151_create_acaras_table', 2);

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
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$/FXCcI9OE1DcpvirPkBtHuuYDXy0UvJVpawVPsyyV/H1F0l/z67Qy', 'cGgoDr0xb6RB4GH46c9LBNTNTLEs9ELjOFLhchSSk1ZTPJo14ptcCoc0AyWx', '2019-03-07 22:07:33', '2019-03-07 22:07:33');

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
(1, '0001', NULL, NULL, 1, NULL, '2019-03-09 00:28:13', '2019-03-09 00:28:13'),
(2, '0002', NULL, NULL, 1, 1, '2019-03-09 00:28:36', '2019-03-09 00:29:07'),
(3, '0003', NULL, NULL, 1, NULL, '2019-03-09 01:05:27', '2019-03-09 01:05:27'),
(4, '0004', NULL, NULL, 1, NULL, '2019-03-09 01:49:25', '2019-03-09 01:49:25'),
(5, '0005', NULL, NULL, 1, NULL, '2019-03-09 02:08:09', '2019-03-09 02:08:09'),
(6, '0006', NULL, NULL, 1, NULL, '2019-03-09 02:11:17', '2019-03-09 02:11:17'),
(7, '0007', NULL, NULL, 1, NULL, '2019-03-09 02:13:50', '2019-03-09 02:13:50'),
(8, '0008', NULL, NULL, 1, NULL, '2019-03-09 15:12:09', '2019-03-09 15:12:09'),
(9, '0009', NULL, NULL, 1, NULL, '2019-03-09 15:20:18', '2019-03-09 15:20:18'),
(10, '0010', NULL, NULL, 1, NULL, '2019-03-09 15:23:43', '2019-03-09 15:23:43'),
(11, '0011', NULL, NULL, 1, NULL, '2019-03-10 00:46:54', '2019-03-10 00:46:54'),
(12, '0012', NULL, NULL, 1, NULL, '2019-03-10 00:53:48', '2019-03-10 00:53:48'),
(13, '0013', 1, NULL, 1, NULL, '2019-03-10 01:03:48', '2019-03-16 03:20:00'),
(14, '0014', 1, NULL, 1, NULL, '2019-03-10 01:28:37', '2019-03-16 02:49:32'),
(15, '0015', NULL, NULL, 1, NULL, '2019-03-14 09:28:25', '2019-03-14 09:28:25'),
(16, '0016', NULL, NULL, 1, NULL, '2019-03-16 20:27:11', '2019-03-16 20:27:11'),
(17, '0017', NULL, NULL, 1, NULL, '2019-03-16 21:07:10', '2019-03-16 21:07:10'),
(18, '0018', NULL, NULL, 1, NULL, '2019-03-16 21:33:55', '2019-03-16 21:33:55'),
(19, '0019', NULL, NULL, 1, NULL, '2019-03-16 22:07:50', '2019-03-16 22:07:50'),
(20, '0020', NULL, NULL, 1, NULL, '2019-03-23 18:06:39', '2019-03-23 18:06:40'),
(21, '0021', NULL, NULL, 1, NULL, '2019-03-23 18:14:09', '2019-03-23 18:14:09'),
(22, '0022', NULL, NULL, 1, NULL, '2019-03-25 03:59:18', '2019-03-25 03:59:18'),
(23, '0023', NULL, NULL, 1, NULL, '2019-03-25 04:58:29', '2019-03-25 04:58:29'),
(24, '0024', NULL, NULL, 1, NULL, '2019-03-25 05:03:00', '2019-03-25 05:03:00'),
(25, '0025', NULL, NULL, 1, NULL, '2019-03-25 05:05:15', '2019-03-25 05:05:15'),
(26, '0026', 1, NULL, 1, NULL, '2019-03-25 05:12:34', '2019-04-05 21:21:42'),
(27, '0027', NULL, NULL, 1, NULL, '2019-04-09 00:58:49', '2019-04-09 00:58:49'),
(28, '0028', NULL, NULL, 1, NULL, '2019-09-25 17:07:13', '2019-09-25 17:07:13'),
(29, '0029', NULL, NULL, 1, NULL, '2019-09-25 17:08:36', '2019-09-25 17:08:36'),
(30, '0030', NULL, NULL, 1, 1, '2019-09-25 17:11:29', '2019-09-25 17:15:39'),
(31, '0031', NULL, NULL, 1, NULL, '2019-09-25 17:14:58', '2019-09-25 17:14:58');

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
(1, 1, 1, 1, 'Presale1', 1, '1', NULL, '2019-03-09 00:28:13', '2019-03-09 00:32:34'),
(2, 2, 2, 1, 'Presale1', 0, NULL, 1, '2019-03-09 00:28:37', '2019-03-09 00:29:07'),
(3, 3, 3, 1, 'Presale1', 1, '1', NULL, '2019-03-09 01:05:28', '2019-03-09 01:08:47'),
(4, 4, 4, 1, 'Umum', 1, '1', NULL, '2019-03-09 01:49:25', '2019-03-09 01:50:09'),
(5, 5, 5, 1, 'Umum', 1, '1', NULL, '2019-03-09 02:08:09', '2019-03-09 02:21:51'),
(6, 6, 6, 1, 'Umum', 2, NULL, NULL, '2019-03-09 02:11:17', '2019-03-10 00:38:17'),
(7, 7, 7, 1, 'Umum', 2, NULL, NULL, '2019-03-09 02:13:50', '2019-03-10 00:25:54'),
(8, 8, 9, 1, 'Umum', 1, NULL, NULL, '2019-03-09 15:12:09', '2019-03-10 00:23:02'),
(9, 9, 9, 1, 'Umum', 2, NULL, NULL, '2019-03-09 15:20:18', '2019-03-10 00:38:49'),
(10, 10, 9, 1, 'Umum', 2, NULL, NULL, '2019-03-09 15:23:43', '2019-03-10 00:35:38'),
(11, 11, 10, 1, 'Umum', 1, '1', NULL, '2019-03-10 00:46:55', '2019-03-10 00:50:37'),
(12, 12, 11, 4, 'Umum', 1, '1', NULL, '2019-03-10 00:53:48', '2019-03-10 01:00:26'),
(13, 13, 12, 4, 'Umum', 1, '1', NULL, '2019-03-10 01:03:48', '2019-03-10 01:04:34'),
(14, 14, 13, 1, 'Umum', 0, NULL, NULL, '2019-03-10 01:28:37', '2019-03-10 01:28:37'),
(15, 15, 14, 1, 'Umum', 0, NULL, NULL, '2019-03-14 09:28:25', '2019-03-14 09:28:25'),
(16, 16, 15, 1, 'Umum', 0, NULL, NULL, '2019-03-16 20:27:12', '2019-03-16 20:27:12'),
(17, 17, 16, 1, '1', 1, '1', NULL, '2019-03-16 21:07:10', '2019-03-16 21:20:29'),
(18, 18, 17, 1, '1', 1, '1', NULL, '2019-03-16 21:33:55', '2019-03-16 21:37:52'),
(19, 19, 18, 1, '1', 1, '1', NULL, '2019-03-16 22:07:50', '2019-03-25 04:04:09'),
(20, 20, 19, 1, '2', 1, '1', NULL, '2019-03-23 18:06:40', '2019-03-25 04:17:53'),
(21, 21, 20, 1, '1', 0, NULL, NULL, '2019-03-23 18:14:09', '2019-03-23 18:14:09'),
(22, 22, 21, 1, '3', 0, NULL, NULL, '2019-03-25 03:59:18', '2019-03-25 03:59:18'),
(23, 23, 23, 1, '3', 1, '1', NULL, '2019-03-25 04:58:29', '2019-03-25 04:59:46'),
(24, 24, 24, 1, '3', 1, '1', NULL, '2019-03-25 05:03:00', '2019-03-25 05:03:41'),
(25, 25, 25, 1, '3', 1, '1', NULL, '2019-03-25 05:05:16', '2019-03-25 05:05:58'),
(26, 26, 26, 1, '2', 1, '1', NULL, '2019-03-25 05:12:34', '2019-03-25 05:13:22'),
(27, 27, 27, 1, '4', 1, '1', NULL, '2019-04-09 00:58:49', '2019-04-09 01:04:38'),
(28, 28, 28, 1, 'Umum', 0, NULL, NULL, '2019-09-25 17:07:13', '2019-09-25 17:07:13'),
(29, 29, 29, 1, 'Umum', 0, NULL, NULL, '2019-09-25 17:08:36', '2019-09-25 17:08:36'),
(30, 30, 30, 1, '4', 0, NULL, 1, '2019-09-25 17:11:29', '2019-09-25 17:15:38'),
(31, 31, 30, 1, '4', 1, '1', NULL, '2019-09-25 17:14:58', '2019-09-25 17:16:23');

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
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$HKF8qFrZzpseIKLACsn76uAhrXvvX/j0MEldjbaNVhsSF17rNnoLy', '8b6L6YZ8F6KxxAVMzaimBphGYfZpebLyl2J9Sq9U0IPHrMsNGHhubBab4Vgg', '2019-03-07 22:08:07', '2019-03-10 01:34:08'),
(2, 'tes', 'test@gmail.com', '$2y$10$NQjEYJ9O9HrnY.UemNutsOu1JuGDBfKasovLe6muJlgwCMiq9Sy1a', '4UhyeonPcbHWhtD6oCVPerfJA0bEqe11nqSO7K46kjgvebZXmOAnX0bydtnC', '2019-03-08 02:15:02', '2019-03-08 02:15:02'),
(3, 'Ariani Puspitawati', 'ariani@gmail.com', '$2y$10$JoqQOn0w2E7Ts8KMQxWq0.BSOsgAS7VzZMZ8gCZnsQxhXxssS.AVq', 'ufdkme4eU3wdFVqA4kH9LUNb0OHhEf74pamBMP8YjftfF7XUFMiSzbSPWkYA', '2019-03-08 21:30:37', '2019-03-08 21:30:37'),
(4, 'arbi nourmies', 'arbi@gmail.com', '$2y$10$uPmKqyeO8s8dyVEQb60tZ.PG0vZRvY0Ms6PBZ3QDgRuXiTMv2wXcy', 'mLqYDnh0jhFiGW8no5PpTcUBlipxomOfVFUljR0VphtPq5NAdpPNUjhWOuaV', '2019-03-10 00:52:44', '2019-03-10 00:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acaras`
--
ALTER TABLE `acaras`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `acaras`
--
ALTER TABLE `acaras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buktis`
--
ALTER TABLE `buktis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
