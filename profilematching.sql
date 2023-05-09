-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 05:36 PM
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
-- Database: `profilematching`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_nama` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kamar_tidur` varchar(4) NOT NULL,
  `kamar_mandi` varchar(4) NOT NULL,
  `lantai` varchar(4) NOT NULL,
  `luas_bangunan` varchar(5) NOT NULL,
  `luas_tanah` varchar(5) NOT NULL,
  `furniture` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_nama`, `nama_lengkap`, `umur`, `jenis_kelamin`, `kamar_tidur`, `kamar_mandi`, `lantai`, `luas_bangunan`, `luas_tanah`, `furniture`) VALUES
(1, 'Rite', '23', 'Perempuan', '3', '2', '1', '150', '170', 'Yes'),
(17, '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', ''),
(20, 'Eric', '23', 'Laki-Laki', '3', '2', '2', '200', '220', 'Yes'),
(21, 'Eric', '23', 'Laki-Laki', '3', '2', '2', '200', '220', 'Yes'),
(22, 'Eric', '23', 'Laki-Laki', '3', '2', '2', '200', '220', 'Yes'),
(23, 'Eric', '23', 'Laki-Laki', '3', '2', '2', '200', '220', 'Yes'),
(24, 'Eric', '23', 'Laki-Laki', '3', '2', '2', '200', '220', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id_rumah` int(11) NOT NULL,
  `kamar_tidur` varchar(2) NOT NULL,
  `kamar_mandi` varchar(3) NOT NULL,
  `lantai` varchar(2) NOT NULL,
  `luas_bangunan` varchar(5) NOT NULL,
  `luas_tanah` varchar(5) NOT NULL,
  `furniture` varchar(3) NOT NULL,
  `lokasi` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id_rumah`, `kamar_tidur`, `kamar_mandi`, `lantai`, `luas_bangunan`, `luas_tanah`, `furniture`, `lokasi`, `keterangan`) VALUES
(1, '3', '2', '2', '150', '170', 'yes', 'Kota Batam', 'SPGH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_rumah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
