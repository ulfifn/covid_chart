-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 04:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `jumlah_PP` int(11) NOT NULL,
  `jumlah_ODP` int(11) NOT NULL,
  `jumlah_PDP` int(11) NOT NULL,
  `jumlah_positif` int(11) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_kecamatan`, `nama_kecamatan`, `jumlah_PP`, `jumlah_ODP`, `jumlah_PDP`, `jumlah_positif`, `tanggal_update`) VALUES
(1, 'Kedung', 857, 192, 21, 41, '2020-06-25'),
(2, 'Pecangaan', 1050, 52, 11, 27, '2020-06-25'),
(3, 'Kalinyamatan', 259, 20, 10, 10, '2020-06-25'),
(4, 'Welahan', 1401, 57, 16, 30, '2020-06-25'),
(5, 'Mayong', 977, 64, 14, 9, '2020-06-25'),
(6, 'Nalumsari', 1703, 65, 11, 10, '2020-06-25'),
(7, 'Batealit', 574, 45, 7, 26, '2020-06-25'),
(8, 'Tahunan', 714, 36, 8, 14, '2020-06-25'),
(9, 'Jepara', 1356, 44, 15, 35, '2020-06-25'),
(10, 'Mlonggo', 1436, 53, 15, 11, '2020-06-25'),
(11, 'Bangsri', 2015, 47, 9, 15, '2020-06-25'),
(12, 'Keling', 1393, 138, 9, 1, '2020-06-25'),
(13, 'Karimunjawa', 313, 1, 0, 0, '2020-06-25'),
(14, 'Kembang', 2178, 18, 6, 5, '2020-06-25'),
(15, 'Donorojo', 1752, 42, 5, 0, '2020-06-25'),
(16, 'Pakisaji', 564, 59, 0, 7, '2020-06-25'),
(17, 'Luar Daerah', 0, 6, 14, 20, '2020-06-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
