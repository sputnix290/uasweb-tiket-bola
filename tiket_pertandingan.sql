-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 09:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_pertandingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama_admin`, `username`, `email`, `password`, `jabatan`, `created_at`, `updated_at`) VALUES
(8, 'Feis Aulia', 'feis', 'daad@gmail.com', '$2y$12$xxLJrD/TpR2j.lahJEsR2e10/1bGW9NWZm.qjqiBlVM7QhONDMcEi', 'Administrator', '2024-05-17 17:31:56', '2024-05-17 18:50:46'),
(10, 'Mohammad Natan', 'natice', 'natan14@gmail.com', '$2y$12$4b4HtNLieuDtB1zZVRDEeeFXC937c.5tyzK4lsejJj8C1nnSFTYaO', 'Administrator', '2024-05-17 17:55:17', '2024-05-17 17:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
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
-- Table structure for table `gors`
--

CREATE TABLE `gors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gor` varchar(30) NOT NULL,
  `lokasi_gor` varchar(50) NOT NULL,
  `kapasitas_gor` int(11) NOT NULL DEFAULT 20,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gors`
--

INSERT INTO `gors` (`id`, `nama_gor`, `lokasi_gor`, `kapasitas_gor`, `created_at`, `updated_at`) VALUES
(1, 'Gor UNY', 'Yogyakarta', 10000, '2024-04-27 04:19:25', '2024-04-27 04:19:25'),
(2, 'Gor Unesa', 'Surabaya', 8000, '2024-04-27 05:01:56', '2024-04-27 05:01:56'),
(3, 'Gor UNJ', 'Jakarta', 7000, '2024-04-27 05:11:20', '2024-04-27 05:11:20'),
(4, 'Gor Serbaguna', 'Medan', 5000, '2024-04-27 05:13:12', '2024-04-27 05:13:12'),
(9, 'Gor UMM', 'Malang', 5000, '2024-05-17 18:27:26', '2024-05-17 18:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_futsals`
--

CREATE TABLE `jadwal_futsals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim_home` bigint(20) UNSIGNED NOT NULL,
  `id_tim_away` bigint(20) UNSIGNED NOT NULL,
  `id_kompetisi` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `id_gor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_futsals`
--

INSERT INTO `jadwal_futsals` (`id`, `id_tim_home`, `id_tim_away`, `id_kompetisi`, `tanggal`, `waktu_mulai`, `id_gor`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 2, '2024-05-02', '11:30:00', 2, '2024-04-30 00:58:45', '2024-04-30 00:58:45'),
(2, 2, 3, 2, '2024-05-16', '10:00:00', 3, '2024-05-10 20:57:50', '2024-05-10 20:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sepak_bolas`
--

CREATE TABLE `jadwal_sepak_bolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tim_home` bigint(20) UNSIGNED NOT NULL,
  `id_tim_away` bigint(20) UNSIGNED NOT NULL,
  `id_kompetisi` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `id_stadion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_sepak_bolas`
--

INSERT INTO `jadwal_sepak_bolas` (`id`, `id_tim_home`, `id_tim_away`, `id_kompetisi`, `tanggal`, `waktu_mulai`, `id_stadion`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 1, '2024-04-29', '15:00:00', 5, '2024-04-27 23:55:46', '2024-04-29 07:06:58'),
(4, 3, 3, 1, '2024-05-18', '15:00:00', 1, '2024-05-10 20:57:15', '2024-05-10 20:57:15'),
(5, 2, 3, 1, '2024-05-25', '17:30:00', 1, '2024-05-17 22:26:20', '2024-05-17 22:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kompetisis`
--

CREATE TABLE `kompetisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kompetisi` varchar(30) NOT NULL,
  `tipe_kompetisi` varchar(30) NOT NULL,
  `musim_kompetisi` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kompetisis`
--

INSERT INTO `kompetisis` (`id`, `nama_kompetisi`, `tipe_kompetisi`, `musim_kompetisi`, `created_at`, `updated_at`) VALUES
(1, 'BRI Liga 1', 'Liga', '2024-2025', '2024-04-27 17:58:34', '2024-05-17 21:59:36'),
(2, 'Pro Futsal League', 'Liga', '2023-2024', '2024-04-30 00:58:08', '2024-04-30 00:58:08');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_27_072030_create_stadions_table', 1),
(5, '2024_04_27_072055_create_gors_table', 1),
(6, '2024_04_27_072106_create_tim_homes_table', 1),
(7, '2024_04_27_072115_create_tim_aways_table', 1),
(8, '2024_04_27_072125_create_kompetisis_table', 1),
(9, '2024_04_27_072157_create_admins_table', 1),
(10, '2024_04_27_072205_create_penggunas_table', 1),
(11, '2024_04_27_072238_create_jadwal_sepak_bolas_table', 1),
(12, '2024_04_27_072252_create_jadwal_futsals_table', 1),
(13, '2024_04_27_072318_create_tiket_futsals_table', 1),
(14, '2024_04_27_072327_create_tiket_sepak_bolas_table', 1),
(15, '2024_04_27_072344_create_pesan_tiket_sepak_bolas_table', 1),
(16, '2024_04_27_072351_create_pesan_tiket_futsals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama_pengguna`, `username`, `email`, `password`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Jojo', 'Jojo123', 'jojo123@gmail.com', 'jojo123', '082567524112', '2024-04-27 22:10:41', '2024-04-27 22:10:41'),
(2, 'Tito', 'tito', 'tito123@gmail.com', 'tito123', '082431689425', '2024-04-30 02:36:27', '2024-04-30 02:36:27'),
(8, 'Agus', 'agus yudha', 'agus@gmail.com', '$2y$12$UqOIqx.qNAI8IpoblELoxuLq4MBWrgOrIbxia/rXnU.cOodnQQMS6', '0826396396382', '2024-05-17 10:12:58', '2024-05-17 10:12:58'),
(9, 'Jaya', 'jaya', 'jaya@gmail.com', '$2y$12$kynAqUpZIGWbwIXm4zgrsesMbvvf6fbyysXtIo1B916QwroXeGE4O', '081538163816', '2024-05-17 17:46:25', '2024-05-17 17:46:25'),
(11, 'Arga', 'arga', 'arga@gmail.com', '$2y$12$Vf/f8NC4tHJFzB7Gqz4un./vztu9.r0oKomoopI.M7Z4LrrKPO8du', '081631573627', '2024-05-17 18:58:32', '2024-05-17 18:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_tiket_futsals`
--

CREATE TABLE `pesan_tiket_futsals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket_futsal` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_tiket_futsals`
--

INSERT INTO `pesan_tiket_futsals` (`id`, `id_tiket_futsal`, `id_pengguna`, `tanggal_pesan`, `jumlah_pesan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-04-30', 2, '2024-04-30 02:36:43', '2024-04-30 02:36:43'),
(2, 2, 1, '2024-05-14', 5, '2024-05-10 21:20:10', '2024-05-10 21:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_tiket_sepak_bolas`
--

CREATE TABLE `pesan_tiket_sepak_bolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket_sepak_bola` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_tiket_sepak_bolas`
--

INSERT INTO `pesan_tiket_sepak_bolas` (`id`, `id_tiket_sepak_bola`, `id_pengguna`, `tanggal_pesan`, `jumlah_pesan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-04-30', 2, '2024-04-30 02:09:51', '2024-04-30 02:09:51'),
(2, 2, 2, '2024-05-11', 3, '2024-05-10 21:01:37', '2024-05-10 21:02:05');

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
('iBSu4W9QGBvDdVrLSPEA3j7JBbCMjXm98vUDmt5D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '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', 1716010614);

-- --------------------------------------------------------

--
-- Table structure for table `stadions`
--

CREATE TABLE `stadions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_stadion` varchar(30) NOT NULL,
  `lokasi_stadion` varchar(50) NOT NULL,
  `kapasitas_stadion` int(11) NOT NULL DEFAULT 20,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stadions`
--

INSERT INTO `stadions` (`id`, `nama_stadion`, `lokasi_stadion`, `kapasitas_stadion`, `created_at`, `updated_at`) VALUES
(1, 'GBLA', 'Bandung', 75000, '2024-04-27 01:25:43', '2024-04-27 01:25:43'),
(2, 'Kanjuruhan', 'Malang', 40000, '2024-04-27 01:28:09', '2024-04-27 01:28:09'),
(3, 'Surajaya', 'Lamongan', 35000, '2024-04-27 02:07:47', '2024-04-27 02:07:47'),
(4, 'Batakan', 'Kalimantan Barat', 60000, '2024-04-27 02:10:09', '2024-04-27 02:10:09'),
(5, 'GBK', 'DKI Jakarta', 95000, '2024-04-27 02:11:15', '2024-04-27 02:11:15'),
(6, 'Pakansari', 'Bogor', 65000, '2024-04-27 02:14:59', '2024-04-27 02:14:59'),
(7, 'Jatidiri', 'Semarang', 50000, '2024-04-27 02:18:54', '2024-04-27 02:18:54'),
(8, 'JIS', 'Jakarta Barat', 80000, '2024-04-27 02:20:57', '2024-04-27 02:20:57'),
(9, 'Gajayana', 'Malang', 20000, '2024-04-27 02:56:34', '2024-04-27 02:56:34'),
(21, 'Sultan Agung', 'Bantul', 20000, '2024-05-17 18:30:01', '2024-05-17 18:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_futsals`
--

CREATE TABLE `tiket_futsals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal_futsal` bigint(20) UNSIGNED NOT NULL,
  `kategori_tiket` enum('Ekonomi','VIP','VVIP') NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket_futsals`
--

INSERT INTO `tiket_futsals` (`id`, `id_jadwal_futsal`, `kategori_tiket`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(1, 1, 'VIP', 200000, '2024-04-30 01:09:44', '2024-04-30 01:09:44'),
(2, 2, 'VIP', 400000, '2024-05-10 21:00:42', '2024-05-10 21:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_sepak_bolas`
--

CREATE TABLE `tiket_sepak_bolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal_sepak_bola` bigint(20) UNSIGNED NOT NULL,
  `kategori_tiket` enum('Ekonomi','VIP','VVIP') NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket_sepak_bolas`
--

INSERT INTO `tiket_sepak_bolas` (`id`, `id_jadwal_sepak_bola`, `kategori_tiket`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ekonomi', 350000, '2024-04-30 00:51:39', '2024-04-30 00:54:47'),
(2, 4, 'Ekonomi', 250000, '2024-05-10 20:59:19', '2024-05-10 20:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `tim_aways`
--

CREATE TABLE `tim_aways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tim_away` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim_aways`
--

INSERT INTO `tim_aways` (`id`, `nama_tim_away`, `created_at`, `updated_at`) VALUES
(1, 'Persebaya FC', '2024-04-27 06:41:27', '2024-05-10 20:03:53'),
(2, 'Persis Solo', '2024-04-27 21:43:48', '2024-04-27 21:43:48'),
(3, 'Borneo FC', '2024-04-27 23:53:52', '2024-04-27 23:53:52'),
(4, 'Unggul FC', '2024-04-30 00:57:36', '2024-04-30 00:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `tim_homes`
--

CREATE TABLE `tim_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tim_home` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim_homes`
--

INSERT INTO `tim_homes` (`id`, `nama_tim_home`, `created_at`, `updated_at`) VALUES
(1, 'Arema FC', '2024-04-27 06:41:07', '2024-04-27 06:41:07'),
(2, 'Persib FC', '2024-04-27 21:43:30', '2024-05-10 20:03:15'),
(3, 'Persik FC', '2024-04-30 00:56:11', '2024-05-10 20:03:21'),
(4, 'Kancil WHW', '2024-04-30 00:57:25', '2024-04-30 00:57:25'),
(7, 'City', '2024-05-15 06:29:24', '2024-05-15 06:29:24'),
(8, 'Persela', '2024-05-17 08:27:18', '2024-05-17 08:28:00'),
(9, 'Westham', '2024-05-17 22:19:29', '2024-05-17 22:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gors`
--
ALTER TABLE `gors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gors_nama_gor_unique` (`nama_gor`);

--
-- Indexes for table `jadwal_futsals`
--
ALTER TABLE `jadwal_futsals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_futsals_id_tim_home_foreign` (`id_tim_home`),
  ADD KEY `jadwal_futsals_id_tim_away_foreign` (`id_tim_away`),
  ADD KEY `jadwal_futsals_id_kompetisi_foreign` (`id_kompetisi`),
  ADD KEY `jadwal_futsals_id_gor_foreign` (`id_gor`);

--
-- Indexes for table `jadwal_sepak_bolas`
--
ALTER TABLE `jadwal_sepak_bolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_sepak_bolas_id_tim_home_foreign` (`id_tim_home`),
  ADD KEY `jadwal_sepak_bolas_id_tim_away_foreign` (`id_tim_away`),
  ADD KEY `jadwal_sepak_bolas_id_kompetisi_foreign` (`id_kompetisi`),
  ADD KEY `jadwal_sepak_bolas_id_stadion_foreign` (`id_stadion`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetisis`
--
ALTER TABLE `kompetisis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kompetisis_nama_kompetisi_unique` (`nama_kompetisi`);

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
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunas_username_unique` (`username`);

--
-- Indexes for table `pesan_tiket_futsals`
--
ALTER TABLE `pesan_tiket_futsals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_tiket_futsals_id_tiket_futsal_foreign` (`id_tiket_futsal`),
  ADD KEY `pesan_tiket_futsals_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `pesan_tiket_sepak_bolas`
--
ALTER TABLE `pesan_tiket_sepak_bolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_tiket_sepak_bolas_id_tiket_sepak_bola_foreign` (`id_tiket_sepak_bola`),
  ADD KEY `pesan_tiket_sepak_bolas_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stadions`
--
ALTER TABLE `stadions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stadions_nama_stadion_unique` (`nama_stadion`);

--
-- Indexes for table `tiket_futsals`
--
ALTER TABLE `tiket_futsals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiket_futsals_id_jadwal_futsal_foreign` (`id_jadwal_futsal`);

--
-- Indexes for table `tiket_sepak_bolas`
--
ALTER TABLE `tiket_sepak_bolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiket_sepak_bolas_id_jadwal_sepak_bola_foreign` (`id_jadwal_sepak_bola`);

--
-- Indexes for table `tim_aways`
--
ALTER TABLE `tim_aways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim_homes`
--
ALTER TABLE `tim_homes`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gors`
--
ALTER TABLE `gors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_futsals`
--
ALTER TABLE `jadwal_futsals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_sepak_bolas`
--
ALTER TABLE `jadwal_sepak_bolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetisis`
--
ALTER TABLE `kompetisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesan_tiket_futsals`
--
ALTER TABLE `pesan_tiket_futsals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan_tiket_sepak_bolas`
--
ALTER TABLE `pesan_tiket_sepak_bolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stadions`
--
ALTER TABLE `stadions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tiket_futsals`
--
ALTER TABLE `tiket_futsals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket_sepak_bolas`
--
ALTER TABLE `tiket_sepak_bolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tim_aways`
--
ALTER TABLE `tim_aways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tim_homes`
--
ALTER TABLE `tim_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_futsals`
--
ALTER TABLE `jadwal_futsals`
  ADD CONSTRAINT `jadwal_futsals_id_gor_foreign` FOREIGN KEY (`id_gor`) REFERENCES `gors` (`id`),
  ADD CONSTRAINT `jadwal_futsals_id_kompetisi_foreign` FOREIGN KEY (`id_kompetisi`) REFERENCES `kompetisis` (`id`),
  ADD CONSTRAINT `jadwal_futsals_id_tim_away_foreign` FOREIGN KEY (`id_tim_away`) REFERENCES `tim_aways` (`id`),
  ADD CONSTRAINT `jadwal_futsals_id_tim_home_foreign` FOREIGN KEY (`id_tim_home`) REFERENCES `tim_homes` (`id`);

--
-- Constraints for table `jadwal_sepak_bolas`
--
ALTER TABLE `jadwal_sepak_bolas`
  ADD CONSTRAINT `jadwal_sepak_bolas_id_kompetisi_foreign` FOREIGN KEY (`id_kompetisi`) REFERENCES `kompetisis` (`id`),
  ADD CONSTRAINT `jadwal_sepak_bolas_id_stadion_foreign` FOREIGN KEY (`id_stadion`) REFERENCES `stadions` (`id`),
  ADD CONSTRAINT `jadwal_sepak_bolas_id_tim_away_foreign` FOREIGN KEY (`id_tim_away`) REFERENCES `tim_aways` (`id`),
  ADD CONSTRAINT `jadwal_sepak_bolas_id_tim_home_foreign` FOREIGN KEY (`id_tim_home`) REFERENCES `tim_homes` (`id`);

--
-- Constraints for table `pesan_tiket_futsals`
--
ALTER TABLE `pesan_tiket_futsals`
  ADD CONSTRAINT `pesan_tiket_futsals_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`),
  ADD CONSTRAINT `pesan_tiket_futsals_id_tiket_futsal_foreign` FOREIGN KEY (`id_tiket_futsal`) REFERENCES `tiket_futsals` (`id`);

--
-- Constraints for table `pesan_tiket_sepak_bolas`
--
ALTER TABLE `pesan_tiket_sepak_bolas`
  ADD CONSTRAINT `pesan_tiket_sepak_bolas_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`),
  ADD CONSTRAINT `pesan_tiket_sepak_bolas_id_tiket_sepak_bola_foreign` FOREIGN KEY (`id_tiket_sepak_bola`) REFERENCES `tiket_sepak_bolas` (`id`);

--
-- Constraints for table `tiket_futsals`
--
ALTER TABLE `tiket_futsals`
  ADD CONSTRAINT `tiket_futsals_id_jadwal_futsal_foreign` FOREIGN KEY (`id_jadwal_futsal`) REFERENCES `jadwal_futsals` (`id`);

--
-- Constraints for table `tiket_sepak_bolas`
--
ALTER TABLE `tiket_sepak_bolas`
  ADD CONSTRAINT `tiket_sepak_bolas_id_jadwal_sepak_bola_foreign` FOREIGN KEY (`id_jadwal_sepak_bola`) REFERENCES `jadwal_sepak_bolas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
