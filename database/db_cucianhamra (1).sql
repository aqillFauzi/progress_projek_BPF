-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 02:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cucianhamra`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `Nama_karyawan` varchar(255) NOT NULL,
  `No_hp` varchar(30) NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `Nama_karyawan`, `No_hp`, `Alamat`) VALUES
(1, 'Arianto', '0812345678', 'Jl. Hang Jebat'),
(2, 'Riky', '0812345678', 'Jl. Hang Tuah '),
(10, 'satset', '13232', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `kebersihan` int(10) NOT NULL,
  `keramahan` int(10) NOT NULL,
  `ketelitian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `nama`, `pesan`, `kebersihan`, `keramahan`, `ketelitian`) VALUES
(1, 'tes', 'tes', 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `alamat`, `hp`) VALUES
(4, 'tes', 'tes', 'Tes', 'tes', '081910322466'),
(5, 'bayu', '$2y$10$bDNEuyevc2hYY6WdwUBLoOn928FbOkIRSOsCmkVLzbSyWYn1OCJtC', 'bayu', '123', '123'),
(6, 'aqil', '$2y$10$DIV.lVHKFQfQkuI.7hEb/uXoSywlVnuPg76QjNt..qcX5.TxQjj8q', 'Aqil Fauzi', 'Jl. Bambu Kuning', '081910322466'),
(9, 'rio', '$2y$10$MLAhXAiFOIdT0HafTM2RU.LV/cvFvS7ZFCJC1wRA5NL5j.FhdU0YC', 'Rio', 'tes', '12121');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor_plat` varchar(100) NOT NULL,
  `type_motor` int(11) NOT NULL,
  `tarif` int(100) NOT NULL,
  `karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `nomor_plat`, `type_motor`, `tarif`, `karyawan`) VALUES
(41, '2023-12-29', 'BM 3461 AAP', 2, 20000, 1),
(42, '2023-12-29', 'BM 3461 AAP', 2, 20000, 2),
(44, '2023-12-30', 'BM 3461 AAP', 1, 20000, 1),
(45, '2024-01-01', 'BA 1888 AJ', 1, 18000, 2),
(48, '2024-01-01', 'BA 18744  AV', 1, 18000, 2),
(49, '2024-01-01', 'BA 18744  AV', 1, 18000, 1),
(51, '2024-01-01', 'BA 1888 AJ', 3, 25000, 1),
(52, '2024-01-06', 'BM 3461 AAP', 1, 18000, 1),
(53, '2024-01-10', 'BA 1888 AJ', 3, 25000, 2),
(54, '2024-01-10', 'BA 1888 AJ', 1, 18000, 1),
(55, '2024-01-09', 'BM 3461 AAP', 1, 18000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_motor`
--

CREATE TABLE `type_motor` (
  `id` int(11) NOT NULL,
  `kategori_motor` varchar(100) NOT NULL,
  `tarif` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_motor`
--

INSERT INTO `type_motor` (`id`, `kategori_motor`, `tarif`) VALUES
(1, 'Kecil', 18000),
(2, 'Sedang', 21000),
(3, 'Besar', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan` (`karyawan`),
  ADD KEY `type_motor` (`type_motor`);

--
-- Indexes for table `type_motor`
--
ALTER TABLE `type_motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `type_motor`
--
ALTER TABLE `type_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `karyawan` FOREIGN KEY (`karyawan`) REFERENCES `karyawan` (`id`),
  ADD CONSTRAINT `type_motor` FOREIGN KEY (`type_motor`) REFERENCES `type_motor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
