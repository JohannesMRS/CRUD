-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 05:27 AM
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
-- Database: `kelasmi3b`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadosen`
--

CREATE TABLE `datadosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `id` int(11) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datadosen`
--

INSERT INTO `datadosen` (`nip`, `nama`, `jk`, `id`, `Alamat`, `email`) VALUES
('24404440', 'Johannes', 'P', 26, 'Jogja', 'johannes@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nim`, `nama`, `jk`, `id`) VALUES
('2405102084', 'Janro', 'L', 32),
('2405102086', 'Johannes', 'L', 34),
('2405102087', 'Jo', 'P', 35),
('2405102081', 'JohannesCuy', 'P', 36),
('2405102080', 'Mar', 'L', 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadosen`
--
ALTER TABLE `datadosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadosen`
--
ALTER TABLE `datadosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
