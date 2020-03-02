-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 01:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acaras`
--

INSERT INTO `acaras` (`id`, `nama`, `logo`, `tgl`, `lokasi`, `pemateri`, `keterangan`, `jumlah`, `harga`, `due`, `header`, `nama_singkat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX DESIGN : Workshop Design UI and UX design for mobile.', 'images/design.png', 'March 10, 2020 Pukul 15:00 - Selesai', 'Gd P Fakultas Teknik Elektro, Ruang P401', 'Aprianil Sesti Rangga', 'TAK & SNACK', '40', '25', '2020-03-10 15:00', 'https://i.imgur.com/vet1fxx.gif', 'UI/UX DESIGN', 'enable', NULL, '2020-02-28 14:27:42'),
(2, 'TECHWEEK WEB DEVELOPMENT : Workshop Web Development Deploy Dynamic Website : HTML, CSS, Bootstrap, PHP, CI dan Deploy', 'images/webdev.png', 'February 25, 2020 Pukul 07:00 - Selesai', 'To be Announced (TBA)', 'Khulafaur Rasyidin', 'TAK & SNACK', '40', '30', '2020-02-25 07:00', 'https://i.imgur.com/vet1fxx.gif', 'TECHWEEK WEB DEVELOPMENT', 'enable', NULL, '2020-02-25 16:59:19'),
(3, 'Data Debunked Day : Seminar Data Mining', 'images/research.png', 'February 25, 2020 Pukul 07:30 - Selesai', 'To be Announced (TBA)', 'Kordas Lab Data Mining', 'TAK & SNACK', '50', '25', '2020-02-25 07:30', 'https://i.imgur.com/vet1fxx.gif', 'Data Debunked Day', 'enable', NULL, '2020-02-25 16:58:28'),
(4, 'Net Conf : Workshop Network', 'images/network.png', 'February 25, 2020 Pukul 07:30 - Selesai', 'To be Announced (TBA)', 'Kadiv Network', 'TAK & SNACK', '40', '30', '2020-02-25 07:30', 'https://i.imgur.com/vet1fxx.gif', 'Net Conf', 'enable', NULL, '2020-02-25 16:58:04'),
(5, 'Media Management', 'images/design.png', 'February 25, 2020 Pukul 12:30 - Selesai', 'To be Announced (TBA)', 'Kadiv MM', 'TAK & SNACKES', '60', '40', '2020-02-25 12:30', 'https://i.imgur.com/vet1fxx.gif', 'Media Management', 'enable', NULL, '2020-02-25 16:57:38'),
(6, 'Testing Lah', 'images/100rb.jpg', 'February 25, 2020 Pukul 15:30 - Selesai', 'Pesbal Blok B9-19', 'Rakuha-san', 'Siksaan kubur dan api neraka', '15', '25', '2020-02-25 15:30', 'https://i.imgur.com/vet1fxx.gif', 'Testing', 'enable', '2020-02-25 14:40:22', '2020-02-25 16:57:05'),
(7, 'Wibu National Competition', 'images/12379.jpg', 'February 25, 2020 Pukul 12:30 - Selesai', 'Pesbal Blok B9-19', 'Rakuha-san', 'Siksaan kubur dan api neraka', '50', '65', '2020-02-25 12:30', 'https://i.imgur.com/xkid922.png', 'Wibu Nationalsis', 'disable', '2020-02-25 16:52:15', '2020-03-02 12:19:08');

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
(1, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$xbVMXNJ40RDzjiBGC3MMLOEEZqw91wKtBOlE.tIYFDf9GEEnLKgRG', 'dSMHYod3jTC8zOpcdclDWPOZlLYON0oipUUw5FLLN2rlmhfjspyI3hPDdGti', '2019-03-07 22:08:32', '2019-03-07 22:08:32'),
(2, 'Rakha Dzaky', 'rakhadzaky9@gmail.com', '$2y$10$znjqiqzi41b1kOQWzI5E8ejBiXtvus/erhX5YfjIDxZmiEFfBTq02', 'OqiHDqiN767SMrlV3WQ0vTRPW6G1mutob5nYvvOwA8VDlI7QmslhzrO6cF7V', '2020-02-26 15:49:46', '2020-02-26 15:49:46'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$nYws.8d5qmYQpH07hyZiOuqJ.ihjZJJjKrrbY7tddqY.1UYoUHCM.', 'qItTl5BPIJ3NrEwzTKv0vIGq0veY434wfnICcFzqvGh1e51DWXFOS7ehIGPr', '2020-02-26 15:50:15', '2020-02-26 15:50:15');

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
-- Table structure for table `awarding_tickets`
--

CREATE TABLE `awarding_tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awarding_tickets`
--

INSERT INTO `awarding_tickets` (`id`, `nama`, `email`, `identitas`, `jabatan`, `ukm`, `fakultas`, `jurusan`, `barcode`, `kehadiran`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uhuy', 'uhuy@gmail.com', '', '', '1', '', '', '0001', '', '1', NULL, NULL),
(2, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '', '', '2', '', '', '0000', NULL, '1', '2020-02-01 08:29:38', '2020-02-01 08:29:38'),
(3, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '', '', '2', '', '', '0000', NULL, '1', '2020-02-01 08:35:50', '2020-02-01 08:35:50'),
(4, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '', '', '2', '', '', '0004', '1', '1', '2020-02-01 08:37:08', '2020-02-01 13:24:58'),
(5, 'Yoi', 'hafizhconan@gmail.com', '', '', '1', '', '', '0005', NULL, '1', '2020-02-01 09:03:45', '2020-02-01 09:03:45'),
(6, 'CCI UNITEL', 'hafizhconan@gmail.com', '', '', '1', '', '', '0006', NULL, '1', '2020-02-01 09:30:52', '2020-02-01 09:30:52'),
(7, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '', '', '1', '', '', '0007', '1', '1', '2020-02-01 11:39:52', '2020-02-01 13:21:22'),
(8, 'test', 'hakuku454@gmail.com', '', '', '1', '', '', '0008', NULL, '1', '2020-02-01 11:41:52', '2020-02-01 11:41:52'),
(9, 'Rakuka-san Wibu', 'rakhadzaky9@gmail.com', '', '', '1', '', '', '0009', NULL, '1', '2020-02-01 11:52:12', '2020-02-01 11:52:13'),
(10, 'Last tests', 'hafizhconan@gmail.coma', '', '', '1', '', '', '0010', '1', '1', '2020-02-01 11:52:33', '2020-02-01 13:25:19'),
(11, 'lagi lah', 'hafizhconan@gmail.com', '', '', '1', '', '', '0011', '1', '1', '2020-02-01 11:53:42', '2020-02-01 13:25:12'),
(12, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '', '', '1', '', '', '0012', '1', '1', '2020-02-01 11:54:40', '2020-02-01 13:25:05'),
(13, 'Maneh teh wibu rak?', 'rakhadzaky9@gmail.com', '', '', '1', '', '', '0013', NULL, '0', '2020-02-01 11:56:36', '2020-02-01 12:31:39'),
(14, 'CCI UNITEL 2', 'hafizhconan@gmail.com', '', '', '2', '', '', '0014', '1', '1', '2020-02-01 12:24:13', '2020-02-01 13:25:57'),
(15, 'well done', 'hafizhconan@gmail.com', '', '', '2', '', '', '0015', NULL, '0', '2020-02-01 12:25:14', '2020-02-01 12:31:26'),
(16, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '', '', '1', '', '', '0016', NULL, '0', '2020-02-01 12:27:02', '2020-02-01 12:28:51'),
(17, 'adsa', 'hafizhconan@gmail.com', '', '', '2', '', '', '0017', NULL, '0', '2020-02-01 12:30:29', '2020-02-01 12:31:16'),
(18, 'Athallah Tsany Rakha Dzaky', 'rakhadzaky9@gmail.com', '', '', '1', '', '', '0018', NULL, '1', '2020-02-05 04:10:01', '2020-02-05 04:10:01'),
(19, 'Rakha Dzaky', 'rakhadzaky9@gmail.com', '1301174026', 'Sekretaris Umum', '1', '0', '0', '0019', NULL, '1', '2020-02-08 17:18:27', '2020-02-08 17:18:27'),
(20, 'Rakha Dzaky', 'rakhadzaky9@gmail.com', '1301174026', 'Sekretaris Umum', '1', '0', '0', '0020', NULL, '1', '2020-02-08 17:47:27', '2020-02-08 17:47:27'),
(21, 'Athallah Tsany Rakha Dzaky', 'rakhadzaky9@gmail.com', '1301174026', 'Sekretaris Umum', '1', 'fif', 's1if', '0021', NULL, '1', '2020-02-08 17:51:39', '2020-02-08 17:51:39'),
(22, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'qwe', '2', 'fif', 's1if', '0022', NULL, '1', '2020-02-10 01:54:12', '2020-02-10 01:54:12'),
(23, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '123', 'qwe', '1', 'fif', 's1if', '0023', NULL, '1', '2020-02-10 02:06:02', '2020-02-10 02:06:02'),
(24, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0024', NULL, '1', '2020-02-10 17:06:21', '2020-02-10 17:06:23'),
(25, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0025', NULL, '1', '2020-02-10 17:06:21', '2020-02-10 17:06:23'),
(26, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0026', NULL, '1', '2020-02-10 17:06:21', '2020-02-10 17:06:23'),
(27, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0027', NULL, '1', '2020-02-10 17:06:21', '2020-02-10 17:06:23'),
(28, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0028', NULL, '1', '2020-02-10 17:06:23', '2020-02-10 17:06:23'),
(29, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0029', NULL, '1', '2020-02-10 17:06:23', '2020-02-10 17:06:24'),
(30, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0030', NULL, '1', '2020-02-10 17:06:23', '2020-02-10 17:06:24'),
(31, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0031', NULL, '1', '2020-02-10 17:06:24', '2020-02-10 17:06:24'),
(32, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0032', NULL, '1', '2020-02-10 17:06:24', '2020-02-10 17:06:25'),
(33, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0033', NULL, '1', '2020-02-10 17:06:23', '2020-02-10 17:06:25'),
(34, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0034', NULL, '1', '2020-02-10 17:06:23', '2020-02-10 17:06:25'),
(35, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0035', NULL, '1', '2020-02-10 17:06:24', '2020-02-10 17:06:25'),
(36, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0036', NULL, '1', '2020-02-10 17:06:25', '2020-02-10 17:06:25'),
(37, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0037', NULL, '1', '2020-02-10 17:06:26', '2020-02-10 17:06:26'),
(38, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '16', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0038', NULL, '1', '2020-02-10 17:25:05', '2020-02-10 17:25:05'),
(39, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'fif', 's1if', '0039', NULL, '1', '2020-02-10 17:26:48', '2020-02-10 17:26:48'),
(40, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0040', NULL, '1', '2020-02-10 17:31:04', '2020-02-10 17:31:04'),
(41, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0041', NULL, '1', '2020-02-10 17:31:09', '2020-02-10 17:31:09'),
(42, 'Ariani Puspitawati', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'feb', 's1akun', '0042', NULL, '1', '2020-02-11 08:58:08', '2020-02-11 08:58:08'),
(43, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '123', 'Kepala Divisi Web Development', '1', 'fif', 's1if', '0043', NULL, '0', '2020-02-11 09:02:23', '2020-02-11 09:12:33'),
(44, 'yareyare', 'haha@asd', '123', 'asd', '1', 'feb', 's1akun', '0044', '1', '1', '2020-02-14 09:13:12', '2020-02-14 09:13:12'),
(45, 'Ariani Puspitawati', 'hafizhconan@gmail.com', 'a0c2d3f5b1g6b1g6', 'qwe', '3', 'fri', 's1sisfo', '0045', '1', '1', '2020-02-14 09:14:18', '2020-02-14 09:14:18');

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
(20, '31', 'Arbi Nourman', 'Mandiri', '20190926001601_temp_1565256231063.jpg', '2019-09-25 17:16:01', '2019-09-25 17:16:01'),
(21, '48', 'Arbi Nourman', 'Mandiri', '202002252245549b88107585d2a168b8f8dbc82a88c39a.jpg', '2020-02-25 15:45:54', '2020-02-25 15:45:54'),
(22, '47', 'Sayyid Taufiq A', 'Mandiri', '20200225225103098c4887c2b150928d46660febc0497a.webp', '2020-02-25 15:51:03', '2020-02-25 15:51:03'),
(23, '46', 'Arbi Nourman', 'Mandiri', '202002252252035.png', '2020-02-25 15:52:03', '2020-02-25 15:52:03'),
(24, '45', 'Arbi Nourman', 'Mandiri', '20200225225333811f1a59ac958bcfbaa197d0920a3e33.jpg', '2020-02-25 15:53:33', '2020-02-25 15:53:33'),
(25, '44', 'Arbi Nourman', 'Mandiri', '20200225225516182305478@2x.png', '2020-02-25 15:55:16', '2020-02-25 15:55:16'),
(26, '50', 'Rakha', 'BRI', '20200226224023toolate.png', '2020-02-26 15:40:23', '2020-02-26 15:40:23');

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
(30, 'CCI UNITEL', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 4, 1, '2019-09-25 17:11:25', '2019-09-25 17:15:39'),
(31, 'TIDAK MEMILIH', '085794832299', '10123786123', 'hafizhconan@gmail.com', '1', NULL, NULL, NULL, '2020-02-20 13:21:31', '2020-02-20 13:21:31'),
(32, 'Ariani Puspitawati', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 1, NULL, '2020-02-25 14:05:26', '2020-02-25 14:05:26'),
(33, 'Nigga-san', '085794832299', '10123786123', 'rakhadzaky9@gmail.com', 'U1', NULL, 6, 1, '2020-02-25 14:43:35', '2020-02-25 16:20:24'),
(34, 'Yoi Bro', '0912370981273', '10293781203', 'hafizhconan@gmail.com', 'U1', NULL, 6, NULL, '2020-02-25 15:29:39', '2020-02-25 15:29:39'),
(35, 'CCI UNITEL', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 6, NULL, '2020-02-25 15:31:25', '2020-02-25 15:31:25'),
(36, 'CCI UNITEL', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 6, NULL, '2020-02-25 15:31:40', '2020-02-25 15:31:40'),
(37, 'CCI UNITEL', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 6, 1, '2020-02-25 15:31:57', '2020-02-25 16:20:09'),
(38, 'Ariani Puspitawati', '085794832299', '10123786123', 'hafizhconan@gmail.com', 'U1', NULL, 4, NULL, '2020-02-25 17:18:11', '2020-02-25 17:18:11'),
(39, 'Athallah Tsany Rakha Dzaky', '085801730223', '1301174026', 'rakhadzaky9@gmail.com', 'U1', NULL, 7, NULL, '2020-02-26 15:37:07', '2020-02-26 15:37:07'),
(40, 'Rakha Dzaky', '085801730223', '1301174026', 'rakhadzaky9@gmail.com', 'U1', NULL, 1, NULL, '2020-02-28 14:28:06', '2020-02-28 14:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` varchar(3) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`) VALUES
('feb', 'Fakultas Ekonomi dan Bisnis'),
('fif', 'Fakultas Informatika'),
('fik', 'Fakultas Industri Kreatif'),
('fit', 'Fakultas Ilmu Terapan'),
('fkb', 'Fakultas Komunikasi dan Bisnis'),
('fri', 'Fakultas Rekayasa Industri'),
('fte', 'Fakultas Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id_fakultas` varchar(3) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id_fakultas`, `id`, `nama_jurusan`) VALUES
('fit', 'd3if', 'D3 Teknik Informatika'),
('fit', 'd3ka', 'D3 Komputerisasi Akuntansi'),
('fit', 'd3mi', 'D3 Manajemen Informatika'),
('fit', 'd3mp', 'D3 Manajemen Pemasaran'),
('fit', 'd3ph', 'D3 Perhotelan'),
('fit', 'd3tk', 'D3 Teknik Komputer'),
('fit', 'd3tt', 'D3 Teknik Telekomunikasi'),
('fit', 'd4sm', 'D4 Sistem Multimedia'),
('fkb', 's1adbis', 'S1 Administrasi Bisnis'),
('feb', 's1akun', 'S1 Akuntansi'),
('fik', 's1despro', 'S1 Desain Produk'),
('fik', 's1di', 'S1 Desain Interior'),
('fik', 's1dkv', 'S1 Desain Komunikasi Visual'),
('fif', 's1if', 'S1 Teknik Informatika'),
('fif', 's1ik', 'S1 Ilmu Komputasi'),
('fkb', 's1ikom', 'S1 Ilmu Komunikasi'),
('fik', 's1ktm', 'S1 Kriya Tekstil dan Mode'),
('feb', 's1mbti', 'S1 MBTI'),
('fri', 's1sisfo', 'S1 Sistem Informasi'),
('fte', 's1sk', 'S1 Sistem Komputer'),
('fik', 's1srm', 'S1 Seni Rupa Murni'),
('fte', 's1te', 'S1 Teknik Elektro'),
('fif', 's1tekinf', 'S1 Teknologi Informasi'),
('fte', 's1tf', 'S1 Teknik Fisika'),
('fri', 's1ti', 'S1 Teknik Industri'),
('fte', 's1tt', 'S1 Teknik Telekomunikasi');

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
(2, '2019_03_17_103151_create_acaras_table', 2),
(3, '2019_12_23_203011_add_field_socialite_to_users_table', 3),
(4, '2020_02_01_144617_awarding_ticket', 4),
(5, '2020_02_01_150242_create_ukms_table', 5),
(6, '2020_02_25_223657_create_variables_table', 6);

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
(31, '0031', NULL, NULL, 1, NULL, '2019-09-25 17:14:58', '2019-09-25 17:14:58'),
(32, '0032', NULL, NULL, 1, NULL, '2020-02-20 13:21:33', '2020-02-20 13:21:33'),
(33, '0033', NULL, NULL, 1, NULL, '2020-02-25 14:10:15', '2020-02-25 14:10:15'),
(34, '0034', NULL, NULL, 1, NULL, '2020-02-25 14:23:03', '2020-02-25 14:23:03'),
(35, '0035', NULL, NULL, 1, NULL, '2020-02-25 14:34:37', '2020-02-25 14:34:37'),
(36, '0036', NULL, NULL, 1, NULL, '2020-02-25 14:47:16', '2020-02-25 14:47:17'),
(37, '0037', NULL, NULL, 1, NULL, '2020-02-25 14:48:44', '2020-02-25 14:48:44'),
(38, '0038', NULL, NULL, 1, NULL, '2020-02-25 14:50:48', '2020-02-25 14:50:48'),
(39, '0039', NULL, NULL, 1, NULL, '2020-02-25 14:52:14', '2020-02-25 14:52:15'),
(40, '0040', NULL, NULL, 1, NULL, '2020-02-25 14:56:27', '2020-02-25 14:56:27'),
(41, '0041', NULL, NULL, 1, NULL, '2020-02-25 14:57:53', '2020-02-25 14:57:53'),
(42, '0042', NULL, NULL, 1, NULL, '2020-02-25 14:58:05', '2020-02-25 14:58:05'),
(43, '0043', NULL, NULL, 1, NULL, '2020-02-25 14:58:46', '2020-02-25 14:58:46'),
(44, '0044', NULL, NULL, 1, NULL, '2020-02-25 14:59:30', '2020-02-25 14:59:30'),
(45, '0045', NULL, NULL, 1, 1, '2020-02-25 15:01:52', '2020-02-25 16:34:50'),
(46, '0046', NULL, NULL, 1, 1, '2020-02-25 15:02:09', '2020-02-25 16:20:25'),
(47, '0047', NULL, NULL, 1, 1, '2020-02-25 15:38:15', '2020-02-25 16:20:09'),
(48, '0048', NULL, NULL, 1, NULL, '2020-02-25 15:40:15', '2020-02-25 15:40:15'),
(49, '0049', NULL, NULL, 1, NULL, '2020-02-25 17:18:14', '2020-02-25 17:18:15'),
(50, '0050', 1, NULL, 1, NULL, '2020-02-26 15:37:27', '2020-02-28 12:41:11'),
(51, '0051', NULL, NULL, 1, NULL, '2020-02-28 14:43:31', '2020-02-28 14:45:00');

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
(31, 31, 30, 1, '4', 1, '1', NULL, '2019-09-25 17:14:58', '2019-09-25 17:16:23'),
(32, 32, 31, 1, 'Umum', 0, NULL, NULL, '2020-02-20 13:21:34', '2020-02-20 13:21:34'),
(33, 33, 32, 1, '1', 0, NULL, NULL, '2020-02-25 14:10:15', '2020-02-25 14:10:15'),
(34, 34, 32, 1, '1', 0, NULL, NULL, '2020-02-25 14:23:03', '2020-02-25 14:23:03'),
(35, 35, 32, 1, '1', 0, NULL, NULL, '2020-02-25 14:34:37', '2020-02-25 14:34:37'),
(36, 36, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:47:17', '2020-02-25 14:47:17'),
(37, 37, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:48:44', '2020-02-25 14:48:44'),
(38, 38, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:50:48', '2020-02-25 14:50:48'),
(39, 39, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:52:15', '2020-02-25 14:52:15'),
(40, 40, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:56:27', '2020-02-25 14:56:27'),
(41, 41, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:57:53', '2020-02-25 14:57:53'),
(42, 42, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:58:05', '2020-02-25 14:58:05'),
(43, 43, 33, 1, '6', 0, NULL, NULL, '2020-02-25 14:58:46', '2020-02-25 14:58:46'),
(44, 44, 33, 1, '6', 2, NULL, NULL, '2020-02-25 14:59:30', '2020-02-25 15:55:16'),
(45, 45, 33, 1, '6', 2, NULL, 1, '2020-02-25 15:01:52', '2020-02-25 16:34:50'),
(46, 46, 33, 1, '6', 2, NULL, 1, '2020-02-25 15:02:09', '2020-02-25 16:20:24'),
(47, 47, 37, 1, '6', 2, NULL, 1, '2020-02-25 15:38:15', '2020-02-25 16:20:09'),
(48, 48, 37, 1, '6', 1, '1', NULL, '2020-02-25 15:40:15', '2020-02-25 16:13:51'),
(49, 49, 38, 1, '4', 1, '1', NULL, '2020-02-25 17:18:15', '2020-02-25 17:29:21'),
(50, 50, 39, 1, '7', 1, '1', NULL, '2020-02-26 15:37:27', '2020-02-26 15:41:18'),
(51, 51, 40, 1, '1', 1, '2', NULL, '2020-02-28 14:43:31', '2020-02-28 14:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `ukms`
--

CREATE TABLE `ukms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ukm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukms`
--

INSERT INTO `ukms` (`id`, `nama_ukm`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 'CCI - Computer Central Improvement', '33', NULL, '2020-02-11 09:12:33'),
(2, 'PMR - Palang Merah Remaja', '0', NULL, '2020-02-10 01:54:12'),
(3, 'Non UKM', '50', '2020-02-05 04:11:58', '2020-02-05 04:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `socialite_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `socialite_id`, `socialite_name`, `photo`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Sayyid Taufiq Abdul Hafizh', 'hafizhconan@gmail.com', '$2y$10$HKF8qFrZzpseIKLACsn76uAhrXvvX/j0MEldjbaNVhsSF17rNnoLy', 'BnHfboJoMD8fdKZDXOrS6ackat6RBaQmqoBsgVadchaebAO1gd684SdLrP2J', '2019-03-07 22:08:07', '2019-03-10 01:34:08'),
(2, NULL, NULL, NULL, 'tes', 'test@gmail.com', '$2y$10$NQjEYJ9O9HrnY.UemNutsOu1JuGDBfKasovLe6muJlgwCMiq9Sy1a', '4UhyeonPcbHWhtD6oCVPerfJA0bEqe11nqSO7K46kjgvebZXmOAnX0bydtnC', '2019-03-08 02:15:02', '2019-03-08 02:15:02'),
(3, NULL, NULL, NULL, 'Ariani Puspitawati', 'ariani@gmail.com', '$2y$10$JoqQOn0w2E7Ts8KMQxWq0.BSOsgAS7VzZMZ8gCZnsQxhXxssS.AVq', 'ufdkme4eU3wdFVqA4kH9LUNb0OHhEf74pamBMP8YjftfF7XUFMiSzbSPWkYA', '2019-03-08 21:30:37', '2019-03-08 21:30:37'),
(4, NULL, NULL, NULL, 'arbi nourmies', 'arbi@gmail.com', '$2y$10$uPmKqyeO8s8dyVEQb60tZ.PG0vZRvY0Ms6PBZ3QDgRuXiTMv2wXcy', 'mLqYDnh0jhFiGW8no5PpTcUBlipxomOfVFUljR0VphtPq5NAdpPNUjhWOuaV', '2019-03-10 00:52:44', '2019-03-10 00:52:44'),
(5, NULL, NULL, NULL, 'Rakha Dzaky', 'rakhadzaky9@gmail.com', '$2y$10$lADQNDpwo41vsdgqlQo8.Os8.ufZxr/F51HdeB1hJtYt8yfeALZZC', 'Q2WacLhbNNHr0rS2dVX6ueCZyK19scZk01ltSRpSgnhapKjcabjpCxAcOhVx', '2020-02-26 15:47:49', '2020-02-26 15:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE `variables` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_rekn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`id`, `nama_rekn`, `no_rekn`, `kontak1`, `kontak2`, `main_logo`, `tahun_acara`) VALUES
(1, 'Salsabila Putri JA', '586139988 (BNIA)', 'hilmi-hidayat (LINEA)', 'arbi_nb (LINEA)', 'images/cciSummit2020.png', '2020');

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
-- Indexes for table `awarding_tickets`
--
ALTER TABLE `awarding_tickets`
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
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
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
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acaras`
--
ALTER TABLE `acaras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `awarding_tickets`
--
ALTER TABLE `awarding_tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `buktis`
--
ALTER TABLE `buktis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
