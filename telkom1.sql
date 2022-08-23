-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakabel`
--

CREATE TABLE `datakabel` (
  `id_data` int(11) NOT NULL,
  `no_port` int(25) NOT NULL,
  `valuekbl` int(255) NOT NULL,
  `panjangkbl` int(255) NOT NULL,
  `tipekbl` varchar(25) NOT NULL,
  `merkkbl` varchar(25) NOT NULL,
  `total_loss` varchar(255) NOT NULL,
  `tempat` varchar(25) CHARACTER SET latin1 NOT NULL,
  `ruaskbl` varchar(25) NOT NULL,
  `titik_bending` varchar(25) NOT NULL,
  `lokasi_bending` varchar(25) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `statuscore` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakabel`
--

INSERT INTO `datakabel` (`id_data`, `no_port`, `valuekbl`, `panjangkbl`, `tipekbl`, `merkkbl`, `total_loss`, `tempat`, `ruaskbl`, `titik_bending`, `lokasi_bending`, `tanggal`, `statuscore`) VALUES
(22, 19, 48, 43, 'G655', 'BICC BERCA NDS. C-LT 48/4', '14.574', 'Sampit - Samuda', 'Samuda', '1', '29,557', '2022-08-19 08:34:37', 'Idle'),
(23, 1, 24, 65, 'G655', 'BICC BERCA NDS C D-LT 24/', '23.260', 'Sampit - Parit', 'Parit', '1', '9,652', '2022-08-19 08:36:53', 'Idle'),
(30, 18, 36, 72, 'G655', 'BICC BERCA NDS. C-LT 36/6', '19.475', 'Sampit - S Bangkal', 'Simpang Bangkal', '0', '0', '2022-08-20 07:59:41', 'Idle');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id_tempat` int(11) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `kodetempat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id_tempat`, `tempat`, `kodetempat`) VALUES
(5, 'Sampit - Samuda', 'PLC-004707'),
(6, 'Sampit - S Bangkal', 'PLC-004718'),
(7, 'Sampit - Parit', 'PLC-004727'),
(8, 'Samuda - Sampit', 'PLC-004739'),
(9, 'S Bangkal - Sampit', 'PLC-004756'),
(10, 'Parit - Sampit', 'PLC-004805');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakabel`
--
ALTER TABLE `datakabel`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakabel`
--
ALTER TABLE `datakabel`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
