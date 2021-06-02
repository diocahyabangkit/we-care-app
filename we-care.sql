-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2021 at 04:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `we-care`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'wecare123', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `id_user` int(125) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_pelapor` varchar(255) NOT NULL,
  `jns_kekerasan` varchar(500) NOT NULL,
  `deskrpisi` varchar(500) NOT NULL,
  `tgl_kejadian` int(11) NOT NULL,
  `bukti_kekerasan` varchar(255) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `id_user`, `nama`, `alamat`, `status_pelapor`, `jns_kekerasan`, `deskrpisi`, `tgl_kejadian`, `bukti_kekerasan`, `status`) VALUES
(1, 5, 'Dumy', 'Jogja', 'Korban', 'Kekerasan terhadap perempuan', 'terjadi pemukulan', 27052021, 'default.jpg', 'Ok'),
(2, 5, 'Dumy', 'Jogja', 'Korban', 'Kekerasan Perempun', 'Pemukulan', 30052021, 'default.jpg', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id-user` int(11) NOT NULL,
  `name-user` varchar(125) NOT NULL,
  `email-user` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no-hp` int(11) NOT NULL,
  `bagian` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id-user`, `name-user`, `email-user`, `password`, `alamat`, `no-hp`, `bagian`, `status`) VALUES
(6, 'dumy', 'dumy@dumy.com', '$2y$10$m1FhOSzu7OGZueF8lGbbi.kCKmfxoeVWBhybOPU/iZW/afOzLKml2', 'Kota Bekasi', 1290662, 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users-app`
--

CREATE TABLE `users-app` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no-kk` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users-app`
--

INSERT INTO `users-app` (`id`, `name`, `email`, `password`, `nik`, `no-kk`, `address`, `gender`, `foto`, `status`) VALUES
(1, 'Dumy_users', 'dumyUsers@dumy.com', '11111111', '123456789', '987654321', 'Bekasi, Bekasi timur', 'Laki - Laki', 'default.jpg', 'Active'),
(5, 'dumy', 'dumy@dumy.com', '11111111', '1223451', '32142321', 'Jogja', 'Perempuan', 'default.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id-user`);

--
-- Indexes for table `users-app`
--
ALTER TABLE `users-app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id-user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users-app`
--
ALTER TABLE `users-app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
