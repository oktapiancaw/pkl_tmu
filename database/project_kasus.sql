-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 06:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jurursan`
--

CREATE TABLE `data_jurursan` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(3) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kelompok`
--

CREATE TABLE `data_kelompok` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  `angkatan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_nama_kelompok`
--

CREATE TABLE `data_nama_kelompok` (
  `id` int(10) NOT NULL,
  `id_data_kelompok` int(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlpn` varchar(13) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `jenis_kelamin` smallint(6) NOT NULL COMMENT '1. Pria, 2. Wanita'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_tlpn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jurursan`
--
ALTER TABLE `data_jurursan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelompok`
--
ALTER TABLE `data_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_nama_kelompok`
--
ALTER TABLE `data_nama_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jurursan`
--
ALTER TABLE `data_jurursan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kelompok`
--
ALTER TABLE `data_kelompok`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_nama_kelompok`
--
ALTER TABLE `data_nama_kelompok`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
