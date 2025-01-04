-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 02:18 PM
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
-- Database: `tiket_dulu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gor`
--

CREATE TABLE `gor` (
  `id_gor` int(11) NOT NULL,
  `nama_gor` varchar(30) NOT NULL,
  `lokasi_gor` varchar(50) NOT NULL,
  `kapasitas_gor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_futsal`
--

CREATE TABLE `jadwal_futsal` (
  `id_jadwal_futsal` int(11) NOT NULL,
  `id_tim_home` int(11) NOT NULL,
  `id_tim_away` int(11) NOT NULL,
  `id_kompetisi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `id_gor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sepak_bola`
--

CREATE TABLE `jadwal_sepak_bola` (
  `id_jadwal_sepak_bola` int(11) NOT NULL,
  `id_tim_home` int(11) NOT NULL,
  `id_tim_away` int(11) NOT NULL,
  `id_kompetisi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `id_stadion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi`
--

CREATE TABLE `kompetisi` (
  `id_kompetisi` int(11) NOT NULL,
  `nama_kompetisi` varchar(30) NOT NULL,
  `tipe_kompetisi` varchar(30) NOT NULL,
  `musin_kompetisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_tiket_futsal`
--

CREATE TABLE `pesan_tiket_futsal` (
  `id_pesan_tiket_futsal` int(11) NOT NULL,
  `id_tiket_futsal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_pesan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_tiket_sepak_bola`
--

CREATE TABLE `pesan_tiket_sepak_bola` (
  `id_pesan_tiket_sepak_bola` int(11) NOT NULL,
  `id_tiket_sepak_bola` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_pesan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stadion`
--

CREATE TABLE `stadion` (
  `id_stadion` int(11) NOT NULL,
  `nama_stadion` varchar(30) NOT NULL,
  `lokasi_stadion` varchar(50) NOT NULL,
  `kapasitas_stadion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_futsal`
--

CREATE TABLE `tiket_futsal` (
  `id_tiket_futsal` int(11) NOT NULL,
  `id_jadwal_futsal` int(11) NOT NULL,
  `kategori_tiket` enum('Ekonomi','VIP','VVIP','') NOT NULL,
  `harga_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_sepak_bola`
--

CREATE TABLE `tiket_sepak_bola` (
  `id_tiket_sepak_bola` int(11) NOT NULL,
  `id_jadwal_sepak_bola` int(11) NOT NULL,
  `kategori_tiket` enum('Ekonomi','VIP','VVIP','') NOT NULL,
  `harga_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_away`
--

CREATE TABLE `tim_away` (
  `id_tim_away` int(11) NOT NULL,
  `nama_tim_away` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_home`
--

CREATE TABLE `tim_home` (
  `id_tim_home` int(11) NOT NULL,
  `nama_tim_home` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gor`
--
ALTER TABLE `gor`
  ADD PRIMARY KEY (`id_gor`),
  ADD UNIQUE KEY `nama_gor` (`nama_gor`);

--
-- Indexes for table `jadwal_futsal`
--
ALTER TABLE `jadwal_futsal`
  ADD PRIMARY KEY (`id_jadwal_futsal`),
  ADD KEY `id_tim_home` (`id_tim_home`),
  ADD KEY `id_tim_away` (`id_tim_away`),
  ADD KEY `id_kompetisi` (`id_kompetisi`),
  ADD KEY `id_gor` (`id_gor`);

--
-- Indexes for table `jadwal_sepak_bola`
--
ALTER TABLE `jadwal_sepak_bola`
  ADD PRIMARY KEY (`id_jadwal_sepak_bola`),
  ADD KEY `id_tim_home` (`id_tim_home`),
  ADD KEY `id_tim_away` (`id_tim_away`),
  ADD KEY `id_kompetisi` (`id_kompetisi`),
  ADD KEY `id_stadion` (`id_stadion`);

--
-- Indexes for table `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD PRIMARY KEY (`id_kompetisi`);

--
-- Indexes for table `pesan_tiket_futsal`
--
ALTER TABLE `pesan_tiket_futsal`
  ADD PRIMARY KEY (`id_pesan_tiket_futsal`),
  ADD KEY `id_tiket_futsal` (`id_tiket_futsal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesan_tiket_sepak_bola`
--
ALTER TABLE `pesan_tiket_sepak_bola`
  ADD PRIMARY KEY (`id_pesan_tiket_sepak_bola`),
  ADD KEY `id_tiket_sepak_bola` (`id_tiket_sepak_bola`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `stadion`
--
ALTER TABLE `stadion`
  ADD PRIMARY KEY (`id_stadion`),
  ADD UNIQUE KEY `nama_stadion` (`nama_stadion`);

--
-- Indexes for table `tiket_futsal`
--
ALTER TABLE `tiket_futsal`
  ADD PRIMARY KEY (`id_tiket_futsal`),
  ADD KEY `id_jadwal_futsal` (`id_jadwal_futsal`);

--
-- Indexes for table `tiket_sepak_bola`
--
ALTER TABLE `tiket_sepak_bola`
  ADD PRIMARY KEY (`id_tiket_sepak_bola`),
  ADD KEY `id_jadwal_sepak_bola` (`id_jadwal_sepak_bola`);

--
-- Indexes for table `tim_away`
--
ALTER TABLE `tim_away`
  ADD PRIMARY KEY (`id_tim_away`);

--
-- Indexes for table `tim_home`
--
ALTER TABLE `tim_home`
  ADD PRIMARY KEY (`id_tim_home`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gor`
--
ALTER TABLE `gor`
  MODIFY `id_gor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_futsal`
--
ALTER TABLE `jadwal_futsal`
  MODIFY `id_jadwal_futsal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_sepak_bola`
--
ALTER TABLE `jadwal_sepak_bola`
  MODIFY `id_jadwal_sepak_bola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetisi`
--
ALTER TABLE `kompetisi`
  MODIFY `id_kompetisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_tiket_futsal`
--
ALTER TABLE `pesan_tiket_futsal`
  MODIFY `id_pesan_tiket_futsal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_tiket_sepak_bola`
--
ALTER TABLE `pesan_tiket_sepak_bola`
  MODIFY `id_pesan_tiket_sepak_bola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stadion`
--
ALTER TABLE `stadion`
  MODIFY `id_stadion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket_futsal`
--
ALTER TABLE `tiket_futsal`
  MODIFY `id_tiket_futsal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket_sepak_bola`
--
ALTER TABLE `tiket_sepak_bola`
  MODIFY `id_tiket_sepak_bola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_away`
--
ALTER TABLE `tim_away`
  MODIFY `id_tim_away` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim_home`
--
ALTER TABLE `tim_home`
  MODIFY `id_tim_home` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_futsal`
--
ALTER TABLE `jadwal_futsal`
  ADD CONSTRAINT `jadwal_futsal_ibfk_1` FOREIGN KEY (`id_tim_home`) REFERENCES `tim_home` (`id_tim_home`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_futsal_ibfk_2` FOREIGN KEY (`id_tim_away`) REFERENCES `tim_away` (`id_tim_away`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_futsal_ibfk_3` FOREIGN KEY (`id_gor`) REFERENCES `gor` (`id_gor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_futsal_ibfk_4` FOREIGN KEY (`id_kompetisi`) REFERENCES `kompetisi` (`id_kompetisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_sepak_bola`
--
ALTER TABLE `jadwal_sepak_bola`
  ADD CONSTRAINT `jadwal_sepak_bola_ibfk_1` FOREIGN KEY (`id_stadion`) REFERENCES `stadion` (`id_stadion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_sepak_bola_ibfk_2` FOREIGN KEY (`id_tim_home`) REFERENCES `tim_home` (`id_tim_home`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_sepak_bola_ibfk_3` FOREIGN KEY (`id_tim_away`) REFERENCES `tim_away` (`id_tim_away`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_sepak_bola_ibfk_4` FOREIGN KEY (`id_kompetisi`) REFERENCES `kompetisi` (`id_kompetisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan_tiket_futsal`
--
ALTER TABLE `pesan_tiket_futsal`
  ADD CONSTRAINT `pesan_tiket_futsal_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan_tiket_sepak_bola`
--
ALTER TABLE `pesan_tiket_sepak_bola`
  ADD CONSTRAINT `pesan_tiket_sepak_bola_ibfk_1` FOREIGN KEY (`id_tiket_sepak_bola`) REFERENCES `tiket_sepak_bola` (`id_tiket_sepak_bola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_tiket_sepak_bola_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket_futsal`
--
ALTER TABLE `tiket_futsal`
  ADD CONSTRAINT `tiket_futsal_ibfk_1` FOREIGN KEY (`id_jadwal_futsal`) REFERENCES `jadwal_futsal` (`id_jadwal_futsal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_futsal_ibfk_2` FOREIGN KEY (`id_tiket_futsal`) REFERENCES `pesan_tiket_futsal` (`id_tiket_futsal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket_sepak_bola`
--
ALTER TABLE `tiket_sepak_bola`
  ADD CONSTRAINT `tiket_sepak_bola_ibfk_1` FOREIGN KEY (`id_jadwal_sepak_bola`) REFERENCES `jadwal_sepak_bola` (`id_jadwal_sepak_bola`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
